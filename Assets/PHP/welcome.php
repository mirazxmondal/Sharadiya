<?php
require 'connect.php';
require 'connect-session.php';
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../styles/welcome-php.css"/>
    <title>Sharadiya</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"/>
    <link rel="shortcut icon" href="../images/./favicon.png" type="image/x-icon" sizes="16x16 32x32">  
  </head>
  <body id="body">

    <!-- ==Navbar=== -->
    <section class="header">
      <!-- Banner/Hero -->
      <div class="hero">
        <nav class="navbar navbar-expand-lg nav_design">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"> Sharadiya</a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-2">
                  <a class="nav-link active" aria-current="page" href="../../index.html" target="_blank">Home</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="../../about.html" target="_blank">About</a>
                </li>
                <li class="nav-item mx-2">
                  <!-- <a href="login.html"><button class="btn btn-danger">Login</button></a> -->
                  <!-- Button trigger modal -->
                  <button
                    type="button"
                    class="btn btn-danger"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                  >
                  <a href="../PHP/./logout.php" class="log" style="text-decoration: none; color: white">Log out</a>
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <h1>Welcome!</h1>
        <h1 style="display:inline;">
         <?php echo($_SESSION['FIEM']['name']);?> 
        </h1>

    <script src="#"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

