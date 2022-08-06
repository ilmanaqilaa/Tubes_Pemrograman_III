<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Peminjam</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('borrower'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="study_program">Edit Data</li>
        </ol>
    </nav>
    <div class="row mt-2">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes); ?>

                    <?php foreach ($borrower as $borrower): ?>

                    <div class="form-group row">
                        <label for="borrower_id" class="col-sm-2 col-form-label">ID Peminjam</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="borrower_id" name="borrower_id" value=" <?= $borrower['borrower_id']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('borrower_id') ?>
                            </small>
                        </div>

                        <label for="name" class="col-sm-2 col-formlabel">Nama Peminjam</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="name" name="name" value=" <?= $borrower['name']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('name') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="gender" class="col-sm-2 col-formlabel">Jenis Kelamin</label>
                        <div class="col-sm-3">
                        <input type="text" class="form-control" id="gender" name="gender" value=" <?= $borrower['gender']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('gender') ?>
                            </small>
                        </div>

                        <label for="phone" class="col-sm-2 col-form-label">Kontak</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="phone" name="phone" value="<?= $borrower['phone']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('phone') ?>
                            </small>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="address" name="address" value="<?= $borrower['address']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('address') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="study_program" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="study_program" name="study_program" value="<?= $borrower['study_program']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('study_program') ?>
                            </small>
                        </div>

                        <label for="class" class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="class" name="class" value="<?= $borrower['class']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('class') ?>
                            </small>
                        </div>
                    </div>

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