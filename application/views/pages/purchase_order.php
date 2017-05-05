<style>

header {
    padding: 1em;
   background-color: #F0F6F9;
    clear: left;
    text-align: center;
}
footer{
  text-align: center;
}
.verticalLine {
    border-left: thin solid #d6d9db;
}

.pdf-export #NextContemporary, .read-only-view #NextContemporary {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    width: 860px;
    margin: auto;
    background-color: #FFFFFF;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    padding: 16px 30px 20px 30px;
    position: relative;
    min-height: 1024px;
}
user agent stylesheet
div {
    display: block;
}

input, input:hover, input:focus, input:active {
  background: transparent;
  border: none;
  border-style: none;
  border-color: transparent;
  outline: none;
  outline-offset: 0;
  box-shadow: none;
}
.readonly-payment-information__nav-actions {
    margin: 0 auto;
    width: 820px;
    position: relative;
}
.readonly-payment-information__details {
    background: #FFF;
    border-top: 1px solid #D0DBE1;
    border-bottom: 1px solid #D0DBE1;
    line-height: 50px;
    text-align: center;
    margin-bottom: 30px;
}
.sc-heading--title, .sc-generated-content h1:not([class*="wv-"]) {
    font-size: 31px;
    line-height: 40px;
    font-weight: 200;
}
.sc-heading--title, .sc-generated-content h1:not([class*="wv-"]), .sc-heading--subtitle, .sc-heading--section-title, .sc-generated-content h2:not([class*="wv-"]), .sc-heading--subsection-title, .sc-generated-content h3:not([class*="wv-"]), .sc-form-legend {
    display: block;
    margin: 32px 0 16px;
    font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
    color: #4c5357;
    font-weight: 400;
}
.readonly-payment-information__title {
    background: #E9EEF1;
    padding: 50px 0;
    text-align: center;
    margin: 0!important;
}
.readonly-payment-information__details__items {
    font-size: 18px;
    color: #6C90A2;
    display: inline-block;
    vertical-align: middle;
}
.readonly-payment-information__title {
    background: #E9EEF1;
    padding: 50px 0;
    text-align: center;
    margin: 0!important;
}

#ReadOnlyMain.payments-disabled:not(.ghost-form) .ReadOnlyExtrasStatus {
    display: inline-block;
    right: 30px;
}

.readonly-payment-information__nav-actions .ReadOnlyExtrasStatus {
    right: 0!important;
}
.ReadOnlyExtrasStatus.paid {
    background: #74aa00;
}
body .ReadOnlyExtrasStatus {
    display: block;
    right: 30px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.ReadOnlyExtrasStatus {
    display: none;
    right: 0;
    top: 0;
    position: absolute;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    font-size: 2em;
    font-weight: 500;
    padding: 10px 20px;
}

#ReadOnlyMain {
    font-family: "Open Sans",sans-serif;
    margin-right: 400px;
}


