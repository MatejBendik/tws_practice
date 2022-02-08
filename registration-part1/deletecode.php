<?php

include('connect.php');

if (isset($_POST['deletedata'])) {
    $userId = $_POST['delete_id'];

    $deleteSql = "DELETE FROM editusers WHERE id=$userId";

    if ($mysql->query($deleteSql) === TRUE) {
        header("Location: http://localhost/registration-part1/?id=userstudents");
    } else {
        echo "Error: . $mysql->error ";
    }

    $mysql->close();
    exit();
}
