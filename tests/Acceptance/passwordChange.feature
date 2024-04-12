Feature: Password Change
  As a security-conscious customer
  I want to change my password
  So that I can maintain the security of my account

Scenario: Successful password change
  Given I am on the account settings page
  When I enter my current password and a new password
  And I submit the password change request
  Then I should be notified that my password has been successfully changed