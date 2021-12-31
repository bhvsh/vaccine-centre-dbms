-- procedure definition of vDB_sch.addSession()
-- returns sessionID for the newly created session
-- yet to rewrite the code

CREATE PROCEDURE vDB_sch.addSession
    @start_dt_time DATETIME, 
	@end_dt_time DATETIME,
	@wid UNIQUEIDENTIFIER NOT NULL, -- worker id
	@vid INTEGER NOT NULL -- vaccine id
AS
    DECLARE @sid INTEGER

    INSERT INTO vDB_sch.Schedule(start_dt_time,end_dt_time,wid,vid)
    VALUES (@start_dt_time,@end_dt_time,@wid,@vid)

    SELECT LAST(sessionid) FROM vDB_sch.Schedule
GO