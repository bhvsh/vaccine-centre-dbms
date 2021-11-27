-- demonstration of TSQL-inline table-valued function
-- function definition of vDB_sch.retrieveRoomInfo()

CREATE FUNCTION vDB_sch.retrieveRoomInfo(
    @rx VARCHAR(3)
)
RETURNS TABLE AS
RETURN(
    SELECT floorid,roomid
    FROM vDB_sch.Rooms R
    WHERE R.rid=@rx
);