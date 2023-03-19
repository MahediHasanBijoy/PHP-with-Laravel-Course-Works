-- Project: Design a store database

-- Create your own store! Your store should sell one type of things, like clothing or bikes, whatever you want your store to specialize in. You should have a table for all the items in your store, and at least 5 columns for the kind of data you think you'd need to store. You should sell at least 15 items, and use select statements to order your items by price and show at least one statistic about the items.


create table bike_store(
    id integer primary key,
    brand varchar(30),
    model varchar(30),
    price integer,
    quantity integer
);

insert into bike_store values(1, 'suzuki', 'gixxer', 150000, 1);
insert into bike_store values(2, 'bajaj', 'pulser', 170000, 5);
insert into bike_store values(3, 'honda', 'cbr', 450000, 2);
insert into bike_store values(4, 'hero', 'hunk', 130000, 3);
insert into bike_store values(5, 'yamaha', 'r15', 500000, 4);

select * from bike_store order by price;

select avg(price) from bike_store;