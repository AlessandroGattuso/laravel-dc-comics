-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Feb 17, 2023 alle 18:05
-- Versione del server: 10.4.20-MariaDB
-- Versione PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_university`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `comics`
--

CREATE TABLE `comics` (
  `id` int(11) NOT NULL,
  `slug` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `thumb` text NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `series` text NOT NULL,
  `sale_date` date NOT NULL,
  `type` text NOT NULL,
  `artists` text NOT NULL,
  `writers` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `comics`
--

INSERT INTO `comics` (`id`, `slug`, `title`, `description`, `thumb`, `price`, `series`, `sale_date`, `type`, `artists`, `writers`) VALUES
(1, 'action-comics-1000-the-deluxe-edition', 'Action Comics #1000: The Deluxe Edition', 'The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!', 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX', '19.99', 'Action Comics', '2018-10-02', 'comic book', 'José Luis García-López, Clay Mann, Rafael Albuquerque, Patrick Gleason, Dan Jurgens, Joe Shuster, Neal Adams, Curt Swan, John Cassaday, Olivier Coipel, Jim Lee', 'Brad Meltzer, Tom King, Scott Snyder, Geoff Johns, Brian Michael Bendis, Paul Dini, Louise Simonson, Richard Donner, Marv Wolfman, Peter J. Tomasi, Dan Jurgens, Jerry Siegel, Paul Levitz'),
(2, 'american-vampire-1976-1', 'American Vampire 1976 #1', 'America is broken. Trust between the government and the American public has crumbled. Paranoia reigns supreme. It’s 1976, and this is the concluding chapter of the Eisner Award-winning American Vampire! Skinner Sweet has exhausted all efforts to regain his lost immortality. With his powers and purpose gone, he is now determined to go out with a bang. At a seedy motorcycle rally in the desert where he’s closer than ever to his death wish, Pearl Jones and a shocking partner track him down for one last, desperate mission: The force known as the Gray Trader and its minions are tunneling through the bowels of the world to unleash hell on Earth—just in time for America’s bicentennial. With catastrophe looming, it’s up to Skinner and Pearl to reconcile and change the course of history—or die trying. The series that launched the careers of superstars Scott Snyder and Rafael Albuquerque returns for nine final issues and the closing chapter of the legacy of American Vampire.', 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01', '3.99', 'American Vampire 1976', '2020-10-06', 'comic book', 'Rafael Albuquerque', 'Scott Snyder'),
(3, 'aquaman-vol-4-underworld', 'Aquaman Vol. 4: Underworld', 'Enraged by rumors of Arthur’s survival in the slums of Atlantis, the ruthless King Rath orders the use of ancient Atlantean techno-magic to track down the Aquaman at all costs! But the ex-king Arthur can’t hide for long when his fate collides with that of a mysterious young woman on the run from Rath’s own secret police. Her name: Dolphin. Collects AQUAMAN #25-30.  ', 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb', '16.99', 'Aquaman', '2018-01-24', 'graphic novel', 'Stjepan Sejic', 'Dan Abnett'),
(4, 'batgirl-1', 'Batgirl #1', '“Beyond Burnside” Chapter One: The Batgirl you know and love is going global with Eisner Award-winning and New York Times best-selling writer Hope Larson (A Wrinkle in Time, Goldie Vance) and all-star artist Rafael Albuquerque (AMERICAN VAMPIRE). In order to up her game, Babs travels to Japan on a quest to train with the most elite modern combat masters of the East. But when a chance meeting with an old friend puts a target on her back, Batgirl may need to use her new skills to solve a deadly mystery.', 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76', '2.99', 'Batgirl', '2016-07-27', 'comic book', 'Rafael Albuquerque', 'Hope Larson'),
(5, 'batman-56', 'Batman #56', 'The Dark Knight’s looking to drop both the hammer and sickle on the KGBeast, whose rampage across Gotham City takes a toll on Nightwing when he’s injured in the fray. Blaming himself for his ward’s fate, Batman gets grimmer than usual—and vows to take the Russian assassin down like the Berlin Wall. Is even Gotham City ready for that much violence? The streets will run red like borscht if the Dark Knight gets his way against this Soviet scourge.', 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ', '3.99', 'Batman', '2018-10-03', 'comic book', 'Tony S. Daniel', 'Tom King'),
(6, 'batman-beyond-1', 'Batman Beyond #1', '“THE RETURN” part one! Terry McGinnis is back as Batman, much to the delight of his family and friends. But is the original Joker really back as well? Inspired by the possible return of their role model, the Jokerz have taken over an entire section of Gotham City and are determined to wreak havoc in the still-rebuilding city. While Batman battles chaos on the streets, his friend Dana is at the mercy of the new leader of the now-unified gang.', 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ', '2.99', 'Batman Beyond', '2016-10-26', 'comic book', 'Bernard Chang', 'Dan Jurgens'),
(7, 'batman-superman-1', 'Batman/Superman #1', 'Up in the sky, in the dark of the night, trust no one - for the infected walk among us. Spinning out of the devastating events of THE BATMAN WHO LAUGHS, Superman and Batman are together once more in an all-new monthly series - and they\'re facing a terrifying new threat that could strike from anywhere. The Dark Knight and the Man of Steel must journey into the depths of Gotham City to learn which of their fellow heroes has been transformed into the horrifying horseman of their most dangerous and deranged foe ever. Our heroes will need to fight to survive, but an even more dangerous question lurkes in the shadows: Can Superman and Batman even trust each other?', 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8', '3.99', 'Batman/Superman', '2019-08-28', 'comic book', 'David Marquez', 'Joshua Williamson'),
(8, 'batman-superman-annual-1', 'Batman/Superman Annual #1', 'On a dark and stormy night in the fifth dimension, two mortal foes meet to settle an age-old question once and for all: In a fight between Batman and Superman, who would win? The combatants? Mr. Mxyzptlk and Bat-Mite. And in this battle for the ages, you will find out if a fifth-dimensional imp can bleed. It’s all in this, the ultimate slugfest between the Dark Knight and the Man of Steel-plus a whole lot of magic!', 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk', '4.99', 'Batman/Superman Annual', '2020-09-29', 'comic book', 'Clayton Henry, Gleb Melnikov, Dale Eaglesham', 'Joshua Williamson'),
(9, 'batman-the-joker-war-zone-1', 'Batman: The Joker War Zone #1', 'Gotham City is a battleground as The Joker takes over the Wayne fortune and wages a street war against the Dark Knight and his allies! Enter the “war zone” with short stories featuring characters like Cassandra Cain, Stephanie Brown, and Luke Fox and see how they’re fighting back in a city under siege! Also, the brutal full debut of the mysterious new anti-hero known as Clownhunter!', 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8', '5.99', 'Batman: The Joker War Zone', '2020-09-29', 'comic book', 'Guillem March, Ashley A. Woods, Olivier Coipel, James Stokoe, Darko Lafuente', 'Sam Johns, Joshua Williamson, John Ridley'),
(10, 'batman-three-jokers-1', 'Batman: Three Jokers #1', 'Thirty years after Batman: The Killing Joke changed comics forever, Three Jokers reexamines the myth of who, or what, The Joker is and what is at the heart of his eternal battle with Batman. New York Times bestselling writer Geoff Johns and Jason Fabok, the writer/artist team that waged the “Darkseid War” in the pages of Justice League, reunite to tell the ultimate story of Batman and The Joker! After years of anticipation starting in DC Universe: Rebirth #1, the epic miniseries you’ve been waiting for is here: find out why there are three Jokers, and what that means for the Dark Knight and the Clown Prince of Crime. It’s a mystery unlike any Batman has ever faced!', 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY', '6.99', 'Batman: Three Jokers', '2020-08-25', 'comic book', 'Jason Fabok', 'Geoff Johns'),
(11, 'batman-white-knight-presents-harley-quinn-1', 'Batman: White Knight Presents: Harley Quinn #1', 'The Joker is dead, Bruce Wayne is behind bars...and Gotham City is just starting to redefine itself without Batman. As Harley Quinn struggles to adjust to her new life as the mother of Jack Napier’s twins, an elusive mastermind called the Producer seizes the moment to assemble a crew of villains-starting with the Starlet, a serial killer who murders Gotham’s golden age film stars in homage to their silver screen roles. When a recent, gruesome crime scene suggests a connection to The Joker, the GTO, and FBI agent Hector Quimby turn to Harley as the one person with information that could crack the case. With some help from Bruce, Harley agrees to investigate-but to protect her children and her city from a fatal final act, Harley must flirt with madness and confront her own past.', 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX', '4.99', 'Batman: White Knight Presents: Harley Quinn', '2020-10-20', 'comic book', 'Matteo Scalera', 'Katana Collins'),
(12, 'catwoman-vol-1-copycats', 'Catwoman Vol. 1: Copycats', 'Following her near-miss wedding with Batman, Catwoman hits the streets to expose a copycat who’s pulling heists around Gotham City. As Selina cracks the whip on her former criminal cohorts, she’s attracting unwanted attention from one of Gotham’s most dangerous groups. The mob? Nope. Try the GCPD. And as if the Bat-Bride didn’t have enough problems, don’t miss the debut of an all-new villain determined to make trouble for all nine of Selina’s lives. Collects issues #1-6 of Catwoman’s new series.', 'https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq', '16.99', 'Catwoman', '2019-04-10', 'graphic novel', 'Fernando Blanco, Joëlle Jones', 'Joëlle Jones');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `comics`
--
ALTER TABLE `comics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `comics`
--
ALTER TABLE `comics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
