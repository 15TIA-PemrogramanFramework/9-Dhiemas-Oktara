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
                                <label class="col-sm-3">Nama Pemilik</label>
                                <div class="col-sm-4">
                                    <select class="form-control form-control-line" name="id_penemu">
                                    <?php foreach ($penemu as $key => $value) { ?>
                                        <option value="<?php echo $value->id_penemu; ?>"><?php echo $value->nama_penemu; ?></option>
                                        
                                          <?php } ?>
                                    </select>
                                </div>
                            </div>
			
							<div class="form-group">
                                <label class="col-sm-3">Nama Barang</label>
                                <div class="col-sm-4">
                                    <select class="form-control form-control-line" name="id_barang">
                                    <?php foreach ($barang as $key => $value) { ?>
                                        <option value="<?php echo $value->id_barang; ?>"><?php echo $value->nama_barang; ?></option>
                                        
                                          <?php } ?>
                                    </select>
                                </div>	</div>

                                <div class="form-group">
                                <label class="col-sm-3">Tanggal Barang Diambil</label>
                                <div class="col-sm-4">
                                    <input type="date" placeholder="Masukkan Tanggal" value="<?php echo $tanggal_temu ?>" class="form-control" name="tanggal_temu">
                                        
                                </div>	
                                </div>
                                <div class="form-group">
                                <label class="col-sm-3">Nama Admin</label>
                                <div class="col-sm-4">
                                    <select class="form-control form-control-line" name="id">
                                    <?php foreach ($admin as $key => $value) { ?>
                                        <option value="<?php echo $value->id; ?>"><?php echo $value->nama; ?></option>
                                        
                                          <?php } ?>
                                    </select>
                                </div></div>
                                   <div class="form-group">
								<div class="col-sm-offset-3 col-sm-3">
									<button type="submit" class="btn btn-default">Simpan</button><input type="hidden" name="id_temu" value="<?php echo $id_temu ?>">
								</div>
                                </div>	
							
						</form>
					</div>
				
		

<?php $this->load->view('templates/footer'); ?>

