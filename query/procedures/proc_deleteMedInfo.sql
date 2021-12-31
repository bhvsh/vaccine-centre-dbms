-- Functional Requirement: Deleting the subject's record on request
-- procedure definition of vDB_sch.deleteMedInfo() - made for the 'Admin' user-group 
-- yet to rewrite the code

CREATE FUNCTION vDB_centreData.deleteBeneficiary(
    @brid INTEGER
)
RETURNS INTEGER
BEGIN
    -- Remove vaccination record + registration data (cascade) from the system
    DELETE FROM vDB_centreData.Vrecord
    WHERE brid=@brid

    -- Remove any appointments made by the user from the system
    DELETE FROM vDB_centreData.Appointment
    WHERE brid=@brid

    -- Remove authData from the system
    DELETE FROM vDB_authData.BeneficiaryAuthID
    WHERE brid=@brid

    RETURN 1
END