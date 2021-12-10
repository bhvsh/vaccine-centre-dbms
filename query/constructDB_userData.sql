-- creating a schema 'vDB_userData'
CREATE SCHEMA vDB_userData
GO

CREATE TABLE vDB_userData.BenID
(
	bid INTEGER NOT NULL,
	idtype TEXT NOT NULL,
	biid TEXT NOT NULL
)

-- 'b' stands for Beneficiary
CREATE TABLE vDB_userData.Beneficiary
(
	buid INTEGER NOT NULL IDENTITY(101, 1), -- beneficiary id + auto-increment from 101
	bname TEXT NOT NULL,
	bidtype INTEGER NOT NULL,
	biid TEXT NOT NULL,
	bgender TEXT,
	bage INTEGER NOT NULL,
	baddress TEXT,
	bphone CHAR(10),
	PRIMARY KEY(buid),
	CONSTRAINT FK_bidsBeneficiary FOREIGN KEY(buid) REFERENCES vDB_userData.BenID(bid) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT FK_bidsBeneficiary FOREIGN KEY(idtype) REFERENCES vDB_userData.BenID(idtype) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT FK_bidsBeneficiary FOREIGN KEY(biid) REFERENCES vDB_userData.BenID(biid) ON DELETE CASCADE ON UPDATE CASCADE
)
CREATE TABLE vDB_userData.Vrecord
(
	buid INTEGER NOT NULL, -- beneficiary id
	vid INTEGER NOT NULL, -- vaccine id
	tookDose1 BIT DEFAULT 0,
	sidDose1 INTEGER,
	nextDue DATE,
	tookDose2 BIT DEFAULT 0,
	sidDose2 INTEGER,
	CONSTRAINT FK_BeneficiaryVrecord FOREIGN KEY(buid) REFERENCES vDB_userData.Beneficiary(buid) ON DELETE CASCADE
);