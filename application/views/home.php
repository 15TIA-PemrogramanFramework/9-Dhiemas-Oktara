<?php $this->load->view('templates/header');?>
<body class="page-body  page-left-in" >

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
		<?php $this->load->view('templates/navigation');?>

	</ul>

	<div class="main-content">
				
		<div class="row">
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="well">
					<h2><?php echo tgl(); ?></h2>
					<h3>Selamat Datang di Website,  <strong><?php  echo $this->session->userdata('username'); ?></strong></h3>
				</div>
			</div>
<div class="col-sm-3 col-xs-6">
		<a href="<?php echo site_url('penemu/tambah') ?>">
				<div class="tile-stats tile-red">
					<div class="icon"><i class="entypo-users"></i></div>
					<div class="num" data-start="0" data-end="1" data-postfix="" data-duration="1500" data-delay="0">0</div>
		
					<h3>Tambahkan Data Penemu</h3>
				</div>
			</a>
		
			</div>

			<div class="col-sm-3 col-xs-6">
		<a 	href="<?php echo site_url('pemilik/tambah') ?>">
				<div class="tile-stats tile-grey">
					<div class="icon"><i class="entypo-chart-bar"></i></div>
					<div class="num" data-start="0" data-end="2" data-postfix="" data-duration="1500" data-delay="600">0</div>
		<h3>Tambahkan Data Pemilik</h3>
				</div>
		
			</div>

		
		<div class="col-sm-3 col-xs-6">
		<a 	href="<?php echo site_url('barang/tambah') ?>">
				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-chart-bar"></i></div>
					<div class="num" data-start="0" data-end="3" data-postfix="" data-duration="1500" data-delay="600">0</div>
		<h3>Tambahkan Data Barang</h3>
				</div>
		
			</div>



			
	


		</div>
		

<?php $this->load->view('templates/footer'); ?>

