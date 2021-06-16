BEGIN 27/10/2020
DROP TABLE IF EXISTS `usu_usuarios`;
CREATE TABLE IF NOT EXISTS `usu_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `documento` int(8) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usu_usuarios`
--

INSERT INTO `usu_usuarios` (`id_usuario`, `nombre`, `apellido`, `mail`, `telefono`, `documento`) VALUES
(1, 'Rogelio', 'Sanchez', 'roger.hsjrc@gmail.com', '2645425741', 38592656);

END;
BEGIN 17/11/2020
--
-- Estructura de tabla para la tabla `usu_roles`
--

DROP TABLE IF EXISTS `usu_roles`;
CREATE TABLE IF NOT EXISTS `usu_roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `habilitado` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 - Habilitado / 0 - Deshabilitado',
  PRIMARY KEY (`id_rol`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usu_roles`
--

INSERT INTO `usu_roles` (`id_rol`, `nombre`, `descripcion`, `habilitado`) VALUES
(1, 'administrador', 'Super Usuario del Sistema', 1),
(2, 'cliente', 'Clientes del sistema', 1),
(3, 'invitado', 'Invitado, potencial cliente', 1);

ALTER TABLE `usu_usuarios` ADD `id_rol` INT NOT NULL AFTER `documento`;
ALTER TABLE usu_usuarios ADD FOREIGN KEY (id_rol) REFERENCES usu_roles(id_rol)
END;