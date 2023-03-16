-- select columns from two tables using similar keys
select 
    customer.cust_id, 
    FIRST_NAME, 
    Last_name, 
    address, 
    city, 
    birth_date 
from 
    customer, individual 
where customer.CUST_ID = individual.CUST_ID;
