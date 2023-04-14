<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
</head>

<body>
  <h1>Bästa gruppens vackra hemsida</h1>
  <h2>
    Välkommen
    <?php
    session_start();
    if (isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"]) {
      echo $_SESSION["loggedInMember"]["first_name"];
    }
    ?>
  </h2>
  <div class="navbar">
    <div class="navbar-left">
      <nav class="main-menu">
        <ul class="nav-list">
          <li class="nav-item">
            <a href="index.php" class="nav-item-link active">Min sida</a>
          </li>
          <li class="nav-item">
            <a href="booking.html" class="nav-item-link">Bokning</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="navbar-right">
      <span class="button"><a href="login.html" class="button-link">Logga in</a>
      </span>

    </div>
  </div>
  <!-- <script src="script.js"></script> -->
</body>

</html>