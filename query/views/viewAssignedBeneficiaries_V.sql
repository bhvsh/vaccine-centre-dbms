/*CREATE VIEW vDB_centreData.ViewAssignedBeneficiaries AS
SELECT wrid,appointmentid,brid,sessionid,bname,vstatus
FROM vDB_centreData.Appointment A,vDB_centreData.Vaccine V,vDB_centreData.Schedule S,vDB_userData.Beneficiary B,vDB_centreData.Vrecord VR
WHERE S.vid=V.vid AND S.sessionid=A.sessionid AND A.brid=B.brid AND VR.brid=B.brid
GROUP BY wrid;*/

CREATE VIEW vDB_centreData.ViewAssignedBeneficiaries AS
SELECT wrid,A.brid,appointmentid,A.sessionid,bname,vstatus
FROM vDB_centreData.Schedule S,vDB_centreData.Appointment A,vDB_userData.Beneficiary B,vDB_centreData.Vrecord VR
WHERE A.brid=B.brid AND VR.brid=B.brid AND A.sessionid=S.sessionid;