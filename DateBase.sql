CREATE DATABASE youbooking;

CREATE TABLE roles(
	id INT PRIMARY KEY AUTO_INCREMENT,
    role VARCHAR(50)
 )ENGINE=INNODB;
CREATE TABLE users (
	id INT PRIMARY KEY AUTO_INCREMENT,
    lname VARCHAR(50),
    fname VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(50),
    num VARCHAR(50),
    cin VARCHAR(50),
    id_role INT,
    FOREIGN KEY (id_role) REFERENCES roles(id)
)ENGINE=INNODB;
 CREATE TABLE hotels (
	id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    country VARCHAR(250),
    email VARCHAR(100),
    phone VARCHAR(50),
    category VARCHAR(50),
    nchambre INT,
    id_user INT,
    FOREIGN KEY (id_user) REFERENCES users(id)
)ENGINE=INNODB;
CREATE TABLE rooms (
    id INT PRIMARY KEY AUTO_INCREMENT,
    price INT,
    capacity VARCHAR(50),
    aviability VARCHAR(50),
    quantity INT,
    id_hotel INT,
    FOREIGN KEY (id_hotel) REFERENCES hotels(id)
 )ENGINE=INNODB;
 CREATE TABLE reservation (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre INT,
    d_date DATE,
    f_date DATE,
    id_user INT,
    id_room INT,
    FOREIGN KEY (id_user) REFERENCES users(id),
    FOREIGN KEY (id_room) REFERENCES rooms(id)
 )ENGINE=INNODB;
 create table request (
	id int primary key AUTO_INCREMENT,
    demande varchar(10) CHECK (demande IN ('admin', 'client', 'proprietaire')),
    id_user int, 
    FOREIGN key (id_user) REFERENCES users(id)
) ENGINE = INNODB;