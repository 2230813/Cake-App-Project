Feature: Updating product quantity in the cart
  As a customer
  I want to be able to change the quantity of the items in my cart
  So that I can adjust my order before checkout

Scenario: Changing the quantity of a product
  Given I am viewing my shopping cart
  And I have a product with an initial quantity of 1
  When I increase the product quantity
  Then the shopping cart should update to reflect the new quantity
  And the total price should update accordingly