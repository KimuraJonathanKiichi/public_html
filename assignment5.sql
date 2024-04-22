-- Script to create a table, insert records, and display the table 
/*
	File name: assignment5.sql
	copy/download the script to your working directory, and run it with source command 

*/

DROP TABLE IF EXISTS EVALUATION;
CREATE TABLE EVALUATION (GENDER varchar(6), GRADE varchar(10), COURSE varchar(6), LECT_PREP int, STU_PART int, OVERALL int);
INSERT INTO EVALUATION VALUES ('MALE', 'SENIOR', 'CS389', 1, 1, 2);
INSERT INTO EVALUATION VALUES ('FEMALE', 'SENIOR', 'CS212', 2, 2, 0);
SELECT * FROM EVALUATION;
