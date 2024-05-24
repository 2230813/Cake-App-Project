Feature: Add to Cart functionality
  As a customer
  I want to be able to add products to my shopping cart
  So that I can consolidate my purchases before checking out

Scenario: Adding a single product to the cart
  Given I am on the "widget1" product details page
  When I click on the “Add to Cart” button for a product
  Then the "widget1" product should be added to my shopping cart

Scenario: Adding multiple products to the cart
  Given I am on the "widget3" product details page
  When I click on the “Add to Cart” button for a product
  Then the "widget3" product should be added to my shopping cart