<!-- jumbotron -->
<div class="hero-wrap hero-bread">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <span class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('landing'); ?>">Home</a></span>-<span> Blog</span></p>
                    <h1 class="mb-0 bread">Blog</h1>
            </div>
        </div>
    </div>
</div>
<!-- END jumbotron -->

<!-- Section -->
<section class="ftco-section ftco-degree-bg">
    <!-- container -->
    <div class="container">
        <!-- content -->
        <div class="row">
            <!-- content blog -->
            <div class="col-lg-8 ftco-animate">
                <h1>My Blog</h1>
                <hr>
                <div class="row">
                    <?php
                    function limit_words($string, $word_limit)
                    {
                        $words = explode(" ", $string);
                        return implode(" ", array_splice($words, 0, $word_limit));
                    }
                    foreach ($blog as $b) : ?>
                        <div class="col-md-12 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="<?= base_url('landing/singleblog/') .$b->id_blog; ?>" class="block-20">
                                    <img src="<?= base_url('/assets/images/thumb/') . $b->thumbnail; ?>" class="block-20">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#"><?= date('d M Y', strtotime($b->date_created)); ?></a></div>
                                        <div><a href="#"><?= $b->access; ?></a></div>
                                    </div>
                                    <h3 class="heading"><a href="<?= base_url('landing/singleblog/') .$b->id_blog; ?>"><?= $b->judul_blog; ?></a></h3>
                                    <p><?php echo limit_words($b->konten_isi, 50); ?></p>
                                    <p><a href="<?= base_url('landing/singleblog/') . $b->id_blog; ?>" class="btn btn-primary py-2 px-3">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- .col-lg-8 -->
            <!-- END content blog -->

            <!-- navigation optional -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box">
                    <form action="<?= base_url('landing/searchblog'); ?>" method="post" class="search-form">
                        <div class="form-group">
                            <span class="icon ion-ios-search"></span>
                            <input type="text" class="form-control" name="keyword" placeholder="Search Blog">
                        </div>
                    </form>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Recent Blog</h3>
                    <?php foreach ($blog as $b) : ?>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(./assets/images/thumb/<?= $b->thumbnail; ?>);"></a>
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
            <!-- END navigation optional -->
        </div>
    </div>
    <!-- END container -->
</section>
<!-- END section -->