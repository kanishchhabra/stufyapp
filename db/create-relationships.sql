/* code for creating required relationships among entties
	Request Status contains 0, 1, 2
	0: Pending 
	1: Accepted
	2: Declined
	3: Blocked
 */

USE stufy;

DROP TABLE IF EXISTS friendship, projectmember;

/*--------------------------------------------------------------------------*/

CREATE TABLE friendship (
	sending_student VARCHAR(60) NOT NULL,
	receiving_student VARCHAR(60) NOT NULL,	
	request_status TINYINT NOT NULL,
	action_student VARCHAR(60) NOT NULL,
	
	PRIMARY KEY (sending_student, receiving_student),

	FOREIGN KEY (receiving_student) REFERENCES student (email) ON DELETE CASCADE,
	FOREIGN KEY (sending_student) REFERENCES student (email) ON DELETE CASCADE

)ENGINE=InnoDB, DEFAULT CHARACTER SET utf8;

/*--------------------------------------------------------------------------*/

CREATE TABLE projectmember (
	student VARCHAR(60) NOT NULL,
	project INT(5) NOT NULL,
	request_status TINYINT NOT NULL,

	PRIMARY KEY (student, project),

	FOREIGN KEY (student) REFERENCES student(email) ON DELETE CASCADE,
	FOREIGN KEY (project) REFERENCES project(project_id) ON DELETE CASCADE
)ENGINE=InnoDB, DEFAULT CHARACTER SET utf8;

/*--------------------------------------------------------------------------*/
