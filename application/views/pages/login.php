<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NASTY - Purchasing System</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?= base_url(); ?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url(); ?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <style type="text/css">
        body{
        background: -webkit-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Chrome 10+, Saf5.1+ */
         background:    -moz-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* FF3.6+ */
         background:     -ms-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* IE10 */
         background:      -o-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Opera 11.10+ */
        background:         linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* W3C */
        }

    </style>

</head>

<body>

                              
    <div class="container">

        <div class="row vertical-offset-100">
                <div class="clear" style="height: 50px">
                                    
                                </div>
            <div class="col-md-4 col-md-offset-4">
                    <div  align="center">
                             <img src="<?= base_url(); ?>dist/img/purchase1.png" class="img-responsive"/>
                    </div>
                    <div class="clear" style="height: 20px">
                                    
                                </div>
                     <div class="row">                   
                                    <div class="col-md-12">
                                <?php if($this->session->flashdata('success')){ ?>
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                            <strong><i class="fa fa-check"></i>  Success!</strong> <?= $this->session->flashdata('success'); ?>
                                        </div>
                                <?php } if($this->session->flashdata('warning')){
                                ?>
                                        <div class="alert alert-warning alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                            <strong><i class="fa fa-exclamation-triangle"></i> Warning!</strong> <?= $this->session->flashdata('warning'); ?>
                                        </div>
                                <?php } if($this->session->flashdata('info')){ ?>
                                        <div class="alert alert-info alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                            <strong><i class="fa fa-info-circle"></i> Info!</strong> <?= $this->session->flashdata('info'); ?>
                                        </div>
                                <?php } if($this->session->flashdata('error')){ ?>
                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                            <strong><i class="fa fa-times-circle-o"></i> Error!</strong> <?= $this->session->flashdata('error'); ?> 
                                        </div>
                                <?php } ?>
                                    </div>
                    </div>





                <div class="login-panel panel panel-primary">
                    
                    <div class="panel-heading">
                     
                        <h3 class="panel-header" align="center">Login Form</h3>
                    </div>
                    <div class="panel-body">
                                <div class="clear" style="height: 20px">
                                    
                                </div>
                        <form role="form" action="<?= site_url('Login/signin'); ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" id="us_email" name="us_email" type="email" autofocus required="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" id="us_pass" name="us_pass" type="password"  required="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <hr>
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= base_url(); ?>vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url(); ?>dist/js/sb-admin-2.js"></script>

</body>

</html>
