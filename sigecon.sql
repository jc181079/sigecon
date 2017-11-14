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
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE=latin1_spanish_ci;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`entesolicitante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`entesolicitante` (
  `identesolicitante` INT NOT NULL AUTO_INCREMENT,
  `nombreente` LONGTEXT NULL,
  PRIMARY KEY (`identesolicitante`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`funcionaros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`funcionaros` (
  `idfuncionaros` INT NOT NULL AUTO_INCREMENT,
  `nombrefun` VARCHAR(45) NULL,
  `apellidofun` VARCHAR(45) NULL,
  `telefonofun` VARCHAR(45) NULL,
  `correofun` VARCHAR(45) NULL,
  PRIMARY KEY (`idfuncionaros`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuarios` (
  `idusuarios` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NULL,
  `clave` VARCHAR(45) NULL,
  `funcionaros` INT NOT NULL,
  PRIMARY KEY (`idusuarios`),
  INDEX `fk_usuarios_funcionaros1_idx` (`funcionaros` ASC),
  CONSTRAINT `fk_usuarios_funcionaros1`
    FOREIGN KEY (`funcionaros`)
    REFERENCES `mydb`.`funcionaros` (`idfuncionaros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`solicitud`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`solicitud` (
  `idsolicitud` INT NOT NULL AUTO_INCREMENT,
  `descripcion` LONGTEXT NULL,
  `objeto` LONGTEXT NULL,
  `fecha` DATE NULL,
  `entesolicitante` INT NOT NULL,
  `adjudicacion` VARCHAR(7) NULL COMMENT 'parcial o total',
  `actividad` VARCHAR(8) NULL COMMENT 'bienes, servicios u obra',
  `procedencia` VARCHAR(12) NULL COMMENT 'proyecto o requerimiento',
  `presupuestobase` DECIMAL(10,2) NULL,
  `disponibilidadtotal` DECIMAL(10,2) NULL,
  `modalidadestimada` VARCHAR(7) NULL COMMENT 'abierto\ncerrado',
  `fecharecibida` DATE NULL,
  `nroofico` VARCHAR(45) NULL,
  `fechaoficio` DATE NULL,
  `periodosol` INT NULL COMMENT 'periodo o año de la solicitud',
  `usuarios_idusuarios` INT NOT NULL,
  PRIMARY KEY (`idsolicitud`),
  INDEX `fk_solicitud_entesolicitante_idx` (`entesolicitante` ASC),
  INDEX `fk_solicitud_usuarios1_idx` (`usuarios_idusuarios` ASC),
  CONSTRAINT `fk_solicitud_entesolicitante`
    FOREIGN KEY (`entesolicitante`)
    REFERENCES `mydb`.`entesolicitante` (`identesolicitante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitud_usuarios1`
    FOREIGN KEY (`usuarios_idusuarios`)
    REFERENCES `mydb`.`usuarios` (`idusuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`fuente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`fuente` (
  `idfuente` INT NOT NULL AUTO_INCREMENT,
  `fuentenom` VARCHAR(45) NULL,
  PRIMARY KEY (`idfuente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`dispdetalle`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`dispdetalle` (
  `iddispdetalle` INT NOT NULL AUTO_INCREMENT,
  `numerop` VARCHAR(45) NULL,
  `denominacionp` VARCHAR(45) NULL,
  `montop` DECIMAL(10,2) NULL,
  `fuente` INT NOT NULL,
  `solicitud` INT NOT NULL,
  PRIMARY KEY (`iddispdetalle`),
  INDEX `fk_dispdetalle_fuente1_idx` (`fuente` ASC),
  INDEX `fk_dispdetalle_solicitud1_idx` (`solicitud` ASC),
  CONSTRAINT `fk_dispdetalle_fuente1`
    FOREIGN KEY (`fuente`)
    REFERENCES `mydb`.`fuente` (`idfuente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_dispdetalle_solicitud1`
    FOREIGN KEY (`solicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`trabajoasignado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`trabajoasignado` (
  `idtrabajoasignado` INT NOT NULL AUTO_INCREMENT,
  `usuarios` INT NOT NULL,
  `solicitud` INT NOT NULL,
  PRIMARY KEY (`idtrabajoasignado`),
  INDEX `fk_trabajoasignado_usuarios1_idx` (`usuarios` ASC),
  INDEX `fk_trabajoasignado_solicitud1_idx` (`solicitud` ASC),
  CONSTRAINT `fk_trabajoasignado_usuarios1`
    FOREIGN KEY (`usuarios`)
    REFERENCES `mydb`.`usuarios` (`idusuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_trabajoasignado_solicitud1`
    FOREIGN KEY (`solicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`perfil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`perfil` (
  `idperfil` INT NOT NULL AUTO_INCREMENT,
  `nombreper` VARCHAR(45) NULL,
  PRIMARY KEY (`idperfil`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`permisologia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`permisologia` (
  `idpermisologia` INT NOT NULL AUTO_INCREMENT,
  `perfil` INT NOT NULL,
  `incluir` TINYINT(1) NULL,
  `modificar` TINYINT(1) NULL,
  `consultar` TINYINT(1) NULL,
  `eliminar` TINYINT(1) NULL,
  PRIMARY KEY (`idpermisologia`),
  INDEX `fk_permosologia_perfil1_idx` (`perfil` ASC),
  CONSTRAINT `fk_permosologia_perfil1`
    FOREIGN KEY (`perfil`)
    REFERENCES `mydb`.`perfil` (`idperfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`modulos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`modulos` (
  `idmodulos` INT NOT NULL AUTO_INCREMENT,
  `nommodulo` VARCHAR(45) NULL,
  `observacionmod` VARCHAR(45) NULL,
  `perfil_idperfil` INT NOT NULL,
  `usuarios_idusuarios` INT NOT NULL,
  PRIMARY KEY (`idmodulos`),
  INDEX `fk_modulos_perfil1_idx` (`perfil_idperfil` ASC),
  INDEX `fk_modulos_usuarios1_idx` (`usuarios_idusuarios` ASC),
  CONSTRAINT `fk_modulos_perfil1`
    FOREIGN KEY (`perfil_idperfil`)
    REFERENCES `mydb`.`perfil` (`idperfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_modulos_usuarios1`
    FOREIGN KEY (`usuarios_idusuarios`)
    REFERENCES `mydb`.`usuarios` (`idusuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`modalidades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`modalidades` (
  `idmodalidades` INT NOT NULL AUTO_INCREMENT,
  `nommodalidad` VARCHAR(20) NULL,
  `prefijo` VARCHAR(34) NULL,
  `correlativo` INT NULL,
  PRIMARY KEY (`idmodalidades`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`libroproceso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`libroproceso` (
  `idlibroproceso` INT NOT NULL AUTO_INCREMENT,
  `codproceso` VARCHAR(18) NULL,
  `fechalibro` DATE NULL,
  `modalidades` INT NOT NULL,
  `usuarios` INT NOT NULL,
  `idsolicitud` INT NOT NULL,
  PRIMARY KEY (`idlibroproceso`),
  INDEX `fk_libroproceso_modalidades1_idx` (`modalidades` ASC),
  INDEX `fk_libroproceso_usuarios1_idx` (`usuarios` ASC),
  INDEX `fk_libroproceso_solicitud1_idx` (`idsolicitud` ASC),
  UNIQUE INDEX `codproceso_UNIQUE` (`codproceso` ASC),
  CONSTRAINT `fk_libroproceso_modalidades1`
    FOREIGN KEY (`modalidades`)
    REFERENCES `mydb`.`modalidades` (`idmodalidades`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_libroproceso_usuarios1`
    FOREIGN KEY (`usuarios`)
    REFERENCES `mydb`.`usuarios` (`idusuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_libroproceso_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pliego`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pliego` (
  `idpliego` INT NOT NULL AUTO_INCREMENT,
  `frpinicio` DATE NULL COMMENT 'fecha de retiro de pliego inicio',
  `frpfin` DATE NULL COMMENT 'fecha de retiro de pliego fin',
  `fapinicio` DATE NULL COMMENT 'fecha de aclaratoria de pliego inicio',
  `fapfin` DATE NULL COMMENT 'fecha de claratoria fin',
  `frap` DATE NULL COMMENT 'fecha respuesta aclaratoria pliego',
  `hrap` VARCHAR(7) NULL,
  `fvt` DATE NULL COMMENT 'fecha de la visita tecnica',
  `lvt` LONGTEXT NULL COMMENT 'lugar de la visita tecnica',
  `hvt` VARCHAR(7) NULL,
  `prvt` VARCHAR(45) NULL COMMENT 'persona responsable visita tecnica',
  `tprvt` VARCHAR(45) NULL COMMENT 'telefono responsable vista tecnica',
  `hrpam` VARCHAR(45) NULL COMMENT 'horario retiro de pliego am',
  `hrppm` VARCHAR(45) NULL COMMENT 'horario retiro de pliego pm',
  `fap` DATE NULL COMMENT 'fecha del acto poublico',
  `hrsap` VARCHAR(45) NULL COMMENT 'horario de recepcion de sobres para actos publicos',
  `hasap` VARCHAR(7) NULL COMMENT 'hora de apertura de sobres acto publico',
  `mecanismo` LONGTEXT NULL,
  `pfmin` INT NULL COMMENT 'puntaje financiero minimo',
  `pfmax` INT NULL COMMENT 'puntaje financiero maximo',
  `ptmin` INT NULL COMMENT 'puntaje tecnico minimo',
  `ptmax` INT NULL COMMENT 'puntaje tecnico maximo',
  `libroproceso` INT NOT NULL,
  `idsolicitud` INT NOT NULL,
  PRIMARY KEY (`idpliego`),
  INDEX `fk_pliego_libroproceso1_idx` (`libroproceso` ASC),
  INDEX `fk_pliego_solicitud1_idx` (`idsolicitud` ASC),
  CONSTRAINT `fk_pliego_libroproceso1`
    FOREIGN KEY (`libroproceso`)
    REFERENCES `mydb`.`libroproceso` (`idlibroproceso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pliego_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`libros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`libros` (
  `idlibros` INT NOT NULL AUTO_INCREMENT,
  `nombrelibro` VARCHAR(45) NULL,
  `observacionlibro` VARCHAR(45) NULL,
  `prefijo` VARCHAR(10) NULL,
  PRIMARY KEY (`idlibros`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`otroslibros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`otroslibros` (
  `idotroslibros` INT NOT NULL AUTO_INCREMENT,
  `libros` INT NOT NULL,
  `codlibro` VARCHAR(20) NULL,
  `fechalibro` DATE NULL,
  `libroproceso` INT NOT NULL,
  `idsolicitud` INT NOT NULL,
  PRIMARY KEY (`idotroslibros`),
  INDEX `fk_otroslibros_libros1_idx` (`libros` ASC),
  INDEX `fk_otroslibros_libroproceso1_idx` (`libroproceso` ASC),
  INDEX `fk_otroslibros_solicitud1_idx` (`idsolicitud` ASC),
  UNIQUE INDEX `codlibro_UNIQUE` (`codlibro` ASC),
  CONSTRAINT `fk_otroslibros_libros1`
    FOREIGN KEY (`libros`)
    REFERENCES `mydb`.`libros` (`idlibros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_otroslibros_libroproceso1`
    FOREIGN KEY (`libroproceso`)
    REFERENCES `mydb`.`libroproceso` (`idlibroproceso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_otroslibros_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`empresas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`empresas` (
  `idempresas` INT NOT NULL AUTO_INCREMENT,
  `nombreempre` VARCHAR(45) NULL,
  `rif` VARCHAR(10) NULL,
  `telefono` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `objetosocial` LONGTEXT NULL COMMENT 'Lo que hace la empresa',
  `representantelegal` VARCHAR(45) NULL,
  `cedula` VARCHAR(45) NULL,
  `registromer` LONGTEXT NULL,
  `nro` VARCHAR(45) NULL,
  `tomo` VARCHAR(45) NULL,
  `fechatomo` DATE NULL,
  PRIMARY KEY (`idempresas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`und`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`und` (
  `idund` INT NOT NULL AUTO_INCREMENT,
  `nombreund` VARCHAR(45) NULL,
  `valor` INT NULL,
  PRIMARY KEY (`idund`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pliegom`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pliegom` (
  `idpliegom` INT NOT NULL AUTO_INCREMENT,
  `prenda` VARCHAR(45) NULL,
  `cantidad` VARCHAR(45) NULL,
  `und` INT NOT NULL,
  `pliego` INT NOT NULL,
  `idsolicitud` INT NOT NULL,
  PRIMARY KEY (`idpliegom`),
  INDEX `fk_pliegom_und1_idx` (`und` ASC),
  INDEX `fk_pliegom_pliego1_idx` (`pliego` ASC),
  INDEX `fk_pliegom_solicitud1_idx` (`idsolicitud` ASC),
  CONSTRAINT `fk_pliegom_und1`
    FOREIGN KEY (`und`)
    REFERENCES `mydb`.`und` (`idund`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pliegom_pliego1`
    FOREIGN KEY (`pliego`)
    REFERENCES `mydb`.`pliego` (`idpliego`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pliegom_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`analisisfin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`analisisfin` (
  `idanalisisfin` INT NOT NULL AUTO_INCREMENT,
  `periodo` INT NULL COMMENT 'eño fiscal evaluado',
  `cxc` DECIMAL(10,2) NULL COMMENT 'cuenta por cobrar',
  `ac` DECIMAL(10,2) NULL COMMENT 'activo circulante',
  `at` DECIMAL(10,2) NULL COMMENT 'activo total',
  `pc` DECIMAL(10,2) NULL COMMENT 'pasivo circulante',
  `pt` DECIMAL(10,2) NULL COMMENT 'pasivo total',
  `p` DECIMAL(10,2) NULL COMMENT 'patrimonio',
  `it` DECIMAL(10,2) NULL COMMENT 'ingresos totales',
  `un` DECIMAL(10,2) NULL COMMENT 'utilidad neta',
  `s` DECIMAL(10,2) NULL COMMENT 'solvencia',
  `su` DECIMAL(10,2) NULL COMMENT 'Solvencia ajuste',
  `rotcxc` DECIMAL(10,2) NULL COMMENT 'ROTACION DE CUENTAS POR COBRAR',
  `rotcxcu` DECIMAL(10,2) NULL COMMENT 'rotacion de cuentas por cobrar ajuste',
  `redsact` DECIMAL(10,2) NULL COMMENT 'rendimiento s/act',
  `redsactu` DECIMAL(10,2) NULL,
  `rentpatri` DECIMAL(10,2) NULL COMMENT 'rendimiento patrimonial',
  `rentpatriu` DECIMAL(10,2) NULL COMMENT 'rendimiento patrimonial',
  `endeud` DECIMAL(10,2) NULL COMMENT 'endeudamiento',
  `endeudu` DECIMAL(10,2) NULL COMMENT 'endeudamiento ajuste',
  `capnet` DECIMAL(10,2) NULL,
  `factrend` DECIMAL(10,2) NULL,
  `vipc` DECIMAL(10,2) NULL,
  `cfec` DECIMAL(10,2) NULL,
  `nfec` DECIMAL(10,2) NULL,
  `idempresas` INT NOT NULL,
  `idsolicitud` INT NOT NULL,
  PRIMARY KEY (`idanalisisfin`),
  INDEX `fk_analisisfin_empresas1_idx` (`idempresas` ASC),
  INDEX `fk_analisisfin_solicitud1_idx` (`idsolicitud` ASC),
  CONSTRAINT `fk_analisisfin_empresas1`
    FOREIGN KEY (`idempresas`)
    REFERENCES `mydb`.`empresas` (`idempresas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_analisisfin_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`recaudosoferentes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`recaudosoferentes` (
  `idrecaudos` INT NOT NULL AUTO_INCREMENT,
  `nombredocumento` VARCHAR(100) NULL,
  `definicion` LONGTEXT NULL,
  `tipodocumento` VARCHAR(6) NULL COMMENT 'Legal\nTecnico\nOferta',
  `puntajemin` INT NULL,
  `puntajemed` INT NULL,
  `puntajemax` INT NULL,
  PRIMARY KEY (`idrecaudos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pliegoaspectos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pliegoaspectos` (
  `idpliegoaspectos` INT NOT NULL AUTO_INCREMENT,
  `pliego_idpliego` INT NOT NULL,
  `recaudosoferentes_idrecaudos` INT NOT NULL,
  `idsolicitud` INT NOT NULL,
  PRIMARY KEY (`idpliegoaspectos`),
  INDEX `fk_pliegoaspectos_pliego1_idx` (`pliego_idpliego` ASC),
  INDEX `fk_pliegoaspectos_recaudosoferentes1_idx` (`recaudosoferentes_idrecaudos` ASC),
  INDEX `fk_pliegoaspectos_solicitud1_idx` (`idsolicitud` ASC),
  CONSTRAINT `fk_pliegoaspectos_pliego1`
    FOREIGN KEY (`pliego_idpliego`)
    REFERENCES `mydb`.`pliego` (`idpliego`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pliegoaspectos_recaudosoferentes1`
    FOREIGN KEY (`recaudosoferentes_idrecaudos`)
    REFERENCES `mydb`.`recaudosoferentes` (`idrecaudos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pliegoaspectos_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`evaluacionaspectos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`evaluacionaspectos` (
  `idevaluacionaspectos` INT NOT NULL AUTO_INCREMENT,
  `resultado` INT NULL COMMENT 'resultado cuantitativo se coloca el valor numerico de puntos que obtuvo',
  `califcualitativa` VARCHAR(45) NULL COMMENT 'calificacion cualitativa:\n-Califica\n-No Califica\nel aspecto tecnico',
  `puntcualitativa` VARCHAR(45) NULL COMMENT 'puntiacion cualitativa:\n-Superior\n-Igual\n-Inferior\na la puntuacion minima establecida en el pliego',
  `resultcualitativo` VARCHAR(45) NULL COMMENT 'resultado cualitativo:\n-Le permite\n-Le impide\npasar a la evaluacion financiera',
  `idpliegoaspectos` INT NOT NULL,
  `empresas_idempresas` INT NOT NULL,
  `idsolicitud` INT NOT NULL,
  PRIMARY KEY (`idevaluacionaspectos`),
  INDEX `fk_evaluacionaspectos_pliegoaspectos1_idx` (`idpliegoaspectos` ASC),
  INDEX `fk_evaluacionaspectos_empresas1_idx` (`empresas_idempresas` ASC),
  INDEX `fk_evaluacionaspectos_solicitud1_idx` (`idsolicitud` ASC),
  CONSTRAINT `fk_evaluacionaspectos_pliegoaspectos1`
    FOREIGN KEY (`idpliegoaspectos`)
    REFERENCES `mydb`.`pliegoaspectos` (`idpliegoaspectos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_evaluacionaspectos_empresas1`
    FOREIGN KEY (`empresas_idempresas`)
    REFERENCES `mydb`.`empresas` (`idempresas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_evaluacionaspectos_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tipoestatus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tipoestatus` (
  `idtipoestatus` INT NOT NULL AUTO_INCREMENT,
  `descripcionestatus` VARCHAR(45) NULL,
  PRIMARY KEY (`idtipoestatus`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`estatus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`estatus` (
  `idestatus` INT NOT NULL AUTO_INCREMENT,
  `observacion` LONGTEXT NULL,
  `fechaestatus` DATE NULL,
  `idtipoestatus` INT NOT NULL,
  `idsolicitud` INT NOT NULL,
  `puntero` TINYINT NULL COMMENT 'puntero para saber que estatus es el actual, cuando tenga 1 es el estatus es el actualizado, cuando tenga 0 el estatus fenecio pero queda en el historico de los estus',
  PRIMARY KEY (`idestatus`),
  INDEX `fk_estatus_tipoestatus1_idx` (`idtipoestatus` ASC),
  INDEX `fk_estatus_solicitud1_idx` (`idsolicitud` ASC),
  CONSTRAINT `fk_estatus_tipoestatus1`
    FOREIGN KEY (`idtipoestatus`)
    REFERENCES `mydb`.`tipoestatus` (`idtipoestatus`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estatus_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`adttipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`adttipo` (
  `idadttipo` INT NOT NULL AUTO_INCREMENT,
  `descripcionadt` VARCHAR(45) NULL,
  PRIMARY KEY (`idadttipo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`adt`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`adt` (
  `idadt` INT NOT NULL AUTO_INCREMENT,
  `idempresas` INT NOT NULL,
  `idadttipo` INT NOT NULL,
  `idlibroproceso` INT NOT NULL,
  `solicitud_idsolicitud` INT NOT NULL,
  PRIMARY KEY (`idadt`),
  INDEX `fk_adjudicaciones_empresas1_idx` (`idempresas` ASC),
  INDEX `fk_adt_adttipo1_idx` (`idadttipo` ASC),
  INDEX `fk_adt_libroproceso1_idx` (`idlibroproceso` ASC),
  INDEX `fk_adt_solicitud1_idx` (`solicitud_idsolicitud` ASC),
  CONSTRAINT `fk_adjudicaciones_empresas1`
    FOREIGN KEY (`idempresas`)
    REFERENCES `mydb`.`empresas` (`idempresas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_adt_adttipo1`
    FOREIGN KEY (`idadttipo`)
    REFERENCES `mydb`.`adttipo` (`idadttipo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_adt_libroproceso1`
    FOREIGN KEY (`idlibroproceso`)
    REFERENCES `mydb`.`libroproceso` (`idlibroproceso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_adt_solicitud1`
    FOREIGN KEY (`solicitud_idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`retiropliego`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`retiropliego` (
  `idretiropliego` INT NOT NULL AUTO_INCREMENT,
  `fecharetiro` DATE NULL,
  `idempresas` INT NOT NULL,
  `idpliego` INT NOT NULL,
  `idsolicitud` INT NOT NULL,
  PRIMARY KEY (`idretiropliego`),
  INDEX `fk_retiropliego_empresas1_idx` (`idempresas` ASC),
  INDEX `fk_retiropliego_pliego1_idx` (`idpliego` ASC),
  INDEX `fk_retiropliego_solicitud1_idx` (`idsolicitud` ASC),
  CONSTRAINT `fk_retiropliego_empresas1`
    FOREIGN KEY (`idempresas`)
    REFERENCES `mydb`.`empresas` (`idempresas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_retiropliego_pliego1`
    FOREIGN KEY (`idpliego`)
    REFERENCES `mydb`.`pliego` (`idpliego`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_retiropliego_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`comision`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`comision` (
  `idcomision` INT NOT NULL AUTO_INCREMENT,
  `decreto` VARCHAR(45) NULL,
  `fechadecreto` DATE NULL,
  `decretoactivo` TINYINT NULL COMMENT '0 decreto derogado\n1 decreto activo',
  PRIMARY KEY (`idcomision`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`comitecontrataciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`comitecontrataciones` (
  `idcomisioncontrataciones` INT NOT NULL AUTO_INCREMENT,
  `idfuncionaros` INT NOT NULL,
  `activo` TINYINT NULL COMMENT '0 inactivo\n1 activo',
  `tipomiembro` VARCHAR(9) NULL COMMENT '-Principal\n-Suplente',
  `idcomision` INT NOT NULL,
  INDEX `fk_comitecontrataciones_funcionaros1_idx` (`idfuncionaros` ASC),
  PRIMARY KEY (`idcomisioncontrataciones`),
  INDEX `fk_comitecontrataciones_comision1_idx` (`idcomision` ASC),
  CONSTRAINT `fk_comitecontrataciones_funcionaros1`
    FOREIGN KEY (`idfuncionaros`)
    REFERENCES `mydb`.`funcionaros` (`idfuncionaros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comitecontrataciones_comision1`
    FOREIGN KEY (`idcomision`)
    REFERENCES `mydb`.`comision` (`idcomision`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`actaparticipacion1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`actaparticipacion1` (
  `idactaparticipacion1` INT NOT NULL AUTO_INCREMENT,
  `idcomisioncontrataciones` INT NOT NULL,
  `pliego_idpliego` INT NOT NULL,
  `idempresas` INT NOT NULL,
  `idsolicitud` INT NOT NULL,
  PRIMARY KEY (`idactaparticipacion1`),
  INDEX `fk_actaparticipacion_comitecontrataciones1_idx` (`idcomisioncontrataciones` ASC),
  INDEX `fk_actaparticipacion1_pliego1_idx` (`pliego_idpliego` ASC),
  INDEX `fk_actaparticipacion1_empresas1_idx` (`idempresas` ASC),
  INDEX `fk_actaparticipacion1_solicitud1_idx` (`idsolicitud` ASC),
  CONSTRAINT `fk_actaparticipacion_comitecontrataciones1`
    FOREIGN KEY (`idcomisioncontrataciones`)
    REFERENCES `mydb`.`comitecontrataciones` (`idcomisioncontrataciones`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_actaparticipacion1_pliego1`
    FOREIGN KEY (`pliego_idpliego`)
    REFERENCES `mydb`.`pliego` (`idpliego`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_actaparticipacion1_empresas1`
    FOREIGN KEY (`idempresas`)
    REFERENCES `mydb`.`empresas` (`idempresas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_actaparticipacion1_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`actaparticipacion2`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`actaparticipacion2` (
  `idactaparticipacion2` INT NOT NULL AUTO_INCREMENT,
  `idactaparticipacion1` INT NOT NULL,
  `empresas_idempresas` INT NOT NULL,
  `consignacion` VARCHAR(3) NULL COMMENT 'SI\nNO\nN/A',
  `idsolicitud` INT NOT NULL,
  PRIMARY KEY (`idactaparticipacion2`),
  INDEX `fk_actaparticipacion2_actaparticipacion11_idx` (`idactaparticipacion1` ASC),
  INDEX `fk_actaparticipacion2_empresas1_idx` (`empresas_idempresas` ASC),
  INDEX `fk_actaparticipacion2_solicitud1_idx` (`idsolicitud` ASC),
  CONSTRAINT `fk_actaparticipacion2_actaparticipacion11`
    FOREIGN KEY (`idactaparticipacion1`)
    REFERENCES `mydb`.`actaparticipacion1` (`idactaparticipacion1`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_actaparticipacion2_empresas1`
    FOREIGN KEY (`empresas_idempresas`)
    REFERENCES `mydb`.`empresas` (`idempresas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_actaparticipacion2_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`actaparticipacion3`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`actaparticipacion3` (
  `idactaparticipacion3` INT NOT NULL AUTO_INCREMENT,
  `idactaparticipacion1` INT NOT NULL,
  `idsolicitud` INT NOT NULL,
  `idpliegoaspectos` INT NOT NULL,
  `recaudado` VARCHAR(3) NULL COMMENT 'si\nno\nn/a',
  PRIMARY KEY (`idactaparticipacion3`),
  INDEX `fk_actaparticipacion3_actaparticipacion11_idx` (`idactaparticipacion1` ASC),
  INDEX `fk_actaparticipacion3_solicitud1_idx` (`idsolicitud` ASC),
  INDEX `fk_actaparticipacion3_pliegoaspectos1_idx` (`idpliegoaspectos` ASC),
  CONSTRAINT `fk_actaparticipacion3_actaparticipacion11`
    FOREIGN KEY (`idactaparticipacion1`)
    REFERENCES `mydb`.`actaparticipacion1` (`idactaparticipacion1`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_actaparticipacion3_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_actaparticipacion3_pliegoaspectos1`
    FOREIGN KEY (`idpliegoaspectos`)
    REFERENCES `mydb`.`pliegoaspectos` (`idpliegoaspectos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`actaparticipacion4`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`actaparticipacion4` (
  `idactaparticipacion4` INT NOT NULL AUTO_INCREMENT,
  `idactaparticipacion1` INT NOT NULL,
  `idsolicitud` INT NOT NULL,
  `recaudado` VARCHAR(3) NULL COMMENT 'si\nno\nn/a',
  PRIMARY KEY (`idactaparticipacion4`),
  INDEX `fk_actaparticipacion4_actaparticipacion11_idx` (`idactaparticipacion1` ASC),
  INDEX `fk_actaparticipacion4_solicitud1_idx` (`idsolicitud` ASC),
  CONSTRAINT `fk_actaparticipacion4_actaparticipacion11`
    FOREIGN KEY (`idactaparticipacion1`)
    REFERENCES `mydb`.`actaparticipacion1` (`idactaparticipacion1`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_actaparticipacion4_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`actaparticipacion5`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`actaparticipacion5` (
  `idactaparticipacion5` INT NOT NULL AUTO_INCREMENT,
  `actaparticipacion1_idactaparticipacion1` INT NOT NULL,
  `idsolicitud` INT NOT NULL,
  PRIMARY KEY (`idactaparticipacion5`),
  INDEX `fk_actaparticipacion5_actaparticipacion11_idx` (`actaparticipacion1_idactaparticipacion1` ASC),
  INDEX `fk_actaparticipacion5_solicitud1_idx` (`idsolicitud` ASC),
  CONSTRAINT `fk_actaparticipacion5_actaparticipacion11`
    FOREIGN KEY (`actaparticipacion1_idactaparticipacion1`)
    REFERENCES `mydb`.`actaparticipacion1` (`idactaparticipacion1`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_actaparticipacion5_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`actaparticipacion7`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`actaparticipacion7` (
  `idactaparticipacion6` INT NOT NULL AUTO_INCREMENT,
  `idactaparticipacion1` INT NOT NULL,
  `idsolicitud` INT NOT NULL,
  `idpliegom` INT NOT NULL,
  `recaudado` VARCHAR(3) NULL,
  PRIMARY KEY (`idactaparticipacion6`),
  INDEX `fk_actaparticipacion6_actaparticipacion11_idx` (`idactaparticipacion1` ASC),
  INDEX `fk_actaparticipacion7_solicitud1_idx` (`idsolicitud` ASC),
  INDEX `fk_actaparticipacion7_pliegom1_idx` (`idpliegom` ASC),
  CONSTRAINT `fk_actaparticipacion6_actaparticipacion11`
    FOREIGN KEY (`idactaparticipacion1`)
    REFERENCES `mydb`.`actaparticipacion1` (`idactaparticipacion1`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_actaparticipacion7_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_actaparticipacion7_pliegom1`
    FOREIGN KEY (`idpliegom`)
    REFERENCES `mydb`.`pliegom` (`idpliegom`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`actaparticipacion6`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`actaparticipacion6` (
  `idactaparticipacion7` INT NOT NULL AUTO_INCREMENT,
  `idempresas` INT NOT NULL,
  `monto` DECIMAL(10,2) NULL,
  `anticipo` INT NULL,
  `tiempoentrega` INT NULL,
  `tiempogarantia` INT NULL,
  `tipooferta` VARCHAR(7) NULL COMMENT 'Parcial\nTotal',
  `renglones` VARCHAR(45) NULL COMMENT 'rango de renglones ofertados',
  `idsolicitud` INT NOT NULL,
  PRIMARY KEY (`idactaparticipacion7`),
  INDEX `fk_actaparticipacion7_empresas1_idx` (`idempresas` ASC),
  INDEX `fk_actaparticipacion6_solicitud1_idx` (`idsolicitud` ASC),
  CONSTRAINT `fk_actaparticipacion7_empresas1`
    FOREIGN KEY (`idempresas`)
    REFERENCES `mydb`.`empresas` (`idempresas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_actaparticipacion6_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`evamuestra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`evamuestra` (
  `idevamuestra` INT NOT NULL AUTO_INCREMENT,
  `resultado` INT NULL,
  `idpliegom` INT NOT NULL,
  `idempresas` INT NOT NULL,
  `idsolicitud` INT NOT NULL,
  PRIMARY KEY (`idevamuestra`),
  INDEX `fk_evamuestra_pliegom1_idx` (`idpliegom` ASC),
  INDEX `fk_evamuestra_empresas1_idx` (`idempresas` ASC),
  INDEX `fk_evamuestra_solicitud1_idx` (`idsolicitud` ASC),
  CONSTRAINT `fk_evamuestra_pliegom1`
    FOREIGN KEY (`idpliegom`)
    REFERENCES `mydb`.`pliegom` (`idpliegom`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_evamuestra_empresas1`
    FOREIGN KEY (`idempresas`)
    REFERENCES `mydb`.`empresas` (`idempresas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_evamuestra_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`garantiaoferta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`garantiaoferta` (
  `idgarantiaoferta` INT NOT NULL AUTO_INCREMENT,
  `emisor` VARCHAR(45) NULL COMMENT 'nombre del banco o aseguradora que emitio la garantia',
  `monto` DECIMAL(10,2) NULL,
  `tipogarantia` VARCHAR(45) CHARACTER SET 'big5' COLLATE 'big5_chinese_ci' NULL COMMENT 'Cheque de Gerencia\nCheque de la Empresa\nFianza de Licitacion',
  `codigogarantia` VARCHAR(45) NULL,
  `idempresas` INT NOT NULL,
  `idpliego` INT NOT NULL,
  `idsolicitud` INT NOT NULL,
  `codigo` VARCHAR(45) NULL,
  `enteemisor` VARCHAR(45) NULL,
  `montogarantia` DECIMAL(10,2) NULL,
  PRIMARY KEY (`idgarantiaoferta`),
  INDEX `fk_garantiaoferta_empresas1_idx` (`idempresas` ASC),
  INDEX `fk_garantiaoferta_pliego1_idx` (`idpliego` ASC),
  INDEX `fk_garantiaoferta_solicitud1_idx` (`idsolicitud` ASC),
  CONSTRAINT `fk_garantiaoferta_empresas1`
    FOREIGN KEY (`idempresas`)
    REFERENCES `mydb`.`empresas` (`idempresas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_garantiaoferta_pliego1`
    FOREIGN KEY (`idpliego`)
    REFERENCES `mydb`.`pliego` (`idpliego`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_garantiaoferta_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`precalificacionfinanciera`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`precalificacionfinanciera` (
  `idprecalificacionfinanciera` INT NOT NULL AUTO_INCREMENT,
  `idempresas` INT NOT NULL,
  `cfec` DECIMAL(10,2) NULL,
  `nfec` VARCHAR(7) NULL COMMENT 'nives financiero estimado de contratacion',
  `idsolicitud` INT NOT NULL,
  `idlibroproceso` INT NOT NULL,
  PRIMARY KEY (`idprecalificacionfinanciera`),
  INDEX `fk_precalificacionfinanciera_empresas1_idx` (`idempresas` ASC),
  INDEX `fk_precalificacionfinanciera_solicitud1_idx` (`idsolicitud` ASC),
  INDEX `fk_precalificacionfinanciera_libroproceso1_idx` (`idlibroproceso` ASC),
  CONSTRAINT `fk_precalificacionfinanciera_empresas1`
    FOREIGN KEY (`idempresas`)
    REFERENCES `mydb`.`empresas` (`idempresas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_precalificacionfinanciera_solicitud1`
    FOREIGN KEY (`idsolicitud`)
    REFERENCES `mydb`.`solicitud` (`idsolicitud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_precalificacionfinanciera_libroproceso1`
    FOREIGN KEY (`idlibroproceso`)
    REFERENCES `mydb`.`libroproceso` (`idlibroproceso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
