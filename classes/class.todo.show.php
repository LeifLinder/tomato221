<?php

class todo_show extends conn {
    public function form_create_task(){ 

        print("<p>User ID:".$_SESSION['userid']."</p>");
        print('<form method="post" action="bounce.todo.create.php">');
        print('<input type="hidden" name="todo_submit" value="1"/>');
        print('<input type="hidden" name="userid" value="1000"/>');

        print('<div class="form-group">');
        print('<label for="new_task">New Task</label>');
        print('<input type="text" name="task" class="form-control" id="new_task" aria-describedby="Enter New Task" placeholder="Enter New Task">');
        print('</div>');
  
        print('<div class="form-group">');
        print('<label for="status">Task Status</label>');
        print('<input type="text" name="taskstatus" class="form-control" id="status" aria-describedby="Enter Task Status" placeholder="Enter Task Status">');
        print('</div>');   
        
        print('<div class="form-group">');
        print('<label for="timespent">Time Spent</label>');
        print('<input type="text" name="timespent" class="form-control" id="timespent" aria-describedby="Enter Time Spent" placeholder="Enter Time Spent">');
        print('</div>');  

        print('<button type="submit" class="btn btn-primary">Submit</button>');
        print('</form><br/>');
    }
    
}