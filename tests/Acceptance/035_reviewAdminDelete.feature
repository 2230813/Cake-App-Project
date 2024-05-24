Feature: Admin review Management
  As the business owner
  I want to manage the reviews on my web application
  So that I can control reviews

Scenario: deleting reviews
  Given the admin is logged in
  And is on "http://localhost/Review/manage"
  When the admin clicks on "Delete" for "review1"
  And confirms the deletion
  Then "review1" should be deleted