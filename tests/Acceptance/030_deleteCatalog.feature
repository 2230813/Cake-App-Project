Feature: Delete Product

  In order to manage the product catalog effectively
  As an admin
  I need to remove products that are no longer available

  Scenario: Delete a product
    Given I am on the admin dashboard
    And I have a product named "Chocolate Cake"
    When I select the "Chocolate Cake"
    And click on the "Delete Product" button
    Then I should not see "Chocolate Cake" in the inventory

Scenario: Delete a product
    Given I am on the admin dashboard
    And I am on the catalog page
    When I select the "widget"
    And click on the "Delete Product" button
    Then I should not see "widget" in the inventory

    #delete widget and widget2