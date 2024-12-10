CREATE DATABASE EventHack;
USE EventHack;

CREATE TABLE user (
	id INT auto_increment PRIMARY KEY, 
    name VARCHAR(100),
    email VARCHAR(255),
    phone VARCHAR(20),
    password VARCHAR(100) 
) auto_increment = 1000;
