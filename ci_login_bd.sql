CREATE DATABASE ci_login_bd;
use ci_login_bd;

CREATE TABLE users(
	id_user int(11) PRIMARY KEY auto_increment NOT NULL,
	nom_user varchar(60) NOT NULL,
	email varchar(100) NOT NULL,
	password varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;