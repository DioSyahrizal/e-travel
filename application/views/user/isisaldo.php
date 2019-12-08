<?php $this->load->view('header');?>


<div id="breadcrumb">
	<div class="container">
		<div class="breadcrumb">
			<li><a href="<?=site_url()?>/">Home</a></li>
			<li>About Us</li>
		</div>
	</div>
</div>

<div class="aboutus">
	<div class="container">
		<h3>Isi Saldo</h3>

		<div class="col-md-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
			<h4>Rp. <?php echo $saldo[0]->saldo ?></h4>
		</div>
		<?php echo form_open_multipart('User/saldoRequest'); ?>
		<?php echo validation_errors(); ?>
		<div class="form-group">
			<label for="nama">Isi</label>
			<input type="text" class="form-control" name="saldo" required="required">
		</div>
	</div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary button">Isi Saldo</button>
		<?php echo form_close(); ?>
	</div>
</div>

<?php $this->load->view('footer');?>
