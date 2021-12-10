<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  <script src="main5.js" defer></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Press+Start+2P&display=swap" rel="stylesheet">
  <title>Document</title>
  <nav class="navbar navbar-expand-lg navbar-light bg">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php"><img src="img/logoeksamen.png" alt="" height="35px"
          class="d-inline-block align-text-top"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <li class="nav-item">
          <a class="nav-link" href="games.php">Games</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="leaderboard.php">Scores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Log Out</a>
        </li>
        </li>
      </div>
    </div>
  </nav>

<body>
  <div class="container">
    <!-- Introduktion til side -->
    <center><img src="img/logoeksamen.png" alt="" class="responsive">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h1 class="card-title">WELCOME <?php echo $username?>!</h1>
          <p class="card-text">Welcome to my site. Here you can play games. And most importantly, have fun</p>
          <a href="games.php" class="btn btn-primary">Games</a> <a href="leaderboard.php"
            class="btn btn-primary">Scores</a>
        </div>
      </div>

  </div>
  </center>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>