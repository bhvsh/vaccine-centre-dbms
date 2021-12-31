CREATE VIEW vDB_centreData.ViewSchedule AS
SELECT sessionid,start_dt_time,end_dt_time,wname,vname
FROM vDB_centreData.Vaccine V,vDB_centreData.Schedule S,vDB_centreData.Vaccinator W
WHERE S.vid=V.vid AND S.wrid=W.wrid;