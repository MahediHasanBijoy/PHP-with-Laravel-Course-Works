-- select columns from two tables using similar keys
-- this is one kind of joining
select 
    customer.cust_id, 
    individual.FIRST_NAME, 
    individual.Last_name, 
    customer.address, 
    customer.city, 
    individual.birth_date 
from 
    customer, individual 
where customer.CUST_ID = individual.CUST_ID;
