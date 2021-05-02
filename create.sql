/* Update Code for users and projects, a bit unsure of SELECTION ones that is all. */
DROP TABLE IF EXISTS users, projects;

CREATE TABLE users(
	user_id INT UNSIGNED NOT NULL,
	firstName VARCHAR(20) NOT NULL,
	lastName VARCHAR(20) NOT NULL,
	DOB DATETIME NOT NULL,
	Email VARCHAR(35) NOT NULL,
	Bio VARCHAR(30) NOT NULL
)ENGINE=InnoDB, DEFAULT CHARACTER SET utf8;

CREATE TABLE projects(
	user_id INT UNSIGNED NOT NULL,
	Project_Name VARCHAR(20) NOT NULL,
	Project_Description VARCHAR(20) NOT NULL
);

