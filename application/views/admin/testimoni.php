<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- content row-->
    <div class="row">

        <div class="col mb-4">
            <!-- button -->
            <a href="<?= base_url('admin/addtestimoni'); ?>" class="btn btn-primary"><i class="fas fa-fw fa-plus-circle"></i> Add Testimoni</a>
        </div>

    </div>
    <!-- End of Content row -->

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
    <div class="row">
        <?php foreach ($testimoni as $t) : ?>
            <div class="col-lg-6">

                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between border-left-success">
                        <h6 class="m-0 font-weight-bold text-primary"><?= $t->nama; ?></h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Option:</div>
                                <a class="dropdown-item" href="<?= base_url('admin/edittestimoni/') . $t->id_testimoni; ?>"><i class="fas fa-fw fa-edit"></i> Edit</a>
                                <a class="dropdown-item tombol-hapus" href="<?= base_url('admin/hapustestimoni/') . $t->id_testimoni; ?>"><i class="fas fa-fw fa-trash"></i> Hapus</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('admin/detailtestimoni') . $t->id_testimoni; ?>"><i class="fas fa-fw fa-eye"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body border-left-success">
                        <?= $t->deskripsi; ?>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->