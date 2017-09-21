# Discussion Forum

This forum lets you to keep your views on certain topics, create your own ones or just simply read the discussions.

## Install Guide

### Server Installation
- [Download](http://www.wampserver.com/en/) **WAMP** for Windows.
- [Download](https://www.mamp.info/en/downloads/) **MAMP** for Mac OS X.
*OR*
- [Download](https://www.apachefriends.org/download.html) **XAMPP**. This server works on both Windows and MAC.
- Install them through the wizard.

### Files Setup

- Open your web-server root
- Clone the repository using `git clone https://github.com/ayushiaks/chat-forum.git`
- The discussion folder contains all the PHP code for the webpages in the forum.
- The schema folder contains the database used for the discussion forum.
- The config folder contains the PHP file which links all the webpages to the database in schema.

### localhost

- Type `localhost` in your browser.
- Click on the `chat-forum` link.
   (This opens the `index.php` file, i.e. the home page of the discussion forum.)

### Import your database

- Type `localhost/phpmyadmin` in your browser.
- Click on the database tab and create a new database.
- Import the database from the schema folder in this database.

### Forum

- The main page shows you all the topics already created (`index.php`).
- To create a new topic, click on the link given at the right bottom of the page, which opens a new page (`new_topic.php`).
- Add the topic name, details, your name and Email to create the topic of your choice (`<form action = 'add_new_topic.php'>`).
- Now your topic appears on the main page. Click on it to view the details of the topic, the replies, or to write any answer (`add_answer.php`).
- The main page now shows all the topics, the number of replies and views of each topic.

