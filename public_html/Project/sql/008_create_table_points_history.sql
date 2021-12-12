CREATE TABLE IF NOT EXISTS `PointsHistory` (
    `id` INT NOT NULL AUTO_INCREMENT
    ,`user_id` int NOT NULL
    ,`point_change` int NOT NULL
    ,`reason` VARCHAR(50)
    ,`created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
    ,PRIMARY KEY (`id`)
    ,FOREIGN KEY (`user_id`) REFERENCES Users(`id`)
)