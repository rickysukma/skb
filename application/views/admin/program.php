<!-- Main content -->
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" href="<?= site_url('admin/program/add_program')?>"><span class="fa fa-plus"></span> Program Belajar</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:12px;">
                <thead>
                <tr>
					<th style="width:70px;">#</th>
                    <th>Program Belajar</th>
                    <th>Persyaratan</th>
                    <th>Biaya</th>
                    <th>Kelompok</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no=0;
  					foreach ($data->result() as $i) :
  					   $no++;
                    ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $i->nama_program;?></td>
                  <td><?php echo $i->deskripsi;?></td>
                  <td><?php echo $i->biaya == 0 ? 'Gratis' : $i->biaya;?></td>
                  <td><?php echo  $i->nama_kelompok ?></td>
                  <td style="text-align:right;">
                        <a class="btn" href="<?php echo site_url('admin/program/get_edit/').$i->id_program;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $i->id_program;?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
				<?php endforeach;?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

	<?php foreach ($data->result() as $i) :
                $id=$i->id_program;
                $nama=$i->nama_program;
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus kelompok</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/program/hapus_program'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							<input type="hidden" name="kode" value="<?php echo $id;?>"/>
                            <p>Apakah Anda yakin mau menghapus kelompok <b><?php echo $nama;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>