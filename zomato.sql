-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 06:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zomato`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `street_address` text NOT NULL,
  `landmark` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `user_id`, `street_address`, `landmark`, `city`, `state`, `pin`, `contact_number`) VALUES
(1, 1, 'B.D.O More', 'Sagarbhanga Colony', 'Durgapur', 'West Bengal', '713211', '9345465468'),
(2, 1, 'Tetultala More', 'Sagarbhanga Colony', 'Durgapur', 'West Bengal', '713211', '9345467868'),
(4, 3, 'Khantpukur', 'Kuyotola kalibari', 'DURGAPUR', '713212', 'West Bengal', '8764389043'),
(5, 3, 'G-39\r\nSagarbhanga colony', 'BDO More', 'DURGAPUR', '713211', 'West Bengal', '8764389043'),
(10, 5, 'Bidhannagar', 'Near BC ROY', 'DURGAPUR', '713210', 'West Bengal', '9382780980');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `address` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `date`, `status`, `payment_method`, `amount`, `address`) VALUES
('60fc188f1b26c', 1, '2021-07-24 07:11:00', 1, 'Credit Card', 220, 1),
('60fc19519988b', 1, '2021-07-24 07:14:00', 1, 'UPI', 630, 1),
('60fc1b609b746', 1, '2021-07-24 07:23:00', 1, 'UPI', 640, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(1, '60fc188f1b26c', 10, 2),
(2, '60fc19519988b', 9, 3),
(3, '60fc1b609b746', 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `bg` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `details` text NOT NULL,
  `stock` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `restaurant_name`, `bg`, `price`, `details`, `stock`, `category`) VALUES
(1, 'Veg Pizza', 'Domino\'s Pizza', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQCfFkddiB0zYnKw35Vu45eHEuYkoYPrf_zQ&usqp=CAU', 320, 'Veg Delicious Pizza', 1, 'Dominos'),
(2, 'Chicken Pizza', 'Domino\'s Pizza', 'https://i.ndtvimg.com/i/2015-02/meat-pizza_625x350_41424681507.jpg', 300, 'Non Veg Pizza', 5, 'Dominos'),
(3, 'Chicken Bucket', 'KFC', 'https://online.kfc.co.in/Content/OnlineOrderingImages/Menu/Items/CAT86-8287.jpg?v=15.94', 420, 'KFC Special', 4, 'KFC'),
(4, 'Zinger Tandoori', 'KFC', 'https://recipefairy.com/wp-content/uploads/2020/08/kfc-zinger-burger.jpg', 190, 'Fast Food', 4, 'KFC'),
(5, 'Veggie Delite', 'Subway', 'https://fastfoodnutrition.org/item-photos/full/243_s.jpg', 115, 'Subway Special', 5, 'Subway'),
(6, 'Chicken Teriyaki', 'Subway', 'https://i.pinimg.com/originals/f2/32/97/f23297a30fddaf63326e86d132c6c887.jpg', 145, 'Non Veg', 5, 'Subway'),
(7, 'Mutton Biryani', 'Arsalan Biryani', 'https://static.toiimg.com/thumb/52568357.cms?imgsize=158081&width=800&height=800', 320, 'Arsalan Special', 4, 'Arsalan'),
(8, 'Chicken Biryani', 'Arsalan Biryani', 'https://recipesofhome.com/wp-content/uploads/2020/06/chicken-biryani-recipe-735x490.jpg', 260, 'Non Veg', 3, 'Arsalan'),
(9, 'Chicken Momo', 'Zip Zap', 'https://www.archanaskitchen.com/images/archanaskitchen/1-Author/shaikh.khalid7-gmail.com/Chicken_Momos_Recipe_Delicious_Steamed_Chicken_Dumplings.jpg', 210, 'Zip Zap Special', 4, 'Zip Zap'),
(10, 'Chicken Chowmein', 'Zip Zap', 'https://jackslobodian.com/wp-content/uploads/2021/03/Chicken-Chow-Mein-2-1140x758.jpg', 110, 'Fast Food', 7, 'Zip Zap'),
(11, 'Mc Spicy Chicken Burger', 'McDonald\'s', 'https://5.imimg.com/data5/NH/WD/MY-33353830/mcspicy-chicken-burger-500x500.png', 180, 'McDonald\'s Special', 5, 'McDonald'),
(12, 'Mc Spicy Fried Chicken', 'McDonald\'s', 'https://mcdonaldsblog.in/wp-content/uploads/2021/04/Mcspicy-chicken.jpeg', 180, 'Non Veg', 5, 'McDonald');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'PRABAL', 'prabal@gmail.com', '12345'),
(2, 'Bumba', 'bumba@gmail.com', 'bumba1234'),
(3, 'Bratopriya Mondal', 'broto2327@gmail.com', '23272000'),
(5, 'SAIKAT CHATTERJEE', 'saikatchatterjee@gmail.com', '234567'),
(6, 'Baidhyanath Mahato', 'baidya@gmail.com', '54321');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`) VALUES
(9, 1, 1),
(10, 1, 6),
(11, 1, 8),
(12, 1, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
