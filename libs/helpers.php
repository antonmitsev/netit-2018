<?php

class Helpers {
    public static function err($message = '') {
        // TODO Send email/sms on error
        echo '<pre>';
        throw new exception('Error: ' . $message
      );        
    }
}