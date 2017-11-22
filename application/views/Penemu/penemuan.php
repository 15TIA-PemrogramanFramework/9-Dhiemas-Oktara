<?php $this->load->view('templates/header');?>
<body class="page-body  page-left-in" >

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<?php $this->load->view('templates/navigation');?>

	<div class="main-content">
				
		<h2>Data Tables</h2>

		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr>
                <th>No</th>
                <th>Nama Penemu</th>
                <th>Nama Barang</th>
                <th>Tanggal Barang Ditemukan</th>
                <th>Nama Admin</th>
                <th>Aksi</th>
            </tr>
			</thead>
			<tbody>
        	<?php foreach ($penemuan as $key => $value) { ?>
            <tr>
                <td><?php echo $key+1 ?></td>
                <td><?php echo $value->nama_penemu; ?></td>
                <td><?php echo $value->nama_barang; ?></td>
                <td><?php echo $value->tanggal_temu; ?></td>
                <td><?php echo $value->nama; ?></td>
                <td>
                
                <?php  echo anchor(site_url('handphone/edit/'.$value->id_temu), '<i class="fa fa-pencil"></i>',
                    'class="btn btn-warning"');?>
                <?php  echo anchor(site_url('handphone/delete/'.$value->id_temu), '<i class="fa fa-trash"></i> ',
                    'class="btn btn-danger"');?>
</td>
            </tr>

        <?php }
        ?>
        </tbody>
			
		</table>
		

<?php $this->load->view('templates/footer'); ?>

