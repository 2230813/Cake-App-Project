Feature: Admin review Management
  As the business owner
  I want to manage the reviews on my web application
  So that I can control reviews

Scenario: Viewing reviews
  Given the admin is logged in
  And clicks on "Review Management"
  Then I should be directed to "http://localhost/Review/manage"