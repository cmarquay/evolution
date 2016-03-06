SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE DATABASE BDDevolution;
USE BDDevolution;

-- -----------------------------------------------------
-- Table `Individu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Individu` (
  `Identifient` INT NOT NULL AUTO_INCREMENT,
  `Pseudo` VARCHAR(128) NOT NULL,
  `Email` VARCHAR(128) NOT NULL,
  `Nom` VARCHAR(128) NOT NULL,
  `Prenom` VARCHAR(128) NOT NULL,
  `MotDePasse` VARCHAR(256) NOT NULL,
  `Avatar` VARCHAR(256) NOT NULL,
  `Aires` INT NULL DEFAULT 0,
  `CalculsElementaires` INT NULL DEFAULT 0,
  `ChangementDunites` INT NULL DEFAULT 0,
  `Configurations` INT NULL DEFAULT 0,
  `EcrituresLitterales` INT NULL DEFAULT 0,
  `Equations` INT NULL DEFAULT 0,
  `FonctionLineaire` INT NULL DEFAULT 0,
  `Grandeurs` INT NULL DEFAULT 0,
  `Inequations` INT NULL DEFAULT 0,
  `NombresEntiers` INT NULL DEFAULT 0,
  `NombresRationnels` INT NULL DEFAULT 0,
  `NotionDeFonction` INT NULL DEFAULT 0,
  `NotionDeProbabilite` INT NULL DEFAULT 0,
  `Statistique` INT NULL DEFAULT 0,
  `Volumes` INT NULL DEFAULT 0,
  `Score` INT NULL DEFAULT 0,
  UNIQUE INDEX `MotDePasse_IdMDP_UNIQUE` (`MotDePasse` ASC),
  PRIMARY KEY (`Identifient`),
  UNIQUE INDEX `Pseudo_UNIQUE` (`Pseudo` ASC),
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC))
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
