<!-- Main content -->
<section class="content">
<?php
$x = $data->result();
?>
<!-- SELECT2 EXAMPLE -->
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Nama Program</h3>
  </div>

  <form action="<?php echo base_url().'admin/program/update_program'?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $x[0]->id_program ?>">
  <!-- /.box-header -->
  <div class="box-body">
    <div class="row">
      <div class="col-md-10">
        <input type="text" name="nama_program" class="form-control" placeholder="Nama Kegiatan Belajar" value="<?= $x[0]->nama_program ?>" required/>
      </div>
      <!-- /.col -->
      <div class="col-md-2">
        <div class="form-group">
          <button type="submit" class="btn btn-success btn-flat pull-right"><span class="fa fa-plus"></span> Simpan</button>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.box-body -->

</div>
</div>
<!-- /.box -->
<div class="row">
  <div class="col-md-8">

    <div class="box box-danger">
      <div class="box-header">
        <h3 class="box-title">Keterangan dan Persyaratan</h3>
      </div>
      <div class="box-body">

      <textarea id="ckeditor" name="keterangan" required><?= $x[0]->deskripsi ?></textarea>

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </div>
  <!-- /.col (left) -->
  <div class="col-md-4">
    <div class="box box-primary">
      <div class="box-header">
        <h3 class="box-title">Pengaturan Lainnya</h3>
      </div>
      <div class="box-body">

      <div class="form-group">
          <label>Biaya</label>
          <input type="number" name="biaya" id="biaya" class="form-control" value="<?= $x[0]->biaya ?>" required>
          <small><code>*</code>Isikan angka 0 jika kegiatan gratis</small>
          <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="gratis">
            <label class="form-check-label" for="gratis">Gratis</label>
        </div> -->
        </div>

        <div class="form-group">
          <label>Kelompok Belajar</label>
          <select class="form-control select2" name="kelompok" style="width: 100%;" required>
            <option value="">-Pilih-</option>
            <?php
                $selected = '';
              $no=0;
              foreach ($kat->result_array() as $i) :
                 $no++;
                 $kategori_id=$i['id_kelompok'];
                 $kategori_nama=$i['nama_kelompok'];

              ?>
            <option <?= $kategori_id == $x[0]->id_kelompok ? 'selected' : '' ?> value="<?php echo $kategori_id;?>"><?php echo $kategori_nama;?></option>
            <?php endforeach;?>
          </select>
        </div>
        <!-- /.form group -->
       <div class="form-group">
        <!--<label>
            <input type="checkbox" class="minimal" name="ximgslider" value="1">
             Tampilkan pada Image Slider
          </label>
        </div>-->

      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </form>

    <!-- /.box -->
  </div>
  <!-- /.col (right) -->
</div>
<!-- /.row -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->