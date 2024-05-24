Feature: Deleting reviews by customers
  As a customer
  I want to review products that I have purchased
  So that I can provide feedback and help other customers with their choices

Scenario: Deleting a review for a purchased product
  Given I on the "widget" details page
  When I click on "Delete" on my review
  And confirm my deleteion
  Then the review should be deleted for that "widget"