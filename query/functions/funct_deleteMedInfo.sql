-- Functional Requirement: Deleting the subject's record on request
-- function definition of vDB_sch.deleteMedInfo() - made for the 'Admin' user-group

CREATE FUNCTION vDB_sch.deleteMedInfo(
    @rssn CHAR(12)
)
RETURNS INTEGER
BEGIN
    DECLARE @buid INTEGER
    
    SET @buid = (SELECT buid FROM vDB_sch.Appointment A WHERE A.bssn=@rssn)
    
    DELETE FROM vDB_sch.Vrecord
    WHERE buid=@rssn

    RETURN 1
END