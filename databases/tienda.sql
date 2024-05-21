CREATE DATABASE IF NOT EXISTS tienda;

USE tienda;

CREATE TABLE IF NOT EXISTS users(
  id INT(11) NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
  username VARCHAR(16) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(60) NOT NULL,
  role ENUM('Usuario', 'Administrador') NOT NULL default 'Usuario'
);

CREATE TABLE IF NOT EXISTS products(
  id INT(11) NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
  name VARCHAR(60) NOT NULL,
  image LONGBLOB NOT NULL,
  description VARCHAR(255) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  stock INT(11) NOT NULL,
  category ENUM('primer nivel', 'segundo nivel', 'tercer nivel') NOT NULL
);

ALTER TABLE products MODIFY price DECIMAL(10,2);



INSERT INTO users(username, email,  password, role) VALUES
('user', 'user@gamil.com', 'User123.', 'Usuario');


INSERT INTO users(username, email, password, role) VALUES
('admin','admin@gamil.com' , 'Admin123.', 'Administrador');
