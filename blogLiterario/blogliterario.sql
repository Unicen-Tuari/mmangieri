-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2018 a las 05:40:21
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `blogliterario`
--
CREATE DATABASE IF NOT EXISTS `blogliterario` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blogliterario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

DROP TABLE IF EXISTS `autor`;
CREATE TABLE IF NOT EXISTS `autor` (
  `id_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `biografia` text NOT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor`, `nombre`, `biografia`) VALUES
(14, 'Rick Riordan', 'Escritor americano, Rick Riordan es un autor de fantasía, misterio y literatura juvenil, conocido principalmente por su serie de libros acerca de Percy Jackson y los Olímpicos.\r\n\r\nRiordan estudió en la Universidad de Texas y pasó varios años trabajando como profesor de Inglés y Estudios Sociales en San Francisco, donde comenzó a desarrollar las historias de Percy Jackson. Riordan ha recibido diversos galardones para sus relatos de misterio, como un Premio Edgar, y ha publicado en revistas como Ellery Quin.\r\n\r\nDesde 2006 ha publicado varios libros sobre Percy Jackson y los Olímpicos, serie de fantasía juvenil que ha logrado varias adaptaciones al cine, creando un universo que ha explorado con otras series sobre la mitología griega. Además, Riordan también ha escrito sobre otras tradiciones, como la egipcia o la nórdica.\r\n\r\nSu obra ha sido traducida a más de 35 idiomas y ha vendido alrededor de 30 millones de ejemplares en todo el mundo.'),
(17, 'Stephen Chbosky', 'Stephen Chbosky, novelista, guionista y director americano nacido en 1970 en Pittsburgh, Pennsylvania. Conocido por su gran éxito editorial, Las ventajas de ser un marginado (The Perks of Being a Wallflower).'),
(18, 'Benito Taibo', 'Un asiduo promotor de la lectura, Benito Taibo nació en la ciudad de México en 1960. Es Periodista, escritor y poeta. Divertido, apasionado, irreverente, entregado y obsesivo, es como lo definen en la biografía publicada por la editorial '),
(19, 'William Shakespeare', 'William Shakespeare''? fue un dramaturgo, poeta y actor inglés. Conocido en ocasiones como el Bardo de Avon, Shakespeare es considerado el escritor más importante en lengua inglesa y uno de los más célebres de la literatura universal.?'),
(20, 'Dan Brown', 'Daniel James «Dan» Brown es un escritor estadounidense conocido por la novela El código Da Vinci y otros títulos protagonizados por el personaje Robert Langdon.'),
(21, 'Ernest Cline', 'Autor y guionista americano, Ernest Cline desarrolló una notable carrera como poeta, siendo un participante habitual en competiciones de poesía slam, donde logró ser muy conocido por su pieza Dance Monkeys Dance, que el propio autor convirtió en un falso vídeo educativo que se convirtió en viral a través de YouTube.\r\n\r\nAdemás, su interés por el mundo del cine dio como resultado su salto al mundo del guion con la película Fanboys. Actualmente se encuentra inmerso en el desarrollo de varios trabajos para la gran pantalla relacionados con sus novelas.\r\n\r\nEn 2010 Cline publicó su obra más conocida, Ready Player One, una novela de ciencia ficción relacionada con el mundo de los videojuegos y la cultura popular de los años 80 y 90 que resultó todo un éxito de ventas. En 2015 vio la luz su segundo título, Armada. La adaptación al cine de Ready Player One, que se espera para 2018, será dirigida por Steven Spielberg.'),
(22, 'F. Scott Fitzgerald', 'Francis Scott Key Fitzgerald fue un novelista y escritor estadounidense de historias cortas, ampliamente conocido como uno de los mejores autores estadounidenses del siglo XX, cuyos trabajos son paradigmáticos de la era del jazz.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

DROP TABLE IF EXISTS `libro`;
CREATE TABLE IF NOT EXISTS `libro` (
  `id_libro` int(11) NOT NULL AUTO_INCREMENT,
  `id_autor` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `sinopsis` text NOT NULL,
  PRIMARY KEY (`id_libro`),
  KEY `libro_ibfk_2` (`id_autor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `id_autor`, `titulo`, `genero`, `sinopsis`) VALUES
(29, 14, 'The Son of Neptune', 'Fantasia', 'El hijo de Neptuno comienza con el amnésico Percy Jackson siendo perseguido por las dos hermanas Gorgonas, que quieren matarlo para vengar la muerte de su hermana Medusa. ... Reclama a Frank como su hijo y envía a Percy, Hazel y Frank en una misión para liberar a Tánatos, el dios de la Muerte, que está preso en Alaska.'),
(30, 19, 'Romeo y Julieta', 'Tragedia', 'Romeo y Julieta es la tragedia más conocida de la obra de William Shakespeare. Cuenta la historia de dos jóvenes enamorados que, pese a la rivalidad entre sus familias, deciden casarse a escondidas y vivir juntos. No obstante, una serie de fatalidades provocan que la pareja escoja el suicidio como única alternativa antes de vivir separados el resto de sus vidas. Gracias al resumen de Romeo y Julieta que encontrarás más abajo podrás entender mejor la trama de una de las obras más populares del autor inglés, junto a Macbeth y Hamlet.\r\n\r\nLa obra teatral Romeo y Julieta se ha representado en numerosos escenarios, musicales y óperas de todo el mundo y la excelente técnica dramática de Shakespeare ha sido elogiada durante siglos. Consulta el resumen del libro que te facilitamos para conocer más su trama.'),
(31, 17, 'The Perks of Being a Wallflower', 'Drama', 'Charlie es un joven socialmente torpe y siempre está viendo la vida desde la barrera, hasta que dos estudiantes carismáticos se convierten en sus mentores. Sam y su hermanastro Patrick ayudan a Charlie a descubrir las alegrías de la amistad, el primer amor, la música y mucho más, mientras que un maestro provoca que él sueñe con ser un escritor. Sin embargo, mientras sus nuevos amigos se preparan para ir a la universidad, su tristeza interior amenaza con destruir su confianza.'),
(32, 18, 'Persona Normal', 'Juvenil', 'Tenía un par de padres divertidos y jóvenes, llenos de sueños y de planes. Pero a mis doce años, cinco meses, tres días y dos horas y cuarto, aproximadamente, me quedé sin ellos Desde que el tío Paco se hizo cargo de él, Sebastián ha vivido aventuras increíbles: tuvo un encuentro inesperado con un enorme felino, conoció a uno de los últimos vampiros que viven en el df; frente a su casa vio a un mítico personaje saltar de la góndola en la que viajaba, para rescatar a una joven de una inundación; consiguió un mapa estelar para un pobre extraterrestre perdido en la Tierra, sobrevivió el embate de un enorme monstruo marino, peleó al lado de los sioux para defender su territorio de los colonizadores? ¿Qué pasa con Sebastián? ¿Acaso no es una «persona normal»'),
(33, 20, 'Angels & Demons', 'Ficción', 'Robert Langdon es convocado a un centro de investigación suizo para analizar un misterioso símbolo marcado a fuego en el pecho de un físico asesinado. El experto en simbología descubre el resurgimiento de una antigua hermandad secreta: los illuminati, que han emergido de las sombras para llevar a cabo la fase final de su legendaria venganza contra su enemigo más odiado... la Iglesia católica. Los peores temores de Langdon se confirman cuando los illuminati anuncian que han escondido una bomba en el corazón de la Ciudad del Vaticano. Con la cuenta atrás en marcha, Langdon viaja a Roma para unir fuerzas con Vittoria Vetra, una científica bella y misteriosa. Los dos se embarcarán en una carrera contrarreloj en una búsqueda desesperada por los rincones menos conocidos del Vaticano. El arma más poderosa creada por el hombre, una organización secreta sedienta de venganza... y apenas unas horas para evitar el desastre. La eterna pugna entre ciencia y religión se ha convertido en una guerra muy real.'),
(34, 21, 'Ready Player One', 'Ciencia Ficción', 'Estamos en el an?o 2044 y, como el resto de la humanidad, Wade Watts prefiere mil veces el videojuego de OASIS al cada vez ma?s sombri?o mundo real. Se asegura que esconde las diabo?licas piezas de un rompecabezas cuya resolucio?n conduce a una fortuna incalculable. Las claves del enigma esta?n basadas en la cultura de finales del siglo XX y, durante an?os, millones de humanos han intentado dar con ellas, sin e?xito. De repente, Wade logra resolver el primer rompecabezas del premio, y, a partir de ese momento, debe competir contra miles de jugadores para conseguir el trofeo. La u?nica forma de sobrevivir es ganar; pero para hacerlo tendra? que abandonar su existencia virtual y enfrentarse a la vida y al amor en el mundo real, del que siempre ha intentado escapar.'),
(35, 21, 'Armada', 'Ciencia Ficción', 'Armada ha sido uno de los títulos más esperados en 2015 en Estados Unidos (presente en las listas de más vendidos del New York Times y Amazon), gracias al inesperado éxito de Ready Player One. Sus legiones de fans llevan más de cuatro años esperando la publicación de su nueva novela.\r\n\r\nZack Lightman se ha pasado la vida soñando. Soñando con que el mundo real se pareciera un poco más al sinfín de libros, películas y videojuegos de ciencia ficción que lo han acompañado desde siempre. Soñando con el día en que un acontecimiento capaz de cambiar el mundo hiciera añicos la monotonía de su aburrida existencia y lo embarcara en una gran aventura.\r\n\r\nPero un poco de escapismo no viene mal de vez en cuando, ¿verdad? Después de todo, Zack no deja de repetirse que sabe dónde está el límite entre lo real y lo imaginario. Y entonces ve un platillo volante. Es igual a los del videojuego que lo apasiona, Armada, en el que los jugadores tienen que proteger la Tierra de unos invasores extraterrestres.'),
(36, 19, 'Hamlet', 'Tragedia', 'Hamlet, la obra más conocida de Shakespeare, es en realidad una pieza llena de lagunas e indefiniciones. Una obra enigmática y misteriosa, en la que cada personaje es un artista de la simulación. El propio Hamlet es un ser en continua transformación. En él caben la ceremoniosidad, la cortesía y la reflexión, junto a la pasión, la burla, el enigma o la posibilidad de la locura. En el castillo de Elsenor, en un ambiente que emana corrupción y desconfianza, claustrofóbico y hostil, se alternan escenas solemnes y reveses irónicos, al tiempo que se agita una corte de personajes cuyo sentido último será llevar a Hamlet a vencer su tensión interna y cumplir la venganza por la muerte de su padre.'),
(37, 22, 'The Great Gatsby', 'Novela', 'Gatsby desea que Nick organice una reunión entre él y Daisy. Nick invita a Daisy a tomar el té en su casa, sin decirle que Gatsby también estará allí. ... En un almuerzo en la casa de los Buchanan, Daisy habla a Gatsby con tal intimidad disimulada que Tom se da cuenta de que está enamorada de Gatsby.'),
(38, 14, 'El Ladron Del Rayo', 'Aventura', '¿Qué pasaría si un día descubrieras que, en realidad, eres hijo de un dios griego que debe cumplir una misión secreta? Pues eso es lo que le sucede a Percy Jackson, que a partir de ese momento se dispone a vivir los acontecimientos más emocionantes de su vida.\r\n\r\nExpulsado de seis colegios, Percy padece dislexia y dificultades para concentrarse, o al menos ésa es la versión oficial. Objeto de burlas por inventarse historias fantásticas, ni siquiera él mismo acaba de creérselas hasta el día que los dioses del Olimpo le revelan la verdad: Percy es nada menos que un semidiós, es decir, el hijo de un dios y una mortal. Y como tal ha de descubrir quién ha robado el rayo de Zeus y así evitar que estalle una guerra entre los dioses. Para cumplir la misión contará con la ayuda de sus amigos Grover, un joven sátiro, y Annabeth, hija de Atenea.\r\n\r\nEl ladrón del rayo da comienzo a la apasionante serie PERCY JACKSON Y LOS DIOSES DEL OLIMPO, un mundo secreto que los antiguos dioses griegos han recreado a nuestro alrededor en pleno siglo XXI.'),
(39, 14, 'La Sangre Del Olimpo', 'Aventura', 'Los tripulantes del Argo II han salido victoriosos de sus misiones, pero están lejos de derrotar a Gea, la madre Tierra. Ella ha conseguido alzar a todos sus gigantes y planea sacrificar a dos semidioses en la festividad de Spes: necesita su sangre, la sangre del Olimpo, para despertar. Por otro lado, la legión romana del Campamento Júpiter, liderada por Octavio, está cada día más cerca del Campamento Mestizo. La Atenea Partenos deberá dirigirse al oeste para impedir la guerra entre los campamentos, mientras el Argos II navega hacia Atenas... ¿Cómo podrán los jóvenes semidioses derrotar a los gigantes de Gea? Ya han sacrificado demasiado, pero si Gea despierta... será el final.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(25) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `administrador` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `pass`, `nombre`, `apellido`, `administrador`) VALUES
(1, 'admin@gmail.com', '$2y$10$uOagt8lqpuWJeGSvu0T3IepVgnrbVRLcwrjbiI6Wupvv.sgWbpXAa', 'Admin', '.', 1),
(14, 'hola@gmail.com', '$2y$10$hY95LrByQvyjIvN.1S9V.eh7TQvhD9/ozoj2YXsG3Y/nMKJ.0QMKK', '1', '1', 0),
(15, 'usuario@gmail.com', '$2y$10$gfE4NRaXFhoC6OiUfo3N/uTboeSoSl1m/OUuSJaqjqlPM374b40ny', 'usuario', '1234usuario', 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_2` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
