<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- row -->
    <div class="row">
        <div class="col-lg-10">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="judul">Judul Blog</label>
                    <input type="text" class="form-control" name="judul" value="<?= $detail['judul_blog']; ?>">
                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="konten">Isi Konten</label>
                    <textarea class="form-control" name="konten" id="konten" cols="30" rows="10"><?= $detail['konten_isi']; ?></textarea>
                    <?= form_error('konten', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="thumbnail">Gambar</label>
                    <div class="row">
                        <div class="col-2">
                            <img src="<?= base_url('assets/images/thumb/') . $detail['thumbnail']; ?>" title="<?= $detail['thumbnail']; ?>" class="rounded" width="100%">
                        </div>
                        <div class="col">
                            <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
                            <?= form_error('thumbnail', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <a href="<?= base_url('admin/blog'); ?>" class="btn btn-danger"><i class="fas fa-fw fa-window-close"></i> Batal</a>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-edit"></i> Edit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- end row -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->