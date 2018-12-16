# IntroductionToDatabaseDesign-FinalProject
This is a brief overview of my Introduction To Database Design final project.


## Project Guideline(s)
Work on any open source project on PHP & MYSQL (Google search for php projects), make changes to the code. Push the project on github and describe on README all the changes or contributions you will have made. Submit project github link on Google classroom.


## Ideation
My apprroach to creating this simple we application was guided by the project's instructions which called for students to showcase the knowledge acquired within the past 14 weeks of the semester.


## Design
The following are the screenshots for the site

<img src="North-Signup.png" alt="NORTH Sign Up page" height="683" width="394">
*This is the Landing page which for users to sign up to the site or click the Log In button*

<img src="North-Login.png" alt="NORTH Log In page" height="683" width="394">
*This is the Login page which for users to log in to the accounts on the site*

<img src="North-Profile.png" alt="NORTH Profile page" height="683" width="394">
*This page simply contains the user's information and options to change it, log out or delete their accounts*

<img src="North-Profile-ChangeDetails.png" alt="NORTH Change Profile Details page" height="683" width="394">
*On this page, the user can change the details entered during signup*


## How It Works
The user first arrives at the landing page which is the sign up page and registers. This is done using PHP and MySQL, the INSERT query to be specific, which checks the data to ensure it conforms to the site's guidelines then 'posts' it to the database and creates a session for the user using their email. This prevents the user from having to log in again repeatedly. It then takes the user to their profile page.


The Log in page is used by already registered users to get access to their account. Once the user enters their data, it is checked to ensure it matches the ones on file using PHP and the MySQL SELECT and WHERE queries it creates a session using their email and takes them to the Profile page.


The Profile page simply uses the session created using the user's email and pulls their data from the database using PHP and the MySQL SELECT and WHERE queries. This information is then displayed using PHP onto the profile page.

The Log Out button simply points to a PHP script which destroys the current session and UNSETs the email session. It then redirects the user to the Log In page with a message showing the user has een successfully logged out.

The Delete Account button points to a PHP script that applies PHP and MySQL's DELETE query to remove the user's entire information from the database. This is the equivalent of deleting their account. It redirects them to the Sign up page with a message confirming deletion visible.

Lastly, the Edit My Profile utton redirects the user to a page where they can enter new information which will effectively overwrite the old data. This is done using PHP and MySQL's UPDATE query.


## Conclusion
This semester has made me really comfortable with both PHP and MySQL which is really useful when it comes to Database Design and/or Management.
