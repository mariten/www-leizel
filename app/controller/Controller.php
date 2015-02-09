<?php
// Global Includes
require_once SMARTY_DIR . 'Smarty.class.php';

class Controller
{
    protected $request_params = array();
    protected $smarty = null;


    //{{{ init(string)
    public function init($url_path)
    {
        // Smarty setup
        $this->smarty = new Smarty();
        $this->smarty->template_dir   = LEIZEL_BASE_DIR . 'app/view/';
        $this->smarty->compile_dir    = LEIZEL_BASE_DIR . 'tmp/template_c/';

        // Record URL path for this request in template
        $this->smarty->assign('request_path', '/' . $url_path);
    }
    //}}}


    //{{{ checkParams(ParamManager)
    /**
      * Assign and validate any necessary params
      *
      * @param  object   ParamManager object for the current request
      * @result array    List of error messages, empty array if no errors
      */
    public function checkParams($param_manager)
    {
        $this->request_params = $param_manager;
        return array();
    }
    //}}}
}
