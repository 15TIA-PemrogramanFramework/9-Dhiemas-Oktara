<?php $this->load->view('templates/header');?>
<body class="page-body  page-left-in" >

    <div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

       <?php $this->load->view('templates/navigation');?>

       <div class="main-content">



          <h2>Data Seluruh Barang </h2>
          <br />


          <br>

        
        <table class="table table-bordered datatable" id="table-1">
             <thead>
             

                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Ukuran Barang</th> 
                    
                </tr>
            </thead>
            <tbody>
               <?php foreach ($barang as $key => $value) { ?>
               <tr>
                <td><?php echo $key+1 ?></td>
                <td><?php echo $value->nama_barang; ?></td>
                <td><?php echo $value->jenis_barang; ?></td>
                <td><?php echo $value->ukuran_barang; ?></td>
            
                
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

