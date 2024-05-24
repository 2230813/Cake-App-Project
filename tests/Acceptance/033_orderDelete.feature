Feature: Admin Order Management
  As an admin
  I want to manage orders through the dashboard
  So that I can ensure orders are processed and fulfilled correctly

Scenario: Deleting a new order
  Given the admin logged in
  And the admin is on "http://localhost/Order/manage"
  When the admin clicks on "Delete" for "order1"
  Then "order1" should be deleted