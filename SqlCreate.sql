CREATE TABLE users (
  id SERIAL,
  firstname varchar(255) NOT NULL,
  lastname varchar(255) DEFAULT NULL,
  email varchar(100) NOT NULL,
  password varchar(100) NOT NULL,
  homeaddress varchar(255) DEFAULT NULL,
  homephone varchar(20) DEFAULT NULL,
  cellphone varchar(20) NOT NULL,
  PRIMARY KEY (id)
) 
