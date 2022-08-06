<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Buku</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('book'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                                        <div class="form-group row">
                        <label for="transaction_id" class="col-sm-2 col-form-label">ID Transaksi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="transaction_id" name="transaction_id" value="<?= set_value('transaction_id'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('transaction_id') ?>
                            </small>
                        </div>
                        </div>

                    <div class="form-group row">
                        <label for="book_id" class="col-sm-2 col-form-label">ID Buku</label>
                        <div class="col-sm-3">
                             <select class="form-control" id="book_id" name="book_id">
                                <option value="#" selected disabled>--Pilih ID Buku--</option>
                                <option value="book_001" <?php if (set_value('book_id') == "book_001") : echo "selected"; endif; ?>>book_001</option>
                                <option value="book_002" <?php if (set_value('book_id') == "book_002") : echo "selected"; endif; ?>>book_002</option>
                                <option value="book_003" <?php if (set_value('book_id') == "book_003") : echo "selected"; endif; ?>>book_003</option>
                                <option value="book_004" <?php if (set_value('book_id') == "book_004") : echo "selected"; endif; ?>>book_004</option>
                                <option value="book_005" <?php if (set_value('book_id') == "book_005") : echo "selected"; endif; ?>>book_005</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('book_id') ?>
                            </small>
                        </div>

                        <label for="officer_id" class="col-sm-2 col-form-label">ID Petugas</label>
                        <div class="col-sm-3">
                        <select class="form-control" id="officer_id" name="officer_id">
                                <option value="#" selected disabled>--Pilih ID Petugas--</option>
                                <option value="admin_001" <?php if (set_value('officer_id') == "admin_001") : echo "selected"; endif; ?>>admin_001</option>
                                <option value="admin_002" <?php if (set_value('officer_id') == "admin_002") : echo "selected"; endif; ?>>admin_002</option>
                                <option value="admin_003" <?php if (set_value('officer_id') == "admin_003") : echo "selected"; endif; ?>>admin_003</option>
                                <option value="admin_004" <?php if (set_value('officer_id') == "admin_004") : echo "selected"; endif; ?>>admin_004</option>
                                <option value="admin_005" <?php if (set_value('officer_id') == "admin_005") : echo "selected"; endif; ?>>admin_005</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('officer_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="borrower_id" class="col-sm-2 col-form-label">ID Peminjam</label>
                        <div class="col-sm-3">
                        <select class="form-control" id="borrower_id" name="borrower_id">
                                <option value="#" selected disabled>--Pilih ID Peminjam--</option>
                                <option value="bor_001" <?php if (set_value('borrower_id') == "bor_001") : echo "selected"; endif; ?>>bor_001</option>
                                <option value="bor_002" <?php if (set_value('borrower_id') == "bor_002") : echo "selected"; endif; ?>>bor_002</option>
                                <option value="bor_003" <?php if (set_value('borrower_id') == "bor_003") : echo "selected"; endif; ?>>bor_003</option>
                                <option value="bor_004" <?php if (set_value('borrower_id') == "bor_004") : echo "selected"; endif; ?>>bor_004</option>
                                <option value="bor_005" <?php if (set_value('borrower_id') == "bor_005") : echo "selected"; endif; ?>>bor_005</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('borrower_id') ?>
                            </small>
                        </div>

                        <label for="borrow_date" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                        <div class="col-sm-3">
                        <input type="date" class="form-control" id="borrow_date" name="borrow_date" value=" <?= set_value('borrow_date'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('borrow_date') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="return_date" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                        <div class="col-sm-3">
                        <input type="date" class="form-control" id="return_date" name="return_date" value=" <?= set_value('return_date'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('return_date') ?>
                            </small>
                        </div>

                        <label for="status" class="col-sm-2 col-form-label">Status Pinjaman</label>
                        <div class="col-sm-3">
                        <select class="form-control" id="status" name="status">
                                <option value="#" selected disabled>--Pilih Status--</option>
                                <option value="Dipinjam" <?php if (set_value('status') == "Dipinjam") : echo "selected"; endif; ?>>Dipinjam</option>
                                <option value="Kembali" <?php if (set_value('status') == "Kembali") : echo "selected"; endif; ?>>Kembali</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('status') ?>
                            </small>
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>