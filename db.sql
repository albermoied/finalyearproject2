-- MySQL Script generated by MySQL Workbench
-- 08/09/16 19:19:36
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Profile`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Profile` (
  `profileId` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NULL,
  `Email` VARCHAR(45) NULL,
  `ContactNo` VARCHAR(14) NULL,
  `Organization` VARCHAR(45) NULL,
  PRIMARY KEY (`profileId`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`User` (
  `UserName` VARCHAR(16) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  `VerificationCode` VARCHAR(45) NOT NULL,
  `Status` INT NOT NULL,
  `Profile_profileId` INT NOT NULL,
  PRIMARY KEY (`UserName`, `Profile_profileId`),
  INDEX `fk_User_Profile_idx` (`Profile_profileId` ASC),
  CONSTRAINT `fk_User_Profile`
    FOREIGN KEY (`Profile_profileId`)
    REFERENCES `mydb`.`Profile` (`profileId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Group`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Group` (
  `GroupId` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `User_UserName` VARCHAR(16) NOT NULL,
  PRIMARY KEY (`GroupId`, `User_UserName`),
  INDEX `fk_Group_User1_idx` (`User_UserName` ASC),
  CONSTRAINT `fk_Group_User1`
    FOREIGN KEY (`User_UserName`)
    REFERENCES `mydb`.`User` (`UserName`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Contact`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Contact` (
  `ContactId` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NULL,
  `ContactNo` VARCHAR(15) NULL,
  PRIMARY KEY (`ContactId`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`GroupContacts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`GroupContacts` (
  `Status` INT NULL,
  `Group_GroupId` INT NOT NULL,
  `Contact_ContactId` INT NOT NULL,
  PRIMARY KEY (`Group_GroupId`, `Contact_ContactId`),
  INDEX `fk_GroupContacts_Contact1_idx` (`Contact_ContactId` ASC),
  CONSTRAINT `fk_GroupContacts_Group1`
    FOREIGN KEY (`Group_GroupId`)
    REFERENCES `mydb`.`Group` (`GroupId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_GroupContacts_Contact1`
    FOREIGN KEY (`Contact_ContactId`)
    REFERENCES `mydb`.`Contact` (`ContactId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ScheduleMsg`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ScheduleMsg` (
  `ScheduleId` INT NOT NULL AUTO_INCREMENT,
  `SchMessage` VARCHAR(45) NOT NULL,
  `Time` TIME NOT NULL,
  `date` DATE NOT NULL,
  `Group_GroupId` INT NOT NULL,
  PRIMARY KEY (`ScheduleId`, `Group_GroupId`),
  INDEX `fk_ScheduleMsg_Group1_idx` (`Group_GroupId` ASC),
  CONSTRAINT `fk_ScheduleMsg_Group1`
    FOREIGN KEY (`Group_GroupId`)
    REFERENCES `mydb`.`Group` (`GroupId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`SentMsg`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`SentMsg` (
  `SentMsgId` INT NOT NULL AUTO_INCREMENT,
  `SentMessage` VARCHAR(255) NULL,
  `Time` TIME NULL,
  `Date` DATE NULL,
  `Group_GroupId` INT NOT NULL,
  PRIMARY KEY (`SentMsgId`, `Group_GroupId`),
  INDEX `fk_SentMsg_Group1_idx` (`Group_GroupId` ASC),
  CONSTRAINT `fk_SentMsg_Group1`
    FOREIGN KEY (`Group_GroupId`)
    REFERENCES `mydb`.`Group` (`GroupId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ReceivedMsg`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ReceivedMsg` (
  `ReceivedMsgId` INT NOT NULL AUTO_INCREMENT,
  `RecMessage` VARCHAR(255) NULL,
  `Time` TIMESTAMP NULL,
  `Contact_ContactId` INT NOT NULL,
  PRIMARY KEY (`ReceivedMsgId`, `Contact_ContactId`),
  INDEX `fk_ReceivedMsg_Contact1_idx` (`Contact_ContactId` ASC),
  CONSTRAINT `fk_ReceivedMsg_Contact1`
    FOREIGN KEY (`Contact_ContactId`)
    REFERENCES `mydb`.`Contact` (`ContactId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;