Feature: Language selection for the web application
  As a bilingual customer
  I want to select my preferred language on the web application
  So that I can navigate the platform in the language I am most comfortable with

Scenario: Switching languages on the website
  Given I am on any page of the web application
  When I select a different language from the language dropdown
  Then the page content should be displayed in the selected language