+## Online Chat
+
+# Description
+
+The Global Chat comprises of 3 elememts
+- chat room
+- login page
+- Registration page
+
+# Chat Room
+
+- the user has to login in order to access the chat room
+- Once the user has logged in, the messages the user types are stores in the table `messaegs`
+- The messages from the table are retrieved adn displayed in chronological order, the code for which is written in index.php
+
+# Login Page
+
+- The usernames and password of already registered users are stored in the table `user_data`
+- the username and password entered shall be checked against the already registered names in the table 
+- `loginform.inc.php` handles all the form data from login page.
+- `logout.php` handles logging out.
+
+# Registration Page
+
+- Users enter the required details and `Regisrationform.inc.php` handles the form data
+- The data is stored in the table user_data for future use
+
+Schema Folder contains the details about the creation of sql database and tables, while config has files used to connect to the database.
+
+#installation
+
+- php version required : 5.6.30
+- php my admin version : 4.6.5.2
+- Web server used while creation of app :Apache/2.4.25 (Win32) OpenSSL/1.0.2j PHP/5.6.30 
+
