CREATE DATABASE `shop` /*!40100 DEFAULT CHARACTER SET utf8 */;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_title` varchar(45) DEFAULT NULL,
  `p_price` varchar(45) DEFAULT NULL,
  `p_img` varchar(45) DEFAULT NULL,
  `p_sku` varchar(45) DEFAULT NULL,
  `p_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;


INSERT INTO `shop`.`products` (`p_title`,`p_price`,`p_img`,`p_sku`,`p_desc`) VALUES ('Minnie Plush', '29.99', 'minnie.jpg', '1', 'Nullam mollis felis dolor, eget lobortis lacus eleifend ut. Morbi condimentum ligula nec nisl tristique, vitae accumsan nisi auctor. Aliquam est justo, consequat ullamcorper pulvinar nec, sagittis id odio. Morbi auctor vitae ante vitae bibendum.');
INSERT INTO `shop`.`products` (`p_title`,`p_price`,`p_img`,`p_sku`,`p_desc`) VALUES ('Mickey Plush', '29.99', 'mickey.jpg', '2', 'Nullam mollis felis dolor, eget lobortis lacus eleifend ut. Morbi condimentum ligula nec nisl tristique, vitae accumsan nisi auctor. Aliquam est justo, consequat ullamcorper pulvinar nec, sagittis id odio. Morbi auctor vitae ante vitae bibendum.');
INSERT INTO `shop`.`products` (`p_title`,`p_price`,`p_img`,`p_sku`,`p_desc`) VALUES ('Eevee Plush', '19.99', 'eevee.jpg', '3', 'Nullam mollis felis dolor, eget lobortis lacus eleifend ut. Morbi condimentum ligula nec nisl tristique, vitae accumsan nisi auctor. Aliquam est justo, consequat ullamcorper pulvinar nec, sagittis id odio. Morbi auctor vitae ante vitae bibendum.');
INSERT INTO `shop`.`products` (`p_title`,`p_price`,`p_img`,`p_sku`,`p_desc`) VALUES ('Plush Bundle', '59.99', 'bundle.jpg', '4', 'Nullam mollis felis dolor, eget lobortis lacus eleifend ut. Morbi condimentum ligula nec nisl tristique, vitae accumsan nisi auctor. Aliquam est justo, consequat ullamcorper pulvinar nec, sagittis id odio. Morbi auctor vitae ante vitae bibendum.');
INSERT INTO `shop`.`products` (`p_title`,`p_price`,`p_img`,`p_sku`,`p_desc`) VALUES ('Pikachu Plush', '24.99', 'pikachu.jpg', '5', 'Nullam mollis felis dolor, eget lobortis lacus eleifend ut. Morbi condimentum ligula nec nisl tristique, vitae accumsan nisi auctor. Aliquam est justo, consequat ullamcorper pulvinar nec, sagittis id odio. Morbi auctor vitae ante vitae bibendum.');
INSERT INTO `shop`.`products` (`p_title`,`p_price`,`p_img`,`p_sku`,`p_desc`) VALUES ('Pokemon Plush', '24.99', 'pokemon.jpg', '6', 'Nullam mollis felis dolor, eget lobortis lacus eleifend ut. Morbi condimentum ligula nec nisl tristique, vitae accumsan nisi auctor. Aliquam est justo, consequat ullamcorper pulvinar nec, sagittis id odio. Morbi auctor vitae ante vitae bibendum.');





