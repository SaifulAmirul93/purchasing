
<body>

    <div id="wrapper">

        <!-- Navigation -->
     


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Your Job Order </h1>
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
                                    <a href="<?= site_url('purchase_v1/dashboard/page/a22.1'); ?>">                             
                                    <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add Job Order</button>
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
                                            <td><b><?= $pur->supplier_name; ?></b></td>
                                            <td>
                                            <?php 
                                            if ($pur->pur_id) {
                                                $id = '#'.(110000+$pur->pur_id);
                                                echo '<span style = "color : #3F6AFE;"><p style=" font-size:20px"><strong>'.$id.'</strong></p></span>';
                                            } else {
                                                echo "--Not Set--";
                                            }
                                            ?>


                                            </td>
                                            <td><b><?= $pur->us_username; ?></b></td>
                                            <td>
                                              <?php
                                              if($pur->prjk_id != -1){

                                               foreach ($lvl as $key) {
                                                    if($key->projek_id == $pur->prjk_id){
                                                        echo $key->project_code;
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
                                            <td><?= $pur->pur_date; ?></td>
                                            <td><?= $pur->deli_date; ?></td>
                                            <td><span class="label" style = "background-color : <?= $pur->pro_color; ?>;font-size:15px"><strong><?= $pur->pro_desc; ?></strong></span></td>
                                            <td align="center">
                                            <?php if($pur->pay == 0){ ?>
                                            <a class="uc" id="up<?= $n; ?>">
                                            <img src="<?= base_url(); ?>dist/img/unpaid_tag.png" width="38" height="63">
                                            <input type="hidden" class="form-control up<?= $n; ?>" value="<?= $pur->pur_id; ?>">
                                            </a>
                                            <?php } else if ($pur->pay == 1) { ?>
                                               <div title="Bayaran" id="gmbrn<?= $n ?>" class="bayaran" >
                                            <img src="<?= base_url(); ?>dist/img/50paid_tag.png" width="38" height="63">
                                        
                                            </div>
                                            <input type="hidden" class="form-control gmbrn<?= $n ?>" value="<?= $pur->pur_id; ?>">
                                            <?php } else if ($pur->pay == 2) { ?>
                                               <div title="Bayaran" id="gmbrn<?= $n ?>" class="bayaran" >
                                            <img src="<?= base_url(); ?>dist/img/paid_tag.png" width="38" height="63">
                                            </div>
                                            <input type="hidden" class="form-control gmbrn<?= $n ?>" value="<?= $pur->pur_id; ?>">
                                            
                                            <?php     
                                            } ?>
                                            </td>
                                            <td align="center">
                                            <?php if($pur->pr_inv!=null){ ?>
                                            <div title="Paid" id="gmbr<?= $n ?>" class="bayar" >
                                            <img src="<?= base_url(); ?>dist/img/Easy Invoice Mac App Icon.png" width="50" height="50">
                                            </div>
                                            <input type="hidden" class="form-control gmbr<?= $n ?>" value="<?= $pur->pur_id; ?>">
                                            <?php }?>
                                            </td>
                                            <td align="center">
                                           
                                    
                                            <br>
                                            <center>
                                             <a href="<?= site_url('purchase_v1/dashboard/page/c30?view=').$this->my_func->scpro_encrypt($pur->pur_id); ?>" name="c5" title="View Purchase">
                                            <button type="button" class="btn btn-info btn-xs" title="View"><i class="fa fa-eye"></i></button></a>

                                             </center>
                                            </td>
                                        </tr>
                                          <?php
                                           }
                                       }
                                   }
                                
                    
                                        ?>
                                        
                                      
                                    </tbody>
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






   

</body>

</html>
