<?php 
if ($cat == -1) { ?>

<select id="item" name="item" class="form-control input-circle" disabled="" >
                                        <option value="-1">Select Item</option>
                                       
                                    </select>
<?php }else{ ?>

                  <select class="form-control" id="item"  name="item" >
                      <option value="-1">Select Item</option>
                      <?php 
				foreach ($item as $key) { ?>
					<option value="<?= $key->item_id; ?>"> <?= $key->item_name; ?> </option>
				<?php }
				?>
                   </select>
                                                            
                                                      
      


   <?php }
?>
