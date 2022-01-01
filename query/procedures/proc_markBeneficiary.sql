-- Functional Requirement: Immunization registration
-- yet to rewrite the code

CREATE PROCEDURE vDB_centreData.markBeneficiary
    @aid INTEGER
AS
    DECLARE @date DATE
    DECLARE @brid INTEGER
    DECLARE @sid INTEGER
    DECLARE @vid INTEGER
    DECLARE @wrid INTEGER
    DECLARE @vstat INTEGER

    SET @brid = (SELECT brid FROM vDB_centreData.Appointment WHERE appointmentid=@aid)
    SET @sid = (SELECT sessionid FROM vDB_centreData.Appointment WHERE appointmentid=@aid)
    SET @date = (SELECT cast(start_dt_time as date) [date] FROM vDB_centreData.Schedule WHERE sessionid=@sid)
    SET @vid = (SELECT vid FROM vDB_centreData.Schedule WHERE sessionid=@sid)
    SET @wrid = (SELECT wrid FROM vDB_centreData.Schedule WHERE sessionid=@sid)
    SET @vstat = (SELECT vstatus FROM vDB_centreData.Vrecord WHERE brid=@brid)
    
    -- Update Vstatus row of brid
    UPDATE vDB_centreData.Vrecord
    SET vid=@vid, dateDose1=@date, wridDose1=@wrid
    WHERE brid=@brid;

    IF(@vstat = 0)
    BEGIN
        UPDATE vDB_centreData.Vrecord
        SET vstatus=1
        WHERE brid=@brid;
    END

    ELSE
    BEGIN
        UPDATE vDB_centreData.Vrecord
        SET vstatus=2
        WHERE brid=@brid;
    END

    -- Delete the appointment aid
    DELETE FROM vDB_centreData.Appointment
    WHERE appointmentid=@aid

GO

-- DROP PROCEDURE vDB_centreData.markBeneficiary
  /*DECLARE @tookDose1 BIT
    DECLARE @buid INTEGER
    DECLARE @sid INTEGER

    SET @sid = (SELECT sessionid FROM vDB_centreData.Appointment WHERE buid=@buid)
    SET @buid = (SELECT buid FROM vDB_centreData.Appointment WHERE buid=@buid)
    SET @tookDose1 = (SELECT tookDose1 FROM vDB_centreData.Vrecord WHERE buid=@buid)

    IF (ISNULL(@tookDose1,1) = 1)
    BEGIN
        UPDATE vDB_centreData.Vrecord
        SET tookDose1 = 1, sidDose1=@sid
        WHERE buid=@buid
    END
    
    ELSE
    BEGIN
        UPDATE vDB_centreData.Vrecord
        SET tookDose2 = 1, sidDose2=@sid
        WHERE buid=@buid
    END
*/