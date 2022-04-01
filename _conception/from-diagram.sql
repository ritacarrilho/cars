CREATE TABLE `users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(255),
  `username` varchar(50),
  `hash` varchar(128)
);

CREATE TABLE `cars` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(50),
  `price` decimal(8,2),
  `brand_id` int,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `brands` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `label` varchar(50)
);

ALTER TABLE `cars` ADD CONSTRAINT `FK_car_brand` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`);
