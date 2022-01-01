CREATE VIEW vDB_centreData.ViewAssignedSessions AS
SELECT S.wrid,sessionid,start_dt_time,end_dt_time,vname
FROM vDB_centreData.Vaccine V,vDB_centreData.Schedule S
WHERE S.vid=V.vid;

-- DROP VIEW vDB_centreData.ViewAssignedSessions

-- SELECT * FROM vDB_centreData.Schedule

-- SELECT * FROM vDB_centreData.ViewAssignedSessions WHERE wrid=201