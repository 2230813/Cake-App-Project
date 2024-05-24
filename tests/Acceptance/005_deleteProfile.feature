Feature: Profile Deletion
  As a customer who no longer needs the service
  I want to delete my profile
  So that my information is removed from the web application

Scenario: Deleting a profile
  Given I am on "http://localhost/Profile/delete"
  When I click on "Delete Profile"
  Then my profile should be permanently deleted from the web application