-- Functional Requirement: Immunization registration
-- yet to rewrite the code

CREATE FUNCTION vDB_sch.markBeneficiary(
    @aid INTEGER
)
RETURNS BIT
BEGIN
    DECLARE @tookDose1 BIT
    DECLARE @buid INTEGER
    DECLARE @sid INTEGER

    SET @sid = (SELECT sessionid FROM vDB_sch.Appointment A WHERE A.buid=@buid)
    SET @buid = (SELECT buid FROM vDB_sch.Appointment A WHERE A.buid=@buid)
    SET @tookDose1 = (SELECT tookDose1 FROM vDB_sch.Vrecord V WHERE V.buid=@buid)

    IF (@tookDose1 = 0)
    BEGIN
        UPDATE vDB_sch.Vrecord
        SET tookDose1 = 1, sidDose1=@sid
        WHERE buid=@buid
    END
    
    ELSE
    BEGIN
        UPDATE vDB_sch.Vrecord
        SET tookDose2 = 1, sidDose2=@sid
        WHERE buid=@buid
    END

    RETURN 1
END