<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- row -->
    <div class="row">
        <div class="col-lg-6">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="divisi">Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan" id="divisi">
                    <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="opini">Kata-Katanya</label>
                    <textarea name="opini" id="opini" cols="30" rows="10" class="form-control"></textarea>
                    <?= form_error('opini', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control-file" id="gambar" name="gambar">
                    <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i> Kirim</button>
                </div>
            </form>
        </div>
    </div>
    <!-- end row -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->