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
        .file-input-wrapper {
            display: flex;
            align-items: center;
            border: 1px solid #e9ecef;
            border-radius: 5px;
            overflow: hidden;
            width: 100%;
    
        }
        .file-input-wrapper .btn {
            background-color:deepskyblue; 
            color: white;
            border: none;
            border-radius: 0;
            padding: 10px 20px;
        }
        .file-input-wrapper input[type="file"] {
            display: none;
        }
        .file-input-wrapper .file-label {
        
            padding: 10px 20px;
            color: #6c757d;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left: 5px; z-index: 1100; position: fixed; width: 100%; box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);">
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
       
        <div class="card content flex-grow-1 p-3" style="margin-left: 320px; margin-right:40px; width:auto; margin-top:100px; box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.1);">
            <div class="d-flex flex-row" style="align-items: center;">
                <img src="/images/arrow.png" style="width: 30px;" alt="">
                <a href="<?= base_url('/') ?>" style="text-decoration: none;"><h6 class=" fw-bold m-0" style="color:deepskyblue;">Kembali</h6></a>
            </div>
            <hr>
            <header class="d-flex flex-row justify-content-center">
                <div class="align-content-center">
                    <h4 class="fw-bold mb-5">Tambah Pengajuan Tanya FT</h4>
                </div>    
            </header>
            <section class="d-flex flex-column">
                <form action="" class="d-flex flex-column">
                    <label class="fw-bold" for="nama">Nama Lengkap <span class="text-danger"> *</span></label> 
                    <input class="form-control mb-4" style="background-color: #e9ecef; padding:15px;" type="text" name="nama" placeholder="" required>
                    <label class="fw-bold" for="nim">NIM <span class="text-danger"> *</span></label> 
                    <input class="form-control mb-4" style="background-color: #e9ecef; padding:15px;" type="text" name="nim" placeholder="" required>
                    <label class="fw-bold" for="prodi">Program Studi <span class="text-danger"> *</span></label> 
                    <input class="form-control mb-4 " style="background-color: #e9ecef; padding:15px;" type="text" name="prodi" placeholder="" required>
                    <label class="fw-bold" for="pertanyaan">Pertanyaan <span class="text-danger"> *</span></label> 
                    <textarea class="form-control mb-4"  name="pertanyaan" rows="7" id="" placeholder="masukkan pertanyaan" required></textarea>
                    <div class="container p-0">
                        <span class="fw-bold">Berkas Pendukung</span>
                        <div class="file-input-wrapper">
                            <button class="btn" type="button">Choose file</button>
                            <label class="file-label" for="fileInput">Drag and drop a file here or click</label>
                            <input type="file" id="fileInput">
                        </div>
                    </div>
                    <span class="text-secondary" style="font-size:12px; font-style:italic;">* Uploaded file dengan format jpg, png, jpeg, maksimal 2MB</span>
                    <div class="ms-auto mt-5">
                        <button class="btn p-2" style="width: 150px; border:1px solid black;">
                            Batal
                        </button>
                        <button class="btn p-2" style="width: 150px; background-color:deepskyblue; color:white;">
                            Kirim
                        </button>
                    </div>
                </form>
               
            </section>
        </div>
    </div>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
