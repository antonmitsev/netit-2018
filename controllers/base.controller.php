<?php 

class BaseController {
    public $dbConn;

    public function __construct($db_connection = 'default') {
        $this->dbConn = new Database($db_connection);
    }
    
    public function action_default() {
        return 'I am default action!';  
    }
}