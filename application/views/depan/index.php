<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <h2>Welcome</h2>
               <p>Kami Menyambut baik terbitnya Website MSCHOOL yang baru , dengan harapan dipublikasinya website ini sekolah berharap : Peningkatan layanan pendidikan kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat. </p>

            </div>
            <div class="col-md-4">
                <img src="<?php echo base_url().'theme/images/welcome.png'?>" class="img-fluid about-img" alt="#">
            </div>
        </div>
    </div>
</section>
<!--//END ABOUT -->
<!--============================= OUR COURSES =============================-->
<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Artikel Terbaru</h2>
            </div>
        </div>
        <div class="row">
          <?php foreach ($berita->result() as $row) :?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <div class="course-img-wrap">
                        <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="courses-img">
                    </div>
                    <!-- // end .course-img-wrap -->
                    <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="course-box-content">
                        <h3 style="text-align:center;"><?php echo $row->tulisan_judul;?></h3>
                    </a>
                </div>
            </div>
          <?php endforeach;?>
        </div> <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('artikel');?>" class="btn btn-default btn-courses">View More</a>
            </div>
        </div>
    </div>
</section>
<!--//END OUR COURSES -->
<!--============================= EVENTS =============================-->
<section class="event">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="event-img2">
                <?php foreach ($pengumuman->result() as $row) :?>
                <div class="row">
                    <div class="col-sm-3"> <img src="<?php echo base_url().'theme/images/announcement-icon.png'?>" class="img-fluid" alt="event-img"></div><!-- // end .col-sm-3 -->
                    <div class="col-sm-9"> <h3><a href="<?php echo site_url('pengumuman');?>"><?php echo $row->pengumuman_judul;?></a></h3>
                      <span><?php echo $row->tanggal;?></span>
                      <p><?php echo $row->pengumuman_deskripsi;?></p>

                    </div><!-- // end .col-sm-7 -->
                </div><!-- // end .row -->
                <?php endforeach;?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                      <?php foreach ($agenda->result() as $row):?>
                        <div class="event_date">
                            <div class="event-date-wrap">
                                <p><?php echo date("d", strtotime($row->agenda_tanggal));?></p>
                                <span><?php echo date("M. y", strtotime($row->agenda_tanggal));?></span>
                            </div>
                        </div>
                        <div class="date-description">
                            <h3><a href="<?php echo site_url('agenda');?>"><?php echo $row->agenda_nama;?></a></h3>
                            <p><?php echo $row->agenda_deskripsi;?></p>
                            <hr class="event_line">
                        </div>
                        <?php endforeach;?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--//END EVENTS -->