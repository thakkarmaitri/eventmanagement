-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2013 at 05:11 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE IF NOT EXISTS `admin_info` (
  `aid` int(11) NOT NULL auto_increment,
  `aname` text NOT NULL,
  `acity` text NOT NULL,
  `aadress` varchar(50) NOT NULL,
  `amobno` varchar(12) NOT NULL,
  `email` text NOT NULL,
  `pass` int(11) NOT NULL,
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`aid`, `aname`, `acity`, `aadress`, `amobno`, `email`, `pass`) VALUES
(1, 'maitri', 'patan', '  tfyyerwrwerwe', '9998675643', 'maitri921993@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `cname` text NOT NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--


-- --------------------------------------------------------

--
-- Table structure for table `comeevent`
--

CREATE TABLE IF NOT EXISTS `comeevent` (
  `cid` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  KEY `cid` (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `comeevent`
--

INSERT INTO `comeevent` (`cid`, `uid`, `eid`) VALUES
(1, 8, 23),
(2, 8, 23),
(3, 8, 23),
(38, 20, 27);

-- --------------------------------------------------------

--
-- Table structure for table `contect`
--

CREATE TABLE IF NOT EXISTS `contect` (
  `cid` int(2) NOT NULL auto_increment,
  `info` text NOT NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contect`
--

INSERT INTO `contect` (`cid`, `info`) VALUES
(3, '<p>\r\n&nbsp;\r\n</p><p style="text-align: center;">\r\n	<span style="color:#006400;"><span style="font-size: 16px;">122,Tirupati Township</span></span></p>\r\n<p style="text-align: center;">\r\n	<strong><span style="color:#006400;"><span style="font-size: 16px;">Near Garden Hotel,</span></span></strong></p>\r\n<p style="text-align: center;">\r\n	<strong><span style="color:#006400;"><span style="font-size: 16px;">Patan-384265</span></span></strong></p>\r\n<p style="text-align: center;">\r\n	<strong><span style="color:#006400;"><span style="font-size: 16px;">Contact :8866524490</span></span></strong></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `edes`
--

CREATE TABLE IF NOT EXISTS `edes` (
  `eid` int(4) NOT NULL auto_increment,
  `ename` int(3) NOT NULL,
  `epic` text NOT NULL,
  `edesc` text NOT NULL,
  PRIMARY KEY  (`eid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `edes`
--

INSERT INTO `edes` (`eid`, `ename`, `epic`, `edesc`) VALUES
(49, 0, '', ''),
(50, 0, '', ''),
(51, 0, '', ''),
(52, 0, '', ''),
(53, 0, '', ''),
(54, 0, '', ''),
(55, 0, '', ''),
(56, 0, '', ''),
(48, 0, '', ''),
(41, 0, '', ''),
(42, 0, '', ''),
(43, 0, '', ''),
(44, 0, '', ''),
(45, 0, '', ''),
(46, 0, '', ''),
(47, 0, '', ''),
(40, 0, '', ''),
(25, 5, '961971_10151506558624022_1355776781_n.jpg', '<p>\r\n<p>\r\n<h2><center> Meditation</h2></center>\r\n</p>\r\n	<img alt="" src="http://localhost/project/admn/img1/961971_10151506558624022_1355776781_n.jpg"\r\nheight="450 px" /></p>\r\n<p><h3><span style="color:#0000ff;"><span style="font-family: arial, helvetica, sans-serif;"> \r\nMeditation on Twin Hearts is an Advance Meditation Technique aimed at achieving illumination or universal consciousness.It is also an instrument of world and community service that eventually harmonizes the earth by blessing it with loving-kindness,pease,joy and goodwill.</p>\r\n</span></span></h3>\r\n<h3>\r\n	<span style="color:#0000ff;"><span style="font-family: arial, helvetica, sans-serif;">Bebifits of the meditation on twin hearts:\r\n<p>\r\nReduses Stress </p>\r\n<p>\r\nIncreases contentment,Happiness,inner pease and joy of life.</p>\r\n<p>\r\nImproves family and Interrelationships.</p>\r\n<p>\r\nIncreases physical and inner strength.</p><p>\r\nopens awareness to the infinite reservoir of energy,creativity,and intelligence that lies deep within everyone.</p><p\r\nCleanses and strengthens the chkras and auras(thereby makes the body on all levels stronger and more dynamic).\r\nincreases mental clarity.</p>'),
(24, 0, '', ''),
(23, 0, '', ''),
(22, 0, '', ''),
(21, 4, 'event6.jpg', '<ul>\r\n	<li>\r\n		<br />\r\n		<img alt="" src="http://localhost/project/admn/img1/event6.jpg" style="width: 550px; height: 380px;" /></li>\r\n</ul>\r\n\r\n<h3>\r\n	<span style="color:#0000ff;"><span style="font-family: arial, helvetica, sans-serif;">We live in stressful times.there&#39;s always rush to get things done,always a deadline to meet.Often we don&#39;t realise it until it getstoo overwhelming and it&#39;s impossible to continue leading such a fast paced life.</span></span></h3>\r\n<h3>\r\n	<span style="color:#0000ff;"><span style="font-family: arial, helvetica, sans-serif;">Pranic Healing is the most comprehensive and advanced energy system available to the layperson.The cource not only teaches you how to heal,but also hoe to take charge of your life and improve it on all levels,how to improve interpersonal relationships,reduce stress,improve one&#39;s financial situation,and become more successful aming otheers.</span></span></h3>\r\n<h3>\r\n	<span style="color:#0000ff;"><span style="font-family: arial, helvetica, sans-serif;">This practical two days course gives you the basic skills to feel,control and manipulate the pervasive &quot;pranic energy&quot; in nature.You will learn step by step methods of-</span></span></h3>\r\n<ul>\r\n	<li>\r\n		<h3>\r\n			<span style="color:#008000;"><span style="font-family: arial, helvetica, sans-serif;">Experienc inner Pease &amp; Emotional Healing</span></span></h3>\r\n	</li>\r\n	<li>\r\n		<h3>\r\n			<span style="color:#008000;"><span style="font-family: arial, helvetica, sans-serif;">Self Decontamination &amp; self Searching</span></span></h3>\r\n	</li>\r\n	<li>\r\n		<h3>\r\n			<span style="color:#008000;"><span style="font-family: arial, helvetica, sans-serif;">Self-Healing Techniques to Accelerate You Own Healing</span></span></h3>\r\n	</li>\r\n	<li>\r\n		<h3>\r\n			<span style="color:#008000;"><span style="font-family: arial, helvetica, sans-serif;">Removec Diseased Energies</span></span></h3>\r\n	</li>\r\n	<li>\r\n		<h3>\r\n			<span style="color:#008000;"><span style="font-family: arial, helvetica, sans-serif;">Boost Your Vitality</span></span></h3>\r\n	</li>\r\n</ul>\r\n'),
(26, 0, '', ''),
(27, 0, '', ''),
(29, 0, '', ''),
(30, 0, '', ''),
(31, 0, '', ''),
(32, 0, '', ''),
(33, 0, '', ''),
(34, 0, '', ''),
(35, 0, '', ''),
(38, 0, '', ''),
(39, 1, 'event5.jpg', '<p>\r\n&nbsp;\r\n</p>\r\n<p><center>\r\n	<img alt="" src="http://localhost/project/admn/img1/event5.jpg" style="height: 300px; width: 500px;" /></p></center>\r\n<p>&nbsp;&nbsp;</p>\r\n<p>\r\n	<span style="color:#008080;"><strong><span style="font-size: 14px;">The wesak festival..In pranic healing Wesak festival has its own meaning. On that speacial occasion all pranic healers gather to celebrate the festival of Lord Buddha and be blessed by Lord Buddha himself. The full moon of wesak is a sign that divinity is victorious over evil. By meditating on Wesak full moon festival the pranic healers brings the divine energy on earth to release mankind from sorrows and sufferings. Wesak festival is indeed the festival of service, mercy and compassion of Holy Ones to mankind.</span></strong></span></p>\r\n'),
(36, 0, '', ''),
(37, 2, 'DSCN4047.JPG', '<p>\r\n&nbsp;\r\n</p>\r\n<p>\r\n\r\n\r\n<center>\r\n	<img alt="" src="http://localhost/project/admn/img1/DSCN4047.JPG" style="width: 500px; height: 375px;" border="2" /></p></center>\r\n<h2>\r\n	The soul devlops by giving not by accumulating .</h2>\r\n<h3>\r\n	<span style="color:#006400;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -GMCKS</span></h3>\r\n<p>\r\n	<strong><span style="font-size:12px;"><span style="color: rgb(0, 100, 0);">Inspired by a desire to serve those less fortunate and with a deep understanding that it is in giving that we recieve.</span>&nbsp;<span style="color: rgb(0, 100, 0);">Grand Master Choa Kok Sui ( the founder of modern pranic healing and arhatic yoga) .</span></span></strong></p>\r\n<p>\r\n	<strong><span style="font-size:12px;"><span style="background-color: rgb(229, 229, 229); color: rgb(0, 128, 0); font-family: sans-serif; white-space: pre;">Our Master has put forth an activity to feed the hungry and needy people for the one of the \r\nmost philanthropic activity in world. \r\nUnder that GMCKS deesa and patan pranic healing group are enthusiasticly involved to continue the work of GMCKS.</span></span></strong></p>\r\n<p>\r\n	&nbsp;</p>\r\n'),
(57, 0, '', ''),
(58, 0, '', ''),
(59, 0, '', ''),
(60, 0, '', ''),
(61, 0, '', ''),
(62, 0, '', ''),
(63, 0, '', ''),
(64, 0, '', ''),
(65, 0, '', ''),
(66, 0, '', ''),
(67, 0, '', ''),
(68, 0, '', ''),
(69, 2, '', '<p>\r\n	hellooooooooooooooooooo</p>\r\n'),
(70, 1, '026.JPG', '<p>\r\n	hello...</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `eid` int(4) NOT NULL auto_increment,
  `ename` text NOT NULL,
  `etype` int(11) NOT NULL,
  `eadress` text NOT NULL,
  `emobno` int(12) NOT NULL,
  `edate` date NOT NULL,
  `etime` time NOT NULL,
  `eseat` int(4) NOT NULL,
  `flg` int(2) NOT NULL,
  PRIMARY KEY  (`eid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eid`, `ename`, `etype`, `eadress`, `emobno`, `edate`, `etime`, `eseat`, `flg`) VALUES
(29, 'foodforhunger', 1, 'sidhpur', 98554552, '2013-04-19', '11:02:25', 2, 0),
(27, 'Twin heart', 4, '39,Shailja Bunglow,paatan ', 982451254, '2013-11-20', '09:00:00', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `emid` int(11) NOT NULL,
  `ename` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--


-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE IF NOT EXISTS `img` (
  `eid` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY  (`eid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`eid`, `name`, `image`) VALUES
(1, '!cid_00a401c8f5f1$b3569ae0$200c110a@icicibanklt.jpg', '!cid_00a401c8f5f1$b3569ae0$200c110a@icicibanklt.jpg'),
(2, '25_1524.JPG', '25_1524.JPG'),
(3, '008.jpg', '008.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `rid` int(4) NOT NULL auto_increment,
  `rname` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `pin` int(6) NOT NULL,
  `state` int(3) NOT NULL,
  `occ` text NOT NULL,
  `bdate` date NOT NULL,
  `gender` int(2) NOT NULL,
  `mno` text NOT NULL,
  `email` text NOT NULL,
  `sque` text NOT NULL,
  `sans` varchar(50) NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY  (`rid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`rid`, `rname`, `address`, `city`, `pin`, `state`, `occ`, `bdate`, `gender`, `mno`, `email`, `sque`, `sans`, `pass`) VALUES
(1, 'deep', 'vadali', 'vadali', 123456, 0, 'business', '2013-01-02', 0, '909090', 'ffdsfdf133', 'What your chieldhood name?', '', '123'),
(2, 'maitri', 'patan', 'patan', 123456, 0, 'student', '2013-09-16', 1, '123456', 'maitri', 'what is your childhood name?', '', '123'),
(3, 'maitri', 'patan', 'patan', 123456, 0, 'student', '2012-10-18', 1, '12345678910', 'eflwf;', '0', '', '123'),
(4, 'maitri', 'qwe', 'patan', 23456, 0, 'ghi', '2012-02-16', 1, '67890', 'mdk', '0', '', '123'),
(5, 'qwe', '', '', 1233, 0, 'qw', '0000-00-00', 0, '', '', '0', '', ''),
(6, 'qw', 'asa', 'asda', 12345, 0, 'qwe', '2013-03-17', 1, '1234567', 'aaffsa', '0', '', '909'),
(7, 'qw', 'asa', 'asda', 12345, 0, 'qwe', '2013-03-17', 1, '1234567', 'aaffsa', '0', '', '909'),
(8, 'qw', 'qw', 'qw', 123, 0, 'qwe', '2013-09-18', 1, '1234567', '1234567', '0', '', '123'),
(9, 'deep', 'deep', 'patan', 383265, 0, 'business', '2013-02-02', 0, '909090', 'bha@gmail.com', '0', '', '123'),
(10, 'maitri', 'asasa', 'patan', 123344, 0, 'asdf', '2013-03-17', 1, '1234567891', 'maitri921993@gmail.com', '0', '', '1234'),
(11, 'maitri', 'dsgsgs', 'gsggsgs', 123123, 0, 'wrraat', '2013-03-18', 1, '1234567891', 'maitri921993@gmail.com', '0', 'maitri', '123'),
(12, 'maitri', 'dsgsgs', 'gsggsgs', 123123, 0, 'wrraat', '2013-03-18', 1, '1234567891', 'maitri921993@gmail.com', '0', 'maitri', '123'),
(13, 'deep', 'abcd', 'patan', 123456, 0, 'studen', '0000-00-00', 0, '98989898989', 'deep@gmail.com', '0', 'pintu', '123');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `sid` int(11) NOT NULL auto_increment,
  `state` varchar(20) NOT NULL,
  PRIMARY KEY  (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `state`) VALUES
(1, 'Gujarat'),
(2, 'Rajasthan'),
(3, 'Punjab'),
(4, 'MadhyaPradesh'),
(5, 'ArunachalPradesh'),
(6, 'U.P.'),
(7, 'Karnataka'),
(8, 'Maharastra'),
(9, 'Tamilnadu'),
(10, 'Bihar'),
(11, 'Aasam'),
(12, 'Goa'),
(13, 'Hariyana'),
(14, 'Zarkhand'),
(15, 'Keral'),
(16, 'Manipur'),
(17, 'Megalaya'),
(18, 'Jammu Kashmir');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL auto_increment,
  `uname` text NOT NULL,
  `uadd` text NOT NULL,
  `ucity` text NOT NULL,
  `upin` int(6) NOT NULL,
  `ustate` text NOT NULL,
  `uocc` text NOT NULL,
  `ubdate` date NOT NULL,
  `gender` int(11) NOT NULL,
  `mobno` text NOT NULL,
  `uemail` text NOT NULL,
  `useq` int(11) NOT NULL,
  `uans` text NOT NULL,
  `upass` text NOT NULL,
  `uctype` int(11) NOT NULL,
  `flg` int(11) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uadd`, `ucity`, `upin`, `ustate`, `uocc`, `ubdate`, `gender`, `mobno`, `uemail`, `useq`, `uans`, `upass`, `uctype`, `flg`) VALUES
(26, '', '0', '', 0, 'Select', '', '0000-00-00', 0, '', '', 0, '0', '0', 0, 0),
(25, '', '0', '', 0, 'Select', '', '0000-00-00', 0, '', '', 0, '0', '0', 0, 0),
(24, '', '0', '', 0, 'Select', '', '0000-00-00', 0, '', '', 0, '0', '0', 0, 0),
(23, '', '0', '', 0, 'Select', '', '0000-00-00', 0, '', '', 0, '0', '0', 0, 0),
(22, 'dhruvil', '0', '', 0, 'Select', '', '0000-00-00', 0, '', '', 0, '0', '0', 0, 0),
(20, 'maitri', '', '', 0, 'Select', '', '0000-00-00', 0, '', 'maitri921993@gmail.com', 0, 'swet', '123', 0, 1),
(21, 'ushma', '0', 'patan', 0, 'Punjab', 'stu', '0000-00-00', 0, '', '', 0, '0', '0', 0, 0);
