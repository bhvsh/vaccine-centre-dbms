CREATE TABLE People
(
	uid INTEGER NOT NULL,
	ssn INTEGER NOT NULL,
	name TEXT NOT NULL,
	gender TEXT,
	address TEXT,
	phone TEXT,
	PRIMARY KEY(uid,ssn)
);

CREATE TABLE Vaccinator
(
	eid INTEGER NOT NULL,
	ssn INTEGER NOT NULL,
	name TEXT NOT NULL,
	gender TEXT,
	address TEXT,
	phone TEXT,
	PRIMARY KEY(employee#)
);

CREATE TABLE Vaccine
(
	vcodeid INTEGER,
	name TEXT,
	brand TEXT,
	description TEXT,
	interval_dt INTEGER
);

CREATE TABLE Rooms
(
	roomid INTEGER NOT NULL,
	floorid INTEGER NOT NULL
);

CREATE TABLE RoomUtils
(
	sessionid INTEGER NOT NULL,
	room# INTEGER NOT NULL,
	start_dt_time TIMESTAMP, 
	end_dt_time TIMESTAMP,
	vcode# INTEGER NOT NULL
);

CREATE TABLE VaccineRecord
(
	uid INTEGER NOT NULL,
	tookDose1 BIT DEFAULT 0,
	dateDose1 TIMESTAMP,
	nextDue DATE,
	tookDose2 BIT DEFAULT 0,
	dateDose2 TIMESTAMP,
);

CREATE TABLE Appointment
(
	appointment# INTEGER,
	employee# INTEGER,
	session# INTEGER NOT NULL,
	
	PRIMARY KEY(appointment#)
);