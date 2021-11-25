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

CREATE VIEW P_viewMedicalRecord AS
SELECT ssn,name,gender,address,phone,tookDose1,tookDose2,nextDue
FROM People;