@media print {
    .readonly-payment-information__nav-actions{
      display: none;



}
</style>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>OrdYs v2.3.0 Alpha</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body style="background-color:#EAEDED">





<div class="readonly-payment-information__nav-actions">
                  
<!--   <?php
  if ($arr['order']->or_paid) { ?>
    <div class="ReadOnlyExtrasStatus paid">
    PAID
  </div>
  <?php }else{ ?>
    <div class="ReadOnlyExtrasStatus paid" style="background-color: orange;">
    UnPaid
  </div>
  <?php }
  ?> -->
  
</div> 
<div class="clear" style="height: 30px;"></div>


     <div class="row-fluid">
              <div id="ReadOnlyView" class="span12 read-only-view">
                


<!-- invoice start -->
<div class="clear" style="height: 40px;"></div>
<div id="NextContemporary" class="export-template">
 
   
          
        <img class="contemporary-template__business-logo" src="<?= base_url(); ?>dist/img/formlogo.jpg" width="400" height="157"/>
      
   
  	<div class="pull-right" style="text-align: right;">
      <h3>PURCHASE ORDER</h3>
      <!-- <strong>NSTY WORLDWIDE SDN BHD</strong> -->
      
 <!--        <div class="contemporary-template__header__info__address">
          
		  Lot 139, 1st Floor, Jalan Besar Tampin,<br>
		  Tampin,
		  Negeri Sembilan  73000<br>
		  Malaysia<br>

		<br>

 		 Phone:  +6012 3437638<br>

 		 Mobile: +6013 6777791<br>
  			<span class="wrappable">www.nastyjuice.com<br></span>
        </div> -->
        </div>
      
    
    <div class="clear" style="height: 10px;"></div>
<hr>


  <div class="contemporary-template__divider contemporary-template__divider--full-width"></div>

<!--   <?php switch ($arr['order']->cu_id) {
    case '1':
      $duit = "MYR";
      break;
    case '2':
      $duit = "USD";
      break;
    case '3':
      $duit = "GBP";
      break;
    
    default:
      $duit = "Currency Error!!!<br>";
      break;
  } ?> -->
  <section class="contemporary-template__metadata">
    <div class="pull-left">
      <div class="contemporary-template__metadata__customer--billing">
        <div class="contemporary-template__metadata__customer__address-header"><strong>TO </strong></div>
        <strong>NAME : <?= $arr['purchase']->supplier_name; ?></strong>

        <br>
        <strong>COMPANY : <?= $arr['purchase']->supplier_company; ?></strong>

       
          
  	

				  <br>
        <strong>ADDRESS : <?= $arr['purchase']->supplier_address; ?></strong>
        <br>
        <strong>PHONE : <?= $arr['purchase']->supplier_contact; ?></strong>
				
        
      </div>
      
    </div>

    <div class="pull-right">
    <br>
      <table>
        <tr>
          <td style="text-align: left;">
            <strong>PURCHASE NO. :
              <?php 
                                            if ($arr['purchase']->pur_id) {
                                                $id = '#'.(110000+$arr['purchase']->pur_id);
                                                echo $id;
                                            } else {
                                                echo "--Not Set--";
                                            }
                                            ?>



             </strong>
          </td>
          <td></td>
        
        </tr>
          <tr>
          <td style="text-align: left;">
            <strong>PROJECT CODE. :
              <?= $arr['purchase']->project_code; ?>



             </strong>
          </td>
          <td></td>
        
        </tr>
        <tr>
          <td style="text-align: left;">
            <strong>P.O DATE : <?= $arr['purchase']->pur_date; ?></strong>
          </td>
          <td></td>
          
        </tr>
        <tr>
          <td style="text-align: left;">
            <strong>REQUESTIONER : <?= $arr['purchase']->supplier_name; ?></strong>
          </td>
          <td></td>
         
        </tr>
         <tr>
          <td style="text-align: left;">
            <strong>SHIPPED VIA : </strong>
          </td>
          <td></td>
         
        </tr>
      <tr>
          <td style="text-align: left;">
            <strong>TERMS : </strong>
          </td>
          <td></td>
         
        </tr>
      </table>
   </div>
  </section>
<div class="clear" style="height: 100px;"></div>
<div class="clear" style="height: 100px;"></div>
  <div class="contemporary-template__items">
    <table class="table table-bordered">
      <thead style="background-color: #FFFFFF;">
        <tr>
          <th colspan="8" style="color: #000000;" align="center">Description</th>
          <th style="color: #000000;" align="center">Quantity</th>
          <th style="color: #000000;" align="center">Unit Price</th>
          
          <th style="color: #000000;" align="center">Amount</th>
        </tr>
      </thead>
      <tbody>
         <?php 

         if ($arr['purchase']->unit ==1){
          $unit="PCS";

         }
         else if ($arr['purchase']->unit ==2){
          $unit="KG";

         }
           else {
          $unit="Error";

         }




          if (!isset($arr)) {
          ?>
         <tr>
          <td colspan="11" align="center">-- No Data--</td>
          </tr>
          <?php
          } else {  
              $n = 0;
              $sub_total=0.0;

                if($arr['purchase']->currency == 1){
                  $curr="MYR";
              }else if($arr['purchase']->currency == 2){
                  $curr="USD";
              }
              else{
                  $curr="Error";
              }

              foreach ($arr['item'] as $key) {
              
              
              $n++;
             
            ?>

         <tr>
          <td colspan="8" style="color: #000000;">
          <strong><?= $key->item_name; ?></strong><br>
          <span style="color: black; font-size: 75%;" ><strong><?= $key->cat_name; ?></strong></span>
          </td>
          <td colspan="1" style="color: #000000;" style="width:60px;"><?= $key->pi_qty; ?> <?= $unit; ?></td>
          <td colspan="1" style="color: #000000;" style="width:60px;"><?= $curr; ?> <?= number_format((float)$key->pi_price, 2, '.', '');?></td>
          <?php 
          $qty=$key->pi_qty;
          $price=number_format((float)$key->pi_price, 2, '.', '');
          $amount=$qty*$price;
           ?>
          <td colspan="1" style="color: #000000;" style="width:60px;"><?= $curr; ?> <?= number_format((float)$amount, 2, '.', '');?></td>
        

        </tr>
      <?php 
          $sub_total=$sub_total+$amount; 

          } 

      }?>
      
      
         <tr>
        <td style="color: #000000;text-align: right;" colspan="10"><strong>SUB TOTAL : </strong></td>
          <td style="color: #000000;"><?= $curr; ?> <?= number_format((float)$sub_total, 2, '.', '');?> </td>
        </tr>
         <tr>
        	  
               <?php 


          if($arr['purchase']->currency == 1){
            $gst=$sub_total*0.06; 

          $grand=$sub_total+$gst; ?>
          <tr>
          <td style="color: #000000;text-align: right;" colspan="10"><strong>6% GST:</strong></td>
          <td style="color: #000000;"><?= $curr; ?> <?= number_format((float)$gst, 2, '.', '');?> </td>
          </tr>
          <?php
          }else if($arr['purchase']->currency == 2){
            //$gst=$sub_total*0.06; 

          $grand=$sub_total;

          }
          

      ?>
        
        
          <td style="color: #000000;text-align: right;" colspan="10"> <strong>GRAND TOTAL :</strong></td>
          <td style="color: #000000;"><?= $curr; ?> <?= number_format((float)$grand, 2, '.', '');?></td>
        </tr>      
      </tbody>
    </table>
  </div>
</div>
<!-- invoice end -->
<footer>
<div class="clear" style="height: 100px;"></div>
		<!-- jQuery 
		<script src="//code.jquery.com/jquery.js"></script>-->
		<!-- Bootstrap JavaScript 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->
	</body>
</html>
<script>

    
	 	//window.print();

	
	</script>