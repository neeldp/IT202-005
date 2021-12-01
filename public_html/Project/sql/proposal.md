# Project Name: Simple Arcade
## Project Summary: This project will create a simple Arcade with scoreboards and competitions based on the implemented game.
## Github Link: https://github.com/neeldp/IT202-005/tree/prod
## Project Board Link: https://github.com/neeldp/IT202-005/projects/1
## Website Link: https://ndp69-prod.herokuapp.com/Project/login.php
## Your Name: Neel Patel

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template
--> 
### Proposal Checklist and Evidence

- Milestone 1
    - [x] (11/10/2021) User will be able to register a new account
        - Status: Completed
        - Direct Link: https://ndp69-prod.herokuapp.com/Project/register.php        
        - Pull Request: https://github.com/neeldp/IT202-005/pull/30
        - Screenshots
        - Screenshot #1 https://user-images.githubusercontent.com/90344327/141401292-a0c996bf-b580-4c29-82e0-a00e81cd2a79.png
          - Screenshot #1 Email validation
        - Screenshot #2 https://user-images.githubusercontent.com/90344327/141341071-ee53a70e-df3c-46d1-b420-47999a0d94ad.png
          - Screenshot #2 Password must be hashed (plain text passwords will lose points)
        - Screenshot #3 https://user-images.githubusercontent.com/90344327/141341071-ee53a70e-df3c-46d1-b420-47999a0d94ad.png
          - Screenshot #3 Users Table
        - Screenshot #4 https://user-images.githubusercontent.com/90344327/141340216-b060a2bb-8e83-413d-8f22-1dc04fd9376a.png
          - Screenshot #4 Email is required
        - Screenshot #5 https://user-images.githubusercontent.com/90344327/141340288-6bb72182-9258-4e6e-bcb9-e717671c2d6a.png
          - Screenshot #5 Username is required

    - [x] (11/10/2021) User will be able to login to their account (given they enter the correct credentials)
        - Status: Completed
        - Direct Link: https://ndp69-prod.herokuapp.com/Project/login.php       
        - Pull Request: https://github.com/neeldp/IT202-005/pull/32        
        - Screenshots
        - Screenshot #1 https://user-images.githubusercontent.com/90344327/141405220-eee8137a-433b-42d3-aed1-17a9967ac88f.png      
          - Screenshot #1 User can login with email or username    
        - Screenshot #2 https://user-images.githubusercontent.com/90344327/141347534-a622c171-c4f7-4774-b450-f6c29678312a.png        
          - Screenshot #2 User should see friendly error messages when an account either doesn’t exist or if passwords don’t match
        - Screenshot #3 https://user-images.githubusercontent.com/90344327/141347659-72928d6b-cf40-4289-95df-d6af5b828d69.png        
          - Screenshot #3 Logging in should fetch the user’s details (and roles) and save them into the session (Proof)
        - Screenshot #4 https://user-images.githubusercontent.com/90344327/141347899-8decac49-ab59-4162-b67f-67d78d6e527b.png       
          - Screenshot #4 User will be directed to a landing page upon login

    
    - [x] (11/10/2021) User will be able to logout
        - Status: Completed
        - Direct Link: https://ndp69-prod.herokuapp.com/Project/logout.php        
        - Pull Request: https://github.com/neeldp/IT202-005/pull/34    
        - Screenshots
        - Screenshot #1 https://user-images.githubusercontent.com/90344327/141356391-9756dcef-6f29-43a8-9c4a-cd95b9375637.png  
          - Screenshot #1 Logging out will redirect to login page and session destroyed
        - Screenshot #2 https://user-images.githubusercontent.com/90344327/141356475-217ce162-2520-4469-8945-3fa1926dc472.png        
          - Screenshot #2 User should see a message that they’ve successfully logged out
       
    

    - [x] (11/10/2021) security rules implemented
        - Status: Completed
        - Pull Request: https://github.com/neeldp/IT202-005/pull/36 
        - Screenshots       
        - Screenshot #1 https://user-images.githubusercontent.com/90344327/141371549-76495877-07bb-45ea-b512-5983732346ef.png            
          - Screenshot #1 Function to check if user is logged in
        - Screenshot #2 https://user-images.githubusercontent.com/90344327/141371699-9272bf5e-a365-4c8d-8647-b049ae638442.png            
          - Have a roles table

    
    - [x] (11/10/21) Roles implemented
        - Status: Completed
        - Pull Request: https://github.com/neeldp/IT202-005/pull/37
        - Screenshots
        - Screenshot #1 https://user-images.githubusercontent.com/90344327/141373062-90dc6119-b69b-443b-8e17-9fa8d9c72867.png      
          - Screenshot #1 Have a Roles table	(id, name, description, is_active, modified, created)
        - Screenshot #2 https://user-images.githubusercontent.com/90344327/141373123-bd4dbecb-b816-4c64-bacd-8ec62ed677a6.png        
          - Screenshot #2 Have a User Roles table (id, user_id, role_id, is_active, created, modified)
        - Screenshot #3 https://user-images.githubusercontent.com/90344327/141373272-69fec1f8-f691-4e2e-afa3-51ce438557a7.png       
          - Screenshot #3 Include a function to check if a user has a specific role (we won’t use it for this milestone but it should be usable in the future)

    
    - [x] (11/10/2021) Site should have basic styles/theme applied; everything should be styled
        - Status: Completed
        - Pull Request: https://github.com/neeldp/IT202-005/pull/39
        - Screenshots
        - Screenshot #1 https://user-images.githubusercontent.com/90344327/141383709-d287d39a-bbe1-4bae-abe3-f278cfda1d1a.png     
          - Screenshot #1 styled forms/input, navigation bar, etc


    - [x] (11/10/2-021) Any output messages/errors should be “user friendly”
        - Status: Completed
        - Pull Request: https://github.com/neeldp/IT202-005/pull/40 
        - Screenshots
        - Screenshot #1 https://user-images.githubusercontent.com/90344327/141384746-ebe393fa-12f6-4877-bfef-661f78493763.png   
        - Screenshot #2 https://user-images.githubusercontent.com/90344327/141384734-e22233da-b4bf-4d26-94ba-8b4d55da057d.png          
          - Any technical errors or debug output displayed will result in a loss of points


    - [x] (11/10/2021) User will be able to see their profile
        - Status: Completed
        - Direct Link: https://ndp69-prod.herokuapp.com/Project/profile.php        
        - Pull Request: https://github.com/neeldp/IT202-005/pull/41 
        - Screenshots
        - Screenshot #1 https://user-images.githubusercontent.com/90344327/141387521-2a3a6656-a842-434e-953b-01e6afba6679.png     
          - Screenshot #1 User profile 


    - [x] 11/10/2021 User will be able to edit their profile
        - Status: Completed
        - Direct Link: https://ndp69-prod.herokuapp.com/Project/profile.php          
        - Pull Request: https://github.com/neeldp/IT202-005/pull/42
        - Screenshots
        - Screenshot #1 https://user-images.githubusercontent.com/90344327/141391317-dadb2d6c-f9f6-41b5-9aeb-9308e92a21e0.png                 
          - Screenshot #1 Changing username/email should properly check to see if it’s available before allowing the change
        - Screenshot #2 https://user-images.githubusercontent.com/90344327/141391587-1a76757d-ba7c-4903-8203-826fea89239e.png
          - Screenshot #2 Password reset (only if the existing correct password is provided)


