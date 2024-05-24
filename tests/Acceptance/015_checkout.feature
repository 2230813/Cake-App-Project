Feature: Checkout process
  As a customer
  I want to be able to proceed to checkout
  So that I can complete my purchase

Scenario: Initiating the checkout process
  Given I have products in my shopping cart
  And in "http://localhost/Cart/index"
  When I click the “Proceed to Checkout” button
  Then I should be taken to "http://localhost/Cart/checkout"