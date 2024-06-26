Feature: Admin Order Management
  As an admin
  I want to manage orders through the dashboard
  So that I can ensure orders are processed and fulfilled correctly

Scenario: Viewing a new order
  Given the admin logged in
  And the admin is on "http://localhost/Order/manage"
  When the admin clicks on "view" for "order1"
  Then the admin should see the details for "order1"