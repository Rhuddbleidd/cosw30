SELECT students_tbl.student_name, enrollments_tbl.course_name FROM students_tbl
INNER JOIN enrollments_tbl ON students_tbl.student_id = enrollments_tbl.student_id;

SELECT students_tbl.student_name, enrollments_tbl.course_name FROM students_tbl
LEFT JOIN enrollments_tbl ON students_tbl.student_id = enrollments_tbl.student_id;

SELECT students_tbl.student_name, enrollments_tbl.course_name FROM students_tbl
RIGHT JOIN enrollments_tbl ON students_tbl.student_id = enrollments_tbl.student_id;