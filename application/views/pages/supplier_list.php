

                  
                     <div class="row">
                
                    <div class="panel panel-info">
                        <div class="panel-heading">

                                            
                

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
                                            <?php echo $supplier->su_name; ?> 
                                            </td>
                                            <td><?php echo $supplier->su_company; ?> </td>
                                            <td><?php echo $supplier->su_contact; ?> </td>
                                            <td><?php echo $supplier->su_email; ?></td>
                                            <td>
                                            <center>
                                            <a href="<?= site_url('purchase_v1/dashboard/page/c12?view=').$supplier->su_id; ?>" name="c5" title="View Supplier">
                                            <button type="button" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></button></a>
                                            &nbsp;
                                            <a href="<?= site_url('purchase_v1/dashboard/page/c11?edit=').$supplier->su_id; ?>" name="c5" title="Edit Supplier">
                                            <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button>
                                            </a>
                                             &nbsp;
                                             <a onclick = "return onDel();" href="<?= site_url('purchase_v1/dashboard/page/a13?delete=').$supplier->su_id; ?>" name="c5" title="Delete Supplier">
                                             <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-close"></i></button></a>
                                            </td>
                                        </tr>
                                    <?php
                                           endforeach;
                                
                    
                                        ?>
                                 
                                    </tbody>
                                    <?php if (isset($page)) {?>
                            <tfoot>
                                <td colspan="6">
                                <div class="col-md-5 col-sm-5">
                                    <div class="dataTables_info" id="sample_1_info" role="status" aria-live="polite">Showing <?= ($page+1); ?> to <?= ($page+$row); ?> of <?= $total; ?> records</div>
                                </div>
                                <div class="col-md-7 col-sm-7" align="right">
                                    <div class="dataTables_paginate paging_bootstrap_full_number" id="sample_1_paginate">
                                        <ul class="pagination" style="visibility: visible;">
                                        <?php
                                        $prev = "";
                                        $next = "";
                                            if ($page == 0) {
                                                $prev = "disabled";
                                            }
                                            if ($total <= ($page + 10)) {
                                                $next = "disabled";
                                            }
                                        ?>
                                            <li class="prev <?= $prev; ?>"><a <?php if($prev!="disabled"){ ?>href="<?= site_url('purchase_v1/dashboard/page/a6?page='.($page-10)); ?>"<?php } ?> title="Prev" ><i class="fa fa-angle-left"></i></a></li>                                            
                                            <li class="next <?= $next; ?>"><a <?php if($next!="disabled"){ ?>href="<?= site_url('purchase_v1/dashboard/page/a6?page='.($page+10)); ?>"<?php } ?> title="Next"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                </td>
                            </tfoot> <?php 
                            } ?>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                
         
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



