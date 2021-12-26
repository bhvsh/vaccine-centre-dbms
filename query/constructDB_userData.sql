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
	brid INTEGER NOT NULL IDENTITY(1001, 1), -- beneficiary id + auto-increment from 1001
	bname TEXT NOT NULL,
	bidtype INTEGER NOT NULL,
	biid TEXT NOT NULL,
	bgender TEXT,
	bdob DATE NOT NULL,
	baddress TEXT,
	bphone CHAR(10),	
	CONSTRAINT PK_Beneficiary PRIMARY KEY(brid),
	CONSTRAINT FK_BeneficiaryPhotoIDType FOREIGN KEY(bidtype) REFERENCES vDB_userData.IdentityType(id)
);