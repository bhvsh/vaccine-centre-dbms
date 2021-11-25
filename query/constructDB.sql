-- 'b' stands for Beneficiary
CREATE TABLE Beneficiary
(
	buid INTEGER NOT NULL,
	bssn INTEGER NOT NULL,
	bname TEXT NOT NULL,
	bgender TEXT,
	baddress TEXT,
	bphone TEXT,
	PRIMARY KEY(buid,ssn)
)

-- 'w' stands for Vaccinator (Worker)
CREATE TABLE Vaccinator
(
	wid INTEGER NOT NULL,
	wssn INTEGER NOT NULL,
	wname TEXT NOT NULL,
	wgender TEXT,
	waddress TEXT,
	wphone TEXT,
	PRIMARY KEY(wid)
)

-- 'v' stands for Vaccine
CREATE TABLE Vaccine
(
	vid INTEGER NOT NULL,
	vname TEXT NOT NULL,
	vbrand TEXT NOT NULL,
	vdetail TEXT,
	interval_dt INTEGER NOT NULL
)

CREATE TABLE Rooms
(
	roomid INTEGER NOT NULL,
	floorid INTEGER NOT NULL
)

CREATE TABLE RoomUtils
(
	sessionid INTEGER NOT NULL,
	roomid INTEGER NOT NULL,
	start_dt_time TIMESTAMP, 
	end_dt_time TIMESTAMP,
	wid INTEGER NOT NULL,
	vid INTEGER NOT NULL,
	PRIMARY KEY(sessionid),
	FOREIGN KEY(roomid) REFERENCES Rooms(roomid),
	FOREIGN KEY(wid) REFERENCES Vaccinator(wid),
	FOREIGN KEY(vid) REFERENCES Vaccine(vid)
)

CREATE TABLE VaccineRecord
(
	buid INTEGER NOT NULL,
	vid INTEGER NOT NULL,
	tookDose1 BIT DEFAULT 0,
	dateDose1 TIMESTAMP,
	nextDue DATE,
	tookDose2 BIT DEFAULT 0,
	dateDose2 TIMESTAMP,
	FOREIGN KEY(buid) REFERENCES Beneficiary(buid)
)

CREATE TABLE Appointment
(
	appointmentid INTEGER NOT NULL,
	wid INTEGER,
	sessionid INTEGER NOT NULL,

	PRIMARY KEY(appointment#),
	FOREIGN KEY(wid) REFERENCES Vaccinator(wid),
	FOREIGN KEY(sessionid) REFERENCES RoomUtils(sessionid)
);