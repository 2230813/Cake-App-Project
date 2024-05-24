Feature: Product reviews by customers
  As a customer
  I want to review products that I have purchased
  So that I can provide feedback and help other customers with their choices

Scenario: Writing a review for a purchased product
  Given I on the "widget" details page
  When I click on "Write a Review"
  And I input a rating
  And write "Wow!" in comment
  And click on "Submit"
  Then the review should be written for that "widget"