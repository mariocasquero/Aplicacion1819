/**
 * Author:  daw2
 * Created: 23-ene-2019
 */

create database if not exists DAW209Aplicacion1819;
use DAW209Aplicacion1819;
create table if not exists Usuarios(codUsuario varchar(8) primary key, password varchar(255), descUsuario varchar(255), numAccesos int, fechaHoraUltimaConexion int, perfil enum('usuario', 'administrador'))engine=INNODB;
create user 'usuarioDBAplicacion1819'@'%' identified by 'paso';
grant all privileges on DAW209Aplicacion1819.* to 'usuarioDBAplicacion1819';