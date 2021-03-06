


<body>

    <div id="wrapper">

        <!-- Navigation -->
     


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit Purchase</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                  
                       <form role="form" action="<?= site_url('purchase_v1/dashboard/page/z121?key=').$arr['purchase']->pur_id; ?>" method="post">
                       <input type="hidden" name="pr_id" id="pr_id" class="form-control" value="<?= $arr['purchase']->pr_id; ?>">
                                        
                                        <div class="row">
                                            <div class=" col-md-4">
                                                <h3 class="page-header">Supplier Info</h3>
                                            </div>
                                        </div>
                                        <div class="row"  id="supplierInfo">

                                         <div class=" col-md-4">
                                         <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="supplier_name" id="supplier_name" disabled="" value="<?= $arr['purchase']->supplier_name; ?>">
                                            
                                        </div>
                                        </div>
                                           <div class=" col-md-4">
                                         <div class="form-group">
                                            <label>Company</label>
                                            <input class="form-control"  name="supplier_company" id="supplier_company" disabled="" value="<?= $arr['purchase']->supplier_company; ?>">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        </div>
                                        <div class=" col-md-4">
                                          <div class="form-group">
                                          <label>Delivery Date</label>
                                                 <input class="form-control" id="deli_date" name="deli_date" value="<?= $arr['purchase']->deli_date; ?>">
                                            </div>
                                        </div>

                                         <div class=" col-md-4">
                                         <div class="form-group">
                                            <label>Contact Number</label>
                                            <input class="form-control" name="supplier_contact" id="supplier_contact" disabled="" value="<?= $arr['purchase']->supplier_contact; ?>">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        </div>

                                         <div class=" col-md-4">
                                         <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="supplier_email" id="supplier_email" disabled="" value="<?= $arr['purchase']->supplier_email; ?>">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        </div>

                                             <div class=" col-md-4">
                                         <div class="form-group">
                                            <label>Purchase Date</label>
                                            <input class="form-control" name="pur_date" id="pur_date" disabled="" value="<?= $arr['purchase']->pur_date; ?>">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        </div>

                                         <div class=" col-md-8">
                                         <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control"  name="supplier_address" id="supplier_address" disabled=""> <?= $arr['purchase']->supplier_address; ?></textarea> 
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        </div>

                                        <div class=" col-md-4">
                                         <div class="form-group">
                                            <label>Currency</label>
                                            <select class="form-control" name="currency" id="currency">
                                            <option value="0">--Select Currency--</option>
                                            <option value="1" <?php if($arr['purchase']->currency == 1){echo "selected";} ?>>MYR</option>
                                            <option value="2" <?php if($arr['purchase']->currency == 2){echo "selected";} ?>>USD</option>
                                            </select>
                                            
                                        </div>
                                        </div>

                                        </div>
                                        <div class="row">
                                        <div class=" col-md-4 pull-right">
                                         <div class="form-group">
                                            <label>Quantity Unit</label>
                                            <select class="form-control" name="unit" id="unit">
                                            <option value="0">--Select Unit--</option>
                                            <?php foreach ($unit as $key) {
                                                                            ?>
                                                                            <option value="<?= $key->un_id; ?>" <?php if($key->un_id == $arr['purchase']->unit){echo " selected ";} ?>> <?= $key->un_desc; ?>
                                                                                
                                                                            </option>
                                                                            <?php
                                                                        } ?>
                                            </select>
                                            
                                        </div>
                                        </div>
                                    </div>

                                     <div class="row">
                                        <div class=" col-md-4 pull-right">
                                                 <div class="form-group">
                                                    <label>GST :</label>
                                                    <input type="radio" name="gst" value="1" required="" <?php if($arr['purchase']->gst == 1){echo "checked";} ?>>
                                                    <label>Yes</label>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <input type="radio" name="gst" value="0" <?php if($arr['purchase']->gst == 0){echo "checked";} ?>>
                                                    <label>No</label>
                                                </div>
                                        </div>
                                    </div>
                                        <div class="row">

                                        <div class="col-lg-12">
                                            <div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                     Purchase Note
                                                    </div>

                                            <div class="panel-body">

                                             <div class="table-responsive">
                                                                    <table class="table table-striped table-bordered table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                
                                                                                <th>Item Detail</th>
                                                                                <th>Quantity</th>
                                                                                <th>Unit Price</th>
                                                                                <!-- <th>GST</th> -->
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="purchaseList">
                                                                            <?php 
                                                                    if (!isset($arr)) {
                                                                        ?>
                                                                            <tr>
                                                                                <td colspan="6" align="center">-- No Data--</td>
                                                                            </tr>
                                                                        <?php
                                                                    } else {
                                                                        foreach ($arr['item'] as $key) {
                                                                            ?>
                                                                            <tr id="delBtn_<?= $key->pi_id;?>">
                                                                              <td style="width: 500px;"><?= $key->item_name; ?>
                                                                                <br/>
                                                                                <span style="color: black; font-size: 75%;" ><strong><?= $key->cat_name; ?></strong></span></td>
                                                                                                                           
                                                                                <td><input type="number" name="qty1[]" id="inputPrice" min="0" step="any" class="quantity form-control" value="<?= $key->pi_qty; ?>" required="required"></td>
                                                                                <td><input type="text" name="price1[]" id="inputQty" min="0" class="price form-control" required="required" value="<?= $key->pi_price; ?>"></td>
                                                                                
                                                                                <td><span><button type="button" class="btn btn-danger btn-xs delBtn" id="<?= $key->pi_id;?>"><i class="fa fa-trash" ></i></button></span>
                                                                               
                                                                                <input type="hidden" name="idE[]" id="inputIdE" class="form-control" value="<?= $key->pi_id;?>">
                                                                                </td>
                                                                                </tr>
                                                                            <?php
                                                                        }
                                                                    }                                                                   
                                                                ?>  

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                                <label class="col-sm-2">Category :</label>
                                                                <div class="col-sm-4">
                                                                <select class="form-control" id="cat_id" name="cat_id">
                                                                <option value="-1">-- Select Category --</option>
                                                                    <?php foreach ($cat as $key) {
                                                                ?>
                                                                <option value="<?= $key->catt_id; ?>" > <?= $key->cat_name; ?></option>
                                                                <?php
                                                            } ?>
                                                                </select>
                
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="form-group" id="divItem">
                                                                 <label class="col-sm-2">Item :</label>
                                                                  <div class=" col-sm-4">
                                                                <select class="form-control" disabled="" id="itemType">
                                                                    <option value="-1">-- Select Type --</option>
                                                                  </select>
                                                                </div>
                                                        </div>
                                                        <div class="clearfix">
                                                                            &nbsp;
                                                                            </div>
                                                                            <div class="clearfix">
                                                                            &nbsp;
                                                                            </div>
                                                                            <span class="pull-right"><span class="pull-left" id="loadingCat" style="display: none;"><i class="fa fa-spinner fa-spin"></i>&nbsp;Be Pat</span><span class="pull-left" id="loadingItem" style="display: none;"><i class="fa fa-spinner fa-spin"></i>&nbsp;Wait</span></span>



                                                    </div>
                                                        
                                                
                                                  
                                                </div>

                                                <br>
                                                <button type="button" class="btn btn-primary" disabled="true" id="addBtn"><i class="fa fa-plus"></i>Add Item</button>
                                            </div>
                                            <!-- <div class="panel-footer">
                                                Panel Footer
                                            </div> -->
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                     Payment Note
                                                    </div>

                                                    <div class="panel-body">
                                                    <div class="row">
                                                    <div class="form-group">
                                                    <label class="col-sm-2">Payment Status :</label>
                                                        <div class="mt-radio-inline">
                                                        <label class="mt-radio">
                                                            <input type="radio" name="pay" value="0" <?php if($arr['purchase']->pay == 0){echo "checked";} ?>>
                                                                <strong>Unpaid</strong>
                                                            <span></span>
                                                        </label>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label class="mt-radio">
                                                            <input type="radio" name="pay" value="1" <?php if($arr['purchase']->pay == 1){echo "checked";} ?>>
                                                                <strong>50% Payment</strong>
                                                            <span></span>
                                                        </label>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label class="mt-radio">
                                                            <input type="radio" name="pay" value="2" <?php if($arr['purchase']->pay == 2){echo "checked";} ?>>
                                                                <strong>Full Payment</strong>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    </div>
                                                    </div>

                                                   

                                                 


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="clear" style="height: 20px;"></div>
                                        <button type="submit" class="btn btn-success">Update</button>
                                        <a href="<?= site_url('purchase_v1/dashboard/page/a29'); ?>" name="c5">  
                                        <button type="button" class="btn btn-danger">Back</button> 
                                        </a>
                                        <div class="clear" style="height: 20px;"></div>                   
                    </form>
                
                
                    <!-- <div id="sprintcontainer"> -->

                  
            </div>
            <!-- /.container-fluid -->
         </div>
        <!-- /#page-wrapper -->

    </div>
    </div>
    <!-- /#wrapper -->
      <!-- /#wrapper -->



