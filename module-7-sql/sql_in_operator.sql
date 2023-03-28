-- SQL IN operator
-- The IN operator allows you to specify multiple values in a WHERE clause

/* 
SELECT column_name(s)
FROM table_name
WHERE column_name IN (value1, value2, ...); 
*/

-- or,

/* 
SELECT column_name(s)
FROM table_name
WHERE column_name IN (SELECT STATEMENT);
 */

-- select customers that lives in salem or waltham or newton cities:
SELECT * FROM customer WHERE city IN ('salem', 'waltham', 'newton');

-- select customers that are not live in salem or newton
SELECT * FROM customer WHERE city NOT IN ('salem', 'newton');
