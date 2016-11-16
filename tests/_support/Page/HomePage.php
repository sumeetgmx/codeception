<?php
namespace Page;

class HomePage
{
    
    public static $URL = '/';
    public static $homepage_title = 'News, sport, celebrities and gossip | The Sun';
    public static $header_class = '.sun-row.sun-header--wrap';
    public static $logo = '.sun-row.sun-header--wrap';
    public static $weather = '.weather';
    public static $SignIn = '.follow';
    public static $nav_class = '.sun-row.sun-header--nav';
    public static $main_content_class = '.main-content-wrap.theme-main';
    public static $main_articles= '#main-articles';
    public static $video_rail= '#main-articles';
    public static $footer_class = '.footer-title-follow';
   
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
