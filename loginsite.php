<?php session_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Charset -->
        <meta charset="UTF-8">
        <!-- Log ind -->
        <title>Log ind - Wilderness</title>
        <!-- Fav icon -->
        <link rel="icon" href="camera-16.ico" type="image/gif" sizes="16x16">
        <!-- Keywords -->
        <meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript">
        <!-- Description (max 150 chars) -->
        <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident dolorum, asperiores fuga magni magnam veritatis voluptates unde optio, recusandae.">
        <!-- Author -->
        <meta name="author" content="Magnus Christensen">
        <!-- veiwport -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- Font-awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Flexbox Grid -->
        <link rel="stylesheet" href="css/flexboxgrid.css">
        <!-- Normalize -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Google -->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-92498399-1', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- Hotjar Tracking Code www.eksample.com -->
        <script>
            (function (h, o, t, j, a, r) {
                h.hj = || function () {
                    (h.hj.q = h.hj.q || []).push(arguments)
                };
                h._hjSettings = {
                    hjid: 1
                    , hjsv: 5
                };
                a = o.getElementsByTagName('head')[0];
                r = o.createElement('script');
                r.async = 1;
                r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
                a.appendChild(r);
            })(window, document, '//static.hotjar.con(c(hotjar-', '.js?sv=');
        </script>
    </head>

    <body id="loginsite">
        <!-- Header -->
        <header id="main">
            <div class="header-container">
                <!-- row -->
                <div class="row center-xs">
                    <div class="col-xs-12">
                        <a href="index.php"> <img src="img/header_img.jpg" alt="Copenhagen Wilderness"> </a>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <!-- Navigation -->
                    <div class="col-xs-12">
                        <nav id="main">
                            <ul>
                                <li><a href="index.php" alt="home">Home</a></li>
                                <li><a href="planter.php" alt="planter">Planter</a></li>
                                <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" alt="indretning">Indretning</a></li>
                                <li class="float-right current"><a href="loginsite.php" alt="log ind">Log ind</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
        </header>
        <!-- Main -->
        <main id="loginsite">
            <div class="main-container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Form login -->
                        <form action="checkUser.php" method="post">
                            <!-- Brugernavn -->
                            <label for="frame">Brugernavn:</label>
                            <input type="text" id="user" name="formUsername" placeholder="Indtast dit brugernavn">
                            <!-- Password -->
                            <label for="frame">Password:</label>
                            <input type="password" id="pass" name="formPassword" placeholder="Indtast dit password">
                            <br>
                            <!-- button login -->
                            <button id="log-in" type="submit" value="Log ind">Log ind</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <footer id="loginsite">
            <div class="footer-container">
                <hr>
                <div class="row center-xs">
                    <div class="col-xs-12">
                        <p>&copy; 2017-Wilderness</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </body>

    </html>