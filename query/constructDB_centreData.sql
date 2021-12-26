-- creating a schema 'vDB_centreData'
CREATE SCHEMA vDB_centreData
GO

-- 'w' stands for Vaccinator (Worker)
CREATE TABLE vDB_centreData.Vaccinator
(
	wrid INTEGER NOT NULL IDENTITY(201, 1),
	wname TEXT NOT NULL,
	wdob DATE NOT NULL,
	wgender TEXT,
	wphone CHAR(10),	
	CONSTRAINT PK_Vaccinator PRIMARY KEY(wrid)
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

CREATE TABLE vDB_centreData.Schedule
(
	sessionid INTEGER NOT NULL IDENTITY(301, 1), -- session id + auto-increment from 301
	start_dt_time DATETIME, 
	end_dt_time DATETIME,
	wrid INTEGER NOT NULL, -- worker id
	vid INTEGER NOT NULL, -- vaccine id
	CONSTRAINT PK_Schedule PRIMARY KEY(sessionid),
	CONSTRAINT FK_VaccinatorSchedule FOREIGN KEY(wrid) REFERENCES vDB_centreData.Vaccinator(wrid) ON DELETE CASCADE,
	CONSTRAINT FK_VaccineSchedule FOREIGN KEY(vid) REFERENCES vDB_centreData.Vaccine(vid) ON DELETE CASCADE
)

CREATE TABLE vDB_centreData.Appointment
(
	appointmentid INTEGER NOT NULL IDENTITY(401, 1), -- appointment id + auto-increment from 401
	brid INTEGER NOT NULL, -- beneficiary id
	sessionid INTEGER NOT NULL,

	PRIMARY KEY(appointmentid),
	CONSTRAINT FK_BeneficiaryAppointment FOREIGN KEY(brid) REFERENCES vDB_userData.Beneficiary(brid) ON DELETE CASCADE,
	CONSTRAINT FK_ScheduleAppointment FOREIGN KEY(sessionid) REFERENCES vDB_centreData.Schedule(sessionid) ON DELETE CASCADE
);

CREATE TABLE vDB_centreData.Vrecord
(
	brid INTEGER NOT NULL, -- beneficiary id
	vid INTEGER NOT NULL, -- vaccine id
	vstatus INTEGER DEFAULT 0, -- 0, not vaccinated; 1, partially vaccinated (Dose1); 2, fully vaccinated (Dose2)
	dateDose1 DATE,
	dateDose2 DATE,
	nextDue DATE,
	CONSTRAINT FK_BeneficiaryVrecord FOREIGN KEY(brid) REFERENCES vDB_userData.Beneficiary(brid) ON DELETE CASCADE,
	CONSTRAINT FK_VrecordDose FOREIGN KEY(vid) REFERENCES vDB_centreData.Vaccine(vid)
);