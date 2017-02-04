









<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<link type="text/css" rel="stylesheet" href="../asset/bootstrap/bootstrap.css" media="all"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


	<meta charset="utf-8">
	<title>Nasty Purchasing System</title>



<style type="text/css">
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
    width: 22%;
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
    font-size: 15px;
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
    font-size: small;
    font-style: italic;
}

.todo-task > .task-description{
    font-size: smaller;
}

h3{
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
}





</style>



</head>
<body>


<div id="sprintcontainer">
<div class="task-list task-container ui-droppable ui-sortable ui-state-highlight" id="backlog">






        <h3 class="ui-sortable-handle">Backlog</h3>
        <!--<div class="todo-task">
            <div class="task-header">Sample Header</div>
            <div class="task-date">25/06/1992</div>
            <div class="task-description">Lorem Ipsum Dolor Sit Amet</div>
        </div>-->
    <div style="opacity: 1;" class="todo-task ui-sortable-handle">
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
 
    
    <div class="todo-task ui-sortable-handle">
    <div class="task-header">
    <div class="task-no">1877</div>
    <div class="task-type">WBS</div>
    </div>
    <div class="task-body">
    <div class="task-title">Engage Vendors</div>
    </div>
    <div class="task-footer">
    <div class="task-date">Due: 20/09/2014</div>
    </div>
    </div>
    <div class="todo-task ui-sortable-handle">
    <div class="task-header">
    <div class="task-no">1878</div>
    <div class="task-type">WBS</div>
    </div>
    <div class="task-body">
    <div class="task-title">Build Servers</div>
    </div>
    <div class="task-footer">
    <div class="task-date">Due: 20/03/2015</div>
    </div>
    </div>
    <div class="todo-task ui-sortable-handle">
    <div class="task-header">
    <div class="task-no">1894</div>
    <div class="task-type">WBS</div>
    </div><div class="task-body">
    <div class="task-title">Develop Prototype Application</div>
    </div>
    <div class="task-footer">
    <div class="task-date">Due: 02/11/2014</div>
    </div>
    </div>
    <div class="todo-task ui-sortable-handle">
    <div class="task-header">
    <div class="task-no">5327</div>
    <div class="task-type">WBS</div>
    </div>
    <div class="task-body">
    <div class="task-title">Hand over to operations</div>
    </div>
    <div class="task-footer">
    <div class="task-date">Due: 01/10/2015</div>
    </div>
    </div>
    <div class="todo-task ui-sortable-handle">
    <div class="task-header">
    <div class="task-no">5328</div>
    <div class="task-type">WBS</div>
    </div>
    <div class="task-body">
    <div class="task-title">New task</div>
    </div>
    <div class="task-footer">
    <div class="task-date">Due: 12/04/2015</div>
    </div>
    </div>
    <div class="todo-task ui-sortable-handle">
    <div class="task-header">
    <div class="task-no">5329</div>
    <div class="task-type">WBS</div>
    </div>
    <div class="task-body">
    <div class="task-title">New task</div>
    </div>
    <div class="task-footer">
    <div class="task-date">Due: 20/03/2015</div>
    </div>
    </div>
    <div class="todo-task ui-sortable-handle">
    <div class="task-header">
    <div class="task-no">5330</div>
    <div class="task-type">WBS</div>
    </div>
    <div class="task-body">
    <div class="task-title">New task</div>
    </div>
    <div class="task-footer">
    <div class="task-date">Due: 12/04/2015</div>
    </div>
    </div>
    <div class="todo-task ui-sortable-handle">
    <div class="task-header">
    <div class="task-no">661</div>
    <div class="task-type">Issue</div>
    </div>
    <div class="task-body">
    <div class="task-title">No BA's available from operations to support solution design</div>
    </div>
    <div class="task-footer">
    <div class="task-date">Due: 07/06/2012</div>
    </div>
    </div>
    <div class="todo-task ui-sortable-handle">
    <div class="task-header"><div class="task-no">662</div>
    <div class="task-type">Issue</div>
    </div>
    <div class="task-body">
    <div class="task-title">Resources reassigned away from dependant network join initiatives</div>
    </div>
    <div class="task-footer">
    <div class="task-date">Due: 31/07/2012</div>
    </div>
    </div>
    <div class="todo-task ui-sortable-handle">
    <div class="task-header">
    <div class="task-no">665</div>
    <div class="task-type">Issue</div>
    </div>
    <div class="task-body">
    <div class="task-title">Projector being used for the demonstration is not working</div>
    </div>
    <div class="task-footer">
    <div class="task-date">Due: 31/12/2013</div>
    </div>
    </div>
    <div class="todo-task ui-sortable-handle">
    <div class="task-header">
    <div class="task-no">839</div>
    <div class="task-type">Issue</div>
    </div>
    <div class="task-body">
    <div class="task-title">Demo Issue</div>
    </div>
    <div class="task-footer">
    <div class="task-date">Due: 28/01/2014</div>
    </div>
    </div>
    <div class="todo-task ui-sortable-handle">
    <div class="task-header">
    <div class="task-no">809</div>
    <div class="task-type">Issue</div>
    </div>
    <div class="task-body">
    <div class="task-title">Application coding is bloated</div>
    </div>
    <div class="task-footer">
    <div class="task-date">Due: 30/10/2014</div>
    </div>
    </div>
    </div>
       <div class="task-list task-container ui-droppable ui-sortable" id="pending">
        <h3 class="ui-sortable-handle">Pending</h3>
        <!--<div class="todo-task">
            <div class="task-header">Sample Header</div>
            <div class="task-date">25/06/1992</div>
            <div class="task-description">Lorem Ipsum Dolor Sit Amet</div>
        </div>-->
    </div>
    <div class="task-list task-container ui-droppable ui-sortable" id="inProgress">
        <h3 class="ui-sortable-handle">In Progress</h3>
    </div>
    <div class="task-list task-container ui-droppable ui-sortable" id="completed">
        <h3 class="ui-sortable-handle">Completed</h3>
    </div>    
    <div style="clear:both;"></div>
</div>

<script>
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




   
 	

   
