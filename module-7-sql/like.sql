-- SQL LIKE operator

-- The LIKE operator is used in a WHERE clause to search for a specified pattern in a column.

/* 
There are two wildcards often used in conjunction with the LIKE operator:

    - The percent sign (%) represents zero, one, or multiple characters
    - The underscore sign (_) represents one, single character
 */

/*
SELECT column1, column2, ...
FROM table_name
WHERE columnN LIKE pattern;
*/

-- select all first names that starts with j
select * from individual where FIRST_NAME LIKE 'j%';

-- select all first names that ends with n
select * from individual where FIRST_NAME LIKE '%n';

-- select all first names that contains 'ar' in that name
select * from individual where FIRST_NAME LIKE '%ar%';

-- select all first names that has a in second position of the name
select * from individual where FIRST_NAME LIKE '_a%';
