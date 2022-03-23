<main role="main" class="container">
    <?php $this->load->view('layout/_alert') ?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    Formulir Registrasi
                </div>
                <div class="card-body">
                    <?php form_open('register', ['method' => 'POST']) ?>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <?php form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'autofocus' => true]) ?>
                        <?php form_error('name') ?>
                    </div>
                    <div class="form-group">
                        <label for="">E-Mail</label>
                        <?php form_input([
                            'type' => 'email', 'name' => 'name', 'values' => $input->email,
                            'class' => 'form-control', 'placeholder' => 'Masukan alamat email aktif', 'riquired' => true
                        ]) ?>
                        <?php form_error('email') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <?php form_password('password', '', [
                            'class' => 'form-control',
                            'placeholder' => 'Masukan password mminimal 8 karakter', 'required' => true
                        ]) ?>
                        <?php form_password('password') ?>
                    </div>
                    <div class="from-group">
                        <label for="">Konfirmasi Password</label>
                        <?php form_password(
                            'password-confirmation',
                            '',
                            ['class' => 'form-control', 'placeholder' => 'Masukan password yang sama', 'required' => true]
                        ) ?>
                        <?php form_error('password-confirmation') ?>
                    </div>
                    </form>

                    <section class="text-center">
                        <button type="submit" class="btn btn-primary"> Register</button><br>
                        <h5 class="mt-3">Sudah Punya Akun?<a href="register.html"><strong> Login</strong></a></h5>
                    </section>
                    <?php form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>
