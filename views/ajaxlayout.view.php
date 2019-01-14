<?php 
header("Content-type: application/json");
// TODO consider CORS if using different domains
echo @$params['page_content'];
    