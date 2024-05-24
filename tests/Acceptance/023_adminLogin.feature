Feature: Admin Login
  As an admin
  I want to log into the admin dashboard securely
  So that I can manage the web application

Scenario: Successful admin login with extra security measures
  Given the admin is on the "http://localhost/User/login"
  When the admin inputs a "Admin" in name
  And "1234" in password
  And the admin presses "Login"
  Then the admin should be redirected to "http://localhost/Admin/dashboard"