CREATE TABLE `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pwd` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `sex` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `videos` (
  `id_video` int NOT NULL AUTO_INCREMENT,
  `title` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` float DEFAULT NULL,
  `filename` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` time DEFAULT NULL,
  `thumbnail` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int DEFAULT NULL,
  `likes` int DEFAULT NULL,
  `unlikes` int DEFAULT NULL,
  `state` enum('public','hidden','private') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `users_id_user` int NOT NULL,
  PRIMARY KEY (`id_video`),
  KEY `fk_videos_users1_idx` (`users_id_user`),
  CONSTRAINT `fk_videos_users1` FOREIGN KEY (`users_id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `channels` (
  `id_channel` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `users_id_user` int NOT NULL,
  PRIMARY KEY (`id_channel`),
  KEY `fk_channels_users1_idx` (`users_id_user`),
  CONSTRAINT `fk_channels_users1` FOREIGN KEY (`users_id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `comment like/unlike` (
  `id_comment_like/unlike` int NOT NULL AUTO_INCREMENT,
  `comments_id_comment` int NOT NULL,
  `comments_videos_id_video` int NOT NULL,
  `users_id_user` int NOT NULL,
  `option` enum('like','unlike') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_comment_like/unlike`,`comments_id_comment`,`comments_videos_id_video`,`users_id_user`),
  KEY `fk_comments_has_users_users1_idx` (`users_id_user`),
  KEY `fk_comments_has_users_comments1_idx` (`comments_id_comment`,`comments_videos_id_video`),
  CONSTRAINT `fk_comments_has_users_comments1` FOREIGN KEY (`comments_id_comment`, `comments_videos_id_video`) REFERENCES `comments` (`id_comment`, `videos_id_video`),
  CONSTRAINT `fk_comments_has_users_users1` FOREIGN KEY (`users_id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `comments` (
  `id_comment` int NOT NULL AUTO_INCREMENT,
  `text` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `videos_id_video` int NOT NULL,
  `users_id_user` int NOT NULL,
  PRIMARY KEY (`id_comment`,`videos_id_video`),
  KEY `fk_comments_videos1_idx` (`videos_id_video`),
  KEY `fk_comments_users1_idx` (`users_id_user`),
  CONSTRAINT `fk_comments_users1` FOREIGN KEY (`users_id_user`) REFERENCES `users` (`id_user`),
  CONSTRAINT `fk_comments_videos1` FOREIGN KEY (`videos_id_video`) REFERENCES `videos` (`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `follow` (
  `id_follow` int NOT NULL AUTO_INCREMENT,
  `users_id_user` int NOT NULL,
  `channels_id_channel` int NOT NULL,
  PRIMARY KEY (`id_follow`,`users_id_user`,`channels_id_channel`),
  KEY `fk_users_has_channels_channels1_idx` (`channels_id_channel`),
  KEY `fk_users_has_channels_users1_idx` (`users_id_user`),
  CONSTRAINT `fk_users_has_channels_channels1` FOREIGN KEY (`channels_id_channel`) REFERENCES `channels` (`id_channel`),
  CONSTRAINT `fk_users_has_channels_users1` FOREIGN KEY (`users_id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `included` (
  `id_included` int NOT NULL AUTO_INCREMENT,
  `playlists_id_playlist` int NOT NULL,
  `videos_id_video` int NOT NULL,
  PRIMARY KEY (`id_included`,`playlists_id_playlist`,`videos_id_video`),
  KEY `fk_playlists_has_videos_videos1_idx` (`videos_id_video`),
  KEY `fk_playlists_has_videos_playlists1_idx` (`playlists_id_playlist`),
  CONSTRAINT `fk_playlists_has_videos_playlists1` FOREIGN KEY (`playlists_id_playlist`) REFERENCES `playlists` (`id_playlist`),
  CONSTRAINT `fk_playlists_has_videos_videos1` FOREIGN KEY (`videos_id_video`) REFERENCES `videos` (`id_video`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `playlists` (
  `id_playlist` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `state` enum('public','private') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id_user` int NOT NULL,
  PRIMARY KEY (`id_playlist`),
  KEY `fk_playlists_users1_idx` (`users_id_user`),
  CONSTRAINT `fk_playlists_users1` FOREIGN KEY (`users_id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `tags` (
  `id_tag` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `video like/unlike` (
  `id_video_like/unlike` int NOT NULL AUTO_INCREMENT,
  `videos_id_video` int NOT NULL,
  `users_id_user` int NOT NULL,
  `option` enum('like','unlike') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id_video_like/unlike`,`videos_id_video`,`users_id_user`),
  KEY `fk_videos_has_users_users1_idx` (`users_id_user`),
  KEY `fk_videos_has_users_videos1_idx` (`videos_id_video`),
  CONSTRAINT `fk_videos_has_users_users1` FOREIGN KEY (`users_id_user`) REFERENCES `users` (`id_user`),
  CONSTRAINT `fk_videos_has_users_videos1` FOREIGN KEY (`videos_id_video`) REFERENCES `videos` (`id_video`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `videos_has_tags` (
  `id_videos_has_tags` int NOT NULL AUTO_INCREMENT,
  `videos_id_video` int NOT NULL,
  `tags_id_tag` int NOT NULL,
  PRIMARY KEY (`id_videos_has_tags`,`videos_id_video`,`tags_id_tag`),
  KEY `fk_videos_has_tags_tags1_idx` (`tags_id_tag`),
  KEY `fk_videos_has_tags_videos_idx` (`videos_id_video`),
  CONSTRAINT `fk_videos_has_tags_tags1` FOREIGN KEY (`tags_id_tag`) REFERENCES `tags` (`id_tag`),
  CONSTRAINT `fk_videos_has_tags_videos` FOREIGN KEY (`videos_id_video`) REFERENCES `videos` (`id_video`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- INSERTS ***********************************************************************************************

-- ************************************ USERS **********************************************************

INSERT INTO `m7-youtube`.`users` (`id_user`, `email`, `pwd`, `username`, `dob`, `sex`, `country`, `postcode`) VALUES ('1', 'enric@labaseweb.com', '1234', 'enric', '1968-01-03', 'male', 'cat', '08001');
INSERT INTO `m7-youtube`.`users` (`email`, `pwd`, `username`, `dob`, `sex`, `country`, `postcode`) VALUES ('sílvia', '5678', 'sílvia', '1975-05-18', 'female', 'cat', '08001');
INSERT INTO `m7-youtube`.`users` (`email`, `pwd`, `username`, `dob`, `sex`, `country`, `postcode`) VALUES ('pep', '9876', 'pep', '1978-06-26', 'male', 'and', '43470');
INSERT INTO `m7-youtube`.`users` (`email`, `pwd`, `username`, `dob`, `sex`, `country`, `postcode`) VALUES ('santi', '5432', 'santi', '1978-09-11', 'male', 'cub', '75005');

-- ************************************ VIDEOS **********************************************************

INSERT INTO `m7-youtube`.`videos` (`id_video`, `title`, `description`, `volume`, `filename`, `length`, `thumbnail`, `views`, `likes`, `dislikes`, `state`, `date_time`, `users_id_user`) VALUES ('1', 'sql tuto', 'tutorial sql', '500', 'sqltuto.avi', '0:11:18', 'tutosql.jpg', '85', '24', '8', 'public', '2021-03-23 21:14:25', '1');
INSERT INTO `m7-youtube`.`videos` (`title`, `description`, `volume`, `filename`, `length`, `thumbnail`, `views`, `likes`, `dislikes`, `state`, `date_time`, `users_id_user`) VALUES ('gim music', 'music for gim', '540', 'g-m.avi', '00:18:52', 'g-m.jpg', '156', '102', '11', 'public', '2021-05-18', '2');
INSERT INTO `m7-youtube`.`videos` (`title`, `description`, `volume`, `filename`, `length`, `thumbnail`, `views`, `likes`, `dislikes`, `state`, `date_time`, `users_id_user`) VALUES ('cb sailing', 'sailing in the costa brava', '680', 'cbs.avi', '00:22:25', 'cbs.jpg', '115', '93', '3', 'public', '2021-06-22', '3');
INSERT INTO `m7-youtube`.`videos` (`title`, `description`, `volume`, `filename`, `length`, `thumbnail`, `views`, `likes`, `dislikes`, `state`, `date_time`, `users_id_user`) VALUES ('24h futsal', '24h futsal Tiana championship', '620', 'fst.avi', '00:26:43', 'fst.jpg', '98', '56', '13', 'public', '2021-06-30', '4');

-- ************************************ VIDEOS LIKES/UNLIKES **********************************************************

INSERT INTO `m7-youtube`.`video like/unlike` (`id_video_like/unlike`, `videos_id_video`, `users_id_user`, `option`, `date/time`) VALUES ('1', '1', '2', 'like', '2021-05-19 23:25:26');
INSERT INTO `m7-youtube`.`video like/unlike` (`videos_id_video`, `users_id_user`, `option`, `date_time`) VALUES ('1', '3', 'unlike', '2021-06-05 12:56:41');
INSERT INTO `m7-youtube`.`video like/unlike` (`videos_id_video`, `users_id_user`, `option`, `date_time`) VALUES ('2', '3', 'like', '2021-06-30 20:22:08');
INSERT INTO `m7-youtube`.`video like/unlike` (`videos_id_video`, `users_id_user`, `option`, `date_time`) VALUES ('3', '1', 'like', '2021-06-30 23:36:18');
INSERT INTO `m7-youtube`.`video like/unlike` (`videos_id_video`, `users_id_user`, `option`, `date_time`) VALUES ('2', '4', 'unlike', '2021-07-02 15:13:56');

-- ************************************ TAGS **********************************************************

INSERT INTO `m7-youtube`.`tags` (`id_tag`, `name`) VALUES ('1', 'sports');
INSERT INTO `m7-youtube`.`tags` (`name`) VALUES ('music');
INSERT INTO `m7-youtube`.`tags` (`name`) VALUES ('summer');
INSERT INTO `m7-youtube`.`tags` (`name`) VALUES ('science');
INSERT INTO `m7-youtube`.`tags` (`name`) VALUES ('technology');

-- ************************************ VIDEOS HAS TAGS **********************************************************

INSERT INTO `m7-youtube`.`videos_has_tags` (`id_videos_has_tags`, `videos_id_video`, `tags_id_tag`) VALUES ('1', '1', '4');
INSERT INTO `m7-youtube`.`videos_has_tags` (`videos_id_video`, `tags_id_tag`) VALUES ('1', '5');
INSERT INTO `m7-youtube`.`videos_has_tags` (`videos_id_video`, `tags_id_tag`) VALUES ('2', '1');
INSERT INTO `m7-youtube`.`videos_has_tags` (`videos_id_video`, `tags_id_tag`) VALUES ('2', '2');
INSERT INTO `m7-youtube`.`videos_has_tags` (`videos_id_video`, `tags_id_tag`) VALUES ('3', '1');
INSERT INTO `m7-youtube`.`videos_has_tags` (`videos_id_video`, `tags_id_tag`) VALUES ('3', '3');
INSERT INTO `m7-youtube`.`videos_has_tags` (`videos_id_video`, `tags_id_tag`) VALUES ('4', '1');

-- ************************************ PLAYLISTS **********************************************************

INSERT INTO `m7-youtube`.`playlists` (`id_playlist`, `name`, `date`, `state`, `users_id_user`) VALUES ('1', 'tutto sports', '2021-07-02', 'public', '1');
INSERT INTO `m7-youtube`.`playlists` (`name`, `date`, `state`, `users_id_user`) VALUES ('summertime', '2021-07-15', 'private', '2');
INSERT INTO `m7-youtube`.`playlists` (`name`, `date`, `state`, `users_id_user`) VALUES ('it', '2021-07-18', 'public', '1');

-- ************************************ INCLUDED **********************************************************

INSERT INTO `m7-youtube`.`included` (`id_included`, `playlists_id_playlist`, `videos_id_video`) VALUES ('1', '1', '2');
INSERT INTO `m7-youtube`.`included` (`playlists_id_playlist`, `videos_id_video`) VALUES ('1', '3');
INSERT INTO `m7-youtube`.`included` (`playlists_id_playlist`, `videos_id_video`) VALUES ('1', '4');
INSERT INTO `m7-youtube`.`included` (`playlists_id_playlist`, `videos_id_video`) VALUES ('2', '3');
INSERT INTO `m7-youtube`.`included` (`playlists_id_playlist`, `videos_id_video`) VALUES ('2', '4');
INSERT INTO `m7-youtube`.`included` (`playlists_id_playlist`, `videos_id_video`) VALUES ('3', '1');

-- ************************************ CHANNELS **********************************************************

INSERT INTO `m7-youtube`.`channels` (`id_channel`, `name`, `description`, `date`, `users_id_user`) VALUES ('1', 'canal de l\'enric', 'cosetes de l\'enric', '2021-06-23', '1');
INSERT INTO `m7-youtube`.`channels` (`id_channel`, `name`, `description`, `date`, `users_id_user`) VALUES ('2', 'canal de la sílvia', 'cosetes de la sílvia', '2021-06-30', '2');
INSERT INTO `m7-youtube`.`channels` (`name`, `description`, `date`, `users_id_user`) VALUES ('canal del pep', 'cosetes del pep', '2021-07-03', '3');
INSERT INTO `m7-youtube`.`channels` (`name`, `description`, `date`, `users_id_user`) VALUES ('canal del santi', 'cosetes del santi', '2021-07-14', '4');

-- ************************************ FOLLOW **********************************************************

INSERT INTO `m7-youtube`.`follow` (`id_follow`, `users_id_user`, `channels_id_channel`) VALUES ('1', '1', '1');
INSERT INTO `m7-youtube`.`follow` (`users_id_user`, `channels_id_channel`) VALUES ('1', '2');
INSERT INTO `m7-youtube`.`follow` (`users_id_user`, `channels_id_channel`) VALUES ('1', '3');
INSERT INTO `m7-youtube`.`follow` (`users_id_user`, `channels_id_channel`) VALUES ('2', '1');
INSERT INTO `m7-youtube`.`follow` (`users_id_user`, `channels_id_channel`) VALUES ('2', '4');
INSERT INTO `m7-youtube`.`follow` (`users_id_user`, `channels_id_channel`) VALUES ('3', '1');
INSERT INTO `m7-youtube`.`follow` (`users_id_user`, `channels_id_channel`) VALUES ('3', '3');
INSERT INTO `m7-youtube`.`follow` (`users_id_user`, `channels_id_channel`) VALUES ('4', '2');


UPDATE `m7-youtube`.`follow` SET `id_follow` = '2', `users_id_user` = '1', `channels_id_channel` = '2' WHERE (`id_follow` = '11') and (`users_id_user` = '2') and (`channels_id_channel` = '1');
UPDATE `m7-youtube`.`follow` SET `id_follow` = '3', `users_id_user` = '1', `channels_id_channel` = '3' WHERE (`id_follow` = '13') and (`users_id_user` = '3') and (`channels_id_channel` = '1');
UPDATE `m7-youtube`.`follow` SET `id_follow` = '4', `users_id_user` = '2', `channels_id_channel` = '1' WHERE (`id_follow` = '9') and (`users_id_user` = '1') and (`channels_id_channel` = '2');
UPDATE `m7-youtube`.`follow` SET `id_follow` = '5', `users_id_user` = '2', `channels_id_channel` = '4' WHERE (`id_follow` = '15') and (`users_id_user` = '4') and (`channels_id_channel` = '2');
UPDATE `m7-youtube`.`follow` SET `id_follow` = '6', `users_id_user` = '3', `channels_id_channel` = '1' WHERE (`id_follow` = '10') and (`users_id_user` = '1') and (`channels_id_channel` = '3');
UPDATE `m7-youtube`.`follow` SET `id_follow` = '7' WHERE (`id_follow` = '14') and (`users_id_user` = '3') and (`channels_id_channel` = '3');
UPDATE `m7-youtube`.`follow` SET `id_follow` = '8', `users_id_user` = '4', `channels_id_channel` = '1' WHERE (`id_follow` = '12') and (`users_id_user` = '2') and (`channels_id_channel` = '4');