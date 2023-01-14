# Sprint1

ID: PBI #1

Title: Advisor – Create a New Plan

Narrative:
As an advisor
I want to create a new education plan
So that I can have a starting place to work with an individual student and eventually save their plan

Acceptance Criteria:
Given I am on the home page
When I click on the button to create a new plan
Then I should see a new blank plan page appear
And that blank plan should have a visible unique six-character identifier (token)
And that blank plan should have 4 fields for me to type classes and notes for 4 quarters (F, W, Sp, Su)
Given I am on the home page
And I have previously created one or more plans
When I click on the button to create a new plan
Then I should see a new blank plan page appear
And that blank plan should have a visible unique six-character identifier (token)
And that identifier (token) should be different from any of the previously created plan identifiers
Given I am on a plan page
When I click the browser back button to return to the homepage
And I click on the button to create a new plan
Then I should see a new blank plan page appear
And that blank plan should have a visible unique six-character identifier (token)
And that identifier (token) should be different from any of the previously created plan identifiers
