CREATE VIEW vDB_centreData.viewBenDose2 AS
SELECT brid,vname,vbrand,vdetail,dateDose1,wrid,wname
FROM vDB_centreData.Vaccine V,vDB_centreData.Vrecord VR,vDB_centreData.Vaccinator W
WHERE VR.vid=V.vid AND VR.wridDose2=W.wrid;

-- DROP VIEW vDB_centreData.viewBenDose2