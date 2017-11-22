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
								<label for="field-1" class="col-sm-3 control-label">Nama Penemu</label>
								
								<div class="col-sm-5">
									<input type="text" placeholder="Masukkan Nama Penemu" value="<?php echo $nama_penemu ?>" class="form-control" name="nama_penemu">
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Jenis Kelamin</label>
								
								<div class="col-sm-5">
									<select class="form-control form-control-line" name="jenis_kelamin">
									<option value="Laki-Laki">Laki-Laki</option>
									<option value="Perempuan">Perempuan</option>
                                    </select>
								</div>
							</div>

							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Alamat</label>
								
								<div class="col-sm-5">
									<input type="text" placeholder="Masukkan Alamat" value="<?php echo $alamat ?>" class="form-control" name="alamat">
								</div>
							</div>


							<div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">No HP</label>
								
								<div class="col-sm-5">
									<input type="text" placeholder="Masukkan No HP" value="<?php echo $no_hp ?>" class="form-control" name="no_hp">
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
									<button type="submit" class="btn btn-default">Simpan</button><input type="hidden" name="id" value="<?php echo $id_penemu ?>">
								</div>
							</div>
								
								<input type="hidden" name="id_penemu" value="<?php echo $id_penemu ?>">
							
						</form>
					</div>
				
		

<?php $this->load->view('templates/footer'); ?>

