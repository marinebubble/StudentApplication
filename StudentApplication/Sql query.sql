/*STUDENTS TABLE*/
CREATE TABLE `jasarame`.`Student` (
	StudentID 		CHAR(10) 		PRIMARY KEY	NOT NULL,
	StudentGender 	CHAR(1) 		NOT NULL,
	StudentFName 	VARCHAR(50) 	NOT NULL,
	StudentLName 	VARCHAR(50) 	NOT NULL,
    StudentMajor	VARCHAR(100) 	NOT NULL,
	StudentBatch 	VARCHAR(10) 	NOT NULL,
	StudentEmail 	VARCHAR(50) 	NOT NULL,
	StudentAddress	VARCHAR(100) 	NOT NULL
);

select * from `jasarame`.`student`;
DROP TABLE `jasarame`.`Student`;

INSERT INTO `jasarame`.`Student`
(`StudentID`,`StudentGender`,`StudentFName`,`StudentLName`,`StudentMajor`,`StudentBatch`,
`StudentEmail`,`StudentAddress`)
VALUES
('1801444274','M',
'Sandy',
'Laluw',
'Information Systems',
2018,
'sandylaluw@gmail.com',
'Jakarta');

INSERT INTO `jasarame`.`Student`
(`StudentID`,`StudentGender`,`StudentFName`,`StudentLName`,`StudentMajor`,`StudentBatch`,
`StudentEmail`,`StudentAddress`)
VALUES
('1801451071','F',
'Enrica',
'Panjaitan',
'Information Systems',
2018,
'enrica.melissa@gmail.com',
'Jakarta');

INSERT INTO `jasarame`.`Student`
(`StudentID`,`StudentGender`,`StudentFName`,`StudentLName`,`StudentMajor`,`StudentBatch`,
`StudentEmail`,`StudentAddress`)
VALUES
('1801449432','M',
'Jacky',
'Jordan',
'Information Systems',
2018,
'jackyjordan15@gmail.com',
'Jakarta');

INSERT INTO `jasarame`.`Student`
(`StudentID`,`StudentGender`,`StudentFName`,`StudentLName`,`StudentMajor`,`StudentBatch`,
`StudentEmail`,`StudentAddress`)
VALUES
('1801444154','F',
'Ramadhini',
'Putri',
'Information Systems',
2018,
'rdhini.ashara@gmail.com',
'Jakarta');
/* END OF STUDENT'S TABLE*/

CREATE TABLE `jasarame`.`Lecturer` (
	LecturerID 				CHAR(5) 		PRIMARY KEY	NOT NULL,
	LecturerGender 			CHAR(1) 		NOT NULL,
	LecturerFName 			VARCHAR(50) 	NOT NULL,
	LecturerLName 			VARCHAR(50) 	UNIQUE KEY NOT NULL,
    LecturerSpecialization	VARCHAR(100) 	NOT NULL,
	LecturerEmail 			VARCHAR(50) 	NOT NULL,
	LecturerAddress			VARCHAR(100) 	NOT NULL
);

select * from `jasarame`.`Lecturer`;
DROP TABLE `jasarame`.`Lecturer`;

INSERT INTO `jasarame`.`Lecturer`
(`LecturerID`,
`LecturerGender`,
`LecturerFName`,
`LecturerLName`,
`LecturerSpecialization`,
`LecturerEmail`,
`LecturerAddress`)
VALUES
('D2131','M','Samuel','Tedjojuwono','Computing','smahatmaputra@binus,edu','Jakarta');

INSERT INTO `jasarame`.`Lecturer`
(`LecturerID`,
`LecturerGender`,
`LecturerFName`,
`LecturerLName`,
`LecturerSpecialization`,
`LecturerEmail`,
`LecturerAddress`)
VALUES
('D5649','M','Frederic','Hoffert','Computing','fhoffert@binus,edu','Jakarta');

INSERT INTO `jasarame`.`Lecturer`
(`LecturerID`,
`LecturerGender`,
`LecturerFName`,
`LecturerLName`,
`LecturerSpecialization`,
`LecturerEmail`,
`LecturerAddress`)
VALUES
('D2434','M','Win','Ce','Computing','win@binus,edu','Jakarta');


INSERT INTO `jasarame`.`Lecturer`
(`LecturerID`,
`LecturerGender`,
`LecturerFName`,
`LecturerLName`,
`LecturerSpecialization`,
`LecturerEmail`,
`LecturerAddress`)
VALUES
('D4877','M','Antonius','Kurniawan','Computing','No Data','Jakarta');
/*END OF LECTURER TABLE*/ 

/*--Classroom Table--*/
CREATE TABLE `jasarame`.`Classroom` (
	ClassroomNo		INT			PRIMARY KEY NOT NULL,
    ClassroomType	VARCHAR(50) 	NOT NULL,
    Building		VARCHAR(50)	NOT NULL,
    Floor			INT			NOT NULL
);
select * from `jasarame`.`Classroom`;
drop TABLE `jasarame`.`Classroom`;

INSERT INTO `jasarame`.`Classroom`
(`ClassroomNo`,
`ClassroomType`,
`Building`,
`Floor`)
VALUES
(201,'Classroom','JWC',2);

INSERT INTO `jasarame`.`Classroom`
(`ClassroomNo`,
`ClassroomType`,
`Building`,
`Floor`)
VALUES
(202,'Classroom','JWC',2);

INSERT INTO `jasarame`.`Classroom`
(`ClassroomNo`,
`ClassroomType`,
`Building`,
`Floor`)
VALUES
(208,'Theatre','JWC',2);

