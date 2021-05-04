/* Update Code for users and projects, a bit unsure of SELECTION ones that is all. Coordinator is added*/ 
DROP TABLE IF EXISTS users, projects;



USE users_db;

CREATE TABLE users (
	user_id INT(5) NOT NULL AUTO_INCREMENT,
	firstName VARCHAR(15) NOT NULL,
	lastName VARCHAR(25) NOT NULL,
	DOB DATE NOT NULL,
	Email VARCHAR(30) NOT NULL,
	PRIMARY KEY (user_id)
)ENGINE=InnoDB, DEFAULT CHARACTER SET utf8;

CREATE TABLE projects (
	project_id INT(5) NOT NULL AUTO_INCREMENT,
	project_name VARCHAR(30) NOT NULL,
	project_description VARCHAR(100) NOT NULL,
	project_coordinator INT(11) NOT NULL,
	PRIMARY KEY (project_id),
	FOREIGN KEY (project_coordinator) REFERENCES users (user_id)
	/* code for other fields once it's good
	FOREIGN KEY (project_discipline) REFERENCES users (project_discipline)
	FOREIGN KEY (project_members) REFERENCES users (user_id)
	*/
)ENGINE=InnoDB, DEFAULT CHARACTER SET utf8;
