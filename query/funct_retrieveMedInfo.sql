-- function definition of vDB_sch.retrieveMedInfo() - made for the 'Beneficiary' user-group

CREATE FUNCTION vDB_sch.retrieveMedInfo(
    @rssn INTEGER
)
RETURNS TABLE AS
RETURN(
    SELECT buid,bssn,bname,bgender,baddress,bphone,vname,vbrand,tookDose1,tookDose2,nextDue
    FROM vDB_sch.Beneficiary B,vDB_sch.Vaccine V,vDB_sch.VaccineRecord VR
    WHERE B.buid=VR.buid AND VR.vid=V.vid AND B.bssn=@rssn
);