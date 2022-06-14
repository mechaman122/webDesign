--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_cate` varchar(255) NOT NULL,
  `item_nsx` varchar(255) DEFAULT NULL,
  `item_about` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `tbl_product` (`item_id`, `item_name`, `item_price`, `item_image`,`item_cate`, `item_nsx`,`item_about`) VALUES
(1, 'The Sus', 99.00, '../img/among-us-symbol.png','clothes', '2020',"Sếch toi"), -- NOW()
(2, 'The Sussier', 109.00, '../img/among-us-symbol.png','accessory', '2021',"áđá"),
(3, 'The more Sus', 129.00, '../img/among-us-symbol.png','figure', '2022',"đâs"),
(4, 'Ultimate Sus', 135.00, '../img/among-us-symbol.png','gaming gear', '2019',"áđá"),
(5, 'Imposter', 140.00, '../img/among-us-symbol.png','accessory', '2020',"đasa"),
(6, 'Red Impostor', 101.00, '../img/among-us-symbol.png','figure', '2021',"đấ"),
(7, 'King of Sus', 150.00, '../img/among-us-symbol.png','gaming gear', '2020',"sađá"),
(8, 'Súuuuuu', 169.00, '../img/among-us-symbol.png','clothes', '2021',"áđá"),
(9, 'Suspicious...', 200.00, '../img/among-us-symbol.png','accessory', '2021',"áđá"),
(10, 'Not Engineer', 170.00, '../img/among-us-symbol.png','figure', '2019',"đâs"),
(11, 'Venter is Real', 95.00, '../img/among-us-symbol.png','accessory', '2077',"âs"),
(12, 'Imposter the Nazi', 111.00, '../img/among-us-symbol.png','clothes', '2096',"xzczxc"),
(13, 'Sugoma', 152.00, '../img/among-us-symbol.png','gaming gear', '2022',"ádádá");

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;
