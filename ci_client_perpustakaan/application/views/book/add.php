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
                        <label for="book_id" class="col-sm-2 col-form-label">ID Buku</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="book_id" name="book_id" value="<?= set_value('book_id'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('book_id') ?>
                            </small>
                        </div>

                        <label for="publisher_id" class="col-sm-2 col-form-label">ID Penerbit</label>
                        <div class="col-sm-3">
                        <select class="form-control" id="publisher_id" name="publisher_id">
                                <option value="#" selected disabled>--Pilih ID Penerbit--</option>
                                <option value="pub_001" <?php if (set_value('publisher_id') == "pub_001") : echo "selected"; endif; ?>>pub_001</option>
                                <option value="pub_002" <?php if (set_value('publisher_id') == "pub_002") : echo "selected"; endif; ?>>pub_002</option>
                                <option value="pub_003" <?php if (set_value('publisher_id') == "pub_003") : echo "selected"; endif; ?>>pub_003</option>
                                <option value="pub_004" <?php if (set_value('publisher_id') == "pub_004") : echo "selected"; endif; ?>>pub_004</option>
                                <option value="pub_005" <?php if (set_value('publisher_id') == "pub_005") : echo "selected"; endif; ?>>pub_005</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('publisher_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="book_type_id" class="col-sm-2 col-form-label">ID Jenis Buku</label>
                        <div class="col-sm-3">
                        <select class="form-control" id="book_type_id" name="book_type_id">
                                <option value="#" selected disabled>--Pilih ID Jenis Buku--</option>
                                <option value="type_001" <?php if (set_value('book_type_id') == "type_001") : echo "selected"; endif; ?>>type_001</option>
                                <option value="type_002" <?php if (set_value('book_type_id') == "type_002") : echo "selected"; endif; ?>>type_002</option>
                                <option value="type_003" <?php if (set_value('book_type_id') == "type_003") : echo "selected"; endif; ?>>type_003</option>
                                <option value="type_004" <?php if (set_value('book_type_id') == "type_004") : echo "selected"; endif; ?>>type_004</option>
                                <option value="type_005" <?php if (set_value('book_type_id') == "type_005") : echo "selected"; endif; ?>>type_005</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('book_type_id') ?>
                            </small>
                        </div>

                        <label for="rack_id" class="col-sm-2 col-form-label">ID Rak</label>
                        <div class="col-sm-3">
                        <select class="form-control" id="rack_id" name="rack_id">
                                <option value="#" selected disabled>--Pilih ID Jenis Rak--</option>
                                <option value="rack_001" <?php if (set_value('rack_id') == "rack_001") : echo "selected"; endif; ?>>rack_001</option>
                                <option value="rack_002" <?php if (set_value('rack_id') == "rack_002") : echo "selected"; endif; ?>>rack_002</option>
                                <option value="rack_003" <?php if (set_value('rack_id') == "rack_003") : echo "selected"; endif; ?>>rack_003</option>
                                <option value="rack_004" <?php if (set_value('rack_id') == "rack_004") : echo "selected"; endif; ?>>rack_004</option>
                                <option value="rack_005" <?php if (set_value('rack_id') == "rack_005") : echo "selected"; endif; ?>>rack_005</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('rack_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="book_name" class="col-sm-2 col-form-label">Nama Buku</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="book_name" name="book_name" value=" <?= set_value('book_name'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('book_name') ?>
                            </small>
                        </div>

                        <label for="page" class="col-sm-2 col-form-label">Halaman Buku</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="page" name="page" value=" <?= set_value('page'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('page') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="publication_year" class="col-sm-2 col-form-label">Tahun Terbit</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="publication_year" name="publication_year" value="<?= set_value('publication_year'); ?>">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>