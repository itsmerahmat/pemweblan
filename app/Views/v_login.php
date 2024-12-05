<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-2">Silahkan Login</h3>
        <p class="text-center text-muted">Belum punya akun? <a href="<?= base_url('register') ?>">Daftar</a></p>

        <!-- Menampilkan pesan flashdata jika ada -->
        <?php if (session()->getFlashdata('msg')) : ?>
            <div class="alert alert-success text-center">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php elseif (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger text-center">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <!-- Form Login -->
        <?= form_open('login/auth') ?>
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
        <?= form_close() ?>

        <!-- Footer -->
        <p class="text-center text-muted mt-3">&copy;2024. All Rights Reserved.</p>
    </div>
</div>
<?= $this->endSection() ?>