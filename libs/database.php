<?php

class DataBase {
    protected $link;

    public function __construct($conn = 'default') {
        $link = mysqli_connect(
            Config::$database[$conn]['host'],
            Config::$database[$conn]['user'],
            Config::$database[$conn]['pass'],
            Config::$database[$conn]['db']
        );
    }

    public function __destruct() {
        unset($link);
    }
}