<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Data Peminjam</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('borrower'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="study_program">Add Data</li>
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
                        <label for="borrower_id" class="col-sm-2 col-form-label">ID Peminjam</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="borrower_id" placeholder="Masukan ID Peminjam Anda" name="borrower_id" value="<?= set_value('borrower_id'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('borrower_id') ?>
                            </small>
                        </div>
                    
                        <label for="name" class="col-sm-2 col-form-label">Nama Peminjam</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="name" placeholder="Masukan Nama Anda" name="name" value="<?= set_value('name'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('name') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
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

                        <label for="phone" class="col-sm-2 col-form-label">Kontak</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="phone" placeholder="Masukan Kontak Anda" name="phone" value="<?= set_value('phone'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('phone') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                        <textarea class="form-control" id="address" name="address" placeholder="Masukan Alamat Anda" value=" <?= set_value('address'); ?>" rows="3"></textarea>
                            <small class="text-danger">
                                <?php echo form_error('address') ?>
                            </small>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="study_program" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-3">
                        <select class="form-control" id="study_program" name="study_program">
                                <option value="#" selected disabled>--Pilih Jurusan--</option>
                                <option value="D3 Teknik Informatika" <?php if (set_value('study_program') == "D3 Teknik Informatika") : echo "selected"; endif; ?>>D3 Teknik Informatika</option>
                                <option value="D4 Teknik Informatika" <?php if (set_value('study_program') == "D4 Teknik Informatika") : echo "selected"; endif; ?>>D4 Teknik Informatika</option>
                                <option value="S1 Data Sains" <?php if (set_value('study_program') == "S1 Data Sains") : echo "selected"; endif; ?>>S1 Data Sains</option>
                                <option value="D4 Logistik Bisnis" <?php if (set_value('study_program') == "D4 Logistik Bisnis") : echo "selected"; endif; ?>>D4 Logistik Bisnis</option>
                                <option value="D4 Manajemen Bisnis" <?php if (set_value('study_program') == "D4 Manajemen Bisnis") : echo "selected"; endif; ?>>D4 Manajemen Bisnis</option>
                                <option value="D4 Akuntasi" <?php if (set_value('study_program') == "D4 Akuntasi") : echo "selected"; endif; ?>>D4 Akuntasi</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('study_program') ?>
                            </small>
                        </div>

                        <label for="class" class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-3">
                        <select class="form-control" id="class" name="class">
                                <option value="#" selected disabled>--Pilih Kelas--</option>
                                <option value="1A" <?php if (set_value('class') == "1A") : echo "selected"; endif; ?>>1A</option>
                                <option value="2A" <?php if (set_value('class') == "2A") : echo "selected"; endif; ?>>2A</option>
                                <option value="3A" <?php if (set_value('class') == "3A") : echo "selected"; endif; ?>>3A</option>
                                <option value="1B" <?php if (set_value('class') == "1B") : echo "selected"; endif; ?>>1B</option>
                                <option value="2B" <?php if (set_value('class') == "2B") : echo "selected"; endif; ?>>2B</option>
                                <option value="3B" <?php if (set_value('class') == "3B") : echo "selected"; endif; ?>>3B</option>
                                <option value="1C" <?php if (set_value('class') == "1C") : echo "selected"; endif; ?>>1C</option>
                                <option value="2C" <?php if (set_value('class') == "2C") : echo "selected"; endif; ?>>2C</option>
                                <option value="3C" <?php if (set_value('class') == "3C") : echo "selected"; endif; ?>>3C</option>
                            </select>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>