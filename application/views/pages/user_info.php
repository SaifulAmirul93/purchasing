
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                User Information
                            </div>
                            <div class="panel-body">
                                 <form role="form">

                                     

                                        <div class="row">
                                                 <div class="form-group">
                                                   

                                             
                                                   
                                                    <div class="form-group">
                                                        <label class="col-md-2" >First Name</label> 
                                                        <div class=" col-md-3">  
                                                                <input type="text" class="form-control" name="" id="">
                                            
                                                    </div>
                                                </div>

                                                     
                                                    <div class="form-group">
                                                        <label class="col-md-2" >Last Name</label> 
                                                        <div class=" col-md-3">  
                                                                <input type="text" class="form-control" name="" id="">
                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <div class="row">
                                            <div class="form-group">
                                            
                                              <div class="form-group">
                                                        <label class="col-md-2" >Username</label> 
                                                        <div class=" col-md-3">  
                                                                <input type="text" class="form-control" name="" id="">
                                            
                                                    </div>
                                                </div>
                                                    

                            
                                              <div class="form-group">
                                                        <label class="col-md-2" >Email</label> 
                                                        <div class=" col-md-3">  
                                                      
                                                            <input type="email" class="form-control" name="" id="" >
                                            
                                                    </div>
                                                </div>
                                                    

                                            </div>
                                           
                                        </div>

                                        <div class="row">
                                                <div class=" col-md-4">
                                                    <h4 class="page-header">Password</h4>
                                                </div>
                                               
                                        </div>


                                        <div class="row">
                                                 <div class="form-group" id="p1">
                                                   
                                                        <label class="col-md-2" >Password</label> 
                                                         
                                                         <div class=" col-md-3">  
                                                            <div class="form-group input-group">
                                                                <input type="password" class="form-control" id = "us_pass"  name="us_pass">
                                                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                              
                                        <div class="row">
                                                 <div class="form-group" id="p2">
                                                                                                      
                                                        <label class="col-md-2" >Re-Enter Password</label> 
                                                         
                                                          <div class=" col-md-3">  
                                                      
                                                            <input type="password" class="form-control" id = "pass2" name="us_pass1">
                                            
                                                    </div>
                                            </div>
                                        </div>


                                                     
                        

                        </div>
                          
                            <div class="panel-footer">
                                <div class="row">
                                        <div class="form-group">
                                        <div class=" col-md-3">  
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                                <button type="reset" class="btn btn-danger">Cancel</button>
                                            </div> 
                                        </div> 
                                    </div>
                            </div>
                        </form>
                        </div>
                    </div>
                
                     
             

                  
            </div>
  

<script>

$(document).ready(function() {

   

                $('#us_pass').keyup(function() {
                    if ($(this).val() == "") {
                        $("#p1").prop('class', 'form-group');
                        $("#pass2").val("");
                        $("#p2").prop('class', 'form-group');
                        $("#btnSubmit").removeProp('disabled');
                    }else{
                        $("#p1").prop('class', 'form-group has-warning');
                        $("#btnSubmit").prop('disabled', 'disabled');
                    }
                });
                $('#pass2').keyup(function() {
                    if ($(this).val() == "" || $(this).val() != $('#us_pass').val()) {
                        $("#p1").prop('class', 'form-group has-warning');
                        $("#p2").prop('class', 'form-group has-error');
                        $("#btnSubmit").prop('disabled', 'disabled');
                    }else{
                        $("#p1").prop('class', 'form-group has-success');
                        $("#p2").prop('class', 'form-group has-success');
                        $("#btnSubmit").removeProp('disabled');
                    }
                });
            });


</script>




   