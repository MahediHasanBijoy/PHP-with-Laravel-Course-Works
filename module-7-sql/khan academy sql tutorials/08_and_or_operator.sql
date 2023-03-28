-- Queries with AND / OR
CREATE TABLE exercise_logs
    (id INTEGER PRIMARY KEY AUTO_INCREMENT,
    type varchar(50),
    minutes INTEGER, 
    calories INTEGER,
    heart_rate INTEGER);

-- insert data to exercise_logs table
INSERT INTO exercise_logs(type, minutes, calories, heart_rate) VALUES ("biking", 30, 100, 110);
INSERT INTO exercise_logs(type, minutes, calories, heart_rate) VALUES ("biking", 10, 30, 105);
INSERT INTO exercise_logs(type, minutes, calories, heart_rate) VALUES ("dancing", 15, 200, 120);

-- find all data
select * from exercise_logs;

-- find all where calories is higher than 50
select * from exercise_logs where calories > 50 order by calories;

-- find all whre calories is higher than 50 and minutes is less than 30
select * from exercise_logs where calories > 50 and minutes < 30;

-- find all where calories is higher than 50 or heart rate >  100
select * from exercise_logs where calories > 50 or heart_rate >100;