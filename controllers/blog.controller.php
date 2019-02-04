<?php

class BlogController extends DefaultController {
    public function action_default() {
        //limit = items; offset = (page - 1) * items
        $items_per_page = (int)@$_GET['items'];
        $offset = ((int)@$_GET['page'] - 1) * $items_per_page;
        if ($offset < 0 || $items_per_page <= 0) {
            $items_per_page = 0;
            $offset = 0;
        }
  
        $records_count = Helpers::getBlogItemsCount(
            $this->dbConn
        );
        return array(
            'blog_items' => Helpers::getBlogItems(
                $this->dbConn,
                $items_per_page,
                $offset
            ),
            'items_count' => $records_count,
            'items_per_page' => $items_per_page,
            'pages_count' => Helpers::pagesCount($records_count, $items_per_page)
        );
    } 
}