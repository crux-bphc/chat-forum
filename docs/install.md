- #Discussion Forum
- ##Install Guide

- ###Server Installation
- __ Download the latest version of WAMP/XAMPP server.
- __ Install it through the wizard.

- ##Files Setup
- __ open C:\ > wamp > www
- __ clone this repository here
- __ The discussion folder contains all the PHP code for the webpages in the forum.
- __ The schema folder contains the database used for the discussion forum
- __ The config folder coyains the php file which links all the webpages to the databse in schema

- ##localhost
- __ Open your Browser and type localhost
- __ Click on the folder 'chat-forum'
- __ this opens the 'index.php', i.e. the home page of the discussion forum.

- ##Import your database
- __ type localhost/phpmyadmin
- __ Click on the database tab and create a new database.
- __ Import the database from the schema folder in this databse.

- ##Forum
- __ The main page shows you all the topics already created (index.php)
- __ To create a new topic, click on the link given at the right bottom of the page, which opens a new page (new_topic.php).
- __ Add the topic name, details, your name and Email to create the topic of your choice (form action = 'add_new_topic.php').
- __ Now your topic appears on the amin page. click on it to view the replies, or to write any answer.
- __ The following page shows the details of the topic. To discuss about the topic, write your answer in the input form (add_answer.php).
- __ The main page now shows all the topics, the number of replies and views of each topic.