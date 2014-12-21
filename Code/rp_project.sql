-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 21 Décembre 2014 à 07:54
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `rp_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_artworks`
--

CREATE TABLE IF NOT EXISTS `rp_p_artworks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_forums_categories`
--

CREATE TABLE IF NOT EXISTS `rp_p_forums_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `half_category` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_forums_messages`
--

CREATE TABLE IF NOT EXISTS `rp_p_forums_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_forums_topics`
--

CREATE TABLE IF NOT EXISTS `rp_p_forums_topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_games`
--

CREATE TABLE IF NOT EXISTS `rp_p_games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `world` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_grades`
--

CREATE TABLE IF NOT EXISTS `rp_p_grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` text NOT NULL,
  `permissions` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_licences`
--

CREATE TABLE IF NOT EXISTS `rp_p_licences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `short_desc` text NOT NULL,
  `long_desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_news`
--

CREATE TABLE IF NOT EXISTS `rp_p_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) NOT NULL,
  `date` date NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_news_comments`
--

CREATE TABLE IF NOT EXISTS `rp_p_news_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) NOT NULL,
  `date` date NOT NULL,
  `news` int(11) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_site_settings`
--

CREATE TABLE IF NOT EXISTS `rp_p_site_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setting` text NOT NULL,
  `value` text NOT NULL,
  `changed` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_stories`
--

CREATE TABLE IF NOT EXISTS `rp_p_stories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `world` int(11) NOT NULL,
  `name` text NOT NULL,
  `author` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `views` int(11) NOT NULL,
  `license` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `avg_grade` double NOT NULL,
  `story_type` int(11) NOT NULL,
  `summary` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_stories_categories`
--

CREATE TABLE IF NOT EXISTS `rp_p_stories_categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_stories_chapters`
--

CREATE TABLE IF NOT EXISTS `rp_p_stories_chapters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `story` int(11) NOT NULL,
  `name` text NOT NULL,
  `summary` text NOT NULL,
  `author` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_stories_comments_messages`
--

CREATE TABLE IF NOT EXISTS `rp_p_stories_comments_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` int(11) NOT NULL,
  `date` date NOT NULL,
  `author` int(11) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_stories_comments_topics`
--

CREATE TABLE IF NOT EXISTS `rp_p_stories_comments_topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `chapter` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_stories_grades`
--

CREATE TABLE IF NOT EXISTS `rp_p_stories_grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `story` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_stories_subparts`
--

CREATE TABLE IF NOT EXISTS `rp_p_stories_subparts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chapter` int(11) NOT NULL,
  `name` text NOT NULL,
  `text` text NOT NULL,
  `author` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_stories_types`
--

CREATE TABLE IF NOT EXISTS `rp_p_stories_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_users`
--

CREATE TABLE IF NOT EXISTS `rp_p_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `nickname` text NOT NULL,
  `password` text NOT NULL,
  `grade` int(11) NOT NULL,
  `biography` text NOT NULL,
  `register_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `rp_p_worlds`
--

CREATE TABLE IF NOT EXISTS `rp_p_worlds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
