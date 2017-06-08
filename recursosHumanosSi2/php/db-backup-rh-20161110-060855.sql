CREATE DATABASE IF NOT EXISTS rh;

USE rh;

DROP TABLE IF EXISTS academico;

CREATE TABLE `academico` (
  `idAcademico` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `idCurriculum` int(11) NOT NULL,
  PRIMARY KEY (`idAcademico`),
  KEY `idCurriculum` (`idCurriculum`),
  CONSTRAINT `academico_ibfk_1` FOREIGN KEY (`idCurriculum`) REFERENCES `curriculum` (`idCurriculum`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO academico VALUES("1","Ing. Informatico","1");
INSERT INTO academico VALUES("2","Ing. Sistemas","2");
INSERT INTO academico VALUES("3","Ing. Redes","3");
INSERT INTO academico VALUES("4","Ing. Informatico","4");
INSERT INTO academico VALUES("5","Ing. Quimico","5");
INSERT INTO academico VALUES("6","Tecnico Superior en Mecanica","6");
INSERT INTO academico VALUES("7","Abogado","7");
INSERT INTO academico VALUES("8","Periodista","8");
INSERT INTO academico VALUES("9","Tecnico Superior en automitriz","9");
INSERT INTO academico VALUES("10","Tecnico en Computacion","10");
INSERT INTO academico VALUES("11","Ing. informatico","14");
INSERT INTO academico VALUES("20","ing. electromecanico","1");



DROP TABLE IF EXISTS afp;

CREATE TABLE `afp` (
  `idDescuento` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`idDescuento`),
  CONSTRAINT `afp_ibfk_1` FOREIGN KEY (`idDescuento`) REFERENCES `descuento` (`idDescuento`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO afp VALUES("3","previon");
INSERT INTO afp VALUES("7","previon");
INSERT INTO afp VALUES("11","previon");



DROP TABLE IF EXISTS anticipo;

CREATE TABLE `anticipo` (
  `idDescuento` int(11) NOT NULL,
  `motivo` varchar(100) NOT NULL,
  PRIMARY KEY (`idDescuento`),
  CONSTRAINT `anticipo_ibfk_1` FOREIGN KEY (`idDescuento`) REFERENCES `descuento` (`idDescuento`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO anticipo VALUES("2","asunto familiar");
INSERT INTO anticipo VALUES("6","asunto de salud");
INSERT INTO anticipo VALUES("10","asunto de pagos de facturas");



DROP TABLE IF EXISTS asigna;

CREATE TABLE `asigna` (
  `idAsigna` int(11) NOT NULL AUTO_INCREMENT,
  `idCargo` int(11) NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  PRIMARY KEY (`idAsigna`),
  KEY `idCargo` (`idCargo`),
  KEY `idDepartamento` (`idDepartamento`),
  CONSTRAINT `asigna_ibfk_1` FOREIGN KEY (`idCargo`) REFERENCES `cargo` (`idCargo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `asigna_ibfk_2` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`idDepartamento`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO asigna VALUES("1","7","1");
INSERT INTO asigna VALUES("2","8","2");
INSERT INTO asigna VALUES("3","8","3");
INSERT INTO asigna VALUES("4","8","4");
INSERT INTO asigna VALUES("5","8","5");



DROP TABLE IF EXISTS capacidaddesarrollo;

CREATE TABLE `capacidaddesarrollo` (
  `idCapacidadDesarrollo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  `instructor` varchar(100) NOT NULL,
  PRIMARY KEY (`idCapacidadDesarrollo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO capacidaddesarrollo VALUES("1","Taller de redes inalambricas","Ing Jorge Gonzales");
INSERT INTO capacidaddesarrollo VALUES("2","Seminario de Liderasgo y emprendimiento","Ing Franklin Calderon");
INSERT INTO capacidaddesarrollo VALUES("3","Conferencia Buenas Practicas de Desarrollo personal","Lic Jhony Atila");
INSERT INTO capacidaddesarrollo VALUES("4","Seminario Actualizacion de Normas Tributarias","Lic Rocio Uruña");
INSERT INTO capacidaddesarrollo VALUES("5","Taller de Actualizacion Normas de seguridad Digital","Ing Tito Luna");
INSERT INTO capacidaddesarrollo VALUES("9","el mejor","tito");



DROP TABLE IF EXISTS cargo;

CREATE TABLE `cargo` (
  `idCargo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `detalle` varchar(100) NOT NULL,
  PRIMARY KEY (`idCargo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO cargo VALUES("1","Contador","Balances y planillas en general");
INSERT INTO cargo VALUES("2","Auxiliar de Oficina","Redaccion y Archivado de Documentos");
INSERT INTO cargo VALUES("3","Auxiliar de mantenimiento","plomeria, electricidad, albañileria en general");
INSERT INTO cargo VALUES("4","Asesor Juridico","Contratos, formularios en general");
INSERT INTO cargo VALUES("5","Guardia de Seguridad","guardia nocturna de las instalaciones");
INSERT INTO cargo VALUES("6","supervisor","supervisor de planta");
INSERT INTO cargo VALUES("7","administrador","encargado del sistema interno");
INSERT INTO cargo VALUES("8","empleado","empleado de planta");



DROP TABLE IF EXISTS contrato;

CREATE TABLE `contrato` (
  `idContrato` int(11) NOT NULL AUTO_INCREMENT,
  `clausula` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `nombreEmpresa` varchar(100) DEFAULT NULL,
  `salario` float NOT NULL,
  `vigenciaContrato` varchar(100) DEFAULT NULL,
  `tipo` char(1) NOT NULL,
  `diasVacaciones` int(11) NOT NULL,
  `idSeguroSocial` int(11) NOT NULL,
  PRIMARY KEY (`idContrato`),
  KEY `idSeguroSocial` (`idSeguroSocial`),
  CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`idSeguroSocial`) REFERENCES `segurosocial` (`idSeguroSocial`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO contrato VALUES("1","normas y leyes vigentes","2016-06-22","YPFB","1200","indefinido","2","30","1");
INSERT INTO contrato VALUES("2","normas y leyes vigentes","2016-06-22","YPFB","1200","3 meses","1","7","1");
INSERT INTO contrato VALUES("3","normas y leyes vigentes","2016-06-23","YPFB","1200","3 meses","1","7","1");
INSERT INTO contrato VALUES("4","normas y leyes vigentes","2016-06-24","YPFB","1200","3 meses","1","7","2");
INSERT INTO contrato VALUES("5","normas y leyes vigentes","2016-06-24","YPFB","6000","3 meses","1","7","2");
INSERT INTO contrato VALUES("6","normas y leyes vigentes","2016-12-22","YPFB","1200","indefinido","2","30","1");



DROP TABLE IF EXISTS convocatoria;

CREATE TABLE `convocatoria` (
  `idConvocatoria` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(50) NOT NULL,
  `fechaHora` datetime NOT NULL,
  `nro` int(11) NOT NULL,
  `salario` float NOT NULL,
  `tipo` char(1) NOT NULL,
  PRIMARY KEY (`idConvocatoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO convocatoria VALUES("1","Auxiliar de Oficina","2015-01-05 08:00:00","1","1400","E");
INSERT INTO convocatoria VALUES("2","Auxiliar de Mantenimiento","2015-01-05 08:00:00","2","1400","F");
INSERT INTO convocatoria VALUES("3","Contador","2015-01-21 08:00:00","3","2400","E");
INSERT INTO convocatoria VALUES("4","Asesor Juridico","2015-01-21 08:00:00","4","2800","E");
INSERT INTO convocatoria VALUES("5","Guardia de Seguridad","2016-01-09 22:00:00","5","2000","E");



DROP TABLE IF EXISTS curriculum;

CREATE TABLE `curriculum` (
  `idCurriculum` int(11) NOT NULL AUTO_INCREMENT,
  `bachillerHumanidades` varchar(100) DEFAULT NULL,
  `domicilio` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `idiomaExtranjero` varchar(100) DEFAULT NULL,
  `idiomaNativo` varchar(100) DEFAULT NULL,
  `lugarNacimiento` varchar(100) DEFAULT NULL,
  `nacionalidad` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idCurriculum`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO curriculum VALUES("1","Colegio Don Bosco","Av. Litoral B.Militar","dreik_1721@hotmail.com","Ingles","castellano","Cochabamba","Boliviano");
INSERT INTO curriculum VALUES("2","Colegio La Salle","Av. Santos Dumont","andy_005_92@hotmail.com","Ingles","castellano","La Paz","Boliviano");
INSERT INTO curriculum VALUES("3","Colegio Berea","Av. La Barranca 4to. anillo","mickicito_tu_bb@hotmail.com","Frances","castellano","Santa Cruz","Boliviano");
INSERT INTO curriculum VALUES("4","Colegio Marista","Av. Paragua","rene_12@hotmail.com","Ingles","castellano","Santa Cruz","Boliviano");
INSERT INTO curriculum VALUES("5","Colegio Uboldi","Av. Suarez Arana","leandro_Añez@hotmail.com","Portugues","castellano","Beni","Boliviano");
INSERT INTO curriculum VALUES("6","Colegio San Isidro","Av. Banzer","andres_bustamante@hotmail.com","Ingles","castellano","cochabamba","Boliviano");
INSERT INTO curriculum VALUES("7","Colegio Aleman","Av. Beni","julieta_Arnez@hotmail.com","Ingles","castellano","La Paz","Boliviano");
INSERT INTO curriculum VALUES("8","Colegio Aleman","Av. doble via la guardia","olivia123@hotmail.com","Frances","castellano","La Paz","Boliviano");
INSERT INTO curriculum VALUES("9","Colegio Don Bosco","Av. La Campana","Dominic_asd@hotmail.com","Ingles","castellano","Santa Cruz","Boliviano");
INSERT INTO curriculum VALUES("10","Colegio Uboldi","Av. Alemana","matilde_123@hotmail.com","Aleman","castellano","Tarija","Boliviano");
INSERT INTO curriculum VALUES("14","Colegio: Luis Espinal Capms","Barrio el Triunfo","tito_lunafin@hotmail.com","4","4","Montero","Boliviana");



DROP TABLE IF EXISTS departamento;

CREATE TABLE `departamento` (
  `idDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `detalle` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`idDepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO departamento VALUES("1","manejo contable en general","contabilidad");
INSERT INTO departamento VALUES("2","reparaciones del edifico en general","Mantenimiento");
INSERT INTO departamento VALUES("3","Respaldo legal de la empresa","Legal");
INSERT INTO departamento VALUES("4","ventas en general","Ventas");
INSERT INTO departamento VALUES("5","gerencia de la empresa","Administracion");



DROP TABLE IF EXISTS descuento;

CREATE TABLE `descuento` (
  `idDescuento` int(11) NOT NULL AUTO_INCREMENT,
  `monto` float NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`idDescuento`),
  KEY `tipo` (`tipo`),
  CONSTRAINT `descuento_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipodescuento` (`idTipoDescuento`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO descuento VALUES("1","100","1");
INSERT INTO descuento VALUES("2","100","2");
INSERT INTO descuento VALUES("3","500","3");
INSERT INTO descuento VALUES("4","700","4");
INSERT INTO descuento VALUES("5","300","1");
INSERT INTO descuento VALUES("6","200","2");
INSERT INTO descuento VALUES("7","500","3");
INSERT INTO descuento VALUES("8","250","4");
INSERT INTO descuento VALUES("9","310","1");
INSERT INTO descuento VALUES("10","560","2");
INSERT INTO descuento VALUES("11","500","3");
INSERT INTO descuento VALUES("12","380","4");



DROP TABLE IF EXISTS empleado;

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL AUTO_INCREMENT,
  `idContrato` int(11) NOT NULL,
  `idPostulante` int(11) NOT NULL,
  `idAsigna` int(11) NOT NULL,
  `habilitado` int(11) NOT NULL,
  PRIMARY KEY (`idEmpleado`),
  KEY `idContrato` (`idContrato`),
  KEY `idPostulante` (`idPostulante`),
  KEY `idAsigna` (`idAsigna`),
  CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`idContrato`) REFERENCES `contrato` (`idContrato`),
  CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`idPostulante`) REFERENCES `postulante` (`idPostulante`),
  CONSTRAINT `empleado_ibfk_3` FOREIGN KEY (`idAsigna`) REFERENCES `asigna` (`idAsigna`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO empleado VALUES("1","6","10","1","1");
INSERT INTO empleado VALUES("2","2","1","2","1");
INSERT INTO empleado VALUES("3","3","4","3","1");
INSERT INTO empleado VALUES("4","4","6","4","0");
INSERT INTO empleado VALUES("5","5","8","5","1");



DROP TABLE IF EXISTS entrevista;

CREATE TABLE `entrevista` (
  `idEntrevista` int(11) NOT NULL AUTO_INCREMENT,
  `fechaHora` datetime NOT NULL,
  `resultado` varchar(50) NOT NULL,
  `idSeleccion` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  PRIMARY KEY (`idEntrevista`),
  KEY `idSeleccion` (`idSeleccion`),
  KEY `idEmpleado` (`idEmpleado`),
  CONSTRAINT `entrevista_ibfk_1` FOREIGN KEY (`idSeleccion`) REFERENCES `seleccion` (`idSeleccion`),
  CONSTRAINT `entrevista_ibfk_2` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO entrevista VALUES("1","2016-06-22 14:00:28","aceptado","1","1");
INSERT INTO entrevista VALUES("2","2016-06-22 15:00:28","aceptado","2","1");
INSERT INTO entrevista VALUES("3","2016-06-22 16:00:28","aceptado","3","1");
INSERT INTO entrevista VALUES("4","2016-06-22 17:00:28","aceptado","4","1");
INSERT INTO entrevista VALUES("5","2016-06-23 09:00:28","rechazado","5","1");



DROP TABLE IF EXISTS grupo;

CREATE TABLE `grupo` (
  `idGrupo` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`idGrupo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO grupo VALUES("1","empleado");
INSERT INTO grupo VALUES("2","administrador");
INSERT INTO grupo VALUES("3","empleado de planta");



DROP TABLE IF EXISTS horario;

CREATE TABLE `horario` (
  `idHorario` int(11) NOT NULL AUTO_INCREMENT,
  `horaEntrada` time NOT NULL,
  `horaSalida` time NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`idHorario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO horario VALUES("1","09:00:00","12:00:00","maï¿½ana");
INSERT INTO horario VALUES("2","14:00:00","18:00:00","tarde");
INSERT INTO horario VALUES("3","19:00:00","06:00:00","noche");
INSERT INTO horario VALUES("4","09:00:00","15:00:00","feriado");



DROP TABLE IF EXISTS ingreso;

CREATE TABLE `ingreso` (
  `idIngreso` int(11) NOT NULL AUTO_INCREMENT,
  `monto` float NOT NULL,
  `idTipo` int(11) NOT NULL,
  PRIMARY KEY (`idIngreso`),
  KEY `idTipo` (`idTipo`),
  CONSTRAINT `ingreso_ibfk_1` FOREIGN KEY (`idTipo`) REFERENCES `tipoingreso` (`idTipoIngreso`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO ingreso VALUES("1","500","1");
INSERT INTO ingreso VALUES("2","150","1");
INSERT INTO ingreso VALUES("3","300","1");
INSERT INTO ingreso VALUES("4","100","1");
INSERT INTO ingreso VALUES("5","250","1");
INSERT INTO ingreso VALUES("6","100","2");
INSERT INTO ingreso VALUES("7","100","3");
INSERT INTO ingreso VALUES("8","50","4");
INSERT INTO ingreso VALUES("9","150","3");
INSERT INTO ingreso VALUES("10","300","3");
INSERT INTO ingreso VALUES("11","200","2");
INSERT INTO ingreso VALUES("12","150","4");



DROP TABLE IF EXISTS operacion;

CREATE TABLE `operacion` (
  `idOperacion` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`idOperacion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO operacion VALUES("1","insertar");
INSERT INTO operacion VALUES("2","eliminar");
INSERT INTO operacion VALUES("3","actualizar");



DROP TABLE IF EXISTS postulante;

CREATE TABLE `postulante` (
  `idPostulante` int(11) NOT NULL AUTO_INCREMENT,
  `ci` int(11) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `idcurriculum` int(11) NOT NULL,
  PRIMARY KEY (`idPostulante`),
  KEY `idcurriculum` (`idcurriculum`),
  CONSTRAINT `postulante_ibfk_1` FOREIGN KEY (`idcurriculum`) REFERENCES `curriculum` (`idCurriculum`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO postulante VALUES("1","52856881","1992-10-26","Juanita Perez","f","79915571","1");
INSERT INTO postulante VALUES("2","5285682","1990-01-12","Juanito Guzman","m","79915572","2");
INSERT INTO postulante VALUES("3","5285683","1960-05-12","Estevan Lopez","m","79915573","3");
INSERT INTO postulante VALUES("4","5285684","1980-12-17","Rene Mendez","m","79915574","4");
INSERT INTO postulante VALUES("5","5285685","1967-11-20","German Veizaga","m","79915575","5");
INSERT INTO postulante VALUES("6","5285686","1984-05-12","Hernesto Gomez","m","79915576","6");
INSERT INTO postulante VALUES("7","5285687","1980-07-30","violeta Gomez","f","79915577","7");
INSERT INTO postulante VALUES("8","5285688","1978-05-27","olivia pereira","f","79915578","8");
INSERT INTO postulante VALUES("9","5285689","1990-03-20","Dominic Martinez","f","79915579","9");
INSERT INTO postulante VALUES("10","5285690","1992-10-26","Matilde Torrez","f","79915580","10");
INSERT INTO postulante VALUES("11","6261967","1985-01-17","juan carlos jimenez senteno","m","75626902","14");



DROP TABLE IF EXISTS segurosocial;

CREATE TABLE `segurosocial` (
  `idSeguroSocial` int(11) NOT NULL AUTO_INCREMENT,
  `nombreSeguro` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idSeguroSocial`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO segurosocial VALUES("1","Caja Nacional de Bolivia");
INSERT INTO segurosocial VALUES("2","Seguro Departamental Santa Cruz");



DROP TABLE IF EXISTS seleccion;

CREATE TABLE `seleccion` (
  `idSeleccion` int(11) NOT NULL,
  `idPostulante` int(11) NOT NULL,
  `idConvocatoria` int(11) NOT NULL,
  PRIMARY KEY (`idSeleccion`),
  KEY `idPostulante` (`idPostulante`),
  KEY `idConvocatoria` (`idConvocatoria`),
  CONSTRAINT `seleccion_ibfk_1` FOREIGN KEY (`idPostulante`) REFERENCES `validacion` (`idPostulante`),
  CONSTRAINT `seleccion_ibfk_2` FOREIGN KEY (`idConvocatoria`) REFERENCES `validacion` (`idConvocatoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO seleccion VALUES("1","1","1");
INSERT INTO seleccion VALUES("2","4","2");
INSERT INTO seleccion VALUES("3","6","3");
INSERT INTO seleccion VALUES("4","8","4");
INSERT INTO seleccion VALUES("5","9","5");



DROP TABLE IF EXISTS tipodescuento;

CREATE TABLE `tipodescuento` (
  `idTipoDescuento` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`idTipoDescuento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tipodescuento VALUES("1","sancion");
INSERT INTO tipodescuento VALUES("2","anticipo");
INSERT INTO tipodescuento VALUES("3","afp");
INSERT INTO tipodescuento VALUES("4","prestamo");



DROP TABLE IF EXISTS tipoingreso;

CREATE TABLE `tipoingreso` (
  `idTipoIngreso` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`idTipoIngreso`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tipoingreso VALUES("1","escalafon");
INSERT INTO tipoingreso VALUES("2","retribucion extra");
INSERT INTO tipoingreso VALUES("3","bono antigueda");
INSERT INTO tipoingreso VALUES("4","hora extra");



DROP TABLE IF EXISTS validacion;

CREATE TABLE `validacion` (
  `idPostulante` int(11) NOT NULL,
  `idConvocatoria` int(11) NOT NULL,
  `estado` char(1) NOT NULL,
  PRIMARY KEY (`idPostulante`,`idConvocatoria`),
  KEY `idConvocatoria` (`idConvocatoria`),
  CONSTRAINT `validacion_ibfk_1` FOREIGN KEY (`idPostulante`) REFERENCES `postulante` (`idPostulante`),
  CONSTRAINT `validacion_ibfk_2` FOREIGN KEY (`idConvocatoria`) REFERENCES `convocatoria` (`idConvocatoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO validacion VALUES("1","1","A");
INSERT INTO validacion VALUES("2","1","R");
INSERT INTO validacion VALUES("3","2","R");
INSERT INTO validacion VALUES("4","2","A");
INSERT INTO validacion VALUES("5","3","R");
INSERT INTO validacion VALUES("6","3","A");
INSERT INTO validacion VALUES("7","4","R");
INSERT INTO validacion VALUES("8","4","A");
INSERT INTO validacion VALUES("9","5","A");
INSERT INTO validacion VALUES("10","5","R");



