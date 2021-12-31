-- Functional Requirement: Accessing vaccine records
-- View of the Vaccination Records made for the 'Vaccinator' user-group

CREATE VIEW W_viewVacRecord AS
SELECT buid,bssn,bname,bgender,baddress,bphone,vname,vbrand,tookDose1,tookDose2,nextDue
FROM vDB_sch.Beneficiary B,vDB_sch.Vaccine V,vDB_sch.VaccineRecord VR, vDB_sch.Schedule S
WHERE B.buid=VR.buid AND VR.vid=V.vid AND S.buid=B.buid AND S.sessionid=VR;