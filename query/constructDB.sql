-- creating a schema 'vDB_sch'
CREATE SCHEMA vDB_sch
GO

-- 'b' stands for Beneficiary
CREATE TABLE vDB_sch.Beneficiary
(
	buid INTEGER NOT NULL, -- beneficiary id
	bssn INTEGER NOT NULL,
	bname TEXT NOT NULL,
	bgender TEXT,
	baddress TEXT,
	bphone TEXT,
	PRIMARY KEY(buid)
)

-- 'w' stands for Vaccinator (Worker)
CREATE TABLE vDB_sch.Vaccinator
(
	wid INTEGER NOT NULL, -- worker id
	wssn INTEGER NOT NULL,
	wname TEXT NOT NULL,
	wgender TEXT,
	waddress TEXT,
	wphone TEXT,
	PRIMARY KEY(wid)
)

-- 'v' stands for Vaccine
CREATE TABLE vDB_sch.Vaccine
(
	vid INTEGER NOT NULL, -- vaccine id
	vname TEXT NOT NULL,
	vbrand TEXT NOT NULL,
	vdetail TEXT,
	interval_dt INTEGER NOT NULL,
	PRIMARY KEY(vid)
)

CREATE TABLE vDB_sch.Rooms
(
	rid VARCHAR(3) NOT NULL, -- room id
	floorid INTEGER NOT NULL,
	roomid INTEGER NOT NULL,
	PRIMARY KEY(rid)
)

CREATE TABLE vDB_sch.Schedule
(
	sessionid INTEGER NOT NULL,
	rid VARCHAR(3) NOT NULL, -- room id
	start_dt_time DATETIME, 
	end_dt_time DATETIME,
	wid INTEGER NOT NULL, -- worker id
	vid INTEGER NOT NULL, -- vaccine id
	PRIMARY KEY(sessionid),
	CONSTRAINT FK_RoomsSchedule FOREIGN KEY(rid) REFERENCES vDB_sch.Rooms(rid),
	CONSTRAINT FK_VaccinatorSchedule FOREIGN KEY(wid) REFERENCES vDB_sch.Vaccinator(wid),
	CONSTRAINT FK_VaccineSchedule FOREIGN KEY(vid) REFERENCES vDB_sch.Vaccine(vid)
)

CREATE TABLE vDB_sch.Vrecord
(
	buid INTEGER NOT NULL, -- beneficiary id
	vid INTEGER NOT NULL, -- vaccine id
	tookDose1 BIT DEFAULT 0,
	dateDose1 DATE,
	nextDue DATE,
	tookDose2 BIT DEFAULT 0,
	dateDose2 DATE,
	CONSTRAINT FK_BeneficiaryVrecord FOREIGN KEY(buid) REFERENCES vDB_sch.Beneficiary(buid)
)

CREATE TABLE vDB_sch.Appointment
(
	appointmentid INTEGER NOT NULL,
	wid INTEGER NOT NULL, -- worker id
	sessionid INTEGER NOT NULL,

	PRIMARY KEY(appointmentid),
	CONSTRAINT FK_VaccinatorAppointment FOREIGN KEY(wid) REFERENCES vDB_sch.Vaccinator(wid),
	CONSTRAINT FK_RoomUtilsAppointment FOREIGN KEY(sessionid) REFERENCES vDB_sch.Schedule(sessionid)
);