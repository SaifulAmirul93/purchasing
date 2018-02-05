

        <div class="row">
                
                    <div class="panel panel-info">
                        <div class="panel-heading">

                                            
                                                         
                           

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
                                if(!empty($arr)){
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
                
                
      
   <script>
    $(document).ready(function() {
    

        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>





   

</body>

</html>
