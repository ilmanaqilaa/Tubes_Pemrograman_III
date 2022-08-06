<style>
        .gradient-custom-2 {
    /* fallback for old browsers */
    background: #fccb90;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
    }

        @media (min-width: 768px) {
            .gradient-form {
            height: 100vh !important;
        }
    }
        @media (min-width: 769px) {
            .gradient-custom-2 {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem;
        }
    }
</style>

<title> Login </title>


<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
                
                <div class="text-center">
                  <h4 class="mt-1 mb-5 pb-1">Aplikasi Pendataan Perpustakaan</h4>
                </div>

                  <?php if ($this->session->flashdata('message')) : ?>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          Error! <?= $this->session->flashdata('message'); ?>
                          <button type="button" class="close" data-dismiss="alert" arialabel="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                  <?php endif; ?>

                <?php
                    //create form
                    $attributes = array('method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                ?>
                  <p>Login akunmu disini !</p>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="username" >Nama Pengguna</label>
                    <input type="text" id="username" name="username" class="form-control"
                      placeholder="Masukan Nama Pengguna" required/>
                    <div class="invalid-feedback">
                      <?php echo form_error('username') ?>
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="password" >Kata Sandi</label>
                    <input type="password" id="password" name="password" class="form-control"
                    placeholder="Masukan Kata Sandi" required/>
                    <div class="invalid-feedback">
                        <?php echo form_error('password') ?>
                    </div>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Masuk</button>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Belum Punya Akun?   </p>
                  </div>
                    <a type="button" class="d-flex align-items-center justify-content-center pb-4" href="<?= base_url('register'); ?>" class="btn btn-outline-danger">Buat Akun</a>
 

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Selamat Datang di Perpustakaan !</h4>
                <p class="small mb-0">Tempat Dimana Mengelolah Perpustakaan</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>