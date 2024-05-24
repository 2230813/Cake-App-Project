Feature: Admin Product Management
  As the business owner
  I want to manage the product listings on my web application
  So that I can update my offerings as needed

Scenario: Viewing product list
  Given the admin is logged in
  When the admin clicks "Manage Products"
  Then the admin should see the products listing
  And in "http://localhost/Product/adminCreate"