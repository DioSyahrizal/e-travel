<?php $this->load->view('header');?>


<div id="breadcrumb">
	<div class="container">
		<div class="breadcrumb">
			<li><a href="<?=site_url()?>/">Home</a></li>
			<li>Paket Travel</li>
		</div>
	</div>
</div>

<section id="portfolio">
	<div class="container">
		<div class="">
			<div class="portfolio-items">
				<?php foreach ($travel as $key) {?>
				<div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
					<div class="recent-work-wrap">
						<img class="img-responsive" src="<?=base_url()?>/assets/img/background3.jpg" alt="">
						<div class="overlay">
							<div class="recent-work-inner">
								<h3><a href="<?php echo site_url('User/review/' . $key->id) ?>"> <?php echo $key->nama_paket ?></a></h3>
								<p><?php echo $key->harga ?></p>
								<a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i
										class="fa fa-eye"></i> View</a>
							</div>
						</div>
					</div>
				</div>
				<?php }?>

				<!--/.portfolio-item-->
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('footer');?>
