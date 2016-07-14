-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS user;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `create_at` varchar(11) DEFAULT '0',
  `update_at` varchar(11) DEFAULT '0',
  `login_ip` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`) USING BTREE,
  KEY `password` (`password`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3','0','0','');

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS article;
CREATE TABLE IF NOT EXISTS article (
id INT NOT NULL AUTO_INCREMENT, title VARCHAR(50),
intro TEXT,content TEXT,
imageURL VARCHAR(50),
createDate TIMESTAMP,
category VARCHAR(50),
PRIMARY KEY (id)
)DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `video`
-- ----------------------------
DROP TABLE IF EXISTS video;
CREATE TABLE IF NOT EXISTS video (
id INT NOT NULL AUTO_INCREMENT, 
title VARCHAR(50), 
intro TEXT,
videoURL VARCHAR(150),
localVideo VARCHAR(150),
imageUrl VARCHAR(150),
createDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
category VARCHAR(50),
PRIMARY KEY (id)
)DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `picture`
-- ----------------------------
DROP TABLE IF EXISTS picture;
CREATE TABLE IF NOT EXISTS picture (
id INT NOT NULL AUTO_INCREMENT, 
intro TEXT,
imageURL VARCHAR(150),
link VARCHAR(150),
createDate TIMESTAMP, 
category VARCHAR(50),
PRIMARY KEY (id)
)DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `contact`
-- ----------------------------
DROP TABLE IF EXISTS contact;
CREATE TABLE IF NOT EXISTS contact (
address VARCHAR(150),
mobilephone VARCHAR(150),
telPhone VARCHAR(150),
email VARCHAR(150),
qq VARCHAR(150)
)DEFAULT CHARSET=utf8;