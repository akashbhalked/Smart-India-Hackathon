-- Table structure for table `conversation`
--
 
CREATE TABLE IF NOT EXISTS `conversation` (
  `id` int(11) NOT NULL,
  `user_one` int(11) NOT NULL,
  `user_two` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
-- --------------------------------------------------------
 
--
-- Table structure for table `messages`
--
 
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `user_from` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
-- --------------------------------------------------------
 
--
-- Table structure for table `user`
--
 
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
 
--
-- Dumping data for table `user`
--
 
INSERT INTO `user` (`id`, `username`, `password`, `img`) VALUES
(1, 'Sayan', 'abcdef', 'img/dp-1.jpg'),
(2, 'Rishabh', 'abcdef', 'img/dp-2.jpg'),
(3, 'Amit', 'abcdef', 'img/dp-3.jpg'),
(4, 'Adesh', 'abcdef', 'img/dp-4.jpg'),
(5, 'Anshul', 'abcdef', 'img/dp-5.jpg'),
(6, 'Mayank', 'abcdef', 'img/dp-6.jpg');
 
--
-- Indexes for dumped tables
--
 
--
-- Indexes for table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`id`);
 
--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);
 
--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
 
--
-- AUTO_INCREMENT for dumped tables
--
 
--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;