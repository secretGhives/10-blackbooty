-- 
-- Table structure for table `tbl_user`
-- 

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  PRIMARY KEY  (`user_id`)
) TYPE=MyISAM  AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `tbl_user`
-- 

INSERT INTO `login` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3');