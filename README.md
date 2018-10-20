# CPSC332TermProject
Design a database for a university that satisfies the following requirements:

1) Database keeps information of each professor, including SSN, name, address, telephone number, sex, title, salary, and college degrees. The address includes street address, city, state, adn zip code. The telephone number includes the area code and 7 digit number.

2) Each department has a unique number, name, telephone, office location, and a chairperson who is a professor.

3) Each course has a unique number, title, textbook. units. Each course also has a set of prerequisite courses. Each course is offered by a department.

4) Each course may have several sections. Each section has a section number that is unique within the course, a classroom, meeting days, a beginning time, an ending time, and the number of seats. Each section is taught by a professor.

5) The database keeps student records, including the CWID, name, address, and telephone number. Each student majors in one department and may minor in several departments. The name includes first name and last name.

6) The database keeps enrollment records. Each record has a student, a course section, and a grade.

Design the database and create at least the following number of records:
8 students, 2 departments, 3 professors, 4 courses, 6 sections, and 20 enrollment records.

Provide interfaces for the following individuals:

For Professors:

  a) Given the SSN of the professor, list the titles, classrooms, meeting days, and time of his/her classes
  
  b) Given a course number and a section number, count how many students get each distinct grade, i.e 'A', 'A-', etc.
  
For Students:

  a) Given a course number, list the sections of the course, including the classrooms, the meeting days and time, and the number of students enrolled in each section.
  
  b) Given the CWID of a student, list all courses the student took and the grades they received.
