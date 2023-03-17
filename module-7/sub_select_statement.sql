-- first select query will act as a table  
-- sub select must be enclosed with parenthesis and give an alias


select CUST_ID, total from (select CUST_ID, sum(AVAIL_BALANCE) as total from account group by CUST_ID) as Balance where total>5000;
