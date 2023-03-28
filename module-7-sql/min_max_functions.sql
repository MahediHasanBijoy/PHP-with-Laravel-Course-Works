-- The SQL MIN() and MAX() Functions
-- The MIN() function returns the smallest value of the selected column.

-- The MAX() function returns the largest value of the selected column.

select min(AVAIL_BALANCE) as lowest_bal from account;     -- 0

select max(AVAIL_BALANCE) as highest_bal from account;     -- 50000
