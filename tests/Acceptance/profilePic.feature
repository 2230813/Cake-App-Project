Feature: Profile Picture Update
  As a registered customer
  I want to update my profile picture
  So that my profile has a personalized appearance

Scenario: Adding a profile picture
  Given I am on my profile edit page
  When I upload a new profile picture
  And I save the changes
  Then my new profile picture should be displayed on my profile