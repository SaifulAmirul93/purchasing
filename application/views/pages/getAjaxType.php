
<?php 
if ($cat == -1) { ?>
 <label class="col-sm-2">Item :</label>
	<div class=" col-sm-4">
<select id="itemType" class="form-control js-example-basic-single" disabled>
    <option value="-1">-- Select Type --</option>
</select>
</div>	
<?php }else{ ?>
 <label class="col-sm-2">Item :</label>
	<div class=" col-sm-4">
			<select id="itemType" class="form-control js-example-basic-single">
		    	<option value="-1">-- Select Type --</option>
		    	<?php 
				foreach ($type as $key) { ?>
					<option value="<?= $key->item_id; ?>"> <?= $key->item_name; ?> </option>
				<?php }
				?>
			</select>
	</div>
<?php }
?>
	<script> 
		$(document).ready(function() {

			$('.js-example-basic-single').select2();
			$('#itemType').change(function() {
				temp = $(this).val();
				

				temp2 = $('#cat_id').val();

				
				if (temp == -1 || temp2 == -1) {
				
				} else {
					document.getElementById("addBtn").disabled = false;
					$("#addBtn").removeProp('disabled');


				}
			});
			
					
		});
	</script>	



