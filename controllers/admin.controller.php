<?php
class AdminController extends BaseController {
    function action_default() {
        // var_dump($this->dbConn);
        // var_dump($this->dbConn->escape("O'hara"));
        /* var_dump($this->dbConn->insert(
            "INSERT INTO `user` (email, `password`) VALUES ('me@tonymitsev.com', '111');"
        ), $this->dbConn->lastInsertId()); //*/
        // var_dump($this->dbConn->select("SELECT * FROM `user2`"));

        return 'I am default action of Admin Controller!';  
    }

#### Login
    function action_login() {
        return 'I am Login action of Admin Controller!';
    }
    
    function action_logout() {
        return 'I am Logout action of Admin Controller!';
    }

#### Menus
    function action_menu() {
            
    }

    function action_menu_add() {
            
    }

    function action_menu_edit() {
            
    }    

#### Pages    
}