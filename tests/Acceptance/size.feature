Feature: Selection of cake sizes
  As a customer ordering a cake
  I want to select the size of the cake
  So that it can be appropriate for the number of guests I will have

Scenario: Choosing a cake size
  Given I am customizing my cake order
  When I select a specific size option
  Then the total price should update to reflect the size choice