-- SQL UPDATE statement
-- The UPDATE statement is used to modify the existing records in a table.

/* 
UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition; 
*/

-- IMPORTaNT NOTICE: If you omit the WHERE clause, all records in the table will be updated!
UPDATE customer set city='Luisiana' where CUST_ID=1;
