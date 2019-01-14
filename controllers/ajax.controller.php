<?php

class AjaxController extends BaseController {
    public function action_check_email_exists() {
        $result = Helpers::getUserData($this->dbConn, $_GET['email']);
        return array(
            'statusCode' => 
                count($result) > 0 ? 200 : 404,
            'exists' => count($result) > 0
        );
    }

    public function action_default() {
        return array(
            'statusCode' => 404,
            'status' => 'What to do?!!'
        );  
    }
}