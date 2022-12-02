  <?php
  session_start();
  require '../config/connector.php';

  $query = "SELECT * FROM showroom_fhina_table";
  $result = mysqli_query($connector, $query);
  $query = "SELECT * FROM user_fhina";
  $login = mysqli_query($connector, $query);
  $data = mysqli_fetch_assoc($login);


  ?>

  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Fhina_1202202075</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
      <?php include '../asset/style/style.css'; ?>
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container">
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNavAltMarkup">
          <div class="navbar-nav gap-3">
            <a class="nav-link" style="color: white;" href="./After-Fhina.php">Home</a>
            <a class="nav-link" href="<?php (mysqli_num_rows($result) > 0) ? print "../pages/List-Fhina.php" : print "../pages/Add-Fhina.php" ?>">MyCar</a>
          </div>
          <div class="d-flex gap-4">
            <a href="Add-Fatih.php" style="background-color: white; color:blue; border-radius: 5px; text-decoration: none; width: 110px; height: 35px; display:flex; justify-content:center; align-items:center; font-weight:500;">Add Car</a>
            <div class="dropdown">
              <button class="btn dropdown-toggle" style="background-color:  white; color:blue; border-radius: 5px; text-decoration: none; width: 110px; height: 35px; display:flex; justify-content:center; align-items:center; font-weight:500;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $data['nama']; ?>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" style="border-radius: 5px; color:black; text-decoration: none;" href="./Profile-Fhina.php">Profile</a></li>
                <li><a class="dropdown-item" style="border-radius: 5px; color:black; text-decoration: none;" href="../config/logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- foto -->
    <section id="home">
      <div class="container">
        <div class="d-flex gap-5 bungkus justify-content-center align-items-center">
          <div>
            <h1>Selamat Datang Di<br /> Show Room Fhina</h1>
            <p class="mt-3">Showroom kami memberikan experience terbaik di Indonesia<br /> dan memiliki mobil terbaik bagi anda.</p>
            <a href="<?php (mysqli_num_rows($result) > 0) ? print "./List-Fhina.php" : print "./Add-Fhina.php" ?>" class="button btn-primary">MyCar</a>
            <div class="d-flex align-items-center gap-5 mt-5">
              <img src="<?php echo "../asset/images/logo-ead.png" ?>" alt="logoead" style="width:100px;">
              <p style="margin-top: 20px; font-size:14px;">Fhina_1202202075</p>
            </div>
          </div>
          <img src="<?php echo "../asset/images/depan.jpg" ?>" alt="foto">
        </div>
      </div>
    </section>
    <!-- End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>

  </html>