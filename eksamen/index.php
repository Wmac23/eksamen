<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <script src="alert.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Press+Start+2P&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <!-- Login -->
        <center><img src="img/logoeksamen.png" alt="" class="responsive">
            <div class="card" style="width: 25rem;">

                <img src="img/logo.png" height="100px" width="100px" class="logo" alt="...">
                <div class="card-body">
                    <div id="frm">
                        <h1>Login</h1>
                        <form name="f1" action="authentication.php" onsubmit="return validation()" method="POST">
                            <p>
                                <label> Username: </label>
                                <input type="text" id="user" name="user" />
                            </p>
                            <p>
                                <label> Password: </label>
                                <input type="password" id="pass" name="pass" />
                            </p>
                            <p>
                                <input type="submit" id="btn" value="login" />
                            </p>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </center>
</body>

</html>