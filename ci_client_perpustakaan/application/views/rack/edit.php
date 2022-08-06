<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Rak</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('rack'); ?>">List Data</a></li>
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

                    <?php foreach ($rack as $rack): ?>

                    <div class="form-group row">
                        <label for="rack_id" class="col-sm-2 col-form-label">ID Rak</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="rack_id" name="rack_id" value=" <?= $rack['rack_id']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('rack_id') ?>
                            </small>
                        </div>

                        <label for="rack_name" class="col-sm-2 col-formlabel">Nama Rak</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="rack_name" name="rack_name" value=" <?= $rack['rack_name']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('rack_name') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="column" class="col-sm-2 col-formlabel">Kolom Rak</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="column" name="column" value=" <?= $rack['column']; ?>" readonly>
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
                    <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>