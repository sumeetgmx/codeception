<?php
namespace Step\Acceptance;
use Page\NavigationPage as NavigationPage;
use Codeception\Scenario;

class navigation extends \AcceptanceTester
{
  
    protected $navigationPage = null;

    public function __construct(Scenario $scenario)
    {
        parent::__construct($scenario);

        // Initialize Page Objects
        $this->navigationPage = new NavigationPage($scenario);
    
    }

    /**
     * @When I am on homepage
     */
     public function iAmOnHomepage()
     {
        $I = $this;
        
        $I->amOnPage("/");

     }

    /**
     * @Then the navigation should work
     */
     public function theNavigationShouldWork()
     {
        $I = $this;
        $I->see("HOME");        
        $I->click("Football"); 
        $I->canSeeInTitle(NavigationPage::$Football_title);
        $I->click("Sport"); 
        $I->canSeeInTitle(NavigationPage::$Sport_title);
        $I->click("Boxing"); 
        $I->canSeeInTitle(NavigationPage::$Boxing_title);
        $I->click("Motorsport"); 
        $I->canSeeInTitle(NavigationPage::$Motorsport_title);
    }

    /**
     * @When I am logged in
     */
     public function iAmLoggedIn()
     {
      $I = $this;  
      $I->wantTo('perform actions and see result');
      $I->loginAsAdmin();
      //$I->amOnPluginsPage();
      //$I->activatePlugin('vip-scanner');
      $I->seePluginActivated('vip-scanner'); 
      $I->amOnPage("/");
     }

}