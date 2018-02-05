                  <div class="row">
                
                    <div class="panel panel-info">
                        <div class="panel-heading">

                                            
                                                         
                        

                            <a href="<?= site_url('purchase_v1/dashboard/page/d1'); ?>">                             
                            <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add Project</button>
                            </a>
                       


                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example"  width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Project Code</th>
                                            <th>Project Name</th>
                                            <th>Department</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                     <?php
                                $n = 0; 
                                
                                    foreach ($arr as $pj){
                                        $n++;
                                        ?>
                                        <tr>
                                            <td><?= $n; ?></td>

                                            <td>
                                            <?= $pj->pro_code; ?>
                                            </td>
                                            <td><?= $pj->pro_name; ?> </td>
                                            <td><?= $pj->dp_name; ?>
                                            </td>
                                            <td>
                                           <center>
                                            <a href="<?= site_url('purchase_v1/dashboard/page/d4?view=').$pj->pro_id; ?>" name="c5" title="View User">
                                            <button type="button" class="btn btn-info btn-xs" title="View"><i class="fa fa-eye"></i></button></a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="<?= site_url('purchase_v1/dashboard/page/d3?edit=').$pj->pro_id; ?>" name="c5" title="Edit User">
                                            <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button></a>
                                             &nbsp;&nbsp;&nbsp;
                                             <button type="button" class="delBtn btn btn-danger btn-xs" title="Delete"  id="<?= $n.'del' ?>" name="<?= $n.'del' ?>"><i class="fa fa-close"></i></button>
                                             <input type="hidden" class="form-control <?= $n.'del' ?>" name="item_id" id="item_id" value="<?= $pj->pro_id; ?>">
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
                
   <script>
    $(document).ready(function() {
    

        $('#dataTables-example').DataTable({
            responsive: true
        });

        $(".delBtn").click(function() {

                    id = $(this).prop('id');
                    
                    project = $("."+id).val();
                    
                    bootbox.confirm({
                        message: "Are you sure that you want to delete this project?",
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
                                
                                $.post('<?= site_url('purchase_v1/dashboard/del_item'); ?>', {pj: project,del: 1}, function(data) {
                                    
                                    $(window).attr("location", "<?= site_url('purchase_v1/dashboard/page/d2'); ?>");
                                    
                                });

                            }
                            
                            
                        }
                    });


        });


    });
    </script>





   

</body>

</html>
