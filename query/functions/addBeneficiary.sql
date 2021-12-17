-- function definition of vDB_userData.addBeneficiary()
-- returns verification id (uniqueidentifier) for the newly created entry

CREATE FUNCTION vDB_userData.addBeneficiary(
    @bname TEXT, 
	@bidtype INTEGER,
	@biid TEXT,
	@bgender TEXT,
    @bdob DATE,
    @baddress TEXT,
	@bphone CHAR(10)
)
RETURNS UNIQUEIDENTIFIER
BEGIN
    DECLARE @brid INTEGER

    INSERT INTO vDB_userData.Beneficiary(bname,bidtype,biid,bgender,bdob,baddress,bphone)
    VALUES (@bname,@bidtype,@biid,@bgender,@bdob,@baddress,@bphone)

    SET @brid = (SELECT LAST(brid) FROM vDB_userData.Beneficiary)

    INSERT INTO vDB_authData.BeneficiaryAuthID(brid)
    VALUES (@brid)

    RETURN (SELECT LAST(buid) FROM vDB_authData.BeneficiaryAuthID)
END