drop database if exists quorasium;
create database if not exists quorasium;
use quorasium;

create table if not exists autor(
	id int unsigned auto_increment primary key,
	nombre varchar(50),
    descripcion text,
    url_foto varchar(50)
);

create table if not exists categoria(
	id int unsigned auto_increment primary key,
    nombre varchar(50),
    descripcion text,
    url_foto varchar(50)
);

drop table if exists libro;
create table if not exists libro(
	id int unsigned auto_increment primary key,
	titulo varchar(50),
    descripcion text,
    url_foto varchar(50),
    id_autor int unsigned,
    id_categoria int unsigned,
    FOREIGN KEY (id_autor) REFERENCES autor(id),
    FOREIGN KEY (id_categoria) REFERENCES categoria(id)
);

insert into autor values (1,'Bram Stoker','Gran Escritor del siglo 20, especializado en el género de Terror','/images/Bram_Stoker.jpg');

insert into categoria values (1,'Ciencia ficción','Un género un poco subrealista','/images/portada_dracula.jpg');

insert into libro values (1,'Dracula','Es la biografía de Vladimir Putin','/images/portada_dracula.jpg',1,1);