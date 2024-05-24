Feature: Order cancellation by customer
  As a customer
  I want to be able to cancel my order before it's processed
  So that I can avoid unwanted purchases

Scenario: Cancelling an order from the account dashboard
  Given I am logged in 
  And in the view details for "order1"
  When I click on the "cancel" button
  Then my order should be cancelled