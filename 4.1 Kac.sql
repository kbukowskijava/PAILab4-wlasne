ALTER TABLE Klienci ADD COLUMN `Email` VARCHAR(245) UNIQUE;
ALTER TABLE Klienci ADD COLUMN `Haslo` VARCHAR(100) NOT NULL;
=============================================================
ALTER TABLE Klienci CHANGE COLUMN `Nr domu` `Nr_domu` VARCHAR(5) NOT NULL;
ALTER TABLE Klienci CHANGE COLUMN `Nr mieszkania` `Nr_mieszkania` VARCHAR(5);
=============================================================
ALTER TABLE Klienci CHANGE COLUMN `Miasto` `Miejscowosc` VARCHAR(60) NOT NULL;