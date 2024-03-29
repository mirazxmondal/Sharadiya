<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../styles/register.css" />
    <title>Sign up</title>
    <link
      rel="shortcut icon"
      href="../images/./favicon.png"
      type="image/x-icon"
      sizes="16x16 32x32"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <style>
      a {
        position: sticky !important;
      }
    </style>
  </head>
  <body>
    <div class="center">
      <div class="main-container">
        <div class="image-successful">
          <a href="./services-page.php">
            <img
              src="../images/button-back.png"
              alt="button-back"
              id="button-back"
            />
          </a>
          <img
            src="../images/thankyou.gif"
            alt="Thank you for registering!"
            id="thankyou-gif"
          />
        </div>
        <br />

        <div class="message">
          <p class="pmessage">
            Congratulations service has been successfully listed.
          </p>
          <br /><br /><br />
          <a href="../PHP/main-services.php"
            ><button class="backtohome">SERVICES</button>
          </a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="../PHP/logout.php"
            ><button class="backtohome">LOG OUT</button></a
          >
        </div>
      </div>
    </div>
    <script src="Assets/scripts/main.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
