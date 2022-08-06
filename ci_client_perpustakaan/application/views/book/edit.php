<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Buku</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('book'); ?>">List Data</a></li>
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

                    <?php foreach ($book as $book): ?>

                    <div class="form-group row">
                        <label for="book_id" class="col-sm-2 col-form-label">book_id</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="book_id" name="book_id" value=" <?= $book['book_id']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('book_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="publisher_id" class="col-sm-2 col-formlabel">publisher_id</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="publisher_id" name="publisher_id" value=" <?= $book['publisher_id']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('publisher_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="book_type_id" class="col-sm-2 col-formlabel">book_type_id</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="book_type_id" name="book_type_id" rows="3"><?= $book['book_type_id']; ?></textarea>
                            <small class="text-danger">
                                <?php echo form_error('book_type_id') ?>
                            </small>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="rack_id" class="col-sm-2 col-form-label">rack_id</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="rack_id" name="rack_id" value="<?= $book['rack_id']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('rack_id') ?>
                            </small>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="book_name" class="col-sm-2 col-form-label">book_name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="book_name" name="book_name" value="<?= $book['book_name']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('book_name') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="page" class="col-sm-2 col-form-label">page</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="page" name="page" value="<?= $book['page']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('page') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="publication_year" class="col-sm-2 col-form-label">publication_year</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="publication_year" name="publication_year" value="<?= $book['publication_year']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('publication_year') ?>
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