<script>

 $( function() {
    $( "#deli_date" ).datepicker({
        format: 'yyyy-mm-dd'

    });
  } );
</script>


<script>
var num = 1;
$(document).ready(function() {

        $('#Supplier').change(function() {
            temp = $(this).val();
            $.when($('#loadingText').show()).then(function(){
                $.post('<?= site_url('purchase_v1/dashboard/getAjaxSupplier'); ?>', {key : temp}, function(data) {
                    $.when($('#supplierInfo').html(data)).then(function(){
                        $('#loadingText').hide();
                    });
                });
            });
        });



        $('#cat_id').change(function() {

            temp = $(this).val();
     
            $.post('<?= site_url('purchase_v1/dashboard/getAjaxItem'); ?>', {catt_id : temp}, function(data) {
               
                $("#divItem").html(data);
            });
        });

        $("#addBtn").click(function() {
            $.when($('#loadingItem').show()).then(function(){
                type = $("#itemType").val();
                cat = $("#cat_id").val();

                num ++;

                $.post('<?= site_url('purchase_v1/dashboard/getAjaxItemList') ?>', {type : type , cat : cat , num : num}, function(data) {
            
                    $.when($("#purchaseList").append(data)).then(function(){
                        $('#loadingItem').hide();
                    });                 
                });
            });     
        });

        $('.delBtn').click(function() {
                pi_id = $(this).prop('id');
            //     if(confirm("Are you sure? This will auto delete permanently in the database!!!")){
            //     $.post('<?= site_url("purchase_v1/dashboard/getAjaxDelItem") ?>', {pi_id: pi_id}, function(data) {
            //         if (data == '0') {
            //             alert("Ops!! Something Wrong... Contact Mr.Pool.");
            //         } else {
            //             $("#delBtn_"+pi_id).remove();
            //         }
            //     });             
            // }

            bootbox.confirm({
                        message: "Are you sure? This will auto delete permanently in the database!!!",
                        buttons: {
                            confirm: {
                                label: 'Delete This Item',
                                className: 'btn-success'
                               
                            },
                            cancel: {
                                label: 'No',
                                className: 'btn-danger'
                            }
                        },
                        callback: function (result) {
                            if(result == true){
                                
                                $.post('<?= site_url("purchase_v1/dashboard/getAjaxDelItem") ?>', {pi_id: pi_id}, function(data) {
                                    
                                    if (data == '0') {
                                            bootbox.alert("Ops!! Something Wrong... Contact Mr.Pool.");
                                        } else {
                                            $("#delBtn_"+pi_id).remove();
                                        }
                                    
                                });

                            }
                            
                            
                        }
                    });
            }); 

        



        
     });    
</script>






   

</body>

</html>
