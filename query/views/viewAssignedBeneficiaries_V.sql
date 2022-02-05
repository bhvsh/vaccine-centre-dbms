CREATE VIEW vDB_centreData.ViewAssignedBeneficiaries AS
SELECT wrid,A.brid,appointmentid,A.sessionid,bname,vstatus
FROM vDB_centreData.Schedule S,vDB_centreData.Appointment A,vDB_userData.Beneficiary B,vDB_centreData.Vrecord VR
WHERE A.brid=B.brid AND VR.brid=B.brid AND A.sessionid=S.sessionid;