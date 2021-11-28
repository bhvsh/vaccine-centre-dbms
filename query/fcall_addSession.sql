-- EXAMPLE QUERY FOR vDB_sch.addSession()

-- rid: A01
-- start_dt_time: 2021-12-01 09:00
-- end_dt_time: 2021-12-01 11:00
-- wid: 201
-- vid: 1 (COVAXIN)
-- RETURNS: LAST(sessionid)

SELECT vDB_sch.addSession('A01','2021-12-01 09:00','2021-12-01 11:00',201,1);