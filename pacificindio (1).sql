-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2012 at 03:00 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pacificindio`
--

-- --------------------------------------------------------

--
-- Table structure for table `pi_comment`
--

CREATE TABLE IF NOT EXISTS `pi_comment` (
  `pic_idx` int(11) NOT NULL AUTO_INCREMENT,
  `pic_parent_idx` int(100) NOT NULL,
  `pic_name` varchar(300) NOT NULL,
  `pic_email` varchar(300) NOT NULL,
  `pic_website` varchar(100) NOT NULL,
  `pic_comment` longtext NOT NULL,
  `pic_published` varchar(100) NOT NULL,
  `pic_date_created` datetime NOT NULL,
  PRIMARY KEY (`pic_idx`),
  KEY `pic_name` (`pic_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `pi_comment`
--

INSERT INTO `pi_comment` (`pic_idx`, `pic_parent_idx`, `pic_name`, `pic_email`, `pic_website`, `pic_comment`, `pic_published`, `pic_date_created`) VALUES
(1, 2, 'John Adrian Tan', 'johnadriantan@gmail.com', 'www.pacificindio.com', 'As a new WordPress user, you should go to your dashboard to delete this page and create new pages for your content. Have fun!Sample Page This is an example page. Its different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like', '', '0000-00-00 00:00:00'),
(2, 2, 'Mike Kelleres', 'johnadriantan@yahoo.com', 'www.mike.com', 'As a new WordPress user, you should go to your dashboard to delete this page and create new pages for your content. Have fun!Sample Page This is an example page. It’s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this: Hi there! I’m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin’ caught in the rain.) …or something like this: The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickies to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community. As a new WordPress user, you should go to your dashboard to delete this page and create new pages for your content. Have fun!\r\nComment [121]', '', '0000-00-00 00:00:00'),
(3, 2, 'John Kenderlly', 'john@hotmail.com', 'www.john.com', 'Hi i want to order plugin to you please email me. Thanks and regards.', '', '0000-00-00 00:00:00'),
(4, 2, 'Hot Anne', 'hotanne@yahoo.com', 'www.anne.com', 'Hi This is anne curtis hot cleavage..<br />\r\n<img src="http://www.pacificindio.com/web/images/anne.jpg">', '', '0000-00-00 00:00:00'),
(5, 2, 'Shit!', 'hot@yahoo.com', '', 'hi anne i want to ahhh..', '', '0000-00-00 00:00:00'),
(6, 12, 'Webmaster', 'webmaster@gmail.com', '', 'oard to delete this page and create new pages for your content. Have fun! Leave a ReplySample Page This is an example page. It’s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this: Hi there! I’m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin’ caught in the rain.) …or something like this: The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickies to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community. As a new WordPress user, you should go to your dashboard to delete this page and create new pages for your content. Have fun! Leave a Reply', '', '0000-00-00 00:00:00'),
(7, 6, 'Mark Lorray', 'mark@test.com', '', 'Hi pacificindio! I want to order a plugin to you please contact me at my email please. thank you..', '', '0000-00-00 00:00:00'),
(8, 7, 'Mike Presso', 'presso@packbee.com', '', 'senger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin’ caught in the rain.) …or something like this: The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickies to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of', '', '0000-00-00 00:00:00'),
(9, 14, 'Codeigniter Evangelist', 'evan@gmail.com', '', 'Nice post!\r\n', '', '0000-00-00 00:00:00'),
(10, 15, 'James Brandon', 'james@yahoo.com', '', 'I want to invest to this system. please contact me.', '', '0000-00-00 00:00:00'),
(11, 15, 'Mr. Tweenie', 'post@yahoo.com', '', 'nice one post! please again!', '', '0000-00-00 00:00:00'),
(12, 16, 'Jonyy Jule', 'jonny@jule.com', '', 'Hi where is the demo i want to try it.', '', '0000-00-00 00:00:00'),
(13, 16, 'Administrator', 'admin@pacificindio.com', 'Easy Notes', '<a href="http://www.pacificindio.com/web/page/post/16">Easy Notes | Module</a>', '', '0000-00-00 00:00:00'),
(14, 17, 'Joeslideshow', 'joe@slideshow.com', '', 'very nice plugin!', '', '0000-00-00 00:00:00'),
(15, 15, 'Hames Miller', 'hames@facebook.com', 'www.facebook.com/hames20', 'hahahaha!', '', '0000-00-00 00:00:00'),
(16, 6, 'Shes the one', 'johnadriantan@yahoo.com', 'johntan', 'Shes the one', '', '0000-00-00 00:00:00'),
(17, 16, 'John Adrian Tan', 'johnadriantan@yahoo.com', '', 'Test', '', '0000-00-00 00:00:00'),
(18, 2, 'Mini Me', 'mine@yahoo.com', 'www.minime.com', 'www.minime.com', '', '0000-00-00 00:00:00'),
(21, 6, 'Shyes', 'sheyes@yahoo.com', '', 'Have fun!', '', '0000-00-00 00:00:00'),
(22, 22, 'James Bee', 'james@yahoo.com', '', 'This is nice MySQL GUI.', '', '0000-00-00 00:00:00'),
(23, 34, 'Lonelyman', 'lonely@yahoo.com', '', 'back to the real world!', '', '0000-00-00 00:00:00'),
(24, 27, 'sdfas', 'fasdfasdf', 'sdfasdf', 'afa', '', '0000-00-00 00:00:00'),
(25, 45, 'Johny Beil', 'johnny@beil.com', '', 'Nice plugin hope you can developed one for me i will pay you $5000 per hour please email me johnny@beil.com', '', '0000-00-00 00:00:00'),
(26, 5, 'sdfasdf', 'asdfasd', 'fsadfasdf', 'sdfasdfasdf', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pi_pages`
--

CREATE TABLE IF NOT EXISTS `pi_pages` (
  `pip_idx` int(11) NOT NULL AUTO_INCREMENT,
  `pip_parent_idx` int(90) NOT NULL,
  `pip_sequence` int(11) NOT NULL,
  `pip_title` varchar(90) NOT NULL,
  `pip_post_name` varchar(300) NOT NULL,
  `pip_content` longtext NOT NULL,
  `pip_published` varchar(90) NOT NULL,
  `pip_post_type` varchar(90) NOT NULL,
  `pip_ui_link` varchar(300) NOT NULL,
  `pip_date_created` datetime NOT NULL,
  `pip_date_updated` datetime NOT NULL,
  PRIMARY KEY (`pip_idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `pi_pages`
--

INSERT INTO `pi_pages` (`pip_idx`, `pip_parent_idx`, `pip_sequence`, `pip_title`, `pip_post_name`, `pip_content`, `pip_published`, `pip_post_type`, `pip_ui_link`, `pip_date_created`, `pip_date_updated`) VALUES
(9, 0, 0, 'jQuery Mobile Framework Tutorial.', '', '<div>\n<p><span style="font-family: helvetica; font-size: medium;">Jquery mobile framework helps you to develop rich web based mobile applications. In this tutorial, we explained basic things such as theme selection, library usage, design pages, page links and Transition animations. Its very lightweight code, simple and flexible, it supports all popular smartphone and table platforms. Use it and enrich your mobile web applications.&nbsp;Jquery mobile framework helps you to develop rich web based mobile applications. In this tutorial, we explained basic things such as theme selection, library usage, design pages, page links and Transition animations. Its very lightweight code, simple and flexible, it supports all popular smartphone and table platforms. Use it and enrich your mobile web applications.</span></p>\n<p><span><img style="display: block; margin-left: auto; margin-right: auto;" title="https://lh4.googleusercontent.com/-O-c6Dg4h_Us/Tu4vbnDvXjI/AAAAAAAAFoQ/zkbnVOIl71A/s550/MobileFrameWork.jpg" src="https://lh4.googleusercontent.com/-O-c6Dg4h_Us/Tu4vbnDvXjI/AAAAAAAAFoQ/zkbnVOIl71A/s550/MobileFrameWork.jpg" alt="https://lh4.googleusercontent.com/-O-c6Dg4h_Us/Tu4vbnDvXjI/AAAAAAAAFoQ/zkbnVOIl71A/s550/MobileFrameWork.jpg" width="550" height="291" /></span></p>\n</div>', 'published', 'post', '', '2012-01-15 10:01:26', '0000-00-00 00:00:00'),
(10, 0, 0, 'Amazon EC2 Multi Domain Setup and Technology Behind 9lessons.', '', '<p><span style="font-family: helvetica; font-size: medium;">Recent days I received lots for requests from my readers that asked to me few questions about 9lessons.info hosting and CMS technology. This post explains you how do I setup my domains + sub domains with Blogger and Amazon EC2 hosting. How to setup multi domains setup in Amazon Elastic Compute Cloud using htaccess file.</span></p>\n<p><span style="font-family: helvetica; font-size: medium;"><img style="vertical-align: baseline; display: block; margin-left: auto; margin-right: auto;" title="https://lh5.googleusercontent.com/-SKJvURcV6Ls/TuwuYFccXzI/AAAAAAAAFn4/ohgWagxDzdI/s550/9lessonsTechnology.png" src="https://lh5.googleusercontent.com/-SKJvURcV6Ls/TuwuYFccXzI/AAAAAAAAFn4/ohgWagxDzdI/s550/9lessonsTechnology.png" alt="https://lh5.googleusercontent.com/-SKJvURcV6Ls/TuwuYFccXzI/AAAAAAAAFn4/ohgWagxDzdI/s550/9lessonsTechnology.png" width="550" height="433" /></span></p>', 'published', 'post', '', '2012-01-15 10:01:37', '0000-00-00 00:00:00'),
(11, 0, 0, 'Jquery AnchorCloud Expanding Link Plugin.', '', '<p><span style="font-family: helvetica; font-size: medium;">Introducing a new jQuery AnchorCloud Link Identifier plugin, This helps make better and enrich link expanding system for your web content pages. This plugin developed using yahoo query language(YQL) for extracting website content like page title and description. First version supports we included Youtube and Vimeo, next release we are planning to include some more popular video and photo services.</span></p>\n<p><span style="font-family: helvetica; font-size: medium;"><img style="display: block; margin-left: auto; margin-right: auto;" title="https://lh5.googleusercontent.com/-zHIWyi810dM/TwgDVgMyurI/AAAAAAAAFrI/cd35qzDr9Ik/s550/Anchor.png" src="https://lh5.googleusercontent.com/-zHIWyi810dM/TwgDVgMyurI/AAAAAAAAFrI/cd35qzDr9Ik/s550/Anchor.png" alt="https://lh5.googleusercontent.com/-zHIWyi810dM/TwgDVgMyurI/AAAAAAAAFrI/cd35qzDr9Ik/s550/Anchor.png" width="550" height="200" /></span></p>', 'published', 'post', '', '2012-01-15 10:01:42', '0000-00-00 00:00:00'),
(18, 0, 0, 'My Works', 'my-works', '<p>My Works</p>', 'published', 'page', '', '2012-01-15 01:01:11', '0000-00-00 00:00:00'),
(19, 0, 0, 'Free Apps', 'free-apps', '<p>Free Apps</p>', 'published', 'page', '', '2012-01-15 01:01:13', '0000-00-00 00:00:00'),
(20, 0, 0, ' Open Source ', 'open-source', '<p>&nbsp;Open Source&nbsp;</p>', 'published', 'page', '', '2012-01-15 01:01:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pi_user_account`
--

CREATE TABLE IF NOT EXISTS `pi_user_account` (
  `piu_idx` int(11) NOT NULL AUTO_INCREMENT,
  `piu_user_level` varchar(90) NOT NULL,
  `piu_username` varchar(90) NOT NULL,
  `piu_password` varchar(90) NOT NULL,
  `piu_first_name` varchar(90) NOT NULL,
  `piu_last_name` varchar(90) NOT NULL,
  `piu_email` varchar(90) NOT NULL,
  `piu_wesbite` varchar(11) NOT NULL,
  `piu_date_created` datetime NOT NULL,
  `piu_date_updated` datetime NOT NULL,
  PRIMARY KEY (`piu_idx`),
  KEY `piu_user_level` (`piu_user_level`,`piu_username`,`piu_password`,`piu_first_name`,`piu_last_name`,`piu_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pi_user_account`
--

INSERT INTO `pi_user_account` (`piu_idx`, `piu_user_level`, `piu_username`, `piu_password`, `piu_first_name`, `piu_last_name`, `piu_email`, `piu_wesbite`, `piu_date_created`, `piu_date_updated`) VALUES
(1, '0', 'admin', 'adietan63', '0', '0', '0', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pi_wall`
--

CREATE TABLE IF NOT EXISTS `pi_wall` (
  `piw_idx` int(100) NOT NULL AUTO_INCREMENT,
  `piw_name` varchar(300) NOT NULL,
  `piw_email` varchar(300) NOT NULL,
  `piw_message` longtext NOT NULL,
  PRIMARY KEY (`piw_idx`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pi_wall`
--

