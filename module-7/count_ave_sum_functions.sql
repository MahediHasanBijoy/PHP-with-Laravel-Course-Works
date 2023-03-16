-- The COUNT() function returns the number of rows that matches a specified criterion.
-- SELECT COUNT(column_name)
-- FROM table_name
-- WHERE condition;

select count(AVAIL_BALANCE) from account where AVAIL_BALANCE > 1000;


-- The AVG() function returns the average value of a numeric column. 
-- SELECT AVG(column_name)
-- FROM table_name
-- WHERE condition;

select avg(AVAIL_BALANCE) from account where PENDING_BALANCE < 500;


-- The SUM() function returns the total sum of a numeric column. 
-- SELECT SUM(column_name)
-- FROM table_name
-- WHERE condition;

select sum(AVAIL_BALANCE) from account where PENDING_BALANCE < 500;
