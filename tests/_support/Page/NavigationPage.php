<?php
namespace Page;

class NavigationPage extends \AcceptanceTester
{
    // include url of current page
    public static $URL = '/';
    public static $Football_title = 'Football news - latest fixtures, results and transfer updates | The Sun' ;
    public static $Sport_title =  'Latest Sports News - results, live scores, fixtures | The Sun' ;
    public static $Boxing_title = 'Latest Boxing News - Boxing fights, fixtures, results and live updates | The Sun' ;
    public static $Motorsport_title = 'Motorsport - latest news, results, races | The Sun' ;
    

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
