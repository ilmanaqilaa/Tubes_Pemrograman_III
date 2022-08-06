<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Pegawai</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('officer'); ?>">List Data</a></li>
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

                    <?php foreach ($officer as $officer): ?>

                    <div class="form-group row">
                        <label for="officer_id" class="col-sm-2 col-form-label">ID Petugas</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="officer_id" name="officer_id" value=" <?= $officer['officer_id']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('officer_id') ?>
                            </small>
                        </div>

                        <label for="officer_name" class="col-sm-2 col-formlabel">Nama Petugas</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="officer_name" name="officer_name" value=" <?= $officer['officer_name']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('officer_name') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">No Telepon</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="phone" name="phone" value=" <?= $officer['phone']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('phone') ?>
                            </small>
                        </div>

                        <label for="gender" class="col-sm-2 col-formlabel">Jenis Kelamin</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="gender" name="gender" value=" <?= $officer['gender']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('gender') ?>
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