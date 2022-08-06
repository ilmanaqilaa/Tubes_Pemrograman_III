<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Buku</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('book'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6 mx-auto">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data buku
                </div>

                <div class="card-body">
                <?php foreach ($book as $book): ?>
                    <h5 class="card-title"><b>ID buku :</b><br> <?= $book['book_id'] ?> </h5>
                    <p class="card-text"><b>Nama Buku :</b><br><?= $book['book_name'] ?></p>
                    <p class="card-text"><b>Nama Penerbit :</b><br><?= $book['publisher_name'] ?></p>
                    <p class="card-text"><b>Jenis Buku :</b><br><?= $book['book_type_name'] ?></p>
                    <p class="card-text"><b>Nama Rak :</b><br><?= $book['rack_name'] ?></p>
                    <p class="card-text"><b>Halaman</b><br><?= $book['page'] ?></p>
                    <p class="card-text"><b>Tahun Terbit</b><br><?= $book['publication_year'] ?></p>
                    <p></p>
                    <a href="<?= base_url(); ?>book" class="btn btn-primary">Kembali</a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</div>