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
  <!-- Contact form validering -->
  <?php
$name = filter_input(INPUT_POST, 'name');

$quest = filter_input(INPUT_POST, 'quest');

$mail = filter_input(INPUT_POST, 'mail'); 
 

if(empty($name)){
    $name_error ="Please write your name";
}

if(empty($quest)){
        $quest_error ="Please write a question";
    }

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $mail_error ="Please write correct email address";
    }

    if (empty($name_error) && empty($quest_error) && empty($mail_error)){
        echo '<script type="text/javascript">';
        echo ' alert("Question has been submitted")';
        echo '</script>';
    } 

?>


  <div class="body"> </div>
  <div class="container justify-content-center">

    <form action="contact.php" method="POST">
      <!-- Navn -->
      <label for="">Name: </label><input type="text" name="name" value="<?php echo htmlspecialchars($username) ?>"
        class="form-control">
      <?php if(isset($name_error)) { ?>
      <p class="fail"> <?php echo $name_error ?></p>
      <?php } ?> <br> <br>

      <!-- spørgsmål -->
      <label for="">Question:</label><input type="text" name="quest" class="form-control">
      <?php if(isset($quest_error)) { ?>
      <p class="fail"><?php echo $quest_error ?></p>
      <?php } ?> <br> <br>

      <!-- Email -->
      <label for="">Email</label><input type="text" name="mail" class="form-control">
      <?php if(isset($mail_error)) { ?>
      <p class="fail"><?php echo $mail_error?></p>
      <?php } ?> <br> <br>
      <input type="submit" value="LOGIN">
    </form>
  </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>
</div>
</body>

</html>