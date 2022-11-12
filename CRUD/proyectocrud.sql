-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-11-2022 a las 07:32:41
-- Versión del servidor: 8.0.30
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectocrud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `cod_contacto` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mensaje` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`cod_contacto`, `nombre`, `email`, `mensaje`) VALUES
('3158293897', 'santiago', 'santiago@gmail.com', 'holaaaa'),
('3163158387', 'Juan', 'juanrodri140417@gmail.com', 'holaaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dulces`
--

CREATE TABLE `dulces` (
  `cod_dulce` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `descripcion` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `precio` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dulces`
--

INSERT INTO `dulces` (`cod_dulce`, `nombre`, `imagen`, `descripcion`, `precio`) VALUES
(100, 'Dulces para pasabocas', 'https://us.123rf.com/450wm/279photo/279photo1704/279photo170402550/75871727-dulces-de-colores-en-el-patr%C3%B3n-de-fondo-de-textura-abstracta.jpg', 'Deliciosos dulces para consumir como pasabocas', '10.000'),
(3842, 'Dulces para fiestas', 'img/dulces2.png', 'Deliciosos dulces para fiestas', '30.000'),
(6348, 'Dulces de chocolate', 'https://previews.123rf.com/images/ratmaner/ratmaner1508/ratmaner150800075/43430472-mont%C3%B3n-de-caramelos-y-galletas-en-la-arpillera-de-yute-demasiados-dulces-el-concepto-de-alimentos-po.jpg', 'Deliciosos dulces de chocolate', '10.000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galletas`
--

CREATE TABLE `galletas` (
  `cod_galleta` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `descripcion` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `precio` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galletas`
--

INSERT INTO `galletas` (`cod_galleta`, `nombre`, `imagen`, `descripcion`, `precio`) VALUES
(10, 'Galletas de chocolate', 'https://i.ytimg.com/vi/hZ9wrNqFULE/maxresdefault.jpg', 'Deliciosas galletas de chocolate', '7.000'),
(2146, 'Galletas de mantequilla', 'https://www.hogarmania.com/archivos/201703/receta-galletas-caseras-1280x720x80xX.jpg', 'Deliciosas galletas de mantequilla', '10.000'),
(2153, 'Galletas con dulces', 'https://i.ytimg.com/vi/K_r2O7f96Z8/maxresdefault.jpg', 'Deliciosas galletas con dulces', '7.000'),
(3287, 'Galletas con diseño navidello', 'https://www.bettycrocker.lat/wp-content/uploads/2020/12/BClatam-recipe-galletas-de-azucar-navidenas.png', 'Deliciosas galletas con diseño de navidad', '15.000'),
(1238, 'Galletas de azucar', 'https://canalcocina.es/medias/images/0001053039LosPostresEspecialesDeAnnaOlsonS01E006DecoratedCutOutCookiesHR0101.jpg', 'Deliciosas galletas de azucar con diseño personalizado', '10.000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postres`
--

CREATE TABLE `postres` (
  `cod_postre` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `descripcion` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `precio` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `postres`
--

INSERT INTO `postres` (`cod_postre`, `nombre`, `imagen`, `descripcion`, `precio`) VALUES
(100, 'Postres de tres sabores', 'https://i.ytimg.com/vi/2_FUW8y2J1M/maxresdefault.jpg', 'Deliciosos postres de chocolate, vainilla y fresas.', '50.000'),
(2145, 'Gelatina de frutos rojos', 'https://www.elespectador.com/resizer/_kBwlK__GTUDxhFrYLlqRz2no78=/920x613/filters:format(jpeg)/cloudfront-us-east-1.images.arcpublishing.com/elespectador/TJERDCQCIFAQXJZL2AFMX23QR4.jpg', 'Deliciosa gelatina de frutos rojos', '10.000'),
(7845, 'Postre de maracuyá', 'https://www.elespectador.com/resizer/tMBDb6Xo_dnNmAAJv8S96LIwhHg=/920x613/filters:format(jpeg)/cloudfront-us-east-1.images.arcpublishing.com/elespectador/JPTLRDZEJBCXRJBUXDJLMSPY2Q.jpg', 'Delicioso postre de maracuyá', '10.000'),
(3654, 'Cupcake de fresa con diseño de flores', 'img/cup.png', 'Delicioso cupcake, cubierto con crema de fresa y flores de vainilla.', '70.000'),
(5214, 'Cupcakes para fiestas', 'img/cup2.png', 'Deliciosos cupcakes de fresa para fiesta.', '50.000'),
(6578, 'Brownie de chocolate', 'https://www.hogarmania.com/archivos/201903/postres-chocolate-848x477x80xX.jpg', 'Delicioso brownie de chocolate', '15.000'),
(3249, 'Gelatina de leche', 'https://aprende.com/wp-content/uploads/2020/10/postre-facil-gelatina-de-mosaico.jpg', 'Deliciosa gelatina de leche con trozos de multiples sabores', '15.000'),
(2497, 'Flan napolitano', 'https://saboryestilo.com.mx/wp-content/uploads/2021/08/Receta-flan-napolitano.jpg', 'Delicioso flan napolitano', '15.000'),
(2187, 'Postre de tres leches', 'https://t1.rg.ltmcdn.com/es/posts/0/3/4/postre_de_tres_leches_frio_34430_600.jpg', 'Delicioso postre de tres leches frio.', '15.000'),
(3946, 'Postre de maní', 'https://aprende.com/wp-content/uploads/2020/10/postres-mas-ricos-del-mundo-italia-turron-940x580.jpg', 'Delicioso postre de maní', '10.000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tortas`
--

CREATE TABLE `tortas` (
  `cod_torta` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `imagen` varchar(500) NOT NULL,
  `descripcion` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `precio` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tortas`
--

INSERT INTO `tortas` (`cod_torta`, `nombre`, `imagen`, `descripcion`, `precio`) VALUES
(1111, 'Pastel de chocolate y fresas', 'img/chocolate.png', 'Delicioso pastel de chocolate, cubierto con crema de vainilla y fresas.', '100.000'),
(2152, 'Pastel de cumpleaños con confeti', 'https://d320djwtwnl5uo.cloudfront.net/recetas/cover_fsr8al91ct_confeti.jpg', 'Delicioso pastel de cumpleaños, cubierto con crema de uva.', '80.000'),
(4789, 'Pastel de vainilla con diseño de la realeza', 'https://i.pinimg.com/originals/8f/fa/40/8ffa40ff15ebcb1f619bd67d03f2adf4.jpg', 'Delicioso pastel de cumpleaños con un lindo diseño, cubierto con crema de vainilla.', '150.000'),
(2358, 'Pastel de bodas', 'img/bodas.png', 'Delicioso pastel de bodas, cubierto con crema de vainilla.', '120.000'),
(7854, 'Pastel de cumpleaños', 'img/cumpleanos.png', 'Torta de cumpleaños con relleno y cubierta de ganache (crema de leche, cobertura semiamarga)', '60.000'),
(3645, 'Torta de arequipe', 'img/arequipe.png', 'Delicioso pastel de arequipe.', '40.000'),
(9547, 'Pastel con diseño de pescador', 'https://m.media-amazon.com/images/I/81RfUgkkRGS.jpg', 'Delicioso pastel personalizado con diseño de pescador.', '150.000'),
(2476, 'Pastel de flores', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQE-7A6-FaNT8OP3vbIjo8pjRV-rwOroEmqKYDtFnkCHo3BogXTc4bUVITYkcgGO89uyWc&usqp=CAU', 'Delicioso pastel personalizado con diseño de flores.', '150.000'),
(3257, 'Pastel de corazon', 'https://static.americadigital.com/wp-content/uploads/2021/01/america_digital_pastel_de_corazon_dulces_2020-2-1.jpg', 'Delicioso pastel con diseño de corazon y fresas.', '250.000'),
(9424, 'Pastel de Patricio', 'https://lospastelesdelaura.com/wp-content/uploads/2021/11/Pastel-Patricio.jpeg', 'Delicioso pastel de cumpleaños, cubierto con crema de vainilla con diseño personalizado.', '210.000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
