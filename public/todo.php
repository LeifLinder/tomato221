<?PHP session_start();
$_SESSION['userid']=1001;
// $_SESSION['timer_window']="none";
?>
<?php
include ("../classes/config/class.conn.php");
include ("../classes/class.todo.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tomato To Do List</title>
  </head>
  <body>
    <div class="container">
        <h1>Tomato To Do List</h1>
<table class="todo_table table">
    <tr>
        <th>No.</th>
        <th>Status</th>
        <th>Task</th>
    </tr>
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Way to see way back in time. With pagination it would be possible to show all the tomatoes as in pagination only the 30 or so entrees will show per page.</td>
    </tr>
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Way to see way back in time. With pagination it would be possible to show all the tomatoes as in pagination only the 30 or so entrees will show per page.</td>
    </tr>
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Need to see stats on keywords. Like number of times they are actually used and ability to delete and replace value with NULL. Same with categories</td>
    </tr> 
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Tomato edit: redo the whole edit thing. First, when you click the link to the tomato you should go to the noneditable view screen. There should be an Edit. That is how user gets to the editable page. On the Edit view the category should be the preselected in a select form element. The keywords with be a list of 
        checkboxes with the currently used keywords already select. If the user decide to chose a completely different category, then the keywords available for that category should show. Somehow, the originally selected keywords should still be there if the user decides to go back to his original category. 
        </td>
    </tr>
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Alphebatize the list of Categories when you associate new keyword with a Category.</td>
    </tr> 
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Be able to see previous weeks, what the heck!?.</td>
    </tr>   
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Fix Category delete function. Currently not working.</td>
    </tr>  
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Show all keywords what category they are in. Build out keyword page to organize. Ajax move ability?</td>
    </tr> 
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Category analyzer determine overlap and category meaning, is it task related or method related? Is it truly a bucket? What is a bucket? Determine number of same keywords in a category and number of completed tomatoes for that keyword. Show the statistical values for Categories.</td>
    </tr>  
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Blue start day, blue star shows on days over 24 tomatoes.</td>
    </tr>
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>When making input error creating tomato stay on page but red border and goto the error field with explanaiton (html5?).</td>
    </tr>
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Sort out the ability to change category and keywords.</td>
    </tr>
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Clearly show when user is in tomato edit mode.</td>
    </tr>
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Create very good 25 minute timer so my site will be next to TopTal and the other tomato timer sites on Google search</td>
    </tr>    
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Understand and design for Google search SEO. Make site SEO perfect.</td>
    </tr>
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Get a Google webmaster account and track the web traffic, when site is complete and launched.</td>
    </tr>
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>When you delete a category it goes to a wonky page</td>
    </tr>
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Be able to go back to previous week and add or eidt tomatoes</td>
    </tr>
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Put Add and Minus buttons next to the tomato count on week view on each tomato</td>
    </tr>
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Make keywords pills on tomato create page, float left</td>
    </tr>
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Show total tomatoes, not just total hours on tomatoes on week view page</td>
    </tr>
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Today Goal in sidebar. Add Today Goal in Goal page and it shows there and in the sidebar. Show a star or something when the user reaches his/her/they're goal, send an email "You reached your goal"</td>
    </tr>
    <tr>
        <td>0</td>
        <td>Not Done</td>
        <td>Build out login system on timeczar.com</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Not Done</td>
        <td>Main Tomato ideas and a little research</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Not Done</td>
        <td>Land on homepage when : change goal : create keyword</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Not Done</td>
        <td>Build real homepage with explanation of tomatoes</td>
    </tr>

    <tr>
        <td>4</td>
        <td>Not Done</td>
        <td>Alphabetize keywords and categories</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Not Done</td>
        <td>Update tomato number via AJAX</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Not Done</td>
        <td>Define all actions and confirm that they currently work, documnent at actions.html</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Not Done</td>
        <td>Dashboard at top of left column. Simple info like the weeks total tomatoes
            and if a goal is reached, a star and goal is listed
        </td>
    </tr>
    <tr>
        <td>10</td>
        <td>Not Done</td>
        <td>About and Login/Logout link at top legal nav
        </td>
    </tr>
    <tr class="task_done">
        <td>X</td>
        <td>Fixed</td>
        <td>"New Category ID Not Valid" error when adding tomatoes</td>
    </tr>
    <tr class="task_done">
        <td>X</td>
        <td>Fixed</td>
        <td>Figure out why timezone is wrong. Week starts on Sunday.</td>
    </tr>
    <tr class="task_done">
        <td>X</td>
        <td>Fixed</td>
        <td>Change "Link" to "Link to Category" on Keyword page
        </td>
    </tr>
    <tr class="task_done">
        <td>X</td>
        <td>Not Done</td>
        <td>Fix the Sunday is day 0 problem (should be day 7)</td>
    </tr>
    <tr class="task_done">
        <td>X</td>
        <td>Not Done</td>
        <td>"Goals" has it's own menu item and is where goals are set.</td>
    </tr>
</table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>