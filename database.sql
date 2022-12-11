DROP database IF EXISTS shop;
CREATE DATABASE shop;
USE shop;

CREATE TABLE `product` (
  `id` int(10) PRIMARY KEY AUTO_INCREMENT,
  `price` float(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `quantity_remain` int(10),
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `product_images` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `src` varchar(255) DEFAULT NULL,
  FOREIGN KEY (`product_id`) REFERENCES `product`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

insert into product (id, price, name, color, description, quantity_remain, img) values (1, '13.51', 'Áo Thun Cổ Tròn Thần Cổ Đại Valknut Ver5', 'Black', null, 92, './app/assets/images/products/product-1.jpg');
insert into product (id, price, name, color, description, quantity_remain, img) values (2, '122.87', 'shirt 2', 'White', null, 39, './app/assets/images/products/product-2.jpg');
insert into product (id, price, name, color, description, quantity_remain, img) values (3, '108.72', 'shirt 3', 'Black', null, 100, './app/assets/images/products/product-3.jpg');
insert into product (id, price, name, color, description, quantity_remain, img) values (4, '184.70', 'shirt 4', 'White', null, 33, './app/assets/images/products/product-4.jpg');
insert into product (id, price, name, color, description, quantity_remain, img) values (5, '47.91', 'shirt 5', 'Black', null, 86, './app/assets/images/products/product-5.jpg');
-- insert into product (id, price, name, color, description, quantity_remain, img) values (6, '3.62', 'shirt 6', 'Goldenrod', null, 77, './app/assets/images/products/product-6.jpg');
-- insert into product (id, price, name, color, description, quantity_remain, img) values (7, '14.30', 'shirt 7', 'Green', null, 52, './app/assets/images/products/product-7.jpg');
-- insert into product (id, price, name, color, description, quantity_remain, img) values (8, '58.26', 'shirt 8', 'Goldenrod', null, 70, './app/assets/images/products/product-8.jpg');
-- insert into product (id, price, name, color, description, quantity_remain, img) values (9, '79.37', 'shirt 9', 'Goldenrod', null, 16, './app/assets/images/products/product-9.jpg');
-- insert into product (id, price, name, color, description, quantity_remain, img) values (10, '50.87', 'shirt 10', 'Red', null, 69, './app/assets/images/products/product-10.jpg');
-- insert into product (id, price, name, color, description, quantity_remain, img) values (11, '65.67', 'shirt 11', 'Pink', null, 5, './app/assets/images/products/product-11.jpg');
-- insert into product (id, price, name, color, description, quantity_remain, img) values (12, '10.96', 'shirt 12', 'Goldenrod', null, 36, './app/assets/images/products/product-12.jpg');
-- insert into product (id, price, name, color, description, quantity_remain, img) values (13, '158.50', 'shirt 13', 'Red', null, 91, './app/assets/images/products/product-13.jpg');
-- insert into product (id, price, name, color, description, quantity_remain, img) values (14, '144.56', 'shirt 14', 'Blue', null, 66, './app/assets/images/products/product-14.jpg');
-- insert into product (id, price, name, color, description, quantity_remain, img) values (15, '118.49', 'shirt 15', 'Mauv', null, 70, './app/assets/images/products/product-15.jpg');
-- insert into product (id, price, name, color, description, quantity_remain, img) values (16, '84.60', 'shirt 16', 'Goldenrod', null, 45, './app/assets/images/products/product-16.jpg');

insert into product_images (product_id, src) values 
(1, './app/assets/images/more_products/1-2-2-1.jpg'),
(1, './app/assets/images/more_products/1-2-2-2.jpg'),
(1, './app/assets/images/more_products/1-2-2-3.jpg'),
(2, './app/assets/images/more_products/1-3-1-1.jpg'),
(2, './app/assets/images/more_products/1-3-1-2.jpg'),
(2, './app/assets/images/more_products/1-3-1-3.jpg'),
(3, './app/assets/images/more_products/1-3-3-1.jpg'),
(3, './app/assets/images/more_products/1-3-3-2.jpg'),
(3, './app/assets/images/more_products/1-3-3-3.jpg'),
(4, './app/assets/images/more_products/1-4-1-1.jpg'),
(4, './app/assets/images/more_products/1-4-1-2.jpg'),
(4, './app/assets/images/more_products/1-4-1-3.jpg'),
(5, './app/assets/images/more_products/1-4-2-1.jpg'),
(5, './app/assets/images/more_products/1-4-2-2.jpg'),
(5, './app/assets/images/more_products/1-4-2-3.jpg');

CREATE TABLE `user` (
  `id` int(10) PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255),
  `address` varchar(255),
  `role` int(1) DEFAULT 1,
  `image` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` VALUES (0, 'admin', 'admin', '123456', '0123456789', '', 0, './app/assets/images/instagram/instagram-1.jpg');
INSERT INTO `user` VALUES (1, 'Bennie Mousley', 'bmousley0', '5TFCxlsl2Zq', '1613211013', '70314 Carberry Alley', 1, './app/assets/images/instagram/instagram-1.jpg');
INSERT INTO `user` VALUES (2, 'Tobie Klees', 'tklees1@japanpost.jp', 'tDm8oOyfngKH', '4637314160', '283 Pennsylvania Center', 1, './app/assets/images/instagram/instagram-1.jpg');
INSERT INTO `user` VALUES (3, 'Romona Rust', 'rrust2@live.com', 'm2CA4Iia1', '4799176958', '12294 Transport Hill', 1, './app/assets/images/instagram/instagram-1.jpg');
INSERT INTO `user` VALUES (4, 'Brier Danson', 'bdanson3@netscape.com', 'xMhXQGxYNV', '2957597604', '4 Redwing Court', 1, './app/assets/images/instagram/instagram-1.jpg');
INSERT INTO `user` VALUES (5, 'Dilly Blofeld', 'dblofeld4@ca.gov', 'jVFHr4OW', '8904683776', '741 Harbort Lane', 1, './app/assets/images/instagram/instagram-1.jpg');

CREATE TABLE `cart` (
  `id` int(10) PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(10),
  `total_money` float(10) DEFAULT 0,
  FOREIGN KEY (`user_id`) REFERENCES `user`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `cart_item` (
  `id` int(10) PRIMARY KEY AUTO_INCREMENT,
  `cart_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(10) DEFAULT 0,
  `size` varchar(3) NOT NULL,
  FOREIGN KEY (`cart_id`) REFERENCES `cart`(`id`),
  FOREIGN KEY (`product_id`) REFERENCES `product`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `order` (
  `id` int(10) PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(10),
  `total_money` float(10) DEFAULT 0,
  FOREIGN KEY (`user_id`) REFERENCES `user`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `order_item` (
  `id` int(10) PRIMARY KEY AUTO_INCREMENT,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(10) DEFAULT 0,
  `size` varchar(3) NOT NULL,
  FOREIGN KEY (`product_id`) REFERENCES `product`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `size` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `product_sizes` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `size_id` int NOT NULL,
  `quantity_remain` int NOT NULL DEFAULT 0,
  FOREIGN KEY (`product_id`) REFERENCES `product`(`id`),
  FOREIGN KEY (`size_id`) REFERENCES `size`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `size` (name) VALUES
('S'), 
('M'), 
('L'), 
('XL'), 
('XXL'), 
('XXXL');

INSERT INTO `product_sizes` (product_id, size_id, quantity_remain) VALUES
(1, 2, 10), 
(1, 3, 10), 
(1, 4, 10),
(2, 2, 10), 
(2, 3, 10), 
(2, 4, 10),
(3, 2, 10), 
(3, 3, 10), 
(3, 4, 10),
(4, 2, 10), 
(4, 3, 10), 
(4, 4, 10),
(5, 2, 10), 
(5, 3, 10), 
(5, 4, 10);