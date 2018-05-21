-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2016 at 04:17 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `idea`
--

CREATE TABLE IF NOT EXISTS `idea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty` varchar(10) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `link` varchar(100) NOT NULL,
  `project` varchar(100) NOT NULL,
  `uploader` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `view` int(11) NOT NULL,
  `userfile` varbinary(1000) NOT NULL,
  PRIMARY KEY (`id`,`faculty`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `idea`
--

INSERT INTO `idea` (`id`, `faculty`, `title`, `description`, `link`, `project`, `uploader`, `tags`, `timestamp`, `view`, `userfile`) VALUES
(1, 'fskkp', 'Online Cinema Ticket Booking System in .Net ', 'Welcome to newly designed website cinema ticket booking is a faster, cleaner and a tad more personal', 'http://final-year-projects.in/#mech', '.Net Projects', 'admin ', 'ASP.Net, C#.Net, Oracle, Reservation System', '0000-00-00 00:00:00', 0, ''),
(2, 'fskkp', 'Load Management for a Telecom Charging System', 'There are a huge number of customers using Ericssonâ€™s prepaid telecom charging system. This means ', '', ' C, C++ Projects, Networking Projects', 'ranjini	 ', 'Management System, Modeling, Real-time, Simulation, Telecom, Testing', '0000-00-00 00:00:00', 0, ''),
(3, 'fskkp', 'Data Streaming in Hadoop: a Study of Real Time Data Pipeline Integration Between Hadoop Environments', 'The field of distributed computing is growing and quickly becoming a natural part of large as well a', '', 'JAVA/J2EE Projects', 'ranjini', 'Apache Hadoop, Bigdata, Databases, Design, Performance, Programming, Real-time', '0000-00-00 00:00:00', 0, ''),
(4, 'fskkp', 'Variance Adaptive Quantization and Adaptive Offset Selection in High Efficiency Video Coding \r\n', 'Video compression uses encoding to reduce the number of bits that are used for representing a video ', '', 'Other Computer Projects', 'ranjini', 'Algorithms, Coding, Compression, Encoder, Image Processing, Modeling, Performance, Simulation', '0000-00-00 00:00:00', 0, ''),
(5, 'fskkp', 'Design and Implementation of an Environment to Support Development of Methods for Security Assessmen', 'There is no debate over the importance of IT security. Equally important is the research on security', '', 'Security Projects', 'ranjini', 'Databases, Design, Modeling, Software, SQL', '0000-00-00 00:00:00', 0, ''),
(7, 'fkasa', 'Training Report on Residential Building Construction', 'This is the training report on Residential Building Construction which is taken at “Shree India Real Land Developers Pvt Ltd. and a multistory residential building is studied in this project. This report include project findings, types of buildings, types of material used in construction, function of different material, equipments, machines used, different terms used in construction etc. This project is a multi-storey residential building. This building is constructing for middle class people. \r\n\r\n', 'http://www.final-yearproject.com/2014/06/training-report-residential-building-construction.html#.WDv', '', 'Mahesh Choudhary ', 'Civil , Civil Mini Project , Summer Training , TRAINING REPORT', '0000-00-00 00:00:00', 0, ''),
(8, 'fkasa', 'Planning, Analysis, Design and Estimation of Natural Cooling Tower', 'This is a Civil engineering project, which involves the "Planning, Analysis and Design of a Natural Cooling Tower". The entire design includes slab design, beam design, column design, and footing design. Estimations are made manually and using software packages. The various structural elements are made using IS 456:2000. The concrete mix used for slabs, beams and footings are of M25 and the steel used for all members are high yield strength deformed bars of grade Fe415. \r\n\r\n', 'http://www.final-yearproject.com/2016/05/planning-analysis-design-estimation-natural-cooling-tower.h', '', 'S. Ramanan, G. Swathy, J. Arunachalam ', 'Civil , PROJECT REPORT', '0000-00-00 00:00:00', 0, ''),
(9, 'fkasa', 'Civil Project on Soil Stabilization & Reinforcement', 'This is Civil engineering project work on "Soil stabilization & reinforcement". We all know that sometimes the soil conditions are very poor even at greater depth and it is not practical to construct even deep foundation. In such cases various methods of soil stabilization and reinforcement technique is adopted. The objective is to improve the characteristics at site and make soil capable of carrying load and to increase the shear strength decrease the compressibility of the soil. To carry out this project many experiments were done, which are also included in the report. ', '', '', 'Lalita ', 'Civil , Civil Mini Project , PROJECT REPORT', '0000-00-00 00:00:00', 0, ''),
(10, 'fkasa', 'Execution Work in Post Tension Slabs', 'This is Civil final year project work on Detailed study and execution work in post tension slabs. Post-Tensioning is a method of reinforcing concrete, masonry and other structural elements. Post-Tensioning is a method of pre-stressing. Prestressed concrete is basically concrete in which internal stresses of a suitable magnitude and distribution are introduced so that the stresses resulting from external loads are counteracted to a desired degree.\r\n\r\n', 'http://www.final-yearproject.com/2012/08/civil-project-execution-work-post-tension-slabs.html#.WDvKy', '', 'Divya Kamath & Kasireddy Vandana Reddy', 'Civil , Civil Mini Project , PROJECT REPORT , Thesis Project', '0000-00-00 00:00:00', 0, ''),
(11, 'fkasa', 'Design of Elevated Service Reservoir', 'For storage of large quantities of liquids like water, oil, petroleum, acid and sometime gases also, containers or tanks are required. These structures are made of masonry, steel, reinforced concrete and pre stressed concrete. This civil engineering project report focus on construction of such reservoir to store the liquid material. Report includes construction and type of different type of tanks for reference.\r\n\r\n', 'http://www.final-yearproject.com/2012/08/civil-projectdesign-elevated-service-reservoir.html#.WDvLO7', '', 'Anonymous', 'Civil , Civil Mini Project , PROJECT REPORT , Thesis Project', '0000-00-00 00:00:00', 0, ''),
(12, 'fkee', '150 Watt Power Amplifier Circuit', 'Here we designed a power amplifier circuit using push pull class AB configuration to derive a power of 150W to drive a load of 8 Ohms (speaker).\r\n\r\n', 'http://www.electronicshub.org/150-watt-power-amplifier-circuit/', '', 'Admin', 'ELECTRICAL, FREE PROJECT CIRCUITS, MINI PROJECTS', '0000-00-00 00:00:00', 0, ''),
(13, 'fkee', '7 Segment LED Display Decoder', 'This is the circuit diagram of display decoder which is used to convert a BCD or binary code into a 7 segment code used to operate a 7 segment LED display.\r\n\r\n', 'http://www.electronicshub.org/bcd-7-segment-led-display-decoder-circuit/', '', 'Admin', 'COMBINATIONAL LOGIC CIRUCITS', '0000-00-00 00:00:00', 0, ''),
(14, 'fkee', 'Digital Temperature Sensor', 'The main principle of this circuit is to display the digital temperature value. These are mainly used in environmental applications.\r\n\r\n', 'http://www.electronicshub.org/digital-temperature-sensor-circuit/', '', 'Admin', 'AVR MICROCONTROLLER, ELECTRONICS, EMBEDDED, FREE PROJECT CIRCUITS, MINI PROJECTS', '0000-00-00 00:00:00', 0, ''),
(15, 'fkee', 'Digital Stopwatch Circuit', 'This is a simple circuit that displays count from 0 to 59, representing a 60 second time interval. It consists of a 555 timer to produce the clock pulses and two counter ICs to carry out the counting operation.\r\n\r\n', 'http://www.electronicshub.org/digital-stopwatch-circuit/', '', 'Admin', '555 TIMER, ELECTRONICS, FREE PROJECT CIRCUITS, MINI PROJECTS', '0000-00-00 00:00:00', 0, ''),
(16, 'fkee', 'Toy Organ using 555 Timer IC', 'This is the circuit diagram of simple Toy Piano using 555 Timer IC. It produces different tones or sounds depending on the frequency range.\r\n\r\n\r\n', 'http://www.electronicshub.org/toy-organ-circuit-using-555-timer-ic/', '', 'Admin', '555 TIMER, ELECTRONICS, FREE PROJECT CIRCUITS', '0000-00-00 00:00:00', 0, ''),
(17, 'fkm', 'MODELING OF MILLING PROCESS TO PREDICT SURFACE ROUGHNESS\r\nUSING ARTIFICIAL INTELLIGENT METHOD', 'This thesis presents the milling process modeling to predict surface roughness. Proper\r\nsetting of cutting parameter is important to obtain better surface roughness.\r\nUnfortunately, conventional try and error method is time consuming as well as high\r\ncost. The purpose for this research is to develop mathematical model using multiple\r\nregression and artificial neural network model for artificial intelligent method. \r\n\r\n', 'http://umpir.ump.edu.my/800/1/Mohammad_Rizal_Abdul_Lani.pdf', '', 'MOHAMMAD RIZAL BIN ABDUL LANI \r\n', 'thesis, ', '0000-00-00 00:00:00', 0, ''),
(19, 'ftek', 'osh', 'lalalalalalalalla', '', 'thesis', 'tqah', 'thesis, journal, report', '0000-00-00 00:00:00', 0, ''),
(20, 'fkee', 'wiring alarm', 'hahahahahahha', '', 'intern report', 'maryam', 'report', '0000-00-00 00:00:00', 0, ''),
(21, 'fkee', 'An Optimization Based Approach to Visual Odometry Using Infrared Images', 'The goal of this work has been to improve the accuracy of a pre-existing algorithm for vehicle pose estimation, which uses intrinsic measurements of vehicle motion and measurements derived from far infrared images.\r\n\r\nEstimating the pose of a vehicle, based on images from an on-board camera and intrinsic measurements of vehicle motion, is a problem of simultanoeus localization and mapping (SLAM), and it can be solved using the extended Kalman filter (EKF).\r\n\r\nThe EKF is a causal filter, so if the pose estimation problem is to be solved off-line acausal methods are expected to increase estimation accuracy significantly. In this work the EKF has been compared with an acausal method for solving the SLAM problem called smoothing and mapping (SAM) which is an optimization based method that minimizes process and measurement noise.\r\n\r\nAnalyses of how improvements in the vehicle motion model, using a number of different model extensions, affects accuracy of pose estimates have also been performed.', '', 'Automobile Projects', 'Nilsson, Emil', 'mechanical', '0000-00-00 00:00:00', 0, ''),
(22, 'fkm', 'Heavily Loaded Vehicle Tires: Analysis and Characterization ', 'Vibration characterization and experimental modal analysis were carried out with a heavily loaded vehicle tire. These tires are typically subjected to loads that are over two times those experienced by a passenger car tire.\r\n\r\nThe results obtained through experimental modal analysis were compared to similar results obtained for standard passenger car tires. The comparisons show that the heavily loaded tire has unique dynamic characteristics. Complex damping and nonlinear behavior were considered to explain these characteristics. A flexible ring tire model was used to investigate these nonlinear characteristics. Complex damping was also examined to explain the experimental observations.\r\n\r\nThis project contains some of the first results on vibration characterization of heavily loaded vehicle tires. The incorporation of the results into a multi-degree-of-freedom tire model for use with the Effective Road Profile Control scheme used for vehicle durability simulation studies was also investigated.\r\nSource: University of Maryland', 'http://projectabstracts.com/3195/heavily-loaded-vehicle-tires-analysis-and-characterization.html', 'Mechanical Projects', 'admin', 'Automobiles, Vehicle', '0000-00-00 00:00:00', 0, ''),
(23, 'fkksa', 'Loji Proses', 'thesis about kumbahan loji di Bukit Bendera', 'https://www.youtube.com/watch?v=kVpv8-5XWOI', 'thesis, final year project', 'Faizah', 'thesis, FYP, kimia', '0000-00-00 00:00:00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `ideaID` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE IF NOT EXISTS `pro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password_confirmation` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`id`, `firstname`, `lastname`, `username`, `password`, `password_confirmation`) VALUES
(5, 'lala ', 'aaaaaaaaaaa', 'lala', 'lala', 0),
(11, 'shima', 'rahman', 'shymarahman', '12345', 0),
(12, 'admin', 'admin', 'admin', 'admin', 0),
(35, 'atiqah', 'mohdnor', 'tqahmohono', 'tialova667', 123);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
