Feature: Adding a custom message on the cake
  As a customer ordering a cake
  I want to request a custom message to be written on the cake
  So that I can personalize it for the occasion

Scenario: Requesting a custom message during the order process
  Given I am customizing my cake order
  When I enter a custom message in the provided text field
  And I add the cake to my cart
  Then my custom message should be included with the cake order details