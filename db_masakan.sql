-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 11:43 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_masakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `Id_Artikel` int(11) NOT NULL,
  `IdUser` int(10) NOT NULL,
  `Id_Kategori` int(10) NOT NULL,
  `Judul_Artikel` text NOT NULL,
  `Slug_Artikel` varchar(255) NOT NULL,
  `Isi_Artikel` text NOT NULL,
  `Gambar` varchar(255) NOT NULL,
  `Status_Artikel` enum('Publish','Draft') NOT NULL,
  `Keywords` varchar(255) NOT NULL,
  `Tanggal_Post` datetime NOT NULL,
  `Konfirmasi` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`Id_Artikel`, `IdUser`, `Id_Kategori`, `Judul_Artikel`, `Slug_Artikel`, `Isi_Artikel`, `Gambar`, `Status_Artikel`, `Keywords`, `Tanggal_Post`, `Konfirmasi`) VALUES
(103, 2, 1, 'Resep Makanan Jawa Tradasional khas dari jogja', 'resep-makanan-jawa-tradasional-khas-dari-jogja', '<h3><strong>Bahan-bahan Pembuatan Soto Jogja</strong></h3>\r\n<ul>\r\n<li>Sediakan ayam kampung segar sebanyak setengah ekor.</li>\r\n<li>Air bersih sebanyak satu setengah liter</li>\r\n<li>Daun salam sebanyak tiga lembar</li>\r\n<li>Tomat merah sebanyak dua buah</li>\r\n<li>Serai sebanyak satu batang</li>\r\n<li>Garam sebanyak satu sendok teh</li>\r\n<li>Minyak secukupnya untuk menumis</li>\r\n</ul>\r\n<h3><strong>Bumbu Halus Yang Dibutuhkan</strong></h3>\r\n<ul>\r\n<li>Bawang merah sebanyak lima butir</li>\r\n<li>Bawang putih sebanyak tiga butir</li>\r\n<li>Kaldu ayam sebanyak dua blok</li>\r\n<li>Kemiri sebanyak dua butir</li>\r\n<li>Merica butir sebanyak satu sendok teh</li>\r\n</ul>\r\n<h3><strong>Bahan Pelengkap Untuk Soto Jogja</strong></h3>\r\n<ul>\r\n<li>Nasi putih hangat secukupnya</li>\r\n<li>Daun kol yang diiris kasar sebanyak seratus gram</li>\r\n<li>Tauge sebanyak lima puluh gram</li>\r\n<li>Tahu dan tempe bacem</li>\r\n<li>Soun sebanyak lima puluh gram yang disiram air panas lalu ditiriskan</li>\r\n<li>Daun seledri sebanyak dua batang yang diiris tipis</li>\r\n<li>Daun bawang sebanyak dua batang yang diiris tipis</li>\r\n<li>Bawang goreng secukupnya</li>\r\n</ul>\r\n<h3><strong>Cara Membuat Soto Khas Jogja</strong></h3>\r\n<ol>\r\n<li>Resep masakan Jawa tradisional ini diawali dengan menyiapkan panci lalu rebus air.</li>\r\n<li>Masukkan daun salam, garam serta serai hingga mendidih.</li>\r\n<li>Masukkan ayam lalu tunggu hingga daging ayam menjadi empuk.</li>\r\n<li>Setelah empuk, angkat ayam dan goreng sampai warnanya berubah kecokelatan.</li>\r\n<li>Suwir-suwir ayam dan sisihkan.</li>\r\n<li>Panaskan minyak lalu tumis semua bumbu halus sampai tercium aroma harum.</li>\r\n<li>Jika semua bumbu sudah tercampur rata, masukkan tumisan bumbu pada kuah kaldu yang digunakan untuk memasak ayam tadi.</li>\r\n<li>Masukkan blok kaldu serta tomat hingga kuah sesuai selera.</li>\r\n<li>Cara menyajikan soto khas Jogja ini adalah sebagai berikut. Letakkan soun, tauge, suwiran ayam serta daun kol di atas mangkuk saji. Siram menggunakan kuah panas.</li>\r\n<li>Beri taburan daun bawang, daun seledri serta bawang goreng.</li>\r\n<li>Apabila berkenan, tambahkan juga perkedel kentang dan tempe atau tahu bacem. Soto khas Jogja telah siap untuk dinikmati.</li>\r\n</ol>', 'Resep-Masakan-Jawa-Tradisional-Khas-Dari-Jogja.jpg', 'Publish', 'jogja', '2018-07-13 18:24:37', '1'),
(104, 2, 2, 'Resep makanan mie gepeng goreng', 'resep-makanan-mie-gepeng-goreng', '<h3><strong>Bahan-bahan Pembuatan Soto Jogja</strong></h3>\r\n<ul>\r\n<li>Sediakan ayam kampung segar sebanyak setengah ekor.</li>\r\n<li>Air bersih sebanyak satu setengah liter</li>\r\n<li>Daun salam sebanyak tiga lembar</li>\r\n<li>Tomat merah sebanyak dua buah</li>\r\n<li>Serai sebanyak satu batang</li>\r\n<li>Garam sebanyak satu sendok teh</li>\r\n<li>Minyak secukupnya untuk menumis</li>\r\n</ul>\r\n<h3><strong>Bumbu Halus Yang Dibutuhkan</strong></h3>\r\n<ul>\r\n<li>Bawang merah sebanyak lima butir</li>\r\n<li>Bawang putih sebanyak tiga butir</li>\r\n<li>Kaldu ayam sebanyak dua blok</li>\r\n<li>Kemiri sebanyak dua butir</li>\r\n<li>Merica butir sebanyak satu sendok teh</li>\r\n</ul>\r\n<h3><strong>Bahan Pelengkap Untuk Soto Jogja</strong></h3>\r\n<ul>\r\n<li>Nasi putih hangat secukupnya</li>\r\n<li>Daun kol yang diiris kasar sebanyak seratus gram</li>\r\n<li>Tauge sebanyak lima puluh gram</li>\r\n<li>Tahu dan tempe bacem</li>\r\n<li>Soun sebanyak lima puluh gram yang disiram air panas lalu ditiriskan</li>\r\n<li>Daun seledri sebanyak dua batang yang diiris tipis</li>\r\n<li>Daun bawang sebanyak dua batang yang diiris tipis</li>\r\n<li>Bawang goreng secukupnya</li>\r\n</ul>\r\n<h3><strong>Cara Membuat Soto Khas Jogja</strong></h3>\r\n<ol>\r\n<li>Resep masakan Jawa tradisional ini diawali dengan menyiapkan panci lalu rebus air.</li>\r\n<li>Masukkan daun salam, garam serta serai hingga mendidih.</li>\r\n<li>Masukkan ayam lalu tunggu hingga daging ayam menjadi empuk.</li>\r\n<li>Setelah empuk, angkat ayam dan goreng sampai warnanya berubah kecokelatan.</li>\r\n<li>Suwir-suwir ayam dan sisihkan.</li>\r\n<li>Panaskan minyak lalu tumis semua bumbu halus sampai tercium aroma harum.</li>\r\n<li>Jika semua bumbu sudah tercampur rata, masukkan tumisan bumbu pada kuah kaldu yang digunakan untuk memasak ayam tadi.</li>\r\n<li>Masukkan blok kaldu serta tomat hingga kuah sesuai selera.</li>\r\n<li>Cara menyajikan soto khas Jogja ini adalah sebagai berikut. Letakkan soun, tauge, suwiran ayam serta daun kol di atas mangkuk saji. Siram menggunakan kuah panas.</li>\r\n<li>Beri taburan daun bawang, daun seledri serta bawang goreng.</li>\r\n<li>Apabila berkenan, tambahkan juga perkedel kentang dan tempe atau tahu bacem. Soto khas Jogja telah siap untuk dinikmati.</li>\r\n</ol>', 'Resep-masakan-mie-gepeng-goreng-770x430.jpg', 'Publish', 'gepeng', '2018-07-13 18:25:37', '1'),
(105, 1, 3, 'resep masakan pepes ayam', 'resep-masakan-pepes-ayam', '<h3><strong>Bahan-bahan Pembuatan Soto Jogja</strong></h3>\r\n<ul>\r\n<li>Sediakan ayam kampung segar sebanyak setengah ekor.</li>\r\n<li>Air bersih sebanyak satu setengah liter</li>\r\n<li>Daun salam sebanyak tiga lembar</li>\r\n<li>Tomat merah sebanyak dua buah</li>\r\n<li>Serai sebanyak satu batang</li>\r\n<li>Garam sebanyak satu sendok teh</li>\r\n<li>Minyak secukupnya untuk menumis</li>\r\n</ul>\r\n<h3><strong>Bumbu Halus Yang Dibutuhkan</strong></h3>\r\n<ul>\r\n<li>Bawang merah sebanyak lima butir</li>\r\n<li>Bawang putih sebanyak tiga butir</li>\r\n<li>Kaldu ayam sebanyak dua blok</li>\r\n<li>Kemiri sebanyak dua butir</li>\r\n<li>Merica butir sebanyak satu sendok teh</li>\r\n</ul>\r\n<h3><strong>Bahan Pelengkap Untuk Soto Jogja</strong></h3>\r\n<ul>\r\n<li>Nasi putih hangat secukupnya</li>\r\n<li>Daun kol yang diiris kasar sebanyak seratus gram</li>\r\n<li>Tauge sebanyak lima puluh gram</li>\r\n<li>Tahu dan tempe bacem</li>\r\n<li>Soun sebanyak lima puluh gram yang disiram air panas lalu ditiriskan</li>\r\n<li>Daun seledri sebanyak dua batang yang diiris tipis</li>\r\n<li>Daun bawang sebanyak dua batang yang diiris tipis</li>\r\n<li>Bawang goreng secukupnya</li>\r\n</ul>\r\n<h3><strong>Cara Membuat Soto Khas Jogja</strong></h3>\r\n<ol>\r\n<li>Resep masakan Jawa tradisional ini diawali dengan menyiapkan panci lalu rebus air.</li>\r\n<li>Masukkan daun salam, garam serta serai hingga mendidih.</li>\r\n<li>Masukkan ayam lalu tunggu hingga daging ayam menjadi empuk.</li>\r\n<li>Setelah empuk, angkat ayam dan goreng sampai warnanya berubah kecokelatan.</li>\r\n<li>Suwir-suwir ayam dan sisihkan.</li>\r\n<li>Panaskan minyak lalu tumis semua bumbu halus sampai tercium aroma harum.</li>\r\n<li>Jika semua bumbu sudah tercampur rata, masukkan tumisan bumbu pada kuah kaldu yang digunakan untuk memasak ayam tadi.</li>\r\n<li>Masukkan blok kaldu serta tomat hingga kuah sesuai selera.</li>\r\n<li>Cara menyajikan soto khas Jogja ini adalah sebagai berikut. Letakkan soun, tauge, suwiran ayam serta daun kol di atas mangkuk saji. Siram menggunakan kuah panas.</li>\r\n<li>Beri taburan daun bawang, daun seledri serta bawang goreng.</li>\r\n<li>Apabila berkenan, tambahkan juga perkedel kentang dan tempe atau tahu bacem. Soto khas Jogja telah siap untuk dinikmati.</li>\r\n</ol>', 'Resep_Masakan_Pepes_Ayam.jpg', 'Publish', 'pepes', '2018-07-13 18:27:25', '1'),
(106, 1, 4, 'Resep membuat masakan ayam kecap pedas', 'resep-membuat-masakan-ayam-kecap-pedas', '<h3><strong>Bahan-bahan Pembuatan Soto Jogja</strong></h3>\r\n<ul>\r\n<li>Sediakan ayam kampung segar sebanyak setengah ekor.</li>\r\n<li>Air bersih sebanyak satu setengah liter</li>\r\n<li>Daun salam sebanyak tiga lembar</li>\r\n<li>Tomat merah sebanyak dua buah</li>\r\n<li>Serai sebanyak satu batang</li>\r\n<li>Garam sebanyak satu sendok teh</li>\r\n<li>Minyak secukupnya untuk menumis</li>\r\n</ul>\r\n<h3><strong>Bumbu Halus Yang Dibutuhkan</strong></h3>\r\n<ul>\r\n<li>Bawang merah sebanyak lima butir</li>\r\n<li>Bawang putih sebanyak tiga butir</li>\r\n<li>Kaldu ayam sebanyak dua blok</li>\r\n<li>Kemiri sebanyak dua butir</li>\r\n<li>Merica butir sebanyak satu sendok teh</li>\r\n</ul>\r\n<h3><strong>Bahan Pelengkap Untuk Soto Jogja</strong></h3>\r\n<ul>\r\n<li>Nasi putih hangat secukupnya</li>\r\n<li>Daun kol yang diiris kasar sebanyak seratus gram</li>\r\n<li>Tauge sebanyak lima puluh gram</li>\r\n<li>Tahu dan tempe bacem</li>\r\n<li>Soun sebanyak lima puluh gram yang disiram air panas lalu ditiriskan</li>\r\n<li>Daun seledri sebanyak dua batang yang diiris tipis</li>\r\n<li>Daun bawang sebanyak dua batang yang diiris tipis</li>\r\n<li>Bawang goreng secukupnya</li>\r\n</ul>\r\n<h3><strong>Cara Membuat Soto Khas Jogja</strong></h3>\r\n<ol>\r\n<li>Resep masakan Jawa tradisional ini diawali dengan menyiapkan panci lalu rebus air.</li>\r\n<li>Masukkan daun salam, garam serta serai hingga mendidih.</li>\r\n<li>Masukkan ayam lalu tunggu hingga daging ayam menjadi empuk.</li>\r\n<li>Setelah empuk, angkat ayam dan goreng sampai warnanya berubah kecokelatan.</li>\r\n<li>Suwir-suwir ayam dan sisihkan.</li>\r\n<li>Panaskan minyak lalu tumis semua bumbu halus sampai tercium aroma harum.</li>\r\n<li>Jika semua bumbu sudah tercampur rata, masukkan tumisan bumbu pada kuah kaldu yang digunakan untuk memasak ayam tadi.</li>\r\n<li>Masukkan blok kaldu serta tomat hingga kuah sesuai selera.</li>\r\n<li>Cara menyajikan soto khas Jogja ini adalah sebagai berikut. Letakkan soun, tauge, suwiran ayam serta daun kol di atas mangkuk saji. Siram menggunakan kuah panas.</li>\r\n<li>Beri taburan daun bawang, daun seledri serta bawang goreng.</li>\r\n<li>Apabila berkenan, tambahkan juga perkedel kentang dan tempe atau tahu bacem. Soto khas Jogja telah siap untuk dinikmati.</li>\r\n</ol>', 'Resep-Membuat-Masakan-Ayam-Kecap-Pedas-Khas-Malang.jpg', 'Publish', 'kecap pedas', '2018-07-13 18:28:25', '1'),
(107, 1, 5, '3 Resep Cup Cake Panggang Setara Buatan Cafe Populer:Strawberry Cupcake', '3-resep-cup-cake-panggang-setara-buatan-cafe-populerstrawberry-cupcake', '<h3>Bahan-bahan :</h3>\r\n<ul>\r\n<li>450 gr gula pasir</li>\r\n<li>360 gr terigu</li>\r\n<li>177 ml minyak sayur</li>\r\n<li>420 ml puree buah stroberi</li>\r\n<li>4 butir telur</li>\r\n<li>2 sdt ekstrak vanili</li>\r\n<li>Pewarna makanan merah secukupnya</li>\r\n</ul>\r\n<h3>Cara membuat strawberry cup cake:</h3>\r\n<ol>\r\n<li>Panaskan oven disuhu 165&deg;C. Olesi loyang muffin dengan papercup. Sisihkan.</li>\r\n<li>Campur telur, gula, puree stroberi, ekstrak vanili dan minyak dengan mixer. Tambahkan terigu, aduk lagi.</li>\r\n<li>Lalu, beri pewarna merah. Aduk sampai warnanya merata.</li>\r\n<li>Tuang adonan cupcake ke loyang. Isi &frac34; saja, karena nanti akan mengembang.</li>\r\n<li>Panggang dalam oven selama 15-20 menit. Cek kematangan dengan tusuk bagian tengahnya. Kalau tidak ada adonan yang nempel, artinya cupcake sudah matang.</li>\r\n<li>Angkat dan dinginkan. Hiasi atasnya dengan topping yang Anda sukai.</li>\r\n<li>Hidangkan cupcake dengan wadah yang cantik</li>\r\n</ol>', '1-Mary-Berry-chocolate-cupcakes-WEB.jpg', 'Publish', 'cupcake', '2018-07-13 18:32:41', '1'),
(108, 1, 2, 'Lemon Cupcake', 'lemon-cupcake', '<h3>Bahan lemon cupcake :</h3>\r\n<ul>\r\n<li>100 gr terigu self-rising</li>\r\n<li>125 gr gula pasir</li>\r\n<li>125 gr butter, lelehkan</li>\r\n<li>2 butir telur</li>\r\n<li>2 buah lemon</li>\r\n<li>2 sdm susu cair</li>\r\n</ul>\r\n<h3>Bahan icing:</h3>\r\n<ul>\r\n<li>175 gr butter, lelehkan</li>\r\n<li>350 gr icing sugar</li>\r\n</ul>\r\n<h3>Cara membuat lemon cupcake:</h3>\r\n<ol>\r\n<li>Panaskan oven 180&deg;C.</li>\r\n<li>Kocok gula bersama butter sampai berbuih.</li>\r\n<li>Tambahkan terigu yang sudah diayak, telur, susu, sedikit perasan lemon dan parutan kulit lemon. Aduk hingga rata.</li>\r\n<li>Tuangkan adonan ke dalam cetakan yang dilapisi kertas kue. Panggang 10-15 menit.</li>\r\n<li>Untuk icing:<br />&ndash; Kocok semua bahan dalam wadah.<br />&ndash; Beri parutan dan sari lemon.<br />&ndash; Aduk sampai jadi krim.</li>\r\n<li>Hiasi cupcake dengan icing</li>\r\n</ol>', 'resep-cupcake-panggang-lemon.jpg', 'Publish', 'cupcake', '2018-07-13 18:34:14', '1'),
(109, 1, 2, 'Red Velvet Cupcake', 'red-velvet-cupcake', '<h3>Bahan-bahan :</h3>\r\n<ul>\r\n<li>240 gr terigu</li>\r\n<li>400 gr gula pasir</li>\r\n<li>180 ml minyak sayur</li>\r\n<li>240 ml buttermilk</li>\r\n<li>120 ml air panas</li>\r\n<li>2 telur</li>\r\n<li>30 ml pewarna makanan merah</li>\r\n<li>1 sdt baking soda</li>\r\n<li>1sdt baking powder</li>\r\n<li>2 sdt ekstrak vanili</li>\r\n<li>1 sdt cuka putih</li>\r\n<li>1 sdt garam</li>\r\n<li>2 sdm bubuk kakao murni</li>\r\n</ul>\r\n<h3>Bahan frosting:</h3>\r\n<ul>\r\n<li>230 gr cream cheese</li>\r\n<li>4 sdm butter</li>\r\n<li>200 gr gula halus;</li>\r\n<li>Aduk pelan cream cheese serta butter, tambahkan gula. Kocok sampai jadi creamy.</li>\r\n</ul>\r\n<h3>Cara membuat red velvet cupcake:</h3>\r\n<ol>\r\n<li>Panaskan oven hingga hingga suhu 163&deg;C. Lapisi loyang dengan papercup.</li>\r\n<li>Campur rata, gula dan minyak. Lalu tambahkan telur kocok. Kocok rata.</li>\r\n<li>Beri buttermilk, pewarna merah, juga ekstrak vanili. Aduk sampai adonannya tercampur.</li>\r\n<li>Tuang air panas dan cuka putih. Aduk lagi. Lalu tambahkan terigu. Sisihkan.</li>\r\n<li>Di wadah terpisah, campur baking powder, baking soda, garam serta bubuk kakao.<br />Setelah tercampur, masukkan campuran baking ini ke adonan tepung.</li>\r\n<li>Tuang sekitar 60 ml di tiap papercup-nya.</li>\r\n<li>Olesi cupcake dengan frosting.</li>\r\n</ol>', 'resep-cupcake-panggang-red-velvet.jpg', 'Publish', 'cupcake', '2018-07-13 18:35:06', '1'),
(110, 2, 4, 'resep turun temurun membuat pelecing', 'resep-turun-temurun-membuat-pelecing', '<p>dfsss</p>', 'Resep-tumis-kangkung-saus-tiram.jpg', 'Publish', 'fdggs', '2018-07-14 08:29:37', '1'),
(111, 2, 2, 'cara pembuatan cemilan enak dan gurih', 'cara-pembuatan-cemilan-enak-dan-gurih', '<p>xsxssaadsdsfsd</p>', 'Resep_Masakan_Pepes_Ayam1.jpg', 'Publish', 'sdassads', '2018-07-15 02:24:59', '1'),
(112, 2, 3, 'dfggdfddfffd', 'dfggdfddfffd', '<p>fdfddf</p>', '1-Mary-Berry-chocolate-cupcakes-WEB1.jpg', 'Publish', 'fdfdgf', '2018-07-15 06:34:51', '1'),
(115, 41, 1, 'sdffdfd', 'sdffdfd', '<p>dffdfddf</p>', '1_binding.png', 'Publish', 'dffddf', '2018-07-15 09:23:50', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `Id_Kategori` int(11) NOT NULL,
  `Nama_Kategori` varchar(255) NOT NULL,
  `Slug_Kategori` varchar(255) NOT NULL,
  `Urutan` int(11) NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`Id_Kategori`, `Nama_Kategori`, `Slug_Kategori`, `Urutan`, `Tanggal`) VALUES
