SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE DATABASE BDDevolution;
USE BDDevolution;

-- -----------------------------------------------------
-- Table `Individu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Individu` (
  `Identifiant` INT NOT NULL AUTO_INCREMENT,
  `Pseudo` VARCHAR(48) NOT NULL,
  `Email` VARCHAR(128) NOT NULL,
  `Nom` VARCHAR(128) NOT NULL,
  `Prenom` VARCHAR(128) NOT NULL,
  `MotDePasse` VARCHAR(48) NOT NULL,
  `Avatar` VARCHAR(128) NOT NULL DEFAULT 'images/avatars/defaut.jpg',
  `Aires` INT NOT NULL DEFAULT 0,
  `CalculsElementaires` INT NOT NULL DEFAULT 0,
  `ChangementDunites` INT NOT NULL DEFAULT 0,
  `Configurations` INT NOT NULL DEFAULT 0,
  `EcrituresLitterales` INT NOT NULL DEFAULT 0,
  `Equations` INT NOT NULL DEFAULT 0,
  `FonctionLineaire` INT NOT NULL DEFAULT 0,
  `Grandeurs` INT NOT NULL DEFAULT 0,
  `Inequations` INT NOT NULL DEFAULT 0,
  `NombresEntiers` INT NOT NULL DEFAULT 0,
  `NombresRationnels` INT NOT NULL DEFAULT 0,
  `NotionDeFonction` INT NOT NULL DEFAULT 0,
  `NotionDeProbabilite` INT NOT NULL DEFAULT 0,
  `Statistique` INT NOT NULL DEFAULT 0,
  `Volumes` INT NOT NULL DEFAULT 0,
  `Score` INT NOT NULL DEFAULT 0,
  PRIMARY KEY (`Identifiant`),
  UNIQUE INDEX `Pseudo_UNIQUE` (`Pseudo` ASC),
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC))
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
