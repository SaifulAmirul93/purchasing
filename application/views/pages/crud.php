

                
                    
									<?php 
									foreach($css_files as $file): ?>
										<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
									<?php endforeach; ?>
									<?php foreach($js_files as $file): ?>
										<script src="<?php echo $file; ?>"></script>
									<?php endforeach; ?>
									<div class="row">
										<div class="panel panel-info">
											<div class="panel-heading">

											</div>
											<!-- /.panel-heading -->
											<div class="panel-body">
												<div class="table-responsive">
													<div class="col-md-12">
														<?= $output; ?>
													</div>

													</div>
													<!-- /.table-responsive -->
												</div>
												<!-- /.panel-body -->
											</div>
											<!-- /.panel -->
										
									</div>

                            
                
         
      
