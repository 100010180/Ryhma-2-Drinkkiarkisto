CREATE TABLE `kayttaja` 
( `id` INT(11) NOT NULL AUTO_INCREMENT , 
`sahkoposti` VARCHAR(50) NOT NULL , 
`kayttajatunnus` VARCHAR(50) NOT NULL , 
`salasana` VARCHAR(250) NOT NULL , 
`trn_date` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;