CREATE TABLE IF NOT EXISTS `CompetitionParticipants` (
    `id` int AUTO_INCREMENT not null PRIMARY KEY,
    `comp_id` int not null,
    `user_id` int not null,
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY (`user_id`, `comp_id`),
    FOREIGN KEY(`comp_id`) REFERENCES `Competitions`(`id`),
    FOREIGN KEY(`user_id`) REFERENCES `Users`(`id`)
)