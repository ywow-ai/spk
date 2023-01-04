<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendukung Keputusan</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.php"><img src="assets\images\logo\logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  menu-kiri">
                            <a class='sidebar-link ' onclick="openDataFile('ranking.php');">
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Ranking</span>
                            </a>
                        </li>

                        <li class="sidebar-item  menu-kiri">
                            <a class='sidebar-link ' onclick="openDataFile('saw.php');">
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>SAW</span>
                            </a>
                        </li>

                        <li class="sidebar-item  menu-kiri">
                            <a class='sidebar-link ' onclick="openDataFile('alternatif.php');">
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Alternatif</span>
                            </a>
                        </li>

                        <li class="sidebar-item  menu-kiri">
                            <a class='sidebar-link ' onclick="openDataFile('bobot.php');">
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Bobot</span>
                            </a>
                        </li>

                        <li class="sidebar-item  menu-kiri">
                            <a class='sidebar-link ' onclick="openDataFile('kriteria.php');">
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Kriteria</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div id="konten" class="page-content">
                <!-- isi -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">Nama : Helmi Dwiky Ramadhan</p>
                                    <p class="card-text">NIM : 201951048</p>
                                    <p class="card-text">Kelas : B</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>

    <script src="script.js"></script>
</body>

</html>