<link href="<?= base_url(); ?>assets/bootstrap-colorpicker-plus-master/css/bootstrap-colorpicker-plus.css" rel="stylesheet">

<link href="<?= base_url(); ?>assets/bootstrap-colorpicker-plus-master/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<script src="<?= base_url(); ?>assets/bootstrap-colorpicker-plus-master/js/bootstrap-colorpicker.min.js"></script>
<script src="<?= base_url(); ?>assets/bootstrap-colorpicker-plus-master/js/bootstrap-colorpicker-plus.js"></script>


<div class="row">
                
    <div class="panel panel-danger">
        <div class="panel-heading">
            <div class="row">
                <div class=" col-md-4">
                    <h3>Type Details</h3>
                </div>
            </div>
        </div>
            <div class="panel-body">
                <div class="col-md-12">
                  
                       <form role="form" method="post" action="<?= site_url('purchase_v1/dashboard/addType'); ?>">

                                       

                                        <div class="row">
                                                <div class="form-group">
                                                

                                                    <div class="form-group">
                                                        <label class="col-md-2" >Type Name</label> 
                                                        <div class=" col-md-3">  
                                                                <input class="form-control" name="desc" id="desc">
                                            
                                                        </div>
                                                    </div>
                                                </div>
                                         </div>

                                         <div class="row">
                                                <div class="form-group">
                                                

                                                    <div class="form-group">
                                                        <label class="col-md-2" >Type Color</label> 
                                                        <div class=" col-md-3">  
                                                                <input class="form-control" type="text" name="color" id="h_color">
                                            
                                                        </div>
                                                    </div>
                                                </div>
                                         </div>

                                    
                        
                                        <div class="clear" style="height: 50px;"></div>
                                         <div class="row">
                                            <div class=" col-md-5">
                                                <button type="submit" class="btn btn-success">Add Type</button>
                                                <a href="<?= site_url('purchase_v1/dashboard/page/t1'); ?>">
                                                    <button type="button" class="btn btn-danger">Cancel</button>
                                                </a>
                                                
                                            </div> 
                                        </div>  
                                        <div class="clear" style="height: 50px;"></div>                
                    </form>
                    </div>
                </div>        

        
    </div>
</div>                
                
                    <!-- <div id="sprintcontainer"> -->
<script>

  $(function () {
      var demo1 = $('#h_color');

       demo1.colorpickerplus();
       demo1.on('changeColor', function(e,color){
          
            if(color==null){
              $(this).val('transparent').css('background-color', '#b59972');//tranparent
              }else{
            $(this).val(color).css('background-color', color);
          }
      });
  
   });
</script>









