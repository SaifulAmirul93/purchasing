
                  
                       <form role="form" method="post" action="<?= site_url('purchase_v1/dashboard/addItem'); ?>">

                                        <div class="row">
                                            <div class=" col-md-4">
                                                <h3 class="page-header">Item Details</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <div class="form-group">
                                                

                                                    <div class="form-group">
                                                        <label class="col-md-2" >Item Code</label> 
                                                        <div class=" col-md-3">  
                                                                <input class="form-control" name="item_name" id="item_name" value="<?= $arr->sku_no; ?>" disabled>
                                            
                                                        </div>
                                                    </div>
                                                </div>
                                         </div>
                                        <div class="row">
                                                <div class="form-group">
                                                

                                                    <div class="form-group">
                                                        <label class="col-md-2" >Item Name</label> 
                                                        <div class=" col-md-3">  
                                                                <input class="form-control" name="item_name" id="item_name" value="<?= $arr->item_name; ?>" disabled>
                                            
                                                        </div>
                                                    </div>
                                                </div>
                                         </div>

                                           <div class="row">
                                            <div class="form-group">
                                            
                                              <div class="form-group">
                                                        <label class="col-md-2" >Category</label> 
                                                        <div class=" col-md-4">
                                                        

                                                         
                                                           
                                                            <?php foreach ($lvl as $key) {
                                                            
                                                               if($key->catt_id == $arr->cat_id)
                                                               {
                                                                echo " <input class='form-control' name='item_name' id='item_name' value='$key->cat_name'' disabled>";
                                                            } 
                                                            
                                                            } ?>
                                                            
                                                     
                                                    </div>
                                                </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                                <div class="form-group">
                                                <div class="clear" style="height:10px;"></div>
                                                    <div class="form-group">
                                                        <label class="col-md-2" >Description</label> 
                                                        <div class="clear" style="height:20px;"></div>
                                                     <div class=" col-md-12">  
   
                                                <textarea name="item_desc" id="item_desc" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled="true"><?= $arr->item_desc; ?></textarea>
                                            
                                                       </div>
                                                    </div>
                                                </div>
                                        </div>
                        
                                        <div class="clear" style="height: 50px;"></div>
                                         <div class="row">
                                            <div class=" col-md-5">
                                                <button type="submit" class="btn btn-success">Add Item</button>
                                                
                                                <a href="<?= site_url('purchase_v1/dashboard/page/a27'); ?>" name="c5"> 
                                                  <button type="button" class="btn btn-warning">Back</button>
                                                </a>
                                            </div> 
                                        </div>  
                                        <div class="clear" style="height: 50px;"></div>                
                    </form>
                
                
   




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





