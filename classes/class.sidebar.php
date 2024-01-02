<?php
class sidebar extends conn {

    function sidebar($pagelink){
        switch ($pagelink) {
            case "tomato":
                print('<li>Tomato Sidebar</li>');
                print('<li><a href="home.php?page=todo">To Do List</a></li>');
                print('<li><a href="timer.php" target="_blank">Timer</a></li>');
                break;
            case "tomatoedit":
                print('<li>tomatoedit</li>');
                break;
            case "keywords":
                print('<li>keywords</li>');
                break;
            case "keywords":
                print('<li>keywords</li>');
                break;
            case "linkcategories":
                print('<li>linkcategories</li>');
                break;
            case "views":
                print('<li>views</li>');
                break;
            case "goals":
                print('<li>goals</li>');
                break;
            case "index":
                print('<li>index</li>');
                break;
            case "categories":
                print('<li>categories</li>');
                break;
            case "setup":
                print('<li>setup</li>');
                break;
            case "todo":
                print('<li>todo</li>');
                break;
            default:
                print('<p>Default menu</p>');
        }
    }

    /*
    todo
    */

}
?>