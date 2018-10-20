USE cs332b21;

CREATE TABLE Professor (
	Ssn NUMERIC(9) NOT NULL,
	Salary NUMERIC(10),
	Sex ENUM('M','F'),
	Title VARCHAR(20),
	Name CHAR(30),
	Area_code NUMERIC(3),
	P_number NUMERIC(7),
	Zip NUMERIC(5),
	City VARCHAR(20),
	State CHAR(2),
	Street VARCHAR(20),
	PRIMARY KEY(Ssn));

CREATE TABLE Professor_Degrees (
	Prof_Ssn NUMERIC(9) NOT NULL,
	Degree CHAR(15) NOT NULL,
	PRIMARY KEY(Prof_Ssn, Degree),
	FOREIGN KEY(Prof_Ssn) REFERENCES Professor(Ssn));

CREATE TABLE Section (
	Section_num NUMERIC(10) NOT NULL,
	Course_no VARCHAR(10) NOT NULL,
	Prof_ssn NUMERIC(9) NOT NULL,
	Classroom VARCHAR(10),
	Meet_days VARCHAR(20),
	Start_time DATE,
	End_time DATE,
	Num_seats INT,
	PRIMARY KEY(Section_num, Course_no),
	FOREIGN Key(Course_no) REFERENCES Course(Course_num),
	FOREIGN KEY(Prof_ssn) REFERENCES Professor(Ssn));

CREATE TABLE Course (
	Course_num VARCHAR(10) NOT NULL,
	Dep_no NUMERIC(10) NOT NULL,
	Title CHAR(20),
	Units NUMERIC(1),
	Textbook VARCHAR(30),
	PRIMARY KEY(Course_num),
	FOREIGN KEY(Dep_no) REFERENCES Department(Dep_num));

CREATE TABLE Course_Prerequisites (
	C_no VARCHAR(10) NOT NULL,
	Prereq VARCHAR(20) NOT NULL,
	PRIMARY KEY(C_no, Prereq),
	FOREIGN KEY(C_no) REFERENCES Course(Course_num));

CREATE TABLE Department (
	Dep_num NUMERIC(10) NOT NULL,
	Prof_Ssn NUMERIC(9) NOT NULL,
	Chairperson VARCHAR(20),
	Phone_num NUMERIC(10),
	Name CHAR(20),
	Location VARCHAR(20),
	PRIMARY KEY(Dep_num),
	FOREIGN KEY(Prof_Ssn) REFERENCES Professor(Ssn));

CREATE TABLE Student (
	Cwid NUMERIC(9) NOT NULL,
	DepNum NUMERIC(10) NOT NULL,
	PhoneNum NUMERIC(10),
	F_name CHAR(20),
	L_name CHAR(20),
	Address VARCHAR(30),
	PRIMARY KEY(Cwid),
	FOREIGN KEY(DepNum) REFERENCES Department(Dep_num));

CREATE TABLE Minor (
	Dep_Num NUMERIC(10) NOT NULL,
	Stud_cwid NUMERIC(9) NOT NULL,
	PRIMARY KEY(Dep_Num, Stud_cwid),
	FOREIGN KEY(Dep_Num) REFERENCES Department(Dep_num),
	FOREIGN KEY(Stud_cwid) REFERENCES Student(Cwid));

CREATE TABLE Enrolls (
	Student_cwid NUMERIC(9) NOT NULL,
	Sec_num NUMERIC(10) NOT NULL,
	C_num VARCHAR(10) NOT NULL,
	Grade CHAR(2),
	PRIMARY KEY(Student_cwid, Sec_num, C_num),
	FOREIGN KEY(Student_cwid) REFERENCES Student(Cwid),
	FOREIGN KEY(Sec_num) REFERENCES Section(Section_num),
	FOREIGN KEY(C_num) REFERENCES Section(Course_no));
