
                <div class="row">
                
                    <div class="panel panel-primary">
                                <div class="panel-heading">
                                    
                                    <div class="row">

                                                <div class="col-md-12">
                                                    <div class="col-md-2">
                                                        <a href="<?= site_url('purchase_v1/dashboard/page/a22.1'); ?>">                             
                                                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add Job Order</button>
                                                        </a>
                                                    </div>
                                                
                                                </div>
                                            
                                    </div>

                                            
                                </div>

                                <div class="panel-body">
                                    <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th style="width: 50px">Supplier Name</th>
                                                                <th>Purchase No</th>
                                                                <th>Request By</th>
                                                                <th>Project Code</th>
                                                                <th>Purchase Date</th>
                                                                <th>Delivery Date</th>
                                                                <th>Status</th>
                                                                <th>Payment</th>
                                                                <th>Invoice</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                    $n = 0; 
                                                        if($arr){
                                                        foreach ($arr as $pur){
                                                            if($pur->pr_id!=7){
                                                            $n++;
                                                            ?>
                                                            <tr>
                                                                <td><?= $n; ?></td>
                                                                <td><b><?= $pur->su_name; ?></b></td>
                                                                <td>
                                                                <?php 
                                                                if ($pur->pu_id) {
                                                                    $id = '#'.(110000+$pur->pu_id);
                                                                    echo '<span style = "color : #3F6AFE;"><p style=" font-size:20px"><strong>'.$id.'</strong></p></span>';
                                                                } else {
                                                                    echo "--Not Set--";
                                                                }
                                                                ?>


                                                                </td>
                                                                <td><b><?= $pur->us_username; ?></b></td>
                                                                <td>
                                                                <?php
                                                                if($pur->pro_id != -1){

                                                                foreach ($lvl as $key) {
                                                                        if($key->pro_id == $pur->pro_id){
                                                                            echo $key->pro_code;
                                                                        }
                                                                    }
                                                                }
                                                                else
                                                                {
                                                                    echo "--Not Set--";
                                                                }
                                                            ?>
                                                            <!--  <?= $pur->project_code; ?> -->
                                                                    
                                                                </td>
                                                                <td><?= $pur->pu_date; ?></td>
                                                                <td><?= $pur->pu_deli; ?></td>
                                                                <td><span class="label" style = "background-color : <?= $pur->pr_color; ?>;font-size:15px"><strong><?= $pur->pr_desc; ?></strong></span></td>
                                                                <td align="center">
                                                                <?php if($pur->pu_pay == 0){ ?>
                                                                <a class="uc" id="up<?= $n; ?>">
                                                                <img src="<?= base_url(); ?>dist/img/unpaid_tag.png" width="38" height="63">
                                                                <input type="hidden" class="form-control up<?= $n; ?>" value="<?= $pur->pu_id; ?>">
                                                                </a>
                                                                <?php } else if ($pur->pu_pay == 1) { ?>
                                                                <div title="Bayaran" id="gmbrn<?= $n ?>" class="bayaran" >
                                                                <img src="<?= base_url(); ?>dist/img/50paid_tag.png" width="38" height="63">
                                                            
                                                                </div>
                                                                <input type="hidden" class="form-control gmbrn<?= $n ?>" value="<?= $pur->pu_id; ?>">
                                                                <?php } else if ($pur->pu_pay == 2) { ?>
                                                                <div title="Bayaran" id="gmbrn<?= $n ?>" class="bayaran" >
                                                                <img src="<?= base_url(); ?>dist/img/paid_tag.png" width="38" height="63">
                                                                </div>
                                                                <input type="hidden" class="form-control gmbrn<?= $n ?>" value="<?= $pur->pu_id; ?>">
                                                                
                                                                <?php     
                                                                } ?>
                                                                </td>
                                                                <td align="center">
                                                                <?php if($pur->pu_inv!=null){ ?>
                                                                <div title="Paid" id="gmbr<?= $n ?>" class="bayar" >
                                                                <img src="<?= base_url(); ?>dist/img/Easy Invoice Mac App Icon.png" width="50" height="50">
                                                                </div>
                                                                <input type="hidden" class="form-control gmbr<?= $n ?>" value="<?= $pur->pu_id; ?>">
                                                                <?php }?>
                                                                </td>
                                                                <td align="center">
                            
                                                                <center>
                                                                <a href="<?= site_url('purchase_v1/dashboard/page/c30?view=').$this->my_func->scpro_encrypt($pur->pu_id); ?>" name="c5" title="View Purchase">
                                                                <button type="button" class="btn btn-info btn-xs" title="View"><i class="fa fa-eye"></i></button></a>

                                                                &nbsp;&nbsp;
                                                                <a href="<?= site_url('purchase_v1/dashboard/page/c29?edit=').$this->my_func->scpro_encrypt($pur->pu_id); ?>" name="c5" title="Edit Purchase">
                                                                <button type="button" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-pencil"></i></button></a>
                                                                &nbsp;&nbsp;

                                                                <button type="button" class="delBtn btn btn-danger btn-xs" title="Delete" id="<?= $n.'del' ?>" name="<?= $n.'del' ?>"><i class="fa fa-close"></i></button>
                                                                <input type="hidden" class="form-control <?= $n.'del' ?>" name="pur_id" id="pur_id" value="<?= $this->my_func->scpro_encrypt($pur->pu_id) ?>">
                                                                </center>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            }
                                                        }
                                                    }
                                                    
                                        
                                                            ?>
                                                            
                                                        
                                                        </tbody>
                                                        <?php if (isset($page)) {?>
                                                <tfoot>
                                                    <td colspan="11">
                                                    <div class="col-md-5 col-sm-5">
                                                        <div class="dataTables_info" id="sample_1_info" role="status" aria-live="polite">Showing <?= ($page+1); ?> to <?= ($page+$row); ?> of <?= $total; ?> records</div>
                                                    </div>
                                                    <div class="col-md-7 col-sm-7" align="right">
                                                        <div class="dataTables_paginate paging_bootstrap_full_number" id="sample_1_paginate">
                                                            <ul class="pagination" style="visibility: visible;">
                                                            <?php
                                                            $prev = "";
                                                            $next = "";
                                                                if ($page == 0) {
                                                                    $prev = "disabled";
                                                                }
                                                                if ($total <= ($page + 10)) {
                                                                    $next = "disabled";
                                                                }
                                                            ?>
                                                                <li class="prev <?= $prev; ?>"><a <?php if($prev!="disabled"){ ?>href="<?= site_url('purchase_v1/dashboard/page/a29?page='.($page-10)); ?>"<?php } ?> title="Prev" ><i class="fa fa-angle-left"></i></a></li>                                            
                                                                <li class="next <?= $next; ?>"><a <?php if($next!="disabled"){ ?>href="<?= site_url('purchase_v1/dashboard/page/a29?page='.($page+10)); ?>"<?php } ?> title="Next"><i class="fa fa-angle-right"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    </td>
                                                </tfoot> <?php 
                                                } ?>
                                                    </table>
                                            </div>
                                </div>
                        <!-- /.panel-heading -->
                     
                            <!-- /.table-responsive -->
                                    <div id="fileUp" style="display:none;">
                                
                                    </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
         
            </div>
                
                


                  
         
         

    
   <script>
    $(document).ready(function() {



        $(".appBtn").click(function() {

                    id = $(this).prop('id');
                    purid = $("."+id).val();
                        
                    bootbox.confirm({
                        message: "Are you sure that you want to proceed?",
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
                                
                                $.post('<?= site_url('purchase_v1/dashboard/app_email'); ?>', {pur_id: purid,pr_id: 2}, function(data) {
                                    
                                    $(window).attr("location", "<?= site_url('purchase_v1/dashboard/page/a29'); ?>");
                                    
                                });

                            }
                            
                            
                        }
                    });


                });

        $(".delBtn").click(function() {

                    id = $(this).prop('id');
                    
                    purid = $("."+id).val();
                       
                    bootbox.confirm({
                        message: "Are you sure that you want to delete this purchase?",
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
                                

                                  // $.post('<?= site_url('purchase_v1/dashboard/del_purchase'); ?>', {del: purid}, function(data) {
                                    
                                  //       $(window).attr("location", "<?= site_url('purchase_v1/dashboard/page/a29'); ?>");
                                    
                                  //       });

                                bootbox.prompt({
                                    title: "Please state the reason!",
                                    inputType: 'textarea',
                                    callback: function (result) {

                                        // alert(result);
                                        if(result!=null)
                                        $.post('<?= site_url('purchase_v1/dashboard/del_email'); ?>', {reason: result,pur_id: purid,cancel: 1}, function(data) {
                                    
                                        $(window).attr("location", "<?= site_url('purchase_v1/dashboard/page/a29'); ?>");
                                    
                                        });
                                    }
                                });
    

                            }
                            
                            
                        }
                    });


                });


         $(".invBtn").click(function() {

                    id = $(this).prop('id');
                    purid = $("."+id).val();
                        
                    bootbox.confirm({
                        message: "Are you sure that you want to proceed?",
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
                                
                                $.post('<?= site_url('purchase_v1/dashboard/change_pr_id'); ?>', {pur_id: purid,pr_id: 3}, function(data) {
                                    
                                    $(window).attr("location", "<?= site_url('purchase_v1/dashboard/page/a29'); ?>");
                                    
                                });

                            }
                            
                            
                        }
                    });


                });

                $(".accBtn").click(function() {

                    id = $(this).prop('id');
                    purid = $("."+id).val();
                        
                    bootbox.confirm({
                        message: "Are you sure that you want to proceed?",
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
                                
                                $.post('<?= site_url('purchase_v1/dashboard/acc_email'); ?>', {pur_id: purid,pr_id: 4}, function(data) {
                                    
                                    $(window).attr("location", "<?= site_url('purchase_v1/dashboard/page/a29'); ?>");
                                    
                                });

                            }
                            
                            
                        }
                    });


                });


                    $(".etdBtn").click(function() {

                    id = $(this).prop('id');
                    purid = $("."+id).val();
                        
                    bootbox.confirm({
                        message: "Are you sure that you want to proceed?",
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
                                
                                $.post('<?= site_url('purchase_v1/dashboard/change_pr_id'); ?>', {pur_id: purid,pr_id: 5}, function(data) {
                                    
                                    $(window).attr("location", "<?= site_url('purchase_v1/dashboard/page/a29'); ?>");
                                    
                                });

                            }
                            
                            
                        }
                    });


                });

                       $(".etaBtn").click(function() {

                    id = $(this).prop('id');
                    purid = $("."+id).val();
                        
                    bootbox.confirm({
                        message: "Are you sure that you want to proceed?",
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
                                
                                $.post('<?= site_url('purchase_v1/dashboard/change_pr_id'); ?>', {pur_id: purid,pr_id: 6}, function(data) {
                                    
                                    $(window).attr("location", "<?= site_url('purchase_v1/dashboard/page/a29'); ?>");
                                    
                                });

                            }
                            
                            
                        }
                    });


                });

