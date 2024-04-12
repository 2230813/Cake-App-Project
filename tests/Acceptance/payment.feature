Feature: Processing payments
  As a customer
  I want to pay for my orders using different payment methods
  So that I can complete transactions using the most convenient payment service

Scenario: Making a payment with a credit card
  Given I am at checkout with products in my cart
  When select the credit card payment option
  Then I can enter my credit card information and submit payment

Scenario: Making a payment with a paypal
  Given I am at checkout with products in my cart
  When select the paypal payment option
  Then I can enter my paypal information and submit payment