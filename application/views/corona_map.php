<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona Map</title>
    <link href="<?php echo base_url('assets/style/aos.css') ?>" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->


    <style>
        body {
            overflow-x: hidden;
            margin: 0;
            padding: 0;
        }

        #map {
            height: 60vw;
        }

        .total-data {
            height: 30vw;
        }

        .global-data {
            height: 30vw;
        }

        .data-provinsi {
            height: 30vw;
        }

        #main-container {
            margin-top: 20vw;
        }

        .scroller {
            /* width: 21.3vw;*/
            height: 170vw;
            overflow-x: hidden;
            overflow-y: scroll;
            scrollbar-color: rebeccapurple green;
            scrollbar-width: thin;
        }

        .top-container {
            background-color: #f1f1f1;
            padding: 30px;
            text-align: center;
        }

        @media only screen and (min-width: 768px) and (max-width: 1024px) {

            /* For tablet: */

            #main-container {
                margin-top: 10vw;
            }

            #map {
                height: 30vw;
            }

            .total-data {
                height: 9.3vw;
            }

            .global-data {
                height: 8vw;
            }

            .data-provinsi {
                height: 9vw;
            }

            #global-data-title {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .scroller {
                /* width: 21.3vw;*/
                height: 79vh;
                overflow-x: hidden;
                overflow-y: scroll;
                scrollbar-color: rebeccapurple green;
                scrollbar-width: thin;
            }

            #container-global {
                margin-top: -2vw !important;
            }

            #main-row-1,
            #main-row-2 {
                margin-bottom: 3vh;
            }
        }

        @media only screen and (min-width: 1024.1px) {

            /* For desktop: */
            #main-container {
                margin-top: 5vw;
            }

            #map {
                height: 30vw;
            }

            .total-data {
                height: 9.3vw;
            }

            .global-data {
                height: 8vw;
            }

            .data-provinsi {
                height: 9vw;
            }

            #global-data-title {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .scroller {
                /* width: 21.3vw;*/
                height: 79vh;
                overflow-x: hidden;
                overflow-y: scroll;
                scrollbar-color: rebeccapurple green;
                scrollbar-width: thin;
            }

            #container-global {
                margin-top: -2vw !important;
            }

            .top-container {
                background-color: #f1f1f1;
                padding: 30px;
                text-align: center;
            }

            #main-row-1,
            #main-row-2 {
                margin-bottom: 3vh;
            }
        }
    </style>
</head>

<body>


    <div class="container-fluid" id="main-container">
        <div class="row">
            <div class="col-md-9 container-fluid" id="main-row-1">
                <div class="container-fluid border border-danger mb-5 rounded-lg" id="second-row">

                    <!-- ========================================================================================= -->
                    <div class="row">
                        <div class="col-md-9 py-3">
                            <center>
                                <h5 class="text-danger" data-aos="zoom-in">Affected Areas</h5>
                            </center>
                            <div class="container-fluid bg-danger rounded-lg" id="map" data-aos="zoom-in">Peta disini</div>
                        </div>

                        <div class="col-md-3 py-3" id="main-info">
                            <center>
                                <h5 class="text-danger" data-aos="zoom-in">Total Data</h5>
                            </center>
                            <div class="container-fluid bg-danger rounded-lg total-data" data-aos="zoom-in">Positif</div>
                            <div class="container-fluid bg-danger my-3 rounded-lg total-data" data-aos="zoom-in">Sembuh</div>
                            <div class="container-fluid bg-danger mt-3 rounded-lg total-data" data-aos="zoom-in">Meninggal</div>
                        </div>
                    </div>
                    <!-- ========================================================================================= -->

                </div>
                <div class="container-fluid border border-danger rounded-lg mb-5" id="container-global">
                    <div class="row py-2">
                        <div class="col-md-3" id="global-data-title">
                            <center>
                                <h5 class="text-danger" data-aos="zoom-in">Global Data</h5>
                            </center>
                        </div>
                        <div class="col-md-3">
                            <div class="container-fluid bg-danger my-2 global-data rounded-lg" data-aos="zoom-in">Positif</div>
                        </div>
                        <div class="col-md-3">
                            <div class="container-fluid bg-danger my-2 global-data rounded-lg" data-aos="zoom-in">Sembuh</div>
                        </div>
                        <div class="col-md-3">
                            <div class="container-fluid bg-danger my-2 global-data rounded-lg" data-aos="zoom-in">Meninggal</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 container-fluid" id="main-row-2">
                <div class="container border border-danger py-3 mb-5 rounded-lg" id="row-2-child">
                    <div class="header" id="myHeader">
                        <center>
                            <h5 class="text-danger" data-aos="zoom-in">Data per Provinsi</h5>
                        </center>
                    </div>
                    <center>
                        <div class="scroller content mb-2" data-aos="zoom-in">
                            <div class="container-fluid bg-danger my-3 data-provinsi rounded-lg">DKI</div>
                            <div class="container-fluid bg-danger my-3 data-provinsi rounded-lg">DKI</div>
                            <div class="container-fluid bg-danger my-3 data-provinsi rounded-lg">DKI</div>
                            <div class="container-fluid bg-danger my-3 data-provinsi rounded-lg">DKI</div>
                            <div class="container-fluid bg-danger my-3 data-provinsi rounded-lg">DKI</div>
                            <div class="container-fluid bg-danger my-3 data-provinsi rounded-lg">DKI</div>
                            <div class="container-fluid bg-danger my-3 data-provinsi rounded-lg">DKI</div>
                        </div>
                    </center>
                </div>
            </div>
        </div>

    </div>
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
    <script src="<?php echo base_url('assets/js/aos.js') ?>"></script>
    <script type="text/javascript">
        AOS.init({
            offset: 10,
            duration: 1000,
        });
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->

</body>

</html>