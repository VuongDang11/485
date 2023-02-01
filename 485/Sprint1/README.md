ID: PBI #3
Title: Advisor – Retrieve a Previously Created Plan
Narrative:
As an advisor
I want to click/use an existing link containing a six-character identifier (token)
So that I can view the data previously saved (classes and comments) in a plan (F, W, Sp, Su quarters) in their respective 
locations

Acceptance Criteria:

When I navigate to a plan page with an invalid or unused identifier/token
Then I should be redirected to the home page
When I navigate to a plan page with a valid identifier/token
Then I should see the plan with my previously saved text in the F, W, Sp, Su fields
And I should be able to edit the previously saved text on the field

Given I navigate to a plan page with a valid identifier/token
And the previously saved plan had text in one or more of the fields
When I edit previously saved text in the F, W, Sp, Su fields
And I click on the Save button
Then I should see a confirmation that the plan has been saved
And I should see a Last Updated field on the plan that shows the date and time when the save occurred

Given I navigate to a plan page with a valid identifier/token
And the previously saved plan had text in one or more of the fields
When I do NOT edit previously saved text in the F, W, Sp, Su fields
And I click on the Save button
Then I should see a confirmation that the plan has been saved
And I should see a Last Updated field on the plan that shows the date and time when the save occurred

Given I navigate to a plan page with a valid identifier/token
And the previously saved plan had text in one or more of the fields
When I remove text from the field (clearing the field)
And I click on the Save button
Then I should see a confirmation that the plan has been saved
And I should see a Last Updated field on the plan that shows the date and time when the save occurred

Given I navigate to a plan page with a valid identifier/token
And the previously saved plan had NO text in any of the fields
When I add new text in the F, W, Sp, Su fields
And I click on the Save button
Then I should see a confirmation that the plan has been saved
And I should see a Last Updated field on the plan that shows the date and time when the save occurred
4

Given I navigate to a plan page with a valid identifier/token
And the previously saved plan had text in one or more of the fields
When I edit previously saved text in the F, W, Sp, Su fields
And I click on the Back button
Or navigate manually to any other page
Then nothing should be saved
And no warnings or notifications should appear
Notes:
