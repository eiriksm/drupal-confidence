Feature: Logging in
  In order to be confident the site works after a deployment
  As a site owner
  I want to know that people can log in

  Scenario: Anonymous users get a login form
    Given I am an anonymous user
    When I visit "/user/login"
    Then I should see the button "Log in"

  @api
  Scenario: Users can log in
    Given I am logged in as a user with the "authenticated" role
    Then I should see the link "Log out"

  @api @javascript
  Scenario: Users can log in, in a real browser
    Given I am logged in as a user with the "authenticated" role
    Then I should see the link "Log out"
