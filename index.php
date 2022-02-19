<?php
include("config.php");
$nama_cookie = "Aplikasi Daftar Teman";
setcookie($nama_cookie);
session_start();

if (empty($_SESSION['username'])){

  header('location:./login.php');
}
else
{
  ?>

  <!DOCTYPE html>

  <html>

  <head>

    <title>Beranda</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="style.css">

    <?php include("include/css.php"); ?>

  </head>

  <body>

    <header>

      <?php include("include/header.php"); ?>

    </header>

          <div class="jumbotron">

            <center>
              <h1 class="display-4">Aplikasi Daftar Teman</h1>
              <?php
              if (!empty($_COOKIE[$nama_cookie])){
                echo "<h1>'" . $nama_cookie . "'</h1>";
              }
              ?>

              <p class="lead">Halo <span class="badge badge-success"><?= $_SESSION['username']; ?></span>, Ini adalah aplikasi untuk mencatat data teman saya.</p>

              <p>

                <a class='btn btn-primary' href='teman.php'>Data Teman Saya</a>

              </center>

            </div>

          </div>

        </div>

      </div>

    </body>

    <?php include("include/js.php"); ?>

    </html>

    <?php
  }
  ?>