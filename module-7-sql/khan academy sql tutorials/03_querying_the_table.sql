-- create table groceries with fields name, quantity, aisle

create table groceries(
    id int(11) primary key,
    name varchar(30),
    quantity int(11),
    ailse int(11)
);

-- insert some data
insert into groceries values (1, 'bananas', 5, 2);
insert into groceries values (2, 'peanut butter', 10, 3);
insert into groceries values (3, 'cookies', 12, 5);
insert into groceries values (4, 'chips', 5, 2);
insert into groceries values (5, 'cold drinks', 5, 12);


-- select all items from groceries table
select * from groceries;

-- select names from groceries
select name from groceries

-- select all columns from groceries where ailse is greater than 3 and descending order
select * from groceries where ailse>3 order by ailse desc;