CREATE TABLE IF NOT EXISTS `Competitions`(
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(240) not null,
    `duration` int default 3,
    `expires` TIMESTAMP DEFAULT (DATE_ADD(CURRENT_TIMESTAMP, INTERVAL `duration` DAY)),
    `current_reward` int DEFAULT (`starting_reward`),
    `starting_reward` int DEFAULT 1,
    `join_fee` int default 1,
    `current_participants` int default 0,
    `min_participants` int DEFAULT 3,
    `paid_out` tinyint(1) DEFAULT 0,
    `min_score` int DEFAULT 1,
    `first_place_per` int not null,
    `second_place_per` int not null,
    `third_place_per` int not null,
    `cost_to_create` int DEFAULT 1,
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    check (`min_score` >= 0),
    check (`starting_reward` >= 1),
    check (`current_reward` >= `starting_reward`),
    check (`min_participants` >= 3),
    check (`current_participants` >= 0),
    check(`join_fee` >= 0)
)