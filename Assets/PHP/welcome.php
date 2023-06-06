<?php
require 'connect.php';
require 'connect-session.php';

?>

<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../styles/./welcome.css">
  <title>Sharadiya</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link rel="shortcut icon" href="../images/./favicon.png" type="image/x-icon" sizes="16x16 32x32">
</head>

<body id="body">

  <!-- Banner/Hero -->
  <nav class="navbar navbar-expand-lg nav_design">
    <div class="container-fluid">
      <a class="navbar-brand" href="./welcome.php">Sharadiya</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="./welcome.php">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="./upload-page.php">Upload</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="./services-page.php">Services</a>
          </li>
          <li class="nav-item mx-2">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <a href="../PHP/./logout.php" class="log" style="text-decoration: none; color: white">Log out</a>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main -->
  <h3>নমস্কার, <?php echo ($_SESSION["FIEM"]["name"]); ?></h3>
  <Main>
    <div class="main-container">
      <div class="upload">
        <img src="../images/welcome-page/upload.png" alt="upload" id="thumbnail">
        <p>Check out our latest content upload! Dive into a world of knowledge, entertainment, and inspiration. From informative articles to captivating videos, there's something for everyone. Don't miss out on this enriching experience. Explore, learn, and be inspired today!</p>
        <a href="./upload-page.php">
          <button id="bottone1"><strong>Publish Content</strong></button>
        </a>
      </div>
      <div class="jobs">
        <img src="../images/welcome-page/job.png" alt="upload" id="thumbnail">
        <p>If your are someone looking for exceptional talent to join your team. If you're passionate about making a difference and thrive in a fast-paced environment. Publish and embark on an exciting journey where an individual can make a meaningful impact. Publish today!</p>
        <a href="./services-page.php">
          <button id="bottone1"><strong>Publish Position</strong></button>
        </a>
      </div>
    </div>
  </Main>

  <script src=".././scripts/./main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>