/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-06-17 11:28:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2015_06_08_222625_niveles', '1');
INSERT INTO `migrations` VALUES ('2015_06_08_222950_sexos', '1');

-- ----------------------------
-- Table structure for `niveles`
-- ----------------------------
DROP TABLE IF EXISTS `niveles`;
CREATE TABLE `niveles` (
  `idNivel` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nivel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idNivel`),
  KEY `niveles_remember_token_index` (`remember_token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of niveles
-- ----------------------------
INSERT INTO `niveles` VALUES ('1', 'admin', '', '0000-00-00 00:00:00');
INSERT INTO `niveles` VALUES ('2', 'user', '', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `productos`
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `producto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `precio` decimal(6,2) NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fkUsuario` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `estadoProducto` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('1', 'Dicki, Weber and Grant', 'Consequatur at consequuntur numquam iure. Earum deleniti quia et magnam nostrum voluptates.', '9999.99', 'img/productos/7cecc3dac845f0439d63589b5fadf7a5.jpg', '41', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0');
INSERT INTO `productos` VALUES ('2', 'Hand, Botsford and Moen', 'Velit qui ', '9999.99', '', '41', '0000-00-00 00:00:00', '2015-06-16 17:31:08', '1');
INSERT INTO `productos` VALUES ('3', 'Graham, Prosacco and Gulgowski', 'Ullam aut optio numquam sint corrupti aliquid est. Velit est aut aut quod.', '9999.99', 'img/productos/b6c2081b2716ebabad3fa8f55d7ab282.jpg', '11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0');
INSERT INTO `productos` VALUES ('4', 'Harvey-Nienow', 'Qui dolorem corporis consequatur temporibus. Sunt harum deserunt saepe laboriosam molestias et.', '9999.99', 'img/productos/b668c42d57bc7134b068a8cc4799689f.jpg', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `productos` VALUES ('5', 'Langosh, Satterfield and McGlynn', 'Eum ut occaecati consequatur et. Rerum non temporibus dolorem.', '9999.99', 'img/productos/3aa47cd47eb973258eb769c9b9838114.jpg', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `productos` VALUES ('6', 'Schultz Inc', 'Natus a doloremque vero. Optio omnis asperiores minima enim et aperiam. Odio commodi corrupti et.', '9999.99', 'img/productos/927338b700943feba43433e69d7304b6.jpg', '41', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `productos` VALUES ('7', 'Wehner, White and Beer', 'Sed quo tempore quidem. Vitae et asperiores similique et. Commodi enim rerum veritatis incidunt.', '9999.99', 'img/productos/7179f36928cca09632687fe7235b7aa3.jpg', '41', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `productos` VALUES ('8', 'Lebsack Ltd', 'Omnis aut labore cupiditate rem aliquam placeat. Non dolores dignissimos qui qui placeat voluptas.', '9999.99', 'img/productos/237e0a70bf9792c506a96ccdd2043ae8.jpg', '41', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `productos` VALUES ('9', 'Weimann, Graham and Koelpin', 'Dicta odio sed quidem aliquid odio. Qui autem eos et. Velit temporibus ea blanditiis omnis.', '9999.99', 'img/productos/42c923e21db776c523a5b007d785611b.jpg', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `productos` VALUES ('10', 'King, Simonis and McLaughlin', 'Et voluptatem nulla voluptatibus similique culpa accusamus. Ratione eos iste perferendis.', '9999.99', 'img/productos/263b41492d1f21cf105f4f84590efb44.jpg', '10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');

-- ----------------------------
-- Table structure for `sexos`
-- ----------------------------
DROP TABLE IF EXISTS `sexos`;
CREATE TABLE `sexos` (
  `idSexo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sexo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idSexo`),
  KEY `sexos_remember_token_index` (`remember_token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of sexos
-- ----------------------------
INSERT INTO `sexos` VALUES ('1', 'masculino', '', '0000-00-00 00:00:00');
INSERT INTO `sexos` VALUES ('2', 'femenino', '', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `usuarios`
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fkSexo` int(11) NOT NULL,
  `fkNivel` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `estado` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'Consuelo', 'Bradtke', 'sGulgowski@yahoo.com', '1', '2', 'Gardner15', '$2y$10$7KZ1id.fA9pUm3JSuAO4RODBq8nMvW6cqUoWtOktV1CUtbzqaeNEi', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('2', 'Julia', 'Will', 'Timmy.Greenholt@Block.com', '1', '2', 'Annetta67', '$2y$10$CECcPOCG05QiTDDovz3LSeElPvepd452A0/HcGZZ74eeSiXuzy3t.', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('3', 'Sally', 'Weber', 'OHara.Marty@Schuppe.com', '2', '2', 'Arnoldo.Powlowski', '$2y$10$M.sY1LXc7OFYLWuLrsBnF.1AyyF0DH81xyTm2TnotWDx1G6BBlBS2', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('4', 'Mariano', 'Larson', 'Austin.Hagenes@hotmail.com', '2', '2', 'dWilderman', '$2y$10$yA6C/1wun02rHAfKS9Jd.ejOjmNMJfrFRN/ABWpZfzYyXKag12SvC', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('5', 'Brayan', 'Wolf', 'Hubert22@hotmail.com', '1', '2', 'Nichole.Rath', '$2y$10$dVf8X4NhNHkHUI3iwRbZIOMeoOPBmxOE1OsCly56jK4FoI.q3IuVe', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('6', 'Soledad', 'Lehner', 'Liliana61@Kuhic.net', '1', '2', 'Gleichner.Tyreek', '$2y$10$x3lPagCOMgdMkNyImkNieuEPh7IPbn2o5tMPyaT8CQFcczH2rDPIW', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('7', 'Kevon', 'Lueilwitz', 'Valentin00@hotmail.com', '1', '2', 'Orn.Angeline', '$2y$10$IflK1Pv1DEVvCm4083VJleKWZEFdMIp8JFfwIUKMhJ4ZUvKHleWdm', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('8', 'Lelia', 'Sporer', 'Hahn.Antonetta@gmail.com', '2', '2', 'Arianna52', '$2y$10$3qIfRrzVnNmwHhu6ve8.7O1w/MOTvYao4wEf7/vkiYgCB6bMY28em', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('9', 'Dorian', 'Friesen', 'Rahsaan.Cartwright@Runolfsdottir.info', '1', '2', 'Schinner.Oma', '$2y$10$Ep2OoN7TOSXw4Fw.PCoB2.UNCKfKuInxt2p9IX1VRcp0Lso7djUEW', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('10', 'Ariel', 'Zemlak', 'Roberta.Bins@Little.biz', '1', '2', 'Batz.Christa', '$2y$10$AaKZ3CyigqFxZcw16Z7QPOBQRlYEGoVjPfefZhwZir.59A8uhrLpi', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('11', 'Kameron', 'Von', 'Alyson42@Schaden.org', '2', '2', 'fDickinson', '$2y$10$0clq7g.kMG34/.yhUsSA8uo0dwZKEb4k/8U2Dpbmk7C/IEoA8fYHy', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('12', 'Thurman', 'Murazik', 'Odessa.Hand@yahoo.com', '2', '2', 'Kiarra36', '$2y$10$TVufdjdjt7jfu3cxYQJ2CuewvYV3BuWnRwhiItBvK0qQuO/uYBSxe', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('13', 'Wiley', 'Zboncak', 'Dare.Celine@Kerluke.com', '2', '2', 'Joany.Mante', '$2y$10$Gb1CciHi7AkerqDVFDC79.LgeFhQSzhbE6fWkQWCNvwg9ly.HwqGq', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('14', 'Kraig', 'Williamson', 'fPaucek@yahoo.com', '1', '2', 'Dickens.Evelyn', '$2y$10$xfXOBsupPfeysYmJaKvVK.O8.ZbfC9hxxkiZIfE.NTLpVBnW.cTM.', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('15', 'Nola', 'Gusikowski', 'Schuster.Chadrick@yahoo.com', '2', '2', 'uRunolfsdottir', '$2y$10$qqu3UckC.jjPqgXb29ifiOnJh5R375vkFphAJWIn01ENIKqqCNxfq', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('16', 'Krista', 'Senger', 'Parisian.Marietta@hotmail.com', '2', '2', 'Belle.Block', '$2y$10$gBA5zkjQddOfoqfuCgsoSuTRhDdtorLvG1oiIQoZBtmOdxurqMchG', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('17', 'Nelson', 'Padberg', 'Buck85@gmail.com', '2', '2', 'Walker04', '$2y$10$BDcX0ewERvr.RVNmPLsoAuY3bI3X2Q2rWeUFBdefSQ9Rntz9n6xBW', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('18', 'Antonio', 'Schumm', 'Bernadine.Frami@hotmail.com', '1', '2', 'wHuel', '$2y$10$u8sium/zbT4zVtW5lePtceOUh7LpSAFfAfe/H8uA/1A2aDIT5.Jfu', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('19', 'Sister', 'Wilkinson', 'Ubaldo57@Rosenbaum.com', '1', '2', 'iBode', '$2y$10$xMw3BGBWB6lJhK7UBx3er.wZMQ8ZBS7r5ZmOHp7PabE6NXvDspcaS', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('20', 'Winona', 'Schulist', 'Ottis.Heathcote@Runte.com', '2', '2', 'Hyatt.Curtis', '$2y$10$/bBP.G5GT5rXsjB9npIbX.7QpeE8PYBV9xEIQ2Ms0wUqF9rAn61uy', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('21', 'Tyra', 'Lubowitz', 'Robel.Cassandra@Hodkiewicz.com', '1', '2', 'ySchmidt', '$2y$10$q4fziBNapxKu/cLen6VI2OeeJCDnSPUWtYo10n7bKAQH062AMIohG', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('22', 'Kristofer', 'Hermiston', 'Ruben.Kozey@yahoo.com', '1', '2', 'bAdams', '$2y$10$bTsVJwhYLEWfZciy39tmXOqaQOYquX5kqUk2Gng5srTSW5ic4h3T.', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('23', 'Lemuel', 'Christiansen', 'dDibbert@gmail.com', '2', '2', 'Dalton.Franecki', '$2y$10$9uoaCWN5l4bLGTiIxpUC/e38jfCpjmIHsMa/era5CcKd704AzYHTi', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('24', 'Louie', 'Howell', 'Cassin.Terrell@Blick.com', '1', '2', 'iMurray', '$2y$10$rSEU3Fhw3imc4p32s.kZM.iQSjLqY52mAJTvmN1ml4O3Wra.VS.Ua', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('25', 'Roberta', 'Dickinson', 'oTillman@Casper.org', '1', '2', 'Eichmann.Cecilia', '$2y$10$Fwr8J9gPRIGQT1LpA/Ge8OqqA6oL.D1Td9Ma4DtpVIXHk1MvzcBJm', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('26', 'Brain', 'Schinner', 'Brycen.Ortiz@Schmeler.com', '2', '2', 'Batz.Zackery', '$2y$10$6bRqpJjA3tHNoVCOyUth1OjJWxFCDncJXF52bbaoyokQXHxUjUCJe', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('27', 'Kiara', 'Quitzon', 'Bailey03@Wunsch.info', '1', '2', 'eParker', '$2y$10$E4efysa2VsShe/1GkzTrIeE0btepKzsgKNvkljB6oblg5E0Vfx/7m', '', '0000-00-00 00:00:00', '2015-06-16 12:13:42', '0');
INSERT INTO `usuarios` VALUES ('28', 'Bernadette', 'Jenkins', 'Schneider.Kameron@gmail.com', '1', '2', 'wWaters', '$2y$10$vtD4slpS6U2XrJckVPu0X.JuOzCXmZLJUQv1jNY7P.7LuPuHDsfbK', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('29', 'Aditya', 'Strosin', 'Kris.Benjamin@Johns.com', '2', '2', 'Horacio.Ullrich', '$2y$10$FxO8nu/znczLgfiJ5uS34.eqlkP7wwD6CN5AzDnFlDDJtK./UtPaG', '', '0000-00-00 00:00:00', '2015-06-16 12:22:28', '0');
INSERT INTO `usuarios` VALUES ('30', 'Brennan', 'Emard', 'Murray.Myah@gmail.com', '2', '2', 'Dalton.Schmeler', '$2y$10$7YMwwPoHa1MnDK3omcmTme.vT0.2SqE7slIB6Hi4toWgatu7XHLIC', '', '0000-00-00 00:00:00', '2015-06-16 12:13:44', '0');
INSERT INTO `usuarios` VALUES ('31', 'Wilhelmine', 'Yundt', 'Theodore88@Turner.com', '2', '2', 'Dameon28', '$2y$10$dq9xbzd.Bgn3wpBVD2FU7uFA2c15K80iez21vW9NYInLhz14vz7CS', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('32', 'Billy', 'Rutherford', 'wLesch@hotmail.com', '2', '2', 'Botsford.Sister', '$2y$10$Eoh2K78LGxZUIxde2ghO6OaidFBwBu2nxiKQVj9ly7pt8GW5Ap1RK', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('33', 'Santina', 'Graham', 'Rhett.OKeefe@yahoo.com', '1', '2', 'Idell.Leannon', '$2y$10$xwkn7lR/hnAjcyoCCoW/D.L41pmpS4TThAvmglwN9I3DnGpTIl1Fe', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('34', 'Katelyn', 'Donnelly', 'Schuppe.Jerrod@Corwin.com', '1', '2', 'Arvid70', '$2y$10$MQNahUlBV/mlAUk2Q7jnbeCesMIWjNkQUhGtGxeYZ6JwVLMQIuAxu', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('35', 'Enrico', 'Schinner', 'tKovacek@Bode.com', '2', '2', 'Edyth74', '$2y$10$U3WZUcAg2Iw/KroeW9gkJeHu4pK6CkL4QE1j6.1gblJ7unPM4XG62', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('36', 'Blaze', 'Walter', 'Talon73@Funk.com', '2', '2', 'Genoveva.Conn', '$2y$10$qdwcw9Ypvg9XyPChPQmzK.7KkkdMEI3sekHmcw0hcvfKIWDc0HwQq', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('37', 'Davin', 'Krajcik', 'uSchneider@yahoo.com', '2', '2', 'tLebsack', '$2y$10$dmYuKYvcEjqZgG..cdjFReSEm6WA0xyChrjDMympM1B5wxACXjEUG', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('38', 'Declan', 'Jacobs', 'Schuster.Mitchell@Ortiz.com', '1', '2', 'Enrico.Satterfield', '$2y$10$P8/xD896DAj9sLJYYnyhkO52GV9CMXlFl.zVBnySGRwGbn7.RryBO', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('39', 'Cheyenne', 'Cremin', 'Schowalter.Felipa@Willms.org', '2', '2', 'Jena59', '$2y$10$nsKIaAC52dLXZ3FhPBoUHu7YWmVRFMGnN/.63rdvku38tHEtkV22m', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `usuarios` VALUES ('40', 'Natalie', 'Kertzmann', 'vHansen@yahoo.com', '1', '2', 'sRitchie', '$2y$10$y1DL8v9OMvtqkIx6OMDMM.meD9Nc5nt0N6XrbaXN.1ZZHsr9EN5Ji', '', '0000-00-00 00:00:00', '2015-06-16 12:24:46', '1');
INSERT INTO `usuarios` VALUES ('41', 'Jonatan', 'Jorge', 'joni@mail.com', '1', '1', 'jjonatan', '$2y$10$LPfFnEmab7iBMWq.6QCVGOXxSLudpDkiSj4aY.m6BbTnO87KMOpIS', 'kIuREraQz3WgEDeFZh95ae30OudKiMUPjfi04rev5VkqXqg5RS3DHQxpzEZO', '2015-06-15 16:52:24', '2015-06-16 17:12:59', '1');
INSERT INTO `usuarios` VALUES ('49', 'saraza', 'asdasd', 'adsad@mail.com', '2', '2', 'saraza', '$2y$10$T971ORckwXXfvkiHYBMekuaKNja9YrAVD6L2O3AqLItVM8sq/sunO', '', '2015-06-17 14:00:44', '2015-06-17 14:00:44', '1');
