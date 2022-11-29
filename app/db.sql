Create DATABASE buscador;

CREATE TABLE `buscador`.`t_continente` (
  `id_continente` INT NOT NULL AUTO_INCREMENT,
  `continente` VARCHAR(245) NOT NULL,
  `Descripcion` TEXT NOT NULL,
  PRIMARY KEY (`id_continente`));
  
  CREATE TABLE `buscador`.`t_pais` (
  `id_pais` INT NOT NULL AUTO_INCREMENT,
  `id_continente` INT NOT NULL,
  `nombre_pais` VARCHAR(245) NOT NULL,
  PRIMARY KEY (`id_pais`),
  INDEX `pk_id_pais_idx` (`id_continente` ASC) VISIBLE,
  CONSTRAINT `pk_id_pais`
    FOREIGN KEY (`id_continente`)
    REFERENCES `buscador`.`t_continente` (`id_continente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);



CREATE VIEW `v_continente_pais` AS
SELECT 
        `continente`.`id_continente` AS `idContinente`,
        `continente`.`continente` AS `nombre_continente`,
        `continente`.`Descripcion` AS `descripcion_continente`,
        `pais`.`id_pais` AS `idPais`,
        `pais`.`nombre_pais` AS `nombre_pais`,
        `pais`.`imagen` AS `imagen`
        FROM
	t_continente AS continente
		JOIN
	t_pais AS pais ON continente.id_continente = pais.id_continente;