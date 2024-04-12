Feature: Order cancellation by customer
  As a customer
  I want to be able to cancel my order before it's processed
  So that I can avoid unwanted purchases

Scenario: Cancelling an order from the account dashboard
  Given I am logged in and viewing my account dashboard
  And I have a pending order
  When I click on the cancel order button
  Then my order should be marked as cancelled