<?php
// Global Includes
require_once SMARTY_DIR . 'Smarty.class.php';
require_once LEIZEL_BASE_DIR . 'app/model/registry/PersonalWebLinks.php';

class Controller
{
    protected $request_params = array();
    protected $smarty = null;


    //{{{ init(ParamManager)
    public function init($param_manager)
    {
        // Set params for this request
        $this->request_params = $param_manager;
        $url_path = $this->request_params->getParam('url_path', '');

        // Smarty setup
        $this->smarty = new Smarty();
        $this->smarty->template_dir   = LEIZEL_BASE_DIR . 'app/view/';
        $this->smarty->compile_dir    = LEIZEL_BASE_DIR . 'tmp/template_c/';

        // Record URL path for this request in template
        $this->smarty->assign('request_path', '/' . $url_path);

        // Assign data used by all pages
        $this->assignPersonalWebLinks();
    }
    //}}}


    //{{{ loadParams()
    /**
      * Load and validate any necessary params
      *
      * @result array    List of error messages, empty array if no errors
      */
    public function loadParams()
    {
        // Parent function only sets params and returns empty array (no errors)
        // Sub-class in individual controllers for request-specific logic
        $this->assignLoadedParams();
        return array();
    }
    //}}}


    //{{{ assignPersonalWebLinks()
    protected function assignPersonalWebLinks()
    {
        $personal_web_links = Registry_PersonalWebLinks::get();
        $this->smarty->assign('personal_web_links', $personal_web_links);
    }
    //}}}


    //{{{ assignLoadedParams()
    protected function assignLoadedParams()
    {
        $loaded_params = $this->request_params->getSanitizedParams();
        $this->smarty->assign('params', $loaded_params);
    }
    //}}}


    //{{{ doRedirect(string)
    protected function doRedirect($redirect_url, $is_internal_redirect = true)
    {
        header('HTTP/1.1 301 Moved Permanently');
        if($is_internal_redirect) {
            header('Location: ' . JEFF_DOMAIN_CANONICAL . $redirect_url);
        } else {
            header('Location: ' . $redirect_url);
        }
    }
    //}}}


    //{{{ httpBadRequest(boolean)
    public function httpBadRequest($show_error_page = true)
    {
        header('HTTP/1.1 400 Bad Request');
        if($show_error_page) {
            echo('400 Bad Request');
        }
    }
    //}}}
    //{{{ httpNotFound(boolean)
    public function httpNotFound($show_error_page = true)
    {
        header('HTTP/1.1 404 Not Found');
        if($show_error_page) {
            echo('404 Not Found');
        }
    }
    //}}}
    //{{{ httpInternalServerError(boolean)
    public function httpInternalServerError($show_error_page = true)
    {
        header('HTTP/1.1 500 Internal Server Error');
        if($show_error_page) {
            echo('500 Internal Server Error');
        }
    }
    //}}}
}
