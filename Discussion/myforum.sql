CREATE TABLE fanswer (
	question_id int(4) NOT NULL DEFAULT '0',
	a_id int(4) NOT NULL DEFAULT '0',
	a_name varchar(65) NOT NULL DEFAULT '',
	a_email varchar(65) NOT NULL DEFAULT '',
	a_answer longtext NOT NULL,
	a_datetime varchar(25) NOT NULL DEFAULT ''
) ;

CREATE TABLE fquestions (
	id int(4) NOT NULL,
	topic varchar(255) NOT NULL DEFAULT '',
	detail longtext NOT NULL,
	name varchar(65) NOT NULL DEFAULT '',
	email varchar(65) NOT NULL DEFAULT '',
	datetime varchar(25) NOT NULL DEFAULT '',
	view int(4) NOT NULL DEFAULT '0'
) ;