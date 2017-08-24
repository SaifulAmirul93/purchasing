
<?php 
if ($cat == -1) { ?>
 <label class="col-sm-2">Item :</label>
	<div class=" col-sm-4">
<select id="itemType" class="form-control" disabled>
    <option value="-1">-- Select Type --</option>
</select>
</div>	
<?php }else{ ?>
 <label class="col-sm-2">Item :</label>
	<div class=" col-sm-4">
			<select id="itemType" class="form-control">
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
			$('#itemType').change(function() {
				temp = $(this).val();
				

				temp2 = $('#cat_id').val();

				
				if (temp == -1 || temp2 == -1) {
				
				} else {
					document.getElementById("addBtn").disabled = false;
					$("#addBtn").removeProp('disabled');


				}
			});
			// $('#inputNico').change(function() {
			// 	temp = $(this).val();
			// 	temp2 = $('#cat').val();
			// 	temp3 = $('#itemType').val();
			// 	if (temp == -1 || temp2 == -1 || temp3 == -1) {
			// 		$("#addBtn").prop('disabled' , 'disabled');
			// 	} else {
			// 		$("#addBtn").removeProp('disabled');
			// 	}
			// });	
					
		});
	</script>	



