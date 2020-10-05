Drop database if EXISTS persoon1;
Create database persoon1;
Use persoon1;

CREATE TABLE Account (
    ID int not null,
	email varchar(255) UNIQUE not null,
	password varchar(255) not null,
	PRIMARY KEY(ID)
);

CREATE TABLE Persoon (
    account_id int not null,
	naam varchar(255) not null,
    tussenvoegsel varchar (255),
	achternaam varchar(255) not null,
    gebruikersnaam varchar(255) not null,
    FOREIGN KEY(account_id) REFERENCES Account(ID)
);

Insert into Account(email, password)
Values ('Natalie@inmail.com','populis');

Insert into Persoon(account_id, naam, tussenvoegsel, achternaam, gebruikersnaam)
Values (3, 'Natalie', 'per', 'Parks', 'Natalieparks');
