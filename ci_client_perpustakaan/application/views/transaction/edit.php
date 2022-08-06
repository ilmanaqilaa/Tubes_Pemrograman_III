<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Peminjaman</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('transaction'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes); ?>

                    <?php foreach ($transaction as $transaction): ?>

                    <div class="form-group row">
                        <label for="transaction_id" class="col-sm-2 col-form-label">Kode Transaksi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="transaction_id" name="transaction_id" value=" <?= $transaction['transaction_id']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('transaction_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="book_id" class="col-sm-2 col-formlabel">ID Buku</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="book_id" name="book_id" value=" <?= $transaction['book_id']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('book_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="officer_id" class="col-sm-2 col-formlabel">ID Petugas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="officer_id" name="officer_id" value=" <?= $transaction['officer_id']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('officer_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="borrower_id" class="col-sm-2 col-formlabel">ID Peminjam</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="borrower_id" name="borrower_id" value=" <?= $transaction['borrower_id']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('borrower_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="borrow_date" class="col-sm-2 col-formlabel">Tanggal Pinjam</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="borrow_date" name="borrow_date" value=" <?= $transaction['borrow_date']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('borrow_date') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="return_date" class="col-sm-2 col-formlabel">Tanggal Kembali</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="return_date" name="return_date" value=" <?= $transaction['return_date']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('return_date') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-sm-2 col-formlabel">Status Peminjaman</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="status" name="status">
                                <option value="Kembali" selected disabled>Pilih</option>
                                <option value="Kembali" <?php if ($transaction['status'] == "Kembali") : echo "selected"; endif; ?>>Kembali</option>
                                <option value="Dipinjam" <?php if ($transaction['status'] == "Dipinjam") : echo "selected"; endif; ?>>Dipinjam</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('status') ?>
                            </small>
                        </div>
                    </div>
                    
                    <!-- <div class="form-group row">
                    <label for="id_peminjam" class="col-sm-2 col-form-label">ID PEMINJAM</label>
                    <div class="col-sm-5">
                            <select class="form-control" id="id_peminjam" name="id_peminjam">
                                <?php 
                                foreach ($data_peminjam as $row) :
                                ?>
                                <option value="<?= $row['id_peminjam'] ?>" <?php if ($transaction['nama'] == $row['nama']) : echo "selected"; endif; ?>> <?= $row['nama'] ?> </option>
                                <?php endforeach; ?>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('id_peminjam') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                    <label for="id_buku" class="col-sm-2 col-form-label">id_buku</label>
                    <div class="col-sm-8">
                            <select class="form-control" id="id_buku" name="id_buku">
                                <?php 
                                foreach ($data_buku as $row) :
                                ?>
                                <option value="<?= $row['id_buku'] ?>" <?php if ($transaction['nama_buku'] == $row['nama_buku']) : echo "selected"; endif; ?>> <?= $row['nama_buku'] ?> </option>
                                <?php endforeach; ?>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('id_buku') ?>
                            </small>
                        </div>
                    </div> -->

                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>