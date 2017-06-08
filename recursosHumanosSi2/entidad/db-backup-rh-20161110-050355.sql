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



DROP TABLE IF EXISTS asistencia;

CREATE TABLE `asistencia` (
  `idAsistencia` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `tipo` char(1) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  PRIMARY KEY (`idAsistencia`),
  KEY `idEmpleado` (`idEmpleado`),
  CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO asistencia VALUES("1","2016-06-30","09:00:00","E","1");
INSERT INTO asistencia VALUES("2","2016-06-30","14:00:00","E","2");
INSERT INTO asistencia VALUES("3","2016-06-30","19:00:00","E","3");
INSERT INTO asistencia VALUES("4","2016-06-30","09:00:00","E","4");
INSERT INTO asistencia VALUES("5","2016-06-30","15:00:00","E","5");
INSERT INTO asistencia VALUES("6","2016-06-30","12:00:00","S","1");
INSERT INTO asistencia VALUES("7","2016-06-30","18:00:00","S","2");
INSERT INTO asistencia VALUES("8","2016-06-30","05:00:00","S","3");
INSERT INTO asistencia VALUES("9","2016-06-30","12:00:00","S","4");
INSERT INTO asistencia VALUES("10","2016-06-30","18:00:00","S","5");
INSERT INTO asistencia VALUES("15","2016-10-27","10:00:00","E","2");



DROP TABLE IF EXISTS bitacora;

CREATE TABLE `bitacora` (
  `idSesion` int(11) NOT NULL,
  `idSub` int(11) NOT NULL,
  `horaFecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idSesion`,`idSub`),
  KEY `idSub` (`idSub`),
  CONSTRAINT `bitacora_ibfk_1` FOREIGN KEY (`idSub`) REFERENCES `suboperacion` (`idSub`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `bitacora_ibfk_2` FOREIGN KEY (`idSesion`) REFERENCES `iniciosesion` (`idSesion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO bitacora VALUES("7","3","2016-10-27 17:42:11");
INSERT INTO bitacora VALUES("8","4","2016-10-27 18:55:47");
INSERT INTO bitacora VALUES("11","5","2016-10-28 03:44:54");
INSERT INTO bitacora VALUES("11","6","2016-10-28 03:47:27");
INSERT INTO bitacora VALUES("11","7","2016-10-28 03:49:11");
INSERT INTO bitacora VALUES("11","8","2016-10-28 03:54:19");
INSERT INTO bitacora VALUES("12","9","2016-10-28 04:08:17");
INSERT INTO bitacora VALUES("13","10","2016-10-28 04:52:57");
INSERT INTO bitacora VALUES("24","11","2016-10-31 19:00:00");
INSERT INTO bitacora VALUES("31","12","2016-11-04 16:59:23");
INSERT INTO bitacora VALUES("31","13","2016-11-04 16:59:35");



DROP TABLE IF EXISTS bonoantiguedad;

CREATE TABLE `bonoantiguedad` (
  `idIngreso` int(11) NOT NULL,
  `cantidadAnos` int(11) NOT NULL,
  PRIMARY KEY (`idIngreso`),
  CONSTRAINT `bonoantiguedad_ibfk_1` FOREIGN KEY (`idIngreso`) REFERENCES `ingreso` (`idIngreso`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO bonoantiguedad VALUES("7","1");
INSERT INTO bonoantiguedad VALUES("9","2");
INSERT INTO bonoantiguedad VALUES("10","5");



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



DROP TABLE IF EXISTS correspondedescuento;

CREATE TABLE `correspondedescuento` (
  `idPlanilla` int(11) NOT NULL,
  `idDescuento` int(11) NOT NULL,
  PRIMARY KEY (`idPlanilla`,`idDescuento`),
  KEY `idDescuento` (`idDescuento`),
  CONSTRAINT `correspondedescuento_ibfk_1` FOREIGN KEY (`idPlanilla`) REFERENCES `planilla` (`idPlanilla`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `correspondedescuento_ibfk_2` FOREIGN KEY (`idDescuento`) REFERENCES `descuento` (`idDescuento`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO correspondedescuento VALUES("2","1");
INSERT INTO correspondedescuento VALUES("3","2");
INSERT INTO correspondedescuento VALUES("1","3");
INSERT INTO correspondedescuento VALUES("2","3");
INSERT INTO correspondedescuento VALUES("3","3");
INSERT INTO correspondedescuento VALUES("4","3");
INSERT INTO correspondedescuento VALUES("5","3");
INSERT INTO correspondedescuento VALUES("2","4");
INSERT INTO correspondedescuento VALUES("1","6");
INSERT INTO correspondedescuento VALUES("3","8");
INSERT INTO correspondedescuento VALUES("5","8");
INSERT INTO correspondedescuento VALUES("4","9");
INSERT INTO correspondedescuento VALUES("5","9");
INSERT INTO correspondedescuento VALUES("4","10");
INSERT INTO correspondedescuento VALUES("1","12");



DROP TABLE IF EXISTS correspondeingreso;

CREATE TABLE `correspondeingreso` (
  `idPlanilla` int(11) NOT NULL,
  `idIngreso` int(11) NOT NULL,
  PRIMARY KEY (`idPlanilla`,`idIngreso`),
  KEY `idIngreso` (`idIngreso`),
  CONSTRAINT `correspondeingreso_ibfk_1` FOREIGN KEY (`idPlanilla`) REFERENCES `planilla` (`idPlanilla`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `correspondeingreso_ibfk_2` FOREIGN KEY (`idIngreso`) REFERENCES `ingreso` (`idIngreso`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO correspondeingreso VALUES("2","2");
INSERT INTO correspondeingreso VALUES("3","2");
INSERT INTO correspondeingreso VALUES("4","2");
INSERT INTO correspondeingreso VALUES("5","4");
INSERT INTO correspondeingreso VALUES("1","5");
INSERT INTO correspondeingreso VALUES("2","6");
INSERT INTO correspondeingreso VALUES("2","7");
INSERT INTO correspondeingreso VALUES("3","7");
INSERT INTO correspondeingreso VALUES("4","7");
INSERT INTO correspondeingreso VALUES("5","7");
INSERT INTO correspondeingreso VALUES("3","8");
INSERT INTO correspondeingreso VALUES("5","8");
INSERT INTO correspondeingreso VALUES("1","9");
INSERT INTO correspondeingreso VALUES("4","11");
INSERT INTO correspondeingreso VALUES("1","12");



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



DROP TABLE IF EXISTS escalafon;

CREATE TABLE `escalafon` (
  `idIngreso` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`idIngreso`),
  CONSTRAINT `escalafon_ibfk_1` FOREIGN KEY (`idIngreso`) REFERENCES `ingreso` (`idIngreso`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO escalafon VALUES("1","master");
INSERT INTO escalafon VALUES("2","tecnico superior");
INSERT INTO escalafon VALUES("3","doctorado");
INSERT INTO escalafon VALUES("4","tecnico");
INSERT INTO escalafon VALUES("5","licenciado");



DROP TABLE IF EXISTS extincioncontrato;

CREATE TABLE `extincioncontrato` (
  `idExtincion` int(11) NOT NULL AUTO_INCREMENT,
  `acuerdoFiniquito` int(11) NOT NULL,
  `anexo` varchar(100) NOT NULL,
  `causa` varchar(100) NOT NULL,
  `razones` varchar(100) DEFAULT NULL,
  `idContrato` int(11) NOT NULL,
  PRIMARY KEY (`idExtincion`),
  KEY `idContrato` (`idContrato`),
  CONSTRAINT `extincioncontrato_ibfk_1` FOREIGN KEY (`idContrato`) REFERENCES `contrato` (`idContrato`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO extincioncontrato VALUES("1","600","direccion/archivo.pdf","faltas","por retrazos y dias no asistidos si permiso","4");



DROP TABLE IF EXISTS grupo;

CREATE TABLE `grupo` (
  `idGrupo` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`idGrupo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO grupo VALUES("1","empleado");
INSERT INTO grupo VALUES("2","administrador");
INSERT INTO grupo VALUES("3","empleado de planta");



DROP TABLE IF EXISTS horaextra;

CREATE TABLE `horaextra` (
  `idIngreso` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `cantHoras` int(11) NOT NULL,
  PRIMARY KEY (`idIngreso`),
  CONSTRAINT `horaextra_ibfk_1` FOREIGN KEY (`idIngreso`) REFERENCES `ingreso` (`idIngreso`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO horaextra VALUES("8","2016-08-02","voluntario","1");
INSERT INTO horaextra VALUES("12","2016-08-04","obligatorio","3");



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



DROP TABLE IF EXISTS iniciosesion;

CREATE TABLE `iniciosesion` (
  `idSesion` int(11) NOT NULL AUTO_INCREMENT,
  `inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nombreUsuario` varchar(100) NOT NULL,
  PRIMARY KEY (`idSesion`),
  KEY `nombreUsuario` (`nombreUsuario`),
  CONSTRAINT `iniciosesion_ibfk_1` FOREIGN KEY (`nombreUsuario`) REFERENCES `usuario` (`nombreUsuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO iniciosesion VALUES("4","2016-10-27 15:12:54","olivia_1");
INSERT INTO iniciosesion VALUES("5","2016-10-27 15:14:13","juanita_1");
INSERT INTO iniciosesion VALUES("6","2016-10-27 16:41:19","olivia_1");
INSERT INTO iniciosesion VALUES("7","2016-10-27 17:21:25","olivia_1");
INSERT INTO iniciosesion VALUES("8","2016-10-27 18:55:10","juanita_1");
INSERT INTO iniciosesion VALUES("9","2016-10-28 00:29:47","olivia_1");
INSERT INTO iniciosesion VALUES("10","2016-10-28 03:26:20","olivia_1");
INSERT INTO iniciosesion VALUES("11","2016-10-28 03:27:08","olivia_1");
INSERT INTO iniciosesion VALUES("12","2016-10-28 04:07:59","matilte_1");
INSERT INTO iniciosesion VALUES("13","2016-10-28 04:17:18","olivia_1");
INSERT INTO iniciosesion VALUES("14","2016-10-28 05:45:45","olivia_1");
INSERT INTO iniciosesion VALUES("15","2016-10-28 08:39:28","olivia_1");
INSERT INTO iniciosesion VALUES("16","2016-10-28 14:23:38","olivia_1");
INSERT INTO iniciosesion VALUES("17","2016-10-28 15:56:15","olivia_1");
INSERT INTO iniciosesion VALUES("18","2016-10-29 11:44:31","olivia_1");
INSERT INTO iniciosesion VALUES("19","2016-10-29 12:03:54","olivia_1");
INSERT INTO iniciosesion VALUES("20","2016-10-31 10:00:46","olivia_1");
INSERT INTO iniciosesion VALUES("21","2016-10-31 12:35:13","olivia_1");
INSERT INTO iniciosesion VALUES("22","2016-10-31 14:52:52","olivia_1");
INSERT INTO iniciosesion VALUES("23","2016-10-31 15:39:07","olivia_1");
INSERT INTO iniciosesion VALUES("24","2016-10-31 16:10:18","olivia_1");
INSERT INTO iniciosesion VALUES("25","2016-11-01 01:05:39","olivia_1");
INSERT INTO iniciosesion VALUES("26","2016-11-01 04:32:59","olivia_1");
INSERT INTO iniciosesion VALUES("27","2016-11-02 20:43:30","olivia_1");
INSERT INTO iniciosesion VALUES("28","2016-11-03 08:24:31","olivia_1");
INSERT INTO iniciosesion VALUES("29","2016-11-04 15:21:06","olivia_1");
INSERT INTO iniciosesion VALUES("30","2016-11-04 15:24:03","olivia_1");
INSERT INTO iniciosesion VALUES("31","2016-11-04 15:58:31","olivia_1");
INSERT INTO iniciosesion VALUES("32","2016-11-07 15:55:57","olivia_1");
INSERT INTO iniciosesion VALUES("33","2016-11-08 13:43:12","olivia_1");
INSERT INTO iniciosesion VALUES("34","2016-11-09 18:03:40","olivia_1");
INSERT INTO iniciosesion VALUES("35","2016-11-09 22:11:45","olivia_1");



DROP TABLE IF EXISTS laboral;

CREATE TABLE `laboral` (
  `idLaboral` int(11) NOT NULL AUTO_INCREMENT,
  `lugarTrabajo` varchar(100) NOT NULL,
  `tiempoTrabajo` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `motivoExtincionContrato` varchar(100) NOT NULL,
  `idCurriculum` int(11) NOT NULL,
  PRIMARY KEY (`idLaboral`),
  KEY `idCurriculum` (`idCurriculum`),
  CONSTRAINT `laboral_ibfk_1` FOREIGN KEY (`idCurriculum`) REFERENCES `curriculum` (`idCurriculum`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO laboral VALUES("1","mantenimiento y soporte a la empresa Comunicarte","9 meses","supervisor","carta de renuncia","1");
INSERT INTO laboral VALUES("2","soporte tecnico en Cotas","24 meses","administrador","carta de renuncia","2");
INSERT INTO laboral VALUES("3","UAGRM","12 meses","docente","despido","3");
INSERT INTO laboral VALUES("4","YPFB","36 meses","gerente","carta de renuncia","4");
INSERT INTO laboral VALUES("5","BATEBOL","10 meses","jefe de departamento","carta de renuncia","5");
INSERT INTO laboral VALUES("6","UNAGRO","15 meses","supervisor","carta de renuncia","6");
INSERT INTO laboral VALUES("7","ALCALDIA SANTA CRUZ","11 meses","administrativo","despido","7");
INSERT INTO laboral VALUES("8","CANAL 13","18 meses","presentador","despido","8");
INSERT INTO laboral VALUES("9","SOFIA","20 meses","empleado regular","carta de renuncia","9");
INSERT INTO laboral VALUES("10","COCACOLA","9 meses","supervisor","despido","1");
INSERT INTO laboral VALUES("11","Faboce","12 meses","supervisor","carta de renuncia","14");
INSERT INTO laboral VALUES("15","Batebol","1 aÃ±o","empleado","despido","1");



DROP TABLE IF EXISTS lanza;

CREATE TABLE `lanza` (
  `idConvocatoria` int(11) NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  PRIMARY KEY (`idConvocatoria`,`idDepartamento`),
  KEY `idDepartamento` (`idDepartamento`),
  CONSTRAINT `lanza_ibfk_1` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`idDepartamento`),
  CONSTRAINT `lanza_ibfk_2` FOREIGN KEY (`idConvocatoria`) REFERENCES `convocatoria` (`idConvocatoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO lanza VALUES("1","1");
INSERT INTO lanza VALUES("2","2");
INSERT INTO lanza VALUES("3","3");
INSERT INTO lanza VALUES("4","4");
INSERT INTO lanza VALUES("5","5");



DROP TABLE IF EXISTS lugartrabajo;

CREATE TABLE `lugartrabajo` (
  `idLugarTrabajo` int(11) NOT NULL AUTO_INCREMENT,
  `idConvocatoria` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`idLugarTrabajo`),
  KEY `idConvocatoria` (`idConvocatoria`),
  CONSTRAINT `lugartrabajo_ibfk_1` FOREIGN KEY (`idConvocatoria`) REFERENCES `convocatoria` (`idConvocatoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO lugartrabajo VALUES("1","1","Central Santa Cruz");
INSERT INTO lugartrabajo VALUES("2","2","Villa Primero de Mayo");
INSERT INTO lugartrabajo VALUES("3","3","Plan 3000");
INSERT INTO lugartrabajo VALUES("4","4","Warnes");
INSERT INTO lugartrabajo VALUES("7","5","La guardia");



DROP TABLE IF EXISTS memorandum;

CREATE TABLE `memorandum` (
  `idMemorandum` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `motivo` varchar(100) DEFAULT NULL,
  `idEmpleado` int(11) NOT NULL,
  PRIMARY KEY (`idMemorandum`),
  KEY `idEmpleado` (`idEmpleado`),
  CONSTRAINT `memorandum_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO memorandum VALUES("1","2016-07-22","mala conducta","2");



DROP TABLE IF EXISTS modificacion;

CREATE TABLE `modificacion` (
  `idModificacion` int(11) NOT NULL,
  `idContrato` int(11) NOT NULL,
  PRIMARY KEY (`idModificacion`,`idContrato`),
  KEY `idContrato` (`idContrato`),
  CONSTRAINT `modificacion_ibfk_1` FOREIGN KEY (`idModificacion`) REFERENCES `contrato` (`idContrato`),
  CONSTRAINT `modificacion_ibfk_2` FOREIGN KEY (`idContrato`) REFERENCES `contrato` (`idContrato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO modificacion VALUES("6","1");



DROP TABLE IF EXISTS operacion;

CREATE TABLE `operacion` (
  `idOperacion` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`idOperacion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO operacion VALUES("1","insertar");
INSERT INTO operacion VALUES("2","eliminar");
INSERT INTO operacion VALUES("3","actualizar");



DROP TABLE IF EXISTS periodoprueba;

CREATE TABLE `periodoprueba` (
  `idPeriodoPrueba` int(11) NOT NULL AUTO_INCREMENT,
  `fechaIninio` date NOT NULL,
  `fechaFinal` date NOT NULL,
  `idEntrevista` int(11) NOT NULL,
  `idContrato` int(11) NOT NULL,
  PRIMARY KEY (`idPeriodoPrueba`),
  KEY `idEntrevista` (`idEntrevista`),
  KEY `idContrato` (`idContrato`),
  CONSTRAINT `periodoprueba_ibfk_1` FOREIGN KEY (`idEntrevista`) REFERENCES `entrevista` (`idEntrevista`),
  CONSTRAINT `periodoprueba_ibfk_2` FOREIGN KEY (`idContrato`) REFERENCES `contrato` (`idContrato`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO periodoprueba VALUES("1","2016-06-22","2016-09-22","1","2");
INSERT INTO periodoprueba VALUES("2","2016-06-22","2016-09-22","2","3");
INSERT INTO periodoprueba VALUES("3","2016-06-23","2016-09-23","3","4");
INSERT INTO periodoprueba VALUES("4","2016-06-24","2016-09-24","4","5");



DROP TABLE IF EXISTS permiso;

CREATE TABLE `permiso` (
  `idPermiso` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  PRIMARY KEY (`idPermiso`,`idEmpleado`),
  KEY `idEmpleado` (`idEmpleado`),
  CONSTRAINT `permiso_ibfk_1` FOREIGN KEY (`idPermiso`) REFERENCES `empleado` (`idEmpleado`),
  CONSTRAINT `permiso_ibfk_2` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO permiso VALUES("1","2","2016-07-22","2016-07-25");
INSERT INTO permiso VALUES("1","3","2016-08-15","2016-08-20");
INSERT INTO permiso VALUES("1","4","2016-09-18","2016-06-21");



DROP TABLE IF EXISTS planilla;

CREATE TABLE `planilla` (
  `idPlanilla` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  PRIMARY KEY (`idPlanilla`,`idEmpleado`),
  KEY `idEmpleado` (`idEmpleado`),
  CONSTRAINT `planilla_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO planilla VALUES("1","2016-06-30","1");
INSERT INTO planilla VALUES("2","2016-06-30","2");
INSERT INTO planilla VALUES("3","2016-06-30","3");
INSERT INTO planilla VALUES("4","2016-06-30","4");
INSERT INTO planilla VALUES("5","2016-06-30","5");



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



DROP TABLE IF EXISTS prestamo;

CREATE TABLE `prestamo` (
  `idDescuento` int(11) NOT NULL,
  `interes` float NOT NULL,
  `fecha` date NOT NULL,
  `detalle` varchar(100) NOT NULL,
  PRIMARY KEY (`idDescuento`),
  CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`idDescuento`) REFERENCES `descuento` (`idDescuento`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO prestamo VALUES("4","0.5","2016-06-25","sin observaciones");
INSERT INTO prestamo VALUES("8","0.5","2016-06-25","sin observaciones");
INSERT INTO prestamo VALUES("12","0.5","2016-06-30","sin observaciones");



DROP TABLE IF EXISTS privilegio;

CREATE TABLE `privilegio` (
  `idOperacion` int(11) NOT NULL AUTO_INCREMENT,
  `idGrupo` int(11) NOT NULL,
  PRIMARY KEY (`idOperacion`,`idGrupo`),
  KEY `idGrupo` (`idGrupo`),
  CONSTRAINT `privilegio_ibfk_1` FOREIGN KEY (`idOperacion`) REFERENCES `operacion` (`idOperacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `privilegio_ibfk_2` FOREIGN KEY (`idGrupo`) REFERENCES `grupo` (`idGrupo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO privilegio VALUES("3","1");
INSERT INTO privilegio VALUES("1","2");
INSERT INTO privilegio VALUES("2","2");
INSERT INTO privilegio VALUES("3","2");
INSERT INTO privilegio VALUES("1","3");



DROP TABLE IF EXISTS requisito;

CREATE TABLE `requisito` (
  `idRequisito` int(11) NOT NULL AUTO_INCREMENT,
  `idConvocatoria` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`idRequisito`),
  KEY `idConvocatoria` (`idConvocatoria`),
  CONSTRAINT `requisito_ibfk_1` FOREIGN KEY (`idConvocatoria`) REFERENCES `convocatoria` (`idConvocatoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO requisito VALUES("1","1","Ser Boliviano");
INSERT INTO requisito VALUES("2","2","Ser Mayor de 18 Años");
INSERT INTO requisito VALUES("3","3","Libreta de Servicio Militar(Varones)");
INSERT INTO requisito VALUES("4","4","Certificado de Nacimiento Original Actualizado");
INSERT INTO requisito VALUES("5","5","Fotocopia de la Cedula de Identidad Vigente");
INSERT INTO requisito VALUES("6","1","Ingles nivel medio");



DROP TABLE IF EXISTS retribucionextra;

CREATE TABLE `retribucionextra` (
  `idIngreso` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `idTipor` int(11) NOT NULL,
  PRIMARY KEY (`idIngreso`),
  KEY `idTipor` (`idTipor`),
  CONSTRAINT `retribucionextra_ibfk_1` FOREIGN KEY (`idIngreso`) REFERENCES `ingreso` (`idIngreso`),
  CONSTRAINT `retribucionextra_ibfk_2` FOREIGN KEY (`idTipor`) REFERENCES `tipor` (`idTipor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO retribucionextra VALUES("6","sin observacion","1");
INSERT INTO retribucionextra VALUES("11","sin observacion","4");



DROP TABLE IF EXISTS sancion;

CREATE TABLE `sancion` (
  `idDescuento` int(11) NOT NULL,
  `motivo` varchar(100) NOT NULL,
  PRIMARY KEY (`idDescuento`),
  CONSTRAINT `sancion_ibfk_1` FOREIGN KEY (`idDescuento`) REFERENCES `descuento` (`idDescuento`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO sancion VALUES("1","imcumplimiento de normas");
INSERT INTO sancion VALUES("5","faltas sin permiso");
INSERT INTO sancion VALUES("9","faltas sin permiso");



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



DROP TABLE IF EXISTS solicita;

CREATE TABLE `solicita` (
  `idDepartamento` int(11) NOT NULL,
  `idCapacidadDesarrollo` int(11) NOT NULL,
  PRIMARY KEY (`idDepartamento`,`idCapacidadDesarrollo`),
  KEY `idCapacidadDesarrollo` (`idCapacidadDesarrollo`),
  CONSTRAINT `solicita_ibfk_1` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`idDepartamento`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `solicita_ibfk_2` FOREIGN KEY (`idCapacidadDesarrollo`) REFERENCES `capacidaddesarrollo` (`idCapacidadDesarrollo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO solicita VALUES("1","1");
INSERT INTO solicita VALUES("2","2");
INSERT INTO solicita VALUES("3","3");
INSERT INTO solicita VALUES("4","4");
INSERT INTO solicita VALUES("5","5");



DROP TABLE IF EXISTS suboperacion;

CREATE TABLE `suboperacion` (
  `idSub` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(500) NOT NULL,
  `idOperacion` int(11) NOT NULL,
  PRIMARY KEY (`idSub`),
  KEY `idOperacion` (`idOperacion`),
  CONSTRAINT `suboperacion_ibfk_1` FOREIGN KEY (`idOperacion`) REFERENCES `operacion` (`idOperacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO suboperacion VALUES("1","idAcademico: 1  descripcion: Ing.  idCurriculum: 1","3");
INSERT INTO suboperacion VALUES("2","idAcademico: 1  descripcion: Ing. Informatico  idCurriculum: 1","3");
INSERT INTO suboperacion VALUES("3","idAcademico: 1  descripcion: Ing. Informa  idCurriculum: 1","3");
INSERT INTO suboperacion VALUES("4","idAcademico: 1  descripcion: Ing. Informatico  idCurriculum: 1","3");
INSERT INTO suboperacion VALUES("5","Empleado: 2 Fecha: 2016-10-28 Hora: 09:30 Tipo:S","1");
INSERT INTO suboperacion VALUES("6","Empleado: 2 Fecha: 2016-10-27 Hora: 10:00 Tipo:S","1");
INSERT INTO suboperacion VALUES("7","Empleado: 2 Fecha: 2016-10-27 Hora: 10:00 Tipo:S","1");
INSERT INTO suboperacion VALUES("8","Empleado: 2 Fecha: 2016-10-27 Hora: 10:00 Tipo:E","1");
INSERT INTO suboperacion VALUES("9","Descripcion: tito Instructor: el mejor","1");
INSERT INTO suboperacion VALUES("10","Convocatoria: 1 Descripcion: Ingles nivel medio","3");
INSERT INTO suboperacion VALUES("11","idConv: 1 idCargo: 1 Convocatoria: 1 NCargo: Contador Cantidad:1","3");
INSERT INTO suboperacion VALUES("12","idAcademico: 1  descripcion: Ing. Informatic  idCurriculum: 1","3");
INSERT INTO suboperacion VALUES("13","idAcademico: 1  descripcion: Ing. Informatico  idCurriculum: 1","3");



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



DROP TABLE IF EXISTS tipor;

CREATE TABLE `tipor` (
  `idTipor` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`idTipor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tipor VALUES("1","feriado");
INSERT INTO tipor VALUES("2","fiestas De fin Año");
INSERT INTO tipor VALUES("3","retribucion nocturna");
INSERT INTO tipor VALUES("4","fines de semana");



DROP TABLE IF EXISTS turno;

CREATE TABLE `turno` (
  `idTurno` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) NOT NULL,
  `idHorario` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  PRIMARY KEY (`idTurno`),
  KEY `idHorario` (`idHorario`),
  KEY `idEmpleado` (`idEmpleado`),
  CONSTRAINT `turno_ibfk_1` FOREIGN KEY (`idHorario`) REFERENCES `horario` (`idHorario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `turno_ibfk_2` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO turno VALUES("1","1","1","1");
INSERT INTO turno VALUES("2","1","2","2");
INSERT INTO turno VALUES("3","1","3","3");
INSERT INTO turno VALUES("4","0","1","4");
INSERT INTO turno VALUES("5","1","2","5");



DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `nombreUsuario` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `idGrupo` int(11) NOT NULL,
  PRIMARY KEY (`nombreUsuario`),
  KEY `idEmpleado` (`idEmpleado`),
  KEY `idGrupo` (`idGrupo`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`),
  CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idGrupo`) REFERENCES `grupo` (`idGrupo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO usuario VALUES("hernesto_1","123459","andres_bustamante@hotmail.com","0","4","1");
INSERT INTO usuario VALUES("juanita_1","123457","dreik_1721@hotmail.com","1","2","1");
INSERT INTO usuario VALUES("matilte_1","123456","matilde_123@hotmail.com","1","1","2");
INSERT INTO usuario VALUES("olivia_1","123456","olivia123@hotmail.com","1","5","1");
INSERT INTO usuario VALUES("rene_1","123458","rene_12@hotmail.com","1","3","3");



DROP TABLE IF EXISTS vacacion;

CREATE TABLE `vacacion` (
  `idVacacion` int(11) NOT NULL AUTO_INCREMENT,
  `fechaInicio` date NOT NULL,
  `fechaFinal` date NOT NULL,
  `idContrato` int(11) NOT NULL,
  PRIMARY KEY (`idVacacion`),
  KEY `idContrato` (`idContrato`),
  CONSTRAINT `vacacion_ibfk_1` FOREIGN KEY (`idContrato`) REFERENCES `contrato` (`idContrato`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO vacacion VALUES("1","2017-08-15","2017-08-30","1");
INSERT INTO vacacion VALUES("2","2017-08-15","2017-08-30","2");
INSERT INTO vacacion VALUES("3","2017-08-15","2017-08-30","3");
INSERT INTO vacacion VALUES("4","2017-08-15","2017-08-30","4");



DROP TABLE IF EXISTS vacante;

CREATE TABLE `vacante` (
  `idCargo` int(11) NOT NULL AUTO_INCREMENT,
  `idConvocatoria` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`idCargo`,`idConvocatoria`),
  KEY `idConvocatoria` (`idConvocatoria`),
  CONSTRAINT `vacante_ibfk_1` FOREIGN KEY (`idConvocatoria`) REFERENCES `convocatoria` (`idConvocatoria`),
  CONSTRAINT `vacante_ibfk_2` FOREIGN KEY (`idCargo`) REFERENCES `cargo` (`idCargo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO vacante VALUES("1","1","1");
INSERT INTO vacante VALUES("3","3","2");
INSERT INTO vacante VALUES("5","5","2");
INSERT INTO vacante VALUES("6","4","3");
INSERT INTO vacante VALUES("7","2","1");
INSERT INTO vacante VALUES("8","1","1");



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



