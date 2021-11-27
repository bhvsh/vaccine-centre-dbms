-- For floor 1
INSERT INTO vDB_sch.Rooms(rid,floorid,roomid)
VALUES
('A01',1,101),
('A02',1,102),
('A03',1,103),
('A04',1,104),
('A05',1,105),
('A06',1,106),
('A07',1,107),
('A08',1,108),
('A09',1,109),
('A10',1,110);

-- For floor 2
INSERT INTO vDB_sch.Rooms(rid,floorid,roomid)
VALUES
('B01',2,201),
('B02',2,202),
('B03',2,203),
('B04',2,204),
('B05',2,205),
('B06',2,206),
('B07',2,207),
('B08',2,208),
('B09',2,209),
('B10',2,210);

SELECT * FROM vDB_sch.Rooms;