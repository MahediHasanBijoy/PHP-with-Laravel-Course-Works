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



-- SQL AND, OR, NOT Operators
-- The WHERE clause can be combined with AND, OR, and NOT operators.
-- SELECT column1, column2, ...
-- FROM table_name
-- WHERE condition1 AND condition2 AND condition3 ...;

-- SELECT column1, column2, ...
-- FROM table_name
-- WHERE NOT condition;

select * from customer where city='salem' and postal_code='03080';
select * from customer where city='salem' or postal_code='03080';
select * from customer where not city='salem';


-- SQL ORDER BY Keyword
-- The ORDER BY keyword is used to sort the result-set in ascending or descending order.
-- The ORDER BY keyword sorts the records in ascending order by default. To sort the records in descending order, use the DESC keyword.
-- SELECT column1, column2, ...
-- FROM table_name
-- ORDER BY column1, column2, ... ASC|DESC;

select * from customer order by city;
select * from customer order by city desc;
-- This means that it orders by city, but if some rows have the same city, it orders them by fed_id:
select * from customer order by city, fed_id desc;



--


