create database fadi;

CREATE TABLE compagnie (
         idCompagnie INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
         nomCompagnie VARCHAR(20) 
    ) ;

 CREATE TABLE ville (
        idVille INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        nomVille VARCHAR(20) 
    ) ;
CREATE TABLE vol (
    ->     idVol INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ->     idCompagne INT,
    ->     villeDepart VARCHAR(20),
    ->     villeArrivee VARCHAR(20),
    ->     prix float,
    ->     FOREIGN KEY (idCompagne) REFERENCES compagnie(idCompagnie) ON DELETE CASCADE
    -> ) ;
CREATE TABLE reservation (
    ->     idRes INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ->     idVol INT,
    ->     nom VARCHAR(20),
    ->     prenom VARCHAR(20),
    ->     numPasseport VARCHAR(20),
    ->     FOREIGN KEY (idVol) REFERENCES vol(idVol) ON DELETE CASCADE
    -> ) ;


insert into compagnie (nomCompagnie) values ('Tunisair');
insert into compagnie (nomCompagnie) values ('Air France');
insert into compagnie (nomCompagnie) values ('Nouvelair');
insert into compagnie (nomCompagnie) values ('Alitalia');



insert into ville (nomVille) values ('Tunis');
insert into ville (nomVille) values ('Paris');
insert into ville (nomVille) values ('Monastir');
insert into ville (nomVille) values ('Rome');
