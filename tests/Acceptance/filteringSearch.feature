Feature: Search for products by category
  As a customer
  I want to filter products by specific categories
  So that I can quickly find a selection of cakes suitable for different occasions

Scenario: Selecting a product category
  Given I am on the product catalog page
  When I select a category like "Wedding Cakes"
  Then I should see a list of products related only to the "Wedding Cakes" category