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

create table historique(
    idEchange int PRIMARY KEY AUTO_INCREMENT,
    utilisateur1 int,
    objet1 int,
    utilisateur2 int,
    objet2 int,
    etat int, 
    dateHeure datetime,
    Foreign Key (utilisateur1) REFERENCES Connection(idUtilisateur),
    Foreign Key (objet1) REFERENCES objet(idObjet),
    Foreign Key (utilisateur2) REFERENCES Connection(idUtilisateur),
    Foreign Key (objet2) REFERENCES objet(idObjet)
);

--0 en attente, 1 accepte, 2 refuser

