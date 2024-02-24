CREATE DATABASE php_mysql_crud_gabrielle24feb2024;

USE php_mysql_crud_gabrielle24feb2024;

CREATE TABLE task(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE task;