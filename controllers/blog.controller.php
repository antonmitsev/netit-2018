<?php

class BlogController extends DefaultController {
    public function action_default() {
        return Helpers::getBlogItems($this->dbConn);
    } 
}