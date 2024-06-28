<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Response</title>
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
        .kartu {
            display: flex;
            justify-content: left;
            margin-left: 10px;
        }
        .response {
            width: 330px;
            height: 245px;
            margin-right: 25px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .response img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .response-content {
            text-align: center;
        }
        .sort {
            text-align: right;
            margin-bottom: 20px;
            color: grey;
        }
        .sort select {
            padding: 15px;
            font-size: 14px;
            color: rgb(128, 128, 128, 0.5);
            border-radius: 10px;
            margin-right: 70px;
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
                <li class="nav-item">
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
                <li class="nav-item active">
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
                <img src="<?= base_url('img/desktop.jpg') ?>" style="width: 40px; height: 40px; margin-top: 15px; margin-left: 30px;" alt="">
                <div class="align-content-center" style="margin-left: 25px">
                    <h4 class="fw-bold">Layanan e-Response</h4>
                    <p>Inovasi Layanan Informasi dan Pengaduan FT ULM</p>
                </div>
            </header>
            <div class="sort">
                <label for="sort">Urutkan sesuai : </label>
                <select id="sort">
                    <option value="name-asc">Nama Layanan (A-Z)</option>
                </select>
            </div>
            <div class="kartu">
                <div class="response">
                    <img src="<?= base_url('img/lapor.png') ?>" alt="Lapor FT">
                </div>
                <div class="response">
                    <a href="#Tanya FT"><img src="<?= base_url('img/tanya.png') ?>" alt="Tanya FT"></a>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>