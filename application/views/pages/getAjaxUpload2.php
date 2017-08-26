
<!-- <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                     Payment Note
                                                    </div>

                                                    <div class="panel-body"> -->



<!-- Input File -->
	            <div class="row">
	            	<div class="col-md-6">
	            	<div class="panel panel-info">
	            	<div class="panel-heading">
                            Upload Payment Proof For 
                    </div>	
                    <div class="panel-body">				
	            		<form action="<?= site_url('purchase_v1/dashboard/uploadPaid2'); ?>" method="POST" role="form" enctype="multipart/form-data">
	            		
					       
					        <div class="portlet-body flip-scroll" align="center">
					        <span style = "color : #b706d6;"><h2><strong>#<?= (110000+$pur_id); ?></strong></h2></span>
					        <div class="form-group">
	            				<div class="fileinput fileinput-new" align="center" data-provides="fileinput">
	                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;"></div>
	                                <div>
	                                    <span class="btn btn-outline btn-file" style="background-color: #FF5733">
	                                        <span class="fileinput-new"> Select Document </span>
	                                        <span class="fileinput-exists"> Change </span>
	                                        <input type="hidden" value="" name="title"><input type="file" name="fileImg"> </span>
	                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                    </div><div class="clearfix">&nbsp;</div><button type="submit" class="btn btn-primary"><i class="fa fa-upload"> Submit</i></button>
                                </div>
                            </div>
            				</div>
	            			<input type="hidden" name="pur_id" id="pur_id" class="form-control" value="<?= $pur_id; ?>">					        
	            		
	            		</form>
	            		</div>
	            		</div>
	            	</div>            			
	            	<div class="col-md-6">
	            		<div class="panel panel-info">
			            	<div class="panel-heading">
		                            <i class="fa fa-image"></i> Document List 

		                             <div class="btn-group btn-group-devided pull-right" data-toggle="buttons">
				                        <button type="button" class="btn btn-sm" id="tutupUpload">Back To List</button>
				                    </div>
		                    </div>	
					       	<div class="panel-body">
					            
					                           
					        <br>
					        <!-- <div class="portlet-body flip-scroll"> -->	
					       			        
						     <?php
						        	if ($img) {
						        	foreach ($img as $key) {
						        		?>

						        		 <div class="row">

						        <div class="col-xs-5 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 t<?= $key->py_id; ?>" align="center">
						        	<a class="thumbnail" >
						        		<!-- <img src="<?= base_url($key->image_url); ?>" class = "img"> -->
						        		<!-- <a href="<?= base_url($key->image_url); ?>"><?= $key->image_url;?></a> -->
						        		<!-- <iframe src="<?= base_url($key->image_url); ?>"></iframe> -->
						        		<center>
						        		<object width="400" height="500" type="application/pdf" data="<?= base_url($key->image_url); ?>" id="pdf_content">
									    <p>Insert your error message here, if the PDF cannot be displayed.</p>
									  </object>

						        		<button type="button" class="btn red-pink btn-circle btn-sm delImg" id = "<?= $key->py_id; ?>"><i class="fa fa-close"></i></button>
						        		</center>	
						        	</a>
						        </div>
						        
						        </div>

						        <?php
						        	}
						        	}
						         ?>
            				
            				<!-- </div>  -->  
            				</div>
            				</div>         			
	            		
	            	</div>
	            </div>
	            <script>
	            	$(document).ready(function() {
	            		$("#tutupUpload").click(function(){
							$(".tableL").fadeIn("slow");
							$("#fileUp").fadeOut("fast");
							$("#fileUp").html("");
						});
	            		$(".img").click(function() {
	            			img = $(this).prop('src');
	            			bootbox.dialog({message :
								'<div align = "center"><img src="'+img+'" class="img-responsive" alt="Image"><br/></div>'
							});
	            		});
	            		$(".delImg").click(function(){
	            			py_id = $(this).prop('id');


	            			if (confirm("Are you sure?")) {
	            				$.when($(".t"+py_id).html("<h2><i class='fa fa-refresh fa-spin'></i></h2>")).then(function(){
	            					$.post('<?= site_url('purchase_v1/dashboard/getAjaxDelImg2') ?>', {py_id: py_id}, function(data) {
	            						if(data){
            								$(".t"+py_id).remove();           							
	            						}else{
	            							bootbox.alert("Warning Error, Contact dark Epool....");
	            						}
	            					});
	            				});
	            			}
	            		});
	            	});	
	            </script>