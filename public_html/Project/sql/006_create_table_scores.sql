CREATE TABLE IF NOT EXISTS  `Scores`
(
    `id`         int auto_increment not null,
    `user_id`    int,
    `score`      int not null,
    `created`    timestamp default current_timestamp,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`)
)