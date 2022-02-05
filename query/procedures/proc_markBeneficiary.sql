-- Functional Requirement: Immunization registration

CREATE PROCEDURE vDB_centreData.markBeneficiary
    @aid INTEGER
AS
    DECLARE @date DATE
    DECLARE @brid INTEGER
    DECLARE @sid INTEGER
    DECLARE @vid INTEGER
    DECLARE @wrid INTEGER
    DECLARE @wname VARCHAR(100)
    DECLARE @vstat INTEGER

    SET @brid = (SELECT brid FROM vDB_centreData.Appointment WHERE appointmentid=@aid)
    SET @sid = (SELECT sessionid FROM vDB_centreData.Appointment WHERE appointmentid=@aid)
    SET @date = (SELECT cast(start_dt_time as date) [date] FROM vDB_centreData.Schedule WHERE sessionid=@sid)
    SET @vid = (SELECT vid FROM vDB_centreData.Schedule WHERE sessionid=@sid)
    SET @wrid = (SELECT wrid FROM vDB_centreData.Schedule WHERE sessionid=@sid)
    SET @wname = (SELECT wname FROM vDB_centreData.Vaccinator WHERE wrid=@wrid)
    SET @vstat = (SELECT vstatus FROM vDB_centreData.Vrecord WHERE brid=@brid)
    
    -- Update Vstatus row of brid
    UPDATE vDB_centreData.Vrecord
    SET vid=@vid
    WHERE brid=@brid;

    IF(@vstat = 0)
    BEGIN
        UPDATE vDB_centreData.Vrecord
        SET vstatus=1,wridDose1=@wrid,wnameDose1=@wname
        WHERE brid=@brid;
    END

    ELSE
    BEGIN
        UPDATE vDB_centreData.Vrecord
        SET vstatus=2,wridDose2=@wrid,wnameDose2=@wname
        WHERE brid=@brid;
    END

    -- Delete the appointment aid
    DELETE FROM vDB_centreData.Appointment
    WHERE appointmentid=@aid

GO