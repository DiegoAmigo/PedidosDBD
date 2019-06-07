insert into ubicacions (pais,region,ciudad,comuna)
values ('Chile',1,'Iquique','Iquique');
insert into ubicacions (pais,region,ciudad,comuna)
values ('Chile',2,'Calama','Calama');
insert into ubicacions (pais,region,ciudad,comuna)
values ('Chile',3,'Copiapo','Copiapo');
insert into ubicacions (pais,region,ciudad,comuna)
values ('Chile',4,'Coquimbo','Coquimbo');
insert into ubicacions (pais,region,ciudad,comuna)
values ('Chile',5,'Valparaíso','Valparaíso');
insert into ubicacions (pais,region,ciudad,comuna)
values ('Chile',6,'Rancagua','Rancagua');

insert into usuarios (id_ubicacion,nombre,apellido,email,contrasena,calle,rol)
values (1,'Patricio','Villalobos','gordos_x@hotmail.com','bvleibvi','Geminis 0342',1);
insert into usuarios (id_ubicacion,nombre,apellido,email,contrasena,calle,rol)
values (1,'Cristian','Urrutia','flaco_asd@gmail.com','ehrnbrs','Antares 1234',1);
insert into usuarios (id_ubicacion,nombre,apellido,email,contrasena,calle,rol)
values (1,'Juan','Amigo','dios_xxx@hotmail.com','rsnbrbr','Virgo 0194',2);
insert into usuarios (id_ubicacion,nombre,apellido,email,contrasena,calle,rol)
values (1,'Pedro','Arriagada','acm1pt_x@gmail.com','srnatbg','Leo 8432',1);
insert into usuarios (id_ubicacion,nombre,apellido,email,contrasena,calle,rol)
values (1,'Jorge','Medina','koke_xfs@hotmail.com','tebeatbtea','Escorpion 8362',3);

insert into pedidos (id_usuario,fecha,total_precio,notas_adicionales,retiro)
values (2,'2019-10-22',5000,'Quiero sin peperoni',true);
insert into pedidos (id_usuario,fecha,total_precio,notas_adicionales,retiro)
values (2,'2019-09-22',7000,'Quiero sin tocino',true);
insert into pedidos (id_usuario,fecha,total_precio,notas_adicionales,retiro)
values (2,'2019-07-22',9000,'Quiero sin peperoni',false);
insert into pedidos (id_usuario,fecha,total_precio,notas_adicionales,retiro)
values (2,'2019-08-22',5000,'Quiero sin queso',true);
insert into pedidos (id_usuario,fecha,total_precio,notas_adicionales,retiro)
values (2,'2019-12-22',5000,'Quiero sin bebida',true);



insert into locals (id_ubicacion,id_usuario,valor_entrega,direccion_local,tiempo_despacho,tiempo_retiro,aprobado,cadena,nombre)
values (2,1,2000,'Lago Cochrane 7298', '00:40:00','00:20:00', true, 'Mc-Payaso','el payaso feliz');
insert into locals (id_ubicacion,id_usuario,valor_entrega,direccion_local,tiempo_despacho,tiempo_retiro,aprobado,cadena,nombre)
values (3,1,500,'San Isidro 471', '00:40:00','00:20:00', true, 'Mc-Payaso','el payaso feliz');
insert into locals (id_ubicacion,id_usuario,valor_entrega,direccion_local,tiempo_despacho,tiempo_retiro,aprobado,cadena,nombre)
values (1,4,3000,'Geminis 8822','00:30:00','00:50:00',true,'Papa Jhons','Papa Jhons La Florida');
insert into locals (id_ubicacion,id_usuario,valor_entrega,direccion_local,tiempo_despacho,tiempo_retiro,aprobado,cadena,nombre)
values (2,3,500,'San Pablo 999', '00:40:00','00:20:00', true, 'Mc-Payaso','el payaso feliz');
insert into locals (id_ubicacion,id_usuario,valor_entrega,direccion_local,tiempo_despacho,tiempo_retiro,aprobado,cadena,nombre)
values (4,4,1500,'Virgo 2222', '00:40:00','00:20:00', true, 'Mc-Donalds','Mc Donalds La dehesa');


