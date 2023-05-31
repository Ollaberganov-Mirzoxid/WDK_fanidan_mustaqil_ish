<?php

include ('../php/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tizimga Kirish</title>
    <link rel="stylesheet" href="../css/login.css" />
  </head>
  <body>
    <div class="container">
      <div class="main-container">
        <form action="../php/login.php" method="post">
          <p class="login-title">Tizimga kirish</p>
                          <!--Php backend code Login qilib kirish vaqidagi xatolik yoki to'g'ri bajarilgani uchun-->
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
            <input name="email" type="email" placeholder="Email" required />
            <input name="password" type="password" placeholder="Parol" required />
          </div>
          <button class="submit-btn" name="submit">Submit</button>
          <a href="sign_up.php" class="btn-bottom-title"
            ><p class="btn-bottom-title-p">
              Ro'yxatdan o'tish!
            </p></a
          >
        </form>
      </div>
    </div>
  </body>
</html>
