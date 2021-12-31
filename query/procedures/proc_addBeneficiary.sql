-- procedure definition of vDB_userData.addBeneficiary
-- returns verification id (uniqueidentifier) for the newly created entry

CREATE PROCEDURE vDB_userData.addBeneficiary
    @bname TEXT, 
	@bidtype INTEGER,
	@biid TEXT,
	@bgender TEXT,
    @bdob DATE,
    @baddress TEXT,
	@bphone CHAR(10)
AS
    DECLARE @brid INTEGER

    INSERT INTO vDB_userData.Beneficiary(bname,bidtype,biid,bgender,bdob,baddress,bphone)
    VALUES (@bname,@bidtype,@biid,@bgender,@bdob,@baddress,@bphone)

    SET @brid = (SELECT TOP 1 brid FROM vDB_userData.Beneficiary ORDER BY brid DESC)

    INSERT INTO vDB_authData.BeneficiaryAuthID(brid)
    VALUES (@brid)

    SELECT TOP 1 buid FROM vDB_authData.BeneficiaryAuthID ORDER BY brid DESC
GO