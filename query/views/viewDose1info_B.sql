CREATE VIEW vDB_centreData.viewBenDose1 AS
SELECT brid,vname,vbrand,vdetail,dateDose1,wrid,wnameDose1
FROM vDB_centreData.Vaccine V,vDB_centreData.Vrecord VR,vDB_centreData.Vaccinator W
WHERE VR.vid=V.vid AND VR.wridDose1=W.wrid;
