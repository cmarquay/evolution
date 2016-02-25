SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE DATABASE BDDevolution;
USE BDDevolution;

-- -----------------------------------------------------
-- Table `Pseudo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Pseudo` (
  `IdPseudo` INT NOT NULL AUTO_INCREMENT,
  `Pseudo` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`IdPseudo`),
  UNIQUE INDEX `Pseudo_UNIQUE` (`Pseudo` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MotDePasse`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MotDePasse` (
  `IdMDP` INT NOT NULL AUTO_INCREMENT,
  `MotDePasse` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`IdMDP`),
  UNIQUE INDEX `MotDePasse_UNIQUE` (`MotDePasse` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Avatar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Avatar` (
  `IdAvatar` INT NOT NULL AUTO_INCREMENT,
  `Avatar` VARCHAR(45) NULL,
  PRIMARY KEY (`IdAvatar`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Individu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Individu` (
  `Pseudo` INT NOT NULL,
  `MotDePasse` INT NOT NULL,
  `Avatar` INT NOT NULL,
  `Competence` INT NULL,
  `Specialite` INT NULL,
  INDEX `fk_Individu_Pseudo_idx` (`Pseudo` ASC),
  INDEX `fk_Individu_MotDePasse1_idx` (`MotDePasse` ASC),
  UNIQUE INDEX `MotDePasse_IdMDP_UNIQUE` (`MotDePasse` ASC),
  INDEX `fk_Individu_Avatar1_idx` (`Avatar` ASC),
  PRIMARY KEY (`Pseudo`),
  CONSTRAINT `fk_Individu_Pseudo`
    FOREIGN KEY (`Pseudo`)
    REFERENCES `Pseudo` (`IdPseudo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Individu_MotDePasse1`
    FOREIGN KEY (`MotDePasse`)
    REFERENCES `MotDePasse` (`IdMDP`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Individu_Avatar1`
    FOREIGN KEY (`Avatar`)
    REFERENCES `Avatar` (`IdAvatar`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
KEY_BLOCK_SIZE = 2;


-- -----------------------------------------------------
-- Table `Specialite`
-- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `Specialite` (
-- `IdSpecialite` INT NOT NULL AUTO_INCREMENT,
-- `Specialite` VARCHAR(45) NOT NULL,
--  `Score` INT NULL,
--  PRIMARY KEY (`IdSpecialite`),
-- CONSTRAINT `fk_Specialite_Individu1`
--   FOREIGN KEY (`IdSpecialite`)
--   REFERENCES `Individu` (`Specialite`)
--   ON DELETE NO ACTION
--   ON UPDATE NO ACTION)
-- ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Score`
-- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `Score` (
--  `IdScore` INT NOT NULL AUTO_INCREMENT,
--  `Score` INT NULL,
--  PRIMARY KEY (`IdScore`),
--  CONSTRAINT `fk_Score_Specialite1`
--   FOREIGN KEY (`IdScore`)
--    REFERENCES `Specialite` (`Score`)
--   ON DELETE NO ACTION
--   ON UPDATE NO ACTION)
-- ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Competence`
-- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `Competence` (
--  `IdCompetence` INT NOT NULL AUTO_INCREMENT,
--  `Competence` VARCHAR(45) NOT NULL,
--  `description` VARCHAR(45) NOT NULL,
--  PRIMARY KEY (`IdCompetence`),
--  CONSTRAINT `fk_Competence_Individu1`
--    FOREIGN KEY (`IdCompetence`)
 --   REFERENCES `Individu` (`Competence`)
 --   ON DELETE NO ACTION
 --   ON UPDATE NO ACTION)
-- ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
