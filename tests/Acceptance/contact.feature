Feature: messaging system for communication with bakery staff
  As a customer with questions about my order
  I want to message the bakery staff directly
  So that I can get quick answers and updates on my order

Scenario: Initiating a chat with bakery staff
  Given I have a question about my cake order
  And I am logged into my account on the web application
  When I navigate to the "Contact Us"
  Then I should be sent to the "Contact Us" page
  And I can send my question and receive a response

Scenario: Receiving a follow-up message from bakery staff
  Given I have previously initiated a chat with bakery staff about my order
  When bakery staff sends a follow-up message
  Then  I can view and respond to the message in the in-app chat