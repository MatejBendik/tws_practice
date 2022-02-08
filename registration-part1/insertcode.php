<?php

include('connect.php');

if (isset($_POST['insertdata'])) {

    $popUsername = $mysql->real_escape_string($_POST['username']);
    $popFirstname = $mysql->real_escape_string($_POST['firstname']);
    $popLastname = $mysql->real_escape_string($_POST['lastname']);
    $popEmail = $mysql->real_escape_string($_POST['email']);
    $popPhonenumber = $mysql->real_escape_string($_POST['phonenumber']);
    $popPassword = $mysql->real_escape_string($_POST['password']);

    if (isset($_POST['username']) && isset($_POST['password'])) {

        $check_Database = "SELECT * FROM editusers WHERE username='$popUsername' LIMIT 1";

        $result = $mysql->query($check_Database);
        $user = mysqli_fetch_assoc($result);
        if ($user) { // kontrola užívateľského mena
            if ($user['username'] === $popUsername) { ?>
                <div class="alert alert-danger alert-dismissible" style="margin-top:20px">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Užívateľ je už registrovaný
                </div><?php
                    }
                } else {

                    if (strlen($popPassword) < 7) { ?>
                <div class="alert alert-info alert-dismissible" style="margin-top:20px">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Krátke heslo zadajte aspoň 7 písmen
                </div><?php
                    } else {
                        $crypt_Pass = password_hash($popPassword, PASSWORD_BCRYPT);

                        $insertNewUser = "INSERT INTO editusers(username, firstname, lastname, email , contact, active, password ) 
                            VALUES ('$popUsername',  '$popFirstname',  '$popLastname' ,  '$popEmail' ,  '$popPhonenumber' , '1' , '$crypt_Pass' );";

                        if ($mysql->query($insertNewUser)) {
                            header("Location: http://localhost/registration-part1/?id=userstudents");
                        } else {
                            echo "Error: .$insertNewUser . $mysql->error ";
                        }

                        $mysql->close();
                        exit();
                    }
                }
            }
        }
