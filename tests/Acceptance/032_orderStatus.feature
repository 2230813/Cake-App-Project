Feature: Admin Order Management
  As an admin
  I want to manage orders through the dashboard
  So that I can ensure orders are processed and fulfilled correctly

Scenario: Updating an order
  Given the admin logged in
  And the admin is on the details page for "order1"
  When the admin clicks on "Update"
  And changes the status
  Then "order1" status should be updated