-- Inserting default values in 'IdentityType'
-- SELECT * FROM vDB_userData.IdentityType
INSERT INTO vDB_userData.IdentityType(idtype)
VALUES
('AADHAR'),('EPIC - Voter ID'),('State DL'),('PAN'),('NPR'),('Pension Card');

-- Inserting default values in 'Vaccine'
-- SELECT * FROM vDB_centreData.Vaccine
INSERT INTO vDB_centreData.Vaccine(vid,vname,vbrand,vdetail)
VALUES
(0,'NaN','NaN','NaN'),
(801,'Covaxin','Bharat Biotech','Whole-Virion Inactivated Coronavirus Vaccine'),
(802,'Covisheld','Serum Institute of India','Recombinant COVID-19 vaccine based on Viral Vector Technology'),
(821,'Sputnik V','Gamaleya National Center, Russia','Human Adenovirus vaccine');

-- Inserting default values in 'Vstatus'
-- SELECT * FROM vDB_centreData.Vstatus
INSERT INTO vDB_centreData.Vstatus
VALUES
(0,'Not Vaccinated'), (1,'Partially Vaccinated'), (2,'Fully Vaccinated');