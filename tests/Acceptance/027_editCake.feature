Feature: Admin Product Management
  As the business owner
  I want to manage the product listings on my web application
  So that I can update my offerings as needed

Scenario: Updating an existing product
  Given the admin is logged in
  And in the edit page for "widget"
  When the admin updates the product's details
  Then the product's information should be updated in the catalog