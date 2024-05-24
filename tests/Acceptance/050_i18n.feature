Feature: Language selection for the web application
  As a bilingual customer
  I want to select my preferred language on the web application
  So that I can navigate the platform in the language I am most comfortable with

Scenario: Switching languages on the website to french
  Given I am on any page of the web application
  When I click "FR"
  Then the page content should be displayed in french

Scenario: Switching languages on the website to english
  Given I am on any page of the web application
  When I click "EN"
  Then the page content should be displayed in english