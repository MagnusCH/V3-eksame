<!DOCTYPE html>
<html lang="en">
<?php session_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Charset -->
        <meta charset="UTF-8">
        <!-- Title -->
        <title>Planter</title>
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

    <body>
        <!-- Header -->
        <header id="main">
            <div class="header-container">
                <!-- row -->
                <div class="row ">
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
                                <li><a href="index.php">Home</a></li>
                                <li class="current"><a href="planter.php">Planter</a></li>
                                <li><a href="#">Indretning</a></li>
                                <?php 
                        //tjekker om username er sat og den ikke er tom
                        //hvis bruger er logget ind skal nedstående vises
                        if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
                         ?>
                                    <li class="float-right"><span id="logud">Hej,
                                        <?php echo $_SESSION['username']; ?>,</span> <a href="logout.php?logout=true"> Log ud</a> </li>
                                    <?php   
                        }else {
                        ?>
                                        <!-- Hvis bruger ikke er logget ind skal nedstående vises -->
                                        <li class="float-right"><a href="loginsite.php">Log ind</a></li>
                                        <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
        </header>
        <main id="planter">
            <div class="main-container">
                <div class="row">
                    <!-- Col 1 -->
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <!-- Aside -->
                        <aside><img src="img/frk_overspringshandling.jpg" alt="Billed af pige i sort hat">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam cumque quasi doloribus optio a illum minima porro consectetur ad distinctio. Consequuntur laborum cumque ipsum optio quis excepturi officia unde dignissimos.</p>
                            <hr>
                            <!-- Instragram --><a href="#" alt="Instragram"><i class="fa fa-instagram fa-2x" aria-hidden="true"> </i> </a>
                            <!-- Facebook --><a href="#" alt="Facebook"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"> </i> </a>
                            <!--  Flicker -->
                            <a href="#" alt="Flicker"> <i class="fa fa-flickr fa-2x" aria-hidden="true"></i> </a>
                            <!-- Linkedin -->
                            <a href="#" alt="Linkedin"> <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i> </a>
                        </aside>
                    </div>
                    <!-- Col 2 -->
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                        <hr>
                        <h1>Planter</h1>
                        <div class="slider">
                            <div class="fadein"> <img src="img/femina_planter.jpg" alt="Femina planter på stang"> <img src="img/femina_planter2.jpg" alt="Femina planter på vaeg"> <img src="img/femina_planter3.jpg" alt="Femina planter i potter"></div>
                            <div class="row center-xs center-sm">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <article id="planter">
                                        <h2>Planter Planter</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus necessitatibus, dolore deleniti nesciunt, nam beatae, eos illum ipsam illo neque ex velit veritatis error ea aut. Labore, laudantium repudiandae nulla.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime eius vitae unde magni dolor, accusantium quam itaque aut, autem est similique numquam quo dolore repellendus fugit rem nam quidem. Nihil!</p> <img src="img/femina_planter5.jpg" alt="">
                                        <h3>Lorem ipsum</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora id fuga ipsa alias facere dignissimos tempore veritatis, rem ea quam. Sit amet totam recusandae tenetur beatae natus in sed veritatis. </p>
                                    </article>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">">
                                    <article id="planter">
                                        <h2>Planter Planter</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis minus quos dolorum, maiores quas delectus quam ab, quibusdam voluptatum labore doloribus, magnam consequatur. Rerum suscipit iusto, nulla nisi sunt hic!</p> <img src="img/femina_planter4.jpg" alt="plante potter på vaeg">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ab maxime, sint fugit corporis? Veritatis culpa laborum in nisi, fugiat ducimus unde, voluptas officia repudiandae recusandae impedit nemo animi ut.</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer -->
        <footer id="index">
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
        <!-- Link til slider js -->
        <script src="js/slider.js"></script>
    </body>

    </html>