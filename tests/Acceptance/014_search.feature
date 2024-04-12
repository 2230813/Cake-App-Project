Feature: Product search functionality
  As a customer
  I want to search for products using keywords
  So that I can find specific items quickly

Scenario: Performing a product search with results
  Given I am on the homepage or product catalog page
  When I enter "chocolate fudge cake" into the search bar
  And I press the "Search" button
  Then I should be taken to the search results page
  And I should see products related to "chocolate fudge cake" listed

Scenario: Performing a product search with no results
  Given I am on the homepage or product catalog page
  When I enter "blueberry lemon tart" into the search bar
  And I press the "Search" button
  Then I should be taken to the search results page
  And I should see a message indicating "No results found for 'blueberry lemon tart'"