SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `Registro` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `Registro` ;

-- -----------------------------------------------------
-- Table `Registro`.`registro`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `Registro`.`registro` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT ,
  `usu_cnombre` VARCHAR(25) NULL ,
  `usu_capellido` VARCHAR(25) NULL ,
  `usu_ccorreo` VARCHAR(45) NULL ,
  `usu_cusuario` VARCHAR(45) NULL ,
  `usu_ccontraseña` VARCHAR(45) NULL ,
  `usu_ctipo_usuario` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_usuario`) )
ENGINE = InnoDB;

USE `Registro` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
