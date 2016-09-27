<?php
/**
  * Determine the controller (action) to process
  * @param  string   URL path as received from Apache (see rewrite rule)
  * @return object   Class instantiation of controller (action) to be called
  */
function getMatchingController($url_path)
{
    switch($url_path) {

    // Top Page (Astral)
    case '':
        require_once LEIZEL_BASE_DIR . 'app/controller/page/Astral.php';
        return new Page_Astral();


    // No matching action
    default:
        return null;
    }
}
