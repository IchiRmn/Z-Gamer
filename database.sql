-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2020 at 03:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `z-gamer`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `user_id` varchar(12) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `merch_id` varchar(12) NOT NULL,
  `merch_name` varchar(255) NOT NULL,
  `merch_price` varchar(20) NOT NULL,
  `merch_qty` int(11) NOT NULL,
  `merch_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `category`) VALUES
(1, 'Solo'),
(2, 'Squad');

-- --------------------------------------------------------

--
-- Table structure for table `category_merch`
--

CREATE TABLE `category_merch` (
  `id_mcategory` int(11) NOT NULL,
  `mcategory` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_merch`
--

INSERT INTO `category_merch` (`id_mcategory`, `mcategory`) VALUES
(1, 'Hoodie'),
(2, 'Mug'),
(3, 'T-shirt'),
(4, 'Case');

-- --------------------------------------------------------

--
-- Table structure for table `detail_inv`
--

CREATE TABLE `detail_inv` (
  `id` int(11) NOT NULL,
  `id_inv` varchar(20) NOT NULL,
  `merch_id` varchar(20) NOT NULL,
  `merch_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_inv`
--

INSERT INTO `detail_inv` (`id`, `id_inv`, `merch_id`, `merch_qty`) VALUES
(1, '13111', '1', 1),
(2, '13111', '2', 1),
(3, '13112', '1', 1),
(4, '13112', '2', 1),
(5, '13113', '1', 1),
(6, '13113', '2', 1),
(7, '13114', '2', 1),
(8, '13114', '1', 1),
(9, '13114', '3', 1),
(10, '13115', '3', 1),
(11, '13115', '2', 1),
(12, '13116', '1', 1),
(13, '13116', '2', 1),
(14, '13116', '3', 1),
(15, '13116', '4', 1),
(18, '13118', '1', 1),
(19, '13118', '2', 1),
(20, '13118', '3', 1),
(21, '13119', '1', 1),
(22, '13119', '2', 1),
(23, '13120', '1', 1),
(24, '13120', '3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `image` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `editor` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `date_created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `judul`, `image`, `isi`, `editor`, `source`, `date_created`) VALUES
(1, 'Beda Tipe-Tipe Gamers dari Cara Megang Smartfphone', 'game1.jpg', 'Bermain game esports seperti Mobile Legends, PUBG Mobile, Free Fire, Arena of Valor dan lain sebagainya memiliki teknik-teknik tertentu. Pemain tak cuma harus menguasai ilmu in-game seperti makro-mikro gameplay tapi juga mekanik alias keahlian mengoptimalkan anggota tubuh dalam bermain, terutama jari.\r\n\r\nNah, tahukah kalian? Tiap gamer punya cara berbeda memakai jari mereka saat bermain game di smartphone. Ada yang nyaman dengan 2 jari sampai yang cekatan sekali memainkan 6 jari sekaligus. Kemampuan ini sedikit banyak berpengaruh pada skill in-game keseluruhan dan tak jarang mengindikasikan kalau pemain yang lebih piawai memanfaatkan jarinya cenderung lebih skillful.\r\n\r\nYuk kita cari tahu posisi jari apa saja yang lazim digunakan gamer saat ini dan apa kelebihan dan kekurangan gaya main tersebut?\r\n\r\n- 2 Jari\r\nPosisi standar gamer pemula biasanya masih menggunakan pola 2 jari. Jempol kiri untuk kendali atau arah gerak karakter sedangkan jempol kanan berfungsi untuk tindakan seperti memukul, menembak, dan segala macam opsi yang bisa dijangkau oleh ibu jari kalian.\r\n\r\nMengandalkan dua jari saja memunculkan keterbatasan dalam bermain. Misalnya, memainkan MOBA seperti Mobile Legends mengharuskan kita memantau situasi dan kadang menandai lokasi tertentu untuk menghindari musuh atau meminta bantuan ke titik tersebut.\r\nDengan kendali 2 jempol saja kurang aduhai untuk menavigasi permainanmu apalagi dalam pertandingan berintensitas tinggi. Kalian harus cepat melihat info musuh di tab score, mengecek pembelian item, menggerakan peta dan lain hal. Pastinya, kedua jempol kalian bakal kerepotan melakukan hal tersebut.\r\nGaya 2 jari bahkan bakal lebih keteteran bila memainkan game bergenre tembak-tembakan seperti PUBG Mobile atau Free Fire karena banyaknya opsi aksi yang bisa dilakukan gamer saat bertempur.\r\n\r\n- 3 Jari\r\nKetika gamer mulai mahir dalam permainan, otomatis ia mempelajari cara untuk menambah penguasaan gerak di smartphonenya. Dari yang tadinya cuma pakai jempol, kini ia memanfaatkan telunjuk kiri (atau kanan) untuk membantu navigasi gamingnya.\r\n3 jari sudah cukup untuk gamer menguasai makro dan mikro gameplay permainan. Telunjuk bisa berfungsi untuk memperhatikan map, menggeser-geser lokasi dan lain hal. Namun gaya ini masih kurang fleksibel karena membebankan terlalu banyak beban di jari bagian kiri.\r\n\r\n- 4 Jari\r\nPosisi ini adalah yang paling balance untuk digunakan pemain casual, namun juga banyak dipakai pemain profesional. Melatih kendali empat jari memungkinkanmu menggerakan karakter lebih cepat, menguasai zona permainan lebih baik dan menjangkau fitur-fitur lain yang tak bisa dilakukan dengan hanya 2 jari.\r\n\r\nSeperti di PUBG Mobile, selain menggerakan karakter survivor, kalian harus lincah bermanuver saat menembak. Sigap memencet scope, menahan recoil sembari bergerak menghindari tembakan musuh dengan lompatan atau lean kiri-kanan. Semakin rumit cara kalian bergerak, maka makin banyak pula jari yang dibutuhkan untuk memungkinkan hal itu terjadi.\r\nPemain Mobile Legends seperti Oura pun menggunakan empat jari kala bermain. Dalam salah satu video hand cam-nya tampak jelas pembeda kecepatan tangan seorang pro player dengan pemain biasa terletak pada cara penguasaan permainan dengan gerakan empat jari yang selalu sigap melihat situasi.\r\n\r\nBONUS \r\nLazimnya, tiga posisi tersebut paling banyak digunakan gamer. Namun, ada juga yang berhasil bermain dengan enam jari menggunakan jempol, telunjuk dan jari tengah di kedua tangan sementara jari manis berfungsi menahan smartphone. Pun tak jarang mereka meletakan peralatan main mereka di meja atau di tempat rata agar tangan tak mudah lelah bermain dengan enam jari.\r\n', 'Rasna Ulita', 'http://esports.id/', '2020-06-10'),
(2, 'Andai Hero Mobile Legends Ini Punya Skill Berbeda, Bisa Jadi Meta!', 'game2.jpg', 'Di tiap musim Mobile Legends, Moonton kerap merilis update baru demi menyegarkan gameplay permainan. Salah satunya merilis hero baru yang imba atau memberikan buff dan nerf kepada hero tertentu. Tak jarang, hero yang kian terlupakan di revamp agar bisa bersaing dan menarik lagi untuk pemain.\r\nNamun, revamp ala Moonton kadang tanggung dan tak serta merta membuat hero tersebut jadi kuat. Jadi, demi meringankan beban Moonton sembari menjawab doa-doa para gamer Mobile Legends yang berharap hero pinggiran dapat ubahan skill, berikut beberapa hero yang bakal jadi meta andai punya skill seperti ini:\r\n\r\n- Balmond Cyclone Sweep Dapat Shield Atau Bonus Armor\r\nSalah satu keunggulan Balmond adalah regenerasi yang tinggi apabila berhasil mengeliminasi minion atau hero lawan. Namun, sebagai tank atau fighter, keistimewaan tersebut kadang tak berguna karena ia mudah di tekan oleh core lawan sebelum berhasil meregenerasi kesehatannya.\r\nApabila skill damage utama dari Balmond yakni Cyclone Sweep mendapat buff seperti Shield atau bonus armor, bukan tidak mungkin ia bakal mendominasi laning dengan mudah karena kemampuan bertahan hidupnya meningkat drastis. Ketiadaan efek ini jadi salah satu faktor Balmond kalah saing dengan fighter atau tank lain yang punya pelindung built-in.\r\nUranus misalnya yang punya regenerasi dan Shield kini jadi meta untuk sidelane atau tank. Atau X-Borg, Freya, Chou, Silvanna dan Badang yang semua punya efek pelindung seperti shield sampai imunitas dari crowd control.\r\n\r\n- Miya Rain of Arrows Auto Stun\r\nMiya sebenarnya marksman yang berbahaya. Attack speednya yang tinggi dan bisa menyelinap ke garis pertahanan lawan dengan skill Turbo Stealth menjadikannya sosok core yang unik. Hanya saja, Miya lemah dalam laning karena tak punya skill disable mumpuni.\r\nSatu-satunya andalan Miya dalam men-zoning lawan adalah Rain of Arrows yang sepele. Skill ini mudah dihindari, tak memiliki damage besar serta tak mencakup area luas. Andai saja Rain of Arrows memberikan efek auto stun lalu diikuti dengan movement speed slow kepada lawan, maka skill ini bakal sangat berbahaya.\r\nTentu, buff ini diperlukan andai Moonton berencana membawa Miya kembali jadi prioritas pick di Land of Dawn.\r\n\r\n- Tigreal Kecepatan Blink Sacred Hammer Ditingkatkan\r\nHampir semua hero mobile Legends punya kemampuan dash atau blink yang berfungsi untuk mengejar musuh atau kabur dari serangan. Tigreal pun punya skill tersebut yang bernama Sacred Hammer. Skill ini mendorong Tigreal ke depan  lalu menghujam pedang raksaksanya ke atas untuk knock-up musuh.\r\n\r\nSatu kelemahannya, dibanding hero lain yang punya skill blink, movement dari Sacred Hammer sangat lambat. Tambah lagi, radius pergerakannya pendek dengan cooldown yang terhitung agak panjang dibanding skill blink hero lain. Andai saja Sacred Hammer memiliki movement speed yang lebih tinggi, kira-kira secepat Soul Lock Balmond, maka Tigreal memungkinkan untuk jadi tanker andalan.\r\nLambatnya Sacred Hammer kadang membuat inisiasi Tigreal percuma karena mudah dihindari, bahkan musuh masih sempat blink ketika Tigreal ingin kombo Sacred Hammer plus Implosion.\r\n\r\n- Faramis Bisa Mencegah Kematian\r\nFaramis cukup unik karena mampu membangkitkan rekan yang tumbang. Sayang, tak semua pemain ML suka dengan keunikan tersebut. Faramis tampaknya perlu sebuah buff agar membuatnya jadi pertimbangan di posisi support. \r\nSelain berharap dari Cult Altar yang membangkitkan teman selama 10 detik setelah tewas, ia perlu skill yang mencegah musuh dari kematian. Bila temannya atau dia berada dama efek tersebut, hero tak dapat mati sampai durasi skill habis. Hero yang berada dalam status perlindungan Faramis masih bisa melakukan heal dan lifesteal untuk menambah darah mereka sehingga bisa kembali ke pertempuran usai diselamatkan oleh Faramis.\r\nTerdengar cukup kuat bukan skill andai-andai ini?\r\n\r\n- Lesley Ultimate Snipe Instant Kill Musuh Dengan Darah Minimal 20%\r\nMengusung konsep sniper yang mematikan dari jarak jauh, Lesley perlu waktu dan farm cukup agar ultimatenya punya kerusakan signifikan ke musuh. Belum lagi, ia seperti mempermalukan peran sniper yang cuma perlu satu kali tembak untuk membunuh musuh, sedangkan ulti Lesley sampai memuntahkan 4 kali peluru.\r\nKonsep terbaru versi Esports.ID, sebaiknya Lesley hanya mengeluarkan sekali saja tembakan, namun instant kill bila musuh mencapai threshold atau batas darah 20%. Ini agar membedakan dengan MM lain yang juga punya ultimate jarak jauh seperti Granger dan Kimmy, keduanya bahkan bisa menguras setengah darah dalam sekali tembakan.\r\n\r\nApakah musuh masih bisa menghalangi arah kekeran Lesley? Ya, tapi peluru akan menembus dan efek damage Ultimate Snipe akan dikurangi 3% per hero yang memblok tembakan tersebut.\r\nItu dia beberapa skill yang diharapkan bisa jadi kenyataan, apakah kamu setuju atau punya pendapat lain Sobat Esports?', 'Rasna Ulita', 'http://esports.id/', '2020-06-10'),
(3, '6 Hero Mobile Legends Paling Nyebelin di S16, Bikin Auto-Lose!', 'game3.jpg', '11 hari menuju pergantian season Mobile Legends, di musim ke-16 ada banyak hero meta baru bermunculan dan beberapa lainnya bangkit kembali setelah lama tersingkirkan. Perubahan Moonton kepada hero tersebut memberikan buff dan penyesuaian yang bikin mereka jadi hero-hero paling nyebelin di Mobile Legends.\r\n\r\nKira-kira, hero apa yang paling males kamu lawan dan apa alasannya? Esports.ID punya pilihan sendiri hero-hero Mobile Legends paling nyebelin di Season 16!\r\n\r\n- Tank : Uranus\r\n\r\nHero yang awalnya disepelakan ini jadi meroket karena MPL Season 5 mengorbitkannya jadi sidelaner. Kemampuan regenerasi kelewatan dari Uranus membuat musuh perlu usaha ekstra menundukannya.\r\n\r\nDengan item core yang minimalis saja Uranus bisa menciptakan kekacauan di pertahanan lawan. Ia mampu mencuri buff di level awal, memotong creep sampai ke dalam markas musuh dan menerima berbagai macam jurus tanpa khawatir bakal kehabisan darah.\r\n\r\nDalam pertarungan 1 lawan 1, rasanya bisa dipastikan kalau Uranus adalah tank terkuat diantara semua tank yang ada.\r\n\r\n- Marksman : Claude\r\n\r\nLincah, cekatan, berdamage tinggi adalah satu kata yang membuat Claude begitu menyebalkan. Bila komposisi timmu tak punya disable baik, rasanya tak mungkin seorang Claude bisa mati. Terlebih Claude jaman sekarang mengantongi banyak item cooldown reduction, ia bisa maju-mundur ngekill tanpa butuh waktu lama.\r\n\r\n- Assassin : Hanzo\r\nNinja Akakage ini bukan lagi hero pengecut yang lari terbirit-birit kalau dikejar musuh. Kemampuannya berpindah tempat dengan bayangannya membuat Hanzo salah satu assassin terlicin dan paling sulit dibunuh.\r\n\r\nHanzo sempat ditinggalkan karena begitu lemah dan butuh terlalu banyak item agar bisa jadi ancaman. Kini, cuma bermodal Raptor Machete, sepatu cooldown dan Blade of Heptaseas, ia sudah sulit dihentikan. Beberapa pemain bahkan membeli item-item tanky seperti Queen\'s Wings atau Thunder Belt agar Kinjutsu: Pinnacle Ninjanya makin merepotkan. Tak ayal, hero ini kian laris jadi langganan ban.\r\n\r\n- Mage : Valir\r\n\r\nSatu lagi langganan ban yang wajib kalian benci adalah Valir. Hero penyembur api ini paling bikin gemes apalagi kalau kamu apes berhadapan dengannya satu lawan satu.\r\nValir adalah momok paling menyebalkan untuk initiator. Kemampuan mereka untuk melompat ke arah musuh jadi sia-sia karena efek knockback dari skill Searing Torrent. Belum lagi hero yang terjebak dalam jeratan Burst Fireball. Jurus lengket dan menyakitkan ini jadi senjata utama Valir mengumpulkan kill demi kill dari para pemain sok tahu yang mencoba melawan Valir sendirian.\r\n\r\n- Support : Aurora\r\nAurora adalah hero yang cuma dipakai dalam situasi tertentu saja. Beruntunglah kita semua karena hero ini tidak pernah menjadi meta. Bayangkan, damage yang begitu tinggi mampu menginstant kill banyak musuh sekaligus. Bahkan, bantuan battle spell Purify saja tak menolong banyak kalau terciduk sergapan Aurora lebih dulu.\r\nKalian tak perlu sulit-sulit untuk memburu MM lawan seberapapun kaya dan penuh itemnya. Asal sobat Esports tahu titik-titik penting pergerakan musuh, maka kalian bisa menghabisi core lawan dengan mudah seperti yang ditunjukan RRQ.VYN saat grand final MPL S5 beberapa waktu lalu.\r\n\r\n- Fighter : Alucard\r\n\r\nNah, kalau ini nyebelin bukan karena heronya kuat, tapi biasanya ketemu user Alucard pasti bikin auto-lose. Entah kerjaannya ngehabisin buff tapi ngga pernah war, atau farm terus tapi ngga ambil turret, bahkan sudah bukan rahasia kalau user Alucerd malah sengaja maju sendiri ketika tim sudah rata oleh musuh.\r\n\r\nAlucard sejatinya hero yang bagus, dalam situasi tertentu ia bisa berubah jadi senjata tak terhentikan. Hanya saja, mindset dari para pemain Alucard rasanya sering menyimpang dan berujung pada beban untuk tim\r\n\r\nNah kalau Sobat Esports paling kesel sama hero apa?', 'Rasna Ulita', 'http://esports.id/', '2020-06-10'),
(4, 'Tim Baru Dendi Akhiri Rekor Lose Streak 3 Bulannya!', 'game4.jpg', 'Akhirnya, tim DOTA 2 Dendi merasakan kemenangan. B8 yang sudah merana dibantai lawan tiga bulan lamanya berhasil mengecap kemenangan pertama di kualifikasi Europe/CIS turnamen Beyond Epic.\r\n\r\nDiumumkan kemarin, tim baru Dendi sempat tumbang di match pertama kualifikasi kontra Vikin.GG. Setidaknya, B8 memberikan perlawanan sengit yang jadi indikasi positif potensi tim baru B8. Lampu sorot perlu ditujukan untuk performa Crystallis sebagai carry yang tampil apik dalam laning dan mencari kill.\r\n\r\nBaru pada laga kedua lawan FlyToMoon 2.0 pasukan Dendi tampil mengesankan. Mendominasi early game sembari menjaga kerjasama tim guna menyapu bersih FlyToMoon 2.0 dengan skor 2-0. Hasil ini praktis mengakhiri 26 kali kekalahan profesional B8 yang jadi rekor terpanjang sejauh ini.\r\n\r\nDendi dan tim masih dibayangi roman eliminasi. Meraka wajib melalui decider match dengan kemenangan agar harapan baik tetap terjaga. Laga penentuan mereka di closed qualifier Beyond Epic menanti hasil pertandingan Cyber Legacy melawan Viking.GG.\r\n\r\nDari hasil ini rasanya buah keputusan tepat dari Dendi. Mempercayakan pemain baru yang butuh ajang pembuktian ketimbang memilih pemain-pemain jadi yang minim loyalitas.\r\n\r\nMampukah Dendi dan B8 lolos ke playoff kualifikasi Beyond Epic Europe/CIS?', 'Rasna Ulita ', 'http://esports.id/', '2020-06-10'),
(5, 'Direktur Esports Tencent Bersikeras Helat Kejuaraan Dunia PUBG Mobile', 'game5.jpg', 'Pandemi COVID-19 memberi pengaruh pada aktivitas masyarakat global termasuk ranah hiburan dan olahraga seperti esports. PUBG Mobile, sebagai salah satu game esports populer di dunia telah mempersiapkan rencana besar untuk kompetisi para pemain yang sayangnya harus terhambat oleh virus Corona.\r\n\r\nNamun, direktur esports PUBG Mobile dari Tencent Games, James Yang bersikeras ia tak akan membatalkan kejuaraan dunia PUBG Mobile atau World League. Dalam wawancaranya kepada Dotesports, Yang berbicara mengenai dampak pandemi dan nasib dari proyeksi turnamen PUBG Mobile saat ini.\r\n\r\nSeperti kita ketahui, PUBG Mobile telah menyiapkan sebuah ekosistem esports yang terdiri dari beberapa turnamen regional untuk para amatir, semi-pro dan profesional. Sebagai pelengkap dari PMCO, telah dicanangkan juga turnamen Pro Leagues dan World Leagues sebagai puncak dari musim kompetisi PUBG Mobile.\r\n\r\nYang masih menganalisa situasi dunia saat ini yang terdampak pandemi. Beberapa turnamen seperti PMPL Americas dan Asia Tenggara di ubah format menjadi online turnamen. Sayangnya, untuk turnamen sekelas PUBG Mobile World Championship 2020, memaksakan online event akan sangat berpengaruh pada stabilitas turnamen.\r\n\r\nMasalah baru akan muncul seperti gangguan jaringan antar peserta. Namun Yang enggan mengambil kesimpulan lebih dulu dan membatalkan World League. \"Kami benar-benar mencoba sekeras mungkin untuk mewujudkan World League ketimbang membatalkan event itu tanpa berusaha,\" tutur Yang.\r\n\r\nYang mengatakan pihaknya belum mengubah jadwal kegiatan untuk paruh kedua tahun 2020 meski sudah ada penundaan turnamen namun semua masih mengikuti rencana yang dipersiapkan. Tencent juga sudah menyiapkan plan B andai kata situasi pandemi tak kunjung reda sampai Desember di mana PUBG Mobile World Championship akan dilaksanakan.\r\n\r\nSemoga ada jalan keluar untuk Tencent dan PUBG Mobile agar kita bisa menyaksikan pemain terbaik PUBG Mobile bertanding di kejuaraan dunia nanti ya Sobat Esports.', 'Rasna Ulita ', 'http://esports.id/', '2020-06-10'),
(7, 'Lorem ipsum dolor sit', 'news1593777186.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'admin', 'www.karee.com', '2020-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` varchar(12) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_inv` varchar(255) NOT NULL,
  `qty_merch` int(11) NOT NULL,
  `total_merch` varchar(255) NOT NULL,
  `country_inv` varchar(255) NOT NULL,
  `city_inv` varchar(255) NOT NULL,
  `postcode_inv` varchar(255) NOT NULL,
  `date_inv` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `id_user`, `username`, `email_inv`, `qty_merch`, `total_merch`, `country_inv`, `city_inv`, `postcode_inv`, `date_inv`) VALUES
('13111', 35, 'darkeru', 'dark@gmail.com', 2, '100', '2', 'new york', '12421', '2020-06-14 14:06:40'),
('13112', 35, 'darkeru', 'dark@gmail.com', 2, '95', '3', 'new york', 'saff', '2020-06-14 14:06:24'),
('13113', 35, 'darkeru', 'dark@gmail.com', 2, '105', '1', 'new york', 'asd', '2020-06-14 15:06:25'),
('13114', 35, 'darkeru', 'dark@gmail.com', 3, '135', '1', 'new york', '12421', '2020-06-16 11:06:36'),
('13115', 35, 'darkeru', 'dark@gmail.com', 2, '85', '1', 'new york', '12421', '2020-06-16 14:06:29'),
('13116', 35, 'darkeru', 'dark@gmail.com', 4, '145', '1', 'new york', '12421', '2020-06-16 14:06:27'),
('13118', 35, 'darkeru', 'dark@gmail.com', 3, '130', '2', 'new york', '12421', '2020-06-17 06:06:57'),
('13119', 35, 'darkeru', 'dark@gmail.com', 2, '105', '1', 'new york', '1245', '2020-06-17 08:06:58'),
('13120', 39, 'Bambang S', 'bambang@gmail.com', 2, '105', '3', 'tokyo', '9989', '2020-07-03 13:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `merchan`
--

CREATE TABLE `merchan` (
  `id_merch` int(11) NOT NULL,
  `name_merch` varchar(255) NOT NULL,
  `price_merch` varchar(20) NOT NULL,
  `category_merch` int(11) NOT NULL,
  `stock_merch` int(12) NOT NULL,
  `store_merch` varchar(255) NOT NULL,
  `image_merch` text NOT NULL,
  `desc_merch` text NOT NULL,
  `date_merch` varchar(128) NOT NULL,
  `fyi_merch` text NOT NULL,
  `tac_merch` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchan`
--

INSERT INTO `merchan` (`id_merch`, `name_merch`, `price_merch`, `category_merch`, `stock_merch`, `store_merch`, `image_merch`, `desc_merch`, `date_merch`, `fyi_merch`, `tac_merch`) VALUES
(1, 'Black Hoodie PUBG (M/L/XL)', '50.00', 1, 50, 'KL Store', 'pict1.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat', '12/12/2020', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.'),
(2, 'MUG PUBG Helmet Waterproof', '20.00', 2, 60, 'OS STORE', 'pict5.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', '12/12/2020', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.'),
(3, 'Dark Blue T-Shirt PUBG (M/L/XL)', '30.00', 3, 90, 'KL Store', 'pict4.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', '12/12/2020', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.'),
(4, 'Phone Hardcase PUBG', '10.00', 4, 70, 'KL Store', 'pict6.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', '12/12/2020', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.'),
(8, 'Jacket Chicken Dinner', '20.00', 1, 80, 'KL Store', 'shop3.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', '15/06/2020', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.'),
(11, 'T-Shirt Evolution Gamer', '30.00', 3, 90, 'KL Store', 'shop5.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', '15/06/2020', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.'),
(12, 'MUG REX REGUM QEON', '38.00', 2, 90, 'OS STORE', 'shop6.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', '12/12/2020', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.'),
(13, 'MUG VICTIM', '38.00', 2, 90, 'OS STORE', 'shop7.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', '12/12/2020', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.'),
(14, 'Phone Hard Case Bape PUBG', '40.00', 4, 90, 'OS STORE', 'shop8.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', '12/12/2020', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.');

-- --------------------------------------------------------

--
-- Table structure for table `regist`
--

CREATE TABLE `regist` (
  `id_regist` varchar(12) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_solo` varchar(12) NOT NULL,
  `id_squad` varchar(12) NOT NULL,
  `date_regist` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regist`
--

INSERT INTO `regist` (`id_regist`, `id_user`, `id_solo`, `id_squad`, `date_regist`) VALUES
('03072020006', 39, '11004', '', '2020-07-03 13:07:46'),
('05062020001', 35, '11001', '', '2020-06-05 16:06:20'),
('05062020002', 35, '', '12001', '2020-06-05 16:06:05'),
('05062020003', 35, '11002', '', '2020-06-05 16:06:44'),
('17062020004', 35, '11003', '', '2020-06-17 08:06:44'),
('17062020005', 35, '', '12002', '2020-06-17 08:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id_ship` int(11) NOT NULL,
  `direction` varchar(255) NOT NULL,
  `ship_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id_ship`, `direction`, `ship_rate`) VALUES
(1, 'US', 35),
(2, 'UK', 30),
(3, 'Japan', 25),
(4, 'Indonesia', 15);

-- --------------------------------------------------------

--
-- Table structure for table `solo`
--

CREATE TABLE `solo` (
  `id_solo` varchar(12) NOT NULL,
  `id_user` varchar(12) NOT NULL,
  `email` varchar(128) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `country_sl` varchar(255) NOT NULL,
  `city_sl` varchar(255) NOT NULL,
  `phone_sl` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solo`
--

INSERT INTO `solo` (`id_solo`, `id_user`, `email`, `id_tour`, `fullname`, `dob`, `country_sl`, `city_sl`, `phone_sl`) VALUES
('11001', '35', 'dark@gmail.com', 1, 'gajah', '2020-06-16', 'Jingan', 'Keera', '0002223'),
('11002', '35', 'dark@gmail.com', 1, 'kaki', '2020-06-11', 'Jingan', 'Puri', '02323432'),
('11003', '35', 'dark@gmail.com', 1, 'Misma', '2020-06-18', 'Brazil', 'Bogor', '0002223'),
('11004', '39', 'bambang@gmail.com', 2, 'Bambang', '2020-07-10', 'Indonesia', 'Bekasi', '08888888');

-- --------------------------------------------------------

--
-- Table structure for table `squad`
--

CREATE TABLE `squad` (
  `id_squad` varchar(11) NOT NULL,
  `id_user` varchar(12) NOT NULL,
  `email` varchar(128) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `team` varchar(255) NOT NULL,
  `name_off` varchar(255) NOT NULL,
  `email_off` varchar(255) NOT NULL,
  `phone_off` varchar(255) NOT NULL,
  `country_sq` varchar(255) NOT NULL,
  `city_sq` varchar(255) NOT NULL,
  `logo` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `squad`
--

INSERT INTO `squad` (`id_squad`, `id_user`, `email`, `id_tour`, `team`, `name_off`, `email_off`, `phone_off`, `country_sq`, `city_sq`, `logo`) VALUES
('12001', '35', 'dark@gmail.com', 3, 'lonte', 'lontek', 'lontek@gmail.com', '0002223', 'Jingan', 'Keera', 'img1591366085.png'),
('12002', '35', 'dark@gmail.com', 3, 'RRQ', 'Kardi', 'kardi@gmail.com', '0822321234', 'Indonesia', 'Bekasi', 'img1592374864.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `id_tour` int(11) NOT NULL,
  `name_tour` varchar(255) NOT NULL,
  `game_tour` varchar(128) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `organizer` varchar(255) NOT NULL,
  `date_tour` varchar(128) NOT NULL,
  `description_tour` text NOT NULL,
  `image_tour` varchar(255) NOT NULL,
  `date_` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`id_tour`, `name_tour`, `game_tour`, `id_categories`, `organizer`, `date_tour`, `description_tour`, `image_tour`, `date_`) VALUES
(1, 'GeForce GALAX PUBG ATTACK', 'PUBG', 2, 'Asus GeForce', '2021-06-30', '• Dilarang keras melakukan TEAMING atau BEKERJASAMA dengan tim lain. Apabila ditemukan, maka tim tersebut akan di diskualifikasi.<br>\r\n• Seluruh peserta dilarang menggunakan/memanfaatkan BUG.<br>\r\n• Seluruh peserta dilarang menggunakan/memanfaatkan segala jenis program ilegal/cheat/hack tools apapun. Apabila ditemukan, maka tim tersebut akan di diskualifikasi.<br>\r\n• Bila ditemukan pelanggaran sebagaimana yang telah disebutkan pada point nomor 3, maka:<br>\r\no Bila ditemukan satu kali menggunakan bug dengan disengaja maupun tidak, maka akan mendapatkan pengurangan poin di ronde tersebut sebesar 50% (dibulatkan keatas).<br>\r\no Bila ditemukan dua kali menggunakan bug dengan disengaja maupun tidak, maka tim tersebut akan langsung di diskualifikasi.<br>', 'tournament1.jpg', '2020-06-10'),
(2, 'FurNaments Clash Royal', 'Clash Royal', 1, 'FuNaments', '2021-07-23', '(CASH PRIZES AND ENTRY FEE! We Know a lot of you may not want to enter if there is few people and I wouldn\'t either, but if nobody enters then we can\'t raise the prizes so please enter if you want to play and you can get a refund if you don\'t think enough people joined by the time the tournament starts also if you DM me I will give you the code for free and you just have to pay at least 10 minutes before the tournament starts, this is so that I don\'t have to refund too many people) Hello everyone welcome to the FUNaments Clash Royale tournament.', 'tournament2.jpg', '2020-06-10'),
(3, 'MGA League of legend 1v1 #2', 'League of Legends', 1, 'www.oke.com', '2021-05-18', 'This competition is not affiliated with or sponsored by Riot Games, Inc. or LoLEsports.\r\nGet ready for a fight and join us for the MGA 1v1 League Of Legends showdown on the Rift, with $140 in prizing available for our top three players.\r\nWant to snag some extra prizing? Get involved in the MSI Rewards Program.. giving you the opportunity to cash out items from $50 in value all the way up to a GF65 Thin Laptop. Learn more on the MGA USA League portal.\r\nNeed help finding some team mates for our 5v5 series? Get involved in the Official MGA USA League Discord and find your next squad now!', 'tournament3.jpg', '2020-06-10'),
(4, 'The Burning Bridge 1v1 ARAM #12', 'The Burning Bridge', 1, 'BridgeNews', '2021-04-10', 'The Burning Bridge - Daily ARAM Tournaments\r\n\r\nTOURNAMENT SETTINGS :\r\n\r\nMatch Type : Best of 1 - Single Elimination. (Play until the nexus down)\r\nGame Region : EU Nordic & East.\r\nTeam Size : 1v1.\r\nGame Map : Howling Abyss.\r\nGame Type : All Random.\r\nCheck In Timers : 30min before registration close, 5min Match Check In.\r\n\r\nHowling Abyss has a pretty cool bridge, Set it on fire, warriors !!\r\n', 'tournament5.png', '2020-06-10'),
(5, 'Black Lives Mater – Stream For Change – Pharmercy Tournament', 'Black Lives Mater', 2, 'Pharmercy Tournament', '2021-08-15', 'This is a tournament happening as part of the Black Lives Matter - Stream For change event hosted by EclYpse Esports and its Partners.\r\nWith that being said, sign up in duos in an attempt to triumph over all other Pharamercies!\r\nKeep up with the event on Twitter and join our Discord if you have any questions!\r\n\r\n\r\n', 'tournament4.png', '2020-06-10'),
(6, 'CRISIS BEATTLE-CUP TOURNAMENT', 'Crisis', 2, 'Algerien', '2021-07-14', 'Algerien tournament for League Of Legends the tournament will be a 5v5 game (summoners rift tournament draft)\r\nRules :\r\n-To join the tournament u need to come to the discord and talk to the admins to get a code\r\nTeams need to be consist of 5 members\r\n\r\n-Teams who get late for the game get a condition time (15min) if they won\'t show up before that time they will be discalified from the tournament\r\n\r\n-each team has 15min pause in the whole game for 3 times only\r\n\r\n-Bans are allowed for all the games of the tournamant\r\n\r\n-Teams must be in our discord server\r\n', 'tournament4.jpg', '2020-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `image`, `role_id`, `is_active`, `date_created`) VALUES
(29, 'admin', 'admin@gmail.com', '$2y$10$wG9qUkivWwPyuSEzToGxPeAVtBACWWqyhGmQd4Iir28BvVtfOhVVO', 'pro1593634597.jpg', 1, 1, '2020-06-30'),
(31, 'Kang Maman', 'maman@gmail.com', '$2y$10$vqvVEs8zWWm0aAikiJ0l/uIAYRfp3GsUUKT6ylkJtHo/jEFjEVMli', 'default.jpg', 2, 1, '2020-07-01'),
(32, 'Jarwo Lemah', 'jarwo@gmail.com', '$2y$10$qcz0SF4obwGR/LxPGe1Z4.h.Bwzm86w5UQgNvkfs9iLpm6LfxqXF2', 'default.jpg', 2, 1, '2020-07-01'),
(34, 'Berang-Berang', 'berang@gmail.com', '$2y$10$SMiQLLe.d5ep9syG0D6QieHT60kqraT7oD2SDXEa9X2w8FWXRqFA.', 'default.jpg', 2, 1, '2020-07-01'),
(35, 'Dark-sama', 'dark@gmail.com', '$2y$10$oXOzcrmpE.ZQJvX0q1fBLOrrG4w9Wp0UjQ0mkZ2Q6bEJ7g2x8PL/6', 'pro1593606999.png', 2, 1, '2020-07-01'),
(36, 'Batu Keramat', 'keramat@gmail.com', '$2y$10$0ypHT9ZGDyouZ9zW/AF6i.1SwimbvoYmXj.FFLKJD24VfzypnBlGa', 'default.jpg', 2, 1, '2020-07-01'),
(37, 'Kuping Biawak', 'biawak@gmail.com', '$2y$10$vWeyNA/WgkhOWlRpUoa3bOeV26PzYeFqRvmoXd3/HFX68swrQNrSy', 'default.jpg', 2, 1, '2020-07-01'),
(39, 'Bambang S', 'bambang@gmail.com', '$2y$10$zPxP2h5Z7wPe07/iGcNM1OAFyRzH.IzvnqF3tz2Fr/pueqDbjmGo.', 'pro1593776423.png', 2, 1, '2020-07-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `detail_inv`
--
ALTER TABLE `detail_inv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `merchan`
--
ALTER TABLE `merchan`
  ADD PRIMARY KEY (`id_merch`);

--
-- Indexes for table `regist`
--
ALTER TABLE `regist`
  ADD PRIMARY KEY (`id_regist`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id_ship`);

--
-- Indexes for table `solo`
--
ALTER TABLE `solo`
  ADD PRIMARY KEY (`id_solo`) USING BTREE;

--
-- Indexes for table `squad`
--
ALTER TABLE `squad`
  ADD PRIMARY KEY (`id_squad`) USING BTREE;

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`id_tour`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_inv`
--
ALTER TABLE `detail_inv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `merchan`
--
ALTER TABLE `merchan`
  MODIFY `id_merch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tournament`
--
ALTER TABLE `tournament`
  MODIFY `id_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
