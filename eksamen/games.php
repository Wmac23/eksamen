<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  <script src="main5.js" defer></script>
  <script src="alert.js" defer></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Press+Start+2P&display=swap" rel="stylesheet">
  <title>Document</title>
  <nav class="navbar navbar-expand-lg navbar-light bg">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php"><img src="img/logoeksamen.png" alt="" height="35px"></a>
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
</head>
<body>
  <div class="body">

    <h1>Select a Game:</h1>
    <br>
    <div class="container-fluid">
      <div class="row">
      <!--Blockcraft -->
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/player.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Blockcraft</h5>
            <p class="card-text">Collect as many diamonds as you can and as quick as possible. But lookout for the lava.
            </p>
            <a href="blockcraft.php" class="btn btn-primary">Play</a>
          </div>
        </div>
        <!--Snacman  -->
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/snackman.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Snacman</h5>
            <p class="card-text">Eat all the different snacks on the map, but look out for the ghosts as well.</p>
            <a href="" class="btn btn-primary" onclick="NotReady()">Coming soon</a>
          </div>
        </div>
        <!-- Superb Mario -->
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/SuperbMario.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Superb Mario</h5>
            <p class="card-text">Free the princess from the castle. </p>
            <a href="" class="btn btn-primary" onclick="NotReady()"> Coming Soon</a>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>