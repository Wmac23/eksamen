<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Press+Start+2P&display=swap"
        rel="stylesheet">
    <title>Leaderboard</title>
    <nav class="navbar navbar-expand-lg navbar-light bg">
        <div class="container-fluid"><a class="navbar-brand" href="home.php"><img src="img/logoeksamen.png" alt=""
                    height="35px"></a><button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <li class="nav-item"><a class="nav-link" href="games.php">Games</a></li>
                <li class="nav-item"><a class="nav-link" href="leaderboard.php">Scores</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact us</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php">Log Out</a></li>
                </li>
            </div>
        </div>
    </nav>
</head>

<body>
    <div class="body">
        <div class="container leaderboard">
            <div class="row">
                <table>
                    <h1 class="blockcraft">BLOCKCRAFT:</h1>
<?php //connect til database
$conn=new mysqli("wimac.dk.mysql", "wimac_dkgamesite", "123456789", "wimac_dkgamesite");

?><?php $sql="select * from bCraft  ORDER BY diamonds DESC LIMIT 10";
$result=$conn->query($sql);

echo '<table border="5" cellpadding="5">';
echo "<tr>";
echo "<th>Username</th>";
echo "<th>Diamonds</th>";
echo "<th>Steps</th>";
echo "</tr>";

//Få fat i dataen hvis der er noget
if($result->num_rows > 0) {
    while($row=$result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>". $row['username'] . "</td>";
        echo "<td>". $row['diamonds'] . "</td>";
        echo "<td>". $row['steps'] . "</td>";
        echo "</tr>";
    }
}

echo "</table>";

?><?php $conn->close();
?>
                </table>
                <table>
                    <h1 class="blockcraft">Snacman</h1>
                    <?php //connect til database
$conn=new mysqli("wimac.dk.mysql", "wimac_dkgamesite", "123456789", "wimac_dkgamesite");?>
                    <h3>(Coming Soon!)</h3><?php $sql="select * from sMan";
$result=$conn->query($sql);

echo '<table border="5" cellpadding="5">';
echo "<tr>";
echo "<th>Name</th>";
echo "<th>points</th>";
echo "<th>Time</th>";
echo "</tr>";

//Få fat i dataen hvis der er noget
if($result->num_rows > 0) {
    while($row=$result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>". $row['username'] . "</td>";
        echo "<td>". $row['points'] . "</td>";
        echo "<td>". $row['time'] . "</td>";
        echo "</tr>";
    }
}

echo "</table>";

?><?php $conn->close();
?>
                </table>
                <table>
                    <h1 class="blockcraft">Superb Mario:</h1>
                    <?php //connect til database
$conn=new mysqli("wimac.dk.mysql", "wimac_dkgamesite", "123456789", "wimac_dkgamesite");?>
                    <h3>(Coming Soon!)</h3><?php $sql="select * from sMario";
$result=$conn->query($sql);

echo '<table border="5" cellpadding="5">';
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Points</th>";
echo "<th>Kills</th>";
echo "</tr>";

//Få fat i dataen hvis der er noget
if($result->num_rows > 0) {
    while($row=$result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>". $row['username'] . "</td>";
        echo "<td>". $row['points'] . "</td>";
        echo "<td>". $row['kills'] . "</td>";
        echo "</tr>";
    }
}

echo "</table>";

?><?php $conn->close();
?>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>