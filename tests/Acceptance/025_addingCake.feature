Feature: Admin Product Management
  As the business owner
  I want to manage the product listings on my web application
  So that I can update my offerings as needed

Scenario: Adding a new product
  Given the admin is logged into the admin dashboard
  When I click on "add product"
  And I enter "widget" in the "name"
  And I enter "Custom Cake" in the "type"
  And I enter "20" in the "price"
  And I enter "blabla" in the "details"
  And I enter "1" in the "quantity"
  And I enter and image link in the "image"
  And I click "add"
  Then the "widget" should be listed in the online catalog

Scenario: Adding a new product
  Given the admin is logged into the admin dashboard
  When I click on "add product"
  And I enter "widget2" in the "name"
  And I enter "Wedding Cake" in the "type"
  And I enter "13.99" in the "price"
  And I enter "hello world" in the "details"
  And I enter "3" in the "quantity"
  And I enter an image link in the "image"
  And I click "add"
  Then the "widget2" should be listed in the online catalog