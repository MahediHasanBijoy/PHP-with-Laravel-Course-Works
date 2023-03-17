
-- The HAVING clause was added to SQL because the WHERE keyword cannot be used with aggregate functions and GROUP BY.

--select COUNT(cust_id), address, city from customer GROUP BY city;

/*
SELECT column_name(s)
FROM table_name
WHERE condition
GROUP BY column_name(s)
HAVING condition
ORDER BY column_name(s);  
*/

select * from customer GROUP BY city HAVING postal_code = '03080';
