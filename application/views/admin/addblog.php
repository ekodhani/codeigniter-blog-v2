<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- row -->
    <div class="row">
        <div class="col-lg-8">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="judul">Judul Blog</label>
                    <input type="text" class="form-control" name="judul">
                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="konten">Isi Konten</label>
                    <textarea class="form-control" name="konten" id="konten" cols="30" rows="10"></textarea>
                    <?= form_error('konten', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control-file" id="gambar" name="gambar">
                    <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fab fa-fw fa-blogger"></i> Kirim</button>
                </div>
            </form>
        </div>
    </div>
    <!-- end row -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->