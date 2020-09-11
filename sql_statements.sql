CREATE TABLE Account (
    ID int not null,
	email varchar(255) UNIQUE,
	password varchar(255),
	PRIMARY KEY(ID)
);

CREATE TABLE Persoon (
    account_id int not null,
	naam varchar(255),
    tussenvoegsel varchar (255),
	achternaam varchar(255),
    gebruikersnaam varchar(255),
    FOREIGN KEY(account_id) REFERENCES Account(ID)
);