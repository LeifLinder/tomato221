<?PHP
SESSION_START();
$_SESSION['userid']="1001";
include ("../classes/config/class.conn.php");
include ('../classes/class.todo.create.php');
$todo_create = new todo_create;
/*
INSERT INTO `todo` (`id`, `taskstatus`, `task`, `timespent`, `timestamp`) VALUES (NULL, 'Not Done', 'asd ASD ASD as', '4', current_timestamp());
*/
if(isset($_POST['todo_submit'])){
    $userid=$_POST['userid'];
    print('<p align="center">'.$userid.'</p>');
    $taskstatus=$_POST['taskstatus'];
    print('<p align="center">'.$taskstatus.'</p>');
    $task=$_POST['task'];
    print('<p align="center">'.$task.'</p>');
    $timespent=$_POST['timespent'];
    print('<p align="center">'.$timespent.'</p>');
  // $message = $todo_create->upload_new_todo($userid, $taskstatus, $task, $timespent);
    $todo_create->upload_new_todo($userid, $taskstatus, $task, $timespent);
   // header("Location: home.php?page=todo.php&message=$message");
}
?>