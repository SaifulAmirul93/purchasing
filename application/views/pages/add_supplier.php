
<body>

    <div id="wrapper">

        <!-- Navigation -->
     


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Supplier</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                  
                       <form role="form" action="<?= site_url('purchase_v1/dashboard/addSupplier'); ?>" method="post" id="supplier-form">

                                        <div class="row">
                                            <div class=" col-md-4">
                                                <h3 class="page-header">Supplier Details</h3>
                                            </div>
                                        </div>

                                        <div class="row">
                                                <div class="form-group">
                                                

                                                    <div class="form-group">
                                                        <label class="col-md-2" >Supplier Name</label> 
                                                        <div class=" col-md-3"> 
                                                        
                                                                <input type="text" name="supplier_name" id="supplier_name" class="form-control">
                                                
                                            
                                                        </div>
                                                    </div>
                                                </div>
                                         </div>

                                           <div class="row">
                                            <div class="form-group">
                                            
                                              <div class="form-group">
                                                        <label class="col-md-2" >Email</label> 
                                                        <div class=" col-md-3">  
                                                                <input type="email" name="supplier_email" id="supplier_email" class="form-control">
                                            
                                                    </div>
                                                </div>
                                          </div>
                                        </div>


                                           <div class="row">
                                            <div class="form-group">
                                            
                                              <div class="form-group">
                                                        <label class="col-md-2" >Contact No.</label> 
                                                        <div class=" col-md-3">
                                                              
                                                                <input type="text" name="supplier_contact" id="supplier_contact" class="form-control">
                                                            
                                            
                                                    </div>
                                                </div>
                                          </div>
                                        </div>


                                           <div class="row">
                                            <div class="form-group">
                                            
                                              <div class="form-group">
                                                        <label class="col-md-2" >Company Name</label> 
                                                        <div class=" col-md-3">  
                                                    
                                                                <input type="text" name="supplier_company" id="supplier_company" class="form-control">
                                                            
                                            
                                                    </div>
                                                </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                                <div class="form-group">
                                                <div class="clear" style="height:10px;"></div>
                                                    <div class="form-group">
                                                        <label class="col-md-2" >Address</label> 
                                                    
                                                     <div class=" col-md-5">  
                                                        
                                                <textarea type="text" name="supplier_address" id="supplier_address" class="form-control" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                                        
                                            
                                                       </div>
                                                    </div>
                                                </div>
                                        </div>


                                        <div class="row">
                                            <div class="form-group">
                                                <div class="clear" style="height:10px;"></div>
                                                    <div class="form-group">
                                                        <label class="col-md-2" >Note</label> 
                                                        <div class="clear" style="height:30px;"></div>
                                                     <div class=" col-md-12">  
   
                                                <textarea name="supplier_note" id="supplier_note" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                            
                                                       </div>
                                                    </div>
                                            </div>
                                        </div>
                        
                        
                                        <div class="clear" style="height: 50px;"></div>
                                             <div class="row">
                                              <div class=" col-md-5">
                                                <button type="submit" class="btn btn-success">Add Supplier</button>
                                                <button type="reset" class="btn btn-danger">Reset</button> 
                                                <a href="<?= site_url('purchase_v1/dashboard/page/a1'); ?>" name="c5">    
                                                    <button type="button" class="btn btn-warning">Back</button>
                                                </a>
                                                </div> 
                                            </div> 

                                        <div class="clear" style="height: 50px;"></div>                 
                    </form>
                
                
                    <!-- <div id="sprintcontainer"> -->

                  
            </div>
            <!-- /.container-fluid -->
         </div>
        <!-- /#page-wrapper -->

    </div>
    </div>
    <!-- /#wrapper -->


<script>

$(document).ready(function () {

    $('#supplier-form').validate({
        rules: {
            supplier_name: {
                required: true
            },
            supplier_contact: {
                minlength: 2,
                required: true
            },
            supplier_company: {
                minlength: 2,
                required: true
            },
            supplier_address: {
                minlength: 2,
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.control-group').removeClass('has-success').addClass('has-error');
        },
        success: function (element) {
            element.addClass('valid')
                .closest('.control-group').removeClass('has-error').addClass('has-success');
        }
    });

});


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






   

</body>

</html>
