
<body>

    <div id="wrapper">

        <!-- Navigation -->
     


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Unit List</h1>
                    </div>
                 </div>


                 <div class="row">                   
                        <div class="col-md-12">
                    <?php if($this->session->flashdata('success')){ ?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                <strong><i class="fa fa-check"></i>  Success!</strong> <?= $this->session->flashdata('success'); ?>
                            </div>
                    <?php } if($this->session->flashdata('warning')){
                    ?>
                            <div class="alert alert-warning alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                <strong><i class="fa fa-exclamation-triangle"></i> Warning!</strong> <?= $this->session->flashdata('warning'); ?>
                            </div>
                    <?php } if($this->session->flashdata('info')){ ?>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                <strong><i class="fa fa-info-circle"></i> Info!</strong> <?= $this->session->flashdata('info'); ?>
                            </div>
                    <?php } if($this->session->flashdata('error')){ ?>
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                <strong><i class="fa fa-times-circle-o"></i> Error!</strong> <?= $this->session->flashdata('error'); ?> 
                            </div>
                    <?php } ?>
                        </div>
                    </div>


                    <!-- /.col-lg-12 -->
                  
                     <div class="row">
                
                    <div class="panel panel-default">
                        <div class="panel-heading">

                                            
                                                         
                             <div class=" col-md-3 pull-right">  
                                <div class="form-group input-group">
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                </div>
                            </div>

                            <a href="<?= site_url('purchase_v1/dashboard/page/u1'); ?>">                             
                            <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add Unit</button>
                            </a>
                       


                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example"  width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Unit Quantity</th>
                                            
                                          
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                     <?php
                                $n = 0; 
                                
                                    foreach ($arr as $unit){
                                        $n++;
                                        ?>
                                        <tr>
                                            <td><?= $n; ?></td>

                                            <td>
                                            <?= $unit->un_desc; ?>
                                            </td>
                                            
                                           
                                            <td>
                                           <center>
                                            <a href="<?= site_url('purchase_v1/dashboard/page/u4?view=').$unit->un_id; ?>" name="c5" title="View User">
                                            <button type="button" class="btn btn-info btn-xs" title="View"><i class="fa fa-eye"></i></button></a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="<?= site_url('purchase_v1/dashboard/page/u3?edit=').$unit->un_id; ?>" name="c5" title="Edit User">
                                            <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button></a>
                                             &nbsp;&nbsp;&nbsp;
                                             <button type="button" class="delBtn btn btn-danger btn-xs" title="Delete"  id="<?= $n.'del' ?>" name="<?= $n.'del' ?>"><i class="fa fa-close"></i></button>
                                             <input type="hidden" class="form-control <?= $n.'del' ?>" name="item_id" id="item_id" value="<?= $unit->un_id; ?>">
                                           </center>
                                            </td>
                                        </tr>
                                          <?php
                                           }
                                
                    
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                
         
            </div>
                
                
                    <!-- <div id="sprintcontainer"> -->

                  
         
            <!-- /.container-fluid -->
         </div>
        <!-- /#page-wrapper -->

    </div>
    </div>
    <!-- /#wrapper -->
   <script>
    $(document).ready(function() {
    

        $('#dataTables-example').DataTable({
            responsive: true
        });

        $(".delBtn").click(function() {

                    id = $(this).prop('id');
                    
                    unit = $("."+id).val();
                    
                    bootbox.confirm({
                        message: "Are you sure that you want to delete this quantity unit?",
                        buttons: {
                            confirm: {
                                label: 'Yes',
                                className: 'btn-success'
                               
                            },
                            cancel: {
                                label: 'No',
                                className: 'btn-danger'
                            }
                        },
                        callback: function (result) {
                     if(result == true){
                                
                                $.post('<?= site_url('purchase_v1/dashboard/del_unit'); ?>', {un: unit,del: 1}, function(data) {
                                    
                                    $(window).attr("location", "<?= site_url('purchase_v1/dashboard/page/u2'); ?>");
                                    
                                });

                            }
                            
                            
                        }
                    });


                });


    });
    </script>





   

</body>

</html>
