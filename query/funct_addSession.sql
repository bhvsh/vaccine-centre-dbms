-- function definition of vDB_sch.addSession()
-- returns sessionID for the newly created session

CREATE FUNCTION vDB_sch.addSession(
    @rid VARCHAR(3),
    @start_dt_time DATETIME, 
	@end_dt_time DATETIME,
	@wid INTEGER NOT NULL, -- worker id
	@vid INTEGER NOT NULL -- vaccine id
)
RETURNS INTEGER
BEGIN
    DECLARE @sid INTEGER

    INSERT INTO vDB_sch.Schedule(rid,start_dt_time,end_dt_time,wid,vid)
    VALUES (@rid,@start_dt_time,@end_dt_time,@wid,@vid)

    SET @sid = (SELECT LAST(sessionid) FROM vDB_sch.Schedule)

    RETURN @sid
END