<?php

class Template {
    public $params = array();

    public function __construct($params = array()) {
        $this->params = $params;
        $this->viewNames();

        // Print this!!!
        $this->params['page_content'] = $this->fetchView($this->params['content']);
        $this->printLayout($this->params);
    }

    public function viewNames() {
        global $views_directory;
        // Determine View names
        $layout_file =  $views_directory . DIRECTORY_SEPARATOR . LAYOUT . 'layout.view.php';

        if (!file_exists($layout_file)){
            $layout_file =  $views_directory . DIRECTORY_SEPARATOR . 'defaultlayout.view.php';
        }

        $view_file =  $views_directory . DIRECTORY_SEPARATOR . LAYOUT . DIRECTORY_SEPARATOR . VIEW . '.view.php';
        if (!file_exists($view_file)){
            $view_file =  $views_directory . DIRECTORY_SEPARATOR . LAYOUT . DIRECTORY_SEPARATOR . 'default.view.php';
            if (!file_exists($view_file)){
                $view_file =  $views_directory . DIRECTORY_SEPARATOR . 'default.view.php';
            }
        }

        $this->params['template'] = array(
            'layout' => $layout_file,
            'view' => $view_file
        );
    }

    public function printLayout($params) {
        global $base_folder;
        include($this->params['template']['layout']);
    }

    public function fetchView($content = '') {
        ob_start();
        include($this->params['template']['view']);
        $result = ob_get_contents();
        ob_end_clean();
        return $result;
    }    
}