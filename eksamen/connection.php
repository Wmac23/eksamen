<?php      
    $host = "wimac.dk.mysql";  
    $user = "wimac_dkgamesite";  
    $password = '123456789';  
    $db_name = "wimac_dkgamesite";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>

<!-- Putter data ind i Blockcraft databasen-->
<?php 

$mysqli= new mysqli ("wimac.dk.mysql", "wimac_dkgamesite", "123456789", "wimac_dkgamesite") or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
    $name = $_POST['username'];
    $diamonds = $_POST['diamonds'];
    $steps = $_POST['steps'];

    $mysqli->query("INSERT INTO `bCraft` (username, diamonds, steps) VALUES('$name', '$diamonds', '$steps') ") or
    die ($mysqli-> error);
}

?>