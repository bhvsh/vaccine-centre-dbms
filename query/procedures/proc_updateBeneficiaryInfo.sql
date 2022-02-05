CREATE PROCEDURE vDB_userData.updateBeneficiary
    @brid INTEGER,
    @bname TEXT, 
    @bdob DATE,
    @bgender TEXT,
	@bphone CHAR(10)
AS
  UPDATE vDB_userData.Beneficiary
  SET bname=@bname, bdob=@bdob, bgender=@bgender, bphone=@bphone
  WHERE brid=@brid
GO