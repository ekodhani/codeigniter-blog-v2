<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row mb-5">
        <div class="col-lg-4">
            <!-- card -->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
            <div class="card mb-5">
                <img src="<?= base_url('assets/images/admin/') . $admin['gambar']; ?>" class="card-img">
                <div class="card-body">
                    <h3 class="card-title"><?= $admin['nama_admin']; ?></h3>
                    <p>Alamat : <?= $admin['alamat']; ?></p>
                    <p>Email : <?= $admin['email']; ?></p>
                    <p>No.handphone : <?= $admin['no_handphone']; ?></p>
                    <p>Date Created : <?= date('d-M-Y', strtotime($admin['date_created'])); ?></p>
                    <a href="<?= base_url('admin/editprofile'); ?>" class="btn btn-info"><i class="fas fa-fw fa-edit"></i> Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->