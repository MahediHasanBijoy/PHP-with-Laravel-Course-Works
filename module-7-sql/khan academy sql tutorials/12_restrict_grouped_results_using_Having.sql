-- Used table 'exercise_logs'

-- group calories by type
select type, sum(calories) as total_calories from exercise_logs group by type;

-- from grouped types select type which has calories more than 100

select type, sum(calories) as total_calories from exercise_logs group by type having total_calories > 100;