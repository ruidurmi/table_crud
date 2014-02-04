drop table if exists daw2_discos;
create table daw2_discos (
id integer auto_increment not null primary key
, album varchar(50) not null
, artista varchar(50) not null
, precio decimal(10,2) not null
, fecha_lanzamiento date
);

insert into daw2_discos (album, artista, precio, fecha_lanzamiento) 
values ("12 Lunas", "ZPU", 15.85, "11/12/13"),
			("Los Viajes Inmoviles", "Nach", 14.90, "24/02/14"),
			("Tout Tourne Autour Du Soleil", "Keny Arkana", 18.75, "03/12/12");