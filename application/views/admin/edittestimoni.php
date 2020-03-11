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
                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $testimoni['nama']; ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="divisi">Pekerjaan</label>
                    <input type="text" class="form-control" name="divisi" id="divisi" value="<?= $testimoni['divisi']; ?>">
                    <?= form_error('divisi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="opini">Kata-Katanya</label>
                    <textarea name="opini" id="opini" cols="30" rows="10" class="form-control"><?= $testimoni['deskripsi']; ?></textarea>
                    <?= form_error('opini', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <div class="row">
                        <div class="col-2">
                            <img src="<?= base_url('assets/images/testimoni/') . $testimoni['gambar']; ?>" title="<?= $testimoni['gambar']; ?>" class="rounded" width="100%">
                        </div>
                        <div class="col">
                            <input type="file" class="form-control-file" id="thumbnail" name="gambar">
                            <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <a href="<?= base_url('admin/testimoni'); ?>" class="btn btn-danger"><i class="fas fa-fw fa-window-close"></i> Batal</a>
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