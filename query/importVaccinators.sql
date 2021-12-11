-- query that will import all the rows into the 'Vaccinators' table using .csv file

BULK INSERT vDB_centreData.Vaccinators
FROM 'Vaccinator.csv'
WITH
(
    FIRSTROW = 2, -- as 1st one is header
    FIELDTERMINATOR = ',',  --CSV field delimiter
    ROWTERMINATOR = '\n',   --Use to shift the control to next row
    TABLOCK
);