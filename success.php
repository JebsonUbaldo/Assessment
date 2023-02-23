<?php
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    header('Location: success.php');
    exit;
?>