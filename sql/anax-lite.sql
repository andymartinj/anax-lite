-- MySQL Script generated by MySQL Workbench
-- Sun May  7 18:47:14 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema anjd16
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema anjd16
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `anjd16` DEFAULT CHARACTER SET latin1 ;
USE `anjd16` ;

-- -----------------------------------------------------
-- Table `anjd16`.`Product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `anjd16`.`Product` ;

CREATE TABLE IF NOT EXISTS `anjd16`.`Product` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(50) NULL DEFAULT NULL,
  `description` VARCHAR(100) NULL DEFAULT NULL,
  `image` VARCHAR(50) NULL DEFAULT NULL,
  `price` INT(11) NULL DEFAULT NULL,
  `inventory` INT(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `title_unique` (`title` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `anjd16`.`Cart`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `anjd16`.`Cart` ;

CREATE TABLE IF NOT EXISTS `anjd16`.`Cart` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `prod_id` INT(11) NULL DEFAULT NULL,
  `quantity` INT(11) NULL DEFAULT NULL,
  `customer` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `index_prod` (`prod_id` ASC),
  INDEX `c_index` (`customer` ASC),
  CONSTRAINT `Cart_ibfk_1`
    FOREIGN KEY (`prod_id`)
    REFERENCES `anjd16`.`Product` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 20
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `anjd16`.`Order`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `anjd16`.`Order` ;

CREATE TABLE IF NOT EXISTS `anjd16`.`Order` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `order_number` INT(11) NULL DEFAULT NULL,
  `order_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `customer` INT(11) NULL DEFAULT NULL,
  `prod_id` INT(11) NULL DEFAULT NULL,
  `quantity` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `prod_id` (`prod_id` ASC),
  INDEX `o_index` (`order_number` ASC),
  CONSTRAINT `Order_ibfk_1`
    FOREIGN KEY (`prod_id`)
    REFERENCES `anjd16`.`Product` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 14
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `anjd16`.`ProdCategory`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `anjd16`.`ProdCategory` ;

