CREATE TABLE `assigment` (
  `crs_nr` int(11) NOT NULL,
  `crs_name` varchar(300) NOT NULL,
  `st_id` int(11) NOT NULL,
  `as_name` varchar(300) NOT NULL,
  `grade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `assigment` (`crs_nr`, `crs_name`, `st_id`, `as_name`, `grade`) VALUES
(101, 'Biology', 1000000, 'Assignment 1', 90),
(101, 'CS1', 1000006, 'Assignment 1', 100),
(101, 'Intro to law', 1000008, 'Assignment 1', 56),
(101, 'Intro To Math', 1000003, 'Assignment 2', 97),
(200, 'Physics 1', 1000009, 'Assignment 1', 70),
(230, 'Calculus', 1000000, 'Assignment 1', 100),
(245, 'World Literature', 1000003, 'Assignment 1', 99),
(360, 'Intro to Abstract Math', 1000002, 'Assignment 1', 94),
(365, 'Data Science', 1000001, 'Assignment 1', 78),
(450, 'Operating Systems', 1000007, 'Assignment 1', 95);


CREATE TABLE `courses` (
  `corse_nr` int(11) NOT NULL,
  `corse_name` varchar(300) NOT NULL,
  `room` varchar(300) DEFAULT NULL,
  `building` varchar(300) DEFAULT NULL,
  `prof_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `courses` (`corse_nr`, `corse_name`, `room`, `building`, `prof_id`) VALUES
(101, 'Biology', '104', 'Somerset', 7000002),
(101, 'CS1', '400', 'Tremont', 7000001),
(101, 'Intro to law', '309', 'Somerset', 7000007),
(101, 'Intro To Math', '505', 'Tremont', 7000009),
(200, 'Physics 1', '502', 'Sawyer', 7000010),
(230, 'Calculus', '200', 'Sawyer', 7000009),
(245, 'World Literature', '501', 'Tremont', 7000008),
(360, 'Intro to Abstract Math', '503', 'Tremont', 7000009),
(365, 'Data Science', '423', 'Tremont', 7000001),
(450, 'Operating Systems', '500', 'Somerset', 7000001);



CREATE TABLE `department` (
  `dep_name` varchar(300) NOT NULL,
  `floor` int(11) DEFAULT NULL,
  `building` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `department` (`dep_name`, `floor`, `building`) VALUES
('Biology', 4, 'SAWYER'),
('Chemistry', 5, 'SAWYER'),
('Comp Science', 7, 'Tremont'),
('Economics', 3, 'Somerset'),
('English', 2, 'SAWYER'),
('German', 4, 'Tremont'),
('Law', 4, 'Tremont'),
('Literature', 9, 'Tremont'),
('Math', 6, 'SAWYER'),
('Physics', 8, 'Somerset');



CREATE TABLE `enrolled` (
  `st_id` int(11) NOT NULL,
  `cs_nr` int(11) NOT NULL,
  `credits` int(11) DEFAULT NULL,
  `cs_name` varchar(300) NOT NULL,
  `grade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `enrolled` (`st_id`, `cs_nr`, `credits`, `cs_name`, `grade`) VALUES
(1000000, 450, 4, 'Operating Systems', 100),
(1000001, 101, 1, 'Intro to law', 70),
(1000002, 101, 4, 'Biology', 80),
(1000003, 101, 4, 'CS1', 100),
(1000004, 200, 3, 'Physics 1', 85),
(1000005, 230, 4, 'Calculus', 86),
(1000006, 245, 2, 'World Literature', 60),
(1000007, 360, 4, 'Intro to Abstract Math', 99),
(1000008, 365, 4, 'Dara Science', 69),
(1000009, 101, 4, 'Intro To Math', 90);



CREATE TABLE `professor` (
  `professor_id` int(20) NOT NULL,
  `f_name` varchar(300) DEFAULT NULL,
  `l_name` varchar(300) DEFAULT NULL,
  `office` int(11) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `dep_name` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `professor` (`professor_id`, `f_name`, `l_name`, `office`, `email`, `dep_name`) VALUES
(7000001, 'Dimitry', 'Zinoviev', 123, 'dzino@suffolk.edu', 'Comp Science'),
(7000002, 'Rich', 'Jones', 245, 'rjones@suffolk.edu', 'Biology'),
(7000003, 'Lan', 'San', 789, 'lsan@suffolk.edu', 'Chemistry'),
(7000004, 'Nade', 'Shot', 567, 'nshot@suffolk.edu', 'Economics'),
(7000005, 'Nadale', 'Ral', 124, 'nral@suffolk.edu', 'English'),
(7000006, 'Senguin', 'Dusk', 125, 'sdusk@suffolk.edu', 'German'),
(7000007, 'Road', 'Wisper', 126, 'lwisper@suffolk.edu', 'Law'),
(7000008, 'Justin', 'Kluivert', 127, 'jkluivert@suffolk.edu', 'Literature'),
(7000009, 'Jordan', 'Sing', 128, 'jordsing@suffolk.edu', 'Math'),
(7000010, 'Shern', 'Gauster', 129, 'shgoust@suffolk.edu', 'Physics');


CREATE TABLE `student` (
  `student_id` int(20) NOT NULL,
  `f_name` varchar(300) DEFAULT NULL,
  `l_name` varchar(300) DEFAULT NULL,
  `major` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `grad_year` int(20) DEFAULT NULL,
  `gpa` decimal(3,2) DEFAULT NULL,
  `advisor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `student` (`student_id`, `f_name`, `l_name`, `major`, `email`, `grad_year`, `gpa`, `advisor_id`) VALUES
(1000000, 'Julie', 'Randolf', 'Biology', 'grand@suffolk.edu', 2021, '2.50', 7000002),
(1000001, 'Mike', 'Ring', 'Math', 'mring@suffolk.edu', 2020, '3.50', 7000009),
(1000002, 'Joe', 'Biden', 'Comp Science', 'jbiden@suffolk.edu', 2019, '5.00', 7000001),
(1000003, 'Vjord', 'Mara', 'Literature', 'vmara@suffolk.edu', 2020, '3.50', 7000008),
(1000004, 'Nick', 'Land', 'Math', 'nland@suffolk.edu', 2021, '2.00', 7000009),
(1000005, 'Randy', 'Dest', 'Biology', 'rdest@suffolk.edu', 2023, '1.00', 7000002),
(1000006, 'Rio', 'Ferdinand', 'Physics', 'rferdinand@suffolk.edu', 2021, '2.40', 7000010),
(1000007, 'Jack', 'Willshare', 'Economics', 'jwillsh@suffolk.edu', 2020, '2.90', 7000004),
(1000008, 'Tanner', 'Time', 'Comp Science', 'ttime@suffolk.edu', 2025, '4.00', 7000001),
(1000009, 'Ali', 'Bob', 'Math', 'ali@suffolk.edu', 2019, '2.04', 7000003);


ALTER TABLE `assigment`
  ADD PRIMARY KEY (`crs_nr`,`crs_name`,`as_name`,`st_id`),
  ADD KEY `st_id` (`st_id`);


ALTER TABLE `courses`
  ADD PRIMARY KEY (`corse_nr`,`corse_name`),
  ADD KEY `prof_id` (`prof_id`);


ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_name`),
  ADD UNIQUE KEY `dep_name` (`dep_name`);


=
ALTER TABLE `enrolled`
  ADD PRIMARY KEY (`st_id`,`cs_nr`,`cs_name`),
  ADD KEY `enrolled_bkt2` (`cs_nr`);


ALTER TABLE `professor`
  ADD PRIMARY KEY (`professor_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `dep_name` (`dep_name`);


ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `advisor_id` (`advisor_id`);

ALTER TABLE `professor`
  MODIFY `professor_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7000017;


ALTER TABLE `student`
  MODIFY `student_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000023;


ALTER TABLE `assigment`
  ADD CONSTRAINT `assigment_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assigment_ibfk_2` FOREIGN KEY (`crs_nr`) REFERENCES `courses` (`corse_nr`) ON DELETE CASCADE;


ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`prof_id`) REFERENCES `professor` (`professor_id`) ON DELETE SET NULL;


ALTER TABLE `enrolled`
  ADD CONSTRAINT `enrolled_bkt1` FOREIGN KEY (`st_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `enrolled_bkt2` FOREIGN KEY (`cs_nr`) REFERENCES `courses` (`corse_nr`) ON DELETE CASCADE;


ALTER TABLE `professor`
  ADD CONSTRAINT `professor_ibfk_1` FOREIGN KEY (`dep_name`) REFERENCES `department` (`dep_name`) ON DELETE SET NULL;


ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`advisor_id`) REFERENCES `professor` (`professor_id`) ON DELETE SET NULL;
COMMIT;
