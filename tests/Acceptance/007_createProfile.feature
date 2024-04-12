Feature: Profile Creation
  As a new customer
  I want to create a profile on the web application
  So that I can personalize my experience and store my preferences

Scenario: Successful profile creation
  Given I am on the registration page
  When I provide all required information including my name, email, and password
  And I submit the registration form
  Then I should be notified that my profile has been successfully created
  And I should be automatically logged into my new profile