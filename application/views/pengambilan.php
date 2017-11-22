<?php $this->load->view('templates/header');?>
<body class="page-body  page-left-in" >

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<?php $this->load->view('templates/navigation');?>

	<div class="main-content">
				
		<h2>Data Pengambilan</h2>

		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr>
                <th>No</th>
                <th>Nama Pemilik</th>
                <th>Nama Barang</th>
                <th>Tanggal Barang Diambil</th>
                <th>Nama Admin</th>
            </tr>
			</thead>
			<tbody>
        	<?php foreach ($Pengambilan as $key => $value) { ?>
            <tr>
                <td><?php echo $key+1 ?></td>
                <td><?php echo $value->nama_pemilik; ?></td>
                <td><?php echo $value->nama_barang; ?></td>
                <td><?php echo $value->tanggal_ambil; ?></td>
                <td><?php echo $value->nama; ?></td>
                <td>

                <a href="<?php echo site_url('pengambilan/delete/'.$value->id_temu) ?>" class="btn btn-danger btn-sm btn-icon icon-left">
                            <i class="entypo-cancel"></i>
                        Delete
                    </a>
</td>
            </tr>

        <?php }
        ?>
        </tbody>
			
		</table>
		

<?php $this->load->view('templates/footer'); ?>

