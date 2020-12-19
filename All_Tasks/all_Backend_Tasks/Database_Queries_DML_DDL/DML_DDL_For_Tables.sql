CREATE DATABASE ide_tables_task1;
/***********************************************DDL*******************************************************/

CREATE TABLE Students(
    id INT Auto_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    email Varchar(255),
    mobile_number VARCHAR(255),
    grade VARCHAR(255)
    );
CREATE TABLE Teachers(
    id INT Auto_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    email Varchar(255),
    mobile_number VARCHAR(255),
    department VARCHAR(255)
    );
CREATE TABLE Classes(
    id INT Auto_INCREMENT PRIMARY KEY,
    teacher_id INT,
    subject VARCHAR(255),
    grade Varchar(255),
    start_date TIMESTAMP,
    passing_grade VARCHAR(255)
    );

/***********************************************DML*******************************************************/
/******* Students table **************/
INSERT INTO Students(first_name,last_name,email,mobile_number,grade) values('Mohamed','Magdy','m.magdy@mail.com','100000001','First');
INSERT INTO Students(first_name,last_name,email,mobile_number,grade) values('Mahmoud','Ali','m.Ali@mail.com','120000001','Third');
INSERT INTO Students(first_name,last_name,email,mobile_number,grade) values('Marawan','Ahmed','m.Ahmed@mail.com','102000023','Fourth');
INSERT INTO Students(first_name,last_name,email,mobile_number,grade) values('Magdy','Kamel','m.Kamel@mail.com','113000235','Second');

/******* Teachers table **************/
INSERT INTO Teachers(first_name,last_name,email,mobile_number,department) values('Mohamed','Marawan','m.Marawan@mail.com','120000002','Maths');
INSERT INTO Teachers(first_name,last_name,email,mobile_number,department) values('Magdy','Ahmed','m.Ahmed@mail.com','118933231','History');
INSERT INTO Teachers(first_name,last_name,email,mobile_number,department) values('Ahmed','Mahmoud','a.Mahmoud@mail.com','102327372','English');
INSERT INTO Teachers(first_name,last_name,email,mobile_number,department) values('Kamel','Ali','k.Ali@mail.com','102313864','Arabic');

/******* Classes table **************/
INSERT INTO Classes(teacher_id,subject,grade,start_date,passing_grade) values(1,'Math 1','First','20/10/2020','50');
INSERT INTO Classes(teacher_id,subject,grade,start_date,passing_grade) values(1,'Math 2','First','25/10/2020','70');
INSERT INTO Classes(teacher_id,subject,grade,start_date,passing_grade) values(2,'History of Mongols','Fourth','15/10/2020','60');
INSERT INTO Classes(teacher_id,subject,grade,start_date,passing_grade) values(2,'History of Ancient','Second','20/10/2020','80');
INSERT INTO Classes(teacher_id,subject,grade,start_date,passing_grade) values(3,'Semantics','First','15/9/2020','75');
INSERT INTO Classes(teacher_id,subject,grade,start_date,passing_grade) values(3,'Linguistics','First','20/9/2020','70');
INSERT INTO Classes(teacher_id,subject,grade,start_date,passing_grade) values(4,'Grammer','Third','15/11/2020','85');
INSERT INTO Classes(teacher_id,subject,grade,start_date,passing_grade) values(4,'Novel','Third','1/11/2020','45');

