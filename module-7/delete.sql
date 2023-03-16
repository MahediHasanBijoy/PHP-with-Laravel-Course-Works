-- SQL Delete statement
-- The DELETE statement is used to delete existing records in a table.
-- DELETE FROM table_name WHERE condition;

delete from customer where CUST_ID=14;

-- NOTICE: If you omit the WHERE clause, all records in the table will be deleted!


-- DELETE all records from a table
delete from table_name;