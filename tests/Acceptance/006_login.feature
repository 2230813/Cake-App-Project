Feature: User Login
  As a registered customer
  I want to log into my account on the web application
  So that I can access my personalized dashboard

Scenario: Successful login with email and password
  Given the user is on the login page
  When the user inputs a registered email and correct password
  And the user submits the login form
  Then the user should be logged in

Scenario: Failed login with incorrect password
  Given the user is on the login page
  When the user inputs a registered email and an incorrect password
  And the user submits the login form
  Then the user should see an error message about incorrect credentials