<link href="<?= base_url(); ?>assets/bootstrap-colorpicker-plus-master/css/bootstrap-colorpicker-plus.css" rel="stylesheet">

<link href="<?= base_url(); ?>assets/bootstrap-colorpicker-plus-master/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<script src="<?= base_url(); ?>assets/bootstrap-colorpicker-plus-master/js/bootstrap-colorpicker.min.js"></script>
<script src="<?= base_url(); ?>assets/bootstrap-colorpicker-plus-master/js/bootstrap-colorpicker-plus.js"></script>

<div class="row">
                
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="row">
                <div class=" col-md-4">
                    <h3>Type Details</h3>
                </div>
            </div>
        </div>
            <div class="panel-body">
                <div class="col-md-12">
                
            
                       <form role="form" method="post" action="<?= site_url('purchase_v1/dashboard/editType'); ?>">

                                        
                                        <div class="row">
                                                <div class="form-group">
                                                

                                                    <div class="form-group">
                                                        <label class="col-md-2" >Type Name</label> 
                                                        <div class=" col-md-3">  
                                                                <input type="text" class="form-control" name="desc" id="desc" value="<?= $arr->ty_desc; ?>" >
                                            
                                                        </div>
                                                    </div>
                                                </div>
                                         </div>

                                           <div class="row">
                                            <div class="form-group">
                                            
                                              <div class="form-group">
                                                        <label class="col-md-2" >Color</label> 
                                                        <div class=" col-md-3">  
                                                                <input  type="text" class="form-control" name="color" id="h_color" value="<?= $arr->ty_color; ?>" style="background-color:<?= $arr->ty_color; ?>">
                                            
                                                        </div>
                                                </div>
                                          </div>
                                        </div>
                                <input type="hidden" name="id" id="inputId" class="form-control" value="<?= $arr->ty_id; ?>">

                                        <div class="clear" style="height: 50px;"></div>
                                         <div class="row">
                                            <div class=" col-md-5">
                                                 
                                                <button type="submit" class="btn btn-success">Update</button>
                                               
                                                <a href="<?= site_url('purchase_v1/dashboard/page/t1'); ?>" name="c5"> 
                                                  <button type="button" class="btn btn-warning">Back</button>
                                                </a>
                                            </div> 
                                        </div>  
                                        <div class="clear" style="height: 50px;"></div>                

                        </form>
                    </div>
                </div>        

        
    </div>
</div>

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