
<body>

    <div id="wrapper">

        <!-- Navigation -->
     


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Item List</h1>
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

                            <a href="<?= site_url('purchase_v1/dashboard/page/a26'); ?>">                             
                            <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add Item</button>
                            </a>
                       


                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example"  width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Item Code</th>
                                            <th>Item Name</th>
                                            <th>Category</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                     <?php
                                $n = 0; 
                                
                                    foreach ($arr as $item){
                                        $n++;
                                        ?>
                                        <tr>
                                            <td><?= $n; ?></td>

                                            <td>
                                            <?php if($item->sku_code!=null){?>
                                            <?= $item->sku_code; ?>-<?= $item->sku_no; ?>
                                             <?php }?>   
                                            </td>
                                            <td><?= $item->item_name; ?> </td>
                                            <td><?= $item->cat_name; ?>
                                            </td>
                                            <td>
                                           <center>
                                            <a href="<?= site_url('purchase_v1/dashboard/page/c26?view=').$item->item_id; ?>" name="c5" title="View User">
                                            <button type="button" class="btn btn-info btn-xs" title="View"><i class="fa fa-eye"></i></button></a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="<?= site_url('purchase_v1/dashboard/page/c27?edit=').$item->item_id; ?>" name="c5" title="Edit User">
                                            <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button></a>
                                             &nbsp;&nbsp;&nbsp;
                                             <a onclick = "return onDel();" href="<?= site_url('purchase_v1/dashboard/page/c28?delete=').$item->item_id; ?>" name="c5" title="Delete User">
                                             <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-close"></i></button></a>
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
    });
    </script>





   

</body>

</html>
