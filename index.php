<?php session_start(); 
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Charset -->
        <meta charset="UTF-8">
        <!-- Title -->
        <title>Wilderness - Line Andersen</title>
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
                                <li class="current"><a href="index.php">Home</a></li>
                                <li><a href="planter.php">Planter</a></li>
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
        <main id="index">
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
                        <!-- Article -->
                        <?php 
                        //tjekker om username er sat og den ikke er tom
                        //hvis bruger er logget ind skal nedstående vises
                        if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
                         ?>
                            <article id="form">
                                <!-- Form -->
                                <!-- action:"insert.php" Når du har udfyldt din formular og trykket på indsæt hvad skal der så ske, vi ryger over til insert.php-->
                                <form action="insert.php" method="get">
                                    <!-- FormGroup-class /heading -->
                                    <div class="formGroup">
                                        <h1>Opret et nyt indlæg</h1>
                                        <!-- Label-->
                                        <label id="heading" for="heading"> <span>Titel:</span> </label>
                                        <!-- Lable end -->
                                        <br>
                                        <!-- Input -->
                                        <input type="text" id="heading" name="heading" placeholder="Titel på dit indlæg">
                                        <!-- Imput end -->
                                    </div>
                                    <!-- FormGroup-class /heading end -->
                                    <!-- -->
                                    <!-- FormGroup-class /imgSrc -->
                                    <div class="formGroup">
                                        <!-- Label -->
                                        <label for="imgSrc"><span>Billed navn:</label></span>
                                            <!-- Lable end -->
                                            <br>
                                            <!-- Input -->
                                            <input class="u-full-width" type="text" id="imgSrc" name="imgSrc" placeholder="Navn på billede uden .jpg">
                                            <!-- Imput end -->
                                    </div>
                                    <!-- FormGroup-class /imgSrc end -->
                                    <!-- -->
                                    <!-- FormGroup-class /imgAlt -->
                                    <div class="formGroup">
                                        <!-- Label -->
                                        <label for="imgAlt"> <span>Billede alt tekst:</span></label>
                                        <!-- Lable end -->
                                        <br>
                                        <!-- Input -->
                                        <input class="u-full-width" type="text" id="imgAlt" name="imgAlt" placeholder="billedets alt tekst">
                                        <!-- Imput end -->
                                    </div>
                                    <!-- FormGroup-class /imgAlt end -->
                                    <!-- -->
                                    <!-- FormGroup-class /articleText -->
                                    <div class="formGroup">
                                        <!-- Label -->
                                        <label for="articleText"><span>Indlægets tekst:</span></label>
                                        <!-- Lable end -->
                                        <br>
                                        <!-- Textarea -->
                                        <textarea class="u-full-width" id "articleText" name="articleText" placeholder="Indlægets tekst"></textarea>
                                        <!-- Textarea end -->
                                    </div>
                                    <!-- FormGroup-class /articleText end -->
                                    <!-- -->
                                    <!-- FormGroup-class /forfatter -->
                                    <div class="formGroup">
                                        <!-- Label -->
                                        <label for="forfatter"> <span>Forfatter:</span></label>
                                        <!-- Lable end -->
                                        <br>
                                        <!-- Input -->
                                        <input class="u-full-width" type="text" id="forfatter" name="forfatter" placeholder="Forfatterns navn her...">
                                        <!-- Imput end -->
                                    </div>
                                    <!-- FormGroup-class /forfatter end -->
                                    <!-- -->
                                    <!-- Indsæt -->
                                    <div class="btn-indsaet">
                                        <input class="button-primary" type="submit" value="Udgiv indlæg"> </div>
                                    <!-- Indsæt end -->
                                </form>
                                <!-- Form end -->
                            </article>
                            <?php } ?>
                                <article>
                                    <?php
                        // inkludere fetchDb.php
                        //tager indhold fra en anden fil (fetchDb.php) og ligger det her ind
                        include "fetchDb.php";
                        
                        ?>
                                </article>
                                <hr>
                                <!-- Article -->
                                <article>
                                    <h1>Vores nye lænestol i egetræ og kernelæder</h1> <img src="img/l%C3%A6nestol.jpg" alt="Laeder laenestol">
                                    <p class="author"> <span class="author-C">Skrevet af </span>Line <span class="author-C">den </span>24.august, 2017</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos sequi quo doloribus, ex, perferendis rerum tempore quas ipsam cumque accusantium eaque veniam facere. Voluptas itaque dolorum, quam voluptatum, quis possimus!</p>
                                </article>
                                <hr>
                                <!-- Article -->
                                <article>
                                    <h1>Mit plante eksperiment</h1> <img src="img/mit_plante_eksperiment.jpg" alt="Plante eksperiment">
                                    <p class="author"> <span class="author-C">Skrevet af </span>Line <span class="author-C">den </span>24.august, 2017</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consectetur, incidunt optio id, asperiores voluptatum. Aperiam numquam error minus nihil tenetur illo, soluta maiores et dolores libero aliquid quo accusamus.</p>
                                </article>
                                <hr>
                                <!-- Article -->
                                <article>
                                    <h1>Min urban jungle baggårds make-over</h1> <img src="img/urban_jungle_make-over.jpg" alt="Urban jungle baggårds">
                                    <p class="author"> <span class="author-C">Skrevet af </span>Line <span class="author-C">den </span>24.august, 2017</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae architecto est itaque quidem. Nisi animi maiores ex, placeat facilis doloribus ut. Praesentium quaerat consectetur eos, magnam. Aspernatur in provident aliquid.</p>
                                </article>
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
    </body>

    </html>