<!-- Begin Page Content -->
<div class="container-fluid">

    <a href="<?= base_url('admin/blog'); ?>" class="mb-4 btn btn-primary"><i class="fas fa-fw fa-arrow-left"></i> Back</a>
    <div class="row">
        <div class="col">
            <h1 class="h3 mb-4"><?= $blog['judul_blog']; ?></h1>
        </div>
    </div>
    <div class="row mb-2 ml-auto">
        <div class="col-lg-2">
            <small><?= date('d M Y', strtotime($blog['date_created'])); ?> - </small>
            <small><?= $blog['access']; ?></small>
        </div>
    </div>
    <img src="<?= base_url('assets/images/thumb/') . $blog['thumbnail']; ?>" width="100%" title="<?= $blog['judul_blog']; ?>">
    <!-- row -->
    <div class="row">
        <div class="col mt-4">
            <?= $blog['konten_isi']; ?>
        </div>
    </div>
    <!-- end row -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->