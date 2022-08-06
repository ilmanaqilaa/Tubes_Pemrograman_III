<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Petugas</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('book_type'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">P</li>
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

                    <?php foreach ($book_type as $book_type): ?>

                    <div class="form-group row">
                        <label for="book_type_id" class="col-sm-2 col-form-label">book_type_id</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="book_type_id" name="book_type_id" value=" <?= $book_type['book_type_id']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('book_type_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="book_type_name" class="col-sm-2 col-formlabel">book_type_name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="book_type_name" name="book_type_name" value=" <?= $book_type['book_type_name']; ?>">
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
                    <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>