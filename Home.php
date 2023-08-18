<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/aos.css" />
    <link rel="stylesheet" href="assets/css/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>17 Agustus</title>
</head>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}
$username = $_SESSION['username'];
?>
<body>
    <header>
        <nav>
            <div class="nav-container">
                <div class="nav-title">
                    <a href="#">
                        <h1><span>17</span><span>agustus</span></h1>
                    </a>
                </div>
                <ul class="nav-list">
                    <li>
                        <a href="#">Beranda</a>
                    </li>
                    <li>
                        <a href="#service">Agenda</a>
                    </li>
                    <li>
                        <a href="#pricing">Lomba</a>
                    </li>
                    <li>
                        <a href="#about">Ketentuan</a>
                    </li>
                    <li>
                        <a class="nav-list-login" href="logout.php">Keluar</a>
                    </li>
                </ul>
                <div class="nav-burger">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="jumbotron">
                <div class="jumbotron-content">
                    <h1>
                        HUT <span>ke-78</span> Kemerdekaan Republik Indonesia
                    </h1>
                    <p>
                        Selamat Hari Kemerdekaan RI tahun 2023! Mari rayakan hari bersejarah ini dengan penuh kebanggaan
                        dan rasa syukur atas kemerdekaan RI. <br><span>YUKKK</span> ikuti serta memeriahkan dalam
                        beragam lomba sekarang!
                    </p>
                    <button id="myBtn" class="jumbotron-button">
                        Daftar Sekarang
                    </button>
                </div>
                <div class="jumbotron-image">
                    <img src="assets/img/1.jpeg" alt="Image Not Found" />
                </div>
            </div>
        </div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <form>
                    <h1>Form Pendaftaran</h1>
                    <div class="question">
                        <label>Nama Lengkap</label>
                        <input type="text" id="nama" required />
                    </div>
                    <div class="question">
                        <label>Usia</label>
                        <input type="text" id="usia" required />
                    </div>
                    <div class="question">
                        <label>Kategori Lomba</label>
                        <select id="kategori" name="kategori">
                            <option value="1">Anak-Anak</option>
                            <option value="2">Dewasa</option>
                            <option value="3">Semua Usia</option>
                        </select>
                    </div>
                    <button class="modal-button" onclick="inputdata();">Submit</button>
                </form>
            </div>
        </div>
    </header>
    <main>
        <div id="content">
            <article class="service" id="service">
                <div data-aos="fade-up">
                    <h2 class="service-title">
                        Susunan Acara 17 Agusatus 2023
                    </h2>
                    <div class="service-container">
                        <div class="service-card">
                            <i class="service-icon fas fa-users"></i>
                            <h2>
                                <span>Menyanyikan lagu</span> <span>Indonesia Raya</span>
                            </h2>
                        </div>
                        <div class="service-card">
                            <i class="service-icon fas fa-certificate"></i>
                            <h2>
                                <span>Acara inti</span>
                                <span>(Pelaksanaan Lomba)</span>
                            </h2>
                        </div>
                        <div class="service-card">
                            <i class="service-icon fas fa-trophy"></i>
                            <h2>
                                <span>Pembagian</span>
                                <span>hadiah</span>
                            </h2>
                        </div>
                        <div class="service-card">
                            <i class="service-icon fa fa-th-list"></i>
                            <h2>
                                <span>Penutup</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </article>
            <article class="pricing" id="pricing">
                <div data-aos="fade-up">
                    <h2 class="pricing-title">Daftar Perlombaan</h2>
                    <div class="pricing-container">
                        <div class="pricing-card">
                            <div class="pricing-label">
                                <h2>Perlombaan Anak</h2>
                                <p>
                                    Dimulai pada pukul 07.00 sampai Selesai
                                </p>
                            </div>
                            <div class="pricing-price">
                                <h1 id="pendaftar1"></h1>
                            </div>
                            <button id="myBtn2" class="pricing-button">Daftar</button>
                            <div class="pricing-list">
                                <ul>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span> Lomba Balap Karung dengan Helm </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span> Lomba Pecah Balon Air </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span> Lomba Sendok Kelereng </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span> Lomba Makan Kerupuk </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span> Lomba balapan bakiak </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span>
                                            Lomba memasukkan paku ke dalam botol
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <div class="pricing-label">
                                <h2>Perlombaan Semua Usia</h2>
                                <p>
                                    Dimulai pada pukul 07.00 sampai selesai
                                </p>
                            </div>
                            <div class="pricing-price">
                                <h1 id="pendaftar2"></h1>
                            </div>
                            <button id="myBtn3" class="pricing-button">Daftar</button>
                            <div class="pricing-list">
                                <ul>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span>
                                            Lomba joget balon
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span> Lomba lari maraton </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span> Lomba meniup balon </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span> Lomba sepak bola dangdut </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span> Lomba makan kerupuk </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span>
                                            Lomba pukul kendi
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <div class="pricing-label">
                                <h2>Perlombaan Remaja/Dewasa</h2>
                                <p>
                                    Dimulai pada pukul 07.00 sampai selesai
                                </p>
                            </div>
                            <div class="pricing-price">
                                <h1 id="pendaftar3"></h1>
                            </div>
                            <button id="myBtn4" class="pricing-button">Daftar</button>
                            <div class="pricing-list">
                                <ul>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span>
                                            Lomba panjat pinang
                                        </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span> Lomba sepeda di atas air </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span> Lomba gebuk bantal atau guling </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span> Lomba tarik tambang </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span> Lomba tata rias dengan mata tertutup </span>
                                    </li>
                                    <li>
                                        <i class="fas fa-check"></i>
                                        <span>
                                            Lomba memasukkan belut ke dalam botol
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="about" id="about">
                <div data-aos="fade-up">
                    <h2 class="about-title">Syarat & Ketentuan</h2>
                    <div class="about-container">
                        <section class="about-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Vivamus interdum sed orci at condimentum. Fusce varius lacus id lacus eleifend, in
                                blandit sapien mattis.
                                Nam augue erat, gravida ac eros quis, ornare iaculis lectus. Vestibulum eget tellus sed
                                dui efficitur mattis.
                                Praesent vestibulum, erat nec faucibus venenatis, nibh risus tristique risus, eget
                                tristique dui magna vel diam.
                                Phasellus sit amet nulla consequat, bibendum felis non, imperdiet tortor.
                                Nullam cursus pellentesque bibendum. Nulla a enim sed lacus finibus facilisis.
                            </p>
                            <p>
                                Praesent quis pellentesque sem. Aliquam a tincidunt felis.
                                Vestibulum et odio sapien. Suspendisse dui mauris, efficitur eget consectetur sit amet,
                                efficitur at augue.
                                Nam et nisl at massa efficitur volutpat ac sed est.
                                Integer gravida molestie placerat. Sed mattis fringilla urna rutrum varius.
                            </p>
                        </section>
                        <aside class="about-image">
                            <img src="assets/img/1.png" alt="Panitia Pelaksana" />
                            <h3>Agus Subarno</h3>
                            <p>Panitia Pelaksana</p>
                        </aside>
                    </div>
                </div>
            </article>
        </div>
    </main>
    <footer>
        <ul class="footer-list">
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Kontak Kami</a></li>
            <li><a href="#">Kebijakan Privasi</a></li>
        </ul>
        <hr />
        <p>&copy; 2021 - 2023. All Rights Reserved.</p>
    </footer>

    <script src="assets/js/aos.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    
</body>

</html>