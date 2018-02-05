

                       <form role="form">

                                        <div class="row">
                                            <div class=" col-md-4">
                                                <h3 class="page-header">Unit Details</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <div class="form-group">
                                                

                                                    <div class="form-group">
                                                        <label class="col-md-2" >Unit Quantity</label> 
                                                        <div class=" col-md-3"> 
                                                        
                                                                <input type="text" name="unit" id="unit" class="form-control" disabled="" value="<?= $arr->un_desc; ?>">
                                                
                                            
                                                        </div>
                                                    </div>
                                                </div>
                                         </div>
                                   
                                        
                                         
                       
                        
                                        <div class="clear" style="height: 50px;"></div>
                                             <div class="row">
                                              <div class=" col-md-5">
                                              <a href="<?= site_url('purchase_v1/dashboard/page/u3?edit=').$arr->un_id; ?>" name="c5" title="Edit">
                                                <button type="button" class="btn btn-success">Edit</button>
                                                </a>
                                                <a href="<?= site_url('purchase_v1/dashboard/page/u2'); ?>" name="c5">    
                                                    <button type="button" class="btn btn-warning">Back</button>
                                                </a>
                                                </div> 
                                            </div> 

                                        <div class="clear" style="height: 50px;"></div>                 
                    </form>
                
                
            

<script>



  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}





</script>
