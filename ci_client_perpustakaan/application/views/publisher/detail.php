<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Penerbit</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('publisher'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6 mx-auto">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data Penerbit
                </div>

                <div class="card-body">
                <?php foreach ($publisher as $publisher): ?>
                    <h5 class="card-title"><b>ID Penerbit :</b><br> <?= $publisher['publisher_id'] ?> </h5>
                    <p class="card-text"><b>Nama Penerbit :</b><br><?= $publisher['publisher_name'] ?></p>
                    <p></p>
                    <a href="<?= base_url(); ?>publisher" class="btn btn-primary">Kembali</a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</div>