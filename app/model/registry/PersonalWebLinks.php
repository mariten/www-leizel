<?php

class Registry_PersonalWebLinks
{
    private static $leizel_web_links = array(

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

    //{{{ getAsArray()
    public static function getAsArray()
    {
        return self::$leizel_web_links;
    }
    //}}}
}