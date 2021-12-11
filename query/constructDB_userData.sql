-- creating a schema 'vDB_userData'
CREATE SCHEMA vDB_userData
GO

CREATE TABLE vDB_userData.IdentityType
(
	id INTEGER NOT NULL IDENTITY(1, 1),
	idtype TEXT NOT NULL,
	CONSTRAINT PK_IdentityType PRIMARY KEY(id)
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
	CONSTRAINT PK_Beneficiary PRIMARY KEY(buid),
	CONSTRAINT FK_BeneficiaryPhotoIDType FOREIGN KEY(bidtype) REFERENCES vDB_userData.IdentityType(id)
);