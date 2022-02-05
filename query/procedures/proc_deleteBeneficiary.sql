-- Functional Requirement: Deleting the subject's record on request
-- procedure definition of vDB_sch.deleteMedInfo() - made for the 'Admin' user-group 

CREATE PROCEDURE vDB_centreData.deleteBeneficiary
    @brid INTEGER
AS  
    -- Remove authData from the system
    DELETE FROM vDB_authData.BeneficiaryAuthID
    WHERE brid=@brid

    -- Remove userData from the system
    DELETE FROM vDB_userData.Beneficiary
    WHERE brid=@brid

    -- Remove any appointments made by the user from the system
    DELETE FROM vDB_centreData.Appointment
    WHERE brid=@brid

    -- Remove vaccination record + registration data (cascade) from the system
    DELETE FROM vDB_centreData.Vrecord
    WHERE brid=@brid
    
GO