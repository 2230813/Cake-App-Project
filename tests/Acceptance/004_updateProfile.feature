Feature: User profile management
  As a registered customer
  I want to be able to update my profile information
  So that I can keep my contact details accurate

Scenario: Updating profile information
  Given I am logged in
  And on "http://localhost/Profile/edit"
  When I input "userFisrt2" in First Name
  And I input "userLast2" in Last Name
  And I input "123 Cake dr 2" in Address
  And I input "514-111-1111 2" in Phone Number
  And i click "Update Profile 2"
  Then my user profile should be updated
  And I am directed to "http://localhost/Profile/index" with the new details