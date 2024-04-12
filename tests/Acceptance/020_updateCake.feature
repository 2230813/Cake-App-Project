Feature: Admin Product Management
  As the business owner
  I want to manage the product listings on my web application
  So that I can update my offerings as needed

Scenario: Adding a new product
  Given the admin is logged into the admin dashboard
  When I click on "add product"
  And I enter "widget" in the "name"
  And I enter "..." in the "..."
  And I click "add"
  Then the "widget" should be listed in the online catalog

Scenario: Adding a new product
  Given the admin is logged into the admin dashboard
  When I click on "add product"
  And I enter "widget2" in the "name"
  And I enter "..." in the "..."
  And I click "add"
  Then the "widget2" should be listed in the online catalog

Scenario: Updating an existing product
  Given the admin is logged into the admin dashboard
  And an existing product needs updating
  When the admin updates the product's details
  Then the product's information should be updated in the catalog