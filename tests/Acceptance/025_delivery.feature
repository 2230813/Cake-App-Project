Feature: Selecting delivery options
  As a customer
  I want to choose from multiple delivery options
  So that I can receive my order in the most convenient way

Scenario: Choosing a delivery option during checkout
  Given I have added products to my cart and am at checkout
  When I choose a delivery option like "Pickup"
  Then my delivery preference should be saved with the order