insert into horarios (id_local,dia,apertura,cierre)
values (1,1,'08:00:00','23:54:00');
insert into horarios (id_local,dia,apertura,cierre)
values (1,2,'08:00:00','23:54:00');
insert into horarios (id_local,dia,apertura,cierre)
values (1,3,'08:00:00','23:54:00');
insert into horarios (id_local,dia,apertura,cierre)
values (1,4,'08:00:00','23:54:00');
insert into horarios (id_local,dia,apertura,cierre)
values (1,5,'08:00:00','23:54:00');
insert into horarios (id_local,dia,apertura,cierre)
values (1,6,'09:00:00','23:54:00');
insert into horarios (id_local,dia,apertura,cierre)
values (1,7,'13:00:00','23:54:00');


insert into categorias (nombre)
values ('vegano');
insert into categorias (nombre)
values ('vegetariano');
insert into categorias (nombre)
values ('desayuno');
insert into categorias (nombre)
values ('carne');
insert into categorias (nombre)
values ('bebida');



insert into productos (nombre,cantidad)
values ('tree-cola',1);
insert into productos (nombre,cantidad)
values ('hamburguesa pollo',1);
insert into productos (nombre,cantidad)
values ('helado piña',1);
insert into productos (nombre,cantidad)
values ('jugo manzana',1);
insert into productos (nombre,cantidad)
values ('pizza napolitana',1);

insert into menus (id_local,nombre,precio,descuento,descripcion)
values (1,'mega promo',5000,0,'delicioso menu disponible por tiempo limitado');
insert into menus (id_local,nombre,precio,descuento,descripcion)
values (1,'compartidos',10000,0.1,'especial para compartir');
insert into menus (id_local,nombre,precio,descuento,descripcion)
values (1,'refrescante',3000,0,'especial para dias con temperaturas altas');
insert into menus (id_local,nombre,precio,descuento,descripcion)
values (1,'promo copa',5000,0,'promocion para celebrar la copa america');
insert into menus (id_local,nombre,precio,descuento,descripcion)
values (1,'jugoso',5000,0,'jugos naturales');



insert into mesas (id_local,cantidad_puestos,numero_mesa)
values (1,2,1);
insert into mesas (id_local,cantidad_puestos,numero_mesa)
values (1,4,2);
insert into mesas (id_local,cantidad_puestos,numero_mesa)
values (1,5,3);
insert into mesas (id_local,cantidad_puestos,numero_mesa)
values (1,6,4);
insert into mesas (id_local,cantidad_puestos,numero_mesa)
values (1,8,5);


insert into valoracions(id_local,estrellas,comentario)
values (1,5,'Excelente servicio, lo recomiendo mucho');
insert into valoracions(id_local,estrellas,comentario)
values (1,3,'Buena comida, pero se demoro mucho en llegar');
insert into valoracions(id_local,estrellas,comentario)
values (1,5,'Rica comida y a tiempo');
insert into valoracions(id_local,estrellas,comentario)
values (1,1,'La comida nunca llego');
insert into valoracions(id_local,estrellas,comentario)
values (1,4,'Muy buen plato, aunque no tenia el ingrediente que solicite');
insert into valoracions(id_local,estrellas,comentario)
values (1,2,'Habia un bicho en la comida, no compren mas en este local');


insert into historial_usuarios(id_usuario,accion,fecha,hora)
values (1,'Compro hamburguesa pollo ,en el payaso feliz','2019-06-03', '20:49:42');
insert into historial_usuarios(id_usuario,accion,fecha,hora)
values (1,'Compro tree-cola,en el payaso feliz','2019-05-21', '17:46:35');
insert into historial_usuarios(id_usuario,accion,fecha,hora)
values (1,'Compro pizza napolitana,en el payaso feliz','2019-06-01', '12:26:52');
insert into historial_usuarios(id_usuario,accion,fecha,hora)
values (1,'Compro jugo manzana,en el payaso feliz','2019-04-30', '09:45:12');
insert into historial_usuarios(id_usuario,accion,fecha,hora)
values (1,'Compro helado piña,en el payaso feliz','2019-05-05', '22:16:46');


insert into metodo_pagos(pago_entrega,pago_tarjeta,numero_tarjeta,fecha_vencimiento,digitos_verificadores)
values (false,true,'4485480221084675','2019-08-29',7351);
insert into metodo_pagos(pago_entrega,pago_tarjeta,numero_tarjeta,fecha_vencimiento,digitos_verificadores)
values (false,true,'2444828671548005','2019-10-22',5271);
insert into metodo_pagos(pago_entrega,pago_tarjeta,numero_tarjeta,fecha_vencimiento,digitos_verificadores)
values (true,false,null,null,null);
insert into metodo_pagos(pago_entrega,pago_tarjeta,numero_tarjeta,fecha_vencimiento,digitos_verificadores)
values (false,true,'8024108464854275','2019-11-28',5329);
insert into metodo_pagos(pago_entrega,pago_tarjeta,numero_tarjeta,fecha_vencimiento,digitos_verificadores)
values (true,false,null,null,null);

