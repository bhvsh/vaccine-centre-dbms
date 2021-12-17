-- function definition of vDB_userData.addVaccinator()
-- returns verification id (uniqueidentifier) for the newly created entry

CREATE FUNCTION vDB_userData.addBeneficiary(
    @wname TEXT, 
	@widtype INTEGER,
	@wiid TEXT,
	@wgender TEXT,
    @wdob DATE,
    @waddress TEXT,
	@wphone CHAR(10)
)
RETURNS UNIQUEIDENTIFIER
BEGIN
    DECLARE @wrid INTEGER

    INSERT INTO vDB_centreData.Vaccinator(wname,widtype,wiid,wgender,wdob,waddress,wphone)
    VALUES (@wname,@widtype,@wiid,@wgender,@wdob,@waddress,@wphone)

    SET @wrid = (SELECT LAST(wrid) FROM vDB_centreData.Vaccinator)

    INSERT INTO vDB_authData.VaccinatorAuthID(wrid)
    VALUES (@wrid)

    RETURN (SELECT LAST(wuid) FROM vDB_authData.VaccinatorAuthID)
END