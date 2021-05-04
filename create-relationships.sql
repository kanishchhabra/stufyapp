/* Update Code for users and projects, a bit unsure of SELECTION ones that is all. */

USE stufy;

DROP TABLE IF EXISTS friendship;

CREATE TABLE friendship (
	sending_user VARCHAR(60),
	receiving_user VARCHAR(60),	
	request_status TINYINT,
	action_user VARCHAR(60),
	
	PRIMARY KEY (sending_user, receiving_user),

	FOREIGN KEY (sending_user) REFERENCES user (email) ON DELETE CASCADE,
	FOREIGN KEY (sending_user) REFERENCES user (email) ON DELETE CASCADE

)ENGINE=InnoDB, DEFAULT CHARACTER SET utf8;