


<body>

    <div id="wrapper">

        <!-- Navigation -->
     


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">View Purchase</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                  
                                    <div class="row">
                                        
                                       <div class="col-lg-12">
                                            <div class="panel panel-red">
                                                <div class="panel-heading">
                                                     Supplier Info
                                                </div>
                                                  <div class="panel-body">
                                                            <div class="row"  id="supplierInfo">

                                                                 <div class=" col-md-4">
                                                                 <div class="form-group">
                                                                    <label class="control-label">Name : <strong><?= $arr['purchase']->supplier_name; ?></strong></label>
                                                                    
                                                                    
                                                                </div>
                                                                </div>
                                                                   <div class=" col-md-4">
                                                                 <div class="form-group">
                                                                    <label class="control-label">Company : <strong><?= $arr['purchase']->supplier_company; ?></strong></label>
                                                                  
                                                                </div>
                                                                </div>
                                                                <div class=" col-md-4">
                                                                  <div class="form-group">
                                                                  <label class="control-label">Delivery Date : <strong><?= $arr['purchase']->deli_date; ?></strong></label>
                                                                  
                                                                    </div>
                                                                </div>

                                                                 <div class=" col-md-4">
                                                                 <div class="form-group">
                                                                    <label class="control-label">Contact Number : <strong><?= $arr['purchase']->supplier_contact; ?></strong></label>
                                                                    
                                                                </div>
                                                                </div>

                                                                 <div class=" col-md-4">
                                                                 <div class="form-group">
                                                                    <label class="control-label">Email : <strong><?= $arr['purchase']->supplier_email; ?></strong></label>
                                                                    
                                                                </div>
                                                                </div>

                                                                     <div class=" col-md-4">
                                                                 <div class="form-group">
                                                                    <label class="control-label">Purchase Date : <strong><?= $arr['purchase']->pur_date; ?></strong></label>
                                                                    
                                                                </div>
                                                                </div>

                                                                 <div class=" col-md-8">
                                                                 <div class="form-group">
                                                                    <label class="control-label">Address : <?= $arr['purchase']->supplier_address; ?></label>
                                                                  
                                                                </div>
                                                                </div>

                                                                <div class=" col-md-4">
                                                                     <div class="form-group">
                                                                        <label class="control-label">GST (%) : </label>
                                                                        
                                                                    </div>
                                                                </div>

                                                                </div>



                                                  </div>
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
                                                                                                        
                                                                                                        <th>Item Detial</th>
                                                                                                        <th>Quantitty</th>
                                                                                                        <th>Unit Price</th>
                                                                                                        <th>GST</th>
                                                                                                      
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
                                                                                                    <tr>
                                                                                                      <td style="width: 500px;"><?= $key->item_name; ?>
                                                                                                        <br/>
                                                                                                        <span style="color: black; font-size: 75%;" ><strong><?= $key->cat_name; ?></strong></span></td>
                                                                                                                                                   
                                                                                                        <td><?= $key->pi_price; ?></td>
                                                                                                        <td><?= $key->pi_qty; ?></td>
                                                                                                        <td><?= $key->pi_gst; ?></td>
                                                                                                        
                                                                                                     
                                                                                                        
                                                                                                        </tr>
                                                                                                    <?php
                                                                                                }
                                                                                            }                                                                   
                                                                                        ?>  

                                                                                                </tbody>
                                                                                            </table>
                        </div>
                    </div>
            </div>
        </div>
  </div>
                                       
                                                            
                                       
                                                
                                             
                                            
                                                        
                                                
                                                  
                            </div>
                       </div>
                                                               
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
