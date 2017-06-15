<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- veiwport -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Flexbox Grid -->
    <link rel="stylesheet" href="css/flexboxgrid.css">
    <!-- Normalize -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/style.css"> </head>

<body>
    <!-- Header -->
    <header id="main">
        <div class="header-container">
            <!-- row -->
            <div class="row center-xs">
                <div class="col-xs-12"> <img src="img/header_img.jpg" alt="Copenhagen Wilderness"> </div>
            </div>
            <!-- row -->
            <div class="row">
                <!-- Navigation -->
                <div class="col-xs-12">
                    <nav id="main">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Planter</a></li>
                            <li><a href="#">Indretning</a></li>
                            <li class="float-right current"><a href="loginsite.php">Log ind</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
    </header>
    <main id="loginsite">
        <div class="main-container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Form login -->
                    <form action="checkUser.php" method="post">
                        <!-- Brugernavn -->
                        <p>Brugernavn</p>
                        <br>
                        <input class="log-in-box" type="text" id="user" name="formUsername" placeholder="Indtast dit brugernavn">
                        <!-- Password -->
                        <p>Password</p>
                        <br>
                        <input class="log-in-box" type="password" id="pass" name="formPassword" placeholder="Indtast dit password">
                        <br>
                        <!-- button login -->
                        <button id="log-in" type="submit" value="Log ind">Log ind</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>