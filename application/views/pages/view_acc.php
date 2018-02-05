
                 <div class="col-lg-12"> 
                    
                <div class="row">
                
                    <div class="panel panel-green">
                        <div class="panel-heading">

                                            
                                                         
                           
                        <div class="row">

                           <div class="col-md-12">
                                
                                 <div class="col-md-10">
                                    
                                </div>
                                <div class="col-md-2 ">
                                    <a href="<?= site_url('purchase_v1/dashboard/page/acc1Old'); ?>">                             
                                <button type="button" class="btn btn-info">Old Version 1.0</button>
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
                                        $n++;
                                        ?>
                                        <tr>
                                            <td><?= $n; ?></td>
                                            <td><?= $pur->su_name; ?> </td>
                                            <td>
                                            <?php 
                                            if ($pur->pu_id) {
                                                $id = '#'.(110000+$pur->pu_id);
                                                echo '<span style = "color : #3F6AFE;"><p style=" font-size:20px"><strong>'.$id.'</strong></span></p>';
                                            } else {
                                                echo "--Not Set--";
                                            }
                                            ?>


                                            </td>
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
                                            <td><span class="label" style = "background-color : <?= $pur->pr_color;?>;;font-size:15px"><strong><?= $pur->pr_desc; ?></strong></span></td>
                                            <td align="center">
                                            <?php if($pur->pu_pay == 0){ ?>
                                            <a class="uc" id="up<?= $n; ?>">
                                            <img src="<?=  base_url(); ?>dist/img/unpaid_tag.png" width="38" height="63">
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
                                            <td align="center"></a>
                                            <!-- <a href="<?= site_url('purchase_v1/dashboard/page/c29?edit=').$pur->pu_id; ?>" name="c5" title="Edit Purchase">
                                            <button type="button" class="btn btn-success btn-xs" title="View"><i class="fa fa-print"></i></button></a>
                                            &nbsp;&nbsp;&nbsp; -->
                                           
                                            <a href="<?= site_url('purchase_v1/dashboard/page/c30?view=').$pur->pu_id; ?>" name="c5" title="View Purchase">
                                            <button type="button" class="btn btn-info btn-xs" title="View"><i class="fa fa-eye"></i></button></a>

                                            &nbsp;&nbsp;
                                           
                                        <!-- <?php if($pur->pr_id == 1){?> -->
                                            
                
                                            <!--  <?php } ?> -->
                                          
                                             <?php if ($pur->pu_pay == 0) { ?>
                                             <button type="button" class="btn50 btn btn-xs" title="50% Payment" style="background-color: #FE9F3F;color: #FFFFFF" id="<?= $n.'btn' ?>" name="<?= $n.'btn' ?>">50 %</button>
                                             <input type="hidden" class="form-control <?= $n.'btn' ?>" name="pur_id" id="pur_id" value="<?= $pur->pu_id ?>">
                                            &nbsp;&nbsp;
                                            <button onclick = "" type="button" class="btn100 btn btn-xs" title="100% Payment" style="background-color: #2BC22D;color: #FFFFFF" id="<?= $n.'btn1' ?>" name="<?= $n.'btn1' ?>">100 %</button>
                                             <input type="hidden" class="form-control <?= $n.'btn1' ?>" name="pur_id" id="pur_id" value="<?= $pur->pu_id ?>">
                                            &nbsp;&nbsp;
                                            <?php } else if ($pur->pu_pay == 1) {  ?>
                                            <button type="button" class="btn btn-info btn-xs upPic" style="background-color: #2B74C2" title="Upload Payment" id="up<?= $n; ?>"><i class="fa fa-upload"></i></button>
                                            <input type="hidden" class="form-control up<?= $n; ?>" name="pur_id" id="pur_id" value="<?= $pur->pu_id ?>">
                                            &nbsp;&nbsp;
                                             <button onclick = "" type="button" class="btn100 btn btn-xs" title="100% Payment" style="background-color: #2BC22D;color: #FFFFFF" id="<?= $n.'btn1' ?>" name="<?= $n.'btn1' ?>">100 %</button>
                                             <input type="hidden" class="form-control <?= $n.'btn1' ?>" name="pur_id" id="pur_id" value="<?= $pur->pu_id ?>">
                                            &nbsp;&nbsp;
                                            <?php } else if ($pur->pu_pay == 2) { ?>
                                            <button type="button" class="btn btn-info btn-xs upPic" style="background-color: #2B74C2" title="Upload Payment" id="up<?= $n; ?>"><i class="fa fa-upload"></i></button>

                                            <input type="hidden" class="form-control up<?= $n; ?>" name="pur_id" id="pur_id" value="<?= $pur->pu_id ?>">
                                             &nbsp;&nbsp;
                                            <?php } ?>
                                            <button onclick = "window.open('<?= site_url('purchase_v1/dashboard/page/P01?edit=').$pur->pu_id; ?>');" type="button" class="btn btn-success btn-xs" title="Purchase Order"><i class="fa fa-file-text"></i></button>
                                            &nbsp;&nbsp;
                                           <!--  <?php if($pur->pr_id >= 3){?>
                                            <button type="button" class="btn btn-info btn-xs upPic" style="background-color: #AD3089" title="Upload Invoice" id="up<?= $n; ?>"><i class="fa fa-upload"></i></button>
                                            <input type="hidden" class="form-control up<?= $n; ?>" name="pur_id" id="pur_id" value="<?= $pur->pur_id ?>">
                                             &nbsp;&nbsp;
                                             <?php } ?> -->
                                             
                                            <!--  <a onclick = "return onDel();" href="<?= site_url('purchase_v1/dashboard/page/a15?delete=').$pur->pur_id; ?>" name="c5" title="Delete Purchase">
                                             <button type="button" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-close"></i></button></a> -->
                                            </td>
                                        </tr>
                                          <?php
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



        $(".btn50").click(function() {

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
                                
                                $.post('<?= site_url('purchase_v1/dashboard/change_pay'); ?>', {pur_id: purid,pay: 1}, function(data) {
                                    
                                    $(window).attr("location", "<?= site_url('purchase_v1/dashboard/page/acc1'); ?>");
                                    
                                });

                            }
                            
                            
                        }
                    });


                });


         $(".btn100").click(function() {

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
                                
                                $.post('<?= site_url('purchase_v1/dashboard/change_pay'); ?>', {pur_id: purid,pay: 2}, function(data) {
                                    
                                    $(window).attr("location", "<?= site_url('purchase_v1/dashboard/page/acc1'); ?>");
                                    
                                });

                            }
                            
                            
                        }
                    });


                });


$(".upPic").click(function() {
            hid = $(this).prop('id');
            purid = $('.'+hid).val();
            alert(purid);
            $.post('<?= site_url('purchase_v1/dashboard/getAjaxUpload2'); ?>', {pur_id : purid}, function(data) {
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







   

</body>

</html>
