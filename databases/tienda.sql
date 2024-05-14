CREATE DATABASE IF NOT EXISTS tienda;

USE tienda;

CREATE TABLE IF NOT EXISTS users(
  id INT(11) NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
  username VARCHAR(16) NOT NULL,
  password VARCHAR(60) NOT NULL
);

CREATE TABLE IF NOT EXISTS admins(
  id INT(11) NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
  username VARCHAR(16) NOT NULL,
  password VARCHAR(60) NOT NULL
);

CREATE TABLE IF NOT EXISTS categories(
  id INT(11) NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
  name VARCHAR(60) NOT NULL
);

CREATE TABLE IF NOT EXISTS products(
  id INT(11) NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),
  name VARCHAR(60) NOT NULL,
  image longblob NOT NULL,
  description VARCHAR(255) NOT NULL,
  price DECIMAL(5,2) NOT NULL,
  stock INT(11) NOT NULL,
  category_id INT(11) NOT NULL,
  FOREIGN KEY(category_id) REFERENCES categories(id)
);



INSERT INTO users(username, password) VALUES
('user', '123');

INSERT INTO admins(username, password) VALUES
('admin', 'Admin123.');
