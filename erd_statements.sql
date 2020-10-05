Drop database if EXISTS persoon2;
Create database persoon2;
Use persoon2;

CREATE TABLE Account (
    account_id int not null,
	email varchar(255) UNIQUE not null,
	password varchar(255) not null,
	PRIMARY KEY(ID)
);

CREATE TABLE Persoon (
    persoon_id int not null,
	naam varchar(255) not null,
    tussenvoegsel varchar (255),
	achternaam varchar(255) not null,
    gebruikersnaam varchar(255) not null,
    FOREIGN KEY(account_id) REFERENCES Account(ID)
);

CREATE TABLE usertype (
    usertype_id int not null,
    TYPE,
    created_at DATE,
    updated_at TIMESTAMP
);
