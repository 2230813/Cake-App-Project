Feature: Viewing catalog contents
  As a customer
  I want to view the contents of the catalog
  So that I can see the items

Scenario: Viewing catalog
  Given I ham logged in
  When I click on "View Catalog"
  Then I should be redirected to "http://localhost/Cake/catalog"