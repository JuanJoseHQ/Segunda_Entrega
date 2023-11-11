-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2023 a las 20:51:13
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `spirit_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(500) NOT NULL,
  `Descripcion` text NOT NULL,
  `Precio` float NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id`, `Nombre`, `Descripcion`, `Precio`, `Cantidad`) VALUES
(1, 'Módulo de enchufe GSM para el control telefónico de calefacción con SMS.', 'Controlador para el encendido/apagado en remoto de la caldera mediante mensajes SMS. Disponible una App  ', 345000, 10),
(3, 'Bombilla ZigBee 3.0 tipo E27 - RGBW + Multiblanco ajustable - 2200K a 6500K INNR', 'Bombilla inteligente para el control de la iluminación inteligente con la voz o a distancia desde tu smartphone u ordenador.', 345000, 10),
(4, 'Botón de acción negro de Fibaro HomeKit The Button Black', 'El botón de Fibaro le permite controlar los dispositivos de la red Z-Wave y realizar varias escenas que transcurren en el sistema de domótica Z-Wave de Fibaro. El botón de Fibaro está disponible en varios colores.', 200000, 10),
(5, '\r\nAmazon Echo Show 8 2nd Gen con asistente virtual Alexa, pantalla integrada de 8\" glacier white 110V/240V', '...', 470400, 5),
(6, 'Interruptor Wifi Inteligente Sin Neutro 1 Boton Smart Tactil', 'Switch Interruptor Táctil 1 Vías WiFi. Funciona sin Línea Neutra o con ella. Utiliza la aplicación de Smart Life o Tuya Smart compatible con Google Home (Android) y Alexa (IOS).\r\nControle las luces desde cualquier lugar. No necesitara estar conectado a la misma red WiFi para poder controlar sus luces. Después de vincular un dispositivo inteligente, podrás controlar la iluminación desde cualquier lugar con una conexión a Internet, incluso fuera del país. Apaga los LEDs en la noche para evitar molestias o ahorrar energía.', 64990, 5),
(7, 'Sonoff Dw2 Rf - Sensor De Apertura Ventana Y Puerta 433mhz', 'Sensor de detección de apertura de puerta o ventana marca Sonoff. Si el sensor detecta que se abrió la puerta o la ventana avisa inmediatamente a su celular mientras este conectado a una red wifi usando un Sonoff Bridge.', 43500, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL,
  `Rol` int(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `Rol`, `Email`, `Contrasena`) VALUES
(1, 1, 'juanjose2815@gmail.com', '1234'),
(3, 2, 'juanjose1528@gmail.com', '123'),
(5, 2, 'juanjose15@gmail.com', '123'),
(16, 2, 'juanjose27@gmail.com', '123'),
(20, 2, 'juanjose10@gmail.com', '123 ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
