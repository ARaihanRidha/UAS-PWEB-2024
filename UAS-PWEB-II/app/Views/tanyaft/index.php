<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanya FT</title>
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
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
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
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left: 5px; z-index: 1100; position: relative; width: 100%; box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);">
        <img class="m-2" src="/images/image.png" style="width: 40px;" alt="">
        <div class="d-flex flex-column">
            <a class="navbar-brand p-0" style="font-size: 15px; font-weight:bold;" href="#">Fakultas Teknik</a>
            <a class="navbar-brand p-0 text-secondary" style="font-size: 10px;" href="#">Universitas Lambung Mangkurat</a>
        </div>

        <div class="m-2 ps-5" style="width: 300px;">
            <img src="/images/search.png" class="" style="width: 20px;" alt="">
            <p class="d-inline p-2 text-secondary">Cari Layanan...</p>
        </div>
        <div class="d-flex flex-row ms-auto justify-content-center" style="margin-right: 90px;">
            <img class="m-2" src="/images/bell.png" style="width: 30px; height:auto;" alt="">
            <img class="m-2" src="/images/user.png" style="width: 30px;" alt="">
            <p class="fs-6 m-2 text-center">Kelompok 10</p>
        </div>
    </nav>
    
    <div class="d-flex">
        <nav class="sidebar p-3" style="margin-top: 74px; width:max-content;">
            <h6 class="text-secondary text-start ps-3">Menu</h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <img src="/images/menu.png" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#dashboard">Dashboard</a>
                </li>
                <h6 class="text-secondary text-start p-3">Layanan</h6>
                <li class="nav-item">
                    <img src="/images/email.png" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#e-services">e-Services</a>
                </li>
                <li class="nav-item">
                    <img src="/images/conversation.png" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#e-command-center">e-Command Center</a>
                </li>
                <li class="nav-item active">
                    <img src="/images/desktop.png" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#e-response">e-Response</a>
                </li>
                <li class="nav-item">
                    <img src="/images/website.png" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#e-commerce">e-Commerce</a>
                </li>
                <li class="nav-item">
                    <img src="/images/briefcase.png" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#e-office">e-Office</a>
                </li>
                <h6 class="text-secondary text-start ps-3">Other</h6>
                <li class="nav-item">
                    <img src="/images/list.png" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#kuesioner">Kuesioner</a>
                </li>
                <li class="nav-item">
                    <img src="/images/question.png" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#faq">FAQ</a>
                </li>
            </ul>
        </nav>
        <div class="card content flex-grow-1 p-3" style="margin-left: 320px; margin-right:40px; width:auto; margin-top:20px; box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.1);">
            <header class="d-flex flex-row justify-content-center">
                <img src="/images/Tanya FT.png" alt="">
                <div class="align-content-center">
                    <h4 class="fw-bold">Tanya FT</h4>
                    <p>Layanan ini disediakan untuk menyampaikan permohonan informasi publik terkait Fakultas Teknik ULM</p>
                </div>
                
            </header>
            <section>
                <h6 class="fw-bold">Deskripsi</h6>
                <p class="text-secondary"><strong>TANYA FT</strong> merupakan Layanan Informasi Publik FT ULM. Layanan ini disediakan bagi para pihak untuk menyampaikan permohonan informasi publik terkait Fakultas Teknik Universitas Lambung Mangkurat. Setiap permohonan dikelola oleh Unit Layanan Administrasi Terpadu FT ULM sebagai pelaksana tugas Pejabat Pengelola Informasi dan Dokumentasi (PPID) FT ULM dan didistribusikan kepada Kelompok Kerja (POKJA) yang berkaitan atau langsung kepada Pimpinan FT ULM secara daring (online). Jawaban/Tanggapan dapat dipantau melalui fitur status pengajuan.</p>
            </section>
            <section>
                <h6 class="fw-bold">Alur Pengajuan</h6>
                <ol class="text-secondary">
                    <li>Mahasiswa mengisi data pertanyaan</li>
                    <li>Admin Akademik akan menanggapi pertanyaan tersebut</li>
                    <li>Tanggapan dapat dilihat melalui tabel pengajuan</li>
                </ol>
            </section>
            <section class="d-flex flex-column">
                <h6 class="fw-bold">
                    Tabel Pengajuan
                </h6>
                <button class="btn btn-primary ms-auto m-2" type="submit">Tambah Pengajuan</button>
                <table class="table">
                <thead class="table-secondary align-middle" style="height: 60px;">
                    <tr>
                    <th scope="col" class="text-secondary">No</th>
                    <th scope="col" class="text-secondary">ID Pengajuan</th>
                    <th scope="col" class="text-secondary">Jenis Pengajuan</th>
                    <th scope="col" class="text-secondary">Tanggal Pengajuan</th>
                    <th scope="col" class="text-secondary">Status</th>
                    <th scope="col" class="text-secondary">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Disetujui</td>
                    <td>Tambah</td>
                    </tr>
                </tbody>
                </table>
            </section>
        </div>
    </div>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
