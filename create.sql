/* Update Code for users and projects, a bit unsure of SELECTION ones that is all. */
DROP TABLE IF EXISTS users;

USE users_db;

CREATE TABLE users (
	user_id INT(5) NOT NULL AUTO_INCREMENT,
	firstName VARCHAR(15) NOT NULL,
	lastName VARCHAR(25) NOT NULL,
	DOB DATE NOT NULL,
	Email VARCHAR(30) NOT NULL,
	PRIMARY KEY (user_id)
)ENGINE=InnoDB, DEFAULT CHARACTER SET utf8;

