<!-- Styles -->
<style>
#chartdiv,#chartdiv2,#chartdiv3,#chartdiv5 {
  width: 100%;
  height: 500px;
}
#chartdiv3 {
  width: 100%;
  height: 350px;
}
.display-none,
.display-hide {
  display: none; } 

                                
</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<body>

    <div id="wrapper">

         
    

            
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-2 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-question fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge count" data-counter="counterup"><?= $enquiry ?></div>

                                    <div>Enquiry</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge count"><?= $nego ?></div>
                                    <div>Nego</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-text-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge count"><?= $inv ?></div>
                                    <div>Invoice</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-2 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-smile-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge count"><?= $happy ?></div>
                                    <div>Happy Hour</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                 <div class="col-lg-2 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-truck fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge count"><?= $etd ?></div>
                                    <div>ETD</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-map-marker fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge count"><?= $arr ?></div>
                                    <div>Arrived</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>



            </div>
             
                    <div class="row">
            <div class="col-lg-12">
            <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Purchasing Statistic for Each Item
                            <!-- <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <div class="col-lg-2">
                                     <select name="supplier" id="supplier" class="form-control input-circle" required="">
                                        <option value="-1" >Select Supplier</option>
                                                            <?php foreach ($sup as $key) {
                                                                ?>
                                                                <option value="<?= $key->supplier_id; ?>" > <?= $key->supplier_name; ?></option>
                                                                <?php
                                                            } ?>
                                                            
                                    </select>
                                        </div>
                                         <div class="col-lg-3">
                                     <select name="category" id="category" class="form-control input-circle" required="">
                                        <option value="-1" >Select Category</option>
                                                            <?php foreach ($lvl as $key) {
                                                                ?>
                                                                <option value="<?= $key->catt_id; ?>" > <?= $key->cat_name; ?></option>
                                                                <?php
                                                            } ?>
                                                            
                                    </select>
                                        </div>
                                        <div class="col-lg-3" id="divSub">
                                            <select class="form-control input-circle" id="item"  name="item"  disabled="" >
                                        <option value=-1"">Select Item</option>
                                       
                                    </select>
                                        </div>
                                       
                                        <div class="col-lg-2">
                                            <select id="month" class="form-control" required="">
                                                <option value="-1">-- All Month --</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                         <div class="col-lg-1">
                                            <input type="number" name="year" id="year" class="form-control" min="2017" placeholder="Year" required="">
                                        </div>
                                        <div class="col-lg-1">
                                            <button type="button" id="itemBtn" name="itemBtn" class="btn btn-success">Search</button>
                                        </div>                                            
                                        </div>
                                    </div>
                                </div>



                            <div class="row">
                                
                               <div id="site_statistics_loading2" class="display-none">
                                        <center><img src="<?= base_url(); ?>/dist/img/dg-animatedgifs-sept2016-material-loader.gif" alt="loading" width="250" height="188"/> </center>
                                        
                                        </div>
                                        <div id="code">
                                    <div class="clearfix" style="height: 100px"></div>
                                        </div>
                                       <div id="chartdiv" class="display-none"></div>
                                        <div class="clearfix" style="height: 50px"></div>
                                        <div id="chartdiv5" class="display-none"></div>
                            </div>
                          
                        </div>
                       
                    </div>
                    </div>
        </div>

            


            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Purchasing Index
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                        <div class="row">
                         <div class="col-lg-12">
                            <div class="col-lg-2">
                                            <input type="number" name="year" id="year" class="form-control" min="2016" placeholder="Year" required="">
                            </div>
                            <div class="col-lg-4">
                                            <select id="month" class="form-control" required="">
                                                <option value="-1">-- All Month --</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                            </div>

                            <div class="col-lg-4">
                                            <select id="month" class="form-control" required="">
                                                <option value="-1">-- Select Currency --</option>
                                                <option value="1">MYR</option>
                                                <option value="2">USD</option>
                                                
                                            </select>
                            </div>
                            <div class="col-lg-2">
                                            <button type="button" id="itemBtn" name="itemBtn" class="btn btn-info">Generate</button>
                            </div>   
                            </div>
                        </div>
                      
                            <div id="chartdiv2" ></div>
                            <div id="gcode" ></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <!-- <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-money fa-fw"></i> Payment Received
                                    <span class="pull-right text-muted small"><em>Yesterday</em>
                                    </span>
                                </a>
                            </div>
                           
                            <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                        </div>
                        
                    </div> -->
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart 
                        </div>
                        <div class="panel-body">
               
                         </div> -->
                         <div class="clearfix" style="height: 50px "></div>
                            <div id="chartdiv3"></div>
                          <div class="clearfix" style="height: 100px "></div>
                        </div>
                      
                    </div>
                 
            </div>
            <!-- /.row -->
        </div>

        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<script>
$(document).ready(function() {
     $.post('<?= site_url('purchase_v1/dashboard/getAjaxGraph') ?>', {}, function(data) {
        $.when($('#gcode').html(data)).then(function(){
            $("#chartdiv2").removeClass('display-none');
         
        });
    });
 });

</script>
   
<script type="text/javascript">

$(document).ready(function () {


var chart = AmCharts.makeChart( "chartdiv3", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "title": "Enquiry",
    "value": <?= $enquiry ?>
  }, {
    "title": "Negotiate",
    "value": <?= $nego ?>
  },
  {
    "title": "Invoice",
    "value": <?= $inv ?>
  },
  {
    "title": "Happy Hour",
    "value": <?= $happy ?>
  },
  {
    "title": "ETD",
    "value": <?= $etd ?>
  },
  {
    "title": "Arrived",
    "value": <?= $arr ?>
  }



  ],
   "titles": [ {
  "text":"Total Purchase Status",
    "size": 15
    
  } ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius": 5,

  "radius": "42%",
  "innerRadius": "60%",
  "labelText": "[[title]]",
  "export": {
    "enabled": true
  }
} );



$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

$('#category').change(function() {

            temp = $(this).val();

            $.post('<?= site_url('purchase_v1/dashboard/getAjaxSearch'); ?>', {cat_id : temp}, function(data) {
               
                $("#divSub").html(data);
            });
        });

$("#itemBtn").click(function() {
      
        cat2 = $('#category').val();
        item2 = $('#item').val();
        supp2 = $('#supplier').val();

        year = $('#year').val();
        month = $('#month').val();
        if (year == "" && month != -1) {
            bootbox.alert("Year is empty");
            $('#year').focus();
        }
       else{
                   $.when($("#site_statistics_loading2").removeClass('display-none')).then(function(){        
                    $.post('<?= site_url('purchase_v1/dashboard/getAjaxGraph2') ?>', {year1 : year , month1 : month , cat : cat2 , item : item2, supp : supp2}, function(data) 
                    {
                        $.when($('#code').html(data)).then(function(){
                            $("#site_statistics_loading2").addClass('display-none');
                            $("#chartdiv").removeClass('display-none');
                            $("#chartdiv5").removeClass('display-none');
                            
                        });
                    });
                });
        }
                  
    });




});

</script>

</body>

</html>
