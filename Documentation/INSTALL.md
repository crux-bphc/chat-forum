+---
 +# Discussion Forum
 +
 +## Install Guide
 +---
 + ### Server Installation
 +- Download the latest version of XAMPP server.
 +- Install it through the wizard.
 +
 + ### Files Setup
 +-  open C:\ > xamp 
 +-  clone this repository here
 +-  The Chat folder contains all the PHP code for the webpages in the forum.
 +-  The schema folder contains the database used for the discussion forum
 +-  The config folder coyains the php file which links all the webpages to the databse in schema
 +
 + ### localhost
 +-  Open your Browser and type localhost
 +-  Click on the folder 'Chat'
 +-  this opens the 'index.php', i.e. the home page of the discussion forum.
 +
 + ### Import your database
 +-  type localhost/phpmyadmin
 +-  Click on the database tab and create a new database.
 +-  Import the database from the schema folder in this databse.
 +
 + ### Chat-Room
 +-  
 +- The user has to login/ register and login to access the chatroom
 +- The user has to enter the message in the text area and click send
 +- the messages send by the user will appear on the global chatroom against his username
 +-
