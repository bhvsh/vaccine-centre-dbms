-- creating a schema 'vDB_centreData'
CREATE SCHEMA vDB_centreData
GO

-- 'w' stands for Vaccinator (Worker)
-- SELECT * FROM vDB_centreData.Vaccinator
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

-- SELECT * FROM vDB_centreData.Schedule
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

-- SELECT * FROM vDB_centreData.Appointment
CREATE TABLE vDB_centreData.Appointment
(
	appointmentid INTEGER NOT NULL IDENTITY(401, 1), -- appointment id + auto-increment from 401
	brid INTEGER NOT NULL, -- beneficiary id
	sessionid INTEGER NOT NULL,

	CONSTRAINT PK_Appointment PRIMARY KEY(appointmentid),
	CONSTRAINT FK_BeneficiaryAppointment FOREIGN KEY(brid) REFERENCES vDB_userData.Beneficiary(brid),
	CONSTRAINT FK_ScheduleAppointment FOREIGN KEY(sessionid) REFERENCES vDB_centreData.Schedule(sessionid)
);

CREATE TABLE vDB_centreData.Vstatus
(
	vstatus INTEGER NOT NULL,
	vsdescription TEXT NOT NULL,
	CONSTRAINT PK_Vstatus PRIMARY KEY(vstatus)
)

-- SELECT * FROM vDB_centreData.Vrecord
CREATE TABLE vDB_centreData.Vrecord
(
	brid INTEGER NOT NULL, -- beneficiary id
	vid INTEGER NOT NULL DEFAULT 0, -- vaccine id
	vstatus INTEGER DEFAULT 0, -- 0, not vaccinated; 1, partially vaccinated (Dose1); 2, fully vaccinated (Dose2)
	dateDose1 DATE,
	wridDose1 INTEGER,
	dateDose2 DATE,
	wridDose2 INTEGER,
	CONSTRAINT FK_BeneficiaryVrecord FOREIGN KEY(brid) REFERENCES vDB_userData.Beneficiary(brid) ON DELETE CASCADE,
	CONSTRAINT FK_VrecordDose FOREIGN KEY(vid) REFERENCES vDB_centreData.Vaccine(vid),
	CONSTRAINT FK_VstatusDesc FOREIGN KEY(vstatus) REFERENCES vDB_centreData.Vstatus(vstatus)
);