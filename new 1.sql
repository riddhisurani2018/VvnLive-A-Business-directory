 
-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 14, 2017 at 04:36 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `indiadea_vvnlive`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `adminlogin`
-- 

CREATE TABLE `adminlogin` (
  `aid` int(50) NOT NULL auto_increment,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `cno` bigint(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `pincode` bigint(20) NOT NULL,
  `confirm` bigint(2) NOT NULL,
  PRIMARY KEY  (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `adminlogin`
-- 

INSERT INTO `adminlogin` (`aid`, `firstname`, `lastname`, `username`, `password`, `email`, `gender`, `cno`, `address`, `pincode`, `confirm`) VALUES 
(5, 'Rushit', 'Pandya', 'rushit', '123456', 'ru@gmail.com', 'male', 7889455612, 'halol,\r\nbaroda', 304050, 1),
(6, 'Taral', 'Patel', 'taralp', '123456', 'taral@gmail.co.in', 'male', 7878685342, 'iujlkrgm', 687546, 0),
(7, 'Pratik', 'Rathod', 'pratik', '123456', 'pr@gmail.com', 'male', 8866200360, 'anand', 388120, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `adsinformation`
-- 

CREATE TABLE `adsinformation` (
  `adsinfoid` int(100) NOT NULL auto_increment,
  `adname` varchar(200) NOT NULL,
  `adsid` int(100) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `adsimagepath` varchar(100) NOT NULL,
  `adsurl` varchar(500) NOT NULL,
  `adstotalamount` int(100) NOT NULL,
  `categoryid` int(100) NOT NULL,
  `businessid` int(100) NOT NULL,
  `confirm` bigint(1) NOT NULL,
  `payment` bigint(2) NOT NULL,
  `cart` bigint(2) NOT NULL,
  PRIMARY KEY  (`adsinfoid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

-- 
-- Dumping data for table `adsinformation`
-- 

INSERT INTO `adsinformation` (`adsinfoid`, `adname`, `adsid`, `fromdate`, `todate`, `adsimagepath`, `adsurl`, `adstotalamount`, `categoryid`, `businessid`, `confirm`, `payment`, `cart`) VALUES 
(92, 'horizontal', 2, '1970-01-01', '1970-01-01', 'simages/horizontal21335.jpg', 'http://www.vvnlive.co.in/', 30, 26, 60, 1, 1, 0),
(96, 'rucat', 4, '2016-02-18', '2016-02-26', 'simages/rucat1827.jpg', 'http://www.vvnlive.co.in/', 30, 10, 64, 1, 1, 0),
(97, 'gfgvhb', 4, '2016-02-23', '2016-02-29', 'simages/gfgvhb24080.jpg', 'http://pkrathod1994.wix.com/home', 30, 10, 64, 1, 1, 0),
(98, 'defaultcat', 8, '2016-02-25', '2016-03-24', 'simages/defaultcat2586.jpg', 'http://www.vvnlive.co.in/', 50, 10, 64, 1, 1, 0),
(99, 'chgjhkj', 2, '1970-01-01', '1970-01-01', 'simages/chgjhkj24490.jpg', 'http://www.vvnlive.co.in/', 50, 10, 64, 1, 1, 0),
(100, 'newad', 1, '2016-02-20', '2016-02-27', 'simages/mybanner22891.jpg', 'http://www.vvnlive.co.in/', 100, 26, 65, 1, 1, 0),
(104, 'first', 5, '2016-02-26', '2016-02-27', 'simages/first27787.jpg', 'http://abc.com', 100, 26, 60, 1, 1, 0),
(106, 'fhgjhj', 1, '2016-02-26', '2016-02-27', 'simages/scitbanner29191.jpg', 'http://materializecss.com/about.html', 20, 26, 60, 1, 1, 0),
(107, 'gvhbjn', 1, '2016-02-27', '2016-02-29', 'simages/vvn.jpg', 'http://materializecss.com/about.html', 50, 26, 60, 1, 1, 0),
(108, 'tfyguhj', 8, '2016-02-29', '2016-02-29', 'simages/tfyguhj20217.jpg', 'http://materializecss.com/about.html', 50, 26, 60, 2, 0, 0),
(109, 'fgjhjlk', 2, '2016-02-28', '2016-03-22', 'simages/fgjhjlk25649.png', 'http://materializecss.com/about.html', 30, 26, 60, 1, 0, 0),
(110, 'Iaegjnk', 5, '2016-03-18', '2016-03-25', 'simages/Iaegjnk10665.jpg', 'http://materializecss.com/about.html', 50, 26, 60, 0, 0, 0),
(111, 'Newilgdk', 3, '2016-03-18', '2016-03-25', 'simages/Newilgdk18948.jpg', 'http://materializecss.com/about.html', 20, 1, 60, 0, 0, 0),
(112, 'Hjkmsdv', 3, '2016-03-23', '2016-03-26', 'simages/Hjkmsdv26903.jpg', 'http://vvnlive.co.in', 20, 1, 60, 0, 0, 0),
(113, 'Weksafhj', 3, '2016-04-13', '2016-04-23', 'simages/Weksafhj31422.png', 'http:/ashkjsa.in', 20, 26, 60, 0, 0, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `adspackagedetail`
-- 

CREATE TABLE `adspackagedetail` (
  `adsid` int(200) NOT NULL auto_increment,
  `adsname` varchar(50) NOT NULL,
  `adspage` varchar(100) NOT NULL,
  `width` bigint(20) NOT NULL,
  `height` bigint(20) NOT NULL,
  `adsprice` int(100) NOT NULL,
  `1 Week` bigint(200) NOT NULL,
  `1 Month` bigint(200) NOT NULL,
  `2 Month` bigint(200) NOT NULL,
  `3 Month` bigint(200) NOT NULL,
  `6 Month` bigint(200) NOT NULL,
  `1 Year` bigint(200) NOT NULL,
  `2 Year` bigint(200) NOT NULL,
  PRIMARY KEY  (`adsid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `adspackagedetail`
-- 

INSERT INTO `adspackagedetail` (`adsid`, `adsname`, `adspage`, `width`, `height`, `adsprice`, `1 Week`, `1 Month`, `2 Month`, `3 Month`, `6 Month`, `1 Year`, `2 Year`) VALUES 
(1, 'Homepage Banner', 'homepage', 1366, 400, 30, 200, 800, 1500, 2200, 4000, 7000, 12000),
(2, 'Leader Board', 'allpages', 728, 90, 20, 130, 500, 950, 1300, 2200, 4000, 7000),
(3, 'Large Skyscraper', 'allpages', 130, 500, 20, 130, 500, 950, 1300, 2200, 4000, 7000),
(4, 'Large Mobile Banner', 'allpages', 320, 100, 10, 60, 250, 480, 700, 1300, 2300, 4200),
(5, 'Large Rectangle', 'allpages', 300, 250, 10, 60, 250, 480, 700, 1300, 2300, 4200);

-- --------------------------------------------------------

-- 
-- Table structure for table `businessdetail`
-- 

CREATE TABLE `businessdetail` (
  `businessid` int(200) NOT NULL auto_increment,
  `categoryid` int(100) NOT NULL,
  `businessname` varchar(100) NOT NULL,
  `businessdescription` varchar(200) NOT NULL,
  `businessaddress` varchar(200) NOT NULL,
  `businesspincode` int(6) NOT NULL,
  `landmarkid` int(50) NOT NULL,
  `businesscno` bigint(10) NOT NULL,
  `businessemail` varchar(50) NOT NULL,
  `businessimagepath` varchar(100) NOT NULL,
  `businessstarttime` time NOT NULL,
  `businessendtime` time NOT NULL,
  `businesscloseday` varchar(10) NOT NULL,
  `businesssite` varchar(50) NOT NULL,
  PRIMARY KEY  (`businessid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

-- 
-- Dumping data for table `businessdetail`
-- 

INSERT INTO `businessdetail` (`businessid`, `categoryid`, `businessname`, `businessdescription`, `businessaddress`, `businesspincode`, `landmarkid`, `businesscno`, `businessemail`, `businessimagepath`, `businessstarttime`, `businessendtime`, `businesscloseday`, `businesssite`) VALUES 
(60, 26, 'Source Code Info Tech', 'it based solution company', 'Near bhaikaka,\r\nvvnagar, anand', 360400, 1, 9409456695, 'pr@gmail.com', 'businessimages/abc40506.jpg', '09:00:00', '19:00:00', 'Thursday', 'wnrk.com'),
(64, 26, 'no business', 'finding', 'halol', 364060, 40, 9494565623, 'ru@gmail.com', 'businessimages/no business7065.jpg', '05:05:00', '22:10:00', 'Sunday', 'ru.com'),
(65, 26, 'New Business', 'sadi lai lo', 'jetpur', 34562, 45, 9000050020, 'kevin@gmail.com', 'businessimages/New Business22734.jpg', '09:00:00', '20:00:00', 'Sunday', 'kevin.com'),
(66, 26, 'software company', 'php,android', 'anand', 388012, 14, 6030405060, 'sc@gmail.com', 'businessimages/software company7065.jpg', '08:08:00', '09:09:00', 'sunday', 'abc.com'),
(67, 26, 'party time', 'fchgvjbknk', 'dxgfchjj', 364060, 50, 1234567890, 'gh@fmail.com', 'businessimages/party time22600.jpg', '01:00:00', '14:00:00', '', 'abc.com'),
(69, 26, 'Shreeji Vadapav', 'sdffdsfdsfds', 'sdfdf', 389350, 1, 9898989898, 'shreeji@gmail.com', 'businessimages/Shreeji Vadapav3076.jpg', '10:01:00', '10:10:00', 'Sunday', 'www.shreeji.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `careers`
-- 

CREATE TABLE `careers` (
  `careersid` int(10) NOT NULL auto_increment,
  `fullname` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `keyskills` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `resumepath` varchar(200) NOT NULL,
  `reviewed` int(2) NOT NULL,
  PRIMARY KEY  (`careersid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `careers`
-- 

INSERT INTO `careers` (`careersid`, `fullname`, `designation`, `email`, `institution`, `keyskills`, `qualification`, `phone`, `resumepath`, `reviewed`) VALUES 
(1, 'hbkjl', 'ljk;l', 'pe@gmail.com', 'jgyuh', 'uhijklkjlkl', 'kbjlk;l', 86741, '86741.pdf', 0),
(2, 'uygh', 'iuhoij', 'huij@g.com', 'iuhji', 'giuhji', 'hj', 0, '2.pdf', 0),
(3, 'vhjk', 'uhoij', 'uyhujik@g.com', 'uygiuhoij', 'iuhoij', 'hjiuhoij', 9865312, '3.pdf', 0),
(4, 'jnk', 'jlkl', 'bkjlk@g.com', 'kbjl', 'kjl', 'jlkl', 0, '4.pdf', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `contactus`
-- 

CREATE TABLE `contactus` (
  `contactid` int(11) NOT NULL auto_increment,
  `firstname` varchar(30) NOT NULL,
  `telephone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `inquirytype` varchar(100) NOT NULL,
  `message` varchar(300) NOT NULL,
  `reviewed` int(2) NOT NULL default '0',
  PRIMARY KEY  (`contactid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `contactus`
-- 

INSERT INTO `contactus` (`contactid`, `firstname`, `telephone`, `email`, `inquirytype`, `message`, `reviewed`) VALUES 
(4, 'rushit', 787878787, 'khj@gmail.com', '1', 'ghkjn', 0),
(5, 'rushit', 7046609001, 'ru@gmail.com', '5', 'jnkjbn', 0),
(6, 'tfugyhj', 8421574512, 'uyghjk@g.com', '1', 'chgvjhbkjn', 0),
(7, 'gifj', 8, 'dkvjh@g.com', '3', 'wjfbn', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `coupondetail`
-- 

CREATE TABLE `coupondetail` (
  `couponid` int(11) NOT NULL auto_increment,
  `couponno` varchar(100) NOT NULL,
  `categoryid` int(50) NOT NULL,
  `businessid` int(200) NOT NULL,
  `couponproductamount` int(100) NOT NULL,
  `coupondescription` varchar(200) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `couponstatus` varchar(100) NOT NULL,
  `couponlogo` varchar(50) NOT NULL,
  `couponname` varchar(200) NOT NULL,
  `cashback` varchar(300) NOT NULL,
  `cashbackdesc` varchar(200) NOT NULL,
  `totaluses` bigint(10) NOT NULL,
  PRIMARY KEY  (`couponid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

-- 
-- Dumping data for table `coupondetail`
-- 

INSERT INTO `coupondetail` (`couponid`, `couponno`, `categoryid`, `businessid`, `couponproductamount`, `coupondescription`, `fromdate`, `todate`, `couponstatus`, `couponlogo`, `couponname`, `cashback`, `cashbackdesc`, `totaluses`) VALUES 
(35, 'VVNLIVE212', 5, 60, 0, 'Flat 22 Rs Off On All Products', '2016-02-03', '2016-02-12', 'waiting', 'couponimages/ass.jpg', 'Free Sizzler', 'Get Coupon Code and Get 23 Rs Cashback', 'Get 23 Rs Cashback', 7),
(39, 'VVNLIVE22', 5, 60, 30, 'Get Free Pendrive on Above Bill of 23 Rs ', '2016-02-06', '2016-02-11', 'verified', 'couponimages/Dhamaka Offer30615.jpg', 'Dhamaka Offer', 'Get Coupon Code and Get 22 Rs Cashback', 'Get 22 Rs Cashback', 4),
(40, 'VVN12', 26, 60, 30, 'Get Free advertise on first login', '2016-03-14', '2016-03-09', 'verified', 'couponimages/ledhlwl26937.jpg', 'NEW', 'Extra 20Rs Cashback', ' Extra 20 Rs Cashback', 5);

-- --------------------------------------------------------

-- 
-- Table structure for table `landmarkdetail`
-- 

CREATE TABLE `landmarkdetail` (
  `landmarkid` int(50) NOT NULL auto_increment,
  `landmarkname` varchar(100) NOT NULL,
  PRIMARY KEY  (`landmarkid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `landmarkdetail`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `onlinecoupon`
-- 

CREATE TABLE `onlinecoupon` (
  `couponid` int(5) NOT NULL auto_increment,
  `oid` bigint(5) NOT NULL,
  `categoryid` bigint(5) NOT NULL,
  `subcategoryid` bigint(5) NOT NULL,
  `title` varchar(500) NOT NULL,
  `expirydate` date NOT NULL,
  `vouchercode` varchar(500) NOT NULL,
  `link` varchar(5000) NOT NULL,
  `highlighttext` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `discountpercent` bigint(20) NOT NULL,
  `discountamount` bigint(200) NOT NULL,
  `totaluses` bigint(20) NOT NULL,
  PRIMARY KEY  (`couponid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- 
-- Dumping data for table `onlinecoupon`
-- 

INSERT INTO `onlinecoupon` (`couponid`, `oid`, `categoryid`, `subcategoryid`, `title`, `expirydate`, `vouchercode`, `link`, `highlighttext`, `description`, `discountpercent`, `discountamount`, `totaluses`) VALUES 
(12, 37, 2, 27, 'Get Rs 5 cashback on Prepaid Recharges of Rs 50 and more', '2016-04-02', 'RC35', ' https://paytm.com/', 'Get Rs 5 cashback', 'Code can be used upto 7 times per user. Code is valid for all users. Promo code is valid on prepaid. Code is valid across all platforms. Cashback is credited within 24 hours of the transaction into users Paytm Wallet. Promo code is not valid on Airtel prepaid, Post-paid, Landline, and D2h. Valid till EOM i.e 31st March 16', 0, 5, 5),
(13, 37, 2, 27, 'Flat 20% Cashback on Hotel Booking', '2016-04-02', 'HOTEL20', 'https://paytm.com/hotels', 'Flat 20% Cashback', '20% cashback on all bookings. Maximum cashback of INR 5000. No Minimum order value. Cashback will be credited within 24 hours of the transaction. Promo code is valid 6 times per user in a month. Valid only for Paytm users. User needs to have verified mobile number on Paytm to get cash back. Cancelled orders will not be eligible. Offer valid till 31st March, 2016', 20, 0, 3),
(14, 40, 1, 3, 'Shopclues Wednesday Super Saver Bazaar: Prices starts just from Rs.40', '2016-04-02', '', 'http://www.shopclues.com/super-saver-bazaar.html', 'get it fast', '', 0, 40, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `onlinecouponcategory`
-- 

CREATE TABLE `onlinecouponcategory` (
  `cid` int(11) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `onlinecouponcategory`
-- 

INSERT INTO `onlinecouponcategory` (`cid`, `name`) VALUES 
(1, 'Shopping'),
(2, 'Recharge'),
(3, 'Food'),
(4, 'Travel'),
(5, 'Entertainment'),
(6, 'Hotels'),
(7, 'Fashion'),
(8, 'All');

-- --------------------------------------------------------

-- 
-- Table structure for table `onlinestores`
-- 

CREATE TABLE `onlinestores` (
  `oid` int(10) NOT NULL auto_increment,
  `storename` varchar(200) NOT NULL,
  `storeimagepath` varchar(500) NOT NULL,
  `categoryid` bigint(5) NOT NULL,
  PRIMARY KEY  (`oid`),
  UNIQUE KEY `storename` (`storename`,`storeimagepath`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

-- 
-- Dumping data for table `onlinestores`
-- 

INSERT INTO `onlinestores` (`oid`, `storename`, `storeimagepath`, `categoryid`) VALUES 
(1, 'Abhibus', 'abhibus.png', 4),
(2, 'Amazon', 'amazon.png', 1),
(3, 'Askmebazar', 'askmebazar.png', 1),
(4, 'Babyoye', 'babyoye.png', 1),
(5, 'Bestylish', 'bestylish.png', 1),
(6, 'Big_basket', 'big_basket.png', 1),
(7, 'Book My Show', 'book_my_show.png', 5),
(8, 'Cleartrip', 'cleartrip.png', 4),
(9, 'Croma', 'croma.png', 1),
(10, 'Dominos', 'dominos.jpg', 3),
(11, 'Ebay', 'ebay.png', 1),
(12, 'Expedia', 'expedia.png', 4),
(13, 'Faasos', 'faasos.png', 3),
(14, 'Fab Furnish', 'fab_furnish.png', 1),
(15, 'Fashion & U', 'fashion&u.png', 1),
(16, 'First Cry', 'first_cry.png', 1),
(17, 'Flipkart', 'flipkart.png', 1),
(18, 'Food Panda', 'foodpanda.png', 3),
(19, 'Freecharge', 'freecharge.png', 2),
(20, 'Goibibo', 'goibibo.png', 4),
(21, 'Groupon', 'groupon.png', 1),
(22, 'Home Shop 18', 'home_shop18.png', 1),
(23, 'Indiaplaza', 'indiaplaza.png', 1),
(24, 'Indiatimes Shopping', 'indiatimesshopping.png', 1),
(25, 'Infibeam', 'infibeam.png', 1),
(26, 'Inkfruit', 'inkfruit.png', 1),
(27, 'Ixigo', 'ixigo.png', 1),
(28, 'Jabong', 'jabong.png', 7),
(29, 'Koovs', 'koovs.png', 7),
(30, 'Lenskart', 'lenskart.jpg', 1),
(31, 'Make My Trip', 'make_my_trip.png', 4),
(32, 'Mobikwik', 'mobikwik.png', 2),
(33, 'Myntra', 'myntra.png', 7),
(34, 'Naaptol', 'naaptol.png', 1),
(35, 'Ola', 'ola.png', 4),
(36, 'Oyo', 'oyo_new.jpg', 6),
(37, 'Paytm', 'paytm.png', 1),
(38, 'Peperfry', 'peperfry.png', 1),
(39, 'Redbus', 'redbus.png', 4),
(40, 'Shopclues', 'shopclues.png', 1),
(41, 'Snapdeal', 'snapdeal.png', 1),
(42, 'Starcj', 'starcj.png', 1),
(43, 'Sterling Holidays', 'SterlingHolidays.png', 6),
(44, 'Swiggy', 'swiggy.png', 3),
(45, 'Syber Place', 'syber_place.png', 1),
(46, 'Thomas Cook', 'thomascook.png', 3),
(47, 'TinyOwl', 'tinyowl.png', 3),
(48, 'Tradus', 'tradus.png', 1),
(49, 'Travelguru', 'travelguru.png', 4),
(50, 'TrendIn', 'trendin.png', 7),
(51, 'Uber', 'uber.png', 4),
(52, 'Watchkart', 'watchkart.jpg', 1),
(53, 'Yatra', 'yatra.jpg', 4),
(54, 'Yehbi', 'yehbi.png', 1),
(55, 'Yepme', 'yepme.png', 7),
(56, 'Zovi', 'zovi.png', 7);

-- --------------------------------------------------------

-- 
-- Table structure for table `onlinesubcategory`
-- 

CREATE TABLE `onlinesubcategory` (
  `subid` int(5) NOT NULL auto_increment,
  `name` varchar(500) NOT NULL,
  `cid` bigint(10) NOT NULL,
  PRIMARY KEY  (`subid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

-- 
-- Dumping data for table `onlinesubcategory`
-- 

INSERT INTO `onlinesubcategory` (`subid`, `name`, `cid`) VALUES 
(1, 'Books', 1),
(2, 'Mobiles & Tablets ', 0),
(3, 'Fashion', 0),
(7, 'Food & Dinning', 1),
(8, 'Computers,Laptop & Gaming', 1),
(9, 'Home Furnishing & Decor', 1),
(10, 'Travel', 0),
(11, 'Beauty & Health', 1),
(12, 'Kids,Babies & Toys', 1),
(13, 'Flowers,Gifts & Jewellery', 0),
(19, 'TV, Audio/Video & Movies', 1),
(20, 'Appliances', 1),
(21, 'Cameras & Accessories', 1),
(22, 'Books & Stationery', 1),
(23, 'Sports & Fitness', 1),
(24, 'Education & Learning', 1),
(25, 'Entertainment', 1),
(26, 'Web Hosting & Domains', 1),
(27, 'Mobile Recharge', 2),
(28, 'DTH ', 1),
(29, 'Bill Payments', 2);

-- --------------------------------------------------------

-- 
-- Table structure for table `productcategorydetail`
-- 

CREATE TABLE `productcategorydetail` (
  `ID` int(11) NOT NULL auto_increment,
  `IMAGE` varchar(300) NOT NULL,
  `NAME` text NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

-- 
-- Dumping data for table `productcategorydetail`
-- 

INSERT INTO `productcategorydetail` (`ID`, `IMAGE`, `NAME`) VALUES 
(1, 'ProductCategoryImages/industrialPlant.jpg', 'Industrial Plant & Machine'),
(2, 'ProductCategoryImages/Electronicelectric.jpg', 'Electronics & Electrical'),
(3, 'ProductCategoryImages/industrialSupplies.jpg', 'Industrial Supplies'),
(4, 'ProductCategoryImages/building.jpg', 'Building & Construction'),
(5, 'ProductCategoryImages/ApparelGarments.jpg', 'Apparel & Garments'),
(6, 'ProductCategoryImages/foodBeverages.jpg', 'Food & Beverages'),
(7, 'ProductCategoryImages/Medical.jpg', 'Medical & Healthcare'),
(8, 'ProductCategoryImages/PackagingMachines.jpg', 'Packaging Machines & Goods'),
(9, 'ProductCategoryImages/chemical.jpg', 'Chemicals, Dyes & Solvents'),
(10, 'ProductCategoryImages/MechanicalPart.jpg', 'Mechanical Parts & Spares'),
(11, 'ProductCategoryImages/LabInstrumentsSupplies.jpg', 'Lab Instruments & Supplies'),
(12, 'ProductCategoryImages/furniture.jpg', 'Furniture & Supplies'),
(13, 'ProductCategoryImages/Agriculture.jpg', 'Agriculture & Farming'),
(14, 'ProductCategoryImages/automobile.jpg', 'Automobile, Parts & Spares'),
(15, 'ProductCategoryImages/HouseWare.jpg', 'Housewares & Supplies'),
(16, 'ProductCategoryImages/Metals.jpg', 'Metals, Alloys & Minerals'),
(17, 'ProductCategoryImages/HandMachineTools.jpg', 'Hand & Machine Tools'),
(18, 'ProductCategoryImages/handcrafts.jpg', 'Handicrafts & Decoratives'),
(19, 'ProductCategoryImages/KitchenUtensile.jpg', 'Kitchen Utensils & Appliances'),
(20, 'ProductCategoryImages/TextilesYarnFabrics.jpg', 'Textiles, Yarn & Fabrics'),
(21, 'ProductCategoryImages/books and stationary.jpg', 'Books & Stationery'),
(22, 'ProductCategoryImages/cosmetic.jpg', 'Cosmetics & Personal Care'),
(23, 'ProductCategoryImages/hometextile.jpg', 'Home Textile & Furnishing'),
(24, 'ProductCategoryImages/engineeringServices.jpg', 'Engineering Services'),
(25, 'ProductCategoryImages/gemsJewellary.jpg', 'Gems, Jewelry & Astrology'),
(26, 'ProductCategoryImages/computers.jpg', 'Computer & IT Solutions'),
(27, 'ProductCategoryImages/fationAccessories.jpg', 'Fashion Accessories & Gear'),
(28, 'ProductCategoryImages/herbalAyurvedic.jpg', 'Herbal & Ayurvedic Product'),
(29, 'ProductCategoryImages/SecuritySystems.jpg', 'Security Systems & Services'),
(30, 'ProductCategoryImages/SportGoods.jpg', 'Sports Goods, Toys & Games'),
(31, 'ProductCategoryImages/TelecomeEquipment.jpg', 'Telecom Equipment & Goods'),
(32, 'ProductCategoryImages/PaperPaperProduct.gif', 'Paper & Paper Products'),
(33, 'ProductCategoryImages/bagsBeltsWallets.jpg', 'Bags, Belts & Wallets'),
(34, 'ProductCategoryImages/MediaPR.jpg', 'Media, PR & Publishing'),
(35, 'ProductCategoryImages/MarbleGrenite.jpg', 'Marble, Granite & Stones'),
(36, 'ProductCategoryImages/eventPlanner.jpg', 'Event Planner & Organizer'),
(37, 'ProductCategoryImages/itTelecom.jpg', 'IT & Telecom Services'),
(38, 'ProductCategoryImages/ProductRentalLeasing.jpg', 'Product Rental & Leasing'),
(39, 'ProductCategoryImages/Transportation.jpg', 'Transportation & Logistics'),
(40, 'ProductCategoryImages/businessAudit.jpg', 'Business & Audit Services'),
(41, 'ProductCategoryImages/financialLegal.jpg', 'Financial & Legal Service'),
(42, 'ProductCategoryImages/educationTraining.jpg', 'Education & Training'),
(43, 'ProductCategoryImages/TravelandTourism.jpg', 'Travel, Tourism & Hotels'),
(44, 'ProductCategoryImages/call center.jpg', 'Call Center & BPO Services'),
(45, 'ProductCategoryImages/bicycle.jpg', 'Bicycle, Rickshaw & Spares'),
(46, 'ProductCategoryImages/RD and Test lab.jpg', 'R&D and Testing Labs'),
(47, 'ProductCategoryImages/ArchitectureInterior design.jpg', 'Architecture & Interiors'),
(48, 'ProductCategoryImages/hrPlanning.jpg', 'HR Planning & Recruitment'),
(49, 'ProductCategoryImages/RailShipping.jpg', 'Rail, Shipping & Aviation'),
(50, 'ProductCategoryImages/Leather Product.png', 'Leather Products'),
(51, 'ProductCategoryImages/Contractfreelancer.jpg', 'Contractors & Freelancers');

-- --------------------------------------------------------

-- 
-- Table structure for table `productdetail`
-- 

CREATE TABLE `productdetail` (
  `productid` int(50) NOT NULL auto_increment,
  `productname` varchar(100) NOT NULL,
  `productimagepath` varchar(100) NOT NULL,
  `productdescription` varchar(200) NOT NULL,
  `productprice` int(50) NOT NULL,
  `unitid` int(50) NOT NULL,
  `businessid` int(100) NOT NULL,
  `categoryid` int(50) NOT NULL,
  `vendorid` varchar(50) NOT NULL,
  PRIMARY KEY  (`productid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

-- 
-- Dumping data for table `productdetail`
-- 

INSERT INTO `productdetail` (`productid`, `productname`, `productimagepath`, `productdescription`, `productprice`, `unitid`, `businessid`, `categoryid`, `vendorid`) VALUES 
(12, 'jbjkjk', 'productimages/jbjkjk.jpg', 'nlkknkl', 9000, 5, 52, 1, '11'),
(14, 'an', 'productimages/an.jpg', 'bjnkjl', 2147483647, 60, 54, 21, '12'),
(15, 'kevin', 'productimages/kevin.jpg', 'bgsvj,kn', 0, 5, 52, 7, '11'),
(16, 'mobile phone', 'productimages/mobile phone.jpg', 'jhguhj', 500, 50, 58, 9, '39'),
(20, 'Rbahgekj', 'carrers1.JPG', ' rwsbgvdjnjlz', 50, 7, 60, 26, '39'),
(21, 'Ljkmdzv', 'productimages/Ljkmdzv31186.jpg', 'bkwjgeknv', 6845, 7, 60, 26, '39'),
(22, 'Ohijethb', 'productimages/Ohijethb5768.jpg', 'iuejlnrkshmb', 64, 8, 60, 26, '39'),
(24, 'Jelagknv', 'productimages/Jelagknv31618.jpg', 'ijrsgdv', 56312, 1, 60, 1, '39'),
(25, 'Lizr', 'productimages/Lizr24250.jpg', 'ohgwIejdvm68345', 67854, 4, 60, 1, '39'),
(26, 'Shreeji vadapav', 'productimages/Shreeji vadapav29317.jpg', 'afsdfds', 23, 21, 69, 3, '44'),
(27, 'Cold drinks', 'productimages/Cold drinks32621.jpg', 'jsda', 12, 21, 69, 3, '44'),
(28, 'Hot Coffee', 'productimages/Hot Coffee7150.jpg', 'frefe', 20, 5, 69, 3, '44'),
(29, 'Cold sndksj', 'productimages/Cold sndksj1511.jpg', 'nndhi', 23, 1, 69, 3, '44');

-- --------------------------------------------------------

-- 
-- Table structure for table `reviewdetail`
-- 

CREATE TABLE `reviewdetail` (
  `reviewid` int(200) NOT NULL auto_increment,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `cno` bigint(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY  (`reviewid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `reviewdetail`
-- 

INSERT INTO `reviewdetail` (`reviewid`, `firstname`, `lastname`, `cno`, `email`, `password`) VALUES 
(1, 'Taral', 'Patel', 2147483647, 'rushitpandya@gmail.com', '9099088628'),
(2, 'Rushit', 'Pandya', 2147483647, 'rushitpandya@gmail.com', '123'),
(3, 'Rushit', 'Pandya', 7877878787, 'rushit@gmail.com', '1234'),
(4, 'Taral', 'Patel', 1234567890, 'taral@gmail.com', 'taral'),
(5, 'Pratik', 'Rathod', 8866200360, 'pr@gmail.com', 'pr123');

-- --------------------------------------------------------

-- 
-- Table structure for table `rikshawbanner`
-- 

CREATE TABLE `rikshawbanner` (
  `rid` bigint(5) NOT NULL auto_increment,
  `size` bigint(2) NOT NULL,
  `quantity` bigint(5) NOT NULL,
  `month1` bigint(10) NOT NULL,
  `month2` bigint(10) NOT NULL,
  `month3` bigint(10) NOT NULL,
  PRIMARY KEY  (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

-- 
-- Dumping data for table `rikshawbanner`
-- 

INSERT INTO `rikshawbanner` (`rid`, `size`, `quantity`, `month1`, `month2`, `month3`) VALUES 
(1, 1, 100, 10000, 17000, 25000),
(2, 1, 200, 20000, 34000, 50000),
(3, 1, 300, 30000, 51000, 80000),
(4, 1, 400, 40000, 68000, 90000),
(5, 1, 500, 50000, 85000, 100000),
(8, 2, 200, 13000, 23000, 34000),
(22, 2, 400, 26000, 46000, 68000),
(23, 2, 600, 39000, 69000, 102000),
(24, 2, 800, 52000, 92000, 136000),
(25, 2, 1000, 65000, 115000, 160000);

-- --------------------------------------------------------

-- 
-- Table structure for table `rikshawbannerdetail`
-- 

CREATE TABLE `rikshawbannerdetail` (
  `bnid` bigint(10) NOT NULL auto_increment,
  `bannername` varchar(20) NOT NULL,
  `size` bigint(2) NOT NULL,
  `quantity` bigint(15) NOT NULL,
  `duration` bigint(2) NOT NULL,
  `price` bigint(10) NOT NULL,
  `requestdate` date NOT NULL,
  `businessid` int(10) NOT NULL,
  PRIMARY KEY  (`bnid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- 
-- Dumping data for table `rikshawbannerdetail`
-- 

INSERT INTO `rikshawbannerdetail` (`bnid`, `bannername`, `size`, `quantity`, `duration`, `price`, `requestdate`, `businessid`) VALUES 
(12, 'dsb', 1, 600, 1, 10000, '2016-03-02', 60),
(13, 'new banner1', 2, 200, 2, 6000, '2016-03-02', 60),
(14, 'rushit', 2, 600, 3, 25000, '2016-03-03', 60),
(15, 'bhjn', 1, 200, 1, 0, '2016-03-03', 60),
(16, 'kjnkmjhj', 1, 200, 1, 0, '2016-03-03', 60),
(17, 'Uyvbhjnkm', 2, 200, 1, 0, '2016-03-14', 60),
(18, 'Hjnk', 1, 200, 1, 5000, '2016-03-14', 60),
(19, 'Kjnmf', 1, 200, 1, 5000, '2016-03-14', 60),
(20, 'Uhlkjl', 1, 200, 1, 5000, '2016-03-14', 60);

-- --------------------------------------------------------

-- 
-- Table structure for table `rikshawbannersize`
-- 

CREATE TABLE `rikshawbannersize` (
  `size` int(10) NOT NULL auto_increment,
  `sizename` varchar(100) NOT NULL,
  PRIMARY KEY  (`size`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `rikshawbannersize`
-- 

INSERT INTO `rikshawbannersize` (`size`, `sizename`) VALUES 
(1, '3 X 1.5 '),
(2, '1.5 X 1.5');

-- --------------------------------------------------------

-- 
-- Table structure for table `rikshawdetail`
-- 

CREATE TABLE `rikshawdetail` (
  `roid` int(10) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `mobile1` bigint(10) NOT NULL,
  `mobile2` bigint(10) default NULL,
  `rikshawno` varchar(10) NOT NULL,
  `parkingloc` varchar(200) NOT NULL,
  `drivingroute` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `adpackage` varchar(20) NOT NULL,
  PRIMARY KEY  (`roid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `rikshawdetail`
-- 

INSERT INTO `rikshawdetail` (`roid`, `name`, `mobile1`, `mobile2`, `rikshawno`, `parkingloc`, `drivingroute`, `address`, `adpackage`) VALUES 
(8, 'jay', 4561237890, 1234567890, 'gj-07-2020', 'cgvhjb', 'anand-nadiad', 'gfchjbj\r\n', 'month3'),
(9, 'ghano', 7878787878, 8989898989, 'gj-23-0268', 'bhaikaka', 'anand-vvn', 'vvn', 'month2');

-- --------------------------------------------------------

-- 
-- Table structure for table `socialmediapackagedetail`
-- 

CREATE TABLE `socialmediapackagedetail` (
  `socialmediaid` int(50) NOT NULL auto_increment,
  `socialmedianame` varchar(100) NOT NULL,
  `socialmediaprice` int(100) NOT NULL,
  `socialmediaquantity` int(100) NOT NULL,
  PRIMARY KEY  (`socialmediaid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `socialmediapackagedetail`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `socialsharingdetail`
-- 

CREATE TABLE `socialsharingdetail` (
  `socialsharingid` int(100) NOT NULL auto_increment,
  `socialmediaid` int(100) NOT NULL,
  `businessid` int(100) NOT NULL,
  `categoryid` int(50) NOT NULL,
  `sharingdate` date NOT NULL,
  `quantityrequested` int(100) NOT NULL,
  `sharingamount` int(100) NOT NULL,
  `sharingdescription` varchar(200) NOT NULL,
  `sharingimagepath` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY  (`socialsharingid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `socialsharingdetail`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `subscribedetail`
-- 

CREATE TABLE `subscribedetail` (
  `sid` int(10) NOT NULL auto_increment,
  `semail` varchar(100) NOT NULL,
  `categoryid` bigint(10) NOT NULL,
  `onlinestoreid` bigint(5) NOT NULL,
  PRIMARY KEY  (`sid`),
  UNIQUE KEY `sub_unique` (`semail`,`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=481 ;

-- 
-- Dumping data for table `subscribedetail`
-- 

INSERT INTO `subscribedetail` (`sid`, `semail`, `categoryid`, `onlinestoreid`) VALUES 
(62, 'rushit@gmail.com', 3, 0),
(63, 'rushit@gmail.com', 1, 0),
(66, 'rushit@gmail.com', 26, 0),
(67, 'rushit@gmail.com', 10, 0),
(70, 'rushit@gmail.com', 0, 0),
(227, 'pr@gmail.com', 26, 0),
(231, 'pr@gmail.com', 0, 0),
(455, 'abc@gmail.com', 0, 2),
(456, 'ab@g.com', 0, 2),
(460, 'ebhkdjvm@g.com', 0, 0),
(461, 'ksgejdn@h.com', 0, 0),
(462, 'sgdbkvjm@s.com', 0, 2),
(463, 'llikt.hmfb@k.com', 0, 0),
(470, 'jkmeth@gh.com', 0, 0),
(476, 'vhj@h.som', 26, 0),
(478, 'oiuksgbdn@h.com', 0, 2),
(480, 'jhknfsdv@k.com', 26, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `templateprinting`
-- 

CREATE TABLE `templateprinting` (
  `tid` int(11) NOT NULL auto_increment,
  `quantity` bigint(10) NOT NULL,
  `sidea51` bigint(10) NOT NULL,
  `sidea52` bigint(10) NOT NULL,
  `sidea41` bigint(10) NOT NULL,
  `sidea42` bigint(10) NOT NULL,
  `sidea31` bigint(10) NOT NULL,
  `sidea32` bigint(10) NOT NULL,
  PRIMARY KEY  (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `templateprinting`
-- 

INSERT INTO `templateprinting` (`tid`, `quantity`, `sidea51`, `sidea52`, `sidea41`, `sidea42`, `sidea31`, `sidea32`) VALUES 
(1, 1000, 200, 350, 250, 200, 260, 100),
(4, 2000, 200, 200, 200, 605, 708, 905);

-- --------------------------------------------------------

-- 
-- Table structure for table `templateprintingdetail`
-- 

CREATE TABLE `templateprintingdetail` (
  `tempid` int(10) NOT NULL auto_increment,
  `templatename` varchar(20) NOT NULL,
  `size` varchar(5) NOT NULL,
  `side` bigint(2) NOT NULL,
  `quantity` bigint(10) NOT NULL,
  `price` bigint(10) NOT NULL,
  `requestdate` date NOT NULL,
  `businessid` bigint(10) NOT NULL,
  PRIMARY KEY  (`tempid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `templateprintingdetail`
-- 

INSERT INTO `templateprintingdetail` (`tempid`, `templatename`, `size`, `side`, `quantity`, `price`, `requestdate`, `businessid`) VALUES 
(1, 'new template', '5', 1, 1000, 200, '2016-03-03', 60),
(2, 'hjbknm', '4', 2, 2000, 605, '2016-03-03', 60),
(3, 'bikjv', '4', 1, 1000, 250, '2016-03-03', 60),
(4, 'Ekfams', '3', 2, 1000, 100, '2016-03-14', 60);

-- --------------------------------------------------------

-- 
-- Table structure for table `unit`
-- 

CREATE TABLE `unit` (
  `ID` int(11) NOT NULL auto_increment,
  `NAME` varchar(50) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

-- 
-- Dumping data for table `unit`
-- 

INSERT INTO `unit` (`ID`, `NAME`) VALUES 
(1, ' Bag '),
(3, 'Barrel     '),
(4, 'Barrels     '),
(5, 'Bushel '),
(7, 'Cubic Meter     '),
(8, 'Dozen     '),
(9, 'Gallon     '),
(10, 'Gram     '),
(11, 'Kilogram     '),
(12, 'Kilometer     '),
(13, 'Long Ton     '),
(14, 'Liter     '),
(15, 'Meter     '),
(16, 'Metric Ton     '),
(17, 'Ounce     '),
(18, 'Pair     '),
(19, 'Pack     '),
(20, 'Packs     '),
(21, 'Piece     '),
(22, 'Pieces     '),
(23, 'Pound     '),
(24, 'Set     '),
(25, 'Sets     '),
(26, 'Short Ton     '),
(27, 'Square Meter     '),
(28, 'Square Feet     '),
(29, 'Square Inch     '),
(30, 'Bottle(s)     '),
(33, ' Strips     '),
(34, 'Ton     '),
(35, 'Pin     '),
(36, 'Box(s)     '),
(37, 'Carat     '),
(38, 'Carton     '),
(39, 'Cubic Feet     '),
(40, 'Day     '),
(41, 'Foot     '),
(42, 'Hour(s)     '),
(43, 'Hectare(s)     '),
(44, 'No(s)     '),
(45, 'Packet     '),
(46, 'Person     '),
(47, 'Ream     '),
(48, 'Roll     '),
(49, 'Sheet     '),
(50, 'Unit     '),
(51, 'Watt     '),
(52, 'Megawatts     '),
(53, 'Kilowatt     '),
(54, 'Inch(s)     '),
(55, ' Millimeter     '),
(56, 'Plate(s)     '),
(57, 'Person(s)     '),
(58, 'Annum     '),
(59, 'Bags');

-- --------------------------------------------------------

-- 
-- Table structure for table `vendordetail`
-- 

CREATE TABLE `vendordetail` (
  `vendorid` int(200) NOT NULL auto_increment,
  `categoryid` int(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `vendoraddress` varchar(200) NOT NULL,
  `vendorcno` bigint(200) NOT NULL,
  `vendoremail` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `pincode` bigint(100) NOT NULL,
  `businessid` int(50) NOT NULL,
  `vendorimagepath` varchar(100) NOT NULL,
  PRIMARY KEY  (`vendorid`),
  KEY `categoryid` (`categoryid`),
  KEY `categoryid_2` (`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

-- 
-- Dumping data for table `vendordetail`
-- 

INSERT INTO `vendordetail` (`vendorid`, `categoryid`, `firstname`, `lastname`, `vendoraddress`, `vendorcno`, `vendoremail`, `gender`, `birthdate`, `username`, `password`, `pincode`, `businessid`, `vendorimagepath`) VALUES 
(12, 26, 'pratik', 'dadhaniya', 'nelkhbfiughhhhhhh', 8866200360, 'pk@gmail.com', 'male', '2016-02-19', 'kevin', '1234', 607080, 65, 'VendorImages/12.jpg'),
(15, 10, 'Rushit', 'Pandya', 'yfyfyf', 9099088628, 'rushitpandya@gmail.com', 'male', '2016-02-05', 'rushit', '123456', 389350, 64, 'vendorimages/15.jpg'),
(39, 1, 'pratik', 'rathod', 'anand', 8866200360, 'pkrathod4@gmail.com', 'male', '2016-03-06', 'pratik', 'pr123', 388120, 60, 'VendorImages/39.jpg'),
(40, 26, 'taral', 'patel', 'chaklasi', 7080904050, 'tr@gmail.com', 'male', '2016-02-02', 'taral', '1234', 206050, 66, 'VendorImages/40.jpg'),
(41, 0, 'ghano', 'rathod', 'evfhj', 1234567890, 'ghano@gmail.com', 'male', '2016-03-09', 'ghano', '1234', 364004, 67, 'VendorImages/41.jpg'),
(44, 3, 'Taral', 'Patel', 'adssdsd', 9099088628, 'taral@gmail.com', 'male', '2016-03-17', 'taralp', '123', 388445, 69, 'vendorimages/44.jpg'),
(45, 0, 'Taral', 'Patel1', '', 8866200360, 'pkrathod1994@gmail.com', 'male', '0000-00-00', 'pratik123', '123456', 388120, 0, ''),
(46, 0, 'Rushit', 'Pandya', '', 4556897812, 'rushitpandya@gmail.com', 'male', '0000-00-00', 'rushit123', '123456', 388120, 0, ''),
(47, 0, 'kjndkvm,', 'jkjnlm', 'gykhjbmn', 7845565656, 'devjn@k.com', 'male', '2016-03-25', 'anc', '123', 621354, 70, 'VendorImages/47.jpg'),
(48, 0, 'skbhbjn', ' jhbm ', 'hadvbj', 7685426835, 'dvhb@h.com', 'male', '2016-03-12', 'khjbmn ', 'jhbj,nm,', 683542, 71, 'VendorImages/48.jpg'),
(49, 0, 'skbhbjn', ' jhbm ', 'hadvbj', 7685426835, 'dvhb@h.com', 'male', '2016-03-12', 'khjbmn ', 'jhbj,nm,', 683542, 72, 'VendorImages/49.jpg'),
(50, 0, 'gkjhk,m', 'gunmj', 'tfhbnhygnbjhb', 6853416835, 'sjdn@l.com', 'male', '2016-03-31', 'dhvjmn', 'yjhgjbnm', 965316, 73, 'VendorImages/50.jpg'),
(51, 3, 'gkjhk,m', 'gunmj', 'tfhbnhygnbjhb', 6853416835, 'sjdn@l.com', 'male', '2016-03-25', 'dhvjmn', 'kjsrd', 965316, 74, 'VendorImages/51.jpg'),
(52, 3, 'gkjhk,m', 'gunmj', 'tfhbnhygnbjhb', 6853416835, 'sjdn@l.com', 'male', '2016-03-25', 'dhvjmn', 'kjsrd', 965316, 75, 'VendorImages/52.jpg');

