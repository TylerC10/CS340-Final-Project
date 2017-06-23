DROP TABLE IF EXISTS `league`;
DROP TABLE IF EXISTS `team`;
DROP TABLE IF EXISTS `coach`;
DROP TABLE IF EXISTS `player`;
DROP TABLE IF EXISTS `salary`;
DROP TABLE IF EXISTS `team_staff`;


CREATE TABLE league (
   league_id INT PRIMARY KEY AUTO_INCREMENT,
   league_name VARCHAR(100) NOT NULL,
   league_sport VARCHAR(100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE team (
   team_id INT PRIMARY KEY AUTO_INCREMENT,
   teamName VARCHAR(255) NOT NULL,
   teamCity VARCHAR(255),
   teamSport VARCHAR(255),
   team_sport_id INT,
   FOREIGN KEY (team_sport_id) REFERENCES league(league_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE salary (
    salary_id INT PRIMARY KEY AUTO_INCREMENT,
    salary_amount INT(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE coach (
    coach_id INT PRIMARY KEY AUTO_INCREMENT,
    fname VARCHAR(100) NOT NULL,
    lname VARCHAR(100) NOT NULL,
    coach_salary INT,
    coach_team_name VARCHAR(100),
    coach_team_id INT,
    FOREIGN KEY(coach_team_id) REFERENCES team(team_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY(coach_salary) REFERENCES salary(salary_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE player (
    player_id INT PRIMARY KEY AUTO_INCREMENT,
    fname VARCHAR(100) NOT NULL,
    lname VARCHAR(100) NOT NULL,
    player_salary INT,
    FOREIGN KEY(player_salary) REFERENCES salary(salary_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE team_staff (
    team_name_id VARCHAR(255),
    team_player_id INT,
    team_coach_id INT,
    PRIMARY KEY (team_name_id, team_player_id, team_coach_id),
    FOREIGN KEY (team_player_id) REFERENCES player(player_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (team_coach_id) REFERENCES coach(coach_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

