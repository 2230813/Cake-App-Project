Feature: Two-Factor Authentication Setup
  As a customer concerned with account security
  I want to enable two-factor authentication
  So that my account has an additional layer of security

Scenario: Enabling two-factor authentication
  Given I am on the two-factor authentication setup page
  When I follow the steps to enable two-factor authentication
  Then I should be required to verify my identity with a second factor on future logins