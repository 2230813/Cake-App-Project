Feature: Submission of custom cake designs by customers
  As a customer
  I want to submit my own cake design ideas
  So that the bakery can create a cake based on my personal design

Scenario: Uploading a custom cake design
  Given I am on the custom cake order page
  When I upload an image of my cake design and submit the form
  Then the bakery should receive my design submission