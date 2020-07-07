<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="<?php echo base_url('assets/style/aos.css') ?>" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        section {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container-symptoms {
            height: 5rem;
            width: 5rem;
            background-color: white;
            border-radius: 10px;
        }

        .info {
            font-size: medium;
        }

        #section-0 {
            height: 100vh;
        }

        #section-2 {
            height: 100vh;
        }

        #section-3 {
            margin-top: 30rem;
            height: 100vh;
        }

        #section-4 {
            margin-top: 20rem;
            height: 230vh;
        }

        .flaticon {
            font-size: 10px;
        }

        #symptoms-info {
            border-radius: 10px;
        }

        .step {
            /* height: 20vw;
            width: 33vw !important; */
            border-radius: 10px;
        }

        .my-card {
            border-radius: 10px;
        }

        .source {
            font-size: smaller;
        }

        .card-step {
            width: 30rem;
            height: 17rem;
        }

        @media only screen and (min-width: 1024.1px) {
            section {
                width: 100%;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            #section-1 {
                align-items: center;
                justify-content: center;
            }

            #section-2 {
                margin-top: 0rem;
            }

            #section-3 {
                margin-top: 0rem;
            }

            #section-4 {
                height: 100vh;
                margin-top: -2rem;
            }

            .container-symptoms {
                height: 5rem;
                width: 5rem;
                background-color: white;
                border-radius: 10px;
            }

            .img-step {
                padding: 3rem;
            }

            .card-step {
                width: 30rem;
                height: 17rem;
            }

            /* 
            .row-step {
                margin-bottom: 1rem;
            } */

        }
    </style>

    <!-- Fonts -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}"> -->
    <!-- <script type="text/javascript" src="js/navbar.js"></script> -->
</head>

