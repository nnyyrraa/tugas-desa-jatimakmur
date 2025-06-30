<?php 
    require 'koneksi_registrasi.php';

    //jika tombol register ditekan
    if(isset($_POST["submit"])){
        if(penjualan($_POST) > 0){
                echo"<script>            
                    alert('Registrasi Berhasil !');
                    document.location.href = 'index_pelanggan.php';
                </script>";
        }else{
            echo"<script>
                    alert('Registrasi Gagal !');
                </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin Jatimakmur</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="myadmin/css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <script>
      document.documentElement.classList.remove('no-js');
      document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

  <body class="login-img3-body">

      <!-- # site header 
        ================================================== -->
        <header id="masthead" class="s-header">

            <div class="s-header__branding">
                <p class="site-title">
                    <a href="index.html" rel="home">Jatimakmur.</a>
                </p>
            </div>

            
            <div class="row s-header__navigation">
                <nav class="s-header__nav-wrap">
                    <h3 class="s-header__nav-heading">Menu to</h3>
                    <ul class="s-header__nav">
                        <li class="current-menu-item"><a href="index.html" title="">Beranda</a></li>
                        <li class="has-children">
                            <a href="#" title="" class="">Profil</a>
                            <ul class="sub-menu">
                                <li><a href="sejarah.html">Sejarah Desa</a></li>
                                <li><a href="profil.html">Profil Wilayah</a></li>
                                <li><a href="artilambang.html">Arti Lambang</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#" title="" class="">Pemerintahan</a>
                            <ul class="sub-menu">
                                <li><a href="visimisi.html">Visi Misi</a></li>
                                <li><a href="pemerintah.html">Pemerintah Desa</a></li>
                                <li><a href="badan_permusyawaratan.php">Badan Permusyawaratan Desa</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#" title="" class="">Data</a>
                            <ul class="sub-menu">
                                <li><a href="login_user.php">Pengajuan Surat</a></li>
                                <li><a href="login_user.php">Laporan Desa</a></li>
                            </ul>
                        </li>
                        <li><a href="suratonline.php" title="">Surat Online</a></li>
                        <li class="has-children">
                            <a href="#" title="" class="">Login</a>
                            <ul class="sub-menu">
                                <li><a href="login.php">Administratif</a></li>
                                <li><a href="login_user.php">Penduduk</a></li>
                            </ul>
                        </li>
                    </ul> <!-- end s-header__nav -->
                </nav> <!-- end s-header__nav-wrap -->
            </div> <!-- end s-header__navigation -->

            <a class="s-header__menu-toggle" href="#0"><span>Beranda</span></a>
        </header> <!-- end s-header -->

    <div class="container" style="margin-top: -90px;">
      <form class="login-form" action="cekregistrasi.php" method="POST">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="user_id" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Login</button>
            <b style="color: black;">Belum punya akun? <a href="registrasi_user.php">Registrasi Disini</a></b>
        </div>
      </form>
    </div>

    <!-- Java Script
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
