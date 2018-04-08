-- create two databases 
-- one for storing sensor data and another for address link of location data
-- create database
create database waste

-- first table:-
 create table waste (s_no int(10) auto increment not null,timestamp timestamp,id int(10),distance int(100),stage int(10));

-- second table:-
create table address(id int(10) primary key, location varchar(50), link varchar(255));