
    <style type="text/css">
            .task-contain{
             background-color: white;
                border-left: 2px solid #D8D8DC;   
                border-right: 2px solid #D8D8DC;
                border-top: 3px solid #D8D8DC;   
                border-bottom: 3px solid #D8D8DC;
                box-shadow: 0 1px 1px 0 rgba(50, 50, 50, 0.75);
                float: left;
                height: 100%;
                margin: 0;
                min-height: 240px;
                padding: 15px;
                text-align: center;
                width: 30%;
            }

                #sprintcontainer{
                margin: 0 auto;
                width: 100%;
                min-height: 100%;
                background-color: transparent;
                border: 0;
            }

            .task-list {
                background-color: white;
                border-left: 2px solid #D8D8DC;   
                border-right: 2px solid #D8D8DC;
                border-top: 3px solid #D8D8DC;   
                border-bottom: 3px solid #D8D8DC;
                box-shadow: 0 1px 1px 0 rgba(50, 50, 50, 0.75);
                float: left;
                height: 100%;
                margin: 0;
                min-height: 240px;
                padding: 15px;
                text-align: center;
                width: 30%;
            }

            .task-list input, .task-list textarea{
                width: 240px;
                margin: 1px 5px;
            }

            .task-list input{
                height: 30px;
            }

            .todo-task{
                margin: 5px;
                padding: 5px;
                 width: 100%;
                 font-size: 10px;
            }

            .task-body {
                background-color: #EBEBEB;   
                width: 100%;
                min-height:40px;
                clear: both;
            }
            .task-header {
                background-clip: padding-box;
                background-color: #343434;
                border-radius: 2px 2px 0 0;
                color: white;
                font-family: "Lato",sans-serif;
                height: 22px;
                position: relative;
            }
            .task-footer {
                background-clip: padding-box;
                background-color: #EBEBEB;
                border-radius: 0 0 2px 2px;
                color: gray;
                height: 22px;
                position: relative;
            }
            .task-no {
             float:left;
             padding: 2px;
            }
            .task-type {
             float:left;
             padding: 2px;
            }
            .task-date {
             float:left;
             padding: 2px;
            }

            .task-list input[type="button"]{
                width: 100px;
                margin: 5px;

            }

            .todo-task > .task-header{
                font-weight: bold;
            }

            .todo-task > .task-date{
                font-size: 10px;
                font-style: italic;
            }

            .todo-task > .task-description{
                font-size: 10px;
            }
/*
            .h3{
                text-align: center;
            }

            #delete-div{
                display: none;
                background-color: #fff;
                border: 3px dotted #000;
                margin: 10px;
                height: 75px;
                line-height: 75px;
                text-align: center;
            }*/

</style>
<body>

    <div id="wrapper">

        <!-- Navigation -->
     


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Purchase Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                
                    <!-- <div id="sprintcontainer"> -->

                    <div class="row">

                    

                        <div id="div1" class="task-contain" ondrop="drop(event)" ondragover="allowDrop(event)" style="width: 30%;">

                        <h3 class="ui-sortable-handle" style="text-align: left;"> <img src="<?= base_url(); ?>dist/img/Apps-help-icon.png" /> Inprogress</h3>
                        <hr>
                   

                            <div style="opacity: 1;" class="todo-task" draggable="true" ondragstart="drag(event)" id="drag1">
                                <div class="task-header">
                                    <div class="task-no">30</div>
                                    <div class="task-type">Action</div>
                                </div>
                                <div class="task-body">
                                    <div class="task-title">Meet with technical teams to discuss solution</div>
                                </div>
                                <div class="task-footer">
                                    <div class="task-date">Due: 17/07/2012</div>
                                </div>
                            </div>


                              <div style="opacity: 1;" class="todo-task" draggable="true" ondragstart="drag(event)" id="drag2">
                                <div class="task-header">
                                    <div class="task-no">30</div>
                                    <div class="task-type">Action</div>
                                </div>
                                <div class="task-body">
                                    <div class="task-title">Meet with technical teams to discuss solution</div>
                                </div>
                                <div class="task-footer">
                                    <div class="task-date">Due: 17/07/2012</div>
                                </div>
                            </div>


                        </div>
                         <div id="div2" class="task-contain" ondrop="drop(event)" ondragover="allowDrop(event)" style="width: 30%;">
                                <h3 class="ui-sortable-handle" style="text-align: left;"> <img src="<?= base_url(); ?>dist/img/Time-Management-icon.png" /> Pending</h3>
                                <hr>
                        </div>


                                 <div id="div2" class="task-contain" ondrop="drop(event)" ondragover="allowDrop(event)" style="width: 30%;">
                                    

                                <h3 class="ui-sortable-handle" style="text-align: left;">
                                 <img src="<?= base_url(); ?>dist/img/check-mark-xxl.png" /> Completed</h3>
                                <hr>
                                </div>
                            
                        
                         
                       
                    
                    
                
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
         </div>
        <!-- /#page-wrapper -->

        </div>
    </div>
    <!-- /#wrapper -->


    
  

<script>

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
