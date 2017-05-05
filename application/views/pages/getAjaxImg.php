<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary">
	        <div class="panel-heading">
                            Image List
                    </div>	
	        <div class="portlet-body flip-scroll">	
	        <div class="row">				        
		        <?php 	        
		        	foreach ($img as $key) {
		        		?>
		        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 t<?= $key->pi_id; ?>" align="center">
		        	<a class="thumbnail" >
		        		<img src="<?= base_url($key->img_url); ?>" class = "img">		        		
		        	</a>
		        </div>
		        <?php
		        	}
		         ?>
			</div>
			</div>	            			
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$(".img").click(function() {
    			img = $(this).prop('src');
    			bootbox.dialog({message :
					'<div align = "center"><img src="'+img+'" class="img-responsive" alt="Image"><br/></div>'
				});
    		});
		});
	</script>
</div>