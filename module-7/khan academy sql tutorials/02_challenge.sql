-- What are your favorite books? You can make a database table to store them in! In this first step, create a table to store your list of books. It should have columns for id, name, and rating.

create table books(
    id integer primary key,
    name text,
    rating integer
);


-- Now, add three of your favorite books into the table.

insert into books values (1,'Harry Potter', 5);
insert into books values (2,'Old man and the sea', 4);
insert into books values (3,'Game of thrones', 9);