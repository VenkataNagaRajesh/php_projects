-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 06:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz1`
--

-- --------------------------------------------------------

--
-- Table structure for table `adv_crud`
--

CREATE TABLE `adv_crud` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adv_crud`
--

INSERT INTO `adv_crud` (`id`, `name`, `email`, `phone`, `photo`, `password`) VALUES
(1, 'rajesh', 'gullipallirajesh860@gmail.com', '[value-4]', 'rrr', '9248494568'),
(2, 'ramya', 'ramya09@gmail.com', '9248494568', 'images/admin/DSC8770.jpg', '9248494568');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `Q_id` varchar(5) NOT NULL,
  `Answer` varchar(70) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`Q_id`, `Answer`, `level`) VALUES
('1', 'Silicon', '1'),
('2', '1000,000,000 bytes', '1'),
('3', 'Compression ', '1'),
('4', 'ROM', '1'),
('5', 'Identify the file type', '1'),
('6', 'input', '1'),
('7', 'Google', '1'),
('8', '0 – 9 , A – F', '1'),
('9', ' log out', '1'),
('10', 'firewall', '1'),
('11', '8', '1'),
('12', 'stdlib.h', '1'),
('13', 'No', '1'),
('14', 'ceil(1.66)', '1'),
('15', '', '1'),
('16', '', '1'),
('17', 'return', '1'),
('18', 'Representation of NULL pointer', '1'),
('19', 'stdio.h and stddef.h', '1'),
('20', 'strnset()', '1'),
('21', 'laststr()', '1'),
('22', 'fgets()', '1'),
('23', 'Reposition the file pointer to begining of file.', '1'),
('24', 'Yes', '1'),
('25', 'Float', '1'),
('26', 'During preprocessing', '1'),
('27', 'Base address of the array', '1'),
('28', 'All of them let you define new data types', '1'),
('29', '\'c\' means argument count \'v\' means argument vector', '1'),
('30', 'Dennis Ritchie', '1'),
('31', 'LowerCase letters', '1'),
('32', 'int my_num = 100000', '1'),
('33', 'const', '1'),
('34', 'all of the mentioned', '1'),
('35', ' Collection of data or information without organizing', '1'),
('36', 'Charles Bachman', '1'),
('37', 'Table', '1'),
('38', 'Single-user Access only																								', '1'),
('39', 'Entity set', '1'),
('40', 'Collection of Tables', '1'),
('41', 'Database application and the database', '1'),
('42', 'DML (Data Manipulation Langauge)', '1'),
('43', 'Super key', '1'),
('44', 'Identifying set', '1'),
('45', 'Relational algebra', '1'),
('46', 'Inner join', '1'),
('47', '3NF', '1'),
('48', 'Network ', '1'),
('49', 'Storage space is wasted & Changing the data in one spot will cause dat', '1'),
('50', 'Schema & Instance', '1'),
('51', 'File Allocation Table', '1'),
('52', 'Database Administrator', '1'),
('53', 'All of the above', '1'),
('54', 'Cardinality', '1'),
('55', 'Domains', '1'),
('56', 'Commit', '1'),
('57', 'Rollback', '1'),
('58', 'Open database connectivity', '1'),
('59', 'Alter', '1'),
('60', 'Press F7', '1'),
('61', ' Home Page', '1'),
('62', 'value', '1'),
('63', 'All of The Above', '1'),
('64', 'memory', '1'),
('65', 'Nibble  ', '1'),
('66', '5', '1'),
('67', 'Authentication', '1'),
('68', 'BCC', '1'),
('69', 'Burning', '1'),
('70', 'Modem', '1'),
('71', 'Bookmark', '1'),
('72', 'Dot matrix printer', '1'),
('73', 'Douglas Engelbert', '1'),
('74', ' Larry Page', '1'),
('75', 'Charles Babbagee', '1'),
('76', 'Dr E.F.Codd', '1'),
('77', 'Win + L', '1'),
('78', ' Cntrl + Tab', '1'),
('79', 'Win + D', '1'),
('80', '  Cntrl + -', '1'),
('81', 'F5', '1'),
('82', ' Shift + Del', '1'),
('83', 'Repeat last function', '1'),
('84', 'tab', '1'),
('85', 'Press F7', '1'),
('86', 'Ctrl + Shift + +', '1'),
('87', 'Ctrl + F10', '1'),
('88', ' F7', '1'),
('89', 'Control ', '1'),
('90', 'LinkedIn', '1'),
('91', 'Tweets', '1'),
('92', ' Video blog & New technology to aid in blogging', '1'),
('93', 'Blogging daily & Blogs with limited individual posts', '1'),
('94', 'Facebook', '1'),
('95', 'Protocol', '1'),
('96', 'HTTP', '1'),
('97', 'Digital subscriber line', '1'),
('98', 'HTML', '1'),
('99', 'Spam', '1'),
('100', ' ARAPANET', '1'),
('101', ' have a unique IP address', '1'),
('102', 'To detect errors', '1'),
('103', 'Extended Markup Language', '1'),
('104', 'Simple Mail Transfer Protocol', '1'),
('105', 't4@t4tutorials.com', '1'),
('106', 'Public domain', '1'),
('107', 'Search Engine', '1'),
('108', 'Upload', '1'),
('109', 'Installing antivirus for protection', '1'),
('110', 'Creeper', '1'),
('111', '  Mark Zukerberg', '1'),
('112', 'int arr[2] = {10, 20}', '1'),
('113', 'Underflow', '1'),
('114', 'Stack', '1'),
('115', 'First node', '1'),
('116', 'Ring buffer', '1'),
('117', 'Single ended Queue', '1'),
('118', 'Underflow', '1'),
('119', 'Heap', '1'),
('120', 'Deque', '1'),
('121', 'Stack', '1'),
('122', 'Stack', '1'),
('123', 'A+B*C', '1'),
('124', '1234', '1'),
('125', 'FIFO principle', '1'),
('126', 'a.O(1)', '1'),
('127', 'At the head position of the linked list', '1'),
('128', 'O(n)', '1'),
('129', 'ptr=(node*)malloc(sizeof(node))', '1'),
('130', '4', '1'),
('1', 'infinate loop', '2'),
('2', '16', '2'),
('3', '0', '2'),
('4', '53', '2'),
('5', '11 21 31', '2'),
('6', '10', '2'),
('7', '3', '2'),
('8', '10 30', '2'),
('9', '20', '2'),
('10', '5', '2'),
('11', '62 28 135', '2'),
('12', '45', '2'),
('13', 'compilation error', '2'),
('14', '2 3 none', '2'),
('15', 'lesser', '2'),
('16', '4', '2'),
('17', '4 4.5000', '2'),
('18', '5', '2'),
('19', '5', '2'),
('20', '3 2 10 123', '2'),
('21', 'hello-hello', '2'),
('22', '8', '2'),
('23', '8', '2'),
('24', '19 82', '2'),
('25', '648', '2');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `Q_id` int(2) NOT NULL,
  `Option1` varchar(200) NOT NULL,
  `Option2` varchar(200) NOT NULL,
  `Option3` varchar(200) NOT NULL,
  `Option4` varchar(200) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`Q_id`, `Option1`, `Option2`, `Option3`, `Option4`, `level`) VALUES
