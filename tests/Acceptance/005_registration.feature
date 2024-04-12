Feature: User Registration
  As a potential customer
  I want to be able to register for an account on the web application
  So that I can save my preferences and order history for future visits

Scenario: Successful registration with email and password
  Given the user is on the registration page
  When the user inputs a valid email address and password and submits the form
  Then the user should be registered in the system

Scenario: Registration with an existing email
  Given the user is on the registration page
  And the email the user wants to register with is already in use
  When the user tries to register with that email
  Then the user should see an error message indicating the email is already in use