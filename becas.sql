
CREATE TABLE regiones(
id int not null auto_increment,
region varchar(100),
CONSTRAINT pk_regiones PRIMARY KEY (id)
)ENGINE=InnoDb;


CREATE TABLE municipios(
id int not null auto_increment,
municipio varchar(100),
cod_postale int,
region_id int,
CONSTRAINT pk_municipios PRIMARY KEY (id),
CONSTRAINT fk_regiones FOREIGN KEY (region_id)REFERENCES regiones(id)
)ENGINE=InnoDb;



CREATE TABLE localidades(
id int not null auto_increment,
localidad varchar(100),
cons int,
inegi int,
municipio_id int,
CONSTRAINT pk_localidades PRIMARY KEY (id),
CONSTRAINT fk_municipios FOREIGN KEY (municipio_id) REFERENCES municipios(id)
)ENGINE=InnoDb;

create table colonias(
id int not null auto_increment,
nom_col varchar (100),
colonia varchar (100),
col_text varchar (100),
calle varchar(100),
localidad_id int,
CONSTRAINT pk_colonias PRIMARY KEY (id),
CONSTRAINT fk_localidades FOREIGN KEY (localidad_id) REFERENCES localidades(id)
)ENGINE=InnoDb;


CREATE TABLE beneficiarios(
id int not null auto_increment,
nombre varchar(100),
paterno varchar(100),
materno varchar(100),
telefono int,
folio varchar(50),
curp varchar(50),
entidad varchar(50),
famid varchar(50),
no_ext varchar(100),
referencias varchar(100),
colonia_id int,
CONSTRAINT pk_beneficiarios PRIMARY KEY (id),
CONSTRAINT fk_colonias FOREIGN KEY (colonia_id)REFERENCES colonias(id)
)ENGINE=InnoDb;

drop table beneficiarios;



create table bimestres
(
    id int not null auto_increment,
    bimestre varchar(100),
    CONSTRAINT pk_bimestres PRIMARY KEY (id)
) ENGINE = InnoDb;

CREATE TABLE tarjetas(
 id int not null auto_increment,
 tipo varchar(100),
 status enum('status'),
 CONSTRAINT pk_tarjetas PRIMARY KEY (id)
)ENGINE = InnoDb;




CREATE TABLE  transferencias(
id int not null auto_increment,
bimestre_id int(50),
tarjeta_id int(50),
beneficiario_id int(50),
año int(50),
canal int(50),
tipoCanal varchar(100),
modalidad varchar(100),
tipoDocumento varchar(100),
observaciones varchar(200),
CONSTRAINT pk_transferencias PRIMARY KEY (id),
CONSTRAINT  fk_beneficiario FOREIGN KEY (beneficiario_id) REFERENCES beneficiarios(id)

)ENGINE=InnoDb;
drop table transferencias;


