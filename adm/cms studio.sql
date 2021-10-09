DROP TABLE IF EXISTS usuario;
DROP TABLE IF EXISTS email;
DROP TABLE IF EXISTS conteudo;
DROP TABLE IF EXISTS categoria;
DROP TABLE IF EXISTS tipo_categoria;
DROP TABLE IF EXISTS menu;
DROP TABLE IF EXISTS multisegmentos;
CREATE TABLE  multisegmentos(
  id int NOT NULL AUTO_INCREMENT primary key,
  titulo varchar(255),
  src varchar(255),
  obs blob
);

CREATE TABLE tipo_categoria (
  id int NOT NULL AUTO_INCREMENT primary key,
  titulo varchar(255), 
);
    delete  from tipo_categoria;
    insert into tipo_categoria (id,titulo) values(1,'Vídeos');
    insert into tipo_categoria (id,titulo) values(2,'Fotos');
    insert into tipo_categoria (id,titulo) values(3,'Texto');
    insert into tipo_categoria (id,titulo) values(4,'Músicas');
    insert into tipo_categoria (id,titulo) values(5,'Arquivos');
    CREATE TABLE  menu(
        id int NOT NULL AUTO_INCREMENT primary key,
        id_multisegmentos int NOT NULL,
        titulo varchar(255), 
        src varchar(255),
        obs blob
    );

    CREATE TABLE  categoria(
        id int NOT NULL AUTO_INCREMENT primary key,
        id_tipo_categoria int,
        id_multisegmentos int,
        id_menu int,
        titulo varchar(255),
        descricao varchar(255),
        src varchar(255),
       obs blob,
       conteudo blob,
        data_final varchar(255),
        data_inicio varchar(255),
        inicio datetime,
        fim datetime
    );

    alter table menu
    add constraint fk_menu_multisegmentos
    foreign key (id_multisegmentos)
    references multisegmentos(id);
    

    alter table categoria
    add constraint fk_categoria_tipo_categoria
    foreign key (id_tipo_categoria)
    references tipo_categoria(id);

    alter table categoria
    add constraint fk_categoria_multisegmentos
    foreign key (id_multisegmentos)
    references multisegmentos(id);
    
    alter table categoria
    add constraint fk_categoria_menu
    foreign key (id_menu)
    references menu(id);
   
    alter table categoria
    add constraint fk_categoria_tipo
    foreign key (id_tipo)
    references tipo_categoria(id);

CREATE TABLE  conteudo(
        id int not null AUTO_INCREMENT primary key,
        id_multisegmentos int,
        id_menu int,
        id_categoria int,
        titulo varchar(250),
        descricao varchar(250),
        src varchar(250),
        qrcode varchar(250),
        conteudo blob,
        data_cadastro datetime not null,
         data_final varchar(250),
         data _inicio varchar (250),
         fim datetime,
         fonte varchar (250),
         obs blob
    );

    alter table conteudo
    add constraint fk_conteudo_multisegmentos
    foreign key (id_multisegmentos)
    references multisegmentos(id);

    alter table conteudo
    add constraint fk_conteudo_menu
    foreign key (id_menu)
    references menu(id);

    alter table conteudo
    add constraint fk_conteudo_categoria
    foreign key (id_categoria)
    references categoria(id);

CREATE TABLE  email (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_multisegmentos int NOT NULL,
  id_menu int NOT NULL,
  titulo varchar(50)
);
alter table email
add constraint fk_email_multisegmentos
foreign key (id_multisegmentos)
references multisegmentos(id);

alter table email
add constraint fk_email_menu
foreign key (id_menu)
references menu(id);


CREATE TABLE  usuario (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_multisegmentos int NOT NULL,
    nome varchar(50) NOT NULL,
    login varchar(50) NOT NULL,
    senha varchar(50) NOT NULL,
   src varchar (250),
cpf int,
email VARCHAR ( 100) ,
telefone int,
cidade VARCHAR ( 45 ) ,
estado varchar(50)
);
alter table usuario
add constraint fk_usuario_multisegmentos
foreign key (id_multisegmentos)
references multisegmentos(id);

insert into usuario(id_multisegmentos,nome,login,senha) values('null','midiamix','midiamix','midiamix');
 
create table configuracoes(
        id int not null AUTO_INCREMENT primary key,
         id_usuario int,
        titulo varchar(250),
        descricao varchar(250),
        src varchar(250),
        conteudo blob,
        data_cadastro datetime not null,
         obs blob
);
 

CREATE TABLE cliente(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
id_multisegmento INT NOT NULL
nome VARCHAR ( 45 ) , 
email VARCHAR ( 100) ,
data_nascimento DATE ,
sexo ENUM ( 'M', 'F' ) ,
endereco VARCHAR ( 30 ) ,
cpf int,
rg int,
telefone int,
celular int,
bairro VARCHAR ( 20 ) ,
cidade VARCHAR ( 45 ) ,
fk_estado INT NOT NULL,
login VARCHAR ( 40 ) ,
senha CHAR ( 32 ),
obs blob
);

CREATE TABLE estados (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
uf varchar(50) NOT NULL,
estado VARCHAR ( 50) NOT NULL 
);

INSERT INTO estados VALUES ( NULL , "AC", "Acre");
INSERT INTO estados VALUES ( NULL , "AL", "Alagoas");
INSERT INTO estados VALUES ( NULL , "AP", "AmapáINSERT INTO estados VALUES ( NULL , "AM", "Amazonas");
INSERT INTO estados VALUES ( NULL , "BA", "Bahia");
INSERT INTO estados VALUES ( NULL , "CE", "Ceará");
INSERT INTO estados VALUES ( NULL , "DF", "Distrito Federal");
INSERT INTO estados VALUES ( NULL , "ES", "Espirito Santo");
INSERT INTO estados VALUES ( NULL , "GO", "Goiás");
INSERT INTO estados VALUES ( NULL , "MA", "Maranhão");
INSERT INTO estados VALUES ( NULL , "MT", "Mato Grosso");
INSERT INTO estados VALUES ( NULL , "MS", "Mato Grosso do Sul");
INSERT INTO estados VALUES ( NULL , "MG", "Minas Gerais");
INSERT INTO estados VALUES ( NULL , "PA", "Pará");
INSERT INTO estados VALUES ( NULL , "PB", "Paraíba");
INSERT INTO estados VALUES ( NULL , "PR", "Paraná");
INSERT INTO estados VALUES ( NULL , "PE", "Pernambuco");
INSERT INTO estados VALUES ( NULL , "PI", "Piauí");
INSERT INTO estados VALUES ( NULL , "RN", "Rio Grande do Norte");
INSERT INTO estados VALUES ( NULL , "RS", "Rio Grande do Sul");
INSERT INTO estados VALUES ( NULL , "RJ", "Rio de Janeiro");
INSERT INTO estados VALUES ( NULL , "RO", "Rondônia");
INSERT INTO estados VALUES ( NULL , "RR", "Roraima");
INSERT INTO estados VALUES ( NULL , "SC", "Santa Catarina");
INSERT INTO estados VALUES ( NULL , "SP", "São Paulo");
INSERT INTO estados VALUES ( NULL , "SE", "Sergipe");
INSERT INTO estados VALUES ( NULL , "TO", "Tocantins");
