/* code for creating all the required entities for the project*/

DROP TABLE IF EXISTS friendship, student, project, university, discipline, qualification;

USE stufy;
/*--------------------------------------------------------------------------*/
CREATE TABLE university (
	university_name VARCHAR(50) NOT NULL,
	city VARCHAR(20) NOT NULL,
	state VARCHAR(3) NOT NULL,
	
	PRIMARY KEY (university_name)
)ENGINE=InnoDB, DEFAULT CHARACTER SET utf8;

/*--------------------------------------------------------------------------*/

CREATE TABLE discipline (
	discipline_name VARCHAR(50) NOT NULL,
	
	PRIMARY KEY (discipline_name)
)ENGINE=InnoDB, DEFAULT CHARACTER SET utf8;

/*--------------------------------------------------------------------------*/

CREATE TABLE qualification (
	qualification_name VARCHAR(25) NOT NULL,
	
	PRIMARY KEY (qualification_name)
)ENGINE=InnoDB, DEFAULT CHARACTER SET utf8;

/*--------------------------------------------------------------------------*/

CREATE TABLE student (
	firstName VARCHAR(15) NOT NULL,
	lastName VARCHAR(25) NOT NULL,
	DOB DATE NOT NULL,
	email VARCHAR(60) NOT NULL,
	pass CHAR(56) NOT NULL,
	university VARCHAR(50) NOT NULL,
	study_year INT NOT NULL,
	discipline VARCHAR(50) NOT NULL,
	qualification VARCHAR(25) NOT NULL,

	PRIMARY KEY (email),

	FOREIGN KEY (university) REFERENCES university (university_name) ON DELETE CASCADE,
	FOREIGN KEY (discipline) REFERENCES discipline (discipline_name) ON DELETE CASCADE,
	FOREIGN KEY (qualification) REFERENCES qualification (qualification_name) ON DELETE CASCADE

)ENGINE=InnoDB, DEFAULT CHARACTER SET utf8;

/*--------------------------------------------------------------------------*/

CREATE TABLE project (
	project_id INT(5) NOT NULL AUTO_INCREMENT,
	project_name VARCHAR(30) NOT NULL,
	project_description VARCHAR(100) NOT NULL,
	discipline VARCHAR(50),
	coordinator VARCHAR(60),
	project_status INT,
	
	PRIMARY KEY (project_id),

	FOREIGN KEY (discipline) REFERENCES discipline (discipline_name) ON DELETE CASCADE,
	FOREIGN KEY (coordinator) REFERENCES student (email) ON DELETE CASCADE
)ENGINE=InnoDB, DEFAULT CHARACTER SET utf8;
