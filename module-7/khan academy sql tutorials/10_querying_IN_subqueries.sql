CREATE TABLE exercise_logs
    (id INTEGER PRIMARY KEY AUTO_INCREMENT,
    type varchar(30),
    minutes INTEGER, 
    calories INTEGER,
    heart_rate INTEGER);

INSERT INTO exercise_logs(type, minutes, calories, heart_rate) VALUES ("biking", 30, 100, 110);
INSERT INTO exercise_logs(type, minutes, calories, heart_rate) VALUES ("biking", 10, 30, 105);
INSERT INTO exercise_logs(type, minutes, calories, heart_rate) VALUES ("dancing", 15, 200, 120);
INSERT INTO exercise_logs(type, minutes, calories, heart_rate) VALUES ("tree climbing", 30, 70, 90);
INSERT INTO exercise_logs(type, minutes, calories, heart_rate) VALUES ("tree climbing", 25, 72, 80);
INSERT INTO exercise_logs(type, minutes, calories, heart_rate) VALUES ("rowing", 30, 70, 90);
INSERT INTO exercise_logs(type, minutes, calories, heart_rate) VALUES ("hiking", 60, 80, 85);


-- find all the outer activity
select * from exercise_logs where type="biking" or type="tree climbing" or type="rowing" or type="hiking";

-- we can use 'IN' operator to select all outer activity with shorter code
select * from exercise_logs where type IN ("biking", "tree climbing", "rowing", "hiking");

-- find all indoor activity 
select * from exercise_logs where type NOT IN ("biking", "tree climbing", "rowing", "hiking");



-- Create another table
CREATE TABLE drs_favorites
    (id INTEGER PRIMARY KEY AUTO_INCREMENT,
    type varchar(50),
    reason varchar(50));

INSERT INTO drs_favorites(type, reason) VALUES ("biking", "Improves endurance and flexibility.");
INSERT INTO drs_favorites(type, reason) VALUES ("hiking", "Increases cardiovascular health.");


-- find all exercise which are recommended by dr.
SELECT * from exercise_logs where type in (select type from drs_favorites);


-- LIKE operator
-- find all exercise which dr. favorites for cardiovascular
select * from exercise_logs where type in (select type from drs_favorites where reason like "%cardiovascular%");