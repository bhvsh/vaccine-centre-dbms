-- procedure definition of vDB_userData.addVaccinator
-- returns verification id (uniqueidentifier) for the newly created entry

CREATE PROCEDURE vDB_centreData.addVaccinator
    @wname TEXT, 
	@wgender TEXT,
    @wdob DATE,
	@wphone CHAR(10)
AS
    DECLARE @wrid INTEGER

    INSERT INTO vDB_centreData.Vaccinator(wname,wgender,wdob,wphone)
    VALUES (@wname,@wgender,@wdob,@wphone)

    SET @wrid = (SELECT TOP 1 wrid FROM vDB_centreData.Vaccinator ORDER BY wrid DESC)

    INSERT INTO vDB_authData.VaccinatorAuthID(wrid)
    VALUES (@wrid)

    SELECT TOP 1 wuid FROM vDB_authData.VaccinatorAuthID ORDER BY wrid DESC
GO


EXEC vDB_centreData.addVaccinator 'Karthik Naik','Male','1993-07-23',9749275434