(1, 'Lead', 'Silicon', 'Chromium', 'Gold', 1),
(2, ' 1000,000 bytes', '1000,000,000 bytes', '1000,000,000,000 bytes', ' None of these', 1),
(3, 'Compression', 'Fragmentation', 'Encapsulation', 'None of the above', 1),
(4, 'Cache memory', 'RAM', 'ROM', 'None of the above', 1),
(5, 'Name the file', 'Ensure the filename is not lost', ' Identify the file', 'Identify the file type', 1),
(6, 'processing', 'storage', 'input', 'output', 1),
(7, 'Google   ', 'Windows', 'LINUX ', 'Mac', 1),
(8, '0 – 7', '0 – 9 , A – F', '0 – 7, A – F ', 'None of these', 1),
(9, 'log in', 'process out', 'process in', 'log out', 1),
(10, 'hub ', ' switch ', ' firewall', 'bridge', 1),
(11, '2', '4', '8', 'Compiler dependent', 1),
(12, 'memory.h', 'stdlib.h', 'string.h', 'dos.h', 1),
(13, 'Yes', 'No', '[', '[value-5]', 1),
(14, 'ceil(1.66)', 'floor(1.66)', 'roundup(1.66)', 'roundto(1.66)', 1),
(15, '/ + * -', '* - / +', '+ - / *', '/ * + -', 1),
(16, '1,2', '1,3', '2,3', '1,2,4', 1),
(17, 'switch', 'go to', 'go back', 'return', 1),
(18, 'Representation of NULL pointer', 'Representation of void pointer', 'Error', 'None of above', 1),
(19, 'stdio.h', 'stddef.h', 'stdio.h and stddef.h', 'math.h', 1),
(20, 'strinit()', 'strnset()', 'strset()', 'strcset()', 1),
(21, 'strnstr()', 'laststr()', 'strrchr()', 'strstr()', 1),
(22, 'gets()', 'fgets()', '', '', 1),
(23, 'Reposition the file pointer to a character reverse.', 'Reposition the file pointer stream to end of file.', 'Reposition the file pointer to begining of that line.', 'Reposition the file pointer to begining of file.', 1),
(24, 'Yes', 'No', '', '', 1),
(25, 'character', 'integer', 'float', 'enum', 1),
(26, 'During linking', 'During execution', 'During preprocessing', '', 1),
(27, 'Value of elements in array', 'First element of the array', 'Base address of the array', '', 1),
(28, 'All of them let you define new values', 'All of them let you define new data types', 'All of them let you define new pointers', 'All of them let you define new structures', 1),
(29, '\'c\' means argument control \'v\' means argument vector', '\'c\' means argument count \'v\' means argument vertex', '\'c\' means argument count \'v\' means argument vector', '\'c\' means argument configuration \'v\' means argument visibility', 1),
(30, 'Steve Jobs', 'James Gosling', ' Dennis Ritchie', 'Rasmus Lerdorf', 1),
(31, ' LowerCase letters', ' UpperCase letters', ' CamelCase letters', 'None of the mentioned', 1),
(32, 'int my_num = 100,000;', 'int my_num = 100000;', 'int my_num = 1000;', ' int $my_num = 10000;', 1),
(33, ' immutable', ' mutable', 'const', 'volatile', 1),
(34, '#ifdef', '#define', '#endif', 'all of the mentioned', 1),
(35, 'Organized collection of information that cannot be accessed, updated, and managed', 'Collection of data or information without organizing', 'Organized collection of data or information that can be accessed, updated, and managed', 'Organized collection of data that cannot be updated', 1),
(36, ' Edgar Frank Codd', 'Charles Bachman', ' Charles Babbage', ' Sharon B. Codd', 1),
(37, 'image', 'text', 'table', 'grapha', 1),
(38, 'Minimum Duplication and Redundancy of Data', ' n without organiCollection of data or informatiozing', 'Organized collection of data or information that can be accessed, updated, and managed', ' Organized collection of data that cannot be updated', 1),
(39, ' Relation set', 'Tuples', 'Entity set', 'Entity Relation model', 1),
(40, 'Collection of Records', 'Collection of Keys', 'Collection of Tables', 'Collection of Fields', 1),
(41, 'Data and the DBMS', 'Application and SQL', 'Database application and the database', 'The user and the software', 1),
(42, 'TCL (Transaction Control Language)', 'DCL (Data Control Language)', 'DDL (Data Definition Language)', 'DML (Data Manipulation Language)', 1),
(43, 'Primary Key', ' Foreign key', 'Super key', 'Candidate key', 1),
(44, ' Neighbour set', 'Strong entity set', 'Owner set', 'Identifying set', 1),
(45, 'Domain relational calculus', 'Tuple relational calculus', 'Relational algebra', 'Query language', 1),
(46, 'Left outer join', ' Inner join', 'Natural join', 'Right outer join', 1),
(47, '4NF', '3NF', '2NF', '5NF', 1),
(48, 'Network', 'Physical', 'Hierarchical', 'Relational', 1),
(49, 'Storage space is wasted & Changing the data in one spot will cause data inconsistency', 'In can be more easily accessed', 'Changing the data in one spot will cause data inconsistency', 'Storage space is wasted', 1),
(50, 'Instance & Relation', 'Relation & Schema', 'Domain & Schema', 'Schema & Instance', 1),
(51, 'a.File Allocation Tree', 'File Allocation Table', 'File Allocation Graph', 'All of the above', 1),
(52, 'Data Bank Administrator', 'b.Database Administrator', 'c.Data Administrator', 'd.None of the above', 1),
(53, 'Degree', 'Tuples', 'Entity', 'All of the above', 1),
(54, 'Entity', 'Column', 'Cardinality', 'd.None of the above', 1),
(55, 'Queries', 'Domains', 'Relations', 'd.All of the above', 1),
(56, 'Commit', 'Rollback', 'Savepoint', 'd.None of the above', 1),
(57, 'Savepoint', 'Rollback', 'Commit', 'd.Both A & B', 1),
(58, 'a.Oral database connectivity', 'Oracle database connectivity', 'c.Open database connectivity', 'Object database connectivity', 1),
(59, 'Drop', 'Update', 'Alter', 'Set', 1),
(60, 'Press Shift + F7', 'Press F7', 'Press Alt + F7', 'None of These', 1),
(61, 'Home Page', 'Browser Page', ' Search Page', 'Bookmark', 1),
(62, 'label', 'cell', 'field', 'value', 1),
(63, 'Computer Hardware used', 'Operating System Used', 'Computer Software Used', 'All of The Above', 1),
(64, 'memory', 'input', 'output', 'storage', 1),
(65, 'Kilo Byte', 'Bit', 'Nibble  ', 'Word Size', 1),
(66, '6', '5', '4', '2', 1),
(67, 'Configuration', 'Accessibility', 'Authentication', 'logging in', 1),
(68, 'To', 'CC', 'Bcc', 'Subject', 1),
(69, 'Storing', 'Burning', 'Pasting', 'Assembling', 1),
(70, 'Scanner', 'LAN', 'Modem', 'pen drive', 1),
(71, 'Clear Cache', 'Bookmark', 'Proxy Setting', 'Delete History', 1),
(72, 'plotter', 'Laser Printer', 'stop matrix printer', ' Line Printer', 1),
(73, 'William English', 'Douglas Engelbert', 'Robert Jawaki', 'none of these', 1),
(74, 'Richard Hamming', 'Larry Page', 'Robert Torjan', ' Ivan Surtherland', 1),
(75, 'Barbara LisKov', 'Martin Hellman', 'Charles Babbage', 'E. Allen Emerson', 1),
(76, ' Dr E.F.Codd', 'Charles Batchmann', 'Cameron Boyce', 'Raymond F. Boyce', 1),
(77, 'Win + R', 'Win + T', ' Win + L', 'Win + H', 1),
(78, ' Cntrl + Tab', ' Cntrl + Enter', ' Cntrl + Fn', ' Cntrl + Shift', 1),
(79, ' Win + L', '[value-3]', ' Win + F', 'Win + D', 1),
(80, ' Cntrl + //', ' Cntrl + #', ' Cntrl + ^', ' Cntrl + -', 1),
(81, 'F1', 'F2', 'F10', 'F5', 1),
(82, 'F5', 'Ctrl + Del', 'Alt + D', 'Shift + Del', 1),
(83, 'Delete', 'Repeat last function', 'Refresh', 'Copy', 1),
(84, 'Shift', 'tab', 'Ctrl', 'Esc', 1),
(85, 'Press Shift + F7', 'Press F7', 'Press Alt + F7', 'Press Alt + F10', 1),
(86, ' Ctrl + =', ' Ctrl + -', 'Ctrl + Shift + +', 'Ctrl + Shift - =', 1),
(87, 'Ctrl + Shift + F10', 'Shift + F10', 'Ctrl + F10', ' Ctrl + Shift + F5', 1),
(88, 'F7', 'F1', 'F2', 'F5', 1),
(89, 'Function', 'Control', 'Arrow', ' Space bar', 1),
(90, 'Facebook', 'Orkut', 'Ryze', 'LinkedIn', 1),
(91, 'Tweets', 'Tweats', 'Twinks', 'Posts', 1),
(92, ' Video Log', ' Video blog', ' Log of blog activity', 'New technology to aid in blogging', 1),
(93, 'Blogging daily', 'Blogs that are posted by companies', 'Blogs with limited individual posts', 'Blogging from mobile devices', 1),
(94, 'Twitter', 'Wikipedia', 'Facebook', 'LinkedIn', 1),
(95, 'Search engine', 'Browser', 'Protocol', 'Gateway', 1),
(96, 'HTTP', 'HPPT', 'HTPP', 'HTTTP', 1),
(97, 'Land line', 'Dial up service', 'Dial up service', 'Cable modem', 1),
(98, ' HTML', ' FTP', ' URL', 'HTTP', 1),
(99, ' sniffer', 'Spam', ' Copple crumbs', 'Spoof', 1),
(100, '. ARAPANET', 'AAPARANET', ' ARPANET', 'PARA NET', 1),
(101, 'have a unique IP address', ' be an IBM PC', ' have a modern connection', 'be internet compatible', 1),
(102, ' Encryption of data', ' To transmit faster', 'To identify the user', 'To detect errors', 1),
(103, ' Extra Markup Language', ' Extended Markup Language', 'Excellent Marlup Language', '. Extended Marking Links', 1),
(104, 'Simple Mail Transition Protocol', 'Simple Mail Transfer Protocol', 'Simple Mail Terminal Protocol', 'Simple Mail Transport Protocol', 1),
(105, 't4tutorials@.com', 't4tutorials.com', 't4@t4tutorials.com', 't4tutorials@books', 1),
(106, 'Probe ware', 'Public domain', 'Shareware', 'Timeshare', 1),
(107, ' Search Engine', 'Directory of images', ' Chat service on the web', '. Number in Math', 1),
(108, 'Download', 'Editing', ' Upload', ' E-mail', 1),
(109, 'Data theft', 'Forgery', ' Damage to data and systems', 'Installing antivirus for protection', 1),
(110, 'I Love You', ' Blaster', ' Sasser', ' Creeper', 1),
(111, 'Mark Zukerberg', 'Tim Berner’s Lee', ' Larry Page', 'Martin Hellman', 1),
(112, 'int arr[2]=(10, 20)', 'int arr(2)={10, 20}', 'int arr[2] = {10, 20}', 'int arr(2) = (10, 20)', 1),
(113, 'Underflow', 'Garbage collection', 'Overflow', 'None of the above', 1),
(114, 'Stack', 'Queue', '', '', 1),
(115, 'First node', 'Second node', 'Last node', 'None of the above', 1),
(116, 'Square buffer', 'Rectangle buffer', 'Ring buffer', 'None of the above', 1),
(117, 'Linear Queue', 'Circular Queue', '1.Double ended Queue', '2.Single ended Queue', 1),
(118, 'Overflow', 'Underflow', 'Rear value', 'Front value', 1),
(119, 'Stack', 'Linked List', 'Array', 'Heap', 1),
(120, 'Queue', 'Dequeue', 'Priority Queue', 'Circular Queue', 1),
(121, 'Queue', 'Stack', 'Binary tree ', 'Linked list', 1),
(122, 'Stack', 'Linked list', 'Binary tree', 'Queue', 1),
(123, 'A+B*C', '+A*BC', 'ABC+*', 'None of the above', 1),
(124, '1234', '4321', '3241', 'None of the above', 1),
(125, 'LIFO principle', 'FIFO principle', 'Linear tree', 'Ordered array', 1),
(126, 'O(1)', 'O(n)', 'O(logn)', 'O(nlogn)', 1),
(127, 'At the middle position of the linked list', 'At the head position of the linked list', 't the tail position of the linked list', 'None of the above', 1),
(128, 'O(1)', 'O(n)', 'O(logn)', 'O(nlogn)', 1),
(129, 'ptr(node*)malloc(sizeof(node*))', 'ptr=(node)malloc(sizeof(node))', 'ptr=(node*)malloc(sizeof(node))', 'None of the above', 1),
(130, '3', '1', '4', '2', 1),
(1, 'Infinite loop', 'Prints “Hello” once.', 'No output', 'Compile error', 2),
(2, '2', '15', '16', '18', 2),
(3, '0', '1', '1', 'invalid use of strcmp() functions', 2),
(4, '3 5', '3 3', '5 5', '5 3', 2),
(5, '10 20 30', '11 21 31', '30', '10', 2),
(6, '1', '4', '20', '10', 2),
(7, '2', '15', 'Syntax Error', '3', 2),
(8, '10 30', '30 10 ', '10 20 ', '20 10', 2),
(9, '12', '24', '20', '18', 2),
(10, '10', '5', '1', '0', 2),
(11, '76 28 87', '076 28 0x87', ' 62 28 135', '0 0 0', 2),
(12, '45', '36', ' 20', '100', 2),
(13, 'yes', 'no', 'compilation error', 'none of the above', 2),
(14, '1 2 3', '2', '2 3 none', 'none', 2),
(15, 'greater', 'lesser', 'equal', 'none of the above', 2),
(16, '5', '4', '3', '6', 2),
(17, '44.5000', '44.000', '4.50004.5000', '4 4', 2),
(18, '5', '4', '2', '1', 2),
(19, '5', 'garbage value', 'compilation error', '0', 2),
(20, '3 2 1 0 1 2 3', '3 2 1 0', '0 1 2 3', 'none of the above', 2),
(21, '5', 'Garbage value', 'Compilation error', '0', 2),
(22, 'Hello Hello', 'Hello', 'Compilation error', 'None of the above.', 2),
(23, '1', '4', '8', '16', 2),
(24, '19 82', 'Compilation Error', ' 82 19', 'None of the above.', 2),
(25, '8', '648', '72', 'None of the above', 2);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Q_id` varchar(5) NOT NULL,
  `Level` int(2) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `code` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Q_id`, `Level`, `Question`, `code`) VALUES
