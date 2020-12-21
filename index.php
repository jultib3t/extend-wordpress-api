<?php

/** Put that in your theme's functions.php file or your plugin **/

/** extend wordpress api from 100 pages to 200 **/
function tibet_maximum_api_filter($query_params) {
    $query_params['per_page']["maximum"]=250;
    return $query_params;
}
add_filter('rest_page_collection_params', 'tibet_maximum_api_filter');
/** // extend wordpress api from 100 pages to 200 **/