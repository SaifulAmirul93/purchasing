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

    <!-- DataTables CSS -->
    <link href="<?= base_url(); ?>vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?= base_url(); ?>vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    


    <!-- Custom CSS -->
    <link href="<?= base_url(); ?>dist/css/sb-admin-2.css" rel="stylesheet">

     <!-- Morris Charts CSS -->
    <link href="<?= base_url(); ?>vendor/morrisjs/morris.css" rel="stylesheet">

    
    <!-- Custom Fonts -->
    <link href="<?= base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

     <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?= base_url(); ?>dist/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <style type="text/css">
        body{
        background: -webkit-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Chrome 10+, Saf5.1+ */
         background:    -moz-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* FF3.6+ */
         background:     -ms-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* IE10 */
         background:      -o-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Opera 11.10+ */
        background:         linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* W3C */


    </style>

</head>

<body>

                              
    <div class="container">

      <div class="col-lg-12"> 
                    
                <div class="row">
                
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        <h1>
                        <?php foreach ($code as $pur){ ?>
                        <?= $pur->project_name; ?>
                        <?php } ?>
                        </h1>
                                            
                                                         
                           

                           
                       


                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                             <a href="<?= site_url(''); ?>">  
                                                      
                            <button type="button" class="btn btn-info pull-right"> Back</button>

                            </a>

                            <br><br><br>
                            <div class="tableL">
                                <table class="table table-striped table-bordered table-hover tableL" id="dataTables-example" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Supplier Name</th>
                                            <th>Purchase No</th>
                                            <!-- <th>Made By</th> -->
                                            <th>Purchase Date</th>
                                            <th>Delivery Date</th>
                                            <th>Status</th>
                                            <th>Payment</th>
                                            <th>Invoice</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                $n = 0; 
                                    if($arr!= null){
                                    foreach ($arr as $pur){
                                        $n++;
                                        ?>
                                        <tr>
                                            <td><?= $n; ?></td>
                                            <td><?= $pur->supplier_name; ?> </td>
                                            <td>
                                            <?php 
                                            if ($pur->pur_id) {
                                                $id = '#'.(110000+$pur->pur_id);
                                                echo '<span style = "color : #3F6AFE;"><strong>'.$id.'</strong></span>';
                                            } else {
                                                echo "--Not Set--";
                                            }
                                            ?>


                                            </td>
                                            <!-- <td><?= $pur->us_username; ?></td> -->
                                            <td><?= $pur->pur_date; ?></td>
                                            <td><?= $pur->deli_date; ?></td>
                                            <td><span class="label" style = "background-color : <?= $pur->pro_color; ?>"><strong><?= $pur->pro_desc; ?></strong></span></td>
                                            <td align="center">
                                            <?php if($pur->pay == 0){ ?>
                                            <a class="uc" id="up<?= $n; ?>">
                                            <img src="<?= base_url(); ?>dist/img/unpaid_tag.png" width="38" height="63">
                                            <input type="hidden" class="form-control up<?= $n; ?>" value="<?= $pur->pur_id; ?>">
                                            </a>
                                            <?php } else if ($pur->pay == 1) { ?>
                                               <a class="uc" id="up<?= $n; ?>">
                                            <img src="<?= base_url(); ?>dist/img/50paid_tag.png" width="38" height="63">
                                            <input type="hidden" class="form-control up<?= $n; ?>" value="<?= $pur->pur_id; ?>">
                                            </a>
                                            
                                            <?php } else if ($pur->pay == 2) { ?>
                                               <a class="uc" id="up<?= $n; ?>">
                                            <img src="<?= base_url(); ?>dist/img/paid_tag.png" width="38" height="63">
                                            <input type="hidden" class="form-control up<?= $n; ?>" value="<?= $pur->pur_id; ?>">
                                            </a>
                                            <?php     
                                            } ?>
                                            </td>
                                            <td align="center">
                                            <?php if($pur->pr_inv!=null){ ?>
                                            <div title="Paid" id="gmbr<?= $n ?>" class="bayar" >
                                            <img src="<?= base_url(); ?>dist/img/Easy Invoice Mac App Icon.png" width="50" height="50">
                                            </div>
                                            <input type="hidden" class="form-control gmbr<?= $n ?>" value="<?= $pur->pur_id; ?>">
                                            </td>
                                            
                                            <?php }?>
                                            <td align="center">
                                            <a href="<?= site_url('purchase_v1/dashboard/page/s30?view=').$pur->pur_id; ?>" name="c5" title="View Purchase">
                                            <button type="button" class="btn btn-info btn-md" title="View"><i class="fa fa-eye"></i></button></a>
                                            </td>
                                          
                                        </tr>
                                          <?php
                                           }
                                       }
                                       else{
                                        ?>
                                        <td colspan=11><strong><center>No Purchase</center></Strong></td>
                                        <?php
                                       }
                                
                    
                                        ?>
                                        
                                      
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <!-- /.table-responsive -->
                        <div id="fileUp" style="display:none;">
                    
                </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
    </div>

    <script type="text/javascript">
          $(document).ready(function() {
            $(".upPic").click(function() {
            hid = $(this).prop('id');
            purid = $('.'+hid).val();
            $.post('<?= site_url('purchase_v1/dashboard/getAjaxUpload'); ?>', {pur_id : purid}, function(data) {
                $.when($(".tableL").fadeOut("slow")).then(function(){
                    $.when($("#fileUp").html(data)).then(function(){$("#fileUp").fadeIn("fast");});
                });             
            });
            /*bootbox.alert("Hello world!", function() {
                //console.log("Alert Callback");
            });*/
        }); 


$(".bayar").click(function() {
            gbr = $(this).prop("id");
            purid = $("."+gbr).val();
            $.post('<?= site_url('purchase_v1/dashboard/getAjaxImg'); ?>', {pur_id: purid}, function(data) {
                bootbox.dialog({message : data});
            });         
        });



         $('#dataTables-example').DataTable({
            responsive: true
        });
         });
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 <!-- jQuery -->
    <script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>dist/datepicker/js/bootstrap-datepicker.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= base_url(); ?>vendor/metisMenu/metisMenu.min.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url(); ?>dist/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
   

    <!-- DataTables JavaScript -->
    <script src="<?= base_url(); ?>vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>vendor/datatables-responsive/dataTables.responsive.js"></script>
   
       <!-- Morris Charts JavaScript -->
    <script src="<?= base_url(); ?>vendor/raphael/raphael.min.js"></script>
    <script src="<?= base_url(); ?>vendor/morrisjs/morris.min.js"></script>
    <script src="<?= base_url(); ?>data/morris-data.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url(); ?>dist/js/sb-admin-2.js"></script> 
    <!-- Validate JavaScript -->
    <script src="<?= base_url(); ?>dist/validate/jquery.validate.js"></script> 
     <!-- Validate JavaScript -->
    <script src="<?= base_url(); ?>dist/validate/additional-methods.js"></script> 

    <script src="<?= base_url(); ?>dist/bootbox/bootbox.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>vendor/datatables-responsive/dataTables.responsive.js"></script>

</body>

</html>
