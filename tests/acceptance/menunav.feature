Feature: Navigation
  In order to read The Sun online
  As a user on The Sun page
  I should be able to use the navigation

Scenario: Navigation when no user is logged in
	When I am on homepage
    Then the navigation should work

@test
Scenario: Navigation when a user is logged in
	When I am on homepage
	And  I am logged in
    Then the navigation should work
