Feature: View Product
  As a customer
  I want to be able to view products
  So that I can learn about the product before adding to cart

Scenario: Viewing a single product
  Given I am on the "http://localhost/Cake/catalog"
  When I click on the “View Details” button for a "widget" product
  Then the "widget" product details should be shown