INSERT INTO `jasarame`.`Classroom`
(`ClassroomNo`,
`ClassroomType`,
`Building`,
`Floor`)
VALUES
(306,'Classroom','JWC',3);

INSERT INTO `jasarame`.`Classroom`
(`ClassroomNo`,
`ClassroomType`,
`Building`,
`Floor`)
VALUES
(307,'Classroom','JWC',3);

INSERT INTO `jasarame`.`Classroom`
(`ClassroomNo`,
`ClassroomType`,
`Building`,
`Floor`)
VALUES
(304,'Theatre','JWC',3);

INSERT INTO `jasarame`.`Classroom`
(`ClassroomNo`,
`ClassroomType`,
`Building`,
`Floor`)
VALUES
(401,'Classroom','JWC',4);

INSERT INTO `jasarame`.`Classroom`
(`ClassroomNo`,
`ClassroomType`,
`Building`,
`Floor`)
VALUES
(403,'Computer Lab','JWC',4);

INSERT INTO `jasarame`.`Classroom`
(`ClassroomNo`,
`ClassroomType`,
`Building`,
`Floor`)
VALUES
(404,'Computer Lab','JWC',4);
/*--END OF CLASSROOM TABLE--*/

/*Course Table*/
DROP TABLE `jasarame`.`Course`;
CREATE TABLE `jasarame`.`Course` (
	CourseID	VARCHAR(10)		PRIMARY KEY NOT NULL,
    CourseTitle	VARCHAR(100)	UNIQUE KEY NOT NULL,
    SCU			INT				NOT NULL
    );
select * from `jasarame`.`Course`;

INSERT INTO `jasarame`.`Course` VALUES ('ISYS6250',
'E-Business Concepts and Issues', 4);
INSERT INTO `jasarame`.`Course` VALUES ('ISYS6191',
'Advanced Business Application Development', 6);
INSERT INTO `jasarame`.`Course` VALUES ('ISYS6256',
'Information Systems Project Management', 4);
INSERT INTO `jasarame`.`Course` VALUES ('ISYS6264',
'Testing and System Implementation', 4);
/*End of Course*/ 


DROP TABLE `jasarame`.`Schedule`;
/*Schedule Table*/
CREATE TABLE `jasarame`.`Schedule` (
	ScheduleID	VARCHAR(10)		PRIMARY KEY NOT NULL,
    CourseID 	VARCHAR(10)		NOT NULL,
    CourseTitle	VARCHAR(100) 	NOT NULL,
    ClassroomNo	INT				NOT NULL,
    LecturerID	CHAR(5)			NOT NULL,
    FOREIGN KEY (CourseID) REFERENCES Course(CourseID),
    FOREIGN KEY (CourseTitle) REFERENCES Course(CourseTitle),
    FOREIGN KEY (ClassroomNo) REFERENCES Classroom(ClassroomNo),
    FOREIGN KEY (StudentID) REFERENCES Student(StudentID),
    FOREIGN KEY (LecturerID) REFERENCES Lecturer(LecturerID)	
    );
/* End of Schedule Table --- BELOMMMM SELESAIII!!!!* / 

/*LecturerLocation Table*/ 

DROP TABLE `jasarame`.`LecturerLocation`;
CREATE TABLE `jasarame`.`LecturerLocation` (
	LecturerID 	CHAR(5) 		NOT NULL,
    ClassTime 	VARCHAR(50)		NOT NULL,
    ClassroomNo	INT				NOT NULL,
    FOREIGN KEY (LecturerID) 	REFERENCES Lecturer(LecturerID),
	FOREIGN KEY (ClassroomNo)	REFERENCES Classroom(ClassroomNo)
);
/* End of LecturerLocation Table*/

drop table `jasarame`.`Meeting`;
/* Meeting Table*/
CREATE TABLE `jasarame`.`Meeting`(
	MeetingNo		INT	AUTO_INCREMENT NOT NULL,
    StudentID		CHAR(10) NOT NULL,
    LecturerLName 	VARCHAR(50) 	NOT NULL,
	MeetingTime		VARCHAR(50)		NOT NULL,
    MeetingLocation		VARCHAR(50)		NOT NULL,
    MeetingStatus	VARCHAR(30) NOT NULL,
    PRIMARY KEY (MeetingNo),
    FOREIGN KEY		(StudentID) REFERENCES Student(StudentID),
    FOREIGN KEY 	(LecturerLName)	REFERENCES Lecturer(LecturerLName)
    );
    
INSERT INTO `jasarame`.`Meeting`(StudentID, LecturerLName, MeetingTime, MeetingLocation, MeetingStatus) 
VALUES ('1801451071','Tedjojuwono', '18/01/2017 09:00', 'JWC 3rd floor', 'reserved');

select * from `jasarame`.`Meeting`;
/* End of Meeting Table*/

SELECT Lecturer.LecturerFName, Meeting.LecturerLName FROM 	`jasarame`.`Lecturer` LEFT JOIN Meeting
ON Lecturer.LecturerLName = Meeting.LecturerLName; 


-- SELECT LecturerFName, LecturerLName FROM `jasarame`.`Lecturer`;


/*Login Table */
CREATE TABLE `jasarame`.`Login` (
	Username	VARCHAR(20)		PRIMARY KEY NOT NULL,
    Passwords	VARCHAR(20)		NOT NULL,
    Role		VARCHAR(10)		NOT NULL
    );
    
INSERT INTO `jasarame`.`Login` VALUES ('1801451071', '2109', 'student');
SELECT Login.Username FROM `jasarame`.`Login`;