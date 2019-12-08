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
					Saldo
				</div>

				<!-- /.panel-heading -->
				<div class="panel-body">
					<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>Id</th>
								<th>Id User</th>
								<th>Saldo</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($saldo as $key) {?>
							<tr>
								<td><?php echo $key->id ?></td>
								<td><?php echo $key->id_user ?></td>
								<td><?php echo $key->saldo ?></td>
								<td><?php echo $key->status ?></td>
								<td><a class="btn btn-success btn-xs" href="<?=site_url()?>/Admin/tambahsaldo/<?php echo $key->id ?>/<?php echo $key->id_user ?>/<?php echo $key->saldo ?>">Accept</a>
								<a class="btn btn-danger btn-xs" href="<?=site_url()?>/Admin/gagalsaldo/<?php echo $key->id ?>">Decline</a></<a>
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

</div>


</div>


<?php $this->load->view('admin/footer');?>
