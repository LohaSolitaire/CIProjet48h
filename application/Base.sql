CREATE DATABASE projetregime;

USE projetregime;

CREATE TABLE objectif(
    idObjectif INTEGER PRIMARY KEY AUTO_INCREMENT,
    labelObjectif VARCHAR(50)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE utilisateur(
    idUtilisateur INTEGER PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20),
    prenom VARCHAR(30),
    email VARCHAR(50),
    mdpHash VARCHAR(255),
    genre BOOLEAN,
    dateNaissance DATE,
    taille INTEGER,
    poids INTEGER,
    idObjectif INTEGER,
    foreign key (idObjectif) references objectif(idObjectif)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE aliment(
    idAliment INTEGER PRIMARY KEY AUTO_INCREMENT,
    labelAliment VARCHAR(50),
    idObjectif INTEGER,
    horaireAliment INTEGER,
    prix DOUBLE,
    foreign key (idObjectif) references objectif(idObjectif)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE regime(
    idRegime INTEGER PRIMARY KEY AUTO_INCREMENT,
    idUtilisateur INTEGER,
    dureeRegime INTEGER,
    listeAliment VARCHAR(200),
    foreign key (idUtilisateur) references utilisateur(idUtilisateur)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE code(
    idCode INTEGER PRIMARY KEY AUTO_INCREMENT,
    code VARCHAR(10),
    valeur DOUBLE
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE codeutilise(
    idCode INTEGER,
    dateUtilisation date,
    foreign key (idCode) references code(idCode)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE portefeuille(
    idPortefeuille INTEGER PRIMARY KEY AUTO_INCREMENT,
    idUtilisateur INTEGER,
    compte DOUBLE
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE historiquedepot(
    idPortefeuille INTEGER,
    dateDepot date,
    valeurDepot DOUBLE,
    foreign key (idPortefeuille) references portefeuille(idPortefeuille)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE historiqueachat(
    idPortefeuille INTEGER,
    dateAchat date,
    valeurAchat DOUBLE,
    foreign key (idPortefeuille) references portefeuille(idPortefeuille)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;



CREATE TABLE administrateur(
    idAdmin INTEGER PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(50),
    mdpAdminHash VARCHAR(255)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;