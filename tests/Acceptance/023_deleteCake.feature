Feature: Removing items from the shopping cart
  As a customer
  I want to remove items from my shopping cart
  So that I can discard products I no longer wish to purchase

Scenario: Removing a single item from the cart
  Given I am viewing my shopping cart
  And I have multiple products listed
  When I click the remove link for a product
  Then that product should be removed from the cart
  And the cart total should be updated accordingly