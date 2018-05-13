use Restaurante;
insert into Usuario values('admin',sha2('paso',256));
insert into Producto values(1,'Merluzo','Merluzo muy rico recien pescado',300.50,'Primero','../Webroot/media/primero.jpg'),
(2,'Canelones con cosas','Canelones con una capa de cosas rellenos de mas cosas',300.50,'Primero','../Webroot/media/primero2.jpg'),
(3,'Carne con patatas','Un plato de segundo espectacular',100,'Segundo','../Webroot/media/segundo2.jpg'),
(4,'Un cacho carne','Pues otro plato de segundo aun mas espectacular',100,'Segundo','../Webroot/media/segundo.jpg'),
(5,'Postre','Postre que no te dejará indiferente',1.5,'Postre','../Webroot/media/postre.png'),
(6,'Postre con muchas cosas','Postre que no te dejará indiferente',1.5,'Postre','../Webroot/media/postre2.jpg');
insert into Reserva values(1,'Sergio','sergio@gmail.com','2010-2-2','13:00',2,'Activa'),
(12,'Amor','amor@gmail.com','2010-2-2','13:00',2,'Activa'),
(13,'Mario','mario@gmail.com','2010-2-2','13:00',2,'Activa'),
(2,'Juanjo','juanjo@gmail.com','2010-3-3','15:00',2,'Anulada'),
(22,'Heraclio','heraclio@gmail.com','2010-3-3','15:00',2,'Anulada'),
(23,'Baldo','baldo@gmail.com','2010-3-3','15:00',2,'Anulada'),
(3,'Lucia','lucia.96@gmail.com','2010-4-4','14:00',2,'Terminada'),
(32,'Pablo','pablo.96@gmail.com','2010-4-4','14:00',2,'Terminada'),
(33,'Alejandro','alejandro.96@gmail.com','2010-4-4','14:00',2,'Terminada');


create event anularReservas
on schedule every 1 minute starts current_timestamp()
on completion not preserve enable
do update Reserva
set estado='Anulada'
where fecha=curdate() and  
(timediff(hora,convert(sysdate(),time)) >
 time('01:00:00') or timediff(convert(sysdate(),time),hora) > time('01:00:00'))