<?php

class DataBase {
    protected $link;
    protected $insert_id;

    public function __construct($conn = 'default') {
        $this->link = mysqli_connect(
            Config::$database[$conn]['host'],
            Config::$database[$conn]['user'],
            Config::$database[$conn]['pass'],
            Config::$database[$conn]['db']
        );
        $this->execute("SET NAMES utf8");
    }

    public function escape($query = '', $appos = true) {
        $escaped_query = mysqli_real_escape_string($this->link, $query);
        if ($appos) {
            $escaped_query = "'{$escaped_query}'";
        }
        return $escaped_query;
    }

    public function select($query = '') {
        $result_arr = array();
        $result = $this->execute($query);

        while ($row = mysqli_fetch_assoc($result)) {
            $result_arr[] = $row;
        }
        mysqli_free_result($result);
        return $result_arr;
    }

    public function insert($query = '') {
        $result = $this->execute($query);

        $this->insert_id = mysqli_insert_id($this->link);
        return $this->insert_id;
    }

    public function lastInsertId() {
        return $this->insert_id;
    }

    public function execute($query) {
        $result = mysqli_query($this->link, $query);
        
        if (!$result) {
            Helpers::err($this->prepErr($query));
        }

        return $result;
    }

    public function __destruct() {
        unset($link);
    }

    public function prepErr($query = '') {
        return mysqli_error($this->link) . "
        \n
        Query: " . 
              $query . "\n";
    }
}