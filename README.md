# test_comments

необходима база данных. 
вида

![Вид таблицы](http://s018.radikal.ru/i518/1604/24/a8977bdaeda5.png)

```sh
CREATE TABLE IF NOT EXISTS `comments` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`idparent` int(11) NOT NULL DEFAULT "0",
`user` varchar(255) CHARACTER SET cp1251 COLLATE cp1251_general_cs NOT NULL,
`email` varchar(255) CHARACTER SET cp1251 COLLATE cp1251_general_cs NOT NULL,
`message` text CHARACTER SET cp1251 COLLATE cp1251_general_cs NOT NULL,
`host` varchar(255) CHARACTER SET cp1251 COLLATE cp1251_general_cs NOT NULL,
`url` text CHARACTER SET cp1251 COLLATE cp1251_general_cs NOT NULL,
`date` datetime DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 COLLATE=cp1251_general_cs AUTO_INCREMENT=1;
```