

<?php 
    $pur_person = $this->session->userdata('us_username');
    if ($supplier!=null) {
        ?>
<div class=" col-md-4">
    <div class="form-group">
        <label>Name</label>
        <input class="form-control" name="supplier_name" id="supplier_name" disabled="" value = "<?= $supplier->supplier_name; ?>">                                     
    </div>
</div>
<div class=" col-md-4">
    <div class="form-group">
        <label>Company</label>
        <input class="form-control"  name="supplier_company" id="supplier_company" disabled="" value = "<?= $supplier->supplier_company; ?>">
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
        <input class="form-control" name="supplier_contact" id="supplier_contact" disabled="" value = "<?= $supplier->supplier_contact; ?>">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" name="supplier_email" id="supplier_email" disabled="" value = "<?= $supplier->supplier_email; ?>">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>Purchase Date</label>
        <input class="form-control" value="<?= date("Y-m-d"); ?>" name="date" id="date"  disabled="" >
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-8">
    <div class="form-group">
        <label>Address</label>
        <textarea class="form-control"  disabled=""  name="supplier_address" id="supplier_address"><?= $supplier->supplier_address; ?></textarea> 
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
        <?php
    }else{
        ?>


<div class=" col-md-4">
    <div class="form-group">
        <label>Name</label>
        <input class="form-control" name="supplier_name" id="supplier_name" disabled="">                                     
    </div>
</div>
<div class=" col-md-4">
    <div class="form-group">
        <label>Company</label>
        <input class="form-control"  name="supplier_company" id="supplier_company" disabled="">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>
<div class=" col-md-4">
    <div class="form-group">
        <label>Delivery Date</label>
        <input class="form-control" id="deli_date" name="deli_date" disabled="">
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>Contact Number</label>
        <input class="form-control" name="supplier_contact" id="supplier_contact" disabled="">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" name="supplier_email" id="supplier_email" disabled="">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>Purchase Date</label>
        <input class="form-control" value="<?= date("Y-m-d"); ?>" name="date" id="date" disabled="">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-8">
    <div class="form-group">
        <label>Address</label>
        <textarea class="form-control"  name="supplier_address" id="supplier_address" disabled=""></textarea> 
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-4">
                                         <div class="form-group">
                                            <label>Currency</label>
                                            <select class="form-control" name="currency" id="currency">
                                            <option value="0">--Select Currency--</option>
                                            <option value="1">MYR</option>
                                            <option value="2">USD</option>
                                            </select>
                                            
                                        </div>
                                        </div>

 <?php
    }
?>
<script>

 $( function() {
    $( "#deli_date" ).datepicker({
        format: 'yyyy-mm-dd'

    });
  } );
</script>