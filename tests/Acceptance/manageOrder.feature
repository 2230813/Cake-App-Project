Feature: Admin Order Management
  As an admin
  I want to view and manage orders through the dashboard
  So that I can ensure orders are processed and fulfilled correctly

Scenario: Viewing a new order
  Given the admin is on the dashboard
  When a new order is placed by a customer
  Then the admin should see the order appear in the order management system

Scenario: Updating the status of an order
  Given the admin is viewing the details of an order
  When the admin updates the status of the order
  Then the customer should be notified of the status change