Feature: Removing items from the shopping cart
  As a customer
  I want to remove items from my shopping cart
  So that I can discard products I no longer wish to purchase

Scenario: Removing a single item from the cart
  Given I am in "http://localhost/Cart/index"
  And I have multiple products listed
  When I click "Remove" on "widget"
  Then "widget" should be removed from the cart
  And the cart total should be updated accordingly