-- find total quantity in groceries table
select sum(quantity) as total from groceries;


-- find total quantity of items in each ailse (don't select other column rather than the column used for group by and aggregate functions)
select ailse, sum(quantity) from groceries group by ailse;
