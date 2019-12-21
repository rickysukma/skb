<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> <?php echo $title.' | '.$identitas->title ?></title>
    <link rel="shorcut icon" href="<?php echo base_url().'assets/images/logo.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <link href="<?php echo base_url().'theme/css/dataTables.bootstrap4.min.css'?>" rel="stylesheet">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
     <!--Social Share-->
     <link href="<?php echo base_url().'theme/css/jssocials.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'theme/css/jssocials-theme-flat.css'?>" rel="stylesheet">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/magnific-popup.css'?>">
    <!-- Image Hover CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'theme/css/normalize.css'?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'theme/css/set2.css'?>" />

  <!-- Masonry Gallery -->
  <link href="<?php echo base_url().'theme/css/animated-masonry-gallery.css'?>" rel="stylesheet" type="text/css" />
    <style>
    	.sharePopup{
    		font-size: 11px;
    	}
      .sharePopup a{
    		font-size: 11px;
        color: #fff;
        text-decoration: none;
    	}
    </style>
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body>
    <!--============================= HEADER =============================-->
<div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-10">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span><?= $identitas->telp ?>
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span><?= $identitas->email ?>
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span><?= $identitas->alamat ?>
                        </div>
                    </div>
                    <div class="header-top_login2">
                        <a href="<?php echo site_url('kontak');?>">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-2">
                    <div class="header-top_login mr-sm-3">
                        <a href="<?php echo site_url('kontak');?>">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="40px;" src="<?php echo base_url().'assets/images/logo.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Beranda</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="profilDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Profil</a>
                                    <div class="dropdown-menu" aria-labelledby="profilDropdown">
                                    <a class="dropdown-item" href="<?= site_url('sejarah'); ?>">Sejarah</a>
                                    <a class="dropdown-item" href="<?= site_url('visi-misi'); ?>">Visi & Misi</a>
                                    <a class="dropdown-item" href="<?= site_url('guru'); ?>">Staff Kependidikan</a>
                                    <!-- <div class="dropdown-divider"></div> -->
                                    <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                                </div>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('guru');?>">Guru</a>
                                </li> -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="programDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="<?= base_url('program-belajar') ?>">Program Belajar</a>
                                    <div class="dropdown-menu" aria-labelledby="profilDropdown">
                                    <a class="dropdown-item" href="<?php echo site_url() ?>program">Semua Program Belajar</a>
                                    <?php foreach($kelompok->result() as $k){
                                        echo '<a class="dropdown-item" href="'.site_url('program/').$k->slug.'">'.$k->nama_kelompok.'</a>';
                                    }
                                    ?>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman');?>">Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda');?>">Agenda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('download');?>">Download</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>">Galeri</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('kontak');?>">Kontak</a>
                                </li>
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div>
<!--//END HEADER -->
    <?php echo $contents; ?>
    <!--============================= FOOTER =============================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="<?php echo site_url();?>">
                        <img src="<?php echo base_url().'assets/images/logo.png'?>" class="img-fluid" alt="footer_logo">
                    </a>
                    <p><?php echo date('Y');?> © copyright by <a href="#" target="_blank">M Fikri</a>. <br>All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url();?>">Beranda</a></li>
                            <li><a href="<?php echo site_url('about');?>">Profil</a></li>
                            <li><a href="<?php echo site_url('artikel');?>">Berita </a></li>
                            <li><a href="<?php echo site_url('galeri');?>">Galeri</a></li>
                            <li><a href="<?php echo site_url('kontak');?>">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="sitemap">
                      <h3>Akademik</h3>
                      <ul>
                          <!-- <li><a href="<?php echo site_url('guru');?>">Guru</a></li> -->
                          <li><a href="<?php echo site_url('siswa');?>">Program Pelaksanaan </a></li>
                          <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                          <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                          <li><a href="<?php echo site_url('download');?>">Download</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span> <?= $identitas->alamat ?></p>
                        <p>Email : <?= $identitas->email ?>
                        <!-- <br>upt.skbbantul@bantulkab.go.id -->
                            <br> Telp/Fax : <?= $identitas->telp ?></p>
                            <ul class="footer-social-icons">
                                <li><a href="<?= $identitas->fb ?>"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                                <li><a href="<?= $identitas->twitter ?>"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- jQuery, Bootstrap JS. -->
        <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
        <!-- Plugins -->
        <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>

        <script src="<?php echo base_url().'theme/js/jquery-ui-1.10.4.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/jquery.isotope.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/animated-masonry-gallery.js'?>"></script>
        <!-- Magnific popup JS -->
        <script src="<?php echo base_url().'theme/js/jquery.magnific-popup.js'?>"></script>
        <!-- Subscribe -->
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/jquery.dataTables.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/dataTables.bootstrap4.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/jssocials.js'?>"></script>
            <script>
              $(document).ready(function() {
                
                // datatables
                $('#display').DataTable();

                // JS Social Share
                $(".sharePopup").jsSocials({
                  showCount: true,
            			showLabel: true,
            			shareIn: "popup",
            			shares: [
            			{ share: "twitter", label: "Twitter" },
            			{ share: "facebook", label: "Facebook" },
            			{ share: "googleplus", label: "Google+" },
            			{ share: "linkedin", label: "Linked In" },
                  { share: "pinterest", label: "Pinterest" }
            			]
                });

              });
            </script>
    </body>

    </html>
