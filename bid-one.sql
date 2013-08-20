-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 20. Aug 2013 um 03:55
-- Server Version: 5.5.27
-- PHP-Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `bid-one`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `artikelname` varchar(20) NOT NULL,
  `artikelbeschreibung` longtext CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `kategorie` varchar(20) NOT NULL,
  `preis` int(10) NOT NULL,
  `hoechstbietender` varchar(20) NOT NULL,
  `gebotsanzahl` int(20) NOT NULL,
  `aktiv` tinyint(1) NOT NULL,
  `startzeit` datetime NOT NULL,
  `endzeit` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `artikel`
--

INSERT INTO `artikel` (`id`, `artikelname`, `artikelbeschreibung`, `kategorie`, `preis`, `hoechstbietender`, `gebotsanzahl`, `aktiv`, `startzeit`, `endzeit`) VALUES
(2, 'Playstation 3', '     PlayStation 3 SuperSlim - kleiner und leichter!\n\n    PlayStation 3, das ultimative System für Gaming und Home-Entertainment mit erstklassigem Preis-Leistungs-Verhältnis, ist jetzt in einem neuen aufsehenerregenden Design erhältlich.\n\n     \n\n    ENTERTAINMENT-POWER IM FORMSCHÖNEN DESIGN\n\n    PlayStation®3 bietet ultimatives Gaming und Home-Entertainment für die ganze Familie sowie tolles Preis-Leistungs-Verhältnis – jetzt in einem noch kleineren und schlankeren Design.\n\n     \n\n    Mit der neuen Schiebe-Disk-Abdeckung und dem elegant, geschwungenen Gehäuse ist die neue PS3™ nicht nur ein Blickfang in jedem Wohnzimmer, sondern eröffnet auch eine Welt grenzenloser Unterhaltung. Das 12GB-Modell bietet dabei den optimalen Einstieg zum kleinen Preis und ausreichend Speicherplatz für atemberaubende Spiele, Videos, Musik und Downloads aus dem PlayStation®Network.\n\n     \n\n    Das elegante, formschöne Design sowie der unschlagbare Preispunkt machen aus der neuen PS3™ ein Muss für jeden gemütlichen Entertainment-Abend im Rahmen der Familie.\n\n     \n\n    Spiele\n\n    Erleben Sie auf PlayStation®3 die neueste Videospielgeneration - in High-Definition und 3D.\n\n     \n\n    Plattformübergreifendes Spielen\n\n    Nahtloser Spielspaß zwischen PS3™ und PS Vita dank zahlreicher Cross-Plattform-Funktionen wie Cross-Play, Cross-Save, Cross-Controller, Cross-Goods, Cross-Buy und Remote Play.\n\n     \n\n    Filme\n\n    Schauen Sie DVDs und Blu-ray Discs™ mit kristallklarem Sound und gestochen scharfen Bildern.\n\n     \n\n    Musik\n\n    Hören Sie CDs und speichern Sie die gesamte Musiksammlung an einem zentralen Ort. Sehen Sie sich mit VidZone kostenlos Tausende von Musikvideos auf dem TV an.\n\n     \n\n    Fotos\n\n    Speichern, verwalten und betrachten Sie Ihre gesamte Fotosammlung.\n\n     \n\n    PlayStation®Network\n\n    Spielen Sie kostenlos online gegen Freunde aus der ganzen Welt oder durchstöbern Sie die besten Angebote an Spielen und Services im PlayStation®Store.\n', 'Spielekonsole', 1, '', 0, 0, '2013-08-20 20:00:00', '2013-08-29 20:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `vorname` varchar(20) NOT NULL,
  `nachname` varchar(20) NOT NULL,
  `strasse` varchar(20) NOT NULL,
  `plz` int(20) NOT NULL,
  `ort` varchar(20) NOT NULL,
  `rolle` varchar(20) NOT NULL,
  `bids` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `vorname`, `nachname`, `strasse`, `plz`, `ort`, `rolle`, `bids`) VALUES
(1, 'sharky', 'r2d2r2', 'maximilian', 'schmidt', 'marktstraße 69', 83646, 'bad tölz', 'admin', 100),
(7, 'test', 'test', 'test', 'test', 'test', 83434, 'test', 'user', 50);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
