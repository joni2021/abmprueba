/*
Navicat MySQL Data Transfer

Source Server         : Joni
Source Server Version : 50539
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50539
File Encoding         : 65001

Date: 2015-06-10 01:11:31
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
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idNivel`),
  KEY `niveles_token_index` (`token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of niveles
-- ----------------------------
INSERT INTO `niveles` VALUES ('1', 'admin', '', '0000-00-00 00:00:00');
INSERT INTO `niveles` VALUES ('2', 'user', '', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `sexos`
-- ----------------------------
DROP TABLE IF EXISTS `sexos`;
CREATE TABLE `sexos` (
  `idSexo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sexo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idSexo`),
  KEY `sexos_token_index` (`token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of sexos
-- ----------------------------
INSERT INTO `sexos` VALUES ('1', 'femenino', '', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for `usuarios`
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fkSexo` int(11) NOT NULL,
  `fkNivel` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'Estell', 'Ebert', 'Heathcote.Eldon@hotmail.com', '2', '2', 'Shanahan.Heber', '$2y$10$2G8or2PQtjgxfRo19AGsSeBSamp4j8Bb2ooqV3720/35p1GCaZOhW', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('2', 'Devante', 'Shanahan', 'Hilda48@hotmail.com', '2', '2', 'mStehr', '$2y$10$LrbTY599BR1hK67T7ZYtt.SwPitji4uhiLg7BTeTxY6jORQGolT5S', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('3', 'Josefina', 'Krajcik', 'Leffler.Lynn@Schaden.net', '1', '2', 'Josefa', '$2y$10$9IF6jYK9sOl/GucUHOaPXOwd.N16qBcUUcsSOXQmKVzzLxhoVC0N.', '', '0000-00-00 00:00:00', '2015-06-10 04:09:25');
INSERT INTO `usuarios` VALUES ('4', 'Destiney', 'Bahringer', 'Savion.Deckow@hotmail.com', '2', '2', 'Clifton39', '$2y$10$UOkAHddlW4en5Ig5/jApweCTV2hDHhHnJwyYyLmB5DiYEhXr7zp6C', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('5', 'Deja', 'VonRueden', 'Xavier.OKon@Bayer.net', '1', '2', 'Martin.Streich', '$2y$10$38ZlurPllIL2aZ85GvfJ.u2.zGhRaCJ6kF2hB9zBNiiiQDdxnjQXe', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('6', 'Carlotta', 'Thiel', 'Lorena.VonRueden@hotmail.com', '2', '2', 'gMills', '$2y$10$WULURuprdnK6ewF32JdpzeX9QLoqeBMu8qivVw5xJ0l.mpa.wwDmy', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('7', 'Dewitt', 'Johns', 'Maymie.Bogisich@Hirthe.com', '1', '2', 'Adams.Dayana', '$2y$10$qKlwLq4tf.FUnPPRGq8JGeuuVVKP6T0Kvkfa0wRq7OfcGMo74.iqq', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('8', 'Gordon', 'Heller', 'jWilderman@yahoo.com', '1', '2', 'Mosciski.Alexane', '$2y$10$rZtoWYFVDRNIhgshPdRi4udGN.IZCY1uGunzaOQRzKxPhw9sDyNOS', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('9', 'Daniela', 'Abernathy', 'Leonor79@yahoo.com', '1', '2', 'Klocko.Zola', '$2y$10$5HEyYgn8DNWC/y.YEtIRU.i/W5YZU296.O0XOC7vRMLbX1TOTq.mq', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('10', 'Delfina', 'Batz', 'Evan17@Reilly.com', '2', '2', 'Jovan16', '$2y$10$DsI3cUshZzJ2Jbh6nyKFyOSLpcswDb9zJmNEIPhWEwfQ.5Z1Qy3vu', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('11', 'Rahsaan', 'Hoppe', 'hUpton@Huels.org', '1', '2', 'Magdalen.Jast', '$2y$10$mudEPjCqss.vfE03pMUEcuoOaGSua9jtAke0w2nXsoxtGhp8iCdii', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('12', 'Toney', 'Erdman', 'Macie86@yahoo.com', '1', '2', 'Odell.Stokes', '$2y$10$zGuJEpV7NtsfMb2NeMKbzONk8LUZBGsqR9.bvUkl8Wr.DrVbt.KWm', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('13', 'Ora', 'Armstrong', 'lLegros@gmail.com', '1', '2', 'Flossie47', '$2y$10$CoAtO6L1Nrc/Ab1RSiKjM.IKYWET.AtatwNtqkPFU.mYJKcZv3dvG', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('14', 'Edna', 'Kessler', 'pRolfson@hotmail.com', '2', '2', 'kKuhic', '$2y$10$ZzZAEJS61Od0cRgXKnCV7uS6w9pMmvrm6UTTrevPd9jtYoMfWUCyG', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('15', 'Julia', 'McGlynn', 'Sierra28@Hoppe.org', '1', '2', 'Jarod.Schmidt', '$2y$10$/iRpT7HczmqJvEd3hBPKmeF1qdfvoubTI1FIhODUFTq.vzJsItd1.', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('16', 'Sylvan', 'Luettgen', 'gHowell@Turner.info', '1', '2', 'Verona.Prosacco', '$2y$10$ntcGQEqwJJO.60vnS8o.IuBEPNRsTeMfySpkpwi2z8adcUlhlhK32', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('17', 'Judge', 'Mosciski', 'Ryder.Oberbrunner@yahoo.com', '1', '2', 'Osvaldo93', '$2y$10$WXseV05e0ge/k4IOA3s7zOL4fYxX.dPxVcE./NkYuBwtw0NVYccp2', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('18', 'Brock', 'Hermann', 'Abbey08@gmail.com', '1', '2', 'xCollier', '$2y$10$pk8Ha00S7LQrpp5uq5ZBk.bQO81dXf8Qa4D8Rac4FQ5l3kNgPQ/Aa', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('19', 'Denis', 'West', 'Hailee.Hoppe@gmail.com', '2', '2', 'Wyman.Ernestine', '$2y$10$wKy/9sypU2qL2Pkse5r5G.uR5h08IUCw5AfdDzlZuCDtr8A8/37Em', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('20', 'Joanne', 'Olson', 'gWisozk@Haley.com', '2', '2', 'Lemke.Royal', '$2y$10$Az2Q84zIgzVc4Rgot0Ry4.qQF6vRA8k2SLQmtR/8yobM/lnyrZmmW', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('21', 'Jeremy', 'Hagenes', 'Mitchell.Yasmin@Streich.com', '1', '2', 'Kasandra.Towne', '$2y$10$WFm9LyjOhztH4gEcg7YOmOeHFujvdpP3nDezXGqt9GUi4nAPuwsGK', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('22', 'Marietta', 'Hamill', 'Toy.Zachary@Hagenes.com', '2', '2', 'Darby.Rice', '$2y$10$pSRALgwPY/Qgc6oMW5Bbv.b/0xpPXPxEENqjBwyd4Ezq9/N2BdStO', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('23', 'Ferne', 'Zemlak', 'Orland11@Dickens.com', '1', '2', 'Hilll.Ursula', '$2y$10$1ZLYXdp47lbjPwHzaUwoBev8iJnjI8FpZBryM.Eep4X1mOeMBkeFu', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('24', 'Lemuel', 'Dach', 'Hoeger.Hailee@yahoo.com', '2', '2', 'Ondricka.Wava', '$2y$10$cJ8n/QbRAKLRr8uZNzvIo.NMoja4KGnQAXeT02z.UQXjI8kd9jOHq', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('25', 'Chadd', 'Kutch', 'dSchmitt@Wiza.net', '1', '2', 'nBoehm', '$2y$10$rc5gVagmxtCl3JgTeviw/.Hz8EPruRgcInxC5tUWc50HtSPZHiRq6', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('26', 'Patsy', 'Yost', 'Marcia00@Abshire.com', '1', '2', 'Manley.Shields', '$2y$10$Za6L.RsTYYyi3uGrgwy0BePdxrPvaSJTmZrO9grhEsrRDe2Zv0RWO', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('27', 'Gladyce', 'Morar', 'dSpinka@Effertz.info', '1', '2', 'Michelle.Green', '$2y$10$2308zdez05XW.bJFGrwhbeeeF/24zL5Np6mpdzMGWGUlCdY8tOmn2', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('28', 'Janet', 'Welch', 'oOsinski@gmail.com', '2', '2', 'Candice.Beahan', '$2y$10$LxFMIRjloPg7m/BjjxPmie4/WNrtFlly.5ofB2YTzw.zS3NOSbRsK', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('29', 'Lillian', 'Ernser', 'Laura34@Mohr.com', '2', '2', 'qGoodwin', '$2y$10$5joZIZLPP4EKvK2NCEzfJuzjMAi5BmmJwWphNJRmdrsamOLNgmE1S', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('30', 'Jena', 'Quitzon', 'mHuel@yahoo.com', '2', '2', 'iBednar', '$2y$10$2tKcU2Gr2IymDt9etyYDReM4zilhZzLqFHxi8qC6eER.fnPnU0hQm', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('31', 'Susanna', 'Marvin', 'Dean.Renner@Bahringer.org', '1', '2', 'qDuBuque', '$2y$10$UX9/c3ZXCit7WL6WFdwJEuxuWfsTYKOq3/s7vCCcatXAOHjjgT8t.', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('32', 'Michaela', 'Bauch', 'Karli29@Bernhard.com', '1', '2', 'qHansen', '$2y$10$lHwXRblz4hPZ51JmHcseT.5GGayk1mTGwC6kCbHRWQWrv8quzAvH2', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('33', 'Paxton', 'Anderson', 'iSchaden@gmail.com', '2', '2', 'Amelie77', '$2y$10$KDfHAS/l.xPHlVlpPvb8l.C0sSF5xkXv234QqvOJtBMrxQhUlqASK', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('34', 'Bill', 'O\'Hara', 'uFeeney@hotmail.com', '2', '2', 'Ethan.Hickle', '$2y$10$q4fM8sqkQXw/ZrRhZIzKQeVFQ.EerbKyvO4lNluMNeVu/x71zC8B6', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('35', 'Deondre', 'Kunze', 'eHomenick@yahoo.com', '1', '2', 'dPredovic', '$2y$10$Wo0WH5H5ApH0PMeomMDE6Owxb/qDxzLivvYdMui3IkyUmkRy7VgOO', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('36', 'Charlene', 'Dooley', 'eLeannon@hotmail.com', '2', '2', 'Alexandrea.Macejkovic', '$2y$10$XIDjfD.1UrlFWrfdd4ISe.jCycko7l8w8JSFtHaT7.bmcdCcrDFrK', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('37', 'Kaitlyn', 'Abernathy', 'Louvenia01@hotmail.com', '2', '2', 'Travon27', '$2y$10$JbRXLOC8u.GLy1CePGy0BOi.xVy8KSWWM0lWqq5//pIUSyng511xy', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('38', 'Geraldine', 'Wiza', 'Jerde.Nona@Becker.com', '1', '2', 'Jacquelyn29', '$2y$10$I2a1gfmpxe9PsuAcDRqnZOniNdiMOFC7.tElQAC2jkjncdr0ArOQ.', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('39', 'Davonte', 'Okuneva', 'gBreitenberg@Jacobson.org', '2', '2', 'Waelchi.Immanuel', '$2y$10$pCZSFLBpQQYfXpowK7ZKves3aft.dsF.4zYWCxc/0KYxuESn6ckie', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('40', 'Kaitlyn', 'Terry', 'Jakayla.Baumbach@Lind.com', '1', '2', 'Cali58', '$2y$10$R/6Jd/semNIBrPynHsRiz.DxckkJtYkKG18yctFsRLy5kGsE37M6.', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `usuarios` VALUES ('41', 'Delfina', 'Batz', '', '0', '2', 'Delfi55', '$2y$10$0dVcKPKMdTFJiQnpUsIh3Ou.JJj8dpRcNrkGwlaE8Pbc8dRQoWMCu', '', '2015-06-10 03:54:39', '2015-06-10 03:54:39');
INSERT INTO `usuarios` VALUES ('42', 'Josefina', 'Krajcik', '', '0', '2', 'Josefa', '$2y$10$/IFQEPMVxpYFO9g8wESOM.n.dxilUoZer5uIfTPhSoN8deaPL8Wt.', '', '2015-06-10 04:00:41', '2015-06-10 04:00:41');
