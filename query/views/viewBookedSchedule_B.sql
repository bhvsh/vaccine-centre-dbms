CREATE VIEW vDB_centreData.ViewBookedSchedule AS
SELECT brid,appointmentid,start_dt_time,end_dt_time,vname
FROM vDB_centreData.Appointment A,vDB_centreData.Schedule S,vDB_centreData.Vaccine V
WHERE S.sessionid=A.sessionid AND S.vid=v.vid;

-- DROP VIEW vDB_centreData.ViewBookedSchedule

-- SELECT * FROM vDB_centreData.ViewBookedSchedule WHERE brid=1015