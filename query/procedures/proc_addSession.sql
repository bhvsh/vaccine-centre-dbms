-- procedure definition of vDB_sch.addSession()
-- returns sessionID for the newly created session
-- yet to rewrite the code

CREATE PROCEDURE vDB_centreData.addSession
    @start_dt_time DATETIME, 
	@end_dt_time DATETIME,
	@wrid INTEGER, -- worker id
	@vid INTEGER -- vaccine id
AS
    INSERT INTO vDB_centreData.Schedule(start_dt_time,end_dt_time,wrid,vid)
    VALUES (@start_dt_time,@end_dt_time,@wrid,@vid)

    SELECT TOP 1 sessionid FROM vDB_centreData.Schedule ORDER BY sessionid DESC
GO