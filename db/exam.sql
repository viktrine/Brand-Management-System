CREATE TABLE IF NOT EXISTS `Answer` (
`answer_id` int(11) NOT NULL,
  `quiz_question_id` int(11) NOT NULL,
  `answer_text` varchar(100) NOT NULL,
  `choices` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `class_exam` (
`class_quiz_id` int(11) NOT NULL,
  `teacher_class_id` int(11) NOT NULL,
  `quiz_time` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `exam` (
`quiz_id` int(11) NOT NULL,
  `quiz_title` varchar(50) NOT NULL,
  `quiz_description` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `exam_question` (
`quiz_question_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `question_text` varchar(100) NOT NULL,
  `question_type_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `student_class_exam` (
`student_class_quiz_id` int(11) NOT NULL,
  `class_quiz_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_quiz_time` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

ALTER TABLE `Answer`
 ADD PRIMARY KEY (`answer_id`);

 ALTER TABLE `class_exam`
 ADD PRIMARY KEY (`class_quiz_id`);

 ALTER TABLE `exam`
 ADD PRIMARY KEY (`quiz_id`);

ALTER TABLE `exam_question`
 ADD PRIMARY KEY (`quiz_question_id`);

 ALTER TABLE `student_class_exam`
 ADD PRIMARY KEY (`student_class_quiz_id`);

 ALTER TABLE `Answer`
MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;

ALTER TABLE `class_exam`
MODIFY `class_quiz_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;

ALTER TABLE `exam`
MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;

ALTER TABLE `exam_question`
MODIFY `quiz_question_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;

ALTER TABLE `student_class_exam`
MODIFY `student_class_quiz_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;