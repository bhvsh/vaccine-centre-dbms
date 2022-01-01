CREATE PROCEDURE vDB_centreData.bookSession
    @brid INTEGER,
    @sessionid INTEGER
AS
    INSERT INTO vDB_centreData.Appointment (sessionid,brid)
    VALUES
    (@sessionid,@brid)
GO 