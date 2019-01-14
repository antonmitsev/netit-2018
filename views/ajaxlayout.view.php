<?php 

if (isset(json_decode($params['page_content'], true)['statusCode'])) {
    header("HTTP/1.1 " . json_decode($params['page_content'], true)['statusCode']);
}
// header("HTTP/1.1 301"); //Redirect
// header("Location: http://....")
//header("Content-type: application/json");

// TODO consider CORS if using different domains
echo @$params['page_content'];
    