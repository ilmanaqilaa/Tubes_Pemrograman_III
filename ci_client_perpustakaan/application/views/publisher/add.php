<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Buku</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('publisher'); ?>">List Data</a></li>
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
                        <label for="publisher_id" class="col-sm-2 col-form-label">ID Penerbit</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="publisher_id" placeholder="Masukan ID Penerbit" name="publisher_id" value="<?= set_value('publisher_id'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('publisher_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="publisher_name" class="col-sm-2 col-form-label">Nama Penerbit</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="publisher_name" placeholder="Masukan Nama Penerbit" name="publisher_name" value="<?= set_value('publisher_name'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('publisher_name') ?>
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