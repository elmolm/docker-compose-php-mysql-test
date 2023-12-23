CREATE TABLE `tab_test`
(
    `id`        int    NOT NULL AUTO_INCREMENT,
    `timestamp` bigint NOT NULL,
    `message`   varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_0900_ai_ci;

INSERT INTO `tab_test` (`timestamp`, `message`) VALUES
(UNIX_TIMESTAMP(NOW()), 'Just had a great day! #happy'),
(UNIX_TIMESTAMP(NOW()) + 3600, 'Exploring new places today. #adventure'),
(UNIX_TIMESTAMP(NOW()) + 7200, 'Coding all night. #programmerlife'),
(UNIX_TIMESTAMP(NOW()) + 10800, 'Coffee is my best friend. #coffeelover'),
(UNIX_TIMESTAMP(NOW()) + 14400, 'Excited for the weekend! #weekendvibes'),
(UNIX_TIMESTAMP(NOW()) + 18000, 'Learning new things every day. #growth'),
(UNIX_TIMESTAMP(NOW()) + 21600, 'Movie night with friends. #movienight'),
(UNIX_TIMESTAMP(NOW()) + 25200, 'Just finished a good book. #booklover'),
(UNIX_TIMESTAMP(NOW()) + 28800, 'Grateful for the little things. #gratitude'),
(UNIX_TIMESTAMP(NOW()) + 32400, 'Productive day at work. #worklifebalance');
