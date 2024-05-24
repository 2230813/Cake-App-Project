Feature: Adding payments
  As a customer
  I want to add a payment method
  So that I can complete transactions with that preferred payment option

Scenario: Adding payment information
  Given I am in "http://localhost/Profile/add_payment"
  When I input "User1" in Card Holder Name
  And "1234123412341234" in Card Number
  And "2060-12-23" in Expiry date
  And click "Add Payment"
  Then my payment information is saved
  And I am directed to "http://localhost/Profile/index"