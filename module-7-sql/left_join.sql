-- SQL LEFT JOIN Keyword
-- The LEFT JOIN keyword returns all records from the left table (table1), and the matching records from the right table (table2). The result is 0 records from the right side, if there is no match.

/* 
SELECT column_name(s)
FROM table1
LEFT JOIN table2
ON table1.column_name = table2.column_name; 
*/

select customer.CUST_ID, customer.ADDRESS, customer.CITY, individual.FIRST_NAME, individual.LAST_NAME from customer left join individual ON customer.CUST_ID = individual.CUST_ID;
