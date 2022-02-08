<?php
include('connect.php');

if (isset($_POST["updatedata"])) {
    $firstname = $mysql->real_escape_string($_POST['firstname']);
    $lastname = $mysql->real_escape_string($_POST['lastname']);
    $email = $mysql->real_escape_string($_POST['email']);
    $contact = $mysql->real_escape_string($_POST['phonenumber']);
    $id = $mysql->real_escape_string($_POST['update_id']);

    $editUser = "UPDATE editusers SET firstname='$firstname' , lastname='$lastname' , email='$email', contact='$contact' WHERE id=$id";

    if ($mysql->query($editUser)) {
        echo "Row inserted $mysql->affected_rows ";
    } else {
        echo "Error: .$editUser . $mysql->error ";
    }

    $mysql->close();
    header("Location: http://localhost/registration-part1/?id=userstudents");
    exit();
}
