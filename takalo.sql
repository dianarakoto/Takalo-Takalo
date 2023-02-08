create database takalo;

use takalo;


create table if not exists Connection (
    idUtilisateur int PRIMARY key AUTO_INCREMENT,
    Mail varchar (200),
    mdp  varchar (200),
    isAdmin boolean 
);

insert into connection values(null, 'rakoto@gmail.com', '123', false);
insert into connection values(null, 'rasoa@gmail.com', '123', true);
insert into connection values(null, 'rabodo@gmail.com', '123', false);

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
    description text,
    prix decimal,
    foreign key (categorie) references Categorie (idcategorie),
    foreign key (proprietaire) references Connection (idUtilisateur)
);
insert into Objet values(NULL, 'Toyota', 'voiture', 1, 'Voiture sortie en 2015, avec 4 places', 1000000);
insert into Objet values(NULL, 'vista', 'Mixeur', 2, 'article neuf', 10000);
insert into Objet values(NULL, 'H&M', 'jupe', 3, 'taille L ou EUR:38,simile en cuir', 100);
insert into Objet values(NULL, 'Tissaya', 'chaussure', 1, 'talon sandale de 9cm de long ,pointure 38', 1000000);
insert into Objet values(NULL, 'vista', 'four', 2, 'artivle neuf', 5200);
insert into Objet values(NULL, 'Apple', 'Telephone', 3, 'Iphone14 Prox max,1To,batt:100%,model USA', 596000);


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

insert into historique values (NULL,3,2,1,1,1,'2023-01-24');
insert into historique values (NULL,3,2,2,2,3,'2023-01-15');
insert into historique values (NULL,3,3,3,2,1,'2023-01-29');
insert into historique values (NULL,2,2,2,3,3,'2023-02-05');
insert into historique values (NULL,2,3,1,1,2,'2022-12-30');


--0 en attente, 1 accepte, 2 refuser

