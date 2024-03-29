create table ubicacions (
	id serial,
	pais varchar(32),
	region int,
	ciudad varchar(58),
	comuna varchar(21),
	primary key(id)
);

create table usuarios(
    id serial,
    id_ubicacion int,
    nombre varchar(60),
    apellido varchar(60),
    email varchar(30),
    contrasena char(32),
    calle varchar(80),
    rol int,
    primary key(id),
    foreign key(id_ubicacion)
    references ubicacions(id)
);

create table locals (
	id serial,
	id_ubicacion int,
	id_usuario int,
	valor_entrega money,
	direccion_local varchar(100),
	tiempo_despacho time,
	tiempo_retiro time,
	aprobado bool,
	cadena varchar(60),
	nombre varchar(60),
	primary key(id),
	foreign key (id_ubicacion)
	references ubicacions(id),
	foreign key (id_usuario)
	references usuarios(id)
);

create table mesas (
	id serial,
	id_local int,
	cantidad_puestos int,
	numero_mesa int,
	primary key(id),
	foreign key (id_local)
	references locals(id)
);

create table menus (
	id serial,
	id_local int,
	nombre text,
	precio money,
	descuento float,
	descripcion text,
	primary key(id),
	foreign key (id_local)
	references locals(id)
);

create table productos (
	id serial,
	nombre varchar(32),
	cantidad int,
	primary key(id)
);



create table horarios (
	id serial,
	id_local int,
	dia int,
	apertura time,
	cierre time,
	primary key(id),
	foreign key (id_local)
	references locals(id)
);

create table categorias (
	id serial,
	nombre varchar(32),
	primary key(id)
);

create table historial_usuarios(
    id serial,
    id_usuario int,
    accion text,
    fecha date,
    hora time,
    primary key(id),
    foreign key(id_usuario)
    references usuarios(id)
);


create table valoracions (
	id serial,
	id_local int,
	estrellas float,
	comentario text,
	primary key(id),
	foreign key (id_local)
	references locals(id)
);

create table metodo_pagos (
	id serial,
	pago_entrega bool,
	pago_tarjeta bool,
	numero_tarjeta varchar(17),
	fecha_vencimiento date,
	digitos_verificadores varchar(4),
	primary key(id)
);

create table rols (
	id serial,
	tipo_rol varchar(40),
	primary key(id)
);

create table permisos (
	id serial,
	id_rol int,
	gestionar_local bool,
	gestionar_locales bool,
	gestionar_plataforma bool,
	gestionar_menus bool,
	primary key(id),
	foreign key (id_rol)
	references rols(id)
);

create table ingredientes (
	id serial,
	nombre_ingrediente varchar(32),
	primary key(id)
);

create table mesas_usuarios (
    id serial,
	id_mesa int,
	id_usuario int,
	dia date,
	hora time,
	foreign key (id_mesa)
	references mesas(id),
	foreign key (id_usuario)
	references usuarios(id),
	primary key(id)
);


create table locals_categorias (
    id serial,
	id_local int,
	id_categoria int,
	foreign key (id_local)
	references locals(id),
	foreign key (id_categoria)
	references categorias(id),
	primary key(id)
);

create table pedidos(
    id serial,
    id_usuario int,
    fecha date,
    total_precio money,
    notas_adicionales text,
    retiro bool,
    foreign key (id_usuario)
    references usuarios(id),
    primary key (id)


);


create table menus_productos (
    id serial,
	id_menu int,
	id_producto int,
	seleccionable bool,
	foreign key (id_menu)
	references menus(id),
	foreign key (id_producto)
	references productos(id),
	primary key(id)
);

create table menus_pedidos (
    id serial,
	id_menu int,
	id_pedido int,
	aclaraciones text,
	foreign key (id_menu)
	references menus(id),
	foreign key (id_pedido)
	references pedidos(id),
	primary key(id)
);

create table productos_ingredientes (
    id serial,
	id_producto int,
	id_ingrediente int,
	foreign key (id_producto)
	references productos(id),
	foreign key (id_ingrediente)
	references ingredientes(id),
	primary key(id)
);


create table pedidos_metodo_pagos (
    id serial,
	id_pedido int,
	id_metodo_pagos int,
	foreign key (id_pedido)
	references pedidos(id),
	foreign key (id_metodo_pagos)
	references metodo_pagos(id),
	primary key(id)
);