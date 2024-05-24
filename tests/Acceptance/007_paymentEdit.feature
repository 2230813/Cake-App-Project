Feature: Editing payments
  As a customer
  I want to edit a payment method
  So that I can complete transactions with that preferred payment option

Scenario: Editing payment information
  Given I am in "http://localhost/Profile/edit_payment"
  When I input "User2" in Card Holder Name
  And "0987098709870987" in Card Number
  And "2060-12-24" in Expiry date
  And click "Edit Payment"
  Then my payment information is saved
  And I am directed to "http://localhost/Profile/index"