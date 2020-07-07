<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <title>Home</title>
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        #jumbo-1 {
            height: 75%;
            padding-top: 10%;
        }

        a {
            font-size: medium;
        }

        a.nav-link {
            color: #EBD9D9;
        }

        a.nav-link:hover {
            color: white !important;
            /* font-weight: bold; */
        }

        a.link:hover {
            color: #EBD9D9 !important;
        }

        .social-icons {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .social-icons li {
            display: inline-block;
            margin-bottom: 4px
        }

        .social-icons a {
            background-color: #eceeef;
            color: #818a91;
            display: inline-block;
            line-height: 44px;
            width: 44px;
            height: 44px;
            text-align: center;
            margin-right: 8px;
            border-radius: 100%;
            -webkit-transition: all .2s linear;
            -o-transition: all .2s linear;
            transition: all .2s linear
        }

        .social-icons a:active,
        .social-icons a:focus,
        .social-icons a:hover {
            color: #fff;
            background-color: #29aafe
        }


        .social-icons a.facebook:hover {
            background-color: #3b5998
        }

        .social-icons a.twitter:hover {
            background-color: #00aced
        }

        .social-icons a.linkedin:hover {
            background-color: #007bb6
        }

        .social-icons a.instagram:hover {
            background-color: orangered
        }

        @media (max-width:767px) {
            .social-icons li.title {
                display: block;
                margin-right: 0;
                font-weight: 600
            }
        }
    </style>

</head>

<body>
    <!-- ?php require 'header.php' ?> -->
    <nav class="navbar navbar-expand-lg navbar-danger bg-danger fixed-top">
        <a class="navbar-brand" href="#">
            <img src="images/logo-web-04.png" width="90" height="30" alt="">
        </a>
        <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto" id="nav">
                <li class="nav-item pr-4">
                    <a class="nav-link nav-menu" href="#" data-page="home.php">Home</a>
                </li>
                <li class="nav-item pr-4">
                    <a class="nav-link nav-menu" href="#" data-page="corona_map.php">Deployment Map</a>
                </li>
                <li class="nav-item pr-4">
                    <a class="nav-link nav-menu" href="#" data-page="poster.php">Poster</a>
                </li>
                <li class="nav-item pr-4">
                    <a class="nav-link nav-menu" href="#" data-page="about.php">About Us</a>
                </li>
                <li class="nav-item pr-4">
                    <a href="login.php" class="btn btn-light px-4">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="div1"></div>

    <footer class="page-footer font-small bg-danger text-white pt-4">
        <!-- Footer Links -->
        <!-- <div class="container-fluid text-center text-md-left"> -->
        <div class="container">
            <div class="row">
                <!-- Column 1 -->
                <div class="col-sm-3 mb-md-0 mb-3">
                    <h1 class="text-uppercase font-weight-bold">COKER</h1>
                    <p>Covid-19 tracker</p>
                </div>

                <!-- Column 2 -->
                <div class="col-sm-3">
                    <div class="col mb-md-0 mb-3">
                        <h3 class="text-uppercase">EXPLORE</h3>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-white text-decoration-none link" href="#">Home</a>
                            </li>
                            <li>
                                <a class="text-white text-decoration-none link" href="#">Peta Persebaran</a>
                            </li>
                            <li>
                                <a class="text-white text-decoration-none link" href="#" data-page="poster.php">Poster</a>
                            </li>
                            <li>
                                <a class="text-white text-decoration-none link" href="#">Contact</a>
                            </li>
                            <li>
                                <a class="text-white text-decoration-none link" href="#" data-page="about.php">About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="col-sm-3">
                    <div class="col mb-md-0 mb-3">
                        <h3 class="text-uppercase">Contact Us</h3>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-white">Phone : +62 XXXXXXXXXXX</a>
                            </li>
                            <li>
                                <a class="text-white">E-mail : admin@coker.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Column 4 -->
                <div class="col-sm-3">
                    <div class="col mb-md-0 mb-3">
                        <h3 class="text-uppercase">FOLLOW US</h3>
                        <ul class="social-icons mt-3">
                            <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        </div>
        <!-- </div> -->
        <div class="text-center py-1 bg-dark text-white font-weight-bold">© 2020 Coker. All rights reserved.
        </div>
    </footer>

    <!-- <php require 'footer.php' ?> -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
</body>

</html>