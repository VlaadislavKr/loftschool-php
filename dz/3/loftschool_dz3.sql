/*
 Navicat Premium Data Transfer

 Source Server         : openserver default
 Source Server Type    : MySQL
 Source Server Version : 100313
 Source Host           : localhost:3306
 Source Schema         : loftschool_dz3

 Target Server Type    : MySQL
 Target Server Version : 100313
 File Encoding         : 65001

 Date: 22/06/2020 22:33:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date` datetime(6) NOT NULL,
  `street` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `house` int(3) UNSIGNED NOT NULL,
  `corps` tinyint(2) UNSIGNED NULL DEFAULT NULL,
  `flat` tinyint(3) UNSIGNED NOT NULL,
  `floor` tinyint(2) UNSIGNED NOT NULL,
  `change` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `pay_card` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `no_callback` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `comment` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES (1, 18, '2020-06-03 21:24:55.000000', '3', 4, 5, 6, 7, 0, 0, 0, NULL);
INSERT INTO `orders` VALUES (7, 42, '2020-06-03 22:25:22.000000', '21', 12, 21, 21, 21, 49, 49, 49, NULL);
INSERT INTO `orders` VALUES (8, 43, '2020-06-03 22:25:58.000000', '21', 12, 21, 21, 21, 49, 49, 49, NULL);
INSERT INTO `orders` VALUES (9, 44, '2020-06-03 22:28:00.000000', '21', 12, 21, 21, 21, 1, 1, 1, NULL);
INSERT INTO `orders` VALUES (10, 46, '2020-06-03 22:29:15.000000', '12', 3, 3, 3, 32, 0, 1, 1, NULL);
INSERT INTO `orders` VALUES (11, 47, '2020-06-03 22:32:56.000000', '123', 2, 2, 2, 2, 1, 0, 1, NULL);
INSERT INTO `orders` VALUES (12, 49, '2020-06-03 22:34:53.000000', '12', 2, 2, 2, 2, 0, 0, 0, NULL);
INSERT INTO `orders` VALUES (13, 50, '2020-06-03 22:35:55.000000', '123', 2, 2, 12, 2, 0, 0, 1, NULL);
INSERT INTO `orders` VALUES (14, 51, '2020-06-03 22:36:32.000000', '12', 2, 2, 2, 2, 0, 1, 0, NULL);
INSERT INTO `orders` VALUES (15, 61, '2020-06-03 22:52:23.000000', 'pushkina', 12, 1, 31, 3, 0, 1, 0, NULL);
INSERT INTO `orders` VALUES (16, 63, '2020-06-03 22:56:16.000000', '34', 23, 23, 23, 23, 1, 0, 0, 'коммент');
INSERT INTO `orders` VALUES (17, 64, '2020-06-03 23:17:42.000000', '3', 3, 3, 3, 3, 0, 0, 0, '');
INSERT INTO `orders` VALUES (18, 1, '2020-06-03 23:27:17.000000', 'asd', 12, 21, 21, 12, 0, 1, 0, '21');
INSERT INTO `orders` VALUES (19, 1, '2020-06-03 23:33:45.000000', '12', 21, 12, 21, 12, 0, 0, 0, '12');
INSERT INTO `orders` VALUES (20, 1, '2020-06-03 23:38:37.000000', '2', 2, 7, 2, 2, 0, 0, 1, '7');
INSERT INTO `orders` VALUES (21, 1, '2020-06-03 23:38:59.000000', '6', 4, 8, 2, 2, 0, 0, 0, '');
INSERT INTO `orders` VALUES (22, 1, '2020-06-03 23:43:12.000000', '12', 12, 2, 21, 12, 0, 0, 0, '');
INSERT INTO `orders` VALUES (23, 1, '2020-06-03 23:45:17.000000', '123', 213, 2, 32, 121, 0, 0, 0, '');
INSERT INTO `orders` VALUES (24, 1, '2020-06-03 23:45:17.000000', '123', 213, 2, 32, 121, 0, 0, 0, '');
INSERT INTO `orders` VALUES (25, 1, '2020-06-03 23:47:57.000000', '2', 2, 1, 2, 2, 0, 0, 0, '');
INSERT INTO `orders` VALUES (26, 1, '2020-06-03 23:48:54.000000', '21', 2, 1, 2, 2, 0, 0, 0, '');
INSERT INTO `orders` VALUES (27, 1, '2020-06-03 23:50:00.000000', '2', 2, 1, 2, 2, 0, 0, 0, '');
INSERT INTO `orders` VALUES (28, 1, '2020-06-03 23:50:47.000000', '2', 2, NULL, 2, 2, 0, 0, 0, '');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `order_count` int(11) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 65 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Vlad', '123456', 'exsoft.org@gmail.com', 26);
INSERT INTO `users` VALUES (39, '32', '+7 (432) ___ __ __', '1exsoft.org@gmail.com', 1);
INSERT INTO `users` VALUES (40, '32', '+7 (432) ___ __ __', '2exsoft.org@gmail.com', 1);
INSERT INTO `users` VALUES (41, '21', '+7 (12_) ___ __ __', '3exsoft.org@gmail.com', 1);
INSERT INTO `users` VALUES (42, '21', '+7 (12_) ___ __ __', '4exsoft.org@gmail.com', 1);
INSERT INTO `users` VALUES (43, '21', '+7 (12_) ___ __ __', '5exsoft.org@gmail.com', 1);
INSERT INTO `users` VALUES (44, '21', '+7 (12_) ___ __ __', '6exsoft.org@gmail.com', 1);
INSERT INTO `users` VALUES (45, '21', '+7 (12_) ___ __ __', '7exsoft.org@gmail.com', 1);
INSERT INTO `users` VALUES (46, '23', '+7 (123) ___ __ __', '8exsoft.org@gmail.com', 1);
INSERT INTO `users` VALUES (47, '12', '+7 (213) 3__ __ __', '9exsoft.org@gmail.com', 1);
INSERT INTO `users` VALUES (48, '12', '+7 (___) ___ 21 3_', '11exsoft.org@gmail.com', 1);
INSERT INTO `users` VALUES (49, '123', '+7 (___) ___ __ _1', '12exsoft.org@gmail.com', 1);
INSERT INTO `users` VALUES (50, '12', '+7 (123) ___ __ __', '13exsoft.org@gmail.com', 1);
INSERT INTO `users` VALUES (51, '123', '+7 (___) _12 __ __', '14exsoft.org@gmail.com', 1);
INSERT INTO `users` VALUES (52, 'Anna', '+7 (564) 789 65 1_', 'anna@mail.ru', 1);
INSERT INTO `users` VALUES (53, '', '', 'e213xsoft.org@gmail.com', 1);
INSERT INTO `users` VALUES (54, '', '', 'exs213oft.org@gmail.com', 1);
INSERT INTO `users` VALUES (55, '', '', 'exssdsaoft.org@gmail.com', 1);
INSERT INTO `users` VALUES (56, '', '', 'exsasdasdaoft.org@gmail.com', 1);
INSERT INTO `users` VALUES (57, '', '', 'exsoft.432org@gmail.com', 1);
INSERT INTO `users` VALUES (58, '', '', 'exsoft.o123112rg@gmail.com', 1);
INSERT INTO `users` VALUES (59, '', '', 'exsofsdadat.org@gmail.com', 1);
INSERT INTO `users` VALUES (60, '', '', 'exsoft.org123131@gmail.com', 1);
INSERT INTO `users` VALUES (61, 'igor', '+7 (123) 123 12 31', 'exsowqewqft.org@gmail.com', 1);
INSERT INTO `users` VALUES (62, 'asd', '+7 (324) 32_ __ __', 'exsoftsadas.org@gmail.com', 1);
INSERT INTO `users` VALUES (63, 'йцу', '+7 (434) 2__ __ __', 'exdsfsdsoft.org@gmail.com', 1);
INSERT INTO `users` VALUES (64, '23', '+7 (__3) ___ __ __', 'exsoft.org@gmail.com', 22);

SET FOREIGN_KEY_CHECKS = 1;
