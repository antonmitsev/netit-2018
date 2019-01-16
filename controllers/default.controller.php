<?php

class DefaultController extends BaseController {
    public $menus = array();

    public function __construct($db_connection = 'default') {
        parent::__construct($db_connection);
        $this->menus[1] = Helpers::getMenuItems($this->dbConn, 1);
    }
}