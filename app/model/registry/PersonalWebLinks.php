<?php

class Registry_PersonalWebLinks
{
    private static $PERSONAL_WEB_LINKS = array(

        'linkedin' => array(
            'glyph'    => 'fa-linkedin',
            'display'  => 'Leizel Jackson Case',
            'url'      => 'https://www.linkedin.com/pub/leizel-jackson-case/4b/a5a/2a9',
        ),

        'twitter' => array(
            'glyph'    => 'fa-twitter',
            'display'  => '@3koneko3',
            'url'      => 'https://twitter.com/3koneko3/',
        ),
    );


    //{{{ get()
    public static function get()
    {
        return self::$PERSONAL_WEB_LINKS;
    }
    //}}}
}