<body>

    <section>
        <div class="carousel slide" data-ride="carousel" id="section-0">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url('assets/images/virus-corona (2).jpg'); ?>" class="vh-100 vw-100 img-fluid" alt="...">
                    <div class="carousel-caption">
                        <div class="jumbotron bg-danger" data-aos="zoom-in" style="opacity: .8;">
                            <div class="container">
                                <h1 class="display-4 font-weight-bold" data-aos="zoom-in">Welcome to COKER</h1>
                                <h4 class="font-weight-bold" data-aos="zoom-in">We hope you are stay healthy and always safe.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="mb-3">
        <div class="jumbotron bg-white" id="section-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 my-auto">
                        <h1 class="display-4 font-weight-bold text-danger" data-aos="zoom-in">What is COVID-19?</h1>
                        <p class="info text-justify" data-aos="fade-right">Coronavirus Disease 2019 a.k.a COVID-19
                            is newly virus that first time found in China
                            this can cause respiratory problems and
                            pneumonia. The disease is caused by Severe Acute Respiratory
                            Syndrome Coronavirus 2 (SARS-CoV-2) infection.</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="container">
                            <img src="<?php echo base_url('assets/images/undraw_medical_research.png'); ?>" alt="" class="img-fluid" data-aos="fade-up-left">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="jumbotron bg-white" id="section-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-white">
                        <div class="bg-danger py-4 my-card" style="width: 29rem;" data-aos="zoom-in-up">
                            <h5 class="card-title text-center font-weight-bold" data-aos="zoom-in">COVID-19 Symptoms</h5>

                            <div class="container">
                                <div class="row text-center pt-3">
                                    <div class="col" data-aos="zoom-in">
                                        <div class="container-symptoms mx-auto d-block">
                                            <img src="<?php echo base_url('assets/images/cough.png'); ?>" class="img-fluid px-1 py-1" id="cough" alt="">
                                        </div>
                                        <p class="pt-3">Cough and sore throat</p>
                                    </div>
                                    <div class="col" data-aos="zoom-in">
                                        <div class="container-symptoms mx-auto d-block">
                                            <img src="<?php echo base_url('assets/images/sick.png'); ?>" class="img-fluid px-1 py-1" id="cough" alt="">
                                        </div>
                                        <p class="pt-3">High temperature fever</p>
                                    </div>
                                    <div class="col" data-aos="zoom-in">
                                        <div class="container-symptoms mx-auto d-block">
                                            <img src="<?php echo base_url('assets/images/difficulty-breathing.png'); ?>" class="img-fluid px-1 py-1" id="cough" alt="">
                                        </div>
                                        <p class="pt-3">Hard to breathe</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-4" data-aos="zoom-in">
                                <p class="card-text text-justify bg-white text-danger px-3 py-3" id="symptoms-info">Symptoms of COVID-19 range from the
                                    common cold symptoms to severe
                                    conditions such as pneumonia (acute
                                    pneumonia with symptoms of shortness
                                    of breath). If you experience symptoms,
                                    have a history of travel to the affected
                                    area, or are exposed to a positive
                                    person / possibility of COVID-19, then you
                                    are encouraged to isolate yourself and
                                    contact COVID-19 response assistance
                                    from the government.</p>
                            </div>
                        </div>
                        <div class="border border-dark text-dark mt-2 pl-4 my-card" style="width: 29rem;" data-aos="fade-up-right">
                            <div class="flaticon">Icons made by <a href="https://www.flaticon.com/authors/eucalyp" class="text-decoration-none text-info flaticon" title="Eucalyp">Eucalyp</a> from <a href="https://www.flaticon.com/" class="text-decoration-none text-info flaticon" title="Flaticon">www.flaticon.com</a></div>
                            <div class="flaticon">Icons made by <a href="https://www.flaticon.com/authors/srip" class="text-decoration-none text-info flaticon" title="srip">srip</a> from <a href="https://www.flaticon.com/" class="text-decoration-none text-info flaticon" title="Flaticon">www.flaticon.com</a></div>
                            <div class="flaticon">Icons made by <a href="https://www.flaticon.com/authors/freepik" class="text-decoration-none text-info flaticon" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" class="text-decoration-none text-info flaticon" title="Flaticon">www.flaticon.com</a></div>
                        </div>

                    </div>
                    <div class="col-sm-6 pt-5 my-auto">
                        <h1 class="display-4 font-weight-bold text-danger" data-aos="zoom-in-left">How is COVID-19 transmitted?</h1>
                        <p class="info text-justify" data-aos="zoom-out">COVID-19 is a new disease and researchers are still studying
                            how to transmit it. From various studies, the main spread
                            method of this disease is thought to be through respiratory
                            droplets and close contact with sufferers. Droplets are small
                            particles from the patient's mouth that can contain a viral
                            disease, which is produced when coughing, sneezing, or talking.
                            Droplets can pass up to a certain distance (usually 1 meter).
                        </p><br>
                        <p class="info text-justify" data-aos="fade-up-left">
                            Droplets can stick to clothing or objects around the patient
                            when coughing or sneezing. However, droplet particles are large
                            enough so that they will not survive or settle in the air for a long
                            time. However, people are required to wear cloth masks that
                            cover the nose and mouth to prevent the spread of droplets.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="jumbotron bg-white" id="section-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 pt-5 my-auto">
                        <h1 class="display-4 font-weight-bold text-danger" data-aos="fade-right">How to protect ourself and others from COVID-19?</h1>
                        <p class="info text-justify" data-aos="fade-up">There is currently no vaccine to prevent coronavirus 2019 (COVID-19). The best way to prevent disease is to avoid contracting the virus (and avoid exposing others). <br><br><br>
                        </p>
                    </div>
                    <div class="col-sm-6 pt-5">
                        <img src="<?php echo base_url('assets/images/undraw_Security_on.png'); ?>" alt="" class="img-fluid" data-aos="zoom-in-down">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="jumbotron bg-white" id="section-4">
            <div class="container">
                <h4 class="text-danger font-weight-bold text-center mb-5" data-aos="flip-left">You can try this step :</h4>
                <div class="row row-step">

                    <div class="col-sm-6">
                        <div class="container step mb-5 border border-danger card-step" data-aos="fade-down-right">
                            <div class="row py-3">
                                <div class="col">
                                    <img src="<?php echo base_url('assets/images/Social Distance 6ft.png'); ?>" alt="" class="img-fluid img-step" data-aos="zoom-in">
                                </div>
                                <div class="col my-auto">
                                    <h3 class="font-weight-bold text-danger" data-aos="zoom-in">Practice Social Distancing</h3>
                                    <p class="info text-left" data-aos="zoom-in">If you are around other people, keep 6 feet between you when possible. Avoid hugs, handshakes, large gatherings and close quarters.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="container step mb-5 border border-danger card-step" data-aos="fade-down-left">
                            <div class="row py-3">
                                <div class="col">
                                    <img src="<?php echo base_url('assets/images/Male Patient.png'); ?>" alt="" class="img-fluid img-step" data-aos="zoom-in">
                                </div>
                                <div class="col my-auto">
                                    <h3 class="font-weight-bold text-danger" data-aos="zoom-in">Wear a cloth face cover in public</h3>
                                    <p class="info text-left" data-aos="zoom-in">Cover your mouth and nose with a cloth face cover when around others and out in public, such as the grocery store.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row row-step">

                    <div class="col-sm-6">
                        <div class="container step border border-danger card-step" data-aos="fade-up-right">
                            <div class="row py-3">
                                <div class="col">
                                    <img src="<?php echo base_url('assets/images/Hand Infected.png'); ?>" alt="" class="img-fluid img-step" data-aos="zoom-in">
                                </div>
                                <div class="col my-auto">
                                    <h3 class="font-weight-bold text-danger" data-aos="zoom-in">Avoid touching eyes, nose and mouth</h3>
                                    <p class="info text-left" data-aos="zoom-in">Hands touch many surfaces and can pick up viruses. Once contaminated, hands can transfer the virus to your eyes, nose or mouth.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="container step border border-danger card-step" data-aos="fade-up-left">
                            <div class="row py-3">
                                <div class="col">
                                    <img src="<?php echo base_url('assets/images/Hand Wash.png'); ?>" alt="" class="img-fluid img-step" data-aos="zoom-in">
                                </div>
                                <div class="col my-auto">
                                    <h3 class="font-weight-bold text-danger" data-aos="zoom-in">Wash your hands</h3>
                                    <p class="info text-left" data-aos="zoom-in">Washing your hands continues to be one of the easiest ways to keep yourself safe. Wash often. Use soap. 20 seconds. Then dry. This kills the virus by bursting its protective bubble.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <p class="mt-4 info text-left source" data-aos="fade-right"><b>Source :</b> <br> https://floridahealthcovid19.gov/prevention/ <br> https://uniteforrecovery.govt.nz/covid-19/stay-healthy/wash-your-hands/</p>
    </div>
    <!-- <script src="jquery-3.5.1.min.js"></script> -->
    <script src="<?php echo base_url('assets/js/aos.js') ?>"></script>
    <script type="text/javascript">
        AOS.init({
            offset: 150,
            duration: 1000,
        });
    </script>
</body>

</html>