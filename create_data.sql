INSERT INTO league (league_name, league_sport)
VALUES ("Global Football Federation", "American Football"),
       ("International Football League", "American Football"),
       ("International Football Federation", "American Football");
       
INSERT INTO salary (salary_amount)
VALUES (1000),
        (10000),
        (100000),
        (1000000),
        (10000000),
        (100000000),
        (1000000000);
        
INSERT INTO team (teamName, teamCity, teamSport, team_sport_id)
VALUES ("Bravehearts", "Anaheim", "American Football",(SELECT league_id FROM league WHERE league_name = "Global Football Federation")),
       ("Warriors", "Los Angelse", "American Football",(SELECT league_id FROM league WHERE league_name = "International Football League")),
       ("Icicles", "Moscow", "American Football", (SELECT league_id FROM league WHERE league_name = "International Football Federation"));
       
INSERT INTO coach (fname, lname, coach_salary, coach_team_name, coach_team_id)
VALUES  ("James", "Graben", (SELECT salary_amount FROM salary WHERE salary_amount = 1000000), (SELECT teamName FROM team WHERE teamName = "Bravehearts"), 
        (SELECT team_id FROM team WHERE teamName = "Bravehearts")),
        ("Michael", "Flipper", (SELECT salary_amount FROM salary WHERE salary_amount = 10000000),(SELECT teamName FROM team WHERE teamName = "Warriors"),
        (SELECT team_id FROM team WHERE teamName = "Warriors")),
        ("William", "Belameaux", (SELECT salary_amount FROM salary WHERE salary_amount = 100000000),(SELECT teamName FROM team WHERE teamName = "Icicles"),
        (SELECT team_id FROM team WHERE teamName = "Icicles"));
        
INSERT INTO player (fname, lname, player_salary)
VALUES  ("Barry", "Ganders", (SELECT salary_amount FROM salary WHERE salary_amount = 1000000)),
        ("Joe", "Missouri", (SELECT salary_amount FROM salary WHERE salary_amount = 1000000)),
        ("Steven", "Taylor", (SELECT salary_amount FROM salary WHERE salary_amount = 10000000));
        
INSERT INTO team_staff (team_name_id, team_player_id, team_coach_id)
VALUES  ((SELECT team_id FROM team WHERE teamName = "Bravehearts"), (SELECT player_id FROM player WHERE fname = "Barry" AND lname = "Ganders"),
            (SELECT coach_id FROM coach WHERE fname = "James" AND lname = "Graben")),
        ((SELECT team_id FROM team WHERE teamName = "Warriors"), (SELECT player_id FROM player WHERE fname = "Joe" AND lname = "Missouri"),
            (SELECT coach_id FROM coach WHERE fname = "Michael" AND lname = "Flipper")),
        ((SELECT team_id FROM team WHERE teamName = "Icicles"), (SELECT player_id FROM player WHERE fname = "Steven" AND lname = "Taylor"),
            (SELECT coach_id FROM coach WHERE fname = "William" AND lname = "Belameaux"));






















