/* Some common sql commands */

-- SELECT - extracts data from a database
-- UPDATE - updates data in a database
-- DELETE - deletes data from a database
-- INSERT INTO - inserts new data into a database
-- CREATE DATABASE - creates a new database
-- ALTER DATABASE - modifies a database
-- CREATE TABLE - creates a new table
-- ALTER TABLE - modifies a table
-- DROP TABLE - deletes a table
-- CREATE INDEX - creates an index (search key)
-- DROP INDEX - deletes an index

/* 
The SELECT statement is used to select data from a database.
Syntax:
    SELECT column1, column2, ...
    FROM table_name;
 */

-- Select all fields from a table
SELECT * FROM Customers;

-- Select CustomerName and City fields from Customer table
SELECT CustomerName, City FROM Customer;


/* 
The SELECT DISTINCT statement is used to return only distinct (different) values.

Syntax:
    SELECT DISTINCT column1, column2, ...
    FROM table_name;
 */

SELECT DISTINCT city FROM customer;


/* 
The WHERE clause is used to filter records.

It is used to extract only those records that fulfill a specified condition.

Syntax:
    SELECT column1, column2, ...
    FROM table_name
    WHERE condition;

*/
select * from customer where city='Salem';

/* 
Operators in The WHERE Clause

=	        Equal	
>	        Greater than	
<	        Less than	
>=	        Greater than or equal	
<=	        Less than or equal	
<>	        Not equal. Note: In some versions of SQL this operator may be written as !=	
BETWEEN	    Between a certain range	
LIKE	    Search for a pattern	
IN	        To specify multiple possible values for a column

 */

