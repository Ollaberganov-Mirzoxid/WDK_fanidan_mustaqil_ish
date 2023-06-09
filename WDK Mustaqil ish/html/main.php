<?php
include '../php/conn.php';

$getData = mysqli_query($db, "SELECT * FROM create_jobs");
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Asosiy sahifa</title>
    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/index.css" />
  </head>
  <body>
    <div class="navbar-section">
      <div class="navbar-left">
        <div class="logo">
          <a href="main.php">
            <div class="logo-image">
              <img
                src="../img/logo.png"
                alt="logo image"
              />
            </div>
            <div class="logo-title">
              <p>RAV</p>
            </div>
          </a>
        </div>
        <div class="sidebar-menu">
          <a href="main.php"><p class="sidebar-item">Bosh sahifa</p></a>
          <a href="second.html"><p class="sidebar-item">Ish qo'shish</p></a>
          <a href="three.html"
            ><p class="sidebar-item sidebar-item-bottom">Yordam</p></a
          >
        </div>
      </div>
      <div class="navbar-top">
        <div class="navbar-div-end">
          <a href="#">
            <div class="navbar-end-title">
              <p class="navbar-end-title-lastname">Ollaberganov</p>
              <p class="navbar-end-title-lastname">Mirzohid</p>
            </div>
            <div class="navbar-end-image">
              <img
                src="../img/profile.png"
                alt="user image"
              />
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="main-section">
      <?php
        while($row = mysqli_fetch_assoc($getData))
        {
      ?> 
        <div class="main-container">
          <div class="main-contents">
            <div class="main-image">
              <div class="w3-content w3-section" style="max-width: 400px">
                <img class="" src="../img/logo.png" style="width: 200px" />
              </div>
            </div>
            <div class="main-titles">
              <div class="main-title1">
                <div class="main-title1-title">
                  <h2>Ish nomi: <?php echo $row['jobs_name']?></h2>
                  <h3>Ish holati: <?php echo $row['jobs']?></h3>
                  <h3>Ish haqi: <?php echo $row['money']?></h3>
                </div>
                <div class="main-title2">
                  <div class="main-title2-title">
                    <h2>Ish haqida qisqacha</h2>
                    <h4><?php echo $row['description']?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
        }
      ?>
    </div>
    <script>
      var myIndex = 0;
      carousel();

      function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
          myIndex = 1;
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
      }
    </script>
  </body>
</html>
