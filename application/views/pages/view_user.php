      
                       <form role="form" method="post" action="" id="user-form">

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
                                                                <input class="form-control" name="fname" id="fname" value="<?= $arr->us_fname; ?>" disabled>
                                            
                                                    </div>
                                                </div>

                                                     
                                                    <div class="form-group">
                                                        <label class="col-md-2" >Last Name</label> 
                                                        <div class=" col-md-3">  
                                                                <input class="form-control" name="lname" id="lname"  value="<?= $arr->us_lname; ?>" disabled>
                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <div class="row">
                                            <div class="form-group">
                                            
                                              <div class="form-group">
                                                        <label class="col-md-2" >Username</label> 
                                                        <div class=" col-md-3">  
                                                                <input class="form-control" name="username" id="username"  value="<?= $arr->us_username; ?>" disabled>
                                            
                                                    </div>
                                                </div>
                                                    

                            
                                              <div class="form-group">
                                                        <label class="col-md-2" >Email</label> 
                                                        <div class=" col-md-3">  
                                                      
                                                            <input type="email" class="form-control" name="email" id="email" value="<?= $arr->us_email; ?>" disabled>
                                            
                                                    </div>
                                                </div>
                                                    

                                            </div>
                                           
                                        </div>

                                          <div class="row">
                                              
                                            <div class="form-group">         
                                              <div class="form-group">
                                                        <label class="col-md-2" >Membership</label> 
                                                        <div class=" col-md-3"> 


                                                             <?php foreach ($lvl as $key) {
                                                            
                                                               if($key->ull_id == $arr->ul_id)
                                                               {
                                                                echo " <input class='form-control' name='item_name' id='item_name' value='$key->ul_desc' disabled>";
                                                            } 
                                                            
                                                            } ?>




                                                               
                                            
                                                    </div>
                                                </div>
                                                </div>

                                            
                                        </div>


                                    

                                        
                                        <div class="clear" style="height: 50px;"></div>
                                         <div class="row">
                                            <div class=" col-md-5">
                                              <a href="<?= site_url('purchase_v1/dashboard/page/c24?edit=').$this->my_func->scpro_encrypt($arr->us_id); ?>" name="c5" title="Edit Supplier">
                                                <button type="button" class="btn btn-success">Edit</button></a>
                                              
                                                 <a href="<?= site_url('purchase_v1/dashboard/page/a25'); ?>" name="c5"> 
                                                  <button type="button" class="btn btn-warning">Back</button>
                                                </a>
                                            </div>

                                        </div>                  
                    </form>
                

<script>

$(document).ready(function() {

                $('#user-form').validate({
        rules: {
            us_username: {
                required: true
            },
            us_pass: {
        
                required: true
            },
            pass2: {
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.control-group').removeClass('has-success').addClass('has-error');
        }/*,
        success: function (element) {
            element.addClass('valid')
                .closest('.control-group').removeClass('has-error').addClass('has-success');
        }*/
    });






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


