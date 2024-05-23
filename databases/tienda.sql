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

CREATE TABLE IF NOT EXISTS shopping_cart(
  quantity INT(11) NOT NULL,
  user_id INT(11) NOT NULL,
  product_id INT(11) NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE IF NOT EXISTS shipping_details(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  user_id INT(11) NOT NULL,
  total DECIMAL(10,2) NOT NULL,
  email VARCHAR(255) NOT NULL,
  telephone VARCHAR(60) NOT NULL,
  street VARCHAR(60) NOT NULL,
  home_number VARCHAR(60) NOT NULL,
  city VARCHAR(60) NOT NULL,
  postal_code VARCHAR(60) NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE shipping_has_products(
  shipping_id INT NOT NULL,
  product_id INT NOT NULL,
  quantity INT NOT NULL,
  PRIMARY KEY (shipping_id, product_id),
  FOREIGN KEY (shipping_id) REFERENCES shipping_details(id),
  FOREIGN KEY (product_id) REFERENCES products(id)
);





ALTER TABLE products MODIFY price DECIMAL(10,2);

INSERT INTO users(username, email,  password, role) VALUES
('user', 'user@gamil.com', 'User123.', 'Usuario');

INSERT INTO users(username, email, password, role) VALUES
('admin','admin@gamil.com' , 'Admin123.', 'Administrador');
