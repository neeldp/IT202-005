# Project Name: Simple Arcade
## Project Summary: This project will create a simple Arcade with scoreboards and competitions based on the implemented game.
## Presentation Link: https://mediaspace.njit.edu/media/Kaltura+Capture+recording+-+December+21st+2021%2C+10A03A39+pm/1_efrqbmju
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

<table>
<tr><td>milestone 3</td></tr><tr><td>
<table>
<tr><td>F1 - Users will have points associated with their account ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/profile.php](https://ndp69-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/81](https://github.com/neeldp/IT202-005/pull/81)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - Alter the User table to include points with a default of 0.</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145701592-1ab31f2e-5602-4caa-abd2-b724d7dea200.png">
<p>Altered table to include points in user table</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145701595-949ccece-6f7c-42fb-8db2-06a39ff7a315.png">
<p>Proof in database</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - This field will not be incremented/decremented directly, you must use the PointsHistory table to calculate it and set it each time the points change</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145701633-7d38984f-093e-4e54-9f4d-18ade9b124fd.png">
<p>code for updating score using point history table</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - Points should show on their profile page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145701641-a5d6b960-aced-495c-bbf8-469679b66fcc.png">
<p>proof of points showing on profile page</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - Create a PointsHistory table (id, user_id, point_change, reason, created) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/profile.php](https://ndp69-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/82](https://github.com/neeldp/IT202-005/pull/82)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - Create a PointsHistory table</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145701778-0710a21f-749f-4494-a77f-04167062ef2d.png">
<p>Points history table in database</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - Competitions table should have the following columns (id, name, duration, expires (now + duration), current_reward, starting_reward, join_fee, current_participants, min_participants, paid_out (boolean), min_score, first_place_per, second_place_per, third_place_per, cost_to_create, created, modified) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/create_competition.php](https://ndp69-prod.herokuapp.com/Project/create_competition.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/83](https://github.com/neeldp/IT202-005/pull/83)</p></td></tr>
<tr><td>
<table>
<tr><td>F3 - Competitions table</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145701897-c5e1989f-191b-4d29-92dc-881b3b576434.png">
<p>sql code for table</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145701923-0d6cbca6-e730-4b28-a225-94d3284bb5af.png">
<p>table in database P1</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145701937-0194178b-d18a-4b91-bf64-799c3806fefb.png">
<p>table in database p2</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - User will be able to create a competition ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/create_competition.php](https://ndp69-prod.herokuapp.com/Project/create_competition.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/86](https://github.com/neeldp/IT202-005/pull/86)</p></td></tr>
<tr><td>
<table>
<tr><td>F4 - Competition form</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702018-d42e1f60-2cff-4f3c-b3fa-12d1f9b9eecd.png">
<p>form</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - Reward distribution must be equal to 100 (no less, no more)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702085-f471ef9c-3810-450e-b5c2-84504c8f29c8.png">
<p>error msg for incorrect reward distribution</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - All fields are required</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702097-2f52c379-7f66-4110-8ffe-00ff3329181d.png">
<p>will not able be able to submit form unless all fields are inputted </p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - if user does not have enough points to create a competition, an error msg will show</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702104-f1f7672b-9624-4294-bfe6-58d3c36724db.png">
<p>error msg for insufficient balance </p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F5 - Each new participant causes the Reward value to increase by at least 1 or 50% of the joining fee rounded up ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/list_competitions.php](https://ndp69-prod.herokuapp.com/Project/list_competitions.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/89](https://github.com/neeldp/IT202-005/pull/89)</p></td></tr>
<tr><td>
<table>
<tr><td>F5 - Update reward for each new participant</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702229-8a2c52c7-32c8-411c-a1ab-e9f44ca41ad1.png">
<p>code proof</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F6 - Have a page where the User can see active competitions (not expired) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/list_competitions.php](https://ndp69-prod.herokuapp.com/Project/list_competitions.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/87](https://github.com/neeldp/IT202-005/pull/87)</p></td></tr>
<tr><td>
<table>
<tr><td>F6 - view competition page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702294-dd42e78b-f313-4e7e-86e0-ee43450059af.png">
<p>competitions page</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F6 - output to a maximum of 10 + Order the results by soonest to expire</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702298-2736d3f0-07c3-4f5f-a0b8-36e2829a028e.png">
<p>code for this sql query</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F7 - Will need an association table CompetitionParticipants (id, comp_id, user_id, created) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/list_competitions.php](https://ndp69-prod.herokuapp.com/Project/list_competitions.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/84](https://github.com/neeldp/IT202-005/pull/84)</p></td></tr>
<tr><td>
<table>
<tr><td>F7 - Comp_id and user_id should be a composite unique key (user can only join a competition once)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702437-2d600cf5-9437-43d8-b19a-883a59c54740.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F7 - CompetitionParticipants table</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702404-c8dc1291-da21-461d-85c6-4b1853e2d8ec.png">
<p>table in database</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F8 - User can join active competitions ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/list_competitions.php](https://ndp69-prod.herokuapp.com/Project/list_competitions.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/88](https://github.com/neeldp/IT202-005/pull/88)</p></td></tr>
<tr><td>
<table>
<tr><td>F8 - insert data into competition participants table</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702581-4f3589b2-6c96-4651-bfbd-6ec0979be916.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Recalculate the Competitions.participants value based on the count of participants for this competition from the CompetitionParticipants table.</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702598-abda866c-096b-4fc6-8745-e882f26c866f.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Update the Competitions.reward based on the # of participants and the appropriate math from the competition requirements above</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702612-5c2c6863-b7b8-458e-87dd-3685d6045bf8.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Show proper error message if user is already registered</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702634-6161549a-85c6-4145-bd24-220a83cb052a.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Show proper confirmation if user registered successfully</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702640-bcbc7e03-b5d8-4e0d-9b4a-4eba714a3e38.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F9 - Create function that calculates competition winners ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/admin/payout.php](https://ndp69-prod.herokuapp.com/Project/admin/payout.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/90](https://github.com/neeldp/IT202-005/pull/90)</p></td></tr>
<tr><td>
<table>
<tr><td>F9 - Payout option found only on the admin account</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702728-ffbcd14b-f5aa-4569-9a3e-7c6ce50ae082.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - Get all expired and not paid_out competitions</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702898-0d140547-797f-46a6-b489-8007ca01041a.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - function for top 3 winners</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702912-12904d5e-6fa6-44f9-9251-0c3e134fa3db.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - Calculate the payout (reward * place_percent) ******Round up the value (it’s ok to pay out an extra point here and there)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702919-5da6a94e-2992-42b3-b825-c7410c41b85a.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - Mark the competition as paid_out = true</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/145702934-0332b122-0631-4c2f-b000-c4678ecb977f.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>


- Milestone 4


<table>
<tr><td>milestone 4</td></tr><tr><td>
<table>
<tr><td>F1 - User can set their profile to be public or private ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/profile.php?edit=true](https://ndp69-prod.herokuapp.com/Project/profile.php?edit=true)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/94](https://github.com/neeldp/IT202-005/pull/94)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - Visibility column added to the users table. 0 is the default value: 0 is private, 1 is public</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147015707-b39ab65b-4054-4fab-9776-f328e181db44.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - If the user is private, a message is displayed</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147015897-c7e12c26-189d-4b65-8af4-8cebd5a32066.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - If a user is public, you can view their last 10 scores and the date they registered an account</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147016069-5dae3c59-f902-406a-9dd4-4adadff71eea.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - If a user clicks on their profile, they have a view/edit toggle</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147016230-27b16dc4-fa04-4f29-ac72-1d3da5564a27.png">
<p></p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147016298-48cca240-9e69-4089-a1bb-f4b641f1934a.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - Home page will have a weekly, monthly, and lifetime scoreboard ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/home.php](https://ndp69-prod.herokuapp.com/Project/home.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/95](https://github.com/neeldp/IT202-005/pull/95)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - Weekly scores, you can click on username to view profile</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147016524-ad088048-4be7-48b9-9ce8-1c5157fa40df.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - Monthly and all time scores, clicking on username directs you to their profile</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147016632-3883ded1-8dd9-4a3a-acde-d68dfa1c2bf3.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - At the bottom of the page, there is a link to the game</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147016720-4e4e4211-f18e-4da7-93ef-cc99d3c42f12.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - User will be able to see their competition history ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/competition_history.php](https://ndp69-prod.herokuapp.com/Project/competition_history.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/99](https://github.com/neeldp/IT202-005/pull/99)</p></td></tr>
<tr><td>
<table>
<tr><td>F3 - 10 records per page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147018576-6ced1186-97e5-4c7a-a3fb-6cd10f239628.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - User with the role of “admin” can edit a competition where paid_out = false ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/admin/edit_comp.php](https://ndp69-prod.herokuapp.com/Project/admin/edit_comp.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/102](https://github.com/neeldp/IT202-005/pull/102)</p></td></tr>
<tr><td>
<table>
<tr><td>F4 - Admins can edit competitions that are not paid out. They can change any field, including the duration time</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147018710-2e351cf6-0648-474e-889b-931de256a96a.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - If everything goes well, a message is displayed when the competition is edited correctly and updated in the database</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147018857-cd6a7557-acf2-4b5d-8d9e-62c4647aebe2.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - The information is updated on other pages as well</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147018994-0d4ae476-bb31-4260-95b3-031b8c57e8ad.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F5 - Add pagination to the Active Competitions view ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/list_competitions.php](https://ndp69-prod.herokuapp.com/Project/list_competitions.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/98](https://github.com/neeldp/IT202-005/pull/98)</p></td></tr>
<tr><td>
<table>
<tr><td>F5 - page 1 of active competitions, 10 competitions per page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147018123-b6511864-71f2-4470-bb32-49909bb12eb8.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F5 - 2nd page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147018218-01f62483-70a1-4685-8f56-e1a603f59e68.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F6 - Anywhere a username is displayed should be a link to that user’s profile ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/home.php](https://ndp69-prod.herokuapp.com/Project/home.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/104](https://github.com/neeldp/IT202-005/pull/104)</p></td></tr>
<tr><td>
<table>
<tr><td>F6 - I showed multiple times in this milestone that the username is linked to their profile. Here is how i did it</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147019344-a95a4db8-fe05-4689-b695-b8b5746b3f4a.png">
<p></p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147019498-d7e00635-6396-4fc9-b676-c131a2eed3dd.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F6 - If the user is private, it displays the message and directs you to the homepage</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147019616-b0ca08df-c373-4432-bd53-23b512fa5aba.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F7 - Viewing an active or expired competition should show the top 10 scoreboard related to that competition ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/view_scoreboard.php](https://ndp69-prod.herokuapp.com/Project/view_scoreboard.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/103](https://github.com/neeldp/IT202-005/pull/103)</p></td></tr>
<tr><td>
<table>
<tr><td>F7 - In the competition history, there is a button to view the scoreboard for top 10</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147019087-342c5007-12eb-428a-94aa-93fe2107abb7.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F7 - Displays Top 10 scores and if you click on the username it directs you to their profile</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147019178-c027b790-1cb1-4f69-a698-f9b30cfda4b3.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F8 - Game should be fully implemented/complete by this point ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/game.php](https://ndp69-prod.herokuapp.com/Project/game.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/96](https://github.com/neeldp/IT202-005/pull/96)</p></td></tr>
<tr><td>
<table>
<tr><td>F8 - Each time you collect the small square, the red square grows bigger. And when you reach a multiple of 25, 10 seconds are added to the time</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147016964-56cca10d-4122-4a20-96f4-2ebf89c96e61.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F9 - User’s score history will include pagination ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://ndp69-prod.herokuapp.com/Project/score_history.php](https://ndp69-prod.herokuapp.com/Project/score_history.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/neeldp/IT202-005/pull/97](https://github.com/neeldp/IT202-005/pull/97)</p></td></tr>
<tr><td>
<table>
<tr><td>F9 - 10 records are displayed on each page. They are ordered from the latest to the oldest.</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147017211-2a6b74e7-66c5-49d9-9380-529ecf3fad4a.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - 2nd page of score history</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90344327/147017325-42bf4c1d-165c-417f-b370-a976c7632bdc.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>



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
