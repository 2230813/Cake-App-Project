Feature: Pricing updates based on customization
  As a customer
  I want to see how different customizations affect the price
  So that I can make informed decisions about the features I choose

Scenario: Customizing a cake and viewing the updated price
  Given I am customizing a cake product
  When I select additional features like "extra frosting" or "special decorations"
  Then the price should update in real-time to reflect these customizations