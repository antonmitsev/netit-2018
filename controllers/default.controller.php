<?php

class DefaultController extends BaseController {
    public $menus = array();
    public $services = array();
    public $page_content_db = '';

    public function __construct($db_connection = 'default') {
        parent::__construct($db_connection);
        $this->menus[1] = Helpers::getMenuItems($this->dbConn, 1);
        $this->page_content_db = Helpers::getPageByUri($this->dbConn, '/' . URI);
        $this->services[0] = Helpers::getServiceItems($this->dbConn);
    }

    public function action_default() {
        return $this->page_content_db['content'];  
    }    
}