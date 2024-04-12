Feature: Viewing order history
  As a customer
  I want to view my past orders
  So that I can re-order products or assess my purchase history

Scenario: Accessing order history
  Given I am logged in
  When I navigate to my account's order history page
  Then I should see a list of all my past orders with their details