Feature: Profile Creation
  As a new customer
  I want to create a profile on the web application
  So that I can personalize my experience and store my preferences

Scenario: Successful profile creation
  Given I am on "http://localhost/Profile/create"
  When I input "userFirst" in First Name
  And I input "userLast" in Last Name
  And I input "123 Cake dr" in Address
  And I input "514-111-1111" in Phone Number
  And i click "Create Profile"
  Then the user should directed to "http://localhost/Profile/index"
  And my profile should be created