<?php
include ('../php/conn.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css" />
  </head>
  <body>
    <div class="container">
      <div class="main-container">
        <form action="../php/register.php" method="post">
          <p class="login-title">Ro'yxatdan o'tish</p>
                          <!--Php backend code Ro'yxatdan o'tish vaqidagi xatolik yoki to'g'ri bajarilgani uchun-->
                          <?php
                          if(isset($_SESSION['successMsg']))
                          {
                      ?>
                          <p class="Msg" style="color:green"><?php echo $_SESSION['successMsg']; ?></p>
                      <?php
                              unset($_SESSION['successMsg']);
                          }
                          if(isset($_SESSION['errorMsg']))
                          {
                      ?>
                              <p class="Msg" style="color:red"><?php echo $_SESSION['errorMsg']; ?></p>
                      <?php
                              unset($_SESSION['errorMsg']);
                          }
                      ?>
  
                      

          <div class="inputs">
            <input name="name" type="text" placeholder="Ism familya" />
            <input name="email" type="email" placeholder="Email" />
            <inpup name="t_number" type="text" placeholder="Telefon" />
            <input name="password" type="password" placeholder="Parol" />
          </div>
          <button class="submit-btn" name="submit" >Submit</button>
          <a href="index.php" class="btn-bottom-title">
            <p class="btn-bottom-title-p">Tizimga kirish!</p>
          </a>
        </form>
      </div>
    </div>
  </body>
</html>