- Milestone 2

<table><tr><td>milestone 2</td></tr><tr><td><table><tr><td>F1 - Pick a simple game to implement, anything that generates a score that’s more advanced than a simple random number generator (may build off of a sample from the site shared in class) ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/game.php](https://ndp69-prod.herokuapp.com/Project/game.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/62](https://github.com/neeldp/IT202-005/pull/62)</p></td></tr><tr><td><table><tr><td>F1 - What game will you be doing?<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90344327/144314444-40d383d0-0729-4a49-9278-aebe382e3c93.png"><p>Game: Collect the Square</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F1 - Describe game<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90344327/144315092-b95a06c0-d5f5-41f7-956c-436f8307a719.png"><p>Describe: When a small square is collected, the size of the square increases. If you reach a multiple of 25 before the time runs out, 10 seconds are added to the current time.</td></tr></td></tr></table></td></tr><table><tr><td>F2 - The system will save the user’s score at the end of the game if the user is logged in ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/game.php](https://ndp69-prod.herokuapp.com/Project/game.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/64](https://github.com/neeldp/IT202-005/pull/64)</p></td></tr><tr><td><table><tr><td>F2 - There should be a scores table (id, user_id, score, created)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90344327/144315830-e3b09646-d5b7-4233-8fcd-87a184ac76e9.png"><p>Scores Table in DB</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F2 - Each received score is a new entry (scores will not be updated)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90344327/144316060-0c0264cb-c7f4-45dd-9afe-bcc48fd7071c.png"><p>Code for score insertion </td></tr></td></tr></table></td></tr><table><tr><td>F3 - The user will be able to see their last 10 scores ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/profile.php](https://ndp69-prod.herokuapp.com/Project/profile.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/65](https://github.com/neeldp/IT202-005/pull/65)</p></td></tr><tr><td><table><tr><td>F3 - Show on their profile page<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90344327/144317201-0448378b-27aa-4465-8026-e3f99bcea671.png"><p>The last 10 scores are shown on the profile page</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F3 - Ordered by most recent<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90344327/144317354-94e79cce-db4a-4b0e-9c6f-8264d38e6e5a.png"><p>SQL code that shows the scores are ordered by most recent </td></tr></td></tr></table></td></tr><table><tr><td>F4 - Create functions that output the following scoreboards (this will be used later) ()</td></tr><tr><td>Status: complete</td></tr><tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/game.php](https://ndp69-prod.herokuapp.com/Project/game.php)</p></td></tr><tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/66](https://github.com/neeldp/IT202-005/pull/66)</p></td></tr><tr><td><table><tr><td>F4 - Top 10 Weekly, Top 10 Monthly, Top 10 Lifetime<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90344327/144318265-67a69564-cda7-4c33-ba96-dbfe26cd4bb1.png"><p>get_Top_10() function returns top 10 scores weekly, monthly, and lifetime</td></tr></td></tr></table></td></tr><tr><td><table><tr><td>F4 - Scoreboards should show no more than 10 results; if there are no results a proper message should be displayed (i.e., “No [time period] scores to display”)<tr><td>Status: completed</td></tr><tr><td><img width="100%" src="https://user-images.githubusercontent.com/90344327/144318435-a75b1593-62f6-4f90-8d70-682b4784fb05.png"><p>Message for no scores</td></tr></td></tr></table></td></tr></td></tr></table>


- Milestone 3

  - [ ] \(mm/dd/yyyy of completion) Users will have points associated with their account.
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show


  - [ ] \(mm/dd/yyyy of completion) Create a Points History table (id, user_id, point_change, reason, created)
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show


  - [ ] \(mm/dd/yyyy of completion) Competitions table should have the following columns (id, name, created, duration, expires     (now + duration), current_reward, starting_reward, join_fee, current_participants, min_participants, paid_out (boolean), min_score, first_place_per, second_place_per, third_place_per, cost_to_create, created, modified)
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show

  
  - [ ] \(mm/dd/yyyy of completion) User will be able to create a competition
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show

  
  - [ ] \(mm/dd/yyyy of completion) Each new participant causes the Reward value to increase by at least 1 or 50% of the joining fee rounded up

    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show



  - [ ] \(mm/dd/yyyy of completion) Have a page where the User can see active competitions (not expired)
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show


  
  - [ ] \(mm/dd/yyyy of completion) Will need an association table CompetitionParticipants (id, comp_id, user_id, created)
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show


  - [ ] \(mm/dd/yyyy of completion) User can join active competitions 
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show

  
  - [ ] \(mm/dd/yyyy of completion) Create function that calculates competition winners
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show


- Milestone 4
### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone branch as the source)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board
