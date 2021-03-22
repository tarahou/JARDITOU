CREATE DATABASE `hotel_eva`;
USE `hotel_eva`  ;
CREATE TABLE Client(
    cli_num     Int NOT NULL ,
    cli_nom     varchar (50) NOT NULL,
    cli_adresse  varchar (50) NOT NULL, 
    cli_tel       varchar(30) NOT NULL,
    CONSTRAINT Client_PK PRIMARY KEY (cli_num)
);
CREATE TABLE Commande(
    com_num     Int NOT NULL,
    cli_num     Int NOT NULL,
    com_date    datetime,
    com_obs       varchar(50) NOT NULL,
    CONSTRAINT Commande_PK PRIMARY KEY (com_num),
    CONSTRAINT Commande_Client_FK FOREIGN KEY (cli_num) REFERENCES Client(cli_num)
);
CREATE TABLE Produit(
    pro_num Int NOT NULL,
    pro_libelle varchar(50) NOT NULL,
    pro_description varchar(50) NOT NULL,
        CONSTRAINT Produit_PK PRIMARY KEY (pro_num)
   
);
CREATE TABLE est_compose(
    com_num Int NOT NULL,
    pro_num Int NOT NULL,
    est_qte Int NOT NULL,
        CONSTRAINT est_compose_PK PRIMARY KEY (com_num),
         CONSTRAINT est_compose_Commande_FK FOREIGN KEY (com_num) REFERENCES Commande(com_num),
         CONSTRAINT est_compose_Produit_FK FOREIGN KEY (pro_num) REFERENCES Produit(pro_num)
);