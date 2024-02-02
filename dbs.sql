drop database DB22;
create database DB22;
USE DB22;


create table Utilisateur(
    id int primary key auto_increment,
    nom varchar(255) not null,
    email varchar(255) not null
);

describe Utilisateur;



create table Produit(
    id int primary key auto_increment;
    nom varchar(255) not null,
    prix float(2) not null,
    stock int not null
);

describe Produit;


create table Commande(
    id int primary key auto_increment,
    clientId int not null,
    foreign key (clientId) references Utilisateur(id),
    status boolean not null,
    date_ date
);

describe Commande;


create table ProductsCommand(
    commandId int not null,
    productId int not null,
    foreign key (commandId) references Commande(id),
    foreign key (productId) references Produit(id)
);

describe ProductsCommand;



SELECT u.*, c.* from Utilisateur as u inner join Commande as c on u.id = c.clientId;

