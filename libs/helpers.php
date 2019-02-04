<?php

class Helpers {
    public static function err($message = '') {
        // TODO Send email/sms on error
        echo '<pre>';
        throw new exception('Error: ' . $message
      );        
    }

    public static function getUserData($db, $user_email) {
        return $db->select(
            sprintf("SELECT * FROM `user` WHERE `email` = %s;",
                $db->escape($user_email)
            )
        );        
    }

    // TODO get all menus
    public static function getPageByUri($db, $page_uri = '', $active = 1) {
        $sql = sprintf("SELECT * FROM `page` WHERE 
                        `active` = %d
                        AND `uri` = %s;",
            (int)$active,
            $db->escape($page_uri)
        );
        $result = $db->select(
            $sql
        );
        if (count($result) > 0) {
            return $result[0];
        } else {
            return false;
        }
    }

    // TODO get all menus
    // All cats, All active/inactive 
    public static function getMenuItems($db, $cat_id = 0, $active = 1) {
        return $db->select(
            sprintf("SELECT * FROM `menu` WHERE 
                `active` = %d
                AND `cat_id` = %d
                ORDER BY `position` ASC;",
                (int)$active,
                (int)$cat_id
            )
        );
    }

    // TODO get all service categories 
    // Add cats in DB!!!
    // All cats, All active/inactive 
    public static function getServiceItems($db, $cat_id = 0, $active = 1) {
        return $db->select(
            sprintf("SELECT * FROM `service` WHERE 
                `active` = %d
                # AND `cat_id` = %d
                ORDER BY `position` ASC;",
                (int)$active,
                (int)$cat_id
            )
        );
    }
    
    public static function getBlogItemsCount($db) {
        $query = "SELECT COUNT(blog_id) as cnt FROM blog
            WHERE `active` = 1";
        $result = $db->select($query);
        return $result[0]['cnt'];
    }
    
    public static function pagesCount($records_count, $items_per_page = 0) {
        if ($items_per_page <= 0) {
            return 1;
        }
        return ceil($records_count / $items_per_page);
    }

    // TODO get all service categories 
    // Add cats in DB!!!
    // All cats, All active/inactive 
    public static function getBlogItems(
        $db,
        $limit = 0,
        $offset = 0, 
        $cat_id = 0, $active = 1
    ) {
        if ($limit <= 0 || $offset < 0) {
            $query = sprintf("SELECT * FROM `blog` WHERE 
            `active` = %d
            # AND `cat_id` = %d
            ORDER BY `position` ASC;",
                (int)$active,
                (int)$cat_id
            );
        } else {
            $query = sprintf("SELECT * FROM `blog` WHERE 
            `active` = %d
            ORDER BY `position` ASC
            LIMIT %d 
            OFFSET %d
            ;",
                (int)$active,
                (int)$limit,
                (int)$offset
            );
        }
        // LIMIT 10 OFFSET 15
        return $db->select(
            $query
        );
    }

    public static function blogPageUrl($page_number = 0, $items_per_page = 0) {
        if ($page_number == 0 || $items_per_page == 0) {
            return '#';
        }
        return BASE . 'blog/?page=' . (int)$page_number . '&amp;items=' . (int)$items_per_page;
    }

    public static function menuItemFormat($base_folder , $item_url) {
        if (
            strpos($item_url, '//') === false
        ) {
            $item_url = preg_replace('/\\/+/', '/', $base_folder . $item_url);
        }
        return $item_url;
    }

    public static function shaHash($username, $password) {
        $data = 
        hash('sha256',
            hash ( 'sha256' , $username .
                hash ( 'sha256' , $password . Config::$salt) 
            )
        );
        return hash('sha256' , $data);
    }

    public static function shaToken($username, $password) {
        return substr(hash ( 'sha256' , $username .
                hash ( 'sha256' , $password . Config::$salt) 
        ), 10, 32);
    }

    public static function createUser(
        $db,
        $email,
        $password
    ) {

        if ($db->insert(
            sprintf("INSERT INTO `user` (email, `password`, registration_token)
            VALUE (%s, %s, %s);
            ",
            $db->escape($email),
            $db->escape(static::shaHash($email, $password)),
            $db->escape(static::shaToken($email, $db->escape(static::shaHash($email, $password))))
        ))) {
            return static::shaToken($email, $db->escape(static::shaHash($email, $password)));
        } else {
            return 'Error!';
        }
    }
    
    // TODO make this function send email
    public static function sendActivationLink($email, $signature) {
        $activation_link = HTTP_HOST . BASE . "admin/confirm_email?signature={$signature}&email={$email}";
        echo "<p><a href=\"{$activation_link}\"><b>{$activation_link}</b></a></p>";
    }    

    public static function resetUser(
        $db,
        $email
    ) {
        $pass = time();
        if ($db->execute(
            sprintf("UPDATE `user` SET `registration_token` = %s
            WHERE email = %s;
            ",
            $db->escape(static::shaToken($email, $db->escape(static::shaHash($email, $pass)))),
            $db->escape($email)
        ))) {
            return static::shaToken($email, $db->escape(static::shaHash($email, $pass)));
        } else {
            return 'Error!';
        }
    }

    // TODO make this function send email
    public static function sendResetLink($email, $signature) {
        $activation_link = HTTP_HOST . BASE . "admin/confirm_reset_password?signature={$signature}&email={$email}";
        echo "<p><a href=\"{$activation_link}\"><b>{$activation_link}</b></a></p>";
    }    

    public static function confirmEmail($db, $email, $token) {
        if(trim($token) == '') {
            return false;
        }

        $user_data = Helpers::getUserData($db, $email);
        if(count($user_data) > 0) {
            if($user_data[0]['registration_token'] == $token) {
                $db->execute(
                    sprintf(
                        "UPDATE `user` SET `active` = 1, registration_token = NULL WHERE `user_id` = %d;",
                        (int)$user_data[0]['user_id']
                    )
                );
                return true;
            }
        }
        return false;
    }
}