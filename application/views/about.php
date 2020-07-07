<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="<?php echo base_url('assets/style/aos.css') ?>" rel="stylesheet">


    <style>
        body {
            overflow-x: hidden;
            margin: 0;
            padding: 0;
        }

        section {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #text-title {
            margin-right: 10vw;
            margin-left: 10vw;
        }

        .team {
            margin-top: 5rem;
            margin-bottom: 7rem;
        }

        .container-team {
            height: 15rem;
            width: 15rem;
            background-color: red;
            border-radius: 10rem;
        }

        #title {
            margin-top: 8.5rem;
        }
    </style>
</head>

<body>

    <div class="container" id="title">
        <h1 class="display-4 text-center font-weight-bold text-danger mt-5" data-aos="zoom-in">Meet Our Awesome Team</h1>
        <p class="info text-center" id="text-title" data-aos="fade-up">Below are the names of the members of our team who with their efforts can complete the making of this website with their respective sections.</p>
    </div>

    <div class="container team">
        <div class="row text-center pt-3">
            <div class="col-sm my-5">
                <div class="container-team mx-auto d-block" data-aos="fade-right">
                </div>
                <p class="pt-3 text-center text-dark" data-aos="zoom-in"><b class="font-weight-bold">Muhammad Fauzi Maulana</b><br>
                    University Student</p>
            </div>
            <div class="col-sm my-5">
                <div class="container-team mx-auto d-block" data-aos="zoom-out">
                </div>
                <p class="pt-3 text-center text-dark" data-aos="zoom-in"><b class="font-weight-bold">Alvin Irwanto</b><br>
                    University Student</p>
            </div>
            <div class="col-sm my-5">
                <div class="container-team mx-auto d-block" data-aos="fade-left"></div>
                <p class="pt-3 text-center text-dark" data-aos="zoom-in"><b class="font-weight-bold">Septian Pratama</b><br>
                    University Student</p>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/aos.js') ?>"></script>
    <script type="text/javascript">
        AOS.init({
            offset: 50,
            duration: 1000,
        });
    </script>
</body>

</html>