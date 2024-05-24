Feature: Admin Product Management
  As the business owner
  I want to manage the product listings on my web application
  So that I can update my offerings as needed

Scenario: Performing a product search with results
  Given the admin is logged in
  And is on the cake list page
  When I enter "chocolate fudge cake" into the search bar
  And I press the "Search" button
  Then I should see products related to "chocolate fudge cake" listed