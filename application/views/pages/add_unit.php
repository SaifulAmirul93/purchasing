
<body>

    <div id="wrapper">

        <!-- Navigation -->
     


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Unit</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                  
                       <form role="form" action="<?= site_url('purchase_v1/dashboard/addUnit'); ?>" method="post" id="supplier-form">

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
                                                        
                                                                <input type="text" name="unit" id="unit" class="form-control" required="">
                                                
                                            
                                                        </div>
                                                    </div>
                                                </div>
                                         </div>
                                   
                                        
                                         
                        
                        
                                        <div class="clear" style="height: 50px;"></div>
                                             <div class="row">
                                              <div class=" col-md-5">
                                                <button type="submit" class="btn btn-success">Add</button>
                                                
                                                <a href="<?= site_url('purchase_v1/dashboard/page/u2'); ?>" name="c5">    
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
