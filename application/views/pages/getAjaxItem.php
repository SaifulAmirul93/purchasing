 <tr class="list_<?= $num; ?>">
           <
            <td style="width: 500px;"><?= $item->item_name; ?>
            <br/>
            <span style="color: black; font-size: 75%;" ><strong><?= $cat->cat_name; ?></strong></span></td>
                                                       
           	<td><input type="number" name="price[]" id="inputPrice" min="0" step="any" class="quantity form-control" value="" required="required"></td>
            <td><input type="number" name="qty[]" id="inputQty" min="0" class="price form-control" required="required"></td>
            <td><input type="number" name="gst[]" id="inputQty" min="0" class="price form-control" required="required"></td>
            <td><span><button type="button" class="btn btn-danger btn-xs delBtn<?= $num; ?>"><i class="fa fa-trash" ></i></button></span>
			<input type="hidden" name="itemId[]" id="inputItemId[]" class="form-control" value="">
			<input type="hidden" name="nico[]" id="inputNico[]" class="form-control" value="">
			</td>


			<script>
		$(document).ready(function() {
			$('.delBtn<?= $num; ?>').click(function() {
				$(".list_<?= $num; ?>").remove();
			});	
		});
	</script>
</tr>





