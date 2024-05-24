Feature: User Login
  As a registered customer
  I want to log into my account on the web application
  So that I can access my personalized dashboard

Scenario: Successful login with email and password
  Given the user is on "http://localhost/User/login"
  And does not have a profile
  When the user inputs "User1" in name
  And "0000" in password
  And clicks on "Login"
  Then the user should directed to "http://localhost/Profile/create"

  Scenario: Successful login with email and password
  Given the user is on "http://localhost/User/login"
  And does have a profile
  When the user inputs "User1" in name
  And "0000" in password
  And clicks on "Login"
  Then the user should directed to "http://localhost/Profile/index"