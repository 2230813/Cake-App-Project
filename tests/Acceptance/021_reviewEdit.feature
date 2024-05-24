Feature: Editing reviews by customers
  As a customer
  I want to review products that I have purchased
  So that I can provide feedback and help other customers with their choices

Scenario: Editing a review for a purchased product
  Given I on the "widget" details page
  When I click on "Edit" on my review
  And I input a rating
  And write "Wow!!!" in comment
  And click on "Submit"
  Then the review should be updated for that "widget"