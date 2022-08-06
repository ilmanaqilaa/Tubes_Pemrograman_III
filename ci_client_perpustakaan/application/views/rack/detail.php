<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Rak</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('rack'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6 mx-auto">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data Rak
                </div>

                <div class="card-body">
                <?php foreach ($rack as $rack): ?>
                    <h5 class="card-title"><b>ID Rak :</b><br> <?= $rack['rack_id'] ?> </h5>
                    <p class="card-text"><b>Nama Rak :</b><br><?= $rack['rack_name'] ?></p>
                    <p class="card-text"><b>Kolom Rak :</b><br><?= $rack['column'] ?></p>
                    <p></p>
                    <a href="<?= base_url(); ?>rack" class="btn btn-primary">Kembali</a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</div>