-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 05:48 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resensi_film_jabbar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_film`
--

CREATE TABLE `tb_film` (
  `id_film` int(10) NOT NULL,
  `nama_film` varchar(100) NOT NULL,
  `tahun_film` int(4) NOT NULL,
  `sutradara_film` varchar(100) NOT NULL,
  `cover_film` text NOT NULL,
  `rating_film` float NOT NULL,
  `id_genre` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_film`
--

INSERT INTO `tb_film` (`id_film`, `nama_film`, `tahun_film`, `sutradara_film`, `cover_film`, `rating_film`, `id_genre`) VALUES
(6, 'Avenger', 2019, 'Anthony Russo dan Joe Russo', 'images/08042020104652.png', 8.4, 1),
(7, 'Mr. Beans Holiday', 2007, 'Steve Bendelack', 'images/08042020154003.png', 6.4, 3),
(8, 'Bean', 1997, 'Mel Smith', 'images/08042020154348.png', 6.5, 3),
(9, 'Spiderman: Far From Home', 2019, 'Jon Watts', 'images/08042020154655.png', 7.5, 1),
(10, 'Insidious', 2010, 'James Wan', 'images/08042020155915.png', 6.8, 4),
(11, 'Inspector Gadget', 1999, 'David Kellogg', 'images/08042020160106.png', 4.1, 3),
(12, 'The Conjuring', 2013, 'James Wan', 'images/08042020160311.png', 7.5, 4),
(13, 'Furious 7', 2015, 'James Wan', 'images/08042020160519.png', 7.2, 1),
(14, 'Batman v Superman: Dawn of Justice', 2016, 'Zack Snyder', 'images/08042020160832.png', 6.5, 1),
(15, 'Spies in Disguise', 2019, 'Nick Bruno dan Troy Quane', 'images/08042020161132.png', 6.8, 5),
(16, 'Cars', 2006, 'John Lasseter', 'images/08042020161335.png', 7.1, 5),
(17, 'Miracle in Cell No. 7', 2013, 'Hwan-kyung Lee', 'images/08042020162415.png', 8.2, 6),
(18, 'Titanic', 1997, 'James Cameron', 'images/08042020163414.png', 7.8, 6),
(19, 'Sonic the Hedgehog', 2020, 'Jeff Fowler', 'images/08042020173537.png', 6.6, 5),
(20, 'Frozen II', 2019, 'Chris Buck dan Jennifer Lee', 'images/08042020173743.png', 7, 5),
(21, 'Sherlock Holmes: A Game of Shadows', 2011, 'Guy Ritchie', 'images/08042020174222.png', 7.5, 1),
(22, 'Jumanji: Welcome to the Jungle', 2017, 'Jake Kasdan', 'images/08042020210238.png', 6.9, 7),
(23, 'Annihilation', 2018, 'Alex Garland', 'images/08042020210744.png', 6.9, 7),
(24, 'Harry Potter and the Prisoner of Azkaban', 2004, 'Alfonso Cuaron', 'images/08042020211039.png', 7.9, 7),
(25, 'Indiana Jones and the Last Crusade', 1989, 'Steven Spielberg', 'images/08042020211241.png', 8.2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_genre`
--

CREATE TABLE `tb_genre` (
  `id_genre` int(10) NOT NULL,
  `nama_genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_genre`
--

INSERT INTO `tb_genre` (`id_genre`, `nama_genre`) VALUES
(1, 'Aksi'),
(3, 'Komedi'),
(4, 'Horor'),
(5, 'Animasi'),
(6, 'Drama'),
(7, 'Petualangan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(10) NOT NULL,
  `nama_komentar` varchar(50) NOT NULL,
  `isi_komentar` text NOT NULL,
  `id_film` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `nama_komentar`, `isi_komentar`, `id_film`) VALUES
(1, 'Dettline', 'Film ini bagus', 6),
(2, 'Alfred', 'Just one word! AMAZING', 6),
(3, 'Jack', 'Masi belom move on dari #AvengersEndgame, kagum ngebayangin skripnya, bisa buat film superhero rasa film festival dengan nilai-nilai humanis dan kekeluargaan yg kuat jadi pas momen dihadirkan realita yg getir atau pait pecahlah itu kantong mata. Scoringnya jg gila bgt sih!', 6),
(4, 'Fath Fathan', 'Yeaah, already watching Avengers Endgame this morning is cool and all... but, do you know there is something way cooler than that? Not spoiling any of its material to Internet. Enjoy your watch guys!', 6),
(5, 'Dwinda', 'Russo bersaudara, baru rampung menonton Avengers: Endgame, kalian membuat ini amat amat bagus, saya tak bisa menahan diri selain menangis', 6),
(6, 'Radile', 'sepertinya harus menjauhi media sosial beberapa hari sampai tiba waktu dimana diri ini nonton #AvengersEndgame', 6),
(7, 'Cahya Septyanto', 'Doaku pagi ini: Ya allah, tolong lancarkan dan mudahkan lah saya dan teman2 saya yang nanti malam akan menunaikan Avengers: Endgame. Tolong jauhkan lah kami dari Spoiler terkutuk dan orang2 reseh yg berisik ketika nonton. Dan tolong lindungilah Iron man serta Team Avenger nya,', 6),
(8, 'Brandon Davis', 'Avengers: Endgame adalah film yang menakjubkan dan film yang luar biasa. Saya belum pernah melihat yang seperti ini. Film ini semua yang saya mau dan LEBIH banyak lagi. Luar biasa', 6),
(9, 'Catey Sullivan', 'The best part of Far From Home is Samuel L. Jackson, whose Nick Fury single-handedly elevates the movie from a C to a B+.', 9),
(10, 'Bob Mondelo', 'The stakes this time turn out to be considerably lower, and your friendly neighborhood Spider-Teen is arguably just the guy to bring things down to Earth and reestablish a human scale.', 9),
(11, 'Chris Hewitt', '\r\n\r\n    I like that \"Far From Home\" is trying something new and that its humor feels more real than the ironic cracks in most superhero movies. I just wish its good pieces all came together more satisfyingly. ', 9),
(12, 'Crishtoper', 'Not as good as the first film but well acted by Tom Holland and company. It is almost essential you have seen the last Avengers film to fully understand this film. THe villain is kinda ho hum but I enjoyed the film.\r\n', 9),
(13, 'Dann', 'Spider-Man hits the road in Spider-Man: Far From Home. Peter Parker European school trip is interrupted when a superhero named Mysterio, who from an alternate Earth, shows up and asked for his help to defeat an Elemental. Unfortunately, as the first post-Endgame Marvel film, Far From Home has the extra burden of resetting the Marvel Universe; which comes off as kind of awkward in this story about a high school trip. And while it does some good things with Parker dealing with the loss of his mentor (Tony Stark), theres too much Iron Man in this Spider-Man movie. A mess from start to finish (though still entertaining), Spider-Man: Far From Home is disappointing both as a MCU film and a Spider-Man film. ', 9),
(14, 'Paul Grimes', 'Fun, lively, high school spirit as Tom Holland is the best Spider-Man to date. No Marvel fatigue with this one. ', 9),
(15, 'Putri Laksmiwati', 'Filmnya seru bikin pengen nonton dua kali. Awesome pokoknya, gak sia sia mesen tiket dari jauh hari dan penantian panjang terbalas dengan film ketje ini', 13),
(16, 'Pangestu Simbolon', 'Overall bagus sih, tapi rasanya enak film film sebelumnya', 13),
(17, 'Pangestu Simbolon', 'GGWP', 13),
(18, 'Jhon', 'Pahlawan kok berantem :v', 14),
(19, 'Cena', 'Filmnya bagus gilsss. nunggu download-annya rilis. mau nonton ulang di rumah, aksinya lebih menantang ketimbang lawan vilain lain', 14),
(20, 'The', 'Yakali gak kuy, fans DC harus liat film ini. semoga masih kebagian tiket nonton di awal tanggal tayang. Rela nebok celengan buat beli tikenya :(', 14),
(21, 'Rock', 'Halah pahlawan diadu kayak gak ada drama lain aja. Penjahat stoknya abis? film kayak gini aja ditunggu. Tapi kayaknya seru, kapan lagi liat pahlawan berantem, aksinya juga kebayang bisa lebih rame. WAJIB BANGET buat nonton. Besok mesen tiketnya ah :v', 14),
(22, 'Rey', 'Skut', 14),
(23, 'Mister', 'Lagi trend banget ya pahlawan melawan pahlawan, gak DC gak Marvel', 14),
(24, 'Rio', 'Dim dim pak dim dim oy dim dim pak dim dim', 14),
(25, 'Robert', 'Dabes, aktornya juga dabes pokoknya. Udah nonton filmnya bagoes', 21),
(26, 'Downey', 'GG, jadi ada kesan lain gak cuma misteri dan kasus. tapi komedinya juga dapet. karena yg meranin karakter Sherlocknya GG.\r\n\r\nGG. GGWP', 21),
(27, 'Jr', 'Kuy mabar, ya kali gak mabar', 21),
(28, 'Tony', 'Jadi pengen bayarin temen sekelas nonton film ini, Aktornya bagus', 21),
(29, 'Stark', '1 Kata yaitu', 21),
(30, 'Mr', 'Kocag :v', 7),
(31, 'Bean', 'Gak ketebak alur ceritanya, komedinya walau absurd tapi keren. bikin keseruan sendiri wkwkw', 7),
(32, 'Tuan', 'Cocok nonton bareng keluarga. Family times\r\n', 7),
(33, 'Buncis', 'Nunggu bajakan awokokoko', 7),
(34, 'Mr', 'Cup 1 kata, kocag :v', 8),
(35, 'Bean', 'Idem sama yg bilang kocag', 8),
(36, 'Tuan', 'Idem', 8),
(37, 'Buncis', 'Idem', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_film`
--
ALTER TABLE `tb_film`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `relasi_genre` (`id_genre`);

--
-- Indexes for table `tb_genre`
--
ALTER TABLE `tb_genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `relasi_komentar` (`id_film`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_film`
--
ALTER TABLE `tb_film`
  MODIFY `id_film` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_genre`
--
ALTER TABLE `tb_genre`
  MODIFY `id_genre` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_film`
--
ALTER TABLE `tb_film`
  ADD CONSTRAINT `relasi_genre` FOREIGN KEY (`id_genre`) REFERENCES `tb_genre` (`id_genre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `relasi_komentar` FOREIGN KEY (`id_film`) REFERENCES `tb_film` (`id_film`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
