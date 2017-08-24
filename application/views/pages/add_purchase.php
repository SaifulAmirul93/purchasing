


<body>

    <div id="wrapper">

        <!-- Navigation -->
     


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Purchase</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                  <!-- action="<?= site_url('purchase_v1/dashboard/page/z11'); ?>" method="post" -->
                       <form role="form" action="<?= site_url('purchase_v1/dashboard/page/z11'); ?>" method="post">
                       <input type="hidden" name="pro_id" id="pro_id" class="form-control" value="1">
                                        <div class="row">
                                         <div class="form-group">
                                            <label class="col-md-2">Supplier Name :</label>
                                            <div class=" col-md-2">
                                            <select class="form-control" name="Supplier" id="Supplier" required>
                                            <option value="-1">--New Client--</option>
                                                <?php foreach ($lvl as $key) {
                                                                ?>
                                                                <option value="<?= $key->supplier_id; ?>" > <?= $key->supplier_name; ?>
                                                                    
                                                                </option>
                                                                <?php
                                                            } ?>
                                            </select>
                                            </div>
                                            <span class="pull-left" id="loadingText" style="display: none;"><i class="fa fa-spinner fa-spin"></i>&nbsp;Loading</span>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2">Project Code :</label>
                                            <div class=" col-md-2">
                                            <select class="form-control" name="prjk_id" id="prjk_id" required="required">
                                            <option value="">--Project--</option>
                                                <?php foreach ($prjk as $key) {
                                                                ?>
                                                                <option value="<?= $key->projek_id; ?>" > <?= $key->project_code; ?>
                                                                    
                                                                </option>
                                                                <?php
                                                            } ?>
                                            </select>
                                            </div>
                                            <span class="pull-left" id="loadingText" style="display: none;"><i class="fa fa-spinner fa-spin"></i>&nbsp;Loading</span>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class=" col-md-4">
                                                <h3 class="page-header">Supplier Info</h3>
                                            </div>
                                        </div>
                                        <div class="row"  id="supplierInfo">

                                         <div class=" col-md-4">
                                         <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="supplier_name" id="supplier_name" required>
                                            
                                        </div>
                                        </div>
                                           <div class=" col-md-4">
                                         <div class="form-group">
                                            <label>Company</label>
                                            <input class="form-control"  name="supplier_company" id="supplier_company" required>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        </div>
                                        <div class=" col-md-4">
                                          <div class="form-group">
                                          <label>Delivery Date</label>
                                                 <input class="form-control" id="deli_date" name="deli_date" required>
                                            </div>
                                        </div>

                                         <div class=" col-md-4">
                                         <div class="form-group">
                                            <label>Contact Number</label>
                                            <input class="form-control" name="supplier_contact" id="supplier_contact" required>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        </div>

                                         <div class=" col-md-4">
                                         <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="supplier_email" id="supplier_email" required>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        </div>

                                             <div class=" col-md-4">
                                         <div class="form-group">
                                            <label>Purchase Date</label>
                                            <input class="form-control" value="<?= date("Y-m-d"); ?>" name="date" id="date" required>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        </div>

                                         <div class=" col-md-8">
                                         <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control"  name="supplier_address" id="supplier_address" required></textarea> 
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        </div>
                                            
                                        <div class=" col-md-4">
                                         <div class="form-group">
                                            <label>Currency</label>
                                            <select class="form-control" name="currency" id="currency" required>
                                            <option value="">--Select Currency--</option>
                                            <option value="1">MYR</option>
                                            <option value="2">USD</option>
                                            </select>
                                            
                                        </div>
                                        </div>

</div>
                                    <div class="row">
                                        <div class=" col-md-4 pull-right">
                                                 <div class="form-group">
                                                    <label>Quantity Unit</label>
                                                    <select class="form-control" name="unit" id="unit" required>
                                                    <option value="">--Select Unit--</option>
                                                      <?php foreach ($unit as $key) {
                                                                ?>
                                                                <option value="<?= $key->un_id; ?>" > <?= $key->un_desc; ?>
                                                                    
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
                                                    <input type="radio" name="gst" value="1" required="">
                                                    <label>Yes</label>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <input type="radio" name="gst" value="0">
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
                                                                    <table class="tbl table table-striped table-bordered table-hover">
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
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                                <label class="col-sm-2">Category :</label>
                                                                <div class="col-sm-4">
                                                                <select class="form-control" id="cat_id" name="cat_id" required>
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
                                                                <select class="form-control" disabled="" id="itemType" required>
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
                                                            <input type="radio" name="pay" value="0" required>
                                                                <strong>Unpaid</strong>
                                                            <span></span>
                                                        </label>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label class="mt-radio">
                                                            <input type="radio" name="pay" value="1">
                                                                <strong>50% Payment</strong>
                                                            <span></span>
                                                        </label>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label class="mt-radio">
                                                            <input type="radio" name="pay" value="2">
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
                                        <button type="submit" class="btn btn-success" id="subBtn">Submit</button>
                                        <a href="<?= site_url('purchase_v1/dashboard/page/a1'); ?>" name="c5">    
                                                    <button type="button" class="btn btn-warning">Back</button>
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

                

        
     }); 


    



</script>






   

</body>

</html>
