Drop database if EXISTS persoon2;
Create database persoon2;
Use persoon2;

CREATE TABLE usertype (
    usertype_id int not null,
    TYPE,
    created_at DATE,
    updated_at TIMESTAMP,
    PRIMARY KEY(usertype_id)
);

Drop database if EXISTS persoon1;
Create database persoon1;
Use persoon1;

Create database persoon1;
Use persoon1;

CREATE TABLE Usertype (
    usertype_id int not null PRIMARY Key,
    TYPE INT,
    created_at DATE,
    updated_at TIMESTAMP
);

CREATE TABLE Account (
    account_id int not null PRIMARY KEY,
    type int,
	email varchar(255) not null,
	password varchar(255) not null,
    admin INT not null,
    created_at DATE,
    updated_at TIMESTAMP,
    Foreign Key (type) REFERENCES Usertype(usertype_id)
);

CREATE TABLE Persoon (
    persoon_id int not null PRIMARY Key,
    account_id int,
	naam varchar(255) not null,
    tussenvoegsel varchar (255),
	achternaam varchar(255) not null,
    gebruikersnaam varchar(255) not null,
    admin INT not null,
    created_at DATE,
    updated_at TIMESTAMP,
    FOREIGN KEY(account_id) REFERENCES Account(account_id)
);

Insert into Account(email, password)
Values ('Rianne@inmail.com','1234');

Insert into Persoon(account_id, naam, tussenvoegsel, achternaam, gebruikersnaam)
Values (1, 'Rianne', '', 'Anema', 'Rianneanema');