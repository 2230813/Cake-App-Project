Feature: Vuewing reviews by customers
  As a customer
  I want to see reviews for a products
  So that I can see feedback

Scenario: Seeing a review for a product
  Given I on the "widget" details page
  When I scroll down
  Then the review should see reviews for that "widget"