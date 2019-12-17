<!--============================= HEADER =============================-->
<div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span>(0274) 4396012
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>skbbantul@yahoo.com
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>Jalan Imogiri Barat Km. 7, Semail Bangunharjo Sewon, Bantul
                        </div>
                    </div>
                    <div class="header-top_login2">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        <a href="<?php echo site_url('contact');?>">Hubungi Kami</a>
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
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="200px;" src="<?php echo base_url().'theme/images/logo-dark.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Beranda</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="profilDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Profil</a>
                                    <div class="dropdown-menu" aria-labelledby="profilDropdown">
                                    <a class="dropdown-item" href="#">Sejarah</a>
                                    <a class="dropdown-item" href="#">Visi & Misi</a>
                                    <a class="dropdown-item" href="#">Staff Kependidikan</a>
                                    <!-- <div class="dropdown-divider"></div> -->
                                    <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                                </div>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('guru');?>">Guru</a>
                                </li> -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="programDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" href="#">Program</a>
                                    <div class="dropdown-menu" aria-labelledby="profilDropdown">
                                    <?php foreach($kelompok as $k){
                                        echo '<a class="dropdown-item" href="'.site_url('kelompok/').$k['slug'].'">'.$k['nama_kelompok'].'</a>';
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
                                  <a class="nav-link" href="<?php echo site_url('contact');?>">Kontak</a>
                                </li>
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div>
<section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider.jpg'?>" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Bepikir Kreaftif &amp; Inovatif</h1>
                            <h4>Bagi kami kreativitas merupakan gerbang masa depan.<br> kreativitas akan mendorong inovasi. <br> Itulah yang kami lakukan.</h4>
                            <div class="slider-btn">
                                <a href="<?php echo site_url('artikel');?>" class="btn btn-default">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider-2.jpg'?>" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Guru Bekualitas Tinggi</h1>
                            <h4>Guru merupakan faktor penting dalam proses belajar-mengajar.<br> Itulah kenapa kami mendatangkan guru-guru <br>terbaik dari berbagai penjuru.</h4>
                            <div class="slider-btn">
                                <a href="<?php echo site_url('guru');?>" class="btn btn-default">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider-3.jpg'?>" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Proses Belajar Interatif</h1>
                            <h4>Kami membuat proses belajar mengajar menjadi lebih interatif.<br> dengan demikian siswa lebih menyukai <br>proses belajar.</h4>
                            <div class="slider-btn">
                                <a href="<?php echo site_url('galeri');?>" class="btn btn-default">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!--//END HEADER -->