

--
-- Table structure for table `users`
--



CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(6) NOT NULL AUTO_INCREMENT,
   `person_id` varchar(6) NOT NULL ,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `ocupation` text NOT NULL,
  PRIMARY KEY (`user_id`)
   
)  ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `users` 
(`user_id`, `person_id`, `first_name`, `last_name`, `email`, `ocupation`) 
VALUES 
(1, 'A4586', 'Mohammed','Habiby', 'mhabiby@medcorp.com','Super Admin'),
(2, 'A4586', 'Sara','El Arif', 'asara@medcorp.com','Admin'),
(3, 'A7865', 'Paul','swift', 'pswift@medcorp.com','DBA');