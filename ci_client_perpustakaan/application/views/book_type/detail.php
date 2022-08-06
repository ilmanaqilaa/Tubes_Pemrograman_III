<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Peminjaman</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('book_type'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6 mx-auto">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data Peminjaman
                </div>

                <div class="card-body">
                <?php foreach ($book_type as $book_type): ?>
                    <h5 class="card-title"><b>ID Jenis Buku :</b><br> <?= $book_type['book_type_id'] ?> </h5>
                    <h6 class="card-subtitle mb-2 text-muted"><b>Jenis Buku</B> :</b><br><?= $book_type['book_type_name'] ?></h6>
                    <p></p>
                    <a href="<?= base_url(); ?>booktype" class="btn btn-primary">Kembali</a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</div>