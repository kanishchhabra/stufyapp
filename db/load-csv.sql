LOAD DATA INFILE 'C:/Users/kanis/OneDrive/Documents/HIT326-StufyApp/qualification_list.csv'
INTO TABLE qualification
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;