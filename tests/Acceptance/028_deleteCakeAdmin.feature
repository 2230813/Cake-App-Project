Feature: Admin Product Management
  As the business owner
  I want to manage the product listings on my web application
  So that I can update my offerings as needed

Scenario: Deleting an existing product
  Given the admin is logged in
  And in "http://localhost/Product/adminCreate"
  When the admin clicks "delete" for "widget"
  And confirms the deletion
  Then the cake should be deleted