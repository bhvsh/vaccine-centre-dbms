CREATE VIEW vDB_centreData.viewBenDose1 AS
SELECT vname,vbrand,vdetail,dateDose1,wrid,wname
FROM vDB_centreData.Vaccine V,vDB_centreData.Vrecord VR,vDB_centreData.Vaccinator W
WHERE VR.vid=V.vid AND VR.wridDose1=W.wrid;