<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/style/aos.css') ?>" rel="stylesheet">
    <title>Admin login</title>

    <style>
        section {
            padding-top: 3rem;
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .border {
            border: 5px solid #FF6363 !important;
        }

        .form-signin .form-control {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        @media only screen and (min-width: 1024.1px) {
            body {
                margin: 0;
                padding: 0;
            }

            #logo {
                padding-left: 7rem;
                padding-right: 7rem;
            }

        }
    </style>
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="container">
                        <img src="<?php echo base_url('assets/images/undraw_Login.png'); ?>" alt="" class="img-fluid my-5 mx-5" data-aos="fade-right">
                    </div>
                </div>

                <div class="col-sm-5">
                    <?php if (isset($error)) {
                        echo $error;
                    }; ?>
                    <div class="container-fluid py-5 my-5 border border-danger rounded">
                        <center class="my-5">
                            <img class="img-fluid" id="logo" src="<?php echo base_url('assets/images/logo-web-01.png'); ?>" alt="" data-aos="zoom-in">
                        </center>

                        <div class="container">
                            <h1 class="mt-5 mb-5 text-danger font-weight-bold" data-aos="zoom-in">Login</h1>
                            <form class="form-signin my-5" method="POST" action="<?php echo base_url() ?>index.php/login">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" data-aos="zoom-in">Email address</label>
                                    <input type="text" class="form-control" name="username" placeholder="Masukkan Email Anda" autofocus data-aos="zoom-in">
                                    <?php echo form_error('username'); ?>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="exampleInputPassword1" data-aos="zoom-in">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda" data-aos="zoom-in">
                                    <?php echo form_error('password'); ?>
                                </div>

                                <center>
                                    <button type="submit" class="btn btn-lg btn-danger btn-block" data-aos="zoom-in">Login</button>
                                </center>
                            </form>
                            <div id="error" style="margin-top: 10px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="<?php echo base_url('assets/js/aos.js') ?>"></script>
    <script type="text/javascript">
        AOS.init({
            offset: 150,
            duration: 1000,
        });
    </script>
</body>

</html>