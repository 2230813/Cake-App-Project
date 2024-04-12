Feature: Admin Login
  As an admin
  I want to log into the admin dashboard securely
  So that I can manage the web application

Scenario: Successful admin login with extra security measures
  Given the admin is on the admin login page
  When the admin inputs a registered email, correct password, and passes additional security verification
  And the admin submits the login form
  Then the admin should be redirected to the admin dashboard