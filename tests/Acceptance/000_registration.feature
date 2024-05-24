Feature: User Registration
  As a potential customer
  I want to be able to register for an account on the web application
  So that I can save my preferences and order history for future visits

Scenario: Successful registration with email and password
  Given the user is on "http://localhost/User/register"
  When the user inputs "User1" in name
  And "user@vanier.com" in email
  And "0000" in password
  And clicks "Sign Up"
  Then the user should be directed to "http://localhost/User/login"
  And the user is created