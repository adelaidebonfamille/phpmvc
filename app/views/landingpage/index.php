<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="<?= BASEURL; ?>/public/img/unsri.png" type="image/x-icon">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <link rel="stylesheet" href="<?= BASEURL; ?>/public/css/swiper-bundle.min.css">

        <link rel="stylesheet" href="<?= BASEURL; ?>/public/css/styles.css">

        <title><?= $data['judul']; ?></title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="<?= BASEURL; ?>/public" class="nav__logo">
                    <img src="<?= BASEURL; ?>/public/img/unsri.png" alt="" class="nav__logo-img">
                    SIMAK UNSRI
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Beranda</a>
                        </li>

                        <li class="nav__item">
                            <a href="#pengumuman" class="nav__link">Pengumuman</a>
                        </li>

                        <li class="nav__item">
                            <a href="#trick" class="nav__link">Kalender Akademik</a>
                        </li>
                        <a href="<?= BASEURL; ?>/public/fakultas/index" class="button button--ghost">Masuk</a>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <img src="<?= BASEURL; ?>/public/img/nav-img.png" alt="" class="nav__img">
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>

            </nav>
        </header>
        <main class="main">
            <section class="home container" id="home">
                <div class="swiper home-swiper">
                    <div class="swiper-wrapper">
                        <section class="swiper-slide">
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img src="<?= BASEURL; ?>/public/img/home1-img.png" alt="" class="home__img">
                                    <div class="home__indicator"></div>
    
                                    <div class="home__details-img">
                                        <h4 class="home__details-title">Spektrum Bidang Luas</h4>
                                        <span class="home__details-subtitle">160 program studi dan 23 pusat penelitian</span>
                                    </div>
                                </div>
    
                                <div class="home__data">
                                    <h3 class="home__subtitle">#1 PTN TERLUAS SE-ASIA TENGGARA</h3>
                                    <h1 class="home__title">ILMU <br> ALAT <br> PENGABDIAN</h1>
                                    <p class="home__description">Dengan ilmu yang diperoleh, kami berkomitmen untuk mengabdi kepada bangsa dan negara tanpa henti, membangun masa depan yang lebih baik untuk Indonesia.
                                    </p>

                                    <div class="home__buttons">
                                        <a href="<?= BASEURL; ?>/public/fakultas/index" class="button">Masuk</a>
                                        <a href="#" class="button--link button--flex">Akreditasi Jurusan <i class='bx bx-right-arrow-alt button__icon'></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="swiper-slide">
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img src="<?= BASEURL; ?>/public/img/home2-img.png" alt="" class="home__img">
                                    <div class="home__indicator"></div>
    
                                    <div class="home__details-img">
                                        <h4 class="home__details-title">Cerdas, Berbakti</h4>
                                        <span class="home__details-subtitle">Ilmu Tinggi, Pengabdian Tertinggi</span>
                                    </div>
                                </div>
    
                                <div class="home__data">
                                    <h3 class="home__subtitle">#20 Kampus Top Indonesia</h3>
                                    <h1 class="home__title">Ilmu  <br> Membangun  <br> Bangsa</h1>
                                    <p class="home__description">Mengabdi kepada negara dengan ilmu pengetahuan dan keterampilan, kami bertekad untuk terus berinovasi dan berkontribusi dalam mewujudkan Indonesia yang lebih baik.
                                    </p>

                                    <div class="home__buttons">
                                        <a href="<?= BASEURL; ?>/public/fakultas/index" class="button">Masuk</a>
                                        <a href="#" class="button--link button--flex">Akreditasi Jurusan <i class='bx bx-right-arrow-alt button__icon'></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="swiper-slide">
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img src="<?= BASEURL; ?>/public/img/home3-img.png" alt="" class="home__img">
                                    <div class="home__indicator"></div>
    
                                    <div class="home__details-img">
                                        <h4 class="home__details-title">Ilmu, Inovasi, Integritas</h4>
                                        <span class="home__details-subtitle">Membentuk Generasi Unggul, Menciptakan Masa Depan.</span>
                                    </div>
                                </div>
    
                                <div class="home__data">
                                    <h3 class="home__subtitle">Pilar Pembangunan Bangsa.</h3>
                                    <h1 class="home__title">Menyongsong Harapan <br> Menyuarakan Ilmu</h1>
                                    <p class="home__description">Kekuatan Kolaborasi, Hasil Prestasi: UNSRI Menginspirasi Perubahan Positif di Segala Bidang
                                    </p>

                                    <div class="home__buttons">
                                        <a href="<?= BASEURL; ?>/public/fakultas/index" class="button">Masuk</a>
                                        <a href="#" class="button--link button--flex">Akreditasi Jurusan <i class='bx bx-right-arrow-alt button__icon'></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
               
            </section>
            <section class="section pengumuman" id="pengumuman">
                <h2 class="section__title">Pengumuman</h2>

                <div class="category__container container grid">
                    <div class="category__data">
                        <img src="<?= BASEURL; ?>/public/img/category1-img.png" alt="" class="category__img">
                        <h3 class="category__title">Pendaftaran<br>Wisuda</h3>
                    </div>

                    <div class="category__data">
                        <img src="<?= BASEURL; ?>/public/img/category2-img.png" alt="" class="category__img">
                        <h3 class="category__title">Penerimaan Proposal Penelitian</h3>
                    </div>

                    <div class="category__data">
                        <img src="<?= BASEURL; ?>/public/img/category3-img.png" alt="" class="category__img">
                        <h3 class="category__title">Seminar <br> Karir</h3>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="section about" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">Beasiswa<br> Gemilang</h2>
                        <p class="about__description">Beasiswa Gemilang adalah kesempatan unggulan bagi mahasiswa yang memiliki prestasi akademik dan potensi luar biasa untuk mendapatkan dukungan finansial dan bimbingan akademik yang berkelanjutan.
                        </p>
                        <a href="#" class="button">Informasi Lebih Lanjut</a>
                    </div>

                    <img src="<?= BASEURL; ?>/public/img/about-img.png" alt="" class="about__img">
                </div>
            </section>

            <!--==================== TRICK OR TREAT ====================-->
            <section class="section trick" id="trick">
                <h2 class="section__title">Kalender Akademik</h2>

                <div class="trick__container container grid">
                    <div class="trick__content">
                        <img src="<?= BASEURL; ?>/public/img/trick-treat1-img.png" alt="" class="trick__img">
                        <h3 class="trick__title">Pembayaran <br>UKT</h3>
                        <span class="trick__subtitle">24 Juli - 5 Agustus</span>
                    </div>

                    <div class="trick__content">
                        <img src="<?= BASEURL; ?>/public/img/trick-treat2-img.png" alt="" class="trick__img">
                        <h3 class="trick__title">Pengajuan <br> Stop Out</h3>
                        <span class="trick__subtitle">24 Juli - 5 September</span>
                    </div>

                    <div class="trick__content">
                        <img src="<?= BASEURL; ?>/public/img/trick-treat3-img.png" alt="" class="trick__img">
                        <h3 class="trick__title">Pengisian  <br>Kartu Studi</h3>
                        <span class="trick__subtitle">8 Agustus - 25 Agustus</span>
                    </div>

                    <div class="trick__content">
                        <img src="<?= BASEURL; ?>/public/img/trick-treat4-img.png" alt="" class="trick__img">
                        <h3 class="trick__title">Awal Tahun<br>Akademik</h3>
                        <span class="trick__subtitle">7 Agustus</span>
                    </div>

                    <div class="trick__content">
                        <img src="<?= BASEURL; ?>/public/img/trick-treat5-img.png" alt="" class="trick__img">
                        <h3 class="trick__title">Awal Penerimaan <br> Mahasiswa Baru</h3>
                        <span class="trick__subtitle">8 Agustus - 10 Agustus</span>
                    </div>

                    <div class="trick__content">
                        <img src="<?= BASEURL; ?>/public/img/trick-treat6-img.png" alt="" class="trick__img">
                        <h3 class="trick__title">Awal <br> Perkuliahan</h3>
                        <span class="trick__subtitle">14 Agustus</span>
                    </div>
                </div>
            </section>
            
            <!--==================== DISCOUNT ====================-->
            <section class="section discount">
                <div class="discount__container container grid">
                    <div class="discount__data">
                        <h2 class="discount__title">Pendaftaran <br> Wisuda ke-80</h2>
                        <a href="#" class="button">Daftar</a>
                    </div>

                    <img src="<?= BASEURL; ?>/public/img/discount-img.png" alt="" class="discount__img">
                </div>
            </section>
        <!--==================== FOOTER ====================-->
            <footer class="footer section">
                <div class="footer__container container grid">
                    <div class="footer__content">
                        <a href="#" class="footer__logo">
                            <img src="<?= BASEURL; ?>/public/img/unsri.png" alt="" class="footer__logo-img">
                            SIMAK UNSRI
                        </a>

                        <p class="footer__description">Ilmu Alat Pengabdian</p>
                        
                        <div class="footer__social">
                            <a href="https://www.facebook.com/unsrii/?locale=id_ID" target="_blank" class="footer__social-link">
                                <i class='bx bxl-facebook'></i>
                            </a>
                            <a href="https://www.instagram.com/unsri.ac.id/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-instagram-alt' ></i>
                            </a>
                            <a href="https://x.com/unsri" target="_blank" class="footer__social-link">
                                <i class='bx bxl-twitter' ></i>
                            </a>
                        </div>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Profil</h3>
                        
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Sejarah</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Visi Misi</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Lambang Universitas</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">UPT</h3>
                        
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Perpustakaan</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Bahasa</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Laboratorium</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Lembaga</h3>
                        
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">LPPM</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">LP3MP</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <span class="footer__copy">&#169;2024 Universitas Sriwijaya</span>

            </footer>

            <!--=============== SCROLL UP ===============-->
            <a href="#" class="scrollup" id="scroll-up">
                <i class='bx bx-up-arrow-alt scrollup__icon'></i>
            </a>
        
        <!--=============== SCROLL REVEAL ===============-->
        <script src="<?= BASEURL; ?>/public/js/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="<?= BASEURL; ?>/public/js/swiper-bundle.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="<?= BASEURL; ?>/public/js/main.js"></script>
    </body>
</html>