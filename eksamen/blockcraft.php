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
  <script src="responsive4.js" defer></script>
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

</head>

<body>
  <div class="body">
    <div clas="container jystify-content-center ">

    <!-- Title -->  
    <center>
        <div class="display">
          <h1 class="blockcraft">BLOCKCRAFT</h1>
          <h1>Diamonds: <span id="score"></span> - Steps: <span id="steps"></span></h1>
        </div>
        <canvas width="1000" height="1000"></canvas>
    </div>

    <!-- Introduktion -->
    <div class="container">
      <div class="row">
        <h1>How to play:</h1> <br>
        <p>Collect as many diamonds as quick as possible and use the portal to escape. But lookout for the lava</p> <br>
        <p>When done, you can choose to submit your score below</p> <br>
        <p>Use The arrow keys to move around</p>
        </center>


      <!-- Score submit form -->
        <div class="container">
          <div class="row justify-content-center">

            <?php require_once 'connection.php';?>

            <h1>Insert score:</h1>
            <form action="blockcraft.php" method="POST">

              <label for="">Name</label>
              <input placeholder="Username" type="text" name="username" class="form-control" value="">

              <label for="">Diamonds</label>
              <input placeholder="Diamonds" type="text" name="diamonds" class="form-control" value="">

              <label for="">Steps</label>
              <input placeholder="Steps" type="text" name="steps" class="form-control" value="">

              <button onclick="TypeScore()" type="Submit" name="save">Submit</button>

          </div>
        </div>
        </form>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>