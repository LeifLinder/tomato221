<?PHP session_start();
$_SESSION['userid']=1001;
// $_SESSION['timer_window']="none";
?>
<?php
include ("../classes/config/class.conn.php");
include ('../classes/class.pagemaster.php');
include ('../classes/class.user.login.php');
include ('../classes/class.keyword.create.php');
include ('../classes/class.keyword.edit.php');
include ('../classes/class.keyword.delete.php');
// include ('../classes/class.keyword.show.php');
 include ('../classes/class.keyword.link_to_category.php');
// include ('../classes/class.keyword.link_category.php');
// include ('../classes/class.keyword.tree.php');
include ('../classes/class.category.create.php');
include ('../classes/class.category.edit.php');
include ('../classes/class.category.delete.php');
include ('../classes/class.category.show.php');
// include ('../classes/class.category.tree.php');
// include ('../classes/class.setup.aux.php');
// include ('../classes/class.setup.goals.php');
include ('../classes/class.goal.show.php');
//include ('../classes/class.tomato.add.php');
include ('../classes/class.tomato.create.php');
include ('../classes/class.tomato.edit.php');
include ('../classes/class.tomato.show.php');
include ('../classes/class.tomato.delete.php');
// include ('../classes/class.view.today.php');
// include ('../classes/class.view.weeks.php');
include ('../classes/class.view.day.php');
include ('../classes/class.view.week.php');
include ('../classes/class.setup.setup.php');
include ('../classes/class.sidebar.php');


include ('./includes/header.php');
include ('./includes/navigation.php');

$zombie = new pagemaster;
$_GET['page'] = isset($_GET['page']) ? $_GET['page'] : 'index';

if($_GET['page']){
  //$clean_get_page = preg_replace("/[^a-zA-Z0-9]+/", "", $_GET['page']);
  $clean_get_page = filter_var($_GET['page'], FILTER_SANITIZE_SPECIAL_CHARS);
}

$sidebar = new sidebar;

print('<div class="container">');
  print('<div class="row">');
    print('<div class="col-sm-12 col-med-3 col-lg-3" class="leftsidebar">');
    print('<p>'.$clean_get_page.'</p>');
    $sidebar->sidebar($clean_get_page);
    print('</div>');
    print('<div class="col-sm-12 col-med-9 col-lg-9">');
       print('<div id="content">'); // open content

/*
$zombie = new pagemaster;
$_GET['page'] = isset($_GET['page']) ? $_GET['page'] : 'index';
$zombie->pagefinder($_GET['page']);
*/
$zombie->pagefinder($clean_get_page);

function message(){
    if(isset($_GET['message'])&&(isset($_GET['alert']))){
        $message = filter_var($_GET['message'], FILTER_SANITIZE_SPECIAL_CHARS);
        $alert = filter_var($_GET['alert'], FILTER_SANITIZE_SPECIAL_CHARS);
        print('<div class="alert alert-'.$alert.'" role="alert">'.$message.'</div>');
    }
}

      print('</div>'); // close content
    print('</div>'); // close column
  print('</div>'); // close row
print('</div>'); // close container
?>
<?php
include('includes/footer.php');
?>