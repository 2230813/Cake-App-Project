Feature: Live tracking of cake order delivery
  As a customer who has ordered a cake for delivery
  I want to track the delivery status in real-time
  So that I know when to expect my order to be completed

Scenario: Accessing live order tracking after purchase
  Given I have selected  my cake order in my order history
  When I check the order status in my account
  Then I should be able to see its status