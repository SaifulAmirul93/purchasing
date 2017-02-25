

<body>

    <div id="wrapper">

        <!-- Navigation -->
     


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Supplier List</h1>
                    </div>
                 </div>



                    <!-- /.col-lg-12 -->
                  
                     <div class="row">
                
                    <div class="panel panel-default">
                        <div class="panel-heading">

                                            
                                                         
                             <div class=" col-md-3 pull-right">  
                                <div class="form-group input-group">
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                </div>
                            </div>

                            <a href="<?= site_url('purchase_v1/dashboard/page/a62'); ?>">                             
                            <button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add Supplier</button>
                            </a>
                       


                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Company</th>
                                            <th>Contact</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php
                                $n = 0; 
                                
                                    foreach ($arr as $supplier): 
                                        $n++;
                                        ?>


                                        <tr>
                                            <td><?= $n; ?></td>
                                            <td>
                                            <?php echo $supplier->supplier_name; ?> 
                                            </td>
                                            <td><?php echo $supplier->supplier_company; ?> </td>
                                            <td><?php echo $supplier->supplier_contact; ?> </td>
                                            <td><?php echo $supplier->supplier_email; ?></td>
                                            <td>
                                            <a href="<?= site_url('purchase_v1/dashboard/page/c12?view=').$supplier->supplier_id; ?>" name="c5" title="View Supplier">
                                            <button type="button" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></button></a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="<?= site_url('purchase_v1/dashboard/page/c11?edit=').$supplier->supplier_id; ?>" name="c5" title="Edit Supplier">
                                            <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                             &nbsp;&nbsp;&nbsp;
                                             <a onclick = "return onDel();" href="<?= site_url('purchase_v1/dashboard/page/a13?delete=').$supplier->supplier_id; ?>" name="c5" title="Delete Supplier">
                                             <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-close"></i></button></a>
                                            </td>
                                        </tr>
                                    <?php
                                           endforeach;
                                
                    
                                        ?>
                                 
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                
         
            </div>
                
                
                    <!-- <div id="sprintcontainer"> -->

                  
         
            <!-- /.container-fluid -->
         </div>
        <!-- /#page-wrapper -->

    </div>
    </div>

 
  
<script>
function onDel() {
        return confirm('Are You Sure ?');
    }





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








    var $container = $('.task-container');
    var $task = $('.todo-task');

$task.draggable({
    addClasses: false,
    connectToSortable: ".task-container",
});

$container.droppable({
    accept: ".todo-task"
});


$(".ui-droppable").sortable({
    placeholder: "ui-state-highlight",
    opacity: .5,
    helper: 'original',
    beforeStop: function (event, ui) {
        newItem = ui.item;
    },
    receive: function (event, ui) {
//get task-type and task id.
            console.log($(this).closest('.task-header').html());
            var tasktype = $(this).closest('.task-type').html();
            var taskid = $(this).closest('.task-no').html();

            dropElement = $(this).closest('.ui-droppable').attr('id');
            // console.log($(this).closest('.ui-droppable').attr('id'));

            //save the status and the order of the item.
            if (dropElement == "backlog")
            {
                // save the status of the item
            }
            else if (dropElement == "pending")
            {
                // save the status of the 
            }
            else if (dropElement == "inProgress")
            {
            }
            else if (dropElement == "completed")
            {
            }
    }
}).disableSelection().droppable({
    over: ".ui-droppable",
    activeClass: 'highlight',
    drop: function (event, ui) {
        $(this).addClass("ui-state-highlight");
    }
});



</script>






   

</body>

</html>
