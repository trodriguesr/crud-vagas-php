CREATE TABLE `vacancies` (
  	`id` INT(11) NOT NULL AUTO_INCREMENT,
  	`title` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
  	`description` TEXT(65535) NOT NULL COLLATE 'utf8_general_ci',
  	`status` ENUM('s','n') NOT NULL COLLATE 'utf8_general_ci',
  	`date` TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  	PRIMARY KEY (`id`) USING BTREE
  )
  COLLATE='utf8_general_ci'
  ENGINE=InnoDB
  AUTO_INCREMENT=1;