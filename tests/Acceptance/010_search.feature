Feature: Product search functionality
  As a customer
  I want to search for products using keywords
  So that I can find specific items quickly

Scenario: Performing a product search with results
  Given I am on the "http://localhost/Cake/catalog"
  When I enter "chocolate fudge cake" into the search bar
  And I press the "Filter" button
  Then I should see products related to "chocolate fudge cake" listed