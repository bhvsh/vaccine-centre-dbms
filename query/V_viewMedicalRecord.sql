CREATE VIEW W_viewVacRecord AS
SELECT buid,bssn,bname,bgender,baddress,bphone,vname,vbrand,tookDose1,tookDose2,nextDue
FROM Beneficiary B,Vaccine V,VaccineRecord VR
WHERE B.buid=VR.buid AND VR.vid=V.vid;