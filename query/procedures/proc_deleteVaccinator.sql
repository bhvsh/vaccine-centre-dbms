-- procedure definition of vDB_sch.deleteVaccinator - made for the 'Admin' user-group 

CREATE PROCEDURE vDB_centreData.deleteVaccinator
    @wrid INTEGER
AS  
    -- Remove authData from the system
    DELETE FROM vDB_authData.VaccinatorAuthID
    WHERE wrid=@wrid

    -- Remove any appointments made by the user from the system
    DELETE FROM vDB_centreData.Schedule
    WHERE wrid=@wrid
    
GO