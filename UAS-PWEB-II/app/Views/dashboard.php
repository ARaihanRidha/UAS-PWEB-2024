<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: whitesmoke;
        }
        .sidebar {
            background-color: #f8f9fa;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 200px;
            padding-top: 60px; /* Tambahkan padding top untuk memberikan ruang pada header */
            overflow-y: auto; /* Menambahkan overflow untuk memungkinkan scrolling */
            z-index: 1000; /* Pastikan sidebar berada di bawah header */
        }
        .sidebar .nav-item {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            color: #000;
            text-decoration: none;
        }
        .sidebar .nav-item img {
            margin-right: 10px;
        }
        .sidebar .nav-item.active {
            background-color:#ADD8E6;
            border-radius: 5px;

        }
        .sidebar .nav-item:hover {
            background-color: #ADD8E6;
            border-radius: 5px;
        }
        .content {
            margin-left: 200px;
            padding-top: 60px; /* Tambahkan padding top untuk memberikan ruang pada header */
            padding-left: 20px;
        }
        .warning {
            width: calc(100% - 20px);
            height: 100%;
            background-color: rgba(255, 239, 213, 0.5);
            padding: 15px;
            border-radius: 10px;
            margin-left: 10px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .warning img {
            width: 22px;
            height: 17px;
            margin-right: 15px;
        }
        .warning p {
            font-size: 14px;
        }
        .warning a {
            color: #007bff;
        }
        .welcome img {
            width: 100%;
            height: 100%;
            margin-left: 10px;
            margin-top: 15px;
            padding-right: 20px;
        }
        .keterangan {
            color: grey;
            margin-left: 10px;
            margin-top: 55px;
        }
        .summary {
            display: flex;
            margin-top: -10px;
            margin-bottom: -30px;
        }
        .summary div {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            flex: 1;
            margin: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .summary div h3 {
            margin: 0;
            font-size: 24px;
            text-align: left;
            color: #00BFFF;
            font-weight: bold;
        }
        .summary div p {
            margin: 5px 0 0;
            text-align: left;
            color: grey;
        }
        .services {
            display: flex;
            flex-wrap: wrap;
        }
        .service-card {
            background-color: #fff;
            border-radius: 10px;
            margin: 12px;
            flex: 1;
        }
        .service-card img {
            width: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left: 5px; z-index: 1100; position: sticky; top: 0; width: 100%; box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);">
        <img class="m-2" src="<?= base_url('img/ulm.jpg') ?>" style="width: 40px;" alt="">
        <div class="d-flex flex-column">
            <a class="navbar-brand p-0" style="font-size: 15px; font-weight:bold;" href="#">Fakultas Teknik</a>
            <a class="navbar-brand p-0 text-secondary" style="font-size: 10px;" href="#">Universitas Lambung Mangkurat</a>
        </div>

        <div class="m-2 ps-5" style="width: 300px;">
            <img src="<?= base_url('img/search.jpg') ?>" class="" style="width: 20px;" alt="">
            <p class="d-inline p-2 text-secondary">Cari Layanan...</p>
        </div>
        <div class="d-flex flex-row ms-auto justify-content-center" style="margin-right: 90px;">
            <img class="m-2" src="<?= base_url('img/bell.jpg') ?>" style="width: 30px; height:auto;" alt="">
            <img class="m-2" src="<?= base_url('img/user.jpg') ?>" style="width: 30px;" alt="">
            <p class="fs-6 m-2 text-center">Kelompok 10</p>
        </div>
    </nav>
    
    <div class="d-flex">
        <nav class="sidebar p-3" style="margin-top: 74px; width:max-content;">
            <h6 class="text-secondary text-start ps-3">Menu</h6>
            <ul class="nav flex-column">
                <li class="nav-item active">
                    <img src="<?= base_url('img/menu.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="<?= base_url('dashboard') ?>">Dashboard</a>
                </li>
                <h6 class="text-secondary text-start p-3">Layanan</h6>
                <li class="nav-item">
                    <img src="<?= base_url('img/email.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#e-services">e-Services</a>
                </li>
                <li class="nav-item">
                    <img src="<?= base_url('img/conversation.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#e-command-center">e-Command Center</a>
                </li>
                <li class="nav-item">
                    <img src="<?= base_url('img/desktop.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="<?= base_url('e_response') ?>">e-Response</a>
                </li>
                <li class="nav-item">
                    <img src="<?= base_url('img/website.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#e-commerce">e-Commerce</a>
                </li>
                <li class="nav-item">
                    <img src="<?= base_url('img/briefcase.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#e-office">e-Office</a>
                </li>
                <h6 class="text-secondary text-start ps-3">Other</h6>
                <li class="nav-item">
                    <img src="<?= base_url('img/list.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#kuesioner">Kuesioner</a>
                </li>
                <li class="nav-item">
                    <img src="<?= base_url('img/question.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <img src="<?= base_url('img/profile.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#profile">Profile</a>
                </li>
                <li class="nav-item">
                    <img src="<?= base_url('img/logout.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#logout">Logout</a>
                </li>
            </ul>
        </nav>
        <div class="card content flex-grow-1 p-3" style="margin-left: 320px; margin-right:40px; width:auto; margin-top:20px; box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.1);">
            <header class="d-flex flex-row justify-content-left">
                <img src="<?= base_url('img/menu.jpg') ?>" style="width: 40px; height: 40px; margin-top: 15px; margin-left: 30px;" alt="">
                <div class="align-content-center" style="margin-left: 25px">
                    <h4 class="fw-bold">Dashboard</h4>
                    <p>Akses menu dan informasi penting lainnya di sini</p>
                </div>
            </header>
            <div class="warning d-flex flex-row">
                <img src="<?= base_url('img/warning.png') ?>" alt="Warning">
                <div>
                    <p><b>Kamu belum mengisi kuisioner pada periode semester ini, Silahkan isi Kuisioner <a href="#">Disini</a></b></p>
                    <p>Kamu tidak dapat melakukan pengajuan layanan jika belum mengisi kuisioner. Oleh karena itu, kami mengharapkan agar setiap mahasiswa mengisi kuisioner pada awal setiap semester sebagai bagian dari proses yang diperlukan untuk memberikan pelayanan yang terbaik dan peningkatan kualitas serta evaluasi layanan FT ULM.</p>
                </div>
            </div>
            <div class="welcome">
                <img src="<?= base_url('img/welcome.png') ?>" alt="Welcome">
            </div>

            <p class="keterangan">Ringkasan</p>
            <div class="summary">
                <div>
                    <h3>4</h3>
                    <p>Layanan diajukan</p>
                </div>
                <div>
                    <h3>2</h3>
                    <p>Menunggu persetujuan</p>
                </div>
                <div>
                    <h3>1</h3>
                    <p>Layanan disetujui</p>
                </div>
                <div>
                    <h3>1</h3>
                    <p>Layanan ditolak</p>
                </div>
            </div>

            <p class="keterangan">Mungkin yang kamu butuhkan</p>
            <div class="services">
                <div class="service-card">
                    <img src="<?= base_url('img/graduation.png') ?>" alt="Graduation">
                </div>
                <div class="service-card">
                    <img src="<?= base_url('img/pkl.png') ?>" alt="PKL">
                </div>
                <div class="service-card">
                    <img src="<?= base_url('img/penelitian.png') ?>" alt="Penelitian">
                </div>
            </div>
            <div class="services">
                <div class="service-card">
                    <img src="<?= base_url('img/data.png') ?>" alt="Data">
                </div>
                <div class="service-card">
                    <img src="<?= base_url('img/tugas.png') ?>" alt="Tugas">
                </div>
                <div class="service-card">
                    <img src="<?= base_url('img/mbkm.png') ?>" alt="MBKM">
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>