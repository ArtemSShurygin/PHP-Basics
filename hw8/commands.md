docker-compose up --build

mysite.local/user/save/?name=Иван&lastname=Иванович&birthday=05-05-1992

mysite.local/user/delete/?id=1

mysite.local/user/update/?id=3&name=Петр&lastname=Петрович&birthday=05-05-1992


mysite.local/user/save/

CREATE TABLE `user_roles` (
	`id_user_role` int(11) 	NOT NULL AUTO_INCREMENT,
    `id_user` int(11) DEFAULT NULL,
    `role` varchar(45) DEFAULT NULL,
    PRIMARY KEY (`id_user_role`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1

local/user/hash/?pass_string=geekbrains