$(".upPic").click(function() {
            hid = $(this).prop('id');
            purid = $('.'+hid).val();
            $.post('<?= site_url('purchase_v1/dashboard/getAjaxUpload'); ?>', {pur_id : purid}, function(data) {
                $.when($(".tableL").fadeOut("slow")).then(function(){
                    $.when($("#fileUp").html(data)).then(function(){$("#fileUp").fadeIn("fast");});
                });             
            });
            /*bootbox.alert("Hello world!", function() {
                //console.log("Alert Callback");
            });*/
        }); 


$(".bayar").click(function() {
            gbr = $(this).prop("id");
            purid = $("."+gbr).val();
            $.post('<?= site_url('purchase_v1/dashboard/getAjaxImg'); ?>', {pur_id: purid}, function(data) {
                bootbox.dialog({message : data});
            });         
        });

$(".bayaran").click(function() {
            gbr = $(this).prop("id");
            purid = $("."+gbr).val();
            $.post('<?= site_url('purchase_v1/dashboard/getAjaxImg2'); ?>', {pur_id: purid}, function(data) {
                bootbox.dialog({message : data});
            });         
        });



        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

<script>

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}








    var $container = $('.task-container');
    var $task = $('.todo-task');

$task.draggable({
    addClasses: false,
    connectToSortable: ".task-container",
});

$container.droppable({
    accept: ".todo-task"
});


$(".ui-droppable").sortable({
    placeholder: "ui-state-highlight",
    opacity: .5,
    helper: 'original',
    beforeStop: function (event, ui) {
        newItem = ui.item;
    },
    receive: function (event, ui) {
//get task-type and task id.
            console.log($(this).closest('.task-header').html());
            var tasktype = $(this).closest('.task-type').html();
            var taskid = $(this).closest('.task-no').html();

            dropElement = $(this).closest('.ui-droppable').attr('id');
            // console.log($(this).closest('.ui-droppable').attr('id'));

            //save the status and the order of the item.
            if (dropElement == "backlog")
            {
                // save the status of the item
            }
            else if (dropElement == "pending")
            {
                // save the status of the 
            }
            else if (dropElement == "inProgress")
            {
            }
            else if (dropElement == "completed")
            {
            }
    }
}).disableSelection().droppable({
    over: ".ui-droppable",
    activeClass: 'highlight',
    drop: function (event, ui) {
        $(this).addClass("ui-state-highlight");
    }
});



</script>