(1, 'FOR KIDS', 'for-kids', 2, '2018-07-13 17:49:04'),
(2, 'CEMILAN', 'cemilan', 1, '2018-07-13 17:48:48'),
(3, 'MAKANAN UTAMA', 'makanan-utama', 3, '2018-07-13 17:49:19'),
(4, 'PEDAS', 'pedas', 4, '2018-07-13 17:49:35'),
(5, 'BEKAL', 'bekal', 5, '2018-07-13 17:49:43'),
(7, 'HARIAN', 'harian', 6, '2018-07-15 01:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `Id_Konfigurasi` int(11) NOT NULL,
  `IdUser` int(10) NOT NULL,
  `Nama_Web` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Telepon` varchar(25) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Website` varchar(255) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Map` text NOT NULL,
  `Logo` varchar(255) NOT NULL,
  `Icon` varchar(255) NOT NULL,
  `Facebook` varchar(255) NOT NULL,
  `Instagram` varchar(255) NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`Id_Konfigurasi`, `IdUser`, `Nama_Web`, `Email`, `Telepon`, `Alamat`, `Website`, `Deskripsi`, `Map`, `Logo`, `Icon`, `Facebook`, `Instagram`, `Tanggal`) VALUES
(1, 1, 'ArMan (Artikel Masakan)', 'ketikanmd@gmail.com', '+62854765675567', 'Jln.tanpa nama,tanpa dia,tanpa kamu,tanpa aku', 'ketikanmd.com', '<p style="text-align: justify;">Have you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader''s eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its coHave you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader''s eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its coHave you ever felt worried that your party will not raise up to your guest expectations? In design, vertical rhythm is the structure that guides a reader''s eye through the content. Good vertical rhythm makes a layout more balanced and beautiful and its computer</p>', '<p><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0480174174622!2d116.1163210169151!3d-8.59138203199045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf5c2462a5ed%3A0xbc0f44d683d529b1!2sSTMIK+Bumigora+Mataram!5e0!3m2!1sid!2sid!4v1531067769618" width="600" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>', '31747824_2063516143918957_5593515559472857088_n.jpg', '31747824_2063516143918957_5593515559472857088_n1.jpg', 'http://facebook.com', 'http://instagram.com', '2018-07-15 00:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IdUser` int(10) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `HP` varchar(20) DEFAULT NULL,
  `Email` text,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Hak_Akses` enum('Admin','Penulis') NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IdUser`, `Nama`, `HP`, `Email`, `Username`, `Password`, `Hak_Akses`, `tanggal`) VALUES
(1, 'muhammad', '085338445958', 'muhammad@gmail.com', 'muhammad', '5880bb84dadfd2318acfd5a520255cd2466465ac', 'Admin', '2018-07-12 07:39:18'),
(2, 'Penulis', '-', 'penulis@gmail.com', 'penulis', 'e988e761da2a909e701e2cb8c9f77190b42166b1', 'Penulis', '2018-07-13 03:41:15'),
(3, 'lukman', 'fgf', 'lukman@gmail.com', 'orang', '33d1dc7c53f3ea2e08bc6a5b9f50c7e972ff5614', 'Penulis', '2018-07-12 08:30:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`Id_Artikel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`Id_Kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`Id_Konfigurasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdUser`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `Id_Artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `Id_Kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `Id_Konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
