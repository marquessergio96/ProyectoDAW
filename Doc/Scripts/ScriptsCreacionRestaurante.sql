create database Restaurante;
use Restaurante;
create table Usuario(
	nombre varchar(50) primary key,
	password varchar(64));
create table Reserva(
	codReserva integer primary key AUTO_INCREMENT,
	nombre varchar(50),
	email varchar(500),
	fecha date,
	hora time,
	numeroPersonas int,
	estado varchar(255)
);

create table Producto(
	codProducto integer primary key AUTO_INCREMENT,
	nombre varchar(100),
	descripcion varchar(1000),
	precio float,
	tipo varchar(500),
	imagenes varchar(1000)
);
