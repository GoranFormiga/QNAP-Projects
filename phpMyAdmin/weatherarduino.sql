CREATE TABLE `arduino`.`Weather` (

`Id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT 'Unique ID',
`Time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Event Date and Time',
`Microcontroller` VARCHAR( 30 ) NOT NULL COMMENT 'Unique ID of the Microcontroller',
`Temt6000Light` VARCHAR( 10 ) NOT NULL COMMENT 'Measured Light in Percentage',
`Bmp280Temperature` VARCHAR( 10 ) NOT NULL COMMENT 'Measured Temperature in Celsius',
`Bmp280Pressure` VARCHAR( 10 ) NOT NULL COMMENT 'Measured Pressure in Hectopascals',
`Dht22Temperature` VARCHAR( 10 ) NOT NULL COMMENT 'Measured Temperature in Celsius',
`Dht22Humidity` VARCHAR( 10 ) NOT NULL COMMENT 'Measured Humidity in Percentage',
`Mq135AirQuality` VARCHAR( 10 ) NOT NULL COMMENT 'Measured Air Quality in Part Per Million',
INDEX ( `Time` , `Microcontroller` )
) ENGINE = InnoDB;