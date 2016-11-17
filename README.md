## Overview

This repo has acceptance tests using codeception.

### Why Codeception?

1. Codeception provides easy high-level commands  like wantTo(), click(), fillField() etc

2. Has support for in built WordPress functions http://codeception.com/for/wordpress,
https://github.com/lucatume/wp-browser

3. Good documentation. http://codeception.com/docs/modules/WebDriver, http://codeception.com/docs/modules/PhpBrowser 

4. Easy to use and scalable using Page objects, step objects. Every team member can get involved and contribute in creating  acceptance, functional and unit tests.

5. Very popular in WordPress companies. VIP partners like 10up, XWP, rtCamp use it to test their projects.


## Install Selenium to run tests in browsers

http://docs.seleniumhq.org/download/

Grab the latest selenium server standalone version 

Go to the directory where it was installed and run:  `java -jar selenium-server-standalone-3.0.1.jar`

### Set up composer

Install composer globally in your system

## Installing Codeception 

1. Clone this repo

2. Run `composer update`

## Update acceptance.suite.yml file

Update your target url and credentials in .yml file

 
## Codeception + BDD

Write Gherkin .feature files and step definitions. Step and page objects are used.

Page objects are used for storing common elements and methods. Gherkin step definitions are in step files. 

### Creating Page objects

`wpcept generate:pageobject NavigationPage`

### Creating Step objects

`wpcept generate:stepobject acceptance stepobjname`

### Running codeception tests

Please refer http://codeception.com/docs/reference/Commands#Run

`wpcept run acceptance featurename.feature`

#### Use steps or debug flag for more details

`wpcept run acceptance featurename.feature --steps`


## Codeception + Browserstack

No need to run selenium on local if using browserstack

Make changes in acceptance.suite.yml and run

`wpcept run acceptance featurename.feature --env chrome --env firefox --env ie --env safari --env android --env ios --steps`

**Please note** 

Browserstack config is added in this repo. You need to update username and key values in acceptance.suite.yml. To run without browserstack edit the acceptance.suite.yml file and comment out environments 

If vendor/bin is not added to path 
you will have to run tests like `vendor/bin/wpcept run acceptance featurename`