('1', 1, 'IC chips used in computers are usually made of', ''),
('2', 1, 'One Gigabyte is approximately equal is:', ''),
('3', 1, 'What type of process creates a smaller file that is faster to transfer over the internet? ', ''),
('4', 1, 'Which of the following is an example of non-volatile memory? ', ''),
('5', 1, 'File extensions are used in order to ………. ', ''),
('6', 1, 'During the ………… portion of the Information Processing Cycle, the computer acquires data from some so', ''),
('7', 1, 'Which one of the following is different from other members? ', ''),
('8', 1, 'The hexadecimal number system consists of the symbols  ', ''),
('9', 1, 'Process to exit from computer by giving correct instructions such as \'EXIT\' is classified as ', ''),
('10', 1, 'A _________________ is a computer, appliance, or router that sits between trusted and untrusted syst', ''),
('11', 1, 'What is the size of ‘int’?  ', ''),
('12', 1, 'Which header file should be included to use functions like malloc() and calloc()? ', ''),
('13', 1, '.Can we pass a variable argument list to a function at run-time? ', ''),
('14', 1, 'How would you round off a value from 1.66 to 2.0?', ''),
('15', 1, 'Which of the following correctly shows the hierarchy of arithmetic operations in C?', ''),
('16', 1, 'Which of the following are unary operators in C? ', ''),
('17', 1, 'The keyword used to transfer control from a function back to the calling function is ', ''),
('18', 1, 'What is (void*)0? ', ''),
('19', 1, 'In which header file is the NULL macro defined? ', ''),
('20', 1, 'Which of the following function sets first n characters of a string to a given character? ', ''),
('21', 1, 'The library function used to find the last occurrence of a character in a string is ', ''),
('22', 1, 'Out of fgets() and gets() which function is safe to use?   ', ''),
('23', 1, 'What will the function rewind() do? ', ''),
('24', 1, 'Does there any function exist to convert the int or float to a string? ', ''),
('25', 1, 'Which of the following cannot be checked in a switch-case statement? ', ''),
('26', 1, 'In which stage the following code ', ''),
('27', 1, 'In C, if you pass an array as an argument to a function, what actually gets passed?', ''),
('28', 1, 'What is the similarity between a structure, union and enumeration? ', ''),
('29', 1, 'What do the \'c\' and \'v\' in argv stands for?', ''),
('30', 1, 'Who is the father of C language?  ', ''),
('31', 1, 'All keywords in C are in ____________ ', ''),
('32', 1, 'Which is valid C expression? ', ''),
('33', 1, 'Which keyword is used to prevent any changes in the variable within a C program? ', ''),
('34', 1, 'Which of the following are C preprocessors? ', ''),
('35', 1, 'What is a database? ', ''),
('36', 1, 'Who created the first DBMS?  ', ''),
('37', 1, 'In which of the following formats data is stored in the database management system? ', ''),
('38', 1, 'Which of the following is a feature of DBMS? ', ''),
('39', 1, 'Which of the following is known as a set of entities of the same type that share same properties, or', ''),
('40', 1, 'What does an RDBMS consist of? ', ''),
('41', 1, 'The DBMS acts as an interface between ________________ and ________________ ', ''),
('42', 1, 'The ability to query data, as well as insert, delete, and alter tuples, is offered by ____________  ', ''),
('43', 1, '______________ is a set of one or more attributes taken collectively to uniquely identify a record. ', ''),
('44', 1, 'Which of the following set should be associated with weak entity set for weak entity to be meaningfu', ''),
('45', 1, ' Procedural language among the following is __________ ', ''),
('46', 1, '_________________ operations do not preserve non-matched tuples. ', ''),
('47', 1, ' For designing a normal RDBMS which of the following normal form is considered adequate?  ', ''),
('48', 1, 'The oldest DB model is _______________', ''),
('49', 1, 'hat happens if a piece of data is stored in two places in the db? ', ''),
('50', 1, 'The logical design, and the snapshot of the data at a given instant in time is known as? ', ''),
('51', 1, 'The term \"FAT\" is stands for_____ ', ''),
('52', 1, 'To which of the following the term \"DBA\" referred? ', ''),
('53', 1, 'Rows of a relation are known as the _______.', ''),
('54', 1, 'Which of the following refers to the number of tuples in a relation?', ''),
('55', 1, 'In a relation database, every tuples divided into the fields are known as the______', ''),
('56', 0, '1', ''),
('57', 0, '1', ''),
('58', 0, '1', ''),
('59', 1, ' Which one of the following commands is used to modify a column inside a table?', ''),
('60', 1, 'We can detect spelling and grammar error by', ''),
('61', 1, 'A Web site\'s main page is called its', ''),
('62', 1, ' In a spreadsheet, a _________ is a number you will use in a calculator.', ''),
('63', 1, '\"Platform\" in the computer world means:  ', ''),
('64', 1, 'The contents of ______are lost when the computer turns off', ''),
('65', 1, ' What is half byte called', ''),
('66', 1, 'How many generations are computers currently classified into?', ''),
('67', 1, 'Verification of a login name and password is known as_____.', ''),
('68', 1, ' If you add a recipient email address to the box of an email message, a copy of the message is sent ', ''),
('69', 1, 'The process of copying a file to a CD/DVD is often called? ', ''),
('70', 1, ' ……….. is used to send digital data over a telephone line?', ''),
('71', 1, ' When using a Chrome Internet Browser, a method of saving web page addresses for quick access is', ''),
('72', 1, 'Which printer prints one letter in one stroke? ', ''),
('73', 1, 'Who made the first computer mouse? ', ''),
('74', 1, '', ''),
('75', 1, '', ''),
('76', 1, '', ''),
('77', 1, 'What Is The Keyboard shortcut For \"Lock computer\" ? ', ''),
('78', 1, 'What Is The Keyboard shortcut For \"Switch between tab\" ? ', ''),
('79', 1, 'What Is The Keyboard shortcut For \"open desktop\" ?', ''),
('80', 1, 'What Is The Keyboard shortcut For \"Zoom out\" ?', ''),
('81', 1, 'Which key on the keyboard can be used to view slide show ', ''),
('82', 1, ' Which key is used to delete programs or files permanently?', ''),
('83', 1, 'The function of Key F4 is', ''),
('84', 1, ' Which key is used to indent a paragraph in MS word ?', ''),
('85', 1, 'We can detect spelling and grammar error by ', ''),
('86', 1, 'Shortcut Key for Superscript is ', ''),
('87', 1, ' For \'Maximize Power Point application window\' you have to press _____.', ''),
('88', 1, 'Which among the following short cut key is used to check spelling:  ', ''),
('89', 1, 'Which key is used in combination with another key to perform a specific task? ', ''),
('90', 1, '___________ social network is considered the most popular for business to business marketing?', ''),
('91', 1, '___________is the term updates by Twitter users. ', ''),
('92', 1, 'What is a “vlog”?', ''),
('93', 1, 'What is meant by “micro-blogging”?', ''),
('94', 1, 'Which is the largest social media network in the world? ', ''),
('95', 1, 'what is telnet?', ''),
('96', 1, 'Which is used to transmit information on the World Wide Web. ', ''),
('97', 1, 'Which is the slowest Internet connection service? ', ''),
('98', 1, 'Which term is used for creating of web pages ', ''),
('99', 1, 'Junk E-mail is also known as_____ ', ''),
('100', 1, ' What was the first network that provides the basis for the internet?', ''),
('101', 1, 'The computer connected to the internet must have? ', ''),
('102', 1, '“Parity bits” are used for what', ''),
('103', 1, ' Select correct stands of XML ', ''),
('104', 1, '  which is used to send and receive electronic mail.', ''),
('105', 1, 'identify valid email address?', ''),
('106', 1, 'Which Software programs that allow you to legally copy files', ''),
('107', 1, 'www.google.com is?', ''),
('108', 1, 'The process of sending data from a local computer to a remote computer is called  ', ''),
('109', 1, 'Which one option is not a type of cybercrime?', ''),
('110', 1, 'The first computer virus is ——–', ''),
('111', 1, '', ''),
('112', 1, 'How can we initialize an array in C language? ', ''),
('113', 1, ' When the user tries to delete the element from the empty stack then the condition is said to be a _', ''),
('114', 1, 'Which data structure is required to convert the infix to prefix notation?', ''),
('115', 1, 'Which one of the following node is considered the top of the stack if the stack is implemented using', ''),
('116', 1, ' What is another name for the circular queue among the following options?', ''),
('117', 1, 'Which one of the following is not the type of the Queue?', ''),
('118', 1, ' The necessary condition to be checked before deletion from the Queue is__', ''),
('119', 1, 'Which data structure is the best for implementing a priority queue?', ''),
('120', 1, 'A linear data structure in which insertion and deletion operations can be performed from both the en', ''),
('121', 1, 'Which data structure is mainly used for implementing the recursive algorithm?', ''),
('122', 1, 'Which data structure is required to convert the infix to prefix notation? ', ''),
('123', 1, ' Which of the following is the infix expression?', ''),
('124', 1, 'If the elements \'1\', \'2\', \'3\' and \'4\' are inserted in a queue, what would be order for the removal? ', ''),
('125', 1, 'Which of the following principle does Queue use?', ''),
('126', 1, ' The time complexity of enqueue operation in Queue is __', ''),
('127', 1, ' In the linked list implementation of queue, where will the new element be inserted?', ''),
('128', 1, ' What would be the time complexity if user tries to insert the element at the end of the linked list', ''),
('129', 1, ' Which one of the following is the correct option to create a new node?', ''),
('130', 1, ' What is the maximum number of children that a node can have in a binary tree? ', ''),
('1', 2, 'What is the output of the below code snippet?', '#include<stdio.h>\r\n\r\nmain() \r\n{\r\n   for(;;)\r\n   printf(\"Hello\");\r\n}'),
('2', 2, 'What is the output of the below code snippet?', '#include<stdio.h>\r\n\r\nint main() {\r\n	int sum = 2 + 4 / 2 + 6 * 2;\r\n	printf(\"%d\", sum);\r\n	return 0;\r\n}'),
('3', 2, 'What will be printed for the below statement?', '#include<stdio.h>\r\n\r\nmain()\r\n{\r\n   printf(\"%d\",strcmp(\"strcmp()\",\"strcmp()\"));\r\n}\r\n\r\n'),
('4', 2, ' What will be the output of the following code snippet?', '#include <stdio.h>\r\nint main() {\r\n	int a = 3, b = 5;\r\n	int t = a;\r\n	a = b;\r\n	b = t;\r\n	printf(\"%d %d\", a, b);\r\n	return 0;\r\n}'),
('5', 2, ' What is the output of the following program?', '#include<stdio.h>\r\n\r\nvoid f(int a[])\r\n{  \r\n   int i;\r\n   \r\n   for(i=0; i<3; i++)\r\n      a[i]++;\r\n}\r\nmain()\r\n{	\r\n   int i,a[] = {10, 20, 30};\r\n   \r\n   f(a);\r\n   for(i=0; i<3; ++i)\r\n   {\r\n      printf(\"%d \",a[i]);\r\n   }\r\n}'),
('6', 2, 'What is the output of the following code snippet?', '#include <stdio.h>\r\nint main() {\r\n	int a[] = {1, 2, 3, 4};\r\n	int sum = 0;\r\n	for(int i = 0; i < 4; i++) {\r\n	    sum += a[i];\r\n	}\r\n	printf(\"%d\", sum);\r\n		return 0;\r\n}'),
('7', 2, 'What will be the output of the following code snippet?', '#include <stdio.h>\r\nvoid solve() {\r\n    int a[] = {1, 2, 3, 4, 5};\r\n    int sum = 0;\r\n    for(int i = 0; i < 5; i++) {\r\n        if(i % 2 == 0) {\r\n            sum += *(a + i);\r\n        }\r\n        else {\r\n            sum -= *(a + i);\r\n        }\r\n    }\r\n    printf(\"%d\", sum);\r\n}\r\nint main() {\r\n	solve()'),
('8', 2, ' What will be the output of the following code snippet?', '#include <stdio.h>\r\nvoid solve() {\r\n    int first = 10, second = 20;\r\n    int third = first + second;\r\n    {\r\n        int third = second - first;\r\n        printf(\"%d \", third);\r\n    }\r\n    printf(\"%d\", third);\r\n}\r\nint main() {\r\n	solve();\r\n	return 0;\r\n}'),
('9', 2, 'What will be the output of the following code snippet?', '#include <stdio.h>\r\nvoid solve() {\r\n    int a = 3;\r\n    int res = a++ + ++a + a++ + ++a;\r\n    printf(\"%d\", res);\r\n}\r\nint main() {\r\n	solve();\r\n	return 0;\r\n}'),
('10', 2, ' What will be the value of x in the following code snippet?', '#include <stdio.h>\r\nvoid solve() {\r\n    int x = printf(\"Hello\");\r\n    printf(\" %d\", x);\r\n}\r\nint main() {\r\n	solve();\r\n	return 0;\r\n}'),
('11', 2, 'What will be the result of the following code snippet?', '#include <stdio.h>\r\nvoid solve() {\r\n    printf(\"%d %d %d\", (076), (28), (0x87));\r\n}\r\nint main() {\r\n    solve();\r\n	return 0;\r\n}'),
('12', 2, 'What will be the output of the following code snippet?', '#include <stdio.h>\r\nvoid solve() {\r\n    char ch[10] = \"abcdefghij\";\r\n    int ans = 0;\r\n    for(int i = 0; i < 10; i++) {\r\n        ans += (ch[i] - \'a\');\r\n    }\r\n    printf(\"%d\", ans);\r\n}\r\nint main() {\r\n    solve();\r\n	return 0;\r\n}'),
('13', 2, 'What will be the output of the following code snippet?', '#include <stdio.h>\r\nvoid solve() {\r\n    bool ok = false;\r\n    printf(ok ? \"YES\" : \"NO\");\r\n}\r\nint main() {\r\n    solve();\r\n	return 0;\r\n}'),
('14', 2, 'What will be the output of the following code snippet?', '#include <stdio.h>\r\nvoid solve() {\r\n    int ch = 2;\r\n    switch(ch) {\r\n        case 1: printf(\"1 \");\r\n        case 2: printf(\"2 \");\r\n        case 3: printf(\"3 \");\r\n        default: printf(\"None\");\r\n    }\r\n}\r\nint main() {\r\n    solve();\r\n	return 0;\r\n}'),
('15', 2, 'What will be the output of the following code snippet?', '#include <stdio.h>\r\nvoid solve() {\r\n    int x = 1, y = 2;\r\n    printf(x > y ? \"Greater\" : x == y ? \"Equal\" : \"Lesser\");\r\n}\r\nint main() {\r\n    solve();\r\n	return 0;\r\n}'),
('16', 2, 'What is the output of the below code snippet?', '#include <stdio.h>\r\nvoid solve() {\r\n    int n = 24;\r\n    int l = 0, r = 100, ans = n;\r\n    while(l <= r) {\r\n        int mid = (l + r) / 2;\r\n        if(mid * mid <= n) {\r\n            ans = mid;\r\n            l = mid + 1;\r\n        }\r\n        else {\r\n            r = mid - 1;\r\n        }\r\n    }\r\n    print'),
('17', 2, 'What will be the output of the following code snippet?', '#include <stdio.h>\r\nvoid solve() {\r\n    printf(\"%d \", 9 / 2);\r\n    printf(\"%f\", 9.0 / 2);\r\n}\r\nint main() {\r\n    solve();\r\n	return 0;\r\n}'),
('18', 2, 'What wil be the output of the below code snippet?', '#include <stdio.h>\r\nvoid solve() {\r\n    int x = 2;\r\n    printf(\"%d\", (x << 1) + (x >> 1));\r\n}\r\nint main() {\r\n    solve();\r\n	return 0;\r\n}'),
('19', 2, 'What will be the output of the following code snippet?', '#include <stdio.h>\r\nvoid solve(int x) {\r\n    if(x == 0) {\r\n        printf(\"%d \", x);\r\n        return;\r\n    }\r\n    printf(\"%d \", x);\r\n    solve(x - 1);\r\n    printf(\"%d \", x);\r\n}\r\nint main() {\r\n    solve(3);\r\n	return 0;\r\n}'),
('20', 2, 'What is the output of the below code snippet?', '#include <stdio.h>\r\n#define VAL 5\r\nint getInput() {\r\n    return VAL;\r\n}\r\nvoid solve() {\r\n    const int x = getInput();\r\n    printf(\"%d\", x);\r\n}\r\nint main() {\r\n    solve();\r\n	return 0;\r\n}'),
('21', 2, 'What is the output of the below code snippet?', '#include <stdio.h>\r\n#include<string.h>\r\nvoid solve() {\r\n    char s[] = \"Hello\";\r\n    printf(\"%s \", s);\r\n    char t[40];\r\n    strcpy(t, s);\r\n    printf(\"%s\", t);\r\n}\r\nint main() {\r\n    solve();\r\n	return 0;\r\n}'),
('22', 2, 'What is the output of the below code snippet?', '#include<stdio.h>\r\n\r\nunion School {\r\n    int age, rollNo;\r\n    double marks;\r\n};\r\nvoid solve() {\r\n    union School sc;\r\n    sc.age = 19;\r\n    sc.rollNo = 82;\r\n    sc.marks = 19.04;\r\n    printf(\"%d\", (int)sizeof(sc));\r\n}\r\nint main() {\r\n    solve();\r\n	return 0;\r\n}'),
('23', 2, 'What is the output of the below code snippet?', '#include<stdio.h>\r\nstruct School {\r\n    int age, rollNo;\r\n};\r\nvoid solve() {\r\n    struct School sc;\r\n    sc.age = 19;\r\n    sc.rollNo = 82;\r\n    printf(\"%d\", (int)sizeof(sc));\r\n}\r\nint main() {\r\n    solve();\r\n	return 0;\r\n}\r\n'),
('24', 2, 'What is the output of the below code snippet?', '#include<stdio.h>\r\n\r\nstruct School {\r\n    int age, rollNo;\r\n};\r\nvoid solve() {\r\n    struct School sc;\r\n    sc.age = 19;\r\n    sc.rollNo = 82;\r\n    printf(\"%d %d\", sc.age, sc.rollNo);\r\n}\r\nint main() {\r\n    solve();\r\n	return 0;\r\n}'),
('25', 2, 'What is the output of the below code snippet?', '#include<stdio.h>\r\n\r\n#define CUBE(x) x * x * x\r\nvoid solve() {\r\n    int ans = 216 / CUBE(3);\r\n    printf(\"%d\", ans);\r\n}\r\nint main() {\r\n    solve();\r\n	return 0;\r\n}');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `Q_id` int(11) NOT NULL,
  `Level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`Q_id`, `Level`) VALUES
(1, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adv_crud`
--
ALTER TABLE `adv_crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adv_crud`
--
ALTER TABLE `adv_crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
