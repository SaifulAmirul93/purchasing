

<script type="text/javascript">



$(document).ready(function () {

	var chart = AmCharts.makeChart("chartdiv", {
    "theme": "light",
    "type": "serial",
    "startDuration": 2,
    "dataProvider": [  <?php 
              $n = 0;
              if (sizeof($arr) != 0) {

                // if(is_array($arr1))
                // {
                $num=0;
                  foreach ($arr as $data) {
                      if ($n != 0) {
                      echo "},";
                      }else{ $n++;}
                      echo "{";   
                      ?>
                    "item": "<?= $data->name; ?>",
                    "quantity": <?= $data->total; ?>,
                   "color": "#50A3A2"
                    <?php
                  }
              } else{
                  echo "{"; ?>
                  "item": 'No Data',
                "quantity": 0,
                "color": "black"
              <?php    
              }            
        ?>

  }
], "titles": [ {
  "text":"Total Quantity of <?php if($cat==null){ echo "";}else{ echo $cat->cat_name;} ?> <?php if($item==null){ echo "";}else{ echo $item->item_name;}  ?><?php if($supp==null){ echo "";}else{ echo $supp->supplier_name." Items";}  ?>",
    "size": 15
    
  } ],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillColorsField": "color",
        "fillAlphas": 1,
        "lineAlpha": 0.1,
        "type": "column",
        "valueField": "quantity"
    }],
    "depth3D": 20,
    "angle": 30,
    "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
    },
    "categoryField": "item",
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 45
    },
    "export": {
        "enabled": true
     }
     });



      var chart = AmCharts.makeChart("chartdiv5", {
    "theme": "light",
    "type": "serial",
    "startDuration": 2,
    "dataProvider": [  <?php 
              $n = 0;
              if (sizeof($arr2) != 0) {

                // if(is_array($arr1))
                // {
                $num=0;
                  foreach ($arr2 as $data) {
                      if ($n != 0) {
                      echo "},";
                      }else{ $n++;}
                      echo "{";   
                      ?>
                    "item": "<?= $data->name; ?>",
                    "quantity": <?= $data->price; ?>,
                   "color": "#50A3A2"
                    <?php
                  }
              } else{
                  echo "{"; ?>
                  "item": 'No Data',
                "quantity": 0,
                "color": "black"
              <?php    
              }            
        ?>

  }
], "titles": [ {
  "text":"Total Value of <?php if($cat==null){ echo "";}else{ echo $cat->cat_name;} ?> <?php if($item==null){ echo "";}else{ echo $item->item_name;}  ?><?php if($supp==null){ echo "";}else{ echo $supp->supplier_name." Items";}  ?> (price not including gst)",
    "size": 15
    
  } ],
    "graphs": [{
        "balloonText": "[[category]]: <b>[[value]]</b>",
        "fillColorsField": "color",
        "fillAlphas": 1,
        "lineAlpha": 0.1,
        "type": "column",
        "valueField": "quantity"
    }],
    "valueAxes": [{
        "unit": "MYR",
        "position": "left",
        "title": "Total Value",
    }],
    "depth3D": 20,
    "angle": 30,
    "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 0,
        "zoomable": false
    },
    "categoryField": "item",
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 45
    },
    "export": {
        "enabled": true
     }
     });

});



</script>
