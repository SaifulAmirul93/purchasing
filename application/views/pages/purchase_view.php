
                                     <div class="row">
                                        
                                       <div class="col-lg-12">
                                            <div class="panel panel-green">
                                                <div class="panel-heading">
                                                     Job Order Information
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Project Code :  <strong><?= $arr['purchase']->pro_code; ?></strong></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label class="control-label">Company Code :  <strong><?= "#".(100+$arr['purchase']->nc_id); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $arr['purchase']->nc_name; ?></strong></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>

                  
                                    <div class="row">
                                        
                                       <div class="col-lg-12">
                                            <div class="panel panel-red">
                                                <div class="panel-heading">
                                                     Supplier Information
                                                </div>
                                                  <div class="panel-body">
                                                            <div class="row">

                                                                 <div class=" col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Name : <strong><?= $arr['purchase']->su_name; ?></strong></label>
                                                                        
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class=" col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Company : <strong><?= $arr['purchase']->su_company; ?></strong></label>
                                                                    
                                                                    </div>
                                                                </div>

                                                                 <div class=" col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Contact Number : <strong><?= $arr['purchase']->su_contact; ?></strong></label>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                            
                                                                <div class=" col-md-4">
                                                                    <div class="form-group">
                                                                    <label class="control-label">Delivery Date : <strong><?= $arr['purchase']->pu_deli; ?></strong></label>
                                                                  
                                                                    </div>
                                                                </div>

                                                                <div class=" col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Email : <strong><?= $arr['purchase']->su_email; ?></strong></label>
                                                                        
                                                                    </div>
                                                                </div>

                                                                <div class=" col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Purchase Date : <strong><?= $arr['purchase']->pu_date; ?></strong></label>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class=" col-md-8">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Address : <?= $arr['purchase']->su_address; ?></label>
                                                                    
                                                                    </div>
                                                                </div>

                                                                <div class=" col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Currency (%) : 
                                                                            <?php if($arr['purchase']->pu_curr == 1){

                                                                                echo "MYR";}
                                                                            else if($arr['purchase']->pu_curr == 2){
                                                                                echo "USD";
                                                                                } ?>



                                                                            </label>
                                                                        
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            



                                                  </div>
                                            </div>
                                        </div>
                                        </div>
 <?php
          if($arr['purchase']->pu_unit!=null){
                  foreach ($unit as $key) 
                  {

                         if($key->un_id == $arr['purchase']->pu_unit)
                          {
                            $unit=$key->un_desc;
                          }
                  }
          }
          else{
           $unit="Error";  
          }

           if($arr['purchase']->pu_curr == 1){
                  $curr="MYR";
              }else if($arr['purchase']->pu_curr == 2){
                  $curr="USD";
              }
              else{
                  $curr="Error";
              }
               if($arr['purchase']->pu_pay == 0){
                  $pay="Unpaid";
              }else if($arr['purchase']->pu_pay == 1){
                  $pay="50% paid";
              }
              else{
                  $pay="Full Paid";
              }






         ?>
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
                                                                                                        <th>Quantitty</th>
                                                                                                        <th>Unit Price</th>
                                                                                                        <th>Discount</th>
                                                                                                        
                                                                                                      
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
                                                                                                                                                   
                                                                                                        <td><?= $key->pi_qty; ?> <?= $key->un_desc; ?></td>
                                                                                                        <td><?= $curr; ?> <?= $key->pi_price;?></td>
                                                                                                        <td><?= $curr; ?> <?= $key->pi_disc;?></td>

                                                                                                        
                                                                                                        
                                                                                                     
                                                                                                        
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
        <div class="col-lg-12">
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
                                                        <?= $pay; ?>
                                                        </label>
                                                    </div>
                                                    </div>
                                                    </div>

                                                   

                                                 


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>

  </div>
                                       
                                                        



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
