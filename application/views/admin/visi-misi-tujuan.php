<!-- Main content -->
<section class="content">
	<!-- SELECT2 EXAMPLE -->
	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Visi, Misi & Tujuan</h3>
		</div>
		<form action="
			<?php echo base_url().'admin/visimisi/simpan'?>" method="post" enctype="multipart/form-data">
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-10">
						<input type="text" name="xjudul" class="form-control" placeholder="Visi Instansi" required/>
					</div>
					<!-- /.col -->
					<div class="col-md-2">
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-flat pull-right">
								<span class="fa fa-pencil"></span> Publish
							</button>
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
						<h3 class="box-title">Berita</h3>
					</div>
					<div class="box-body">
						<textarea id="ckeditor" name="xisi" required></textarea>
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
							<label>Kategori</label>
							<select class="form-control select2" name="xkategori" style="width: 100%;" required>
								<option value="">-Pilih-</option>
							</select>
						</div>
						<div class="form-group">
							<label>Gambar</label>
							<input type="file" name="filefoto" style="width: 100%;" required>
							</div>
							<!-- /.form group -->
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