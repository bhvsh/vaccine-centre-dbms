-- for authentication purposes
CREATE SCHEMA vDB_authData
GO

CREATE TABLE vDB_authData.BeneficiaryAuthID
(
    brid INTEGER NOT NULL,
    buid UNIQUEIDENTIFIER NOT NULL DEFAULT NEWID(),
    CONSTRAINT PK_BeneficiaryAuth PRIMARY KEY(brid),
    CONSTRAINT FK_BeneficiaryRegIDAuth FOREIGN KEY(brid) REFERENCES vDB_userData.beneficiary(brid)
)

CREATE TABLE vDB_authData.VaccinatorAuthID
(
    wrid INTEGER NOT NULL,
    wuid UNIQUEIDENTIFIER NOT NULL DEFAULT NEWID(),
    CONSTRAINT PK_VaccinatorAuth PRIMARY KEY(wrid),
    CONSTRAINT FK_VaccinatorRegIDAuth FOREIGN KEY(wrid) REFERENCES vDB_centreData.Vaccinator(wrid)
);