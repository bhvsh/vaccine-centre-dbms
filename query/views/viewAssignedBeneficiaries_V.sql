CREATE VIEW vDB_centreData.ViewAssignedBeneficiaries AS
SELECT appointmentid,brid,sessionid,bname,vname
FROM vDB_centreData.Appointment A,vDB_centreData.Vaccine V,vDB_centreData.Schedule S,vDB_userData.Beneficiary
WHERE S.vid=V.vid AND S.sessionid=A.sessionid AND A.brid=B.brid;