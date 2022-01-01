-- View of the Vaccination Records made for the 'Admin' user-group

CREATE VIEW vDB_centreData.AdminView_Beneficiary AS
SELECT VR.brid,bname,bdob,bgender,bphone,vsdescription
FROM vDB_userData.Beneficiary B,vDB_centreData.Vrecord VR,vDB_centreData.Vstatus VS
WHERE B.brid=VR.brid AND VR.vstatus=VS.vstatus;