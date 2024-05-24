Feature: Viewing Profile
  As a user
  I want to be see the profile page
  So that I can see my information

Scenario: Viewing Profile
  Given I am logged in
  And I click on "View Profile"
  Then I should be redirected to "http://localhost/Profile/index"