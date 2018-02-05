
                     <div class="row">
                
                    <div class="panel panel-info">
                        <div class="panel-heading">

                                            
                                                         
                             

                            <a href="<?= site_url('purchase_v1/dashboard/page/t2'); ?>">                             
                            <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add Type</button>
                            </a>
                       


                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Type Name</th>
                                            
                                            <th>Type Color</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                     <?php
                                $n = 0; 
                                if(!empty($arr)){
                                    foreach ($arr as $ty){
                                        $n++;
                                        ?>
                                        <tr>
                                            <td><?= $n; ?></td>
                                            <td><?= $ty->ty_desc; ?> </td>
                                            <td><?= $ty->ty_color; ?> </td>
                                         
                                            </td>
                                            <td>
                                            <a href="<?= site_url('purchase_v1/dashboard/page/t3?view=').$ty->ty_id; ?>" name="c5" title="View Type">
                                            <button type="button" class="btn btn-info btn-xs" title="View"><i class="fa fa-eye"></i></button></a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="<?= site_url('purchase_v1/dashboard/page/t4?edit=').$ty->ty_id; ?>" name="c5" title="Edit Type">
                                            <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button></a>
                                             &nbsp;&nbsp;&nbsp;
                                             
                                            <button type="button" class="delBtn btn btn-danger btn-xs" id="<?= $n.'del' ?>" name="<?= $n.'del' ?>"><i class="fa fa-close"></i></button>
                                            <input type="hidden" class="form-control <?= $n.'del' ?>" value="<?= $ty->ty_id; ?>">

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
                
                
                    <!-- <div id="sprintcontainer"> -->

                  
         
            <!-- /.container-fluid -->

<script>
    $(document).ready(function() {
    
        $(".delBtn").click(function() {

                    id = $(this).prop('id');
                    
                    id2 = $("."+id).val();
                    
                    bootbox.confirm({
                        message: "Are you sure that you want to delete this type?",
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
                                
                                $.post('<?= site_url('purchase_v1/dashboard/del_type'); ?>', {id: id2,del: 1}, function(data) {
                                    
                                    $(window).attr("location", "<?= site_url('purchase_v1/dashboard/page/t1'); ?>");
                                    
                                });

                            }
                            
                            
                        }
                    });


        });

    });
</script>



