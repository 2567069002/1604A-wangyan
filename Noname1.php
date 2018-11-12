select * from user;

SHOW CREATE TABLE user;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `pwd` char(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8

TRUNCATE table user;

ALTER table user drop sex;

ALTER TABLE user CHANGE pwd sex TINYINT(2);

ALTER TABLE user add pwd CHAR(32);

ALTER TABLE news MODIFY t_id int(12);

mysql>mysqldump -uroot -proot yk > text.sql;

mysql>mysqldump -uroot -proot -d yk > text.sql;