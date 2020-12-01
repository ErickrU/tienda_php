create table if not exists productos(
id_producto			integer primary key AUTOINCREMENT,
producto			  text(150) not null, 
precio				  integer(10) not null,
existencias			integer(10) not null);

create table if not exists tickets(
id_ticket 			        integer primary key AUTOINCREMENT,
fecha				            date not null,
hora_venta 			        time,
cantidad_producto   		integer(100) not null,
producto			          varchar(150) not null, 
total_Producto 			    integer(10000) not null);
