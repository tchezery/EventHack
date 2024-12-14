CREATE DATABASE EventHack;
USE EventHack;

CREATE TABLE user (
	id INT auto_increment PRIMARY KEY, 
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    password VARCHAR(100) NOT NULL
) auto_increment = 1000;

CREATE TABLE adm (
	id INT auto_increment PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(100) NOT NULL
) auto_increment  = 1000;

CREATE TABLE event (
	id INT auto_increment PRIMARY KEY,
    id_adm INT,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(300) NOT NULL,
    data_event DATETIME,
    
    data_payment DATETIME,
    description VARCHAR(500),
    price INT NOT NULL,
    FOREIGN KEY (id_adm) REFERENCES adm (id)
) auto_increment = 1000;

CREATE TABLE subscribe_event (
	id INT auto_increment PRIMARY KEY,
    id_event INT,
    
    STATUS VARCHAR(20) NOT NULL,
    
	FOREIGN KEY (id_event) REFERENCES event (id)
) auto_increment = 1000;
