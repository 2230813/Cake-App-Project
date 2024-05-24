Feature: Admin Order Management
  As an admin
  I want to manage orders through the dashboard
  So that I can ensure orders are processed and fulfilled correctly

Scenario: Viewing order list
  Given the admin logged in
  When the admin is on "http://localhost/Order/manage"
  Then the admin should see the order list