<?php
class todo_create extends conn
{

    public function upload_new_todo($userid, $taskstatus, $task, $timespent)
    {
        try {
            /*$stm = $this->conn->prepare("INSERT INTO `tomato220`.`todo` (`todo`.`userid`,`todo`.`taskstatus`, `todo`.`task`, `todo`.`timespent`) VALUES (:USERID, :TASKSTATUS, :TASK, :TIMESPENT)"); */
            $stm = $this->conn->prepare("INSERT INTO `tomatoss220`.`todo` (`todo`.`userid`,`todo`.`taskstatus`, `todo`.`task`, `todo`.`timespent`) VALUES (:USERID, :TASKSTATUS, :TASK, :TIMESPENT)");
            $stm->bindParam(':USERID', $userid);
            $stm->bindParam(':TASKSTATUS', $taskstatus);
            $stm->bindParam(':TASK', $task);
            $stm->bindParam(':TIMESPENT', $timespent);
            $stm->execute();
        } catch (PDOException $e) {
            //throw $e;
            print("<p>Kablamo!!! There seems to be a database error!</p>");
            die($e->getMessage());
        }
        echo "Success!";

        /*
                try {
                    $pdo->prepare("INSERT INTO users VALUES (NULL,?,?,?,?)")->execute($data);
            } catch (PDOException $e) {
                if ($e->getCode() == 1062) {
                    // Take some action if there is a key constraint violation, i.e. duplicate name
                } else {
                    throw $e;
                }
            }
            echo "Success!";

        */


        /*
        $count = $stm->rowCount();  
        if($count > 0){
            $message='ID: '.$categoryid.' Created';
        }else{
            $message="Problem";
        }
        $message = $this->conn->lastInsertId(); 
         */
        /*
        $this->create_goal_for_new_category($lastid, $new_category, 1001);
        $count = $stm->rowCount();  
        if($count > 0){
            $message='ID: '.$categoryid.' Created';
        }else{
            $message="Problem";
        }
        */
    }

    public function form_create_task()
    {
        print("<p>User ID:" . $_SESSION['userid'] . "</p>");
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
