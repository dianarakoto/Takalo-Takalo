create database takalo;

use takalo;


create table if not exists Connection (
    idUtilisateur int PRIMARY key AUTO_INCREMENT,
    Mail varchar (200),
    mdp  varchar (200),
    isAdmin boolean 
);

insert into connection values(null, 'rakoto@gmail.com', '123', false);
insert into connection values(null, 'raben@gmail.com', '123', true);

create table if not exists Categorie (
    idcategorie int PRIMARY key AUTO_INCREMENT,
    Nom varchar(200)
);

INSERT INTO Categorie VALUES (NULL,'vetements');
INSERT INTO Categorie VALUES (NULL,'chaussure');
INSERT INTO Categorie VALUES (NULL,'Electomenager');
INSERT INTO Categorie VALUES (NULL,'Meuble');
INSERT INTO Categorie VALUES (NULL,'cuisines');


create table if not exists Objet (
    idObjet int PRIMARY key AUTO_INCREMENT,
    NomObjet varchar(20),
    categorie int,
    proprietaire int,
    description varchar(5000),
    prix decimal,
    foreign key (categorie) references Categorie (idcategorie),
    foreign key (proprietaire) references Connection (idUtilisateur)
);

create table if not exists Photo (
    objet int,
    photo varchar(500),
    foreign key (objet) references Objet (idObjet)
); 

