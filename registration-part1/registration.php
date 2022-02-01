<?php
session_start();
include('hlavicka.php');
include('navigacia.php');
vypisNavigaciu("nic");
include('prihlasenie.php');
include('connect.php');

if (isset($_POST["submit"]) && !empty($_POST["submit"])) {
    $meno = $mysql->real_escape_string($_POST['username']);
    $heslo = $mysql->real_escape_string($_POST['password']);
    $hesloCheck = $mysql->real_escape_string($_POST['check_password']);
    $firstname = $mysql->real_escape_string($_POST['firstname']);
    $lastname = $mysql->real_escape_string($_POST['lastname']);
    $email = $mysql->real_escape_string($_POST['email']);
    $contact = $mysql->real_escape_string($_POST['contact']);
    $crypt_pass = "";

    if (isset($_POST['username']) && isset($_POST['password'])) {

        $check_Database = "SELECT * FROM editusers WHERE username='$meno' LIMIT 1";

        $result = $mysql->query($check_Database);
        $user = mysqli_fetch_assoc($result);
        if ($user) { // kontrola užívateľského mena
            if ($user['username'] === $meno) { ?>
                <div class="alert alert-danger alert-dismissible" style="margin-top:20px">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Užívateľ je už registrovaný
                </div><?php
                    }
                } else {

                    if (strlen($heslo) < 7) { ?>
                <div class="alert alert-info alert-dismissible" style="margin-top:20px">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Krátke heslo zadajte aspoň 7 písmen
                </div><?php
                    } else {
                        if ($heslo != $hesloCheck) { ?>
                    <div class="alert alert-danger alert-dismissible" style="margin-top:20px">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        Hesla sa nezhodujú
                    </div> <?php
                        } else {
                            $crypt_Pass = password_hash($heslo, PASSWORD_BCRYPT);

                            $insertNewUser = "INSERT INTO editusers(username, firstname, lastname, email , contact, active, password ) 
                            VALUES ('$meno',  '$firstname',  '$lastname' ,  '$email' ,  '$contact' , '1' , '$crypt_Pass' );";

                            if ($mysql->query($insertNewUser)) {
                                echo "Row inserted $mysql->affected_rows ";
                            } else {
                                echo "Error: .$insertNewUser . $mysql->error ";
                            }

                            $mysql->close();

                            header('Location: login.php');
                            exit();
                        }
                    }
                }
            }
        }

                            ?>


<div class="container" style="width: 600px; margin-top: 100px;">
    <form class="form-signin" action="registration.php" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Registrujte sa, prosím!</h1>

        <label for="username" class="sr-only">Login</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username" style="margin-top:6px">
        <div class="row">
            <div class="col-12 col-md-6">
                <label for="firstname" class="sr-only">First name</label>
                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter First name" style="margin-top:6px">
            </div>
            <div class="col-12 col-md-6">
                <label for="lastname" class="sr-only">Last name</label>
                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter Last name" style="margin-top:6px">
            </div>
        </div>
        <label for="email" class="sr-only">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter e-mail" style="margin-top:6px">

        <label for="contact" class="sr-only">Contact</label>
        <input type="number" name="contact" id="contact" class="form-control" placeholder="Enter contact" style="margin-top:6px">
        <div class="row">
            <div class="col-12 col-md-6">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Heslo" style="margin-top:6px">
            </div>
            <div class="col-12 col-md-6">
                <label for="check_password" class="sr-only">Check Password</label>
                <input type="password" name="check_password" id="check_password" class="form-control" placeholder="Overenie Hesla" style="margin-top:6px">
            </div>
        </div>
        <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" style="margin-top:6px" value="Registrovať">
        <p style="margin-top:10px">
            Ste už registrovaný? <a href="login.php">Prihláste sa</a>
        </p>
        <br>
    </form>
</div>

<?php
include('pata.php');
?>