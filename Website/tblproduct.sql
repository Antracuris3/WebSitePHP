--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Porta-Chaves', '3DcAM01', 'Store/Porta_Chaves.jpg', 2.00),
(2, 'Rato', 'USB02', 'Store/Rato.jpg', 80.00),
(3, 'Caneca', 'wristWear03', 'Store/Caneca.jpg', 15.00),
(4, 'T-shirt', 'LPN45', 'Store/T-shirt.jpg', 30.00);


ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);


ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
