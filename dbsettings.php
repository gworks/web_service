/*

CREATE DATABASE `webservice_db` ;


GRANT ALL ON `webservice_db` . * TO 'webservice_user'@'localhost' IDENTIFIED BY 'DNxDfdEj5raVDYGV';

CREATE TABLE `webservice_db`.`users` (
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`name` VARCHAR( 255 )  NULL ,
`email` VARCHAR( 255 )  NULL ,
`password` VARCHAR( 255 )  NULL ,
`created` DATETIME  NULL ,
`modified` DATETIME  NULL ,
UNIQUE (
`email`
)
) ENGINE = MYISAM ;


CREATE TABLE IF NOT EXISTS `sys_mente` (
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `directry` varchar(250) NOT NULL DEFAULT '',
  `mente` enum('yes','no') NOT NULL,
  `hyoji` enum('yes','no') NOT NULL,
  `hyoji_jun` int(11) NOT NULL DEFAULT '0',
 `created` DATETIME  NULL ,
 `modified` DATETIME  NULL ,
 KEY `no` (`no`)
) ENGINE=MyISAM  COMMENT='システムファイル毎のメンテナンス情報' ;




*/


