
<div class="row">
                
    <div class="panel panel-success">
        <div class="panel-heading">
            <div class="row">
                <div class=" col-md-4">
                    <h3>Type Details</h3>
                </div>
            </div>
        </div>
            <div class="panel-body">
                <div class="col-md-12">
                                       
                                        <div class="row">
                                                <div class="form-group">
                                                

                                                    <div class="form-group">
                                                        <label class="col-md-2" >Type Name</label> 
                                                        <div class=" col-md-3">  
                                                                <input class="form-control" name="item_name" id="item_name" value="<?= $arr->ty_desc; ?>" disabled>
                                            
                                                        </div>
                                                    </div>
                                                </div>
                                         </div>

                                           <div class="row">
                                            <div class="form-group">
                                            
                                              <div class="form-group">
                                                        <label class="col-md-2" >Category</label> 
                                                        <div class=" col-md-3">  
                                                                <input class="form-control" name="item_name" id="item_name" value="<?= $arr->ty_color; ?>" disabled>
                                            
                                                        </div>
                                                </div>
                                          </div>
                                        </div>

                                        <div class="clear" style="height: 50px;"></div>
                                         <div class="row">
                                            <div class=" col-md-5">
                                                 <a href="<?= site_url('purchase_v1/dashboard/page/t4?edit=').$arr->ty_id; ?>" name="c5" title="Edit Type">

                                                <button type="button" class="btn btn-success">Edit Type</button>
                                                </a>
                                                <a href="<?= site_url('purchase_v1/dashboard/page/t1'); ?>" name="c5"> 
                                                  <button type="button" class="btn btn-warning">Back</button>
                                                </a>
                                            </div> 
                                        </div>  
                                        <div class="clear" style="height: 50px;"></div>                

            </div>
        </div>          
    </div>
</div>