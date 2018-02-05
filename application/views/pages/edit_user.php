                  
                       <form role="form" method="post" action="<?= site_url('purchase_v1/dashboard/updateUser'); ?>" id="user-form">

                                        <div class="row">
                                            <div class=" col-md-4">
                                                <h3 class="page-header">User Details</h3>
                                            </div>
                                        </div>

                                        <div class="row">
                                                 <div class="form-group">
                                                   

                                             
                                                   
                                                    <div class="form-group">
                                                        <label class="col-md-2" >First Name</label> 
                                                        <div class=" col-md-3">  
                                                                <input class="form-control" name="us_fname" id="us_fname" value="<?= $arr->us_fname; ?>">
                                            
                                                    </div>
                                                </div>

                                                     
                                                    <div class="form-group">
                                                        <label class="col-md-2" >Last Name</label> 
                                                        <div class=" col-md-3">  
                                                                <input class="form-control" name="us_lname" id="us_lname"  value="<?= $arr->us_lname; ?>">
                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <div class="row">
                                            <div class="form-group">
                                            
                                              <div class="form-group">
                                                        <label class="col-md-2" >Username</label> 
                                                        <div class=" col-md-3">  
                                                                <input class="form-control" name="us_username" id="us_username"  value="<?= $arr->us_username; ?>">
                                            
                                                    </div>
                                                </div>
                                                    

                            
                                              <div class="form-group">
                                                        <label class="col-md-2" >Email</label> 
                                                        <div class=" col-md-3">  
                                                      
                                                            <input type="email" class="form-control" name="us_email" id="us_email" value="<?= $arr->us_email; ?>">
                                            
                                                    </div>
                                                </div>
                                                    

                                            </div>
                                           
                                        </div>

                                          <div class="row">
                                              
                                            <div class="form-group">         
                                              <div class="form-group">
                                                        <label class="col-md-2" >Membership</label> 
                                                        <div class=" col-md-3">  
                                                                  <select class="form-control" name="ul_id" id="ul_id">
                                                            <?php foreach ($lvl as $key) {
                                                                ?>
                                                                <option value="<?= $key->ull_id; ?>" <?php if($key->ull_id == $arr->ul_id){echo " selected ";} ?>> <?= $key->ul_desc; ?></option>
                                                                <?php
                                                            } ?>
                                                            
                                                        </select>
                                            
                                                    </div>
                                                </div>
                                                </div>

                                            
                                        </div>


                                        <div class="row">
                                                <div class=" col-md-4">
                                                    <h3 class="page-header">Password</h3>
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
                                                      
                                                            <input type="password" class="form-control" id = "pass2">
                                            
                                                    </div>
                                            </div>
                                        </div>

                                        <input type="hidden" name="id" id="inputId" class="form-control" value="<?= $this->my_func->scpro_encrypt($arr->us_id); ?>">
                                        <div class="clear" style="height: 50px;"></div>
                                         <div class="row">
                                            <div class=" col-md-5">
                                                <button type="submit" class="btn btn-success">Save</button>
                                                <button type="reset" class="btn btn-danger">Reset</button>
                                                 <a href="<?= site_url('purchase_v1/dashboard/page/a25'); ?>" name="c5"> 
                                                  <button type="button" class="btn btn-warning">Back</button>
                                                </a>
                                            </div>

                                        </div>                  
                    </form>


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






   

</body>

</html>
