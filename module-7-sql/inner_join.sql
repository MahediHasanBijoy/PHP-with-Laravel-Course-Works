-- inner join / join is same

-- A JOIN clause is used to combine rows from two or more tables, based on a related column between them.

-- SELECT column_name(s) FROM table1 INNER JOIN table2 ON table1.column_name = table2.column_name;

select customer.CUST_ID, first_name, last_name, address, city from customer inner join individual on customer.CUST_ID = individual.CUST_ID where city = 'salem';
