Feature: User profile management
  As a registered customer
  I want to be able to update my profile information
  So that I can keep my contact details accurate

Scenario: Updating profile information
  Given I am logged in and on my profile page
  When I update my contact details and save the changes
  Then my user profile should be updated with the new contact details