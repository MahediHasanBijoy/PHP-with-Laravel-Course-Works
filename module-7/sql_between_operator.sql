-- The SQL BETWEEN Operator
-- The BETWEEN operator selects values within a given range. The values can be numbers, text, or dates.
/* 
SELECT column_name(s)
FROM table_name
WHERE column_name BETWEEN value1 AND value2; 
*/

select * from account where AVAIL_BALANCE between 500 and 5000;
