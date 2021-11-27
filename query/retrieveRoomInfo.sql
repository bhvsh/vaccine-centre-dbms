-- demonstration of TSQL-inline table-valued function
-- EXAMPLE QUERY FOR vDB_sch.retrieveRoomInfo() - rid set to 'A01'

SELECT *
FROM vDB_sch.retrieveRoomInfo('A01');