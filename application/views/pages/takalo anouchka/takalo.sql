create database takalo;

use takalo;


create table if not exists Connection (
    idUtilisateur int PRIMARY key AUTO_INCREMENT,
    Mail varchar (20),
    mdp  varchar (20),
    isAdmin boolean 
);

create table if not exists Categorie (
    idategorie int PRIMARY key AUTO_INCREMENT,
    Nom varchar(20)
);

INSERT INTO Categorie VALUES (NULL,'vetements');
INSERT INTO Categorie VALUES (NULL,'chaussure');
INSERT INTO Categorie VALUES (NULL,'Electomenager');
INSERT INTO Categorie VALUES (NULL,'Meuble');
INSERT INTO Categorie VALUES (NULL,'cuisines');


create table if not exists Objet (
    idObjet int PRIMARY key AUTO_INCREMENT,
    NomObjet varchar(20),
    categorie varchar(20),
    proprietaire varchar(20),
    description varchar(20),
    prix decimal ,

    foreign key (categorie) references Categorie (Nom),
    foreign key (proprietaire) references Connection (idUtilisateur)
);

create table if not exists Photo (
    objet varchar(20),
    photo varchar(500),

    foreign key (objet) references Objet (NomObjet)
); 

