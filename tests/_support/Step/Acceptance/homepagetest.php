<?php
namespace Step\Acceptance;
use Page\HomePage as Homepage;
use Codeception\Scenario;

class homepagetest extends \AcceptanceTester
{
	protected $homePage = null;

    public function __construct(Scenario $scenario)

    {
        parent::__construct($scenario);

        // Initialize Page Objects
        $this->homePage = new HomePage($scenario);
    
    }


    /**
     * @Given I am on the homepage
     */
     public function iAmOnTheHomepage()
     {
        $this->amOnPage(HomePage::$URL);
        
     }

    /**
     * @Then /^I should see the header elements$/
     */
    public function iShouldSeeTheHeaderElements()
    {
        
        $this->canSeeInTitle(HomePage::$homepage_title);

        $this->see('Home');

        // Check Header class including logo, weather, Search

        $this->seeElement(Homepage::$header_class);

        // Logo

        $this->canSeeElement(Homepage::$logo);

        // Weather

        $this->canSeeElement(Homepage::$weather);

        // Sign in

        $this->canSeeElement(Homepage::$SignIn);

        // Navigation

        $this->canSeeElement(Homepage::$nav_class);
    }

    /**
     * @Then /^I should see the article module elements$/
     */
    public function iShouldSeeTheArticleModuleElements()
    {
        
        
        // Check Main content class

        $this->seeElement(Homepage::$main_content_class);

        // Check Main articles
        $this->seeElement(Homepage::$main_articles);

        // Check Video rail is there

        $this->seeElement(Homepage::$video_rail);

        
    }

     /**
     * @Then I should see the footer elements
     */
     public function iShouldSeeTheFooterElements()
     {

        $this->see('Follow The Sun');

        // Footer class .footer-title-follow

        $this->seeElement(Homepage::$footer_class);


     }


}