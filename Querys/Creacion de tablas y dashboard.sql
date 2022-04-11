Create database inteexpdb;
use inteexpdb;
Create table Usuario(
IdUsuario int not null auto_increment,
Nombre varchar(25) not null,
ApPat varchar(25) not null,
ApMat varchar(25) ,
Edad smallint not null,
Usuario varchar(25) not null,
Contraseña varchar(15) not null,
primary key(IdUsuario)
);

Create table Modelo(
IdModelo int not null auto_increment,
IdUsuario int,
Precio    float,
Nombre    varchar(50),
fechaSubida  date,
Vistas int,
Imagen varchar(150),
primary key(IdModelo),
foreign key(IdUsuario) references Usuario(IdUsuario)
);

select*from Usuario;
/*Selecciona el mas visto*/
Select Nombre,Imagen from Modelo order by Vistas desc limit 3;

/*Selecciona el mas reciente*/
Select Nombre,Imagen from Modelos order by fechaSubida desc limit 3;