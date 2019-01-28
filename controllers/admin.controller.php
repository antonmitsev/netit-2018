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
       
        //var_dump($_SESSION['captcha']);
        $false_captcha = false;
        

        if(isset($_POST['submitter'])) {
            // var_dump(helpers::shaHash(@$_POST['email'], @$_POST['password']));
            $false_captcha = true;
            // Form submitted
            if(@$_POST['password'] !== @$_POST['password_repeat']) {
                return 'Паролите не съвпадат!';
            } 
            
            if(count(Helpers::getUserData($this->dbConn, $_POST['email'])) > 0) {
                return 'Този email вече има регистрация!';
            }

            if (
                mb_strtolower($_SESSION['captcha']["code"]) 
                == mb_strtolower($_POST['captcha'])
                ) {
                    $signature = Helpers::createUser(
                        $this->dbConn,
                        $_POST['email'],
                        $_POST['password']
                    );
                    // TODO make this function send email
                    Helpers::sendActivationLink($_POST['email'], $signature);

                    // Captcha correct!
                    return 'Успешна регистрация!';
            }
        } 
        
        if($false_captcha) {
            return 'Грешен код от изображението!';
        }
        
        if(!isset($_POST['submitter'])) {
            // Not submitted
            $_SESSION['captcha'] = simple_php_captcha();
            return $_SESSION['captcha']["code"];//=> string(5) "CfW2R" 
            // '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA" />';
        }
    }

    public function action_confirm_email() {
        if(Helpers::confirmEmail(
            $this->dbConn,
            @$_GET['email'],
            @$_GET['signature']
        )){
            return 'Успешно потвърден email <b>' . $_GET['email'] . '</b>!';
        } else {
            return 'Невалиден линк за активация!';
        }
    }

    public function action_reset_password() {
        //TODO Check CAPTCHA!!!
        if (@$_POST['email']) {
            $signature = Helpers::resetUser(
                $this->dbConn,
                $_POST['email']
            );
            if(count(Helpers::getUserData($this->dbConn, $_POST['email'])) > 0) {
                // TODO make this function send email
                Helpers::sendResetLink($_POST['email'], $signature);
            }            
            return 'Изпратен е линк на посочения мейл!';
        }
    }

    public function action_confirm_reset_password() {
        // TODO check token and email
        // TODO Create View with password fields
        // TODO Change/Reset password in DB
        // Opt. Send email for reset pass
    }

#### Pages    
}