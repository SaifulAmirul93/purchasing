                  
                     <div class="row">
                
                    <div class="panel panel-info">
                        <div class="panel-heading">


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
