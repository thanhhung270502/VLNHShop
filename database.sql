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

-- insert into product (id, price, name, color, description, quantity_remain, img) values (1, '69.9', 'Áo Thun Cổ Tròn Đơn Giản Thần Cổ Đại Valknut Ver3', 'brown', null, 69, './app/assets/images/products/product-1.jpg');
-- insert into product (id, price, name, color, description, quantity_remain, img) values (2, '78.9', 'Áo Thun Cổ Trụ Ngân Hà 4 Element Ver10', 'white', null, 39, './app/assets/images/products/product-2.jpg');
-- insert into product (id, price, name, color, description, quantity_remain, img) values (3, '81.8', 'Áo Phông Polo Nam Màu Trắng MANDO Tay Lỡ Cotton Cao Cấp', 'black', null, 100, './app/assets/images/products/product-3.jpg');
-- insert into product (id, price, name, color, description, quantity_remain, img) values (4, '82.2', 'Áo Thun Sweater Tối Giản M14', 'white', null, 33, './app/assets/images/products/product-4.jpg');
-- insert into product (id, price, name, color, description, quantity_remain, img) values (5, '84.4', 'Áo Thun Sweater Ngân Hà 4 Element Ver11', 'black', null, 86, './app/assets/images/products/product-5.jpg');

insert into product (id, price, name, color, description, quantity_remain) values (1, '69.9', 'Áo Thun Cổ Tròn Đơn Giản Linh Vật Rồng Ver23', 'black', null, 69);
insert into product (id, price, name, color, description, quantity_remain) values (2, '78.9', 'Áo Thun Cổ Trụ Tối Giản M4', 'white', null, 39);
insert into product (id, price, name, color, description, quantity_remain) values (3, '81.8', 'Áo Thun Cổ Trụ Y Nguyên Bản 18+ Ver62', 'black', null, 100);
insert into product (id, price, name, color, description, quantity_remain) values (4, '82.2', 'Áo Thun Sweater Tối Giản M21', 'green', null, 33);
insert into product (id, price, name, color, description, quantity_remain) values (5, '84.4', 'Áo Khoác Bomber Y Nguyên Bản 18- Ver28', 'green', null, 86);
insert into product (id, price, name, color, description, quantity_remain) values (6, '90.0', 'Quần Jogger Tối Giản M10', 'black', null, 86);
insert into product (id, price, name, color, description, quantity_remain) values (7, '75.0', 'Áo Sơ Mi Tay Dài Sợi Modal Tối Giản M11', 'w', null, 86);
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
(1, 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-on-gian-linh-vat-rong-ver23-0021771/203c4bdf-4567-3301-1938-0019a4bfdb70.jpg?w=800'),
(1, 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-on-gian-linh-vat-rong-ver23-0021771/5241a213-359c-2f01-fad7-0019a4bfdb56.jpg?w=800'),
(1, 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-on-gian-linh-vat-rong-ver23-0021771/4512710f-ade9-3101-482f-0019a4bfdb63.jpg?w=800'),
(2, 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-toi-gian-m4-0020888/00a4f0a0-af86-b600-0642-001936b43912.jpg?w=800'),
(2, 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-toi-gian-m4-0020888/f39560a0-41da-b900-83e4-001936b43918.jpg?w=800'),
(2, 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-toi-gian-m4-0020888/1be68355-6c4e-ba00-6a72-001936b43920.jpg?w=800'),
(3, 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-y-nguyen-ban-18-ver62-0021122/e2ac946a-02d0-8c00-45d6-001962b16039.jpg?w=800'),
(3, 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-y-nguyen-ban-18-ver62-0021122/2ec7cd4b-44cc-9000-abe8-001962b1604c.jpg?w=800'),
(3, 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-y-nguyen-ban-18-ver62-0021122/f538e868-3e7d-8d00-7cc1-001962b1603e.jpg?w=800'),
(4, 'https://cdn2.yame.vn/pimg/ao-thun-sweater-toi-gian-m21-0021550/fcfaf7fa-6a4c-3700-9a97-001999b1ada9.jpg?w=800'),
(4, 'https://cdn2.yame.vn/pimg/ao-thun-sweater-toi-gian-m21-0021550/ca59ed01-6715-3500-bb07-001999b1ad9b.jpg?w=800'),
(4, 'https://cdn2.yame.vn/pimg/ao-thun-sweater-toi-gian-m21-0021550/4feb593e-5bb6-3300-c91b-001999b1ad91.jpg?w=800'),
(5, 'https://cdn2.yame.vn/pimg/ao-khoac-bomber-y-nguyen-ban-18--ver28-0020822/6e89e104-dfe2-0601-6521-001941b994fa.jpg?w=800'),
(5, 'https://cdn2.yame.vn/pimg/ao-khoac-bomber-y-nguyen-ban-18--ver28-0020822/f2955876-ab16-0801-d2e6-001941b99508.jpg?w=800'),
(5, 'https://cdn2.yame.vn/pimg/ao-khoac-bomber-y-nguyen-ban-18--ver28-0020822/f4991751-42d4-0701-a5c5-001941b99503.jpg?w=800'),
(6, 'https://cdn2.yame.vn/pimg/quan-jogger-toi-gian-m10-0021159/c506db1a-665d-9100-1e40-00195d323464.jpg?w=800'),
(6, 'https://cdn2.yame.vn/pimg/quan-jogger-toi-gian-m10-0021159/66cc97e8-4cbc-9200-4b1e-00195d323466.jpg?w=800'),
(6, 'https://cdn2.yame.vn/pimg/quan-jogger-toi-gian-m10-0021159/cc42fa7c-3efa-9300-5712-00195d323468.jpg?w=800'),
(7, 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/6370ad73-fd15-5000-ab34-0018231a50ee.jpg?w=800'),
(7, 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/a38f35a4-0c71-5200-6fb8-0018231a50f3.jpg?w=800'),
(7, 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/5deebfc1-736c-0300-b54c-00195ca23fee.jpg?w=800');
-- (1, './app/assets/images/more_products/1-2-2-1.jpg'),
-- (1, './app/assets/images/more_products/1-2-2-2.jpg'),
-- (1, './app/assets/images/more_products/1-2-2-3.jpg'),
-- (2, './app/assets/images/more_products/1-3-1-1.jpg'),
-- (2, './app/assets/images/more_products/1-3-1-2.jpg'),
-- (2, './app/assets/images/more_products/1-3-1-3.jpg'),
-- (3, './app/assets/images/more_products/1-3-3-1.jpg'),
-- (3, './app/assets/images/more_products/1-3-3-2.jpg'),
-- (3, './app/assets/images/more_products/1-3-3-3.jpg'),
-- (4, './app/assets/images/more_products/1-4-1-1.jpg'),
-- (4, './app/assets/images/more_products/1-4-1-2.jpg'),
-- (4, './app/assets/images/more_products/1-4-1-3.jpg'),
-- (5, './app/assets/images/more_products/1-4-2-1.jpg'),
-- (5, './app/assets/images/more_products/1-4-2-2.jpg'),
-- (5, './app/assets/images/more_products/1-4-2-3.jpg');

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