<?php
include($libs_directory . "/simple-php-captcha-master/simple-php-captcha.php");
$_SESSION['_CAPTCHA']['config'] = simple_php_captcha( array(
    'min_length' => 5,
    'max_length' => 5,
    'characters' => 'ABCDEFGHJKLMNPRSTUVWXYZabcdefghjkmnprstuvwxyz23456789',
    'min_font_size' => 28,
    'max_font_size' => 28,
    'color' => '#666',
    'angle_min' => 0,
    'angle_max' => 10,
    'shadow' => true,
    'shadow_color' => '#fff',
    'shadow_offset_x' => -1,
    'shadow_offset_y' => 1
));

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

    function action_register() {        
        if(isset($_POST['submitter'])) {
                // Form submitted
            if ($_SESSION['captcha'] == $_POST['captcha']) {
                // Captcha correct!
            }
        } else {
            // Not submitted
            $_SESSION['captcha'] = simple_php_captcha();
            return '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA" />';
        }
    }

#### Pages    
}