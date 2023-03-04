CREATE TABLE PPL(
    ID int UNIQUE NOT NULL AUTO_INCREMENT,
    firstName varchar(255) DEFAULT "John",
    lastName varchar(255) DEFAULT "Doe",
    dateOfBirth DATE,
    gender ENUM('M','F','O'),
    email varchar(255),
    country varchar(255),
    city varchar(255),
    PRIMARY KEY(ID)
);