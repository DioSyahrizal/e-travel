<?php $this->load->view('admin/header');?>
<div id="page-wrapper">
	<!-- <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Barang</h1>
                </div>
            </div> -->
	<!-- /.row -->
	<br>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Admin List
				</div>
				<div class="card-read-more">
					<a class="btn btn-primary btn-block" data-toggle="modal" href='#modal-id'>Create</a>
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nama</th>
								<th>Tipe Mobil</th>
								<th>Kapasitas</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($mobil as $key) {?>
							<tr>
								<td><?php echo $key->id ?></td>
								<td><?php echo $key->nama ?></td>
								<td><?php echo $key->tipe_mobil ?></td>
								<td><?php echo $key->kapasitas ?></td>
								<td><a class="btn btn-warning btn-xs" href="<?=site_url()?>/Admin/update/<?php echo $key->id ?>">Update</a>
								<a class="btn btn-danger btn-xs" href="<?=site_url()?>/Admin/deleteTravel/<?php echo $key->id ?>">Delete</a></<a>
							</tr>
							<?php }?>
						</tbody>
					</table>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /#page-wrapper -->
	<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Create Travel</h4>
			</div>
			<div class="modal-body">
				<?php echo form_open_multipart('Admin/createTravel'); ?>
				<?php echo validation_errors(); ?>
				<div class="form-group title">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" name="nama" required="required">
				</div>
				<div class="form-group">
					<label for="tipe_mobil">Tipe Mobil</label>
					<input type="textarea" class="form-control" name="tipe_mobil" required></i>
				</div>
				<div class="form-group">
					<label for="kapasitas">Kapasitas</label>
					<input type="textarea" class="form-control" name="kapasitas" required></input>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary button">Daftar</button>
				<button type="button" class="btn btn-default button" data-dismiss="modal">Close</button>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>


</div>


<?php $this->load->view('admin/footer');?>