CREATE TABLE IF NOT EXISTS `anjd16`.`ProdCategory` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `category` CHAR(20) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `category` (`category` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `anjd16`.`Prod2Cat`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `anjd16`.`Prod2Cat` ;

CREATE TABLE IF NOT EXISTS `anjd16`.`Prod2Cat` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `product_id` INT(11) NULL DEFAULT NULL,
  `category_id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `product_id` (`product_id` ASC),
  INDEX `category_id` (`category_id` ASC),
  CONSTRAINT `Prod2Cat_ibfk_1`
    FOREIGN KEY (`product_id`)
    REFERENCES `anjd16`.`Product` (`id`),
  CONSTRAINT `Prod2Cat_ibfk_2`
    FOREIGN KEY (`category_id`)
    REFERENCES `anjd16`.`ProdCategory` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `anjd16`.`StockoutLog`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `anjd16`.`StockoutLog` ;

CREATE TABLE IF NOT EXISTS `anjd16`.`StockoutLog` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `when` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product` INT(11) NULL DEFAULT NULL,
  `name` VARCHAR(50) NULL DEFAULT NULL,
  `inventory` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `product` (`product` ASC),
  CONSTRAINT `StockoutLog_ibfk_1`
    FOREIGN KEY (`product`)
    REFERENCES `anjd16`.`Product` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `anjd16`.`Users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `anjd16`.`Users` ;

CREATE TABLE IF NOT EXISTS `anjd16`.`Users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` CHAR(255) NOT NULL,
  `password` CHAR(255) NOT NULL,
  `role` CHAR(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name` (`name` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 23
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `anjd16`.`content`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `anjd16`.`content` ;

CREATE TABLE IF NOT EXISTS `anjd16`.`content` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `path` CHAR(120) CHARACTER SET 'utf8' COLLATE 'utf8_swedish_ci' NULL DEFAULT NULL,
  `slug` CHAR(120) CHARACTER SET 'utf8' COLLATE 'utf8_swedish_ci' NULL DEFAULT NULL,
  `title` VARCHAR(120) CHARACTER SET 'utf8' COLLATE 'utf8_swedish_ci' NULL DEFAULT NULL,
  `data` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_swedish_ci' NULL DEFAULT NULL,
  `type` CHAR(20) CHARACTER SET 'utf8' COLLATE 'utf8_swedish_ci' NULL DEFAULT NULL,
  `filter` VARCHAR(80) CHARACTER SET 'utf8' COLLATE 'utf8_swedish_ci' NULL DEFAULT NULL,
  `published` DATETIME NULL DEFAULT NULL,
  `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` DATETIME NULL DEFAULT NULL,
  `deleted` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `path` (`path` ASC),
  UNIQUE INDEX `slug` (`slug` ASC),
  INDEX `index_type` (`type` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_swedish_ci;

USE `anjd16` ;

-- -----------------------------------------------------
-- Placeholder table for view `anjd16`.`VCart`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anjd16`.`VCart` (`id` INT, `prod_id` INT, `quantity` INT, `customer` INT, `title` INT, `description` INT, `image` INT, `price` INT, `inventory` INT);

-- -----------------------------------------------------
-- Placeholder table for view `anjd16`.`VOrder`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anjd16`.`VOrder` (`id` INT, `order_number` INT, `order_date` INT, `customer` INT, `prod_id` INT, `quantity` INT, `title` INT, `price` INT);

-- -----------------------------------------------------
-- Placeholder table for view `anjd16`.`VProdCat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `anjd16`.`VProdCat` (`id` INT, `image` INT, `description` INT, `category` INT, `price` INT, `inventory` INT);

-- -----------------------------------------------------
-- function CountProduct
-- -----------------------------------------------------

USE `anjd16`;
DROP function IF EXISTS `anjd16`.`CountProduct`;

DELIMITER $$
USE `anjd16`$$
CREATE DEFINER=`anjd16`@`%` FUNCTION `CountProduct`(
    theID INT,
    customerID INT
) RETURNS int(11)
    DETERMINISTIC
BEGIN
    DECLARE count INT;
    SET count = 0;
    SELECT COUNT(prod_id) INTO count FROM Cart WHERE prod_id = theID AND customer = customerID;
    RETURN count;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- function CountQuantity
-- -----------------------------------------------------

USE `anjd16`;
DROP function IF EXISTS `anjd16`.`CountQuantity`;

DELIMITER $$
USE `anjd16`$$
CREATE DEFINER=`anjd16`@`%` FUNCTION `CountQuantity`(
    theID INT,
    customerID INT
) RETURNS int(11)
    DETERMINISTIC
BEGIN
    DECLARE count INT;
    SET count = 0;
    SELECT quantity INTO count FROM Cart WHERE id = theID AND customer = customerID;
    RETURN count;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure addProduct
-- -----------------------------------------------------

USE `anjd16`;
DROP procedure IF EXISTS `anjd16`.`addProduct`;

DELIMITER $$
USE `anjd16`$$
CREATE DEFINER=`anjd16`@`%` PROCEDURE `addProduct`(
	title VARCHAR(50),
    description VARCHAR(100),
    image VARCHAR(50),
    price INT,
    inventory INT(6)
)
BEGIN
	INSERT INTO Product (title, description, image, price, inventory) VALUES (title, description, image, price, inventory);
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure addToCart
-- -----------------------------------------------------

USE `anjd16`;
DROP procedure IF EXISTS `anjd16`.`addToCart`;

DELIMITER $$
USE `anjd16`$$
CREATE DEFINER=`anjd16`@`%` PROCEDURE `addToCart`(
	theID INT,
    customerID INT
)
BEGIN
	-- SELECT CountProduct(theID, customerID);
	IF CountProduct(theID, customerID) = 0 THEN
		INSERT INTO Cart (prod_id, quantity, customer) VALUES (theID, 1, customerID);
	ELSE
		UPDATE Cart SET quantity=Cart.quantity+1 WHERE prod_id = theID AND customer = customerID;
	END IF;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure deleteFromCart
-- -----------------------------------------------------

USE `anjd16`;
DROP procedure IF EXISTS `anjd16`.`deleteFromCart`;

DELIMITER $$
USE `anjd16`$$
CREATE DEFINER=`anjd16`@`%` PROCEDURE `deleteFromCart`(
	theID INT,
    customerID INT
)
BEGIN
	IF CountQuantity(theID, customerID) = 1 THEN
		DELETE FROM Cart WHERE id = theID AND customer = customerID;
	ELSEIF CountQuantity(theID, customerID) > 1 THEN
		UPDATE Cart SET quantity=Cart.quantity-1 WHERE id = theID AND customer = customerID;
	END IF;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure deleteOrder
-- -----------------------------------------------------

USE `anjd16`;
DROP procedure IF EXISTS `anjd16`.`deleteOrder`;

DELIMITER $$
USE `anjd16`$$
CREATE DEFINER=`anjd16`@`%` PROCEDURE `deleteOrder`(
	number INT
)
BEGIN
    START TRANSACTION;
    
	DELETE FROM `Order` WHERE order_number = number;
        
	COMMIT;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure deleteProduct
-- -----------------------------------------------------

USE `anjd16`;
DROP procedure IF EXISTS `anjd16`.`deleteProduct`;

DELIMITER $$
USE `anjd16`$$
CREATE DEFINER=`anjd16`@`%` PROCEDURE `deleteProduct`(
    theId INT
)
BEGIN
	DELETE FROM Product WHERE id = theId;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure getCart
-- -----------------------------------------------------

USE `anjd16`;
DROP procedure IF EXISTS `anjd16`.`getCart`;

DELIMITER $$
USE `anjd16`$$
CREATE DEFINER=`anjd16`@`%` PROCEDURE `getCart`(
	customerID INT
)
BEGIN
    SELECT * FROM VCart WHERE customer = customerID;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure getOrder
-- -----------------------------------------------------

USE `anjd16`;
DROP procedure IF EXISTS `anjd16`.`getOrder`;

DELIMITER $$
USE `anjd16`$$
CREATE DEFINER=`anjd16`@`%` PROCEDURE `getOrder`(
	number INT
)
BEGIN
    SELECT * FROM VOrder WHERE order_number = number;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure getStockoutLog
-- -----------------------------------------------------

USE `anjd16`;
DROP procedure IF EXISTS `anjd16`.`getStockoutLog`;

DELIMITER $$
USE `anjd16`$$
CREATE DEFINER=`anjd16`@`%` PROCEDURE `getStockoutLog`()
BEGIN
    SELECT * FROM StockoutLog;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure placeOrder
-- -----------------------------------------------------

USE `anjd16`;
DROP procedure IF EXISTS `anjd16`.`placeOrder`;

DELIMITER $$
USE `anjd16`$$
CREATE DEFINER=`anjd16`@`%` PROCEDURE `placeOrder`(
	customer INT
)
BEGIN
    START TRANSACTION;
    
	INSERT INTO `Order` (order_number, customer, prod_id, quantity) SELECT @order_number, customer, prod_id, quantity FROM VCart;
    
    UPDATE Product JOIN Cart ON Cart.prod_id = Product.id SET Product.inventory = Product.inventory - Cart.quantity;
    
    SET @order_number = @order_number + 1;
        
	COMMIT;
    
	DELETE FROM Cart;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure updateProduct
-- -----------------------------------------------------

USE `anjd16`;
DROP procedure IF EXISTS `anjd16`.`updateProduct`;

DELIMITER $$
USE `anjd16`$$
CREATE DEFINER=`anjd16`@`%` PROCEDURE `updateProduct`(
	theId INT,
    title VARCHAR(50),
    description VARCHAR(100),
    image VARCHAR(50),
    price INT,
    inventory INT(6)
)
BEGIN
	UPDATE Product SET title=title, description=description, image=image, price=price, inventory=inventory WHERE id = theId;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- View `anjd16`.`VCart`
-- -----------------------------------------------------
DROP VIEW IF EXISTS `anjd16`.`VCart` ;
DROP TABLE IF EXISTS `anjd16`.`VCart`;
USE `anjd16`;
CREATE  OR REPLACE ALGORITHM=UNDEFINED DEFINER=`anjd16`@`%` SQL SECURITY DEFINER VIEW `anjd16`.`VCart` AS select `C`.`id` AS `id`,`C`.`prod_id` AS `prod_id`,`C`.`quantity` AS `quantity`,`C`.`customer` AS `customer`,`P`.`title` AS `title`,`P`.`description` AS `description`,`P`.`image` AS `image`,`P`.`price` AS `price`,`P`.`inventory` AS `inventory` from (`anjd16`.`Cart` `C` join `anjd16`.`Product` `P` on((`C`.`prod_id` = `P`.`id`)));

-- -----------------------------------------------------
-- View `anjd16`.`VOrder`
-- -----------------------------------------------------
DROP VIEW IF EXISTS `anjd16`.`VOrder` ;
DROP TABLE IF EXISTS `anjd16`.`VOrder`;
USE `anjd16`;
CREATE  OR REPLACE ALGORITHM=UNDEFINED DEFINER=`anjd16`@`%` SQL SECURITY DEFINER VIEW `anjd16`.`VOrder` AS select `O`.`id` AS `id`,`O`.`order_number` AS `order_number`,`O`.`order_date` AS `order_date`,`O`.`customer` AS `customer`,`O`.`prod_id` AS `prod_id`,`O`.`quantity` AS `quantity`,`P`.`title` AS `title`,`P`.`price` AS `price` from (`anjd16`.`Order` `O` join `anjd16`.`Product` `P` on((`O`.`prod_id` = `P`.`id`)));

-- -----------------------------------------------------
-- View `anjd16`.`VProdCat`
-- -----------------------------------------------------
DROP VIEW IF EXISTS `anjd16`.`VProdCat` ;
DROP TABLE IF EXISTS `anjd16`.`VProdCat`;
USE `anjd16`;
CREATE  OR REPLACE ALGORITHM=UNDEFINED DEFINER=`anjd16`@`%` SQL SECURITY DEFINER VIEW `anjd16`.`VProdCat` AS select `P`.`id` AS `id`,`P`.`image` AS `image`,`P`.`description` AS `description`,group_concat(`PC`.`category` separator ',') AS `category`,`P`.`price` AS `price`,`P`.`inventory` AS `inventory` from ((`anjd16`.`Product` `P` left join `anjd16`.`Prod2Cat` `P2C` on((`P`.`id` = `P2C`.`product_id`))) left join `anjd16`.`ProdCategory` `PC` on((`PC`.`id` = `P2C`.`category_id`))) group by `P`.`id` order by `P`.`id`;
USE `anjd16`;

DELIMITER $$

USE `anjd16`$$
DROP TRIGGER IF EXISTS `anjd16`.`LogLowStock` $$
USE `anjd16`$$
CREATE
DEFINER=`anjd16`@`%`
TRIGGER `anjd16`.`LogLowStock`
AFTER UPDATE ON `anjd16`.`Product`
FOR EACH ROW
BEGIN
	IF NEW.inventory < 5 THEN
		INSERT INTO StockoutLog (product, `name`, inventory) VALUES (NEW.id, NEW.title, NEW.inventory);
	END IF;
END$$


DELIMITER ;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
