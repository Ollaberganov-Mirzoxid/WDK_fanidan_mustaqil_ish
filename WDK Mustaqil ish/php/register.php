<?php
include 'conn.php';

if(isset($_REQUEST['submit']))
{
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $t_number = $_REQUEST['t_number'];
    $password = $_REQUEST['password'];

    
    $getData = mysqli_query($db, "SELECT * FROM data WHERE email = '$email'");
    $rowCount = mysqli_num_rows($getData);
    if ($rowCount!=0)
    {
        header('location:../html/sign_up.php');
        $_SESSION['errorMsg'] = "Bunday Login bilan ro'yxatdan o'tilgan";
    }

    else if($rowCount == 0)
    {
        $query = mysqli_query($db, "INSERT into data (name, email, t_number, password) VALUES ('$name', '$email', '$t_number', '$password')");

        header('Location:../html/main.html');
    }
}
?>