<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Codeigniter</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/style/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/font/glyphicons-halflings-regular.ttf">
    <script src="<?php echo base_url('assets/js/jquery-3.5.1.min.js') ?>" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <link href="<?php echo base_url('assets/style/aos.css') ?>" rel="stylesheet">

    <style>
        #top-container {
            margin-top: 10vh;
        }
    </style>
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-danger bg-danger fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Login CodeIgniter & Bootstrap</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="navbar-form navbar-right">
                    <a href="<php echo base_url() ?>index.php/Login/logout" type="submit" class="btn btn-danger"><i class="fa fa-sign-out"></i> Logout</a>
                </div>
            </div>
        </div>
    </nav> -->

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
                    <a href="<?php echo base_url() ?>index.php/Login/logout" type="submit" class="btn btn-light px-4"><i class="fa fa-sign-out"></i>Logout</a>
                </li>
            </ul>
            <!-- <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
        </div>
    </nav>

    <div class="container" id="top-container" style="text-align: center;">
        <a style="text-align: right;" href="<?= base_url() ?>index.php/dashboard/tambah" class="btn btn-info my-5 px-5" data-aos="zoom-in">Add Poster</a>
        <div class="row">
            <div class="col-md-12">
                <form action="<?= base_url() ?>index.php/dashboard/index" method="get">
                    <input type="text" name="cari" class="form-control" placeholder="Search image" data-aos="zoom-in">
                    <input type="submit" value="Search" class=" form-control btn btn-success" data-aos="zoom-in">
                </form>
            </div>
        </div>
        <br>
        <div class="row mb-5">

            <?php foreach ($data as $data) : ?>
                <div class="col-sm-6 col-md-3 my-2 px-1 py-3 container-fluid">
                    <div href="#">
                        <img src="<?= base_url() ?>assets/picture/<?= $data->foto ?>" style="max-width:115%; max-height:100%; height:180px" alt="foto" class="img-fluid img-thumbnail" data-aos="zoom-in"><br><br>
                        <p data-aos="zoom-in">
                            <a href="<?= base_url() ?>index.php/dashboard/edit/<?= $data->id ?>" class="btn btn-warning" role="button">Edit</a>
                            <a href="<?= base_url() ?>index.php/dashboard/deletedata/<?= $data->id ?>/<?= $data->foto ?>" class="btn btn-danger" role="button">Hapus</a>
                        </p>
                    </div>

                </div>
            <?php endforeach; ?>


        </div>
    </div>
    <div class="container">
        <?php echo $pagination ?>
    </div>

    <script src="<?= base_url() ?>assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/aos.js"></script>
    <!-- <script src="<php echo base_url('assets/js/aos.js') ?>"></script> -->
    <script type="text/javascript">
        AOS.init({
            offset: 100,
            duration: 1000,
        });
    </script>
</body>

</html>