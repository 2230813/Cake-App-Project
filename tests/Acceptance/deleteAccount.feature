Feature: Account Deletion
  As a user
  I want to have the option to delete my account from the web application
  So that my information and data are permanently removed for privacy and security reasons

Scenario: User initiates account deletion
  Given I am logged into my account
  And I navigate to the "Account Settings" page
  When I click on the "Delete Account" button
  And I am asked for confirmation to ensure I want to delete my account
  And I confirm the deletion
  Then my account should be permanently deleted from the database
  And I should be logged out of the application
  And I should be redirected to the homepage