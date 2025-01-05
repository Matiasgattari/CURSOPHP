<!-- 
---PHPMYADMIN---

mySQL
Una base de datos es un lugar donde podemos guardar informacion constantemente, mantenerla y usarla.
es un tipo de datos relacio
nal 



PHPMYADMIN


en general USUARIO = root
        CONTRASEÑA = nada o root

para crear una base de datos podemos ir al boton de "nueva" o al de crear
Para poder guardar informacion primero necesitamos tablas. elegimos nombre de tabla y columnas. 
Dentro elegimos el nombre de las columnas, tipo de datos, rango de longitud de valores, predeterminado y cotejamiento quedan en blanco, atributoos en blanco, nulo tildado permite que se guarden valores nulos. Indice vamos a decir que queremos que sea la llave primaria (va a guardar la identificacion de todo lo del usuario), A_I significa autoincrementable (incremeta una unidad con cada nuevo usuario, le damos tilde)

Para agregar usuarios tenemos que hacer click en la base de datos creada, ir a "insertar". El ide lo vamos a dejar en blanco porque es autoincrementable, pero nombre completamos en "valor".
Al guardar, nos va a mostrar la "consulta sql",  el cual es el codigo que se necesito para ingresar esos usuarios en la base de datos

en la pestaña de SQL, vamos a poder establecer nuestros propios comandos (propias consultas sql)
si ponemos : SELECT * FROM usuarios
quiero que recopiles todos los datos que tengamos en la tabla usuarios



-->


<!-- 
---ACCEDIENDO A MYSQL DESDE LA CONSOLA---


ctr + r  escribir CMD

cd /   me lleva a la base del disco duro

cd xampp/mysql/bin   para acceder a la carpeta que estoy buscando

dir  me muestra todos los archivos y carpetas del directorio donde estoy parado


luego debemos establecer el usuario para poder usarlo
mysql -u root -p (este usuario root ya esta creado, deberia crear mi propio usuario con privilegios)

Mi usuario creado es root y pw ""
mysql -u usuario -p   al presionar enter pide la contraseña, al ingresarla bien te da la bienvenida a mysql


todo esto se debe repetir cada vez que se quiera acceder a MYSQL

ejemplo de consulta:
show databases;   muestra todas las bases de datos que tenemos

-->

<!-- 
---CREANDO BASES DE DATOS Y TABLAS DESDE CONSOLA---



CREATE DATABASE prueba_consola;

use prueba_consola;   para seleccionar la base de datos con la que quiero trabajar


CREATE TABLE usuarios (id INT AUTO_INCREMENT, nombre varchar(200) NOT NULL, email varchar(100) NOT NULL, PRIMARY KEY(id));      todo esto me va a permitir crear una tabla, el "nombre" seguido de las propiedades de cada columna, separando las distintas columnas por ",". Al final se coloca primary key () con el nombre de la columna primaria.   El comando NOT NULL evita que se quede null el valor de esos campos. El valor entre () luego de varchar es la cantidad de caracteres permitidos.


show tables;    muestra las tablas creadas


describe usuarios;   me muestra como es la tabla usuarios


select * from usuarios;   muestrame todo lo que tengo en la tabla usuarios


-->


<!-- 
---INSERTAR DATOS EN BASE DE DATOS---

para insertar datos en la tabla desde phpmyadmin, hay que seleccionar dicha tabla e ir a "insertar"


Desde la consola:

INSERT INTO usuarios values(null, 'Carlos', 'correo@correo.com');    el ID queda NULL porque es autoincrementable. Es muy importante seguir el orden de la creacion de datos.

select * from usuarios;  me mostraria que se creo el usuario de carlos


Otra forma de ingresar datos:

INSERT INTO usuarios (id,nombre,email) values(null,'Arturo', 'correo2@correo.com');       Los ID los dejo siempre en null porque son autoincrementables


-->


<!-- 
---MODIFICAR INFORMACION DE LA BASE DE DATOS---

select * from usuarios;   muestra los valores que tengo

UPDATE usuarios SET nombre = 'Manuel' WHERE id = 2;   Con update digo que la quiero modificar, la tabla usuarios, SET es para setear, nombre es el nombre delcampo a cambiar. WHERE es en que usuario quiero modificar (lo uso en base al ID que es unico, en este caso el id 2)


-->



<!-- 
---SELECCIONAR INFORMACION DE UNA TABLA FILTRADA ---


Desde el myadmin es simplemente ir a la tabla, elegir el usuario y editar.


desede una consola:


select * from usuarios;  muestra todos los registros de usuarios

select nombre from usuarios;   este comando muestra solamente los nombres de la tabla usuarios


select * from usuarios WHERE id=2; me trae toods los usuarios de id 2 (el id es unico, con lo que viene solo 1 )


select * from usuarios WHERE nombre LIKE 'c%';   mostrarme todos los usuarios de la tabla, los cuales tienen el nombre LIKE (como) c% = c + cualquier otro caracter.


select * from usuarios ORDER BY nombre ASC;  ordenar la tabla en base al nombre de forma ascendente

select * from usuarios ORDER BY nombre DESC;  ordenar la tabla en base al nombre de forma descendente


select * from usuarios LIMIT 1;  con esto le establesco el limite de cantidad de datos que quiero que me traiga (1 me trae solo 1 dato)

select * from usuarios LIMIT 0,2;  a partir del registro 0 quiero que me traigas 2 valores


UPDATE usuarios SET nombre = 'Manuel' WHERE id = 2;   Con update digo que la quiero modificar, la tabla usuarios, SET es para setear, nombre es el nombre delcampo a cambiar. WHERE es en que usuario quiero modificar (lo uso en base al ID que es unico, en este caso el id 2)

 -->


<!-- 
 ---ELIMINAR FILAS EN BASE DE DATOS---


 DELETE FROM usuarios WHERE id=2;  RECORDAR siempre colocar el where, ya que sino podemos deletear toda la tabla de usuarios

 -->


<!-- 
 ---APLICACIONES VISUALES PARA TRABAJAR CON MYSQL---

 navicat for mysql (paga)
 mysql workbench (gratis)
 heidi SQL (sirve tambien para postgreSQL, gratis) - recomendado -
 Swquel Pro para mac

 
 -->

<!-- 
 ---CONECTARSE A BASE DE DATOS DE MYSQL MEDIANTE PDO (NUEVA FORMA)

 mediante esta forma es mucho mas facil y seguro, ya que la de mysql_connect ya no se usa porque es antigua
 
 
 -->