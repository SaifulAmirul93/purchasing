 <?php 	  
		        	if($img==null){
		        		?>
		        		<br>
		        		<center>
		        		<div class="alert alert-danger alert-dismissable ">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                <strong><i class="fa fa-times-circle-o"></i> Error!</strong> Please upload payment or invoice first
                            </div>
                           </center>
<?php }else{ ?>



<div class="row">
	<div class="col-md-12">
		<div class="panel panel-info">
	        <div class="panel-heading">
                            Payment
                    </div>	
	        <div class="portlet-body">	
	        <div class="row">				        
		       

		        <?php
		        	   
		        	foreach ($img as $key) {
		        		?>
		        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t<?= $key->py_id; ?>" align="center">
		        	<!-- <a class="thumbnail" > -->
		        	<iframe src="<?= base_url($key->image_url); ?>" height="600" width="550"></iframe>
		        		<!-- <img src="<?= base_url($key->img_url); ?>" class = "img">		        		 -->
		        	<!-- </a> -->
		        </div>
		        <?php
		        	}
		         ?>
			</div>
			</div>	            			
		</div>
	</div>
	<!-- <script>
		$(document).ready(function() {
			$(".img").click(function() {
    			img = $(this).prop('src');
    			bootbox.dialog({message :
					'<div align = "center"><img src="'+img+'" class="img-responsive" alt="Image"><br/></div>'
				});
    		});
		});
	</script> -->
</div>
<?php } ?>