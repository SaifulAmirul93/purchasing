
<body>

    <div id="wrapper">

        <!-- Navigation -->
     


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Purchase List (Version 1.0)</h1>
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
                 <div class="col-lg-12"> 
                    
                <div class="row">
                
                    <div class="panel panel-default">
                        <div class="panel-heading">

                            <div class="row">

                           <div class="col-md-12">
                                <div class="col-md-2">
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a22'); ?>">                             
                                    <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add Purchase</button>
                                    </a>
                                </div>
                                 <div class="col-md-8">
                                    
                                </div>
                                <div class="col-md-2 ">
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a29'); ?>">                             
                                <button type="button" class="btn btn-primary">New Version 2.0</button>
                                </a>
                                </div>
                            </div>
                                 
                            </div>
                       


                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="tableL">
                                <table class="table table-striped table-bordered table-hover tableL" id="dataTables-example" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Supplier Name</th>
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
                                           <!--  <?= $pur->pro_code; ?> -->
                                                
                                            </td>
                                            <td><?= $pur->pu_date; ?></td>
                                            <td><?= $pur->pu_deli; ?></td>
                                            <td><span class="label" style = "background-color : <?= $pur->pr_color; ?>"><strong><?= $pur->pr_desc; ?></strong></span></td>
                                            <td align="center">
                                            <?php if($pur->pu_pay == 0){ ?>
                                            <a class="uc" id="up<?= $n; ?>">
                                            <img src="<?= base_url(); ?>dist/img/unpaid_tag.png" width="38" height="63">
                                            <input type="hidden" class="form-control up<?= $n; ?>" value="<?= $pur->pu_id; ?>">
                                            </a>
                                            <?php } else if ($pur->pu_pay == 1) { ?>
                                               <a class="uc" id="up<?= $n; ?>">
                                            <img src="<?= base_url(); ?>dist/img/50paid_tag.png" width="38" height="63">
                                            <input type="hidden" class="form-control up<?= $n; ?>" value="<?= $pur->pu_id; ?>">
                                            </a>
                                            
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
                                            <td align="center"></a>
                                           
                                            <a href="<?= site_url('purchase_v1/dashboard/page/c30?view=').$pur->pu_id; ?>" name="c5" title="View Purchase">
                                            <button type="button" class="btn btn-info btn-xs" title="View"><i class="fa fa-eye"></i></button></a>

                                            &nbsp;&nbsp;
                                            
                                            <a href="<?= site_url('purchase_v1/dashboard/page/c29?edit=').$pur->pu_id; ?>" name="c5" title="Edit Purchase">
                                            <button type="button" class="btn btn-warning btn-xs" title="Edit"><i class="fa fa-pencil"></i></button></a>
                                             &nbsp;&nbsp;
                                           <?php $us_lvl = $this->session->userdata('ul_id');?>
                                           <?php if($us_lvl!=3){?>
                                        <?php if($pur->pr_id == 1){?>
                                            
                                            <button type="button" class="negBtn btn btn-info btn-xs" title="Negotiate" style="background-color: #5CFE3F" id="<?= $n.'neg' ?>" name="<?= $n.'neg' ?>">NEGO</button>
                                            <input type="hidden" class="form-control <?= $n.'neg' ?>" name="pur_id" id="pur_id" value="<?= $pur->pu_id ?>">
                                             &nbsp;&nbsp;
                                            <?php }else if($pur->pr_id == 2){?>
                                           

                                            
                                            <button type="button" class="invBtn btn btn-info btn-xs" title="Invoice" style="background-color: #FE9F3F" id="<?= $n.'inv' ?>" name="<?= $n.'inv' ?>">INV</button>
                                            <input type="hidden" class="form-control <?= $n.'inv' ?>" name="pur_id" id="pur_id" value="<?= $pur->pu_id ?>">

                                            &nbsp;&nbsp;
                                            <?php }else if($pur->pr_id == 3){?>
                                            
                                            <button type="button" class="hapBtn btn btn-info btn-xs" title="Happy Hour" style="background-color: #5F9CC1" id="<?= $n.'hap' ?>" name="<?= $n.'hap' ?>">HAPPY</button>
                                            <input type="hidden" class="form-control <?= $n.'hap' ?>" name="pur_id" id="pur_id" value="<?= $pur->pu_id ?>">
                                            &nbsp;&nbsp;
                                            <?php }else if($pur->pr_id == 4){?>
                                            
                                            <button type="button" class="etdBtn btn btn-info btn-xs" title="ETD" style="background-color: #BD5FC1" id="<?= $n.'etd' ?>" name="<?= $n.'etd' ?>">ETD</button>
                                            <input type="hidden" class="form-control <?= $n.'etd' ?>" name="pur_id" id="pur_id" value="<?= $pur->pu_id ?>">
                                            &nbsp;&nbsp;
                                            <?php }else if($pur->pr_id == 5){?>
                                            
                                            <button type="button" class="etaBtn btn btn-info btn-xs" title="ETA" style="background-color: #5FC17E" id="<?= $n.'eta' ?>" name="<?= $n.'eta' ?>">Arrived</button>
                                            <input type="hidden" class="form-control <?= $n.'eta' ?>" name="pur_id" id="pur_id" value="<?= $pur->pu_id ?>">
                                            &nbsp;&nbsp;
                                            <?php } ?>
                                            
                                             <br><br>
                                            <button onclick = "window.open('<?= site_url('purchase_v1/dashboard/page/P01?edit=').$pur->pu_id; ?>');" type="button" class="btn btn-success btn-xs" title="Purchase Order"><i class="fa fa-file-text"></i></button>
                                            &nbsp;&nbsp;
                                            <?php if($pur->pr_id >= 3){?>
                                            <button type="button" class="btn btn-info btn-xs upPic" style="background-color: #AD3089" title="Upload Invoice" id="up<?= $n; ?>"><i class="fa fa-upload"></i></button>
                                            <input type="hidden" class="form-control up<?= $n; ?>" name="pur_id" id="pur_id" value="<?= $pur->pu_id ?>">
                                             &nbsp;&nbsp;
                                             <?php } ?>
                                             <?php } ?>
                                             
                                             
                                             <!-- <a onclick = "return onDel();" href="<?= site_url('purchase_v1/dashboard/page/a15?delete=').$pur->pu_id; ?>" name="c5" title="Delete Purchase"> -->
                                             <!--<button type="button" class="delBtn btn btn-danger btn-xs" title="Delete" id="<?= $n.'del' ?>" name="<?= $n.'del' ?>"><i class="fa fa-close"></i></button>-->
                                             <!--<input type="hidden" class="form-control <?= $n.'del' ?>" name="pur_id" id="pur_id" value="<?= $pur->pu_id ?>">-->
                                             
                                             <button type="button" class="delBtn btn btn-danger btn-xs" title="Delete" id="<?= $n.'del' ?>" name="<?= $n.'del' ?>"><i class="fa fa-close"></i></button>
                                             <input type="hidden" class="form-control <?= $n.'del' ?>" name="pur_id" id="pur_id" value="<?= $pur->pu_id ?>">
                                            </td>
                                        </tr>
                                          <?php
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
                                            <li class="prev <?= $prev; ?>"><a <?php if($prev!="disabled"){ ?>href="<?= site_url('purchase_v1/dashboard/page/a29old?page='.($page-10)); ?>"<?php } ?> title="Prev" ><i class="fa fa-angle-left"></i></a></li>                                            
                                            <li class="next <?= $next; ?>"><a <?php if($next!="disabled"){ ?>href="<?= site_url('purchase_v1/dashboard/page/a29old?page='.($page+10)); ?>"<?php } ?> title="Next"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                </td>
                            </tfoot> <?php 
                            } ?>
                                </table>
                                </div>
                            </div>
                            <!-- /.table-responsive -->
                        <div id="fileUp" style="display:none;">
                    
                </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
         
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



        $(".negBtn").click(function() {

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
                                
                                $.post('<?= site_url('purchase_v1/dashboard/change_pr_id'); ?>', {pur_id: purid,pr_id: 2}, function(data) {
                                    
                                    $(window).attr("location", "<?= site_url('purchase_v1/dashboard/page/a29'); ?>");
                                    
                                });

                            }
                            
                            
                        }
                    });


                });

        // $(".delBtn").click(function() {

        //             id = $(this).prop('id');
        //             purid = $("."+id).val();
                        
        //             bootbox.confirm({
        //                 message: "Are you sure that you want to delete this purchase?",
        //                 buttons: {
        //                     confirm: {
        //                         label: 'Yes',
        //                         className: 'btn-success'
                               
        //                     },
        //                     cancel: {
        //                         label: 'No',
        //                         className: 'btn-danger'
        //                     }
        //                 },
        //                 callback: function (result) {
        //                     if(result == true){
                                
        //                         $.post('<?= site_url('purchase_v1/dashboard/del_purchase'); ?>', {pur_id: purid,pr_id: 7}, function(data) {
                                    
        //                             $(window).attr("location", "<?= site_url('purchase_v1/dashboard/page/a29'); ?>");
                                    
        //                         });

        //                     }
                            
                            
        //                 }
        //             });


        //         });


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

                $(".hapBtn").click(function() {

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
                                
                                $.post('<?= site_url('purchase_v1/dashboard/change_pr_id'); ?>', {pur_id: purid,pr_id: 4}, function(data) {
                                    
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






   

</body>

</html>
