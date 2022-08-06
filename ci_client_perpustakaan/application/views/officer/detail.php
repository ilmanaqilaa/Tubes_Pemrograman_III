<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Pegawai</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('officer'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6 mx-auto">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data Pegawai
                </div>

                <div class="card-body">
                <?php foreach ($officer as $officer): ?>
                    <h5 class="card-title"><b>ID Pegawai :</b><br> <?= $officer['officer_id'] ?> </h5>
                    <p class="card-text"><b>Nama Pegawai :</b><br><?= $officer['officer_name'] ?></p>
                    <p class="card-text"><b>Telepon :</b><br><?= $officer['phone'] ?></p>
                    <p class="card-text"><b>Jenis Kelamin :</b><br><?= $officer['gender'] ?></p>
                    <p></p>
                    <a href="<?= base_url(); ?>officer" class="btn btn-primary">Kembali</a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</div>