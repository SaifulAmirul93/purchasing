 <tr class="list_<?= $num; ?>">

            <td style="width: 500px;"><?= $item->item_name; ?>
            <br/>
            <span style="color: black; font-size: 75%;" ><strong><?= $cat->cat_name; ?></strong></span></td>
                                                       
            <td><input type="number" name="qty[]" id="inputPrice" min="0" step="any" class="quantity form-control" value="" required="true"></td>
            <td>
            	<select class="form-control" name="unit" id="unit" required>
                                                    <option value="-1">--Select Unit--</option>
                                                      <?php foreach ($unit as $key) {
                                                                ?>
                                                                <option value="<?= $key->un_id; ?>" > <?= $key->un_desc; ?>
                                                                    
                                                                </option>
                                                                <?php
                                                            } ?>
                </select>
            </td> 
            <td><input type="text" name="price[]" id="inputQty" min="0" class="price<?= $num; ?> form-control" required="true"></td>
            <td><span><button type="button" class="btn btn-danger btn-xs delBtn<?= $num; ?>"><i class="fa fa-trash" ></i></button></span>
            <input type="hidden" name="itemId[]" id="inputItemId[]" class="form-control" value="<?= $item->item_id; ?>">
            <input type="hidden" name="cattId[]" id="inputItemId[]" class="form-control" value="<?= $cat->catt_id; ?>">
            </td>



			<script>
		$(document).ready(function() {
			$('.delBtn<?= $num; ?>').click(function() {
				$(".list_<?= $num; ?>").remove();
			});	
			

			$(".price<?= $num; ?>").keyup(function(evt){
				
					
              		
      if ( $(this).val() != null && $(this).val() != 0.00 && $(this).val() != " ") {
      				
					document.getElementById("subBtn").disabled = false;
					$("#subBtn").removeProp('disabled');

		                }
		                else
		                {
		                	document.getElementById("subBtn").disabled = true;
		                	$("#subBtn").prop('disabled' , 'disabled');
		       		}

	       

	        });


	        
	    });
	</script>
        
</tr>






