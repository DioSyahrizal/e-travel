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
		<h3>Our company information</h3>
		<hr>
		<div class="col-md-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
			<img src="<?=base_url()?>/assets/img/bannerabout.jpg" class="img-responsive">
			<h4>E-Travel</h4>
			<p>Sebuah sistem informasi Pemesanan Tiket berbasis website yang memberikan informasi jadwal keberangkatan,
				pemesanan tiket, maupun pembelian tiket travel. Sistem Informasi Pemesanan Tiket Travel ini dirancang selain
				untuk meningkatkan kinerja bagian operasional pihak penyedia jasa travel dalam melakukan penjadwalan juga
				membantu mengelola data penumpang dan detail pemesanan..
			</p>
		</div>
	</div>
</div>

<div class="our-team">
	<div class="container">
		<h3>Our Team</h3>
		<div class="text-center">
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<img src="images/services/1.jpg" alt="">
				<h4>Dio Syahrizal</h4>

			</div>
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<img src="images/services/2.jpg" alt="">
				<h4>Sulis</h4>

			</div>
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
				<img src="images/services/3.jpg" alt="">
				<h4>Riski SP</h4>

			</div>
		</div>
	</div>
</div>

<?php $this->load->view('footer');?>
