drop database if exist AgenciaFort;
create database AgenciaFort;
use AgenciaFort;
create table clientes
(
	id int not null primary key,
	nombre varchar(50),
	apellidos varchar(50),
	edad smallint
)engine = innodb;
create table autos
(
	id int not null primary key,
	auto varchar(50),
	modelo varchar(30),
	tipo varchar(30),
	precio float
)engine = innodb;
create table sucursales
(
	id int not null primary key,
	auto_id int not null,
	nombre varchar(50),
	ubicacion varchar(50)
)engine = innodb;
create table direcciones
(
	id int not null primary key,
	calle varchar(30),
	colonia varchar(30),
	estado varchar(30)
)engine = innodb;
create table ventas
(
	id int not null primary key,
	cliente_id int not null,
	auto_id int not null,
	direccion_id int not null
)engine = innodb;