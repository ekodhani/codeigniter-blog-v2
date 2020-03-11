<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row mb-5">
        <div class="col-lg-6">
            <div class="card mb-5">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $admin['nama_admin']; ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $admin['email']; ?>" readonly>
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="10"><?= $admin['alamat']; ?></textarea>
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nohp">Nomor Handphone</label>
                            <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $admin['no_handphone']; ?>">
                            <?= form_error('nohp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control" id="pass" name="pass">
                            <?= form_error('pass', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="pass1">Re type password</label>
                            <input type="password" class="form-control" id="pass1" name="pass1">
                            <?= form_error('pass1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <div class="row">
                                <div class="col-2">
                                    <img src="<?= base_url('assets/images/admin/') . $admin['gambar']; ?>" title="<?= $admin['gambar']; ?>" class="rounded" width="100%">
                                </div>
                                <div class="col">
                                    <input type="file" class="form-control-file" id="gambar" name="gambar">
                                    <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <a href="<?= base_url('admin/profile'); ?>" class="btn btn-danger"><i class="fas fa-fw fa-window-close"></i> Batal</a>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-edit"></i> Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->