
<body>

    <div id="wrapper">

        <!-- Navigation -->
     


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category List</h1>
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

                            <a href="<?= site_url('purchase_v1/dashboard/page/e26'); ?>">                             
                            <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add Category</button>
                            </a>
                       


                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name</th>
                                            
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                     <?php
                                $n = 0; 
                                
                                    foreach ($arr as $cat){
                                        $n++;
                                        ?>
                                        <tr>
                                            <td><?= $n; ?></td>
                                            <td><?= $cat->cat_name; ?> </td>
                                         
                                            </td>
                                            <td>
                                            <!-- <a href="<?= site_url('purchase_v1/dashboard/page/c26?view=').$cat->catt_id; ?>" name="c5" title="View User">
                                            <button type="button" class="btn btn-info btn-xs" title="View"><i class="fa fa-eye"></i></button></a>
                                            &nbsp;&nbsp;&nbsp; -->
                                            <a href="<?= site_url('purchase_v1/dashboard/page/d27?edit=').$cat->catt_id; ?>" name="c5" title="Edit User">
                                            <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button>
                                             &nbsp;&nbsp;&nbsp;
                                             <a onclick = "return onDel();" href="<?= site_url('purchase_v1/dashboard/page/e28?delete=').$cat->catt_id; ?>" name="c5" title="Delete User">
                                             <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-close"></i></button></a>
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

    






   

</body>

</html>
