-- Given table for this challenge

CREATE TABLE todo_list (id INTEGER PRIMARY KEY, item varchar(30), minutes INTEGER);
INSERT INTO todo_list VALUES (1, "Wash the dishes", 15);
INSERT INTO todo_list VALUES (2, "vacuuming", 20);
INSERT INTO todo_list VALUES (3, "Learn some stuff on KA", 30);

-- Here's a table containing a TODO list with the number of minutes it will take to complete each item. Insert another item to your todo list with the estimated minutes it will take.

-- Solution:
insert into todo_list values (4, "learn sql from ka", 45);


-- Select the SUM of minutes it will take to do all of the items on your TODO list. You should only have one SELECT statement.

-- Solution:
select sum(minutes) from todo_list;