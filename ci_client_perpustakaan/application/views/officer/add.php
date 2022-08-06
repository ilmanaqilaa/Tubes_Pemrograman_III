<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Petugas</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('officer'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="Officer">Tambah Data</li>
        </ol>
    </nav>
    <div class="row mt-2">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="officer_id" class="col-sm-2 col-form-label">ID Petugas</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="Masukan ID Anda" id="officer_id" name="officer_id" value="<?= set_value('officer_id'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('officer_id') ?>
                            </small>
                        </div>
                        <label for="officer_name" class="col-sm-2 col-form-label">Nama Petugas</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="officer_name" placeholder="Masukan Nama Anda" name="officer_name" value="<?= set_value('officer_name'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('officer_name') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">NO Telepon</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" placeholder="Masukan Nomor HP Anda" id="phone" name="phone" value="<?= set_value('phone'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('phone') ?>
                            </small>
                        </div>
                        <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-3">
                            <select class="form-control" id="gender" name="gender">
                                <option value="#" selected disabled>--Pilih Jenis Kelamin--</option>
                                <option value="Laki - Laki" <?php if (set_value('gender') == "Laki - Laki") : echo "selected"; endif; ?>>Laki - Laki</option>
                                <option value="Perempuan" <?php if (set_value('gender') == "Perempuan") : echo "selected"; endif; ?>>Perempuan</option>
                            </select>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>