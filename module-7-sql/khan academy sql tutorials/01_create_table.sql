-- create table and insert data

/* 
Grocery Lists
    Bananas(4),
    Peanut Butters(2),
    Dark Chocolate Bars(3)
 */

CREATE TABLE groceries 
(
    id int primary key auto_increment,
    name varchar(30),
    quantity integer(20)
);


-- insert data to groceries table
INSERT INTO groceries (name, quantity) VALUES ('Bananas', 4);