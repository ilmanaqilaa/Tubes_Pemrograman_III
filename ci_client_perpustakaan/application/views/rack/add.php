<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Rak</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('buku'); ?>">List Data</a></li>
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
                        <label for="rack_id" class="col-sm-2 col-form-label">ID Rak</label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="Masukan ID Rak" class="form-control" id="rack_id" name="rack_id" value="<?= set_value('rack_id'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('rack_id') ?>
                            </small>
                        </div>

                        <label for="rack_name" class="col-sm-2 col-form-label">Nama Rak</label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="Masukan Nama Rak" class="form-control" id="rack_name" name="rack_name" value=" <?= set_value('rack_name'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('rack_name') ?>
                            </small>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="column" class="col-sm-2 col-form-label">Kolom Rak</label>
                        <div class="col-sm-8">
                        <select class="form-control" id="column" name="column">
                                <option value="#" selected disabled>--Pilih Kolom Rak--</option>
                                <option value="Kolom 1" <?php if (set_value('column') == "Kolom 1") : echo "selected"; endif; ?>>Kolom 1</option>
                                <option value="Kolom 2" <?php if (set_value('column') == "Kolom 2") : echo "selected"; endif; ?>>Kolom 2</option>
                                <option value="Kolom 3" <?php if (set_value('column') == "Kolom 3") : echo "selected"; endif; ?>>Kolom 3</option>
                                <option value="Kolom 4" <?php if (set_value('column') == "Kolom 4") : echo "selected"; endif; ?>>Kolom 4</option>
                                <option value="Kolom 5" <?php if (set_value('column') == "Kolom 5") : echo "selected"; endif; ?>>Kolom 5</option>
                                <option value="Kolom 6" <?php if (set_value('column') == "Kolom 6") : echo "selected"; endif; ?>>Kolom 6</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('column') ?>
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