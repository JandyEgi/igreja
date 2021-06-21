<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHURCH</title>
    <link rel="shortcut icon" href="asess/icons/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="asess/vendor/bootstrap 4/css/bootstrap.min.css">
    <link rel="stylesheet" href="asess/vendor/mdb/css/mdb.min.css">
    <link rel="stylesheet" href="asess/vendor/font-awesome 4/css/font-awesome.min.css">
    <link rel="stylesheet" href="asess/css/main.css">
    <link rel="stylesheet" href="asess/css/animations.css">
    <link rel="stylesheet" href="asess/css/reponsible.css">
    <link rel="stylesheet" href="asess/vendor/lightbox/css/lightbox.min.css">
</head>

<body>
    <!-- <div class="loading-panel"></div> -->

    <header class="header mb-5" id="header">
        <div class="top">
            <div class="info wow fadeLeft">
                <p class="mr-2 mt-3 py-0"><i class="fa fa-map-marker" aria-hidden="true"></i> 345 santa isabell
                    treet,CZA 90011</p>
                <p class="mr-2 mt-3 py-0"><i class="fa fa-phone" aria-hidden="true"></i> (+224) 900 - 000 - 111</p>
                <p class="mr-2 mt-3 py-0"><i class="fa fa-location-arrow" aria-hidden="true"></i> contact@church.com</p>
            </div>
            <div class="redes wow fadeIn">
                <i class="fa fa-facebook mx-2 mt-2 py-0" aria-hidden="true"></i>
                <i class="fa fa-twitter mx-2 mt-2 py-0" aria-hidden="true"></i>
                <i class="fa fa-whatsapp mx-2 mt-2 py-0" aria-hidden="true"></i>
                <i class="fa fa-instagram mx-2 mt-2 py-0" aria-hidden="true"></i>
            </div>
        </div>
        <?
            require_once("./components/page-header.php");
        ?>
        <div class="banner-texts">
            <div class="banner-text text-white">
                <div>
                    <h2>Our galery</h2>
                    <p>what are you complaining about? said god. <br> they wo'nt let me in either</p>
                </div>
                <button type="button" class="btn btn-style">all sermons</button>
            </div>
        </div>
    </header>
    <!-- recents events -->

    <!-- our galery -->

    <div class="container-fluid galery">
        <div class="container pb-5">
            <div class="row">
                <div class="col-xl-12 text-center py-5">
                    <h2>Our Galery</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, eius.
                    </p>
                </div>
            </div>

            <?php
                require_once("./components/page-gallery.php");
            ?>

            </div>
        </div>
    </div>

    <!-- footer side -->
    <div class="container-fluid px-0" id="contact">
        <div class="newlatter">
            <h2>NEWLATTER</h2>
            <form action="#">
                <input type="text" name="email" id="email" class="new-input" placeholder="Subscrible your email here">
                <button type="#" class="form-btn ml-0"><i class="fa fa-location-arrow" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>

    <footer class="container-fluid mt-0 py-5 text-white footer">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-3 col-md-3 col-sm-6">
                    <article class="foot-text-area">
                        <div class="foot-header">
                            <div class="img-fo">
                                <img src="asess/icons/logo.svg" alt="logo">
                            </div>
                            <h3>CHURCH OF CRISTIAN</h3>
                        </div>
                        <P>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem error velit hic!
                        </P>
                        <div class="fot-redes">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </div>
                    </article>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-6">
                    <article class="foot-contact">
                        <h3 class="mb-3">Contactos</h3>
                        <small class="cont">
                            <div class="d-flex">
                                <i class="fa fa-phone fa-lg mr-2" aria-hidden="true"></i>
                                <p>(+224) 900 - 000 - 111 <br> (+224) 900 - 000 - 111</p>
                            </div>
                            <div class="d-flex">
                                <i class="fa fa-envelope-o fa-lg mr-2" aria-hidden="true"></i>
                                <p>contact@church.com <br> contact@church.com</p>
                            </div>
                            <div class="d-flex">
                                <i class="fa fa-map-marker fa-lg mr-2" aria-hidden="true"></i>
                                <p>345 Santa Isabell Street CZA 9001</p>
                            </div>
                        </small>
                    </article>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-6">
                    <article class="useful-area">
                        <h3>Useful Links</h3>
                        <small>
                            <p><i class="fa fa-angle-right" aria-hidden="true"></i> Need help? get in touch</p>
                            <p><i class="fa fa-angle-right" aria-hidden="true"></i> About our church</p>
                            <p><i class="fa fa-angle-right" aria-hidden="true"></i> Latest news</p>
                            <p><i class="fa fa-angle-right" aria-hidden="true"></i> Our event</p>
                            <p><i class="fa fa-angle-right" aria-hidden="true"></i> Our sermons</p>
                        </small>
                    </article>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-6 recent-posts">
                    <h3>Recent posts</h3>
                    <div class="posts mb-3">
                        <div class="post-img">
                            <img src="asess/img's/sermon-article-4 (2).png" alt="">
                        </div>
                        <div class="post-text">
                            <h5 class="mb-0">What religion gives<br>us</h5>
                            <p>Jully 15,2021</p>
                        </div>
                    </div>
                    <div class="posts">
                        <div class="post-img">
                            <img src="asess/img's/sermon-article-4 (2).png" alt="">
                        </div>
                        <div class="post-text">
                            <h5 class="mb-0">What religion gives<br>us</h5>
                            <p>Jully 15,2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="container-fluid py-2">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-6 text-center wow fadeIn">
                <h6 class="mt-3">CRIANT CHURCH Theme by JandyEgi. All Rights Reserverd
                </h6>
            </div>
        </div>
    </div>

    <!-- scripts -->
    <script src="asess/vendor/jquery/jquery.min.js"></script>
    <script src="asess/vendor/bootstrap 4/js/bootstrap.min.js"></script>
    <script src="asess/vendor/mdb/js/mdb.min.js"></script>
    <script src="asess/js/app.js"></script>
    <script src="asess/vendor/lightbox/js/lightbox.min.js"></script>
</body>

</html>