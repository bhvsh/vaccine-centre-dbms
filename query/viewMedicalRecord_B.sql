/*
Beneficiary Name
Age
Gender
SSN
Unique Health ID
Beneficiary Ref ID

Vaccine Name
Name of Dose
Next Due date
Vaccinated by
Vaccination At
*/

CREATE VIEW B_viewVacRecord AS
SELECT buid,bssn,bname,bgender,baddress,bphone,vname,vbrand,tookDose1,tookDose2,nextDue
FROM Beneficiary B,Vaccine V,VaccineRecord VR
WHERE B.buid=VR.buid AND VR.vid=V.vid;