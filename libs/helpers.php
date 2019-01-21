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
    
    public static function menuItemFormat($base_folder , $item_url) {
        if (
            strpos($item_url, '//') === false
        ) {
            $item_url = preg_replace('/\\/+/', '/', $base_folder . $item_url);
        }
        return $item_url;
    }
}