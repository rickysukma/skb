<?php
function rupiah($angka){
	
    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
    return $hasil_rupiah;
 
}
?>
<section class="contact" style="margin-bottom:50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>Program Belajar <?php echo ucfirst(str_replace('-',' ',$this->uri->segment(2))) ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table" id="display">
                  <thead>
                    <tr>
                      <th>Daftar Program Belajar <span style="float:right">Kelas</span></th>
                      <!-- <th>Kelompok</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      foreach ($data->result() as $row):
                    ?>
                    <tr>
                      <td>
                      <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                            <h6 class="mb-0">
                                <a href="javascript:void()" style="text-decoration:none" data-toggle="collapse" data-target="#collapse-<?php echo $row->id_program?>" aria-expanded="true" aria-controls="collapseOne">
                                <?= $row->nama_program ?>
                                </a>
                                <?php 
                                $badge = array('primary','success','warning','danger','info');
                                ?>
                                <span class="badge badge-primary" style="float:right"><?= $row->nama_kelompok ?></span>
                            </h6>
                            </div>

                            <div id="collapse-<?php echo $row->id_program?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <div class="col-md-12">
                                <?= $row->deskripsi.'<br>'?>
                                <?= ''.$row->biaya == 0 ? '<p>Biaya : Gratis </p>' : '<p>Biaya : '.rupiah($row->biaya).' </p>'   ?>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                      </td>
                      <!-- <td><?= $row->nama_kelompok ?></td> -->
                    </tr>
                  <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!--//END  ABOUT IMAGE -->