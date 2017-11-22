<?php $this->load->view('templates/header');?>
<body class="page-body  page-left-in" >

    <div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

       <?php $this->load->view('templates/navigation');?>

       <div class="main-content">



          <h2>Data Tables</h2>
          <br /><br />

    

                    <a  href="<?php echo site_url('admin/tambah/') ?>" class="btn btn-default btn-sm btn-icon icon-left"> 
                        <i class="entypo-pencil"></i>
                        Tambah Data Security
                    </a>
                    <br>


          <br>

        
        <table class="table table-bordered datatable" id="table-1">
             <thead>
             

                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Pangkat</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <?php
                    $pangkat = $this->session->userdata('pangkat');
                    if($pangkat == 'Kepala Keamanan') { ?>
                    <th>Aksi</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
               <?php foreach ($admin as $key => $value) { ?>
               <tr>
                <td><?php echo $key+1 ?></td>
                <td><?php echo $value->nama; ?></td>
                <td><?php echo $value->username; ?></td>
                <td><?php echo $value->pangkat; ?></td>
                <td><?php echo $value->alamat; ?></td>
                <td><?php echo $value->no_hp; ?></td>
                <?php
                if($pangkat == 'Kepala Keamanan') { ?>
                <td>

                    <a href="<?php echo site_url('admin/edit/'.$value->id) ?>" class="btn btn-default btn-sm btn-icon icon-left">
                        <i class="entypo-pencil"></i>
                        Edit
                    </a>
&nbsp;
                    <a href="<?php echo site_url('admin/delete/'.$value->id) ?>" class="btn btn-danger btn-sm btn-icon icon-left">
                            <i class="entypo-cancel"></i>
                        Delete
                    </a>
                </td>
                <?php } ?>
            </tr>

            <?php }
            ?>
        </tbody>

    </table>
    <script type="text/javascript">
        var responsiveHelper;
        var breakpointDefinition = {
            tablet: 1024,
            phone : 480
        };
        var tableContainer;
        
            jQuery(document).ready(function($)
            {
                tableContainer = $("#table-1");
                
                tableContainer.dataTable({
                    "sPaginationType": "bootstrap",
                    "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    "bStateSave": true,
                    
        
                    // Responsive Settings
                    bAutoWidth     : false,
                    fnPreDrawCallback: function () {
                        // Initialize the responsive datatables helper once.
                        if (!responsiveHelper) {
                            responsiveHelper = new ResponsiveDatatablesHelper(tableContainer, breakpointDefinition);
                        }
                    },
                    fnRowCallback  : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                        responsiveHelper.createExpandIcon(nRow);
                    },
                    fnDrawCallback : function (oSettings) {
                        responsiveHelper.respond();
                    }
                });
                
                $(".dataTables_wrapper select").select2({
                    minimumResultsForSearch: -1
                });
            });
        </script>



    <?php $this->load->view('templates/footer'); ?>

