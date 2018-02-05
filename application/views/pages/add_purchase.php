
                       <form role="form" action="<?= site_url('purchase_v1/dashboard/page/z11'); ?>" method="post">
                       <input type="hidden" name="pro_id" id="pro_id" class="form-control" value="1">
                                <div class="row">
                                         <div class="form-group">
                                            <label class="col-md-2">Supplier Name :</label>
                                            <div class=" col-md-2">
                                            <select class="form-control input-sm js-example-basic-single" name="Supplier" id="Supplier">
                                            <option value="-1">--New Client--</option>
                                                <?php foreach ($lvl as $key) {
                                                                ?>
                                                                <option value="<?= $key->su_id; ?>" > <?= $key->su_name; ?>
                                                                    
                                                                </option>
                                                                <?php
                                                            } ?>
                                            </select>
                                            </div>
                                            <!-- <span class="pull-left" id="loadingText" style="display: none;"><i class="fa fa-spinner fa-spin"></i>&nbsp;Loading</span> -->
                                        
                                            <label class="col-md-2">Project Code :</label>
                                            <div class=" col-md-2">
                                            <select class="form-control input-sm js-example-basic-single" name="prjk_id" id="prjk_id" required="required">
                                            <option value="">--Select Project--</option>
                                                <?php foreach ($prjk as $key) {
                                                                ?>
                                                                <option value="<?= $key->pro_id; ?>" > <?= $key->pro_code; ?>
                                                                    
                                                                </option>
                                                                <?php
                                                            } ?>
                                            </select>
                                            </div>

                                            <label class="col-md-2">Company Code :</label>
                                            <div class=" col-md-2">
                                            <select class="form-control input-sm js-example-basic-single" name="nc" id="nc" required="required">
                                            <option value="">--Select Company--</option>
                                                <?php foreach ($nc as $key) {
                                                                ?>
                                                                <option value="<?= $key->nc_id; ?>" ><?= "#".(100+$key->nc_id); ?>&nbsp;&nbsp;&nbsp;<?= $key->nc_name; ?>
                                                                    
                                                                </option>
                                                                <?php
                                                            } ?>
                                            </select>
                                            </div>
                                        
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
                                            <select class="form-control" name="curr" id="curr" required>
                                            <option value="">--Select Currency--</option>
                                            <option value="1">MYR</option>
                                            <option value="2">USD</option>
                                            </select>
                                            
                                        </div>
                                        </div>

</div>
                               <!--  -->
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
                                                                                <th>Unit Qty</th>
                                                                                <th>Price</th>
                                                                                <th>Discount</th>
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
                                                                <select class="form-control js-example-basic-single" id="cat_id" name="cat_id" required>
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
                                                                <select class="form-control js-example-basic-single" disabled="" id="itemType" required>
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

                                        <div class="clear" style="height: 20px;"></div>
                                        <button type="submit" class="btn btn-success" id="subBtn">Submit</button>
                                        <a href="<?= site_url('purchase_v1/dashboard/page/a1'); ?>" name="c5">    
                                                    <button type="button" class="btn btn-warning">Back</button>
                                                </a>
                                        <div class="clear" style="height: 20px;"></div>                   
                    </form>
                




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

        $('.js-example-basic-single').select2();

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
