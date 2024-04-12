Feature: Product reviews by customers
  As a customer
  I want to review products that I have purchased
  So that I can provide feedback and help other customers with their choices

Scenario: Writing a review for a purchased product
  Given I have purchased a product and am logged in
  When I visit the product page and submit a review
  Then my review should be displayed under the product for other customers to see