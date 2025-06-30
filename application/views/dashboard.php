<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Jatimakmur</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/vendor.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>/assets/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url();?>/assets/site.webmanifest">

    <!-- icons font-awesome
    ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>


<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap ss-home">


        <!-- # site header 
        ================================================== -->
        <header id="masthead" class="s-header">

            <div class="s-header__branding">
                <p class="site-title">
                    <a href="<?php echo base_url();?>/assets/index.html" rel="home">Jatimakmur.</a>
                </p>
            </div>

            
            <div class="row s-header__navigation">
                <nav class="s-header__nav-wrap">
                    <h3 class="s-header__nav-heading">Menu to</h3>
                    <ul class="s-header__nav">
                        <li class="current-menu-item"><a href="<?php echo base_url();?>/assets/index.html" title="">Beranda</a></li>
                        <li class="has-children">
                            <a href="#" title="" class="">Profil</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url();?>/assets/sejarah.html">Sejarah Desa</a></li>
                                <li><a href="<?php echo base_url();?>/assets/profil.html">Profil Wilayah</a></li>
                                <li><a href="<?php echo base_url();?>/assets/artilambang.html">Arti Lambang</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#" title="" class="">Pemerintahan</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url();?>/assets/visimisi.html">Visi Misi</a></li>
                                <li><a href="<?php echo base_url();?>/assets/pemerintah.html">Pemerintah Desa</a></li>
                                <li><a href="<?php echo base_url();?>/assets/badan_permusyawaratan.php">Badan Permusyawaratan Desa</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url();?>/assets/suratonline.php" title="">Surat Online</a></li>
                        <li class="has-children">
                            <a href="#" title="" class="">Data</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url();?>/assets/login_user.php">Pengajuan Surat</a></li>
                                <li><a href="<?php echo base_url();?>/assets/login_user.php">Laporan Desa</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#" title="" class="">Login</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url();?>/assets/login.php">Administratif</a></li>
                                <li><a href="<?php echo base_url();?>/assets/login_user.php">Penduduk</a></li>
                            </ul>
                        </li>
                    </ul> <!-- end s-header__nav -->
                </nav> <!-- end s-header__nav-wrap -->
            </div> <!-- end s-header__navigation -->


            <div class="s-header__search">
                <div class="s-header__search-inner">
                    <div class="row">
                        <form role="search" method="get" class="s-header__search-form" action="#">
                            <label>
                                <span class="u-screen-reader-text">Cari Artikel:</span>
                                <input type="search" class="s-header__search-field" placeholder="Cari Artikel..." value="" name="s" title="Cari Artikel:" autocomplete="off">
                            </label>
                            <input type="submit" class="s-header__search-submit" value="Search"> 
                        </form>
                        <a href="<?php echo base_url();?>/assets/#0" title="Close Search" class="s-header__search-close">Close</a>
                    </div> <!-- end row -->
                </div> <!-- s-header__search-inner -->
            </div> <!-- end s-header__search -->

            
            <a class="s-header__menu-toggle" href="<?php echo base_url();?>/assets/#0"><span>Beranda</span></a>
            <a class="s-header__search-trigger" href="<?php echo base_url();?>/assets/#">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 19.25L15.5 15.5M4.75 11C4.75 7.54822 7.54822 4.75 11 4.75C14.4518 4.75 17.25 7.54822 17.25 11C17.25 14.4518 14.4518 17.25 11 17.25C7.54822 17.25 4.75 14.4518 4.75 11Z"></path>
                </svg>
            </a>
        </header> <!-- end s-header -->


        <!-- # site-content
        ================================================== -->
        
        <section id="content" class="s-content">
            <!-- hero -->
            <div class="hero">

                <div class="hero__slider swiper-container">

                    <div class="swiper-wrapper">
                        <article class="hero__slide swiper-slide">
                            <div class="hero__entry-image" style="background-image: url('<?php echo base_url();?>/assets/images/thumbs/featured/featured-gbr1.jpg');"></div>
                            <div class="hero__entry-text">
                                <div class="hero__entry-text-inner">
                                    <div class="hero__entry-meta">
                                        <span class="cat-links">
                                            <a href="<?php echo base_url();?>/assets/sejarah.html">Sejarah</a>
                                        </span>
                                    </div>
                                    <h2 class="hero__entry-title">
                                        <a href="<?php echo base_url();?>/assets/sejarah.html">
                                            Sejarah Desa Jatimakmur
                                        </a>
                                    </h2>
                                    <p class="hero__entry-desc">
                                        Desa Jatimakmur adalah salah satu desa di Kecamatan Brebes, yang terletak 22 Kilometer 
                                        dari Kota Kecamatan. Sampai saat ini sejarah kelahiran Desa Jatimakmur belum bisa diketahui 
                                        secara pasti karena tidak adanya bukti-bukti tertulis yang menerangkan tentang asal usul 
                                        atau sejarah dari Desa Jatimakmur, akan tetapi berdasarkan cerita dari para tetua kami, 
                                        Penyusun mencoba merangkum Sejarah Desa Jatimakmur dari informasi dan keterangan-keterangan 
                                        yang Penyusun dapatkan. 
                                    </p>
                                    <a class="hero__more-link" href="<?php echo base_url();?>/assets/sejarah.html">Read More</a>
                                </div>
                            </div>
                        </article>
                        <article class="hero__slide swiper-slide">
                            <div class="hero__entry-image" style="background-image: url('<?php echo base_url();?>/assets/images/thumbs/featured/featured-gbr2.jpg');"></div>
                            <div class="hero__entry-text">
                                <div class="hero__entry-text-inner">
                                    <div class="hero__entry-meta">
                                        <span class="cat-links">
                                            <a href="<?php echo base_url();?>/assets/profil.html">Profil</a>
                                        </span>
                                    </div>
                                    <h2 class="hero__entry-title">
                                        <a href="<?php echo base_url();?>/assets/profil.html">
                                            Jarak 23 km Dari Kota Kabupaten
                                        </a>
                                    </h2>
                                    <p class="hero__entry-desc">
                                        Desa Jatimakmur, Kecamatan Songgom, Kabupaten Brebes, provinsi Jawa Tengah merupakan satu 
                                        dari 10 desa di kecamatan Songgom yang mempunyai jarak 23 km dari kota kabupaten.
                                    </p>
                                    <a class="hero__more-link" href="<?php echo base_url();?>/assets/profil.html">Read More</a>
                                </div>
                            </div>
                        </article>
                        <article class="hero__slide swiper-slide">
                            <div class="hero__entry-image" style="background-image: url('<?php echo base_url();?>/assets/images/thumbs/featured/featured-gbr3.jpg');"></div>
                            <div class="hero__entry-text">
                                <div class="hero__entry-text-inner">
                                    <div class="hero__entry-meta">
                                        <span class="cat-links">
                                            <a href="<?php echo base_url();?>/assets/category.html">Visi & Misi</a>
                                        </span>
                                    </div>
                                    <h2 class="hero__entry-title">
                                        <a href="<?php echo base_url();?>/assets/single-standard.html">
                                            Desa Jatimakmur memiliki visi dan misi
                                        </a>
                                    </h2>
                                    <p class="hero__entry-desc">
                                        Visi Desa Sekartaji tahun 2015-2021 : "Terwujudnya Desa Sekartaji yang Aman, Damai dan Sejahtera".
                                        Misi Pembangunan Desa Sekartaji yaitu Peningkatan kualitas sumber daya manusia, Peningkatan 
                                        pembangunan disegala bidang, Peningkatan Ekonomi Masyarakat, Peningkatan Pasrtisipasi Masyarakat.
                                    </p>
                                    <a class="hero__more-link" href="<?php echo base_url();?>/assets/single-standard.html">Read More</a>
                                </div>
                            </div>
                        </article>
                    </div> <!-- swiper-wrapper -->

                    <div class="swiper-pagination"></div>
    
                </div> <!-- end hero slider -->

                <a href="<?php echo base_url();?>/assets/#bricks" class="hero__scroll-down smoothscroll">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.25 6.75L4.75 12L10.25 17.25"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 12H5"></path>
                    </svg>
                    <span>Scroll</span>
                </a>

            </div> <!-- end hero -->


            <!--  masonry -->
            <div id="bricks" class="bricks">

                <div class="masonry">

                    <div class="bricks-wrapper" data-animate-block>

                        <div class="grid-sizer"></div>

                        <article class="brick entry" data-animate-el>
        
                            <div class="entry__thumb">
                                <a href="<?php echo base_url();?>/assets/single-standard.html" class="thumb-link">
                                    <img src="<?php echo base_url();?>/assets/images/thumbs/masonry/statue-600.jpg" 
                                        srcset="<?php echo base_url();?>/assets/images/thumbs/masonry/statue-600.jpg, <?php echo base_url();?>/assets/images/thumbs/masonry/statue-1200.jpg" alt="">
                                </a>
                            </div> <!-- end entry__thumb -->
        
                            <div class="entry__text">
                                <div class="entry__header">
                                    <div class="entry__meta">
                                        <span class="cat-links">
                                            <a>TPS</a>
                                        </span>
                                        <span class="byline">
                                            By:
                                            <a>Naruto Uzumaki</a>
                                        </span>
                                    </div>
                                    <h1 class="entry__title"><a href="<?php echo base_url();?>/assets/single-standard.html">Pemungutan Suara di TPS 1 Banjar Sedehing</a></h1>
                                 </div>
                                <div class="entry__excerpt">
                                    <p>
                                        Komisioner Komisi Pemilihan Umum Kota Jatimakmur menjelang pemungutan suara gencar 
                                        mengingatkan warga kota setempat yang memiliki hak suara datang ke Tempat Pemungutan Suara (TPS) pada 
                                        17 April 2019.
                                    </p>
                                </div>
                                <a class="entry__more-link" href="<?php echo base_url();?>/assets/single-standard.html">Read More</a>
                            </div> <!-- end entry__text -->
                        
                        </article> <!-- end article -->

                        <article class="brick entry" data-animate-el>
        
                            <div class="entry__thumb">
                                <a href="<?php echo base_url();?>/assets/single-standard1.html" class="thumb-link">
                                    <img src="<?php echo base_url();?>/assets/images/thumbs/masonry/gambar2-600.jpg" 
                                        srcset="<?php echo base_url();?>/assets/images/thumbs/masonry/gambar2-600.jpg, <?php echo base_url();?>/assets/images/thumbs/masonry/gambar2-1200.jpg" alt="">
                                </a>
                            </div> <!-- end entry__thumb -->
        
                            <div class="entry__text">
                                <div class="entry__header">
                                    <div class="entry__meta">
                                        <span class="cat-links">
                                            <a>Musyawarah</a>
                                        </span>
                                        <span class="post-date">
                                            By:
                                            <a>Sasuke Uchiha</a>
                                        </span>
                                    </div>
                                    <h1 class="entry__title"><a href="<?php echo base_url();?>/assets/single-standard1.html">Musyawarah Desa (MusDes) Penyusunan RKPDes 2019</a></h1>
                                </div>
                                <div class="entry__excerpt">
                                    <p>
                                        Dalam rangka mempersiapkan program pembangunan yang akan dilaksanakan pada tahun 2019, musyawarah desa penyusunan RKP Desa di Balai Desa Jatimakmur.
                                    </p>
                                </div>
                                <a class="entry__more-link" href="<?php echo base_url();?>/assets/single-standard1.html">Read More</a>
                            </div> <!-- end entry__text -->
                        
                        </article> <!-- end article -->

                        <article class="brick entry" data-animate-el>
            
                            <div class="entry__thumb">
                                <a href="<?php echo base_url();?>/assets/single-standard2.html" class="thumb-link">
                                    <img src="<?php echo base_url();?>/assets/images/thumbs/masonry/gambar3-600.jpg" 
                                        srcset="<?php echo base_url();?>/assets/images/thumbs/masonry/gambar3-600.jpg, <?php echo base_url();?>/assets/images/thumbs/masonry/gambar3-1200.jpg" alt="">
                                </a>
                            </div> <!-- end entry__thumb -->
            
                            <div class="entry__text">
                                <div class="entry__header">
                                    <div class="entry__meta">
                                        <span class="cat-links">
                                            <a>Gotong Royong</a>
                                        </span>
                                        <span class="byline">
                                            By:
                                            <a>Shizuka Miyazono</a>
                                        </span>
                                    </div>
                                    <h1 class="entry__title"><a href="<?php echo base_url();?>/assets/single-standard2.html">Kegiatan Gotong Royong di Desa Jatimakmur.</a></h1>
                                </div>
                                <div class="entry__excerpt">
                                    <p>
                                        Kerjasama dan gontong royong merupkan karateristik masyarakat indonesia khususnya desa teko dan salah satu cara 
                                        meminimalisasi penyebaran Virus Corona (COVID-19) adalah dengan bersatu dan gontong-royong untuk mengantisipasinya.
                                    </p>
                                </div>
                                <a class="entry__more-link" href="<?php echo base_url();?>/assets/single-standard2.html">Read More</a>
                            </div> <!-- end entry__text -->
                            
                        </article> <!-- end article -->

                        <article class="brick entry" data-animate-el>
            
                            <div class="entry__thumb">
                                <a href="<?php echo base_url();?>/assets/single-standard3.html" class="thumb-link">
                                    <img src="<?php echo base_url();?>/assets/images/thumbs/masonry/gambar4-600.jpg" 
                                        srcset="<?php echo base_url();?>/assets/images/thumbs/masonry/gambar4-600.jpg, <?php echo base_url();?>/assets/images/thumbs/masonry/gambar4-1200.jpg" alt="">
                                </a>
                            </div> <!-- end entry__thumb -->
            
                            <div class="entry__text">
                                <div class="entry__header">
                                    <div class="entry__meta">
                                        <span class="cat-links">
                                            <a>Agustusan</a>
                                        </span>
                                        <span class="byline">
                                            By:
                                            <a>Shikamaru Nara</a>
                                        </span>
                                    </div>
                                    <h1 class="entry__title"><a href="<?php echo base_url();?>/assets/single-standard3.html">5 Lomba Agustusan Anti-Mainstream</a></h1>
                                 </div>
                                <div class="entry__excerpt">
                                    <p>
                                        Tanggal 17 Agustus yang diperingati sebagai Hari Kemerdekaan Republik Indonesia atau HUT RI kerap 
                                        diisi dengan berbagai macam lomba. Mulai dari memasukkan pensil ke dalam botol, makan kerupuk, 
                                        balap karung, hingga olahraga voli dan sepak bola.
                                    </p>
                                </div>
                                <a class="entry__more-link" href="<?php echo base_url();?>/assets/single-standard3.html">Read More</a>
                            </div> <!-- end entry__text -->
            
                        </article> <!-- end entry -->
        
                        <article class="brick entry" data-animate-el>
        
                            <div class="entry__thumb">
                                <a href="<?php echo base_url();?>/assets/single-standard4.html" class="thumb-link">
                                    <img src="<?php echo base_url();?>/assets/images/thumbs/masonry/gambar5-600.jpg" 
                                        srcset="<?php echo base_url();?>/assets/images/thumbs/masonry/gambar5-600.jpg, <?php echo base_url();?>/assets/images/thumbs/masonry/gambar5-1200.jpg" alt="">
                                </a>
                            </div>  <!-- end entry__thumb -->
        
                            <div class="entry__text">
                                <div class="entry__header">
                                    <div class="entry__meta">
                                        <span class="cat-links">
                                            <a>BAKSOS</a>
                                        </span>
                                        <span class="byline">
                                            By:
                                            <a>Kakashi Hatake</a>
                                        </span>
                                    </div>
                                    <h1 class="entry__title"><a href="<?php echo base_url();?>/assets/single-standard4.html">Gelar Bakti Sosial di Hadiri TNI-Polri</a></h1>
                                </div>
                                <div class="entry__excerpt">
                                    <p>
                                        Kegiatan pengukuran tanah di desa Jatimakmur oleh BPN didampingi petugas keamanan telah usai sejak Kamis 
                                        10 Februari kemarin, namun hadirnya sosok aparat yang menjaga harkamtibmas di desa Jatimakmur masih dibutuhkan 
                                        oleh masyarakat setempat.
                                    </p>
                                </div>
                                <a class="entry__more-link" href="<?php echo base_url();?>/assets/single-standard4.html">Read More</a>
                            </div> <!-- end entry__text -->
                        
                        </article> <!-- end article -->

                        

                        <article class="brick entry" data-animate-el>
        
                            <div class="entry__thumb">
                                <a href="<?php echo base_url();?>/assets/single-standard5.html" class="thumb-link">
                                    <img src="<?php echo base_url();?>/assets/images/thumbs/masonry/gambar6-600.jpg" 
                                        srcset="<?php echo base_url();?>/assets/images/thumbs/masonry/gambar6-600.jpg, <?php echo base_url();?>/assets/images/thumbs/masonry/gambar6-1200.jpg" alt="">
                                </a>
                            </div> <!-- end entry__thumb -->
        
                            <div class="entry__text">
                                <div class="entry__header">
                                    <div class="entry__meta">
                                        <span class="cat-links">
                                            <a>Imunisasi</a> 
                                            <a>Bayi</a>
                                        </span>
                                        <span class="byline">
                                            By:
                                            <a>Baruto Oshiro</a>
                                        </span>
                                    </div>
                                    <h1 class="entry__title"><a href="<?php echo base_url();?>/assets/single-standard5.html">Pelayanan Imunisasi di Desa Jatimakmur</a></h1>
                                </div>
                                <div class="entry__excerpt">
                                    <p>
                                        Pelayanan imunisasi balita di Desa Terusan Kecamatan Gedeg diadakan di Balai Desa Terusan. Adapun 
                                        kegiatannya imunisasi dan penimbangan. Imunisasi yang dilaksanakan adalah DPT dan Polio, BCG, CAMPAK.
                                    </p>
                                </div>
                                <a class="entry__more-link" href="<?php echo base_url();?>/assets/single-standard5.html">Read More</a>
                            </div> <!-- end entry__text -->
                        
                        </article> <!-- end article -->
        
                        <article class="brick entry" data-animate-el>
                
                            <div class="entry__thumb">
                                <a href="<?php echo base_url();?>/assets/single-standard6.html" class="thumb-link">
                                    <img src="<?php echo base_url();?>/assets/images/thumbs/masonry/gambar7-600.jpg" 
                                        srcset="<?php echo base_url();?>/assets/images/thumbs/masonry/gambar7-600.jpg, <?php echo base_url();?>/assets/images/thumbs/masonry/gambar7-1200.jpg" alt="">
                                </a>
                            </div> <!-- end entry__thumb -->
                
                            <div class="entry__text">
                                <div class="entry__header">
                                    <div class="entry__meta">
                                        <span class="cat-links">
                                            <a>Urbanisasi</a>
                                        </span>
                                        <span class="byline">
                                            By:
                                            <a>Chikamoto Okubo</a>
                                        </span>
                                    </div>
                                    <h1 class="entry__title"><a href="<?php echo base_url();?>/assets/single-standard6.html">Pembangunan Desa Cegah Urbanisasi</a></h1>
                                </div>
                                <div class="entry__excerpt">
                                    <p>
                                        Gubernur Jawa Barat Ahmad Heryawan mengatakan, pembangunan di desa bisa menjadi salah satu cara 
                                        mencegah urbanisasi pasca-Lebaran. Urbanisasi biasanya didominasi pelajar dan mahasiswa yang ingin 
                                        menimba ilmu.
                                    </p>
                                </div>
                                <a class="entry__more-link" href="<?php echo base_url();?>/assets/single-standard6.html">Read More</a>
                            </div> <!-- end entry__text -->
                        </article> <!-- end article -->
        
                        <article class="brick entry" data-animate-el>
        
                            <div class="entry__thumb">
                                <a href="<?php echo base_url();?>/assets/single-standard7.html" class="thumb-link">
                                    <img src="<?php echo base_url();?>/assets/images/thumbs/masonry/gambar8-600.jpg" 
                                        srcset="<?php echo base_url();?>/assets/images/thumbs/masonry/gambar8-600.jpg, <?php echo base_url();?>/assets/images/thumbs/masonry/gambar8-1200.jpg" alt="">
                                </a>
                            </div> <!-- end entry__thumb -->
        
                            <div class="entry__text">
                                <div class="entry__header">
                                    <div class="entry__meta">
                                        <span class="cat-links">
                                            <a>Pengerukan</a>
                                            <a>Kali</a>
                                        </span>
                                        <span class="byline">
                                            By:
                                            <a>Sakura Haruno</a>
                                        </span>
                                    </div>
                                    <h1 class="entry__title"><a href="<?php echo base_url();?>/assets/single-standard7.html">Pengerukan Kali Lamong Capai 60 Persen</a></h1>
                                </div>
                                <div class="entry__excerpt">
                                    <p>
                                        Pengerukan Kali Lamong mencapai 60 persen, diklaim lebih cepat menyurutkan banjir luapan Kali Lamong.
                                        Belasan alat berat masih terus melakukan pengerukan di sejumlah titik.
                                    </p>
                                </div>
                                <a class="entry__more-link" href="<?php echo base_url();?>/assets/single-standard7.html">Read More</a>
                            </div> <!-- end entry__text -->
                        
                        </article> <!-- end article -->
        
                        <article class="brick entry" data-animate-el>
        
                            <div class="entry__thumb">
                                <a href="<?php echo base_url();?>/assets/single-standard8.html" class="thumb-link">
                                    <img src="<?php echo base_url();?>/assets/images/thumbs/masonry/gambar9-600.jpg" 
                                        srcset="<?php echo base_url();?>/assets/images/thumbs/masonry/gambar9-600.jpg, <?php echo base_url();?>/assets/images/thumbs/masonry/gambar9-1200.jpg" alt="">
                                </a>
                            </div> <!-- end entry__thumb -->
        
                            <div class="entry__text">
                                <div class="entry__header">
                                    <div class="entry__meta">
                                        <span class="cat-links">
                                            <a>Perbaikan</a>
                                            <a>Akses Jalan</a>
                                        </span>
                                        <span class="byline">
                                            By:
                                            <a>Douko Goto</a>
                                        </span>
                                    </div>
                                    <h1 class="entry__title"><a href="<?php echo base_url();?>/assets/single-standard8.html">Akses Jalan Desa Terus Dibangun</a></h1>
                                </div>
                                <div class="entry__excerpt">
                                    <p>
                                        Pembangunan infrastruktur di wilayah Jatimakmur terus berjalan. Pembangunan selain dilakukan langsung 
                                        Pemkab Jatimakmur, juga dilakukan di tingkat desa, khususnya pembangunan jalan. Pembangunan salah satunya 
                                        seperti yang dilakukan di Desa Jatimakmur.
                                    </p>
                                </div>
                                <a class="entry__more-link" href="<?php echo base_url();?>/assets/single-standard8.html">Read More</a>
                            </div> <!-- end entry__text -->
                        </article> <!-- end article -->
                    </div> <!-- end bricks-wrapper -->
                </div> <!-- end masonry-->


                <!-- pagination -->
                <div class="row pagination">
                    <div class="column lg-12">
                        <nav class="pgn">
                            <ul>
                                <li>
                                    <a class="pgn__prev" href="<?php echo base_url();?>/assets/#0">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.25 6.75L4.75 12L10.25 17.25"></path>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 12H5"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li><a class="pgn__num" href="<?php echo base_url();?>/assets/index.html">1</a></li>
                                <li><a class="pgn__num" href="<?php echo base_url();?>/assets/index2.html">2</a></li>
                                <li><a class="pgn__num" href="<?php echo base_url();?>/assets/index3.html">3</a></li>
                                <li>
                                    <a class="pgn__next" href="<?php echo base_url();?>/assets/#0">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 12H4.75"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav> <!-- end pgn -->
                    </div> <!-- end column -->
                </div> <!-- end pagination -->

            </div> <!-- end bricks -->

        </section> <!-- end s-content -->


        <!-- # site-footer
        ================================================== -->
        <footer id="colophon" class="s-footer">

            <div class="row s-footer__subscribe">
                <div class="column lg-12">

                    <h2>
                    Subscribe Berita Jatimakmur Terbaru.
                    </h2>
                    <p>
                    Subscribe sekarang untuk mendapatkan semua berita terbaru
                    </p>

                    <form id="mc-form" class="mc-form">
                        <input type="email" name="EMAIL" id="mce-EMAIL" class="u-fullwidth text-center" placeholder="Tulis Email Anda" title="The domain portion of the email address is invalid (the portion after the @)." pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$" required>
                        <input type="submit" name="subscribe" value="Subscribe" class="btn--small btn--primary u-fullwidth">
                        <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cdb7b577e41181934ed6a6a44_9a91cfe7b3" tabindex="-1" value=""></div> -->
                        <div class="mc-status"></div>
                    </form>

                </div>
            </div> <!-- end s-footer__subscribe -->

            <div class="row s-footer__main">

                <div class="column lg-5 md-6 tab-12 s-footer__about">
                    <h4>Jatimakmur</h4>

                    <p>
                        Desa Jatimakmur adalah salah satu desa 
                        di Kecamatan Nusa Penida, yang terletak 
                        22 Kilometer dari Kota Kecamatan. Desa Jatimakmur termasuk salah satu 
                        desa tua,hal ini dapat dibuktikan dengan ditemukannya 
                        banyak kerangka manusia yang ukurannya lebih kecil dari 
                        manusia normal dan sudah memakai perhiasan yang terbuat dari tembaga.
                    </p>
                </div> <!-- end s-footer__about -->

                <div class="column lg-5 md-6 tab-12">
                    <div class="row">
                        <div class="column lg-6">
                            <h4>Data Desa</h4>
                            <ul class="link-list">
                                <li><a href="<?php echo base_url();?>/assets/login_user.php">Pengajuan Surat</a></li>
                                <li><a href="<?php echo base_url();?>/assets/login_user.php">Laporan Desa</a></li>
                            </ul>
                        </div>
                        <div class="column lg-6">
                            <h4>Site Links</h4>
                            <ul class="link-list">
                                <li><a href="<?php echo base_url();?>/assets/index.html">Beranda</a></li>
                                <li><a href="<?php echo base_url();?>/assets/profil.html">Profil</a></li>
                                <li><a href="<?php echo base_url();?>/assets/pemerintah.html">Pemerintahan</a></li>
                                <li><a href="<?php echo base_url();?>/assets/suratonline.php">Surat Online</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div> <!-- end s-footer__main -->

            <div class="row s-footer__bottom">

                <div class="column lg-7 md-6 tab-12">
                    <ul class="s-footer__social">
                        <li>
                            <a href="<?php echo base_url();?>/assets/https://id-id.facebook.com/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: msFilter; "><path d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z"></path></svg>
                                <span class="u-screen-reader-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>/assets/https://twitter.com/i/flow/login">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform: -ms-filter; "><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                <span class="u-screen-reader-text">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>/assets/https://www.instagram.com/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform: -ms-filter; "><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="column lg-5 md-6 tab-12">
                    <div class="ss-copyright">
                        <span>© Copyright Jatimakmur 2022</span> 
                        <span>Design by <a href="<?php echo base_url();?>/assets/https://wa.me/08557673391">Tsaniya</a></span>
                    </div>
                </div>

            </div> <!-- end s-footer__bottom -->
           
            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="<?php echo base_url();?>/assets/#top">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 10.25L12 4.75L6.75 10.25"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19.25V5.75"/>
                    </svg>
                </a>
            </div> <!-- end ss-go-top -->

        </footer><!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="<?php echo base_url();?>/assets/js/plugins.js"></script>
    <script src="<?php echo base_url();?>/assets/js/main.js"></script>

</body>
</html>