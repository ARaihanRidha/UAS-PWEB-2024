<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Fakultas Teknik Universitas Lambung Mangkurat</title>
    <link rel="stylesheet" href="<?= base_url('css/register.css') ?>">
    <style>
        .image-section {
            background-image: url('<?= base_url('img/UAS1.webp') ?>');
            background-size: cover;
            background-position: center;
            max-width: 620px;
            background-position: 90% 10%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-section"></div>
        <div class="form-section">
            <div class="header-section">
                <img src="<?= base_url('img/ulm.png') ?>" alt="Logo Universitas Lambung Mangkurat">
                <div class="header-text">
                    <h1>Fakultas Teknik</h1>
                    <h2>Universitas Lambung Mangkurat</h2>
                </div>
            </div>
            <p class="subtitle"><b>Buat Sebuah Akun</b></p>
            <p class="sub1">Isi data diri dengan benar!</p>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url(); ?>/register/process" onsubmit="return validateForm()">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="username">Username<span class="required-asterisk">*</span></label>
                    <input type="text" id="username" name="username" onkeypress="return hanyaAngka(event)" placeholder="Masukkan NIM" required>
                </div>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap<span class="required-asterisk">*</span></label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label for="no_handphone">No. Telepon<span class="required-asterisk">*</span></label>
                    <input type="text" id="no_handphone" name="no_handphone" onkeypress="return hanyaAngka(event)" placeholder="Masukkan No. Telepon" required oninput="validateNumberInput(this)">
                </div>
                <div class="form-group">
                    <label for="email">Email<span class="required-asterisk">*</span></label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email" required>
                </div>
                <div class="form-group">
                    <label for="jenis_pengguna">Masuk Sebagai<span class="required-asterisk">*</span></label>
                    <select id="jenis_pengguna" name="jenis_pengguna" required>
                        <option value="" disabled selected>Pilih Jenis Pengguna</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Password<span class="required-asterisk">*</span></label>
                    <div style="position: relative;">
                        <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                        <img src="<?= base_url('img/close_eye1.jpg') ?>" id="eyeicon_password" alt="" data-open="<?= base_url('img/open_eye1.jpg') ?>" data-close="<?= base_url('img/close_eye1.jpg') ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="konfirmasi_password">Konfirmasi Password<span class="required-asterisk">*</span></label>
                    <div style="position: relative;">
                        <input type="password" id="konfirmasi_password" name="konfirmasi_password" placeholder="Konfirmasi Password" required>
                        <img src="<?= base_url('img/close_eye1.jpg') ?>" id="eyeicon_konfirmasi_password" alt="" data-open="<?= base_url('img/open_eye1.jpg') ?>" data-close="<?= base_url('img/close_eye1.jpg') ?>">
                    </div>
                </div>
                <button type="submit">Daftar</button>
            </form>
            <p class="register">Sudah Mempunyai Akun? <a href="<?= base_url('/'); ?>">Login</a></p>
        </div>
    </div>
    <script src="<?= base_url('js/register.js') ?>"></script>
</body>
</html>