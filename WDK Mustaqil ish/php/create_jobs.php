<?php

    $name = $_REQUEST['name'];
    $jobs_name = $_REQUEST['jobs_name'];
    $jobs = $_REQUEST['jobs'];
    $money = $_REQUEST['money'];
    $description = $_REQUEST['description'];

    $db = mysqli_connect('localhost', 'root', '', 'rav');

    $sql = "INSERT INTO create_jobs(name, jobs_name, jobs, money, description)
    VALUES ('$name', '$jobs_name', '$jobs', '$money', '$description')";

    if($db->query($sql) === TRUE) {
        header('Location:../html/main.php');
    }
    else {
        header('Location:../html/second.html');
    }
?>