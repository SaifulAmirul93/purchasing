

<?php 
    $pur_person = $this->session->userdata('us_username');
    if ($supplier!=null) {
        ?>
<div class=" col-md-4">
    <div class="form-group">
        <label>Name</label>
        <input class="form-control" name="supplier" id="supplier" disabled="" value = "<?= $supplier->su_name; ?>">                                     
    </div>
</div>
<div class=" col-md-4">
    <div class="form-group">
        <label>Company</label>
        <input class="form-control"  name="company" id="company" disabled="" value = "<?= $supplier->su_company; ?>">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>
<div class=" col-md-4">
    <div class="form-group">
        <label>Delivery Date</label>
        <input class="form-control" id="deli" name="deli">
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>Contact Number</label>
        <input class="form-control" name="contact" id="contact" disabled="" value = "<?= $supplier->su_contact; ?>">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" name="email" id="email" disabled="" value = "<?= $supplier->su_email; ?>">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>Purchase Date</label>
        <input class="form-control" value="<?= date("Y-m-d"); ?>" name="date" id="date"  >
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-8">
    <div class="form-group">
        <label>Address</label>
        <textarea class="form-control"  disabled=""  name="address" id="address"><?= $supplier->su_address; ?></textarea> 
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-4">
                                         <div class="form-group">
                                            <label>Currency</label>
                                            <select class="form-control" name="curr" id="curr">
                                            <option value="0">--Select Currency--</option>
                                            <option value="1">MYR</option>
                                            <option value="2">USD</option>
                                            </select>
                                            
                                        </div>
                                        </div>
        <?php
    }else{
        ?>


<div class=" col-md-4">
    <div class="form-group">
        <label>Name</label>
        <input class="form-control" name="supplier" id="supplier">                                     
    </div>
</div>
<div class=" col-md-4">
    <div class="form-group">
        <label>Company</label>
        <input class="form-control"  name="supplier" id="supplier">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>
<div class=" col-md-4">
    <div class="form-group">
        <label>Delivery Date</label>
        <input class="form-control" id="deli" name="deli">
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>Contact Number</label>
        <input class="form-control" name="contact" id="contact">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" name="email" id="email">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-4">
    <div class="form-group">
        <label>Purchase Date</label>
        <input class="form-control" value="<?= date("Y-m-d"); ?>" name="date" id="date">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-8">
    <div class="form-group">
        <label>Address</label>
        <textarea class="form-control"  name="address" id="address"></textarea> 
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    </div>
</div>

<div class=" col-md-4">
                                         <div class="form-group">
                                            <label>Currency</label>
                                            <select class="form-control" name="curr" id="curr">
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
    $( "#deli" ).datepicker({
        format: 'yyyy-mm-dd'

    });
  } );
</script>