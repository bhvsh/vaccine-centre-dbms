-- procedure definition of vDB_sch.addSession()
-- returns sessionID for the newly created session
-- yet to rewrite the code

CREATE PROCEDURE vDB_centreData.addSession
    @start_dt_time DATETIME, 
	@end_dt_time DATETIME,
	@wrid INTEGER NOT NULL, -- worker id
	@vid INTEGER NOT NULL -- vaccine id
AS
    DECLARE @sid INTEGER

    INSERT INTO vDB_centreData.Schedule(start_dt_time,end_dt_time,wid,vid)
    VALUES (@start_dt_time,@end_dt_time,@wid,@vid)

    SELECT TOP 1 sessionid FROM vDB_centreData.Schedule ORDER BY sessionid DESC
GO