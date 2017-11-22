<?php $this->load->view('templates/header');?>
<body class="page-body  page-left-in" >

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<?php $this->load->view('templates/navigation');?>

	<div class="main-content">
				
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Form 
						</div>
						
						
					</div>
					
					<div class="panel-body">
						
						<form role="form" class="form-horizontal form-groups-bordered" action="<?php echo $action; ?>" method="POST">
			
							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Nama Barang</label>
								
								<div class="col-sm-5">
									<input type="text" placeholder="Masukkan Nama Barang" value="<?php echo $nama_barang ?>" class="form-control" name="nama_barang">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Jenis Barang</label>
								
								<div class="col-sm-5">
									<input type="text" placeholder="Masukkan Jenis Barang" value="<?php echo $jenis_barang ?>" class="form-control" name="jenis_barang">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Ukuran Barang</label>
								<div class="col-sm-5">
									<select class="form-control form-control-line" name="ukuran_barang">
									<option value="Kecil">Kecil</option>
									<option value="Sedang">Sedang</option>
									<option value="Besar">Besar</option>
                                    </select>
								</div>
							</div>


							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-default">Simpan</button><input type="hidden" name="id" value="<?php echo $id_barang ?>">
								</div>
							</div>
								
								<input type="hidden" name="id_barang" value="<?php echo $id_barang ?>">
							
						</form>
					</div>
				
		

<?php $this->load->view('templates/footer'); ?>

