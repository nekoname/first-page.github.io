create database if not exists quorasium;
use quorasium;
create table if not exists book(
	id int auto_increment,
    autor varchar(30),
    categoria varchar(30),
	titulo varchar(30),
    descripcion text
);

create table autor;