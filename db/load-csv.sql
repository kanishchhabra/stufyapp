/*Change the path and database accordingly and run this file extrnally or after logging into MySQL*/
LOAD DATA INFILE 'C:/Users/kanis/OneDrive/Documents/HIT326-StufyApp/db/csv/qualifications.csv'
INTO TABLE qualification
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;