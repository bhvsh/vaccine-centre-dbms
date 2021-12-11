-- creating a schema 'vDB_centreData'
CREATE SCHEMA vDB_centreData
GO

-- 'w' stands for Vaccinator (Worker)
CREATE TABLE vDB_centreData.Vaccinator
(
	wid INTEGER NOT NULL IDENTITY(201, 1), -- worker id + auto-increment from 201
	wssn INTEGER NOT NULL,
	wname TEXT NOT NULL,
	wgender TEXT,
	waddress TEXT,
	wphone TEXT,
	CONSTRAINT PK_Vaccinator PRIMARY KEY(wid)
)

-- 'v' stands for Vaccine
CREATE TABLE vDB_centreData.Vaccine
(
	vid INTEGER NOT NULL, -- vaccine id
	vname TEXT NOT NULL,
	vbrand TEXT NOT NULL,
	vdetail TEXT,
	CONSTRAINT PK_Vaccine PRIMARY KEY(vid)
)

CREATE TABLE vDB_centreData.Rooms
(
	rid VARCHAR(3) NOT NULL, -- room id
	floorid INTEGER NOT NULL,
	roomid INTEGER NOT NULL,
	CONSTRAINT PK_Rooms PRIMARY KEY(rid)
)

CREATE TABLE vDB_centreData.Schedule
(
	sessionid INTEGER NOT NULL IDENTITY(301, 1), -- session id + auto-increment from 301
	rid VARCHAR(3) NOT NULL, -- room id
	start_dt_time DATETIME, 
	end_dt_time DATETIME,
	wid INTEGER NOT NULL, -- worker id
	vid INTEGER NOT NULL, -- vaccine id
	CONSTRAINT PK_Schedule PRIMARY KEY(sessionid),
	CONSTRAINT FK_RoomsSchedule FOREIGN KEY(rid) REFERENCES vDB_centreData.Rooms(rid) ON DELETE CASCADE,
	CONSTRAINT FK_VaccinatorSchedule FOREIGN KEY(wid) REFERENCES vDB_centreData.Vaccinator(wid) ON DELETE CASCADE,
	CONSTRAINT FK_VaccineSchedule FOREIGN KEY(vid) REFERENCES vDB_centreData.Vaccine(vid) ON DELETE CASCADE
)

CREATE TABLE vDB_centreData.Appointment
(
	appointmentid INTEGER NOT NULL IDENTITY(401, 1), -- appointment id + auto-increment from 401
	buid INTEGER NOT NULL, -- beneficiary id
	sessionid INTEGER NOT NULL,

	PRIMARY KEY(appointmentid),
	CONSTRAINT FK_BeneficiaryAppointment FOREIGN KEY(buid) REFERENCES vDB_userData.Beneficiary(buid) ON DELETE CASCADE,
	CONSTRAINT FK_ScheduleAppointment FOREIGN KEY(sessionid) REFERENCES vDB_centreData.Schedule(sessionid) ON DELETE CASCADE
);

CREATE TABLE vDB_centreData.Vrecord
(
	buid INTEGER NOT NULL, -- beneficiary id
	vid INTEGER NOT NULL, -- vaccine id
	Dose1 INTEGER,
	Dose2 INTEGER,
	tookDose1 BIT DEFAULT 0,
	sidDose1 INTEGER,
	nextDue DATE,
	tookDose2 BIT DEFAULT 0,
	sidDose2 INTEGER,
	CONSTRAINT FK_BeneficiaryVrecord FOREIGN KEY(buid) REFERENCES vDB_userData.Beneficiary(buid) ON DELETE CASCADE,
	CONSTRAINT FK_VrecordDose1 FOREIGN KEY(Dose1) REFERENCES vDB_centreData.Vaccine(vid),
	CONSTRAINT FK_VrecordDose2 FOREIGN KEY(Dose2) REFERENCES vDB_centreData.Vaccine(vid)
);