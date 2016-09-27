<?php
require_once LEIZEL_BASE_DIR . 'app/model/registry/PersonalWebLinks.php';

class Page_Astral extends Controller
{
    public function perform()
    {
        $personal_web_links = Registry_PersonalWebLinks::getAsArray();
        $this->smarty->assign('personal_web_links', $personal_web_links);

        $this->smarty->display('page/Astral.tpl');
    }
}
