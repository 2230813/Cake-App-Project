Feature: Order viewing by customer
  As a customer
  I want to be able to view my order
  So that I can see what I purchased

Scenario: Viewing an order
  Given I am logged in 
  And in "http://localhost/Profile/index"
  When I click on the "view" button for "order1"
  Then my order be in the view details page for "order1"