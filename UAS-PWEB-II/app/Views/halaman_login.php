<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Fakultas Teknik Universitas Lambung Mangkurat</title>
    <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
    <style>        
        .image-section {
            background-image: url("<?= base_url('img/UAS1.webp') ?>");
            background-size: cover;
            background-position: 90% 10%;
            max-width: 620px;
        }
    </style>
</head>
<body>
<body>
    <div class="container">
        <div class="image-section"></div>
        <div class="form-section">
            <div class="header-section">
                <img src="<?= base_url('img/ulm.png') ?>" alt="Logo Universitas Lambung Mangkurat" />
                <div class="header-text">
                    <h1>Fakultas Teknik</h1>
                    <h2>Universitas Lambung Mangkurat</h2>
                </div>
            </div>
            <p class="subtitle"><b>Login ke Akun Anda</b></p>
            <p class="sub1">Masukkan Username dan password untuk login!</p>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url(); ?>/login/process">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="username">Username<span class="required-asterisk">*</span></label>
                    <input type="text" id="username" name="username" placeholder="Masukkan Username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password<span class="required-asterisk">*</span></label>
                    <div style="position: relative;">
                        <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                        <img src="<?= base_url('img/close_eye1.jpg') ?>" id="eyeicon" alt="" data-open="<?= base_url('img/open_eye1.jpg') ?>" data-close="<?= base_url('img/close_eye1.jpg') ?>">
                    </div>
                </div>
                <a class="pass" href="#">Lupa password?</a>
                <button class="pindah" type="submit"> Login</button>
            </form>
            <p class="register">Belum Mempunyai Akun? <b><a class="test" href="<?= base_url('/register'); ?>">Daftar</a></b> </p>
        </div>
    </div>
    <script src="<?= base_url('js/login.js') ?>"></script>
</body>
</html>