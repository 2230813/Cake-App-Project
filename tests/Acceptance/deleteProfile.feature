Feature: Profile Deletion
  As a customer who no longer needs the service
  I want to delete my profile
  So that my information is removed from the web application

Scenario: Deleting a profile
  Given I am on the account settings page
  When I request profile deletion and confirm my action
  Then my profile should be permanently deleted from the web application
  And I should be logged out and redirected to the homepage