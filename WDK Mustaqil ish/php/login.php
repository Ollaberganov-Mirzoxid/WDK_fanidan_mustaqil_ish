<?php
include 'conn.php';
if (isset($_REQUEST['submit'])) 
{
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $query = mysqli_query($db, "SELECT * FROM data WHERE email = '$email' AND password = '$password'");
    $rowCount = mysqli_num_rows($query);

    if ($rowCount > 0 ) {

        $rt = mysqli_fetch_assoc($query);
        $userId = $rt['id'];

        $_SESSION['loggedinId'] = $userId;
        header('location:../html/main.html');
    }
    else {
        $_SESSION['errorMsg'] = "Login yoki parol noto'g'ri";
        header('location:../html/index.php');
    }
}
?>