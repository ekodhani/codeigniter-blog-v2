<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $blog['judul_blog']; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/open-iconic-bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/aos.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/ionicons.min.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-datepicker.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/jquery.timepicker.css'); ?>">


    <link rel="stylesheet" href="<?= base_url('assets/css/flaticon.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/icomoon.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

    <link rel="shortcut icon" href="<?= base_url('assets/favicon.png'); ?>">
</head>

<body class="goto-here">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">My Journey</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="<?= base_url('landing'); ?>" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="<?= base_url('landing/aboutme'); ?>" class="nav-link">About Me</a></li>
                    <li class="nav-item"><a href="<?= base_url('landing/contact'); ?>" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <!-- jumbotron -->
    <div class="hero-wrap hero-bread">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-0 bread">Blog</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END jumbotron -->

    <!-- section -->
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <a href="<?= base_url('landing'); ?>" class="btn btn-primary mb-4"><i class="icon-arrow-left"></i> Back</a>
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <h2 class="mb-3"><?= $blog['judul_blog']; ?></h2>
                    <img src="<?= base_url('assets/images/thumb/') . $blog['thumbnail']; ?>" width="100%">
                    <p><?= $blog['konten_isi']; ?></p>

                    <div class="about-author d-flex p-4 bg-light">
                        <div class="bio align-self-md-center mr-4">
                            <img src="<?= base_url('assets/images/admin/admin.jpg'); ?>" alt="Image placeholder" class="img-fluid mb-4">
                        </div>
                        <div class="desc align-self-md-center">
                            <h3><?= $blog['access']; ?></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                        </div>
                    </div>


                    <div class="pt-5 mt-5">
                        <h3 class="mb-5">Comments</h3>
                        <!-- <?= $this->session->flashdata('message'); ?> -->
                        <ul class="comment-list">
                            <?php foreach ($komentar as $k) : ?>
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="<?= base_url('assets/images/default.jpg') ?>" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3><a href="mailto:<?= $k->email; ?>"><?= $k->nama; ?></a></h3>
                                        <div class="meta"><?= date('d-M-Y', strtotime($k->date_created)); ?></div>
                                        <p><?= $k->komentar; ?></p>
                                        <!-- <p><a href="#" class="reply">Reply</a></p> -->
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <form action="<?= base_url('landing/simpankomentar'); ?>" method="post" class="p-5 bg-light">
                                <input type="hidden" value="<?= $blog['id_blog']; ?>" name="idb">
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name" name="nama">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="komentar" id="message" cols="30" rows="10" class="form-control"></textarea>
                                    <?= form_error('komentar', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- .col-md-8 -->

                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading">Recent Blog</h3>
                        <?php foreach ($blogre as $b) : ?>
                            <div class="block-21 mb-4 d-flex">
                                <img src="<?= base_url('assets/images/thumb/') . $b->thumbnail; ?>" class="blog-img mr-4">
                                <div class="text">
                                    <h3 class="heading-1"><a href="<?= base_url('landing/singleblog/') . $b->id_blog; ?>"><?= $b->judul_blog; ?></a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="icon-calendar"></span> <?= date('d M Y', strtotime($b->date_created)); ?></a></div>
                                        <div><a href="#"><span class="icon-person"></span><?= $b->access; ?></a></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
    </section> <!-- .section -->

    <!-- Footer -->
    <footer class="ftco-footer ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">My Journey</h2>
                        <p class="font-italic">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="https://github.com/ekodhani"><span class="icon-github"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url('landing/aboutme'); ?>" class="py-2 d-block">About Me</a></li>
                            <li><a href="<?= base_url('landing/contact'); ?>" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Help</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">FAQs</a></li>
                                <li><a href="#" class="py-2 d-block">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text"><?= $contact['alamat']; ?></span></li>
                                <li><a href="https://api.whatsapp.com/send?phone=089521649714"><span class="icon icon-phone"></span><span class="text"><?= $contact['no_handphone']; ?></span></a></li>
                                <li><span class="icon icon-envelope"></span><span class="text"><?= $contact['email']; ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery-migrate-3.0.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.easing.1.3.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.stellar.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/aos.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.animateNumber.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
    <script src="<?= base_url('assets/js/scrollax.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/main.js'); ?>"></script>

</body>

</html>