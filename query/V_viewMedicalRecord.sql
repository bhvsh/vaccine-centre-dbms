CREATE VIEW V_viewMedicalRecord AS
SELECT ssn,name,gender,address,phone,tookDose1,tookDose2,nextDue
FROM People;