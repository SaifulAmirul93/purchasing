


<?php 
    //$saleperson = $this->my_func->scpro_decrypt($this->session->userdata('us_username'));
    if (isset($supplier)) {
        ?>
<div class=" col-md-4">
    <div class="form-group">
        <label>Name</label>
        <input class="form-control" name="supplier_name" id="supplier_name" value = "<?= $supplier->supplier_name; ?>">                                     
    </div>
</div>
<div class=" col-md-4">
    <div class="form-group">
        <label>Company</label>
        <input class="form-control"  name="supplier_company" id="supplier_company" value = "<?= $supplier->supplier_company; ?>">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>
<div class=" col-md-4">
    <div class="form-group">
        <label>Delivery Date</label>
        <input class="form-control" id="deli_date" name="deli_date">
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>Contact Number</label>
        <input class="form-control" name="supplier_contact" id="supplier_contact" value = "<?= $supplier->supplier_contact; ?>">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" name="supplier_email" id="supplier_email" value = "<?= $supplier->supplier_email; ?>">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>Purchase Date</label>
        <input class="form-control" disabled="true" value="<?= date("d-m-Y"); ?>" name="pur_date" id="pur_date">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-8">
    <div class="form-group">
        <label>Address</label>
        <textarea class="form-control"  name="supplier_address" id="supplier_address"><?= $supplier->supplier_address; ?></textarea> 
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>GST (%)</label>
        <input class="form-control"  name="gst" id="gst">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>
        <?php
    }else{
        ?>


<div class=" col-md-4">
    <div class="form-group">
        <label>Name</label>
        <input class="form-control" name="supplier_name" id="supplier_name">                                     
    </div>
</div>
<div class=" col-md-4">
    <div class="form-group">
        <label>Company</label>
        <input class="form-control"  name="supplier_company" id="supplier_company">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>
<div class=" col-md-4">
    <div class="form-group">
        <label>Delivery Date</label>
        <input class="form-control" id="deli_date" name="deli_date">
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>Contact Number</label>
        <input class="form-control" name="supplier_contact" id="supplier_contact">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" name="supplier_email" id="supplier_email">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>Purchase Date</label>
        <input class="form-control" disabled="true" value="<?= date("d-m-Y"); ?>" name="pur_date" id="pur_date">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-8">
    <div class="form-group">
        <label>Address</label>
        <textarea class="form-control"  name="supplier_address" id="supplier_address"></textarea> 
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>GST (%)</label>
        <input class="form-control"  name="gst" id="gst">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>
 <?php
    }
?>
<script>

 $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>