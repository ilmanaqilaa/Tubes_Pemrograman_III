<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Rak</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('booktype'); ?>">List Data</a></li>
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
                        <label for="book_type_id" class="col-sm-2 col-form-label">book_type_id</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="book_type_id" name="book_type_id" value="<?= set_value('book_type_id'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('book_type_id') ?>
                            </small>
                        </div>

                        <label for="book_type_name" class="col-sm-2 col-form-label">book_type_name</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="book_type_name" name="book_type_name" value=" <?= set_value('book_type_name'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('book_type_name') ?>
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