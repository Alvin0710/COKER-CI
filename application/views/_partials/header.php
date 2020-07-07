<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('assets/favicon.ico') ?>">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/style/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/sticky-footer-navbar.css') ?>" rel="stylesheet">

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <script src="<?php echo base_url('assets/js/jquery-3.5.1.min.js') ?>" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
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

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-lg navbar-danger bg-danger fixed-top">
            <a class="navbar-brand" href="#">
                <img src="<?php echo base_url('assets/images/logo-web-04.png'); ?>" width="90" height="30" alt="">
            </a>
            <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item pr-4">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/page/index">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item pr-4">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/page/corona_map">Deployment map</a>
                    </li>
                    <li class="nav-item pr-4">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/page/poster">Poster</a>
                    </li>
                    <li class="nav-item pr-4">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/page/about">About</a>
                    </li>
                    <li class="nav-item pr-4">
                        <a href="<?php echo base_url(); ?>index.php/page/login" class="btn btn-light px-4">Login</a>
                    </li>
                </ul>
                <!-- <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        </nav>
    </header>