insert into rols(tipo_rol)
values ('Gestor de local');
insert into rols(tipo_rol)
values ('Usuario');
insert into rols(tipo_rol)
values ('Administrador');


insert into permisos(id_rol,gestionar_local,gestionar_locales,gestionar_plataforma,gestionar_menus)
values (1,true,false,false,true);
insert into permisos(id_rol,gestionar_local,gestionar_locales,gestionar_plataforma,gestionar_menus)
values (1,false,false,false,false);
insert into permisos(id_rol,gestionar_local,gestionar_locales,gestionar_plataforma,gestionar_menus)
values (1,false,true,true,false);


insert into ingredientes(nombre_ingrediente)
values ('Jamón');
insert into ingredientes(nombre_ingrediente)
values ('Choricillo');
insert into ingredientes(nombre_ingrediente)
values ('Aceitunas negras');
insert into ingredientes(nombre_ingrediente)
values ('Tocino');
insert into ingredientes(nombre_ingrediente)
values ('Choclo');


insert into mesas_usuarios(id_mesa,id_usuario,dia,hora)
values (1,1,'2019-05-09', '18:26:15');
insert into mesas_usuarios(id_mesa,id_usuario,dia,hora)
values (1,1,'2019-03-15', '17:46:35');
insert into mesas_usuarios(id_mesa,id_usuario,dia,hora)
values (1,1,'2019-02-23', '11:26:35');
insert into mesas_usuarios(id_mesa,id_usuario,dia,hora)
values (1,1,'2019-09-24', '12:36:55');
insert into mesas_usuarios(id_mesa,id_usuario,dia,hora)
values (1,1,'2019-06-11', '09:56:34');

insert into locals_categorias(id_local,id_categoria)
values (1,2);
insert into locals_categorias(id_local,id_categoria)
values (3,2);
insert into locals_categorias(id_local,id_categoria)
values (1,3);
insert into locals_categorias(id_local,id_categoria)
values (2,2);
insert into locals_categorias(id_local,id_categoria)
values (3,1);

insert into menus_productos(id_menu,id_producto,seleccionable)
values (1,2,true);
insert into menus_productos(id_menu,id_producto,seleccionable)
values (2,2,true);
insert into menus_productos(id_menu,id_producto,seleccionable)
values (3,2,false);
insert into menus_productos(id_menu,id_producto,seleccionable)
values (1,3,true);
insert into menus_productos(id_menu,id_producto,seleccionable)
values (2,3,false);


insert into menus_pedidos(id_menu,id_pedido,aclaraciones)
values (1,2,'Estoy con poleron azul');
insert into menus_pedidos(id_menu,id_pedido,aclaraciones)
values (2,2,'Estoy frente al paradero');
insert into menus_pedidos(id_menu,id_pedido,aclaraciones)
values (3,1,'Traten de demorarse un poco');
insert into menus_pedidos(id_menu,id_pedido,aclaraciones)
values (1,3,'Estoy con polera verde');
insert into menus_pedidos(id_menu,id_pedido,aclaraciones)
values (2,1,'Estoy en la esquina de la calle');

insert into productos_ingredientes(id_producto,id_ingrediente)
values (3,1);
insert into productos_ingredientes(id_producto,id_ingrediente)
values (3,2);
insert into productos_ingredientes(id_producto,id_ingrediente)
values (1,2);
insert into productos_ingredientes(id_producto,id_ingrediente)
values (2,1);
insert into productos_ingredientes(id_producto,id_ingrediente)
values (1,3);


insert into pedidos_metodo_pagos(id_pedido,id_metodo_pagos)
values (1,2);
insert into pedidos_metodo_pagos(id_pedido,id_metodo_pagos)
values (3,2);
insert into pedidos_metodo_pagos(id_pedido,id_metodo_pagos)
values (1,3);
insert into pedidos_metodo_pagos(id_pedido,id_metodo_pagos)
values (2,1);
insert into pedidos_metodo_pagos(id_pedido,id_metodo_pagos)
values (3,1);
