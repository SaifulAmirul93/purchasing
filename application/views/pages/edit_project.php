
<body>

    <div id="wrapper">

        <!-- Navigation -->
     


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit Project</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                  
                       <form role="form" action="<?= site_url('purchase_v1/dashboard/editProject'); ?>" method="post" id="supplier-form">

                                        <div class="row">
                                            <div class=" col-md-4">
                                                <h3 class="page-header">Project Details</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <div class="form-group">
                                                

                                                    <div class="form-group">
                                                        <label class="col-md-2" >Project Code</label> 
                                                        <div class=" col-md-3"> 
                                                        
                                                                <input type="text" name="code" id="code" class="form-control" value="<?= $arr->project_code; ?>" required="">
                                                
                                            
                                                        </div>
                                                    </div>
                                                </div>
                                         </div>
                                        <div class="row">
                                                <div class="form-group">
                                                

                                                    <div class="form-group">
                                                        <label class="col-md-2" >Project Name</label> 
                                                        <div class=" col-md-3"> 
                                                        
                                                                <input type="text" name="name" id="name" class="form-control" value="<?= $arr->project_name; ?>" required="">
                                                
                                            
                                                        </div>
                                                    </div>
                                                </div>
                                         </div>

                                          <div class="row">
                                                 <div class="form-group">
                                                     <div class="form-group">
                                                        <label class="col-md-2">Department :</label>
                                                        <div class=" col-md-2">
                                                        <select class="form-control" name="department" id="department" required>
                                                        <option value="-1">--Select Department--</option>
                                                            <?php foreach ($lvl as $key) {
                                                                            ?>
                                                                            <option value="<?= $key->dp_id; ?>" <?php if($key->dp_id == $arr->dt_id){echo " selected ";} ?>> <?= $key->dp_name; ?>
                                                                                
                                                                            </option>
                                                                            <?php
                                                                        } ?>
                                                        </select>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>

                                          <div class="row">
                                                <div class="form-group">
                                                

                                                    <div class="form-group">
                                                        <label class="col-md-2" >Person-In Change</label> 
                                                        <div class=" col-md-3"> 
                                                        
                                                                <input type="text" name="incharge" id="incharge" class="form-control" required="" value="<?= $arr->Incharge; ?>">
                                                
                                            
                                                        </div>
                                                    </div>
                                                </div>
                                         </div>
                        
                                        <input type="hidden" name="id" id="inputId" class="form-control" value="<?= $arr->projek_id; ?>">
                                        <div class="clear" style="height: 50px;"></div>
                                             <div class="row">
                                              <div class=" col-md-5">
                                                <button type="submit" class="btn btn-success">Save</button>
                                                
                                                <a href="<?= site_url('purchase_v1/dashboard/page/d2'); ?>" name="c5">    
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
