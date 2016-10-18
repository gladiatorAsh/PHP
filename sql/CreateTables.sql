-- Create Users table

 create table users(id integer primary key, name varchar(100) unique NOT NULL CHECK (name <> ''),password varchar(100) NOT NULL CHECK (password <> ''),
 firstname varchar(100) NOT NULL CHECK (firstname <> ''), lastname varchar(100)  NOT NULL CHECK (name <> ''), isAdmin boolean DEFAULT(false) ,lastlogin timestamp );

-- Insert Users table

insert into users(name,password,firstname,lastname,isAdmin,lastlogin) values('ash','ash','Ashutosh','Singh',true,'2004-10-19 10:23:54');