<?php
class createKeyword extends conn
{
    
    function check_if_exists_keyword($new_keyword, $userid)
    {
        // first check if keyword exists already
        $stm = $this->conn->prepare("SELECT count(*) FROM `tomato220`.`keywords` WHERE `keywords`.`userid` = :USERID AND `keywords`.`keyword` LIKE :NEWKEYWORD LIMIT 1");
        $stm->bindParam(':NEWKEYWORD', $new_keyword, PDO::PARAM_STR);
        $stm->bindParam(':USERID', $userid, PDO::PARAM_INT);
        $stm->execute();
        $value = $stm->fetchColumn();
        return $value;
    }
        
        
      public function create_keyword($keyword, $userid){
            // since keyword does not exist, create it...
            $stm = $this->conn->prepare("INSERT INTO `tomato220`.`keywords` (`keywords`.`id`, `keywords`.`userid`, `keywords`.`keyword`, `keywords`.`timestamp`) VALUES (NULL, :USERID, :KEYWORD, CURRENT_TIMESTAMP)");
            $stm->bindParam(':KEYWORD', $keyword);
            $stm->bindParam(':USERID', $userid);
            if ($stm->execute() == TRUE) {
                return TRUE;
            } else {
            return FALSE;
            }  
        }
    
    function form_create_keyword()
    {
        
        print('<form method="post" action="bounce.keyword.create.php">');
        print('<div class="form-group">');
        print('<label for="new_keyword">New Keyword</label>');
        print('<input type="text" name="new_keyword" class="form-control" id="new_keyword" aria-describedby="keyHelp" placeholder="Enter Keyword">');
        print('<small id="emailHelp" class="form-text text-muted">No Spaces. Capitalize.</small>');
        print('</div>');
        print('<button type="submit" class="btn btn-primary">Submit</button>');
        print('</form><br/>');
    }
    
}
?>