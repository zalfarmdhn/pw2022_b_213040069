-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 03:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `punime-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `poster_anime` varchar(255) NOT NULL,
  `nama_anime` varchar(255) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `studio` varchar(255) NOT NULL,
  `episode` int(3) NOT NULL,
  `status_anime` char(7) NOT NULL,
  `rilis` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `poster_anime`, `nama_anime`, `nama_alternatif`, `deskripsi`, `studio`, `episode`, `status_anime`, `rilis`, `id_kategori`) VALUES
(1, 'ousama_ranking.jpg', 'Ranking of Kings', 'Ousama Ranking', 'Ousama Ranking menceritakan tentang seorang pangeran muda bernama Bojji yang terlahir tuli dan bisu. Dikarenakan kekurangan Pangeran Bojji, banyak orang yang memandang rendah dirinya dan menganggap tidak pantas menjadi seorang penerus raja. Tidak hanya masyarakat yang memandang dirinya lemah, namun oleh orang-orang kerajaan sekalipun. Banyak orang yang kemudian memanggil dirinya dengan sebutan “Pangeran yang Tidak Berguna.<br><br>\r\n\r\nMeskipun banyak kelemahan dan kekurangan dalam dirinya, Pangeran Bojji memiliki hati yang sangat kuat. Masih ada beberapa orang yang tetap mendukung dirinya untuk menjadi raja selanjutnya.<br><br>', 'Wit Studio', 23, 'selesai', '15 Oktober 2022', 1),
(13, '629648fd9ffe2.jpg', 'Hunter X Hunter', 'Hunter x Hunter', 'Anime ini bercerita tentang Gon, bocah 12 tahun yang ingin mengikuti jejak ayahnya, Ging. Gon terobsesi pada ayahnya, yang ia kira sudah meninggal. Namun, ternyata sang ayah “hanya” meninggalkannya saat masih bayi untuk menjalani profesi sebagai hunter. <br><br>\r\n\r\nWalau dititipkan ke bibinya, Gon tidak merasa ditelantarkan. Ia malah menghormati keputusan ayahnya untuk mencapai impian menemukan tempat-tempat bersejarah di seluruh dunia.', 'Madhouse', 148, 'selesai', '02 Oktober 2011', 2),
(15, '6296a8f22d1f5.jpg', 'Cells At Work!', 'Hataraku Saibou ', 'Cells at Work berfokus pada kisah sel darah merah AE3803 (Kana Hanazawa) dan sel darah putih U-1146 (Tomoaki Maeno). Kisah mereka terjadi dalam tubuh manusia di mana 37,2 triliun sel bekerja sama agar tubuh tetap sehat. Mereka berjuang untuk melawan kuman dan bakteri yang merugikan tubuh.', 'David Production', 13, 'selesai', '8 Juli 2018', 3),
(16, '629724506e01b.jpg', 'Death Note', 'Death Note', 'Ceritanya mengisahkan tentang Light Yagami, seorang remaja jenius yang menemukan buku catatan asing misterius yang disebut \"Death Note\"—yang dimiliki oleh Shinigami bernama Ryuk, dan memberikan penggunanya kemampuan supernatural untuk membunuh siapa pun yang namanya tertulis pada buku tersebut.', 'Madhouse', 37, 'selesai', '04 Oktober 2006', 6),
(18, '6298dc3851d66.jpg', 'Spy X Family', 'Spy X Family', 'SPY X FAMILY mengisahkan soal mata-mata pembunuhan dan ahli telepati yang menyamar sebagai keluarga. Kisah ini bermula ketika seorang mata-mata terampil bernama Twilight ditugaskan untuk melaksanakan misi rahasia kelas kakap, Operasi Strix. Ia harus menyelidiki rencana seorang pria berbahaya yang dapat mengancam perdamaian antara Negara Timur dan Negara Barat.<br><br>\r\n\r\nDalam menjalankan misi ini, Twilight diharuskan memiliki istri dan anak palsu untuk mendekati targetnya, Donovan Desmond. Namun, istri dan anak palsu Twilight bukanlah orang sembarangan, bahkan mereka bisa dikatakan berbahaya. Istrinya yang bernama Yor merupakan seorang pembunuh, sedangkan Anya, anak perempuannya, adalah seorang telepati.', 'Wit Studio', 9, 'ongoing', '09 April 2022', 2),
(26, '62a1c49cecd88.jpg', 'Assasination Classroom', 'Ansatsu Kyoushitsu', 'Awal cerita anime ini memperlihatkan situasi kelas yang sangat menegangkan. Tiba-tiba ada seorang guru berbentuk sangat aneh. Kepala bulat seperti balon, tubuh kecil dan memiliki tentakel seperti gurita.\r\n\r\nTiba-tiba para siswa mengeluarkan sebuah pistol dan menembaki gurunya itu secara membabi buta. Namun, tak ada yang bisa mengenainya karena gurunya itu sangat lincah dan cepat.\r\n\r\nNamun peluru yang digunakan bukan yang bisa melukai manusia. Pelurunya diberi nama BB Ammo. Karena hanya jenis peluru itulah yang bisa melukai guru aneh tersebut.\r\n\r\nRupanya kekuatan dari guru itu adalah memiliki kecepatan 20 mach atau setara 24.500Km/jam.\r\n\r\nKelas 3E SMP Kunugigaoka mendapatkan misi membunuh gurunya itu dalam jangka waktu satu tahun.', 'Lerche', 22, 'selesai', '10 Januari 2015', 3),
(28, '62a490cc13b86.jpg', 'Laid-back Camp', 'Yuru Camp', 'Tokoh utama dari anime ini adalah seseorang yang bernama Rin Shima. Dalam kegiatan camping yang dilakukannya, ia lebih senang melakukannya seorang diri atau solo camp dibandingkan dengan kegiatan berkelompok. Namun setelah berjalannya waktu, ia pun mulai diperkenalkan dengan sosok Nadeshiko. Dari sanalah kegiatan camp yang dilakukannya mulai berjalan dengan berbeda. Pasalnya Rin Shima mulai melakukan kegiatan camp secara berkelompok. <br> <br>\r\n\r\nNadeshiko pun memutuskan untuk ikut menginap bersama Rin. Saat malam datang mereka menikmati keindahan alam yang ada di sekitarnya sambil menyantap sajian mie cup bersama. Tak lama setelah itu, barulah ia ingat akan nomor ponsel kakaknya. Karena itulah ia pun mulai menghubungi kakaknya dan mulai dimarahi karena perbuatannya tersebut.', 'C-Station', 12, 'selesai', '04 Januari 2018', 5),
(29, '62a49823027d1.jpg', 'Angel Beats!', 'Angel Beats!', 'Angel Beats! mengambil latar di sebuah SMA yang bertindak sebagai tempat untuk menghilangkan penyesalan mereka, di mana para siswanya belajar untuk menghilangkan sisa-sisa beban atau penyesalan dari kehidupan sebelumnya, sebelum melanjutkan ke kehidupan setelah kematian atau reinkarnasi.<br><br>\r\n\r\nCerita anime ini bermula dari terdamparnya Otonashi di dunia tersebut.ketika tersadar ia bertemu Yuri.tetapi ia tidak ingat identitas dirinya dan hanya ingat kalau namanya adalah Otonashi dan juga Otonashi seakan tidak percaya dia mati walaupun telah di beritahu oleh Yuri.di dalam pertemuan itu ternyata Yuri sedang melancarkan serangan ke tenshi (melaikat) yang di anggap oleh Yuri sebagai penggangu.', 'P.A. Works', 13, 'selesai', '03 April 2010', 4),
(30, '62a495b95f62e.jpg', 'JoJo&#039;s Part 5: Golden Wind', 'JoJo Part 5: Ougon no Kaze', 'Part 5 dari seri JoJo’s Bizarre Adventure kini mengambil latar di kota Napoli, Italia pada tahun 2001. Walaupun terkenal dengan panorama yang indah, kota ini ternyata dipenuhi oleh para kriminal yang mengganggu kehidupan warganya. Salah satu pelakunya adalah Giorno Giovanna yang ternyata adalah anak dari DIO Brando, sang vampir yang dulu telah dibunuh oleh Jotaro di Mesir. Di balik tindak kriminal kecil-kecilan yang dilakoninya, ia ternyata memiliki mimpi untuk memperbaiki kehidupan di kota Napoli dengan menjadi mafia nomor satu Italia alias Gang-Star. Ia akhirnya bertemu dengan Bruno Bucciarti, seorang anggota mafia dari kelompok Passione yang ditugaskan untuk mencari salah satu anggotanya yang tiba-tiba menghilang.', 'David Production', 39, 'selesai', '06 October 2018', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `genre`) VALUES
(1, 'Adventure'),
(2, 'Action'),
(3, 'Comedy'),
(4, 'Drama'),
(5, 'Slice of Life'),
(6, 'Supernatural'),
(7, 'Fantasy'),
(9, 'Mystery');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `password`, `level`) VALUES
(1, 'Zalfa Ramadhan', 'zalfa@gmail.com', 'zalfa', '$2y$10$MpeXTA5MgNGu1hF.0klCAOL42KcwXiA/vsWgKSjoXUfJVHQ.TzApG', 'super admin'),
(2, 'Eno Uehara', 'eno@outlook.com', 'ueno', '$2y$10$uaeNnyZfMo8EU0sIPKAbZ.oYj2ngnBm3zzPmqkFz0KCuIjQc5gEjW', 'admin'),
(3, 'Usep Dermawan', 'usepuh@gmail.com', 'usep', '$2y$10$CcoUM/wkpadv8Sr1DnTUNeOo5RkFSFzFLroz90j6tNlOAKnA9Jif.', 'user'),
(9, 'Blue Sky', 'blue_sky@gmail.com', 'sky', '$2y$10$kLrfJZnyWB/gApc9vPzTQORWl8xveb17bzBA2HylO5hZ3ubtm36Yu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anime`
--
ALTER TABLE `anime`
  ADD CONSTRAINT `id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
