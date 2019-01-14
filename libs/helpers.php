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
}