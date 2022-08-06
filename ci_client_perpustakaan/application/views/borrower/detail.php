<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Peminjam</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('borrower'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-8 mx-auto">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data Peminjam
                </div>

                <div class="card-body">
                <?php foreach ($borrower as $borrower): ?>
                    <h5 class="card-title"><b>ID Peminjam :</b><br> <?= $borrower['borrower_id'] ?> </h5>
                    <p class="card-text"><b>Nama Peminjam :</b><br><?= $borrower['name'] ?></p>
                    <p class="card-text"><b>Jenis Kelamin :</b><br><?= $borrower['gender'] ?></p>
                    <p class="card-text"><b>Kontak :</b><br><?= $borrower['phone'] ?></p>
                    <p class="card-text"><b>Alamat :</b><br><?= $borrower['address'] ?></p>
                    <p class="card-text"><b>Jurusan :</b><br><?= $borrower['study_program'] ?></p>
                    <p class="card-text"><b>Kelas :</b><br><?= $borrower['class'] ?></p>
                    <a href="<?= base_url(); ?>borrower" class="btn btn-primary">Kembali</a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</div>