-- procedure definition of vDB_sch.deleteVaccinator - made for the 'Admin' user-group 

CREATE PROCEDURE vDB_centreData.deleteVaccinator
    @wrid INTEGER
AS 

    -- Remove any appointments made by the user from the system
    DELETE FROM vDB_centreData.Appointment
    WHERE EXISTS(
        SELECT * FROM vDB_centreData.Schedule S
        WHERE wrid=@wrid AND S.sessionid=sessionid
    )

    -- Remove any appointments made by the user from the system
    DELETE FROM vDB_centreData.Schedule
    WHERE wrid=@wrid

    -- Remove authData from the system
    DELETE FROM vDB_authData.VaccinatorAuthID
    WHERE wrid=@wrid

    -- Remove userData from the system
    DELETE FROM vDB_centreData.Vaccinator
    WHERE wrid=@wrid

GO