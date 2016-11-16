@homepage
Feature: Homepage
  In order to read The Sun online
  As a user on The Sun page
  I should be able to see the homepage

  Scenario: Homepage elements visible
    Given I am on the homepage
    Then I should see the header elements
    And I should see the article module elements
    And I should see the footer elements

  # @javascript @wip
  # Scenario Outline: Advertisements on homepage
  #   Given I resize to <size>
  #   When I am on the homepage
  #   And I press the <advertisement> homepage advert
    

  #   Examples:
  #     |size  |advertisement|
  #     |small |"Billboard"  |
  #     |large |"Billboard"  |
  #     |iPhone|"Billboard"  |
  #     |tablet|"Billboard"  |
  #     |small |"MPU"        |
  #     |large |"MPU"        |
  #     |iPhone|"MPU"        |
  #     |tablet|"MPU"        |