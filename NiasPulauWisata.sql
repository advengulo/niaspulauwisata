-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 29 Jul 2018 pada 02.23
-- Versi Server: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.2.7-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NiasPulauWisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acaradanfestivals`
--

CREATE TABLE `acaradanfestivals` (
  `id` int(10) UNSIGNED NOT NULL,
  `acaradanfestival_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_id` int(10) UNSIGNED NOT NULL,
  `acaradanfestival_gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acaradanfestival_lokasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acaradanfestival_tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `acaradanfestivals`
--

INSERT INTO `acaradanfestivals` (`id`, `acaradanfestival_name`, `artikel_id`, `acaradanfestival_gambar`, `acaradanfestival_lokasi`, `acaradanfestival_tanggal`, `created_at`, `updated_at`) VALUES
(1, 'Festival Ya\'ahowu 2018', 56, '/img/img-acaradanfestival/1532496231.jpg', 'Nias Selatan', '2018-11-16', '2018-07-24 22:23:51', '2018-07-24 22:23:51'),
(2, 'Acara Maha Karya Ono Niha II', 57, '/img/img-acaradanfestival/1532496508.jpg', 'Yogyakarta', '2018-06-16', '2018-07-24 22:28:28', '2018-07-24 22:28:28'),
(3, 'Festival dan Lomba Surfing', 58, '/img/img-acaradanfestival/1532496749.jpg', 'Nias Selatan', '2018-11-16', '2018-07-24 22:32:29', '2018-07-24 22:32:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikels`
--

CREATE TABLE `artikels` (
  `id` int(10) UNSIGNED NOT NULL,
  `artikel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artikels`
--

INSERT INTO `artikels` (`id`, `artikel`, `created_at`, `updated_at`) VALUES
(25, 'Lompat batu atau Fahombo adalah kesenian tradisional nias yang sangat terkenal bahkan mendunia, lompat batu juga dianggap sebagai icon dari pulau nias dan menjadi logo nias selatan.\r\n\r\nmenurut rumor yang beredar lompat batu adalah simbol dari kehebatan dan kedewasaan, jadi bagi siapa yang bisa melompati susunan batu tersebut di anggap siap berperang untuk membela desa dan siap untuk menikah.\r\n\r\nKabar lainnya mengatakan Sejarah lompat adalah salah satu konversi dari ritual adat nias kuno yang menakutkan sebelum masuknya Agama.\r\n\r\nWalaupun kesenian lompat batu memiliki sejarah yang kelam, Tapi antraksi lompat batu ini menjadi salah satu daya tarik wisatawan apabila berlibur kenias.\r\n\r\nDemikianlah Ulasan singkat tentang adat istiadat dan kebudayaan suku nias, bila ada yang kurang atau ingin ditambahkan silahkan berikan komentar anda\r\n\r\nMungkin Anda Juga Perlu Baca:\r\n\r\n    Burung Beo Nias sudah punah?\r\n    10 Tempat wisata di Pulau Nias\r\n    Keunikan Bahasa Daerah Suku Nias\r\n    Kepercayaan Suku Nias kuno\r\n    Situs atau Website Hasil Karya Anak Nias \r\n\r\n←  Selanjutnya Sebelumnya  → Home\r\n0 komentar:\r\n\r\nPost a Comment\r\n\r\nDilarang keras memberikan komentar yang tidak sesuai dengan Topik atau berbau isu sara, Pornografi, Judi, dan menyertakan link yang tidak terkait dengan artikel, Terimakasih.\r\n\r\n    Popular\r\n    Blog Archives\r\n    Tags\r\n\r\n    Download 20 Lagu Barat Terbaik\r\n    Download full album nike ardilla\r\n    Download 20 lagu nias terbaik part1\r\n    Tari Tradisional Nias\r\n    Asal Usul Marga Nias\r\n    Adat Istiadat dan Kebudayaan nias\r\n    Download Lagu Terbaru Nias 2017\r\n    Daftar Marga yang ada di Nias\r\n    Alat Musik Tradisional Suku Nias\r\n    Kumpulan Dongeng atau Cerita Rakyat Nias\r\n\r\nIngin Berlangganan Artikel Gratis!\r\n	\r\nAdvertising', '2018-07-20 04:26:01', '2018-07-24 13:06:27'),
(28, '<p>Maena adalah jenis lagu rakyat yang disertai tarian. Pada mulanya maena ditarikan oleh kaum wanita, sedangkan untuk kaum pria adalah jenis musik lain ialah folaya. Kini maena telah berkembang dalam arti bahwa yang menarikan tidak hanya kaum wanita saja tetapi juga kaum pria.</p>\r\n\r\n<p>Maena merupakan sebuah tarian yang sangat mudah dan sederhana, tetapi mengandung makna kebersamaan, kegembiraan, kemeriahan, yang tak kalah menariknya dengan tarian-tarian yang ada di Nusantara.</p>\r\n\r\n<p><a href="https://sisteminformasipulaunias.files.wordpress.com/2014/10/maena.jpg"><img alt="maena" src="https://sisteminformasipulaunias.files.wordpress.com/2014/10/maena.jpg?w=300&h=198" style="height:198px; width:300px" /></a></p>\r\n\r\n<p>Tari Maena</p>\r\n\r\n<p>Dibandingkan dengan tari baluse/tari perang, maena tidak memerlukan keahlian khusus. Gerakannya yang sederhana telah membuat hampir semua orang bisa melakukannya. Kendala atau kesulitan satu-satunya adalah terletak pada rangkaian pantun-pantun maena (fanutunõ maena), supaya bisa sesuai dengan event dimana maena itu dilakukan. Pantun maena (fanutunõ maena) biasanya dibawakan oleh satu orang atau dua orang dan disebut sebagai sanutunõ maena, sedangkan syair maena (fanehe maena) disuarakan oleh orang banyak yang ikut dalam tarian maena dan disebut sebagai sanehe maena/ono maena. Syair maena bersifat tetap dan terus diulang-ulang/disuarakan oleh peserta maena setelah selesai dilantunkannya pantun-pantun maena, sampai berakhirnya sebuah tarian maena. Pantun maena dibawakan oleh orang yang fasih bertutur bahasa Nias (amaedola/duma-duma).</p>\r\n\r\n<p>Seiring oleh perkembangan peradaban yang semakin canggih dan moderen, pantun-pantun maena yang khas li nono niha (disyairkan dalam bahasa Nias) sudah banyak menghilang, bahkan banyak tercampur oleh bahasa Indonesia dalam penuturannya. Hal ini bisa kita dengarkan kalau ada acara-acara maena di kota-kota besar. Maena boleh dibilang sebuah tarian seremonial dan kolosal dari Suku Nias, karena tidak ada batasan jumlah yang boleh ikut dalam tarian ini. Semakin banyak peserta tari maena, semakin semangat pula tarian dan goyangan (fataelusa) maenanya.</p>', '2018-07-24 12:49:58', '2018-07-24 13:05:38'),
(29, '<p>Selain memiliki kekayaan alam menawan menghiasi darat dan lautnya, Pulau Nias juga dibingkai dengan seni budaya yang patut untuk dinikmati. Pulau yang terletak sekira 85 mil dari Sibolga ini merupakan kepulauan yang diisi pulau-pulau kecil dan dikelilingi Samudera Hindia. Pulau Nias terbagi dalam empat kabupaten yaitu Nias Selatan, Nias Utara dan Nias Barat.</p>\r\n\r\n<p>Kesenian atau tradisi Pulau Nias yang mungkin sudah menjadi identitas langsung Suku Nias adalah tradisi <em>Hombo Batu</em> atau yang lebih dikenal dengan <a href="http://www.indonesia.travel/id/destination/730/pulau-nias/article/137/tradisi-lompat-batu-di-pulau-nias" target="_blank"><strong>Lompat Batu Nias.</strong></a> Identitas ini kemudian menjadi barang dagangan utama pariwisata Pulau Nias karena selain menawarkan keunikan dan ketangkasan, tradisi ini juga sudah berusia tua sehingga patut untuk dilestarikan. Di Nias Selatan tradisi Lompat Batu Nias selalu dipertunjukan bersamaan dengan Tari Fataele. Tari Fataele merupakan seni tari khas Nias Selatan.</p>\r\n\r\n<p><a href="https://sisteminformasipulaunias.files.wordpress.com/2014/10/tari-perang-1.jpg"><img alt="tari perang 1" src="https://sisteminformasipulaunias.files.wordpress.com/2014/10/tari-perang-1.jpg?w=300&h=198" style="height:198px; width:300px" /></a></p>\r\n\r\n<p>Tari Fataele tidak bisa dipisahkan dengan tradisi Lompat Batu Nias, karena lahirnya berbarengan dengan tradisi Homo Batu. Dahulu kala Suku Nias sering berperang antarkampung. Biasanya pemicu perang adalah perebutan lahan atau bahkan merebut kampung orang lain.</p>\r\n\r\n<p>Seperti halnya sistem kepemimpinan kampung yang dipimpin seorang kepala desa atau kepala suku, dahulu setiap kampung di Nias juga dipimpin oleh seorang kepala suku yang disebut <em>Si’ulu</em> yang berarti bangsawan. Kemungkinan setiap kepala suku di setiap desa merupakan keturunan bangsawan. Uniknya seiring dengan perkembangan zaman, sistem kepemimpinan ini masih tetap ada di setiap kampung Teluk Dalam.</p>\r\n\r\n<p>Akhirnya untuk mempertahankan kekuasaan dan kampungnya dari serangan penduduk kampung lain, setiap Si’ulu berinisiatif mengumpulkan pemuda desa untuk dilatih perperang. Jenis latihan yang diberikan oleh <em>Si’ulu</em> adalah dengan melatih kemampuan <em>Lompat Batu “Hombo Batu”</em> para pemuda. Jika mereka mampu menaklukkan batu setinggi 2 meter berbentuk prisma yang dibentuk dari tumpukan batu tersebut maka mereka dinggap mampu untuk membela dan mempertahankan kampung mereka. Jadi secara tidak langsung tradisi Lompat Batu ini terlahir dari konflik perang yang terjadi antar kampung. Untuk merayakan kelulusan pemuda dari ujian tersebut, Si’ulu akan mengadakan pesta dengan memotong babi dan kemudian diikuti dengan pengumuman pada warga kampung mengenai pasukan Fataele yang sudah terbentuk.</p>\r\n\r\n<p>Si’ulu ternyata membentuk pasukan Fatele tidak hanya untuk keperluan pertahanan kampung tapi juga untuk kegiatan adat seperti upacara kematian anggota keluarga Si’ulu maupun pesan adat seperti pengangkatan Si’ulu yang baru, pernikahan Si’ila dan juga penyambutan tamu kehormatan. Sampai saat ini fungsi dari pasukan Fatele masih tetap sama kecuali fungsi aslinya yaitu sebagai prajurit pertahanan kampung. Hal ini dikarenakan konflik perebutan lahan dan kampung sudah tidak ada.</p>\r\n\r\n<p><a href="https://sisteminformasipulaunias.files.wordpress.com/2014/10/tari-perang-3.jpg"><img alt="tari perang 3" src="https://sisteminformasipulaunias.files.wordpress.com/2014/10/tari-perang-3.jpg?w=300&h=199" style="height:199px; width:300px" /></a></p>\r\n\r\n<p>Dalam menarikan tarian ini, penari mengenakan pakaian warna warni terdiri dari warna hitam, kuning dan merah, dilengkapi dengan mahkota di kepala. Layaknya kesatria dalam peperangan penari juga membawa Tameng, pedang dan tombak sebagai alat pertahanan dari serangan musuh. Tameng yang digunakan terbuat dari kayu bebentuk seperti daun pisang berada di tangan kiri yang berfungsi untuk menangkis serangan musuh. Sedangkan pedang atau tombak berada di tangan kanan berfungsi untuk melawan serangan musuh. Kedua senjata ini merupakan senjata utama yang digunakan kesatria nias untuk berperang.</p>\r\n\r\n<p><a href="https://sisteminformasipulaunias.files.wordpress.com/2014/10/tari-perang4.jpg"><img alt="tari-perang4" src="https://sisteminformasipulaunias.files.wordpress.com/2014/10/tari-perang4.jpg?w=300&h=200" style="height:200px; width:300px" /></a></p>\r\n\r\n<p>Ketika dipertunjukkan prosesi tarian ini dipimpin seorang komando layakya prosesi dalam perang yang dipimpin oleh seorang panglima. Kemudian dia akan mengomando penari untuk membentuk formasi berjajar panjang yang terdiri dari empat jajar. Posisi komando berada di depan menghadap kearah penari. Tarian kemudian dimulai dengan gerakan kaki maju mudur sambil dihentakkan ke tanah dan menerikkan kata-kata pembangkit semangat. Makna gerakan ini adalah kesiapan pasukan untuk maju ke medan perang dengan penuh semangat kepahlawanan. Kemudian diikuti dengan formasi melingkar yang bertujuan untuk mengepung musuh, setelah musuh terkepung para kesatria akan dengan mudah untuk melumpuhkan mereka.</p>\r\n\r\n<p>Gerakan Tari Faluaya sangat dinamis, hentakan kaki yang diiringi oleh musik dan gerakan mengayunkan tombak dan pedang menggambarkan semangat dari para pejuang dalam mempertahankan kampung mereka dari serangan musuh. Tidak hanya itu saja, suara yang dikelurkan oleh para penari juga merupakan ekspresi ketangkasan dan kepahlawanan para kesatria.</p>\r\n\r\n<p><a href="https://sisteminformasipulaunias.files.wordpress.com/2014/10/tari-perang-5.jpg"><img alt="tari perang 5" src="https://sisteminformasipulaunias.files.wordpress.com/2014/10/tari-perang-5.jpg?w=300&h=199" style="height:199px; width:300px" /></a></p>\r\n\r\n<p>Tari fataele</p>\r\n\r\n<p>Seperti yang sudah disebutkan sebelumnya bahwa seni Tari Faluaya atau Tari Fatele ini merupakan kesenian khas Nias Selatan, oleh karena itu hanya terdapat di Nias Selatan yaitu di Tanah Dalam. Teluk Dalam merupakan kecamatan, terletak di ujung selatan Pulau nias. Jadi untuk dapat langsung menyaksikan pertunjukkan Tari Faluaya ini, Anda bisa datang langsung ke Teluk Dalam. Salah satu desa yang patut dikunjungi untuk menyaksikan tarian ini adalah Desa Baweu Mate Luwo yang dikenal dengan desa kesatria. Untuk sampai ke Kota Teluk Dalam, Anda bisa berangkat dari Sibolga dengan menggunakan kapal laut selama 10-12 jam.', '2018-07-24 13:16:46', '2018-07-24 13:17:40'),
(30, '<p>Omo Hada adalah sebutan untuk Rumah Adat Nias Utara, umumnya yang kita tau tentang apa adat atau kebudayaan dari Nias adalah Lompat Batu, padahal Nias memiliki rumah adat dengan karateristik dan arsitektur yang sangat mengagumkan.</p>\r\n\r\n<p><a href="https://sisteminformasipulaunias.files.wordpress.com/2014/10/rumah_adat_nias_by_baluguharefa-d540gdr1.jpg"><img alt="rumah_adat_nias_by_baluguharefa-d540gdr" src="https://sisteminformasipulaunias.files.wordpress.com/2014/10/rumah_adat_nias_by_baluguharefa-d540gdr1.jpg?w=300&amp;h=225" style="height:225px; width:300px" /></a></p>\r\n\r\n<p>Rumah adat Nias</p>\r\n\r\n<p>Rumah di Nias adalah potret tradisi nenek moyang suku Nias yang secara rasional menyiasati ancaman dari alam sekaligus potensi alam dalam membina bangunan. Hasilnya adalah suatu karya yang sangat berani berekspresi dengan titik berat rancangan yang memenuhi kebutuhan bertinggal namun dengan niali estetika yang terlahir dari logika serta konstruksi dan geometri yang sederhana namun mengagumkan.</p>\r\n\r\n<p><a href="https://sisteminformasipulaunias.files.wordpress.com/2014/10/rumah-adat-selatan.jpg"><img alt="rumah-adat-selatan" src="https://sisteminformasipulaunias.files.wordpress.com/2014/10/rumah-adat-selatan.jpg?w=300&amp;h=201" style="height:201px; width:300px" /></a></p>\r\n\r\n<p>rumah-adat- Nias selatan</p>\r\n\r\n<p>Rumah adat Nias atau lebih dikenal dengan sebutan Omohada saat ini memang sudah jarang ditemui. Karena akibat perkembangan zaman serta teknologi telah membuat jumlah Omohada yang bersejarah di Nias semakin sedikit. Seperti halnya kampung Bawamataluo di Nias Selatan. Kampung Bawamataluo adalah sebuah kampung yang memiliki banyak rumah adat Nias Selatan yang masih asli. Karena perkembangan zaman saat ini rumah adat yang ada di sana sudah termodernisasi. Sangat disayangkan memang jika dilihat kampung tersebut sebenarnya bisa dijadikan sebagai warisan budaya dunia jika tetap mempertahankan keaslian rumah adatnya.</p>\r\n\r\n<p>Tujuan sebenarnya untuk penulisan ini adalah agar kita para kaum muda lebih mencintai dan perduli akan budaya budaya yang ada di tanah airnya sendiri, dan sekaligus untuk memperkenalkan kembali kebudayaan Nias yaitu dari sisi rumah adatnya.</p>\r\n\r\n<p>Rumah adat Nias atau lebih dikenal dengan sebutan Omohada saat ini memang sudah jarang ditemui. Karena akibat perkembangan zaman serta teknologi telah membuat jumlah Omohada yang bersejarah di Nias semakin sedikit. Seperti halnya kampung Bawamataluo di Nias Selatan. Kampung Bawamataluo adalah sebuah kampung yang memiliki banyak rumah adat Nias Selatan yang masih asli. Karena perkembangan zaman saat ini rumah adat yang ada di sana sudah termodernisasi. Sangat disayangkan memang jika dilihat kampung tersebut sebenarnya bisa dijadikan sebagai warisan budaya dunia jika tetap mempertahankan keaslian rumah adatnya.</p>\r\n\r\n<p>Tujuan sebenarnya untuk penulisan ini adalah agar kita para kaum muda lebih mencintai dan perduli akan budaya budaya yang ada di tanah airnya sendiri, dan sekaligus untuk memperkenalkan kembali kebudayaan Nias yaitu dari sisi rumah adatnya.</p>\r\n\r\n<p>Rumah adat di Nias dibuat dengan ukuran lebih kecil dari rumah-rumah adat aslinya, adalah mewakili rumah adat dari Nias Selatan. Rumah yang berbentuk empat persegi panjang dan berdiri di atas tiang ini menyerupai bentuk perahu. Begitu pula pola perkampungan, hiasan-hiasan bahkan peti matinya pun berbentuk perahu. Dengan bentuk rumah seperti perahu ini diharapkan bila terjadi banjir maka rumah dapat berfungsi sebagai perahu. Untuk memasuki rumah adat ini terlebih dahulu menaiki tangga dengan anak tangga yang selalu ganjil 5 &ndash; 7 buah, kemudian memasuki pintu rumah yang ada dua macam yaitu seperti pintu rumah biasa dan pintu horizontal yang terletak di pintu rumah dengan daun pintu membuka ke atas. Pintu masuk seperti ini mempunyai maksud untuk menghormati pemilik rumah juga agar musuh sukar menyerang ke dalam rumah bila terjadi peperangan.</p>\r\n\r\n<p><a href="https://sisteminformasipulaunias.files.wordpress.com/2014/10/rumah_adat_nias_2007.jpg"><img alt="rumah_adat_nias_2007" src="https://sisteminformasipulaunias.files.wordpress.com/2014/10/rumah_adat_nias_2007.jpg?w=250&amp;h=300" style="height:300px; width:250px" /></a></p>\r\n\r\n<p>Rumah Adat Nias Tengah</p>\r\n\r\n<p>Ruangan pertama adalah Tawalo yaitu berfungsi sebagai ruang tamu, tempat bermusyawarah, dan tempat tidur para jejaka. Seperti diketahui pada masyarakat Nias Selatan mengenal adanya perbedaan derajat atau kasta dikalangan penduduknya, yaitu golongan bangsawan atau si Ulu, golongan pemuka agama atau Ene, golongan rakyat biasa atau ono embanua dan golongan Sawaryo yaitu budak.<br />\r\nDi bagian ruang Tawalo sebelah depan dilihat jendela terdapat lantai bertingkat 5 yaitu lantai untuk tempat duduk rakyat biasa, lantai ke 2 bule tempat duduk tamu, lantai ketiga dane-dane tempat duduk tamu agung, lantai keempat Salohate yaitu tempat sandaran tangan bagi tamu agung dan lantai ke 5 harefa yakni untuk menyimpan barang-barang tamu. Di belakang ruang Tawalo adalah ruang Forema yaitu ruang untuk keluarga dan tempat untuk menerima tamu wanita serta ruang makan tamu agung. Di ruang ini juga terdapat dapur dan disampingnya adalah ruang tidur.</p>\r\n\r\n<p>Rumah adat Nias biasanya diberi hiasan berupa ukiran-ukiran kayu yang sangat halus dan diukirkan pada balok-balok utuh. Seperti dalam ruangan Tawalo yang luas itu interinya dihiasi ukiran kera lambang kejantanan, ukiran perahu-perahu perang melambangkan kekasaran. Dahulu, di ruangan ini juga digantungkan tulang-tulang rahang babi yang berasal dari babi-babi yang dipotong pada waktu pesta adat dalam pembuatan rumah tersebut.<br />\r\nMenurut cerita, di ruangan ini dahulu digantungkan tengkorak kepala manusia yang dipancumg untuk tumbal pendirian rumah. Tapi setelah Belanda datang, kebiasaan tersebut disingkirkan. Untuk melengkapi ciri khas adat istiadat Nias adalah adanya batu loncat yang disebut zawo-zawo. Bangunan batu ini dibuat sedemikian rupa untuk upacara lompat batu bagi laki-laki yang telah dewasa dalam mencoba ketangkasannya.</p>\r\n\r\n<p>Omo hada asli tidak menggunakan paku, melainkan pena dan pasak kayu, sebagaimana rumah knock down atau bongkar pasang. Bahan kayu yang digunakan merupakan pilihan, diperoleh dari hutan-hutan di Nias. &ldquo;Sekarang susah mencari kayu-kayu pilihan untuk membangun rumah adat, sudah habis dari hutan,&rdquo; ungkap Zebua. Syukurlah, rumbia untuk atap rumah masih dapat dibuat dari nyiur sehingga bumbungannya tetap tampak unik. Bumbungan kelihatan jadi semakin unik dengan adanya satu hingga dua tuwu zago, yaitu jendela di bagian atap sebagai ventilasi dan sumber cahaya bagi rumah. Tuwu zago ini terdapat di atap bagian depan dan belakang bumbungan.</p>\r\n\r\n<p>Tiang Kayu dan Simbol Omo Hada<br />\r\nSetiap omo hada memiliki enam tiang utama yang menyangga seluruh bangunan. Empat tiang tampak di ruang tengah rumah, sedang dua tiang lagi tertutup oleh papan dinding kamar utama. Dua tiang di tengah rumah itu disebut simalambuo berupa kayu bulat yang menjulang dari dasar hingga ke puncak rumah. Dua tiang lagi adalah manaba berasal dari pohon berkayu keras dipahat empatsegi, demikian pula dua tiang yang berada di dalam kamar utama. Setiap tiang mempunyai lebar dan panjang tertentu satu dengan lainnya. &ldquo;Semakin lebar jarak antara tiang simalambuo dengan tiang manaba maka semakin berpengaruhlah si pemilik rumah,&rdquo; ungkap Ya&rsquo;aro Zebua lagi.</p>\r\n\r\n<p>Rumah-rumah adat di Nias juga tidak memiliki jendela. Sekelilingnya hanya diberi teralis kayu tanpa dinding sehingga setiap orang di luar rumah dapat mengetahui siapa yang berada di dalamnya. Menurut Zebua, desain ini menandakan orang Nias bersikap terbuka, jadi siapapun di desa dapat mengetahui acara-acara di dalam rumah, terutama yang berkaitan dengan adat dan masalah masyarakat setempat. Biasanya pemilik rumah bersama ketua adat duduk di bangku memanjang di atas lantai yang lebih tinggi&mdash;disebut sanuhe&mdash;sambil bersandar ke kayu-kayu teralis, sedangkan yang lainnya duduk di lantai lebih rendah atau disebut sanari. Setiap acara adat akan berlangsung di dalam rumah, terlebih dulu seisi kampung diundang dengan membunyikan faritia (gong) yang tergantung di tengah rumah. Faritia di rumah adat Nias Selatan dilengkapi oleh fondrahi, yaitu tambur besar sebagaimana terlihat di omo sebua&mdash;rumah besar untuk raja dan bangsawan&mdash;di Desa Bawomatoluo, Teluk Dalam.</p>\r\n\r\n<p>Segi artistik juga menjadi perhatian dalam pembangunan omo hada. Banyak kayu-kayu berukir menghias interior dan eksterior rumah. Ini menandakan orang Nias mempunyai rasa seni tinggi.</p>\r\n\r\n<p>Kayu Elastis Menahan Gempa<br />\r\nMengapa omo hada tak rubuh saat gempa? Ya&rsquo;aro Zebua mengatakan kayu-kayu yang digunakan untuk rumah mereka bersifat elastis. &rdquo; Jadi saat gempa rumah pun &lsquo;main&rsquo; [ikut bergerak] sesuai guncangan bumi.&rdquo; Tetapi, diakuinya, gerakan-gerakan itu telah membuat posisi tiang-tiang rumah bergeser sehingga tampak miring. Selain itu, dia mengungkapkan, umumnya atap di puncak bumbungan mengalami kerusakan walaupun tak begitu berarti.</p>\r\n\r\n<p>Rumah-rumah di Nias bagian utara, seperti Desa Tumori, umumnya disangga oleh balok-balok kayu berbentuk letter X yang disebut diwa. Diwa menahan lantai rumah di bagian kolong, selain ada pula siloto yang berupa kayu panjang yang menempel di bagian bawah papan lantai rumah tersebut. Siloto langsung menahan lantai rumah, dan merupakan bagian kayu yang paling elastis. Ada juga gohomo, yaitu kayu-kayu yang tegak lurus menopang dan memagari seluruh kolong rumah sehingga omo hada semakin kokoh sekaligus elastis. Gohomo berada di bagian terluar pada kolong rumah, sedangkan siloto dan diwa berada di bagian dalamnya.</p>\r\n\r\n<p><a href="https://sisteminformasipulaunias.files.wordpress.com/2014/10/rumah.jpg"><img alt="rumah" src="https://sisteminformasipulaunias.files.wordpress.com/2014/10/rumah.jpg?w=300&amp;h=225" style="height:225px; width:300px" /></a></p>\r\n\r\n<p>Rumah adat Nias</p>\r\n\r\n<p>Sebagian orang Nias memang sudah tidak begitu banyak yang memperhatikan keberadaan Omohada Nias yang masih asli. Namun warisan budaya tanah air ini bukalah hanya milik Nias api milik Indonesia dan sudah sepatutnya kita menjaga dan melestarikan warisan tanah aor kita ini, sangat memperihatinkan keadaan akan kesadarn cinta akan budaya negara sendiri oleh masyarakatnya. Padahal, orang asing di luar negeri sangat mengagumi arsitektur Omohada Nias. Salah satu buktinya adalah pengakuan seorang Arsitek dunia Alain M. Viaro dan Arletta Ziegler dalam bukunya berjudul &ldquo;Traditional Architecture of Nias Island&rdquo; mengakui bahwa arsitektur rumah tradisional Nias merupakan satu-satunya arsitektur rumah tahan gempa yang terdapat di dunia ini. Dan ini memang terbukti, ketika gempa berskala besar melanda kepulauan Nias tahun 2005 yang lalu, rumah-rumah adat Nias yang masih asli tetap kokoh berdiri.</p>', '2018-07-24 13:21:31', '2018-07-24 13:21:31'),
(31, '<p><em><strong>Tari Moyo</strong>&nbsp;</em>diperankan oleh kaum perempuan. Nama &ldquo;Moyo&rdquo; yang dapat diartikan dalam bahasa Indonesia, yakni &ldquo;Elang&rdquo;. Moyo merupakansalah satu tarian yang khas dengan gerakan-gerakan lincah dan lemah gemulai. Tetapi dibalik gerakan tersebut tersirat makna yang menandakan betapa indahnya sebuah persatuan dalam sebuah perdamaian&nbsp;seperti gerakan yang&nbsp;lemah gemulai, menunjukkan bahwa dalam keteduhan kami bisa mencapai cita-cita bagaikan elang yang gagah berani mengarungi angkasa raya dan juga Hal ini menyimbolkan bahwa orang Nias gagah berani terutama dalam menghadapi musuh. Makna lain adalah kewibawaan dan sikap optimis yang dapat kita amati ketika burung elang menerkam mangsa. Tidak ada sikap keraguan dalam benaknya. Dan hal ini dimaknai juga bahwa orang Nias memiliki sikap optimis dan sekali maju, tetap maju.</p>', '2018-07-24 13:28:32', '2018-07-24 13:28:32'),
(32, '<p>NiasPakaian adat&nbsp;<a href="http://id.wikipedia.org/wiki/Suku_Nias">suku Nias</a>dinamakan Baru Oholu untuk pakaian laki-laki dan &Otilde;r&ouml;ba Si&rsquo;&ouml;li untuk pakaian perempuan. Pakaian adat tersebut biasanya berwarna emas atau kuning yang dipadukan dengan warna lain seperti hitam, merah, dan putih. Adapun filosofi dari warna itu sendiri antara lain:</p>\r\n\r\n<p>*Warna kuning yang dipadukan dengan corak persegi empat (Ni&rsquo;obakola) dan pola bunga kapas (Ni&rsquo;obowo gafasi) sering dipakai oleh para bangsawan untuk menggambarkan kejayaan kekuasaan, kekayaan, kemakmuran dan kebesaran.<br />\r\n*Warna merah yang dipadukan dengan corak segi-tiga (Ni&rsquo;ohulayo/ ni&rsquo;og&ouml;na) sering dikenakan oleh prajurit untuk menggambarkan darah, keberanian dan kapabilitas para prajurit.<br />\r\n*Warna hitam yang sering dikenakan oleh rakyat tani menggambarkan situasi kesedihan, ketabahan dan kewaspadaan.<br />\r\n*Warna putih yang sering dikenakan oleh para pemuka agama kuno (Ere) menggambarkan kesucian, kemurnian dan kedamaian.Pakaian, perhiasan dan senjata di Nias sangat beraneka ragam serta diberi warna dan hiasan (ukiran) yang bermacam-macam pula.</p>\r\n\r\n<p><a href="https://sisteminformasipulaunias.files.wordpress.com/2014/10/281550_194051557317711_7557946_n.jpg"><img alt="Baju adat Nias" src="https://sisteminformasipulaunias.files.wordpress.com/2014/10/281550_194051557317711_7557946_n.jpg?w=209&amp;h=300" style="height:300px; width:209px" /></a></p>\r\n\r\n<p>Pakaian adat Nias</p>\r\n\r\n<p>Dalam upacara adat atau upacara kebesaran, pakaian dan perhiasan yang berwarna keemasan atau kekuning-kuningan sangat digemari selain kombinasi beberapa warna lain seperti hitam, merah dan putih. Warna kuning yang dipadukan dengan corak persegi empat (Ni&rsquo;obakola) dan pola bunga kapas (Ni&rsquo;obowo gafasi) sering dipakai oleh para bangsawan untuk menggambarkan kejayaan kekuasaan, kekayaan, kemakmuran dan kebesaran. Warna merah yang dipadukan dengan corak segi-tiga (Ni&rsquo;ohulayo/ ni&rsquo;og&ouml;na) sering dikenakan oleh prajurit untuk menggambarkan darah, keberanian dan kapabilitas para prajurit. Warna hitam yang sering dikenakan oleh rakyat tani menggambarkan situasi kesedihan, ketabahan dan kewaspadaan. Warna putih yang sering dikenakan oleh para pemuka agama kuno (Ere) menggambarkan kesucian, kemurnian dan kedamaian.</p>\r\n\r\n<p><a href="https://sisteminformasipulaunias.files.wordpress.com/2014/10/img3.jpg"><img alt="baju adat Nias Khusus laki-laki" src="https://sisteminformasipulaunias.files.wordpress.com/2014/10/img3.jpg?w=300&amp;h=300" style="height:300px; width:300px" /></a></p>\r\n\r\n<p>baju adat</p>\r\n\r\n<p>Untuk melengkapi keagungan dan kemegahan penampilan dalam suatu upacara kebesaran (Owasa/ fa&rsquo;ulu), seorang pria dewasa harus menyelipkan senjata di pinggangnya. Tol&ouml;gu dan Gari si so rago merupakan senjata yang sangat disukai oleh kalangan bangsawan, panglima dan para prajurit. Pada senjata atau hiasan sering sekali diberi kepala monster (Lasara) atau ukiran-ukiran binatang buas yang angker yang menggambarkan keperkasaan, keberingasan, dan kekuatan kekuasan seseorang.</p>', '2018-07-24 13:32:10', '2018-07-24 13:32:10'),
(33, '<p>Apabila ada orang asing yang berkunjung di Nias dan masih berada di luar atau di halaman rumah, ia adalah orang asing dan belum tentu diterima sebagai tamu. Tapi saat masuk dalam rumah ia adalah raja yang harus dihargai dan kepadanya wajib disuguhkan sirih sebagai lambang penghargaan. Demikianlah kira-kira ungkapan yang menggambarkan betapa orang Nias sangat menghargai tamu-tamunya.</p>\r\n\r\n<p>Hal itu sangat saya rasakan manakala menginjakkan kaki di tanah Nias. Berbagai ritual penyambutan tamu selalu mewarnai setiap acara. Afo dikemas rapi dalam wadah yang terbuat dari anyaman daun pandan yang disebut Bolanafo.</p>\r\n\r\n<p>Tak sekadar disuguhkan begitu saja, melainkan diantar dengan sebuah tarian yang dinamakan Tari Fame&rsquo;e Afo. Tarian ini merupakan tarian tradional Nias yang menggabungkan antara kekuatan dan kelemahlembutan yang menjadi ciri khas anak&nbsp;<a href="http://lifestyle.liputan6.com/read/2505306/bawomataluo-desa-adat-nias-di-bukit-matahari">Nias.</a></p>\r\n\r\n<p>Jadi sebelum afo disuguhkan, beberapa penari yang semuanya wanita akan menari dengan gerakan yang sangat halus dan gemulai diiringi musik tradisional seperti gong, canang, dan bedug. Selesai menari, para penari ini kemudian mendatangi tamu terhormat satu persatu untuk menyerahkan sirih-pinang. Lalu sebagai bentuk penghormatan kepada tuan rumah, para tamu diwajibkan untuk mengambil kemudian menguyahnya.</p>\r\n\r\n<p>Pertama kali saya merasainya saat menguyah Afo, pahit. Selain pahit ada juga rasa getir akibat daun sirih. Kepala pun lama-kelamaan jadi pening. Entah kenapa. Katanya sih ini akibat kapurnya. Lalu, produksi ludah makin banyak. Itulah kenapa, saat melihat orang menginang kita selalu lihat dia sering meludah. Air liurnya pun berwarna merah akibat campuran daun sirih dan kapur serta buah pinang.</p>', '2018-07-24 15:11:21', '2018-07-24 15:11:21'),
(34, '<p>November mendatang, beberapa atraksi budaya langka dan kemegahan &nbsp;lainnya dari kepulauan Nias, di lepas pantai timur Sumatera Utara, akan dipresentasikan dalam Festival Ya&#39;ahowu 2018, yang dijadwalkan berlangsung dari tanggal 16 sampai 20 November 2018 , dan dipusatkan di Gunungsitoli, kota terbesar di Pulau Nias.</p>\r\n\r\n<p>Lebih dikenal sebagai surga selancar dengan&nbsp;<em>rolling barrel</em>&nbsp;yang berada di Samudera Hindia, Nias, nyatanya, menyembunyikan budaya megalitik kuno yang masih sangat hidup hingga saat ini. Di sini bukan hanya desa megalitik lengkap namun budayanya masih tumbuh sampai saat ini. Ini akan menjadi sorotan dari Festival Ya&#39;ahowu.</p>\r\n\r\n<p>Selama 5 hari penuh berturut-turut, pagelaran seni dan tradisi budaya yang menarik dari seluruh Pulau Nias akan menyoroti festival tersebut. Semua pemerintah kabupaten bersama masyarakat Nias akan menampilkan pertunjukan terbaik mereka. Di antaranya adalah tradisi melompat batu legendaris yang disebut Fahombo, serta permainan rakyat unik lainnya seperti Rago Ue, Fafusi, Fabelugama, dan Fabiri.</p>\r\n\r\n<p>Tahun ini, Festival Ya&#39;ahowu akan diselenggarakan bersama dengan &nbsp;4 kabupaten dan 1 kota yang berada di Pulau Nias.</p>\r\n\r\n<p>Festival Ya&#39;ahowu 2018 diselenggarakan dengan tujuan untuk mempromosikan budaya unik Pulau Nias ke seluruh negara dan juga ke dunia internasional, dan untuk menarik lebih banyak wisatawan untuk mengalami keajaiban Nias yang menakjubkan. Selain itu, taman khusus yang disebut Taman Ya&#39;ahowu, yang akan menjadi titik pandang terbaik untuk mengamati panorama menakjubkan pulau dan samudera ke cakrawala jauh.</p>\r\n\r\n<p>Festival Ya&#39;ahowu akan dimulai pada tanggal 16 November dengan pameran produk terbaik, kerajinan tangan, dan beberapa makanan kuliner yang paling nikmat. Pada saat bersamaan, festival patung dan ukiran tradisional akan dimulai dengan menampilkan pengrajin terbaik dari seluruh pulau.</p>\r\n\r\n<p>Sore hari, sebuah parade budaya khusus akan berlangsung dari Lapangan Merdeka ke Taman Ya&#39;ahowu. Parade ini akan menampilkan berbagai atraksi seni dan budaya dari semua kabupaten dan kota di Pulau Nias, yang juga akan diikuti oleh pejabat dan kepala pemerintahan masing-masing kabupaten dan kota, yang akan mengenakan kostum tradisional tradisional Nias.</p>\r\n\r\n<p>Pertunjukan seni dan budaya akan berlanjut keesokan harinya di Lapangan Merdeka di Gunungsitoli, pertandingan dan kompetisi rakyat akan digelar serta kompetisi dayung tradisional di laut. Selanjutnya akan ada Malam Gunungsitoli khusus akan menjadi puncak perayaan, yang akan menutup festival dengan pertunjukan seni tradisional, kontemporer dan populer, yang menampilkan bintang-bintang nasional populer yang ditunggu-tunggu di dunia musik.</p>\r\n\r\n<p>Kata Ya&#39;ahowu adalah ucapan umum di antara orang-orang Nias. Ke mana pun Anda bepergian di pulau ini Anda pasti akan disambut dengan kata: Ya&#39;ahowu, sapaan khas yang diberikan di pagi hari, siang atau malam, pada kesempatan apapun. Orang tersebut disambut dengan ucapan yang sama dengan kata &quot;Ya&#39;ahowu&quot;. Hal ini dikatakan pada pertemuan kebetulan, atau bahkan saat pembukaan atau penutupan misa atau kebaktian gereja, karena kebanyakan orang Nias sekarang adalah orang Kristen. Ucapan ini bahkan secara resmi disetujui untuk menjadi ciri khas Nias yang diputuskan dalam pertemuan para kepala suku, pemimpin dan pemuda suku Balugu, Tahenori, Si&#39;ulu, dan Sala di Nias, yang diarsipkan oleh pemerintah Hindia Belanda pada tahun 1919 .</p>\r\n\r\n<p>Dalam penjelasannya, disebutkan bahwa kata Ya&#39;ahowu adalah ucapan khas kelompok etnis Nias. Ini terdiri dari dua kata, yaitu howu-howu yang berarti berkah, dan bila ditambah dengan kata Ya, itu berarti semoga Tuhan memberkati anda. Oleh karena itu, kata Ya&#39;ahowu sangat memperhatikan kesejahteraan dan berkah Yang Maha Kuasa atas orang tersebut sehingga disambut. Y a&#39;ahowu, akibatnya menunjukkan penghormatan dan pengakuan seseorang terhadap sesama sebagai manusia. Beberapa menganggapnya mirip dengan ucapan shalom aleichem (dalam bahasa Yahudi) yang berarti &quot;damai sejahtera menyertai Anda&quot; dan &quot;Tuhan memberkati Anda&quot;.</p>\r\n\r\n<p>Saat ini Nias sangat terkenal dengan tradisi melompat batu yang menakjubkan dan ombak lautnya. Melompat batu adalah keterampilan yang dibutuhkan anak laki-laki untuk menjadi pria, jadi sekarang pengunjung dapat menyaksikan pemuda setempat dengan mudah melompat di atas dinding batu setinggi dua meter.</p>\r\n\r\n<p>Sementara ombak Nias terkenal di seluruh dunia karena&nbsp;<em>massive break</em>&nbsp;. Ombak yang sempurna pertama kali ditemukan di Nias oleh peselancar asal Australia sehingga pulau ini sekarang menjadi rumah bagi Kejuaraan Surfing Terbuka Indonesia di pantai Lagundri.</p>', '2018-07-24 15:19:55', '2018-07-24 15:19:55'),
(37, '<p>Fakhe nifal&ouml;gu adalah nasi yang di masak menggunakan beras khas asli nias selatan, yang membuat nya unik adalah memasak nya itu menggunakan periuk tanah liat yang setengah lingkaran bola. Penyajian nya di telungkupkan diatas daun pisang, makanya di beri nama Fakhe nifal&ouml;gu. Sejatinya fakhe nifal&ouml;gu disajikan dengan lauk daging babi, atau anak babi. Fakhe nifalogu biasanya di jumpai pada acara acara tertentu, &nbsp;misalnya pesta pernikahan, &nbsp;upacara adat, menjamu tamu penting atau bangsawan dan upacara upacara adat lainnya.</p>', '2018-07-24 15:30:15', '2018-07-24 15:30:15'),
(38, '<p>Hambae Nititi adalah daging kepiting yang di campur dengan santan kelapa dimasak sampai kering untuk dijadikan lauk, makanan ini merupakan makanan bermusim biasanya pada bulan Mei, Juni dan Juli di kepulauan Hinako Kecamatan Sirombu. Kuliner jenis ini biasanya dimasak hingga kering mirip abon. Rasanya sangat gurih.</p>', '2018-07-24 15:35:14', '2018-07-24 15:35:14'),
(39, '<p>Silio Guro merupakan sebuah hidangan yang mirip dengan pepes bakar, karena Silio Guro biasanya disajikan dengan dibungkus daun pisang dan di panggang di atas bara api yang membara. Isiannya yang berupa daging giling dan kelapa yang telah dibumbui. Yang membedakan kuliner ini dengan pepes adalah isi Silio Guro yang merupakan daging udang.</p>', '2018-07-24 15:41:48', '2018-07-24 15:41:48'),
(40, '<p>Sekilas hidangan bernama Harinake ini memang bikin ngiler. Yap, rasanya memang terkenal enak. Tapi, kuliner ini terbuat dari daging babi cincang yang diiris dengan ukuran kecil-kecil dan tipis-tips.</p>\r\n\r\n<p>Bagi wisatawan yang tidak makan daging babi bisa puasa terlebih dahulu. Bagi wisatawan yang makan daging babi wajib sekali mencicipi kuliner yang satu ini.</p>\r\n\r\n<p>Harinake sendiri merupakan makanan khas Nias yang biasanya disajikan untuk menghormati tamu dan mertua. Biasanya disajikan satu ekor babi lalu dicincang. Mau coba?</p>', '2018-07-24 15:43:23', '2018-07-24 15:43:23'),
(41, '<p>Proses mengasinkan daging dan ikan memang terbukti bisa membuat daging dan ikan bisa tahan lama. Kalau di daerah lain di Indonesia hanya ikan saja yang diasinkan, tapi di Nias berbagai daging biasa diasinkan agar awet.</p>\r\n\r\n<p>Ni&rsquo;owuru sendiri merupakan istilah untuk asinan daging babi. Tapi banyak juga daging lain yang diasinkan seperti ayam, sapi, atau kerbau. Jadi, jika wisatawan ingin mencicipi kuliner yang satu ini lebih baik bertanya terlebih dahulu dengan penjual tentang jenis daging yang diasinkan.</p>', '2018-07-24 15:44:02', '2018-07-24 15:44:02'),
(42, '<p>K&ouml;f&ouml;- K&ouml;f&ouml; merupakan kuliner di pulau terpencil di Nias. Bahannya terbuat dari ikan yang telah dibuang kulitnya dan dimasak dengan santan kelapa setelah digoreng. Kuliner satu ini biasanya digunakan untuk lauk makan.</p>\r\n\r\n<p>Sebenarnya tiap masyarakat Nias punya cara masak tersendiri. Sebelum ikan digoreng ada juga masyarakat Nias yang menumbuk ikan hingga halus dan mencampurnya dengan telur lalu di stream.</p>\r\n\r\n<p>Hidangan ini cocok untuk jadi hidangan makan siang karena memiliki cita rasa mirip dengan gulai ikan yang sering jadi hidangan saat makan siang.</p>', '2018-07-24 15:44:50', '2018-07-24 15:44:50'),
(43, '<p>Museum Pusaka Nias adalah satu-satunya museum di Pulau Nias dan memiliki koleksi sebagian besar benda-benda yang berkaitan dengan budaya dan sejarah Nias. Pameran menampilkan benda-benda yang penting dari koleksi dan bertempat di empat paviliun besar. Pameran ini terbuka untuk umum setiap hari dan menawarkan pengenalan secara mendalam terhadap budaya asli dan sejarah Pulau Nias. Pameran menampilkan rangkaian lengkap dari perhiasan yang dikenakan oleh bangsawan, senjata, perlengkapan perang dibuat dari kulit buaya, peralatan memancing tradisional, peralatan berburu dan perlengkapan pengayauan, ukiran kayu yang digunakan dalam pemujaan leluhur, gendang khusus untuk upacara, peti jenazah dengan kepala naga, dan skala cantik model-model rumah tradisional.</p>\r\n\r\n<p>Untuk memahami sejarah, makna dan fungsi dari setiap pameran, tersedia label dalam Bahasa Indonesia dan Inggris. Banyak artefak besar seperti batu megalit dan rumah-rumah adat yang asli dari berbagai wilayah Nias dapat ditemukan di taman sekitar ruangan pameran.</p>\r\n\r\n<p>Sejak dibuka pada tahun 1995 Pameran Museum Nias telah menjadi pusat komunitas seni dan budaya Nias. Sebagai satu-satunya tempat pengumpulan koleksi sejarah budaya Nias, Museum Pusaka Nias telah menjadi ikon dan referensi bagi pengunjung yang tertarik untuk melihat dan belajar tentang kekayaan budaya pulau ini. Museum diakui sebagai salah satu yang terbaik di Indonesia dan pada tahun 2014 pendirinya menerima penghargaan untuk &ldquo;Pelestari Cagar Budaya Terbaik&rdquo; dari Kementerian Pendidikan dan Budaya Indonesia.</p>', '2018-07-24 16:37:37', '2018-07-24 16:37:37'),
(44, '<p>Mendengar kata Pulau Nias, pastinya sebagian besar dari kita sudah bisa hapal di luar kepala mengenai&nbsp; letak Geografis dari Kepulauan yang menjadi daya tarik wisatawan domestik maupun wisatawan mancanegara itu.</p>\r\n\r\n<p>Satu-satunya kota di pulau ini adalah Kota Gunungsitoli. Setelah ditingkatkan statusnya dari kecamatan menjadi kota otonom, popularitas kota yang dibentuk berdasarkan Undang-Undang Nomor 47 Tahun 2008 ini semakin melejit.</p>\r\n\r\n<p>Tak hanya pada tataran lokal atau regional. Bahkan, di tingkat internasional, Kota Gunungsitoli banyak menjadi bahasan diskusi.</p>\r\n\r\n<p>Gunungsitoli baru diresmikan menjadi kota oleh Menteri Dalam Negeri Indonesia Mardiyanto, pada 29 Oktober 2008, sebagai salah satu hasil pemekaran dari Kabupaten Nias.</p>\r\n\r\n<p>Salah satu tempat yang menjadi penanda khasnya adalah Taman Ya&rsquo;ahowu. Taman tersebut terletak di Jl. Sirao No.139, Kota Gunungsitoli.</p>\r\n\r\n<p>Taman Ya&rsquo;ahowu merupakan sebuah taman yang menjadi tempat favorit untuk berkumpul warga di kota itu. Setiap sore menjelang malam Taman Ya&rsquo;ahowu selalu dikunjungi oleh masyarakat Nias dan para wisatawan.</p>\r\n\r\n<p>Letak Taman Ya&rsquo;ahowu sangatlah berbeda jika dibandingkan dengan taman pada umumnya. Taman ini terletak dekat pantai dan langsung berhadapan dengan lautan.</p>\r\n\r\n<p>Di Taman Ya&rsquo;ahowu ini Pemerintah Kota Gunungsitoli sudah menyediakan fasilitas tempat duduk yang sangat bagus dan nyaman. Setiap satu hingga dua meter terdapat kursi panjang yang saling berhadapan. Semua kursi yang ada di taman tersebut terbuat dari semen.</p>\r\n\r\n<p>Mereka yang sudah menggunakan kursi roda dapat juga menikmati keindahan di taman tersebut karena di ujung sebelah kiri taman sudah dibuat jalur bagi pengguna kursi roda.</p>\r\n\r\n<p>Selain itu, Ya&rsquo;ahowu juga sudah dilengkapi dengan beberapa warung untuk memuaskan rasa dahaga dan lapar para pengunjungnya.</p>\r\n\r\n<p>Panjang Taman Ya&rsquo;ahowu kurang lebih sekitar 500 m dan lebar sekitar 40 hingga 50 m. Tempatnya yang luas dan strategis menjadikan taman tersebut sering diadakan berbagai kegiatan berskala nasional dan internasional.</p>\r\n\r\n<p>Di bulan November lalu misalnya, Pemerintah daerah setempat menggelar acara bertajuk Pesta Ya&#39;ahowu 2017. Acara yang diadakan pada tanggal 23 sampai 26 November 2017 ini nantinya akan berpusat di Taman Ya&#39;ahowu (Area Pantai Luaha) dan Lapangan Pelita di Kota Gunungsitoli.</p>\r\n\r\n<p>Selama lima hari, empat kabupaten, yaitu Kabupaten Nias Selatan, Kabupaten Nias Utara, Kabupaten Nias Barat, Kabupaten Nias dan satu kota, Gunungsitoli, akan menunjukkan ragam budaya dan seni mereka.</p>\r\n\r\n<p>Kegiatan ini bertujuan mengenalkan aneka budaya yang ada di Pulau Nias ke masyarakat Indonesia dan dunia.</p>\r\n\r\n<p>Berbagai atraksi budaya, seperti tari perang, tari moyo, tari maena, dan pertunjukan seni tradisi Nias lainnya akan diperagakan oleh &quot;<em>Ono Niha</em>&quot;, sebutan yang merujuk pada orang Nias, dalam balutan kemegahan baju tradisional yang memikat.</p>', '2018-07-24 16:44:02', '2018-07-24 16:44:02'),
(45, '<p>Objek Wisata Taman Doa Bunda Maria terletak di wilayah Kecamatan Gunungsitoli Selata, sekitar 7 km dari pusat Kota Gunungsitoli. Untuk diketahui, pada hari biasa rata-rata pengunjung taman ini ratusan orang dan pada waktu hari libur Sabtu-Minggu biasanya dipadati ribuan orang yang mana pengunjung tidak hanya untuk sekedar berdoa, juga menikmati pemandangan taman ini. Taman Doa Bunda Maria juga memiliki keunikan dimana pengunjung yang berdiri ditengah lingkaran ketika berbicara dengan keras, maka suara yang kedengaran seperti berada didalam ruangan atau memiliki gema sehingga banyak orang penasaran mencobanya.</p>', '2018-07-24 16:49:28', '2018-07-24 16:49:28'),
(46, '<p>Baho Ndra adalah lokasi wisata air terjun dengan ketinggian sekitar 10 meter. Air terjun ini memiliki telaga dengan kedalaman antara 0,5 &ndash; 2 meter. Air terjun sudah mulai ramai dikunjungi pada hari Sabtu dan Minggu, khususnya oleh masyarakat sekitar dan pelajar dari Kota Gunungsitoli. Untuk mencapai lokasi air terjun ini masuk melalui Jl. Tuada Daeli Humene sejauh 3 km, dan belok kiri ke Jl. Tulumbaho sejauh 1km. Dari akhir pemberhentian sepeda motor, dibutuhkan jalan kaki sekitar 200 meter. Air terjun ini masih belum ditata dan masih belum ada fasilitas yang mendukung sehingga setiap pengunjung harus membawa kebutuhannya sendiri. Pengunjung bias berang dan menikmati keindahan alam di tempat ini.</p>', '2018-07-24 16:52:09', '2018-07-24 16:52:09'),
(47, '<p>Kota Gunungsitoli, Sumatera Utara, memiliki obyek wisata alami yang indah dipandang mata. Salah satunya, sebuah air terjun eksotis yang terletak di Desa Fadoro, Kecamatan Gunungsitoli Idanoi, Kota Gunungsitoli, Sumatera Utara. Air Terjun Humogo, demikian warga setempat menyebutnya. Demi berkunjung ke Air Terjun Humogo yang memiliki ketinggian lebih dari 20 meter dengan air yang cukup jernih yang berasal dari sebuah goa dan belum pernah ditelurusi para pecinta gaa. Selain itu, letaknya yang berada di tebing yang terjal dengan tiga tingkatan. Untuk mencapai di kawasan obyek wisata ini, pengunjung harus menempuh perjalanan sejauh 18 kilometer dari Gunungsitoli, ibu kota Gunungsitoli. Namun sangat disayangkan, obyek wisata ini belum belum dikelola sehingga kurang mendapat perhatian dari pihak pemerintah. Buktinya, akses memasuki kawasan wisata tidak beraspal dan hanya pengerasan seadanya. Alhasil, kondisi tersebut membuat warga menjadi malas untuk melepas akhir pekan di tempat ini. Belum lagi, pengunjung harus menuruni jalan bebatuan terjal yang licin. Dan lagi kita harus menelusuri jalan tikus bak seorang pengembara.<br />\r\nAwal tahun 2016, kawasan ini mulai dikenal pengunjung dan mulai ramai. &quot;Biasa, orang yang datang tidak sekadar berenang, namun ada juga yang sengaja tubuhnya diguyur derasnya air terjun karena katanya airnya kalau kena punggung sama saja dengan dipijat,&quot; tutur seorang warga, Habazatulo Mendrofa. Pemerintah Kota Gunungsitoli belum memperhatikan ini sebagai kawasan terbaik untuk wisata, sebenarnya tempat ini kalau dikelola pemerintah Kota Gunungsitoli, bisa memberikan dampak bagi warga setempat, seperti membuka lapak-lapak, atau menyewakan alat-alat berenang dan pendakian.<br />\r\n<br />\r\n&nbsp;</p>', '2018-07-24 16:59:38', '2018-07-24 16:59:38'),
(48, '<p>Pantai Miga terletak sekitar 5 km dari pusat Kota Gunungsitoli, dimana merupakan destinasi yang menarik untuk berenang, berwisata bersama keluarga dan menikmati panorama matahari terbit adalah pengalaman yang luar biasa.</p>\r\n\r\n<p>&nbsp;</p>', '2018-07-24 17:04:40', '2018-07-24 17:04:40'),
(52, '<p>dasdasdas</p>', '2018-07-24 17:19:31', '2018-07-24 17:19:31'),
(54, '<p>dsadasdasd</p>', '2018-07-24 21:22:16', '2018-07-24 21:22:16'),
(55, '<p>asdsadasdasda</p>', '2018-07-24 21:30:09', '2018-07-24 21:30:09'),
(56, '<p>Nias Selatan 16-20 November 2018. Nama acaranya pun diubah menjadi Ya&#39;ahowu Nias Festival (YNF) 2018.</p>\r\n\r\n<p>Bagi wisatawan, menikmati kebudayaan di pulau terdepan dan terluar, yang kaya dengan seni budaya dan adat istiadat ini, sangat tepat saat diselenggarakannya Festival Ya&#39;ahowu Nias.&nbsp;Apalagi, pada saat yang bersamaan, Pulau Nias sedang musim durian. Durian nias jangan tanya rasanya. Seperti kata almarhum Bondan Winarno, maknyus.&nbsp;</p>\r\n\r\n<p>Hujan yang sempat turun deras pada awal acara pembukaan Pesta Ya&#39;ahowu 2017, 23 November, tidak sedikit pun mengurangi semangat para peserta dari kelima daerah di Kepulauan Nias untuk tampil. Berbagai atraksi budaya seperti&nbsp;<em>fahiw&ouml;</em>, menjadi sajian pembuka acara itu.</p>\r\n\r\n<p>Salah satu yang menarik pada Pesta Ya&#39;ahowu 2017, yakni digelarnya festival mematung. Kelima daerah Pulau Nias mengirimkan pematung andalan mereka untuk berlomba menjadikan batang pohon berupa gelondongan menjadi patung bernilai seni.</p>\r\n\r\n<p>Kemeriahan yang sama segera dirancang oleh Kabupaten Nias Selatan sebagai tuan rumah pada Festival Ya&#39;ahowu Nias&nbsp;2018. Kepala Dinas Pariwisata Nias Selatan&nbsp;&nbsp;Anggreani Dachi tengah bekerja keras mempersiapkan acara ini dengan baik.&nbsp;</p>\r\n\r\n<p>&quot;Kami sudah mulai hitung mundur. Tersisa 49 minggu 2 hari lagi untuk kami mempersiapkan agenda pariwisata ini. Kami terus berbenah, terutama mempersiapkan tempat-tempat penginapan berupa&nbsp;<em>homestay.&nbsp;</em>Ini untuk mengantisipasi lonjakan wisatawan yang datang seminggu sebelum dan sesudah acara. Kapasitas hotel di Telukdalam, Nias Selatan, hanya bisa menampung sekitar 1.000 tamu, pasti akan tidak cukup. Selain hotel di Gunungsitoli, kami persiapkan rumah-rumah inap,&quot; ujar Anggreani, Selasa (5/12/2017).</p>\r\n\r\n<p>Bupati Nias Selatan Hilarius Duha juga mengajak semua SKPD-nya untuk fokus menyukseskan program kepariwisitaan ini. Pembenahan-pembenahan infrastruktur terutama untuk akses pada daerah tujuan wisata terus dilakukan.</p>\r\n\r\n<p>Animo masyarakat untuk datang ke Nias sudah tinggi. Hal ini didukung oleh banyaknya rute penerbangan yang dilayani oleh maskapai penerbangan Garuda dan Lion.&nbsp;</p>\r\n\r\n<p>Janji Presiden Joko Widodo yang akan segera membangun peningkatan panjang landasan pacu Bandara Binaka diharapkan segera diwujudkan. Ini akan pasti mendobrak jumlah kunjungan ke Pulau Nias. Sebab, dengan penambahan panjang landasan pacu, penerbangan dari sejumlah kota di Nusantara langsung ke Nias dimungkinkan, tidak perlu lagi transit terlebih dahulu ke Kualanamu, Deli Serdang.</p>\r\n\r\n<p>Peran Kementerian Pariwisata yang terus mendukung pelaksanaan festival sangat diapresiasi.&nbsp;Perhelatan-perhelatan besar seperti Festival Ya&#39;ahowu Nias menjadi penarik wisatawan luar negeri meminati Indonesia yang kaya akan budayanya.&nbsp;</p>\r\n\r\n<p>Festival ini juga sangat kental dengan misi persatuan dan menumbuhkan rasa cinta terhadap Negara Kesatuan Republik Indonesia yang Bhinneka Tunggal Ika.&nbsp;&nbsp;</p>', '2018-07-24 22:23:51', '2018-07-24 22:23:51');
INSERT INTO `artikels` (`id`, `artikel`, `created_at`, `updated_at`) VALUES
(57, '<p>Tanggal 16-17 Juni 2018 FKMN Jateng-DIY melaksanakan puncak Acara &ldquo;Maha Karya Ono Niha II&rdquo;, bertempat di Candi Prambanan DI Yogyakarta.</p>\r\n\r\n<p>Rangkaian Agenda ini Diawali dengan keikutsertaan dalam beberapa event antara lain:</p>\r\n\r\n<p>1.Tgl 28 April 2018, Hari Tari Dunia di Museum Ullen Sentalu Kaliurang Yogyakarta</p>\r\n\r\n<p>2. Tgl 29 April 2018, Solo menari 24 jam di kampus ISI Surakarta.</p>\r\n\r\n<p>3. Tgl 11 Mei 2018, Seminar dan sosialisasi Pemekaran Provinsi Kep Nias di Hotel Siliwangi Semarang.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dalam sambutannya ketua FKMN Etika Halawa, SE mengharapkan agar kedepan Pemerintah Kabupaten/Kota kepulauan Nias dapat mendukung kegiatan-kegiatan yang dilakukan Organisasi Nias di luar Daerah Nias. Kata Halawa. Kegiatan ini sebagai ajang Pemerintah Kabupaten/Kota Kepulauan Nias untuk mempromosikan Budaya Daerah masing di luar pulau Nias, bukan hanya di Nias saja. Harapnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dalam kegiatan Maha Karya Ono Niha 2018 ini diisi dengan kemasan budaya Nias di seperti berbagai jenis Tari yaitu menampilkan Tari Ya,ahowu,Tari Tuwu, Tari Mogaele, Tari Sanikhi, Tari Sou Bagoa, Tari Baluse dan banyak lagi jenis Tari Budaya Nias yang ditampilkan, disertai Fashion dan HOMBO BATU (Lompat Batu) yang sangat memukau dan disaksikan oleh para wisatawan yang hadir di Candi Prambanan. Kegiatan ini didukung oleh mahasiswa Nias dari Jateng, Stiepari dan Unaki, Mahasiswa Yogyakarta IMN Sanata Darma, PSKAN Ukrim Yogyakarta.</p>\r\n\r\n<p>Dan juga dihibur oleh Penyanyi Ono Niha diantaranya, Fantos Waruwu (Nias), Foiman Zega ( Jakarta), Zanish Group, Invokafit Gulo ( Yogya).</p>\r\n\r\n<p>Begitu juga Fashion show menampilkan hasil desaine Ono Niha Oke Zendrato dari Medan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dalam kegiatan yang di pelopori oleh FKMN ini, bertujuan untuk mempromosikan budaya yang ada di seluruh Kabupaten /Kota yang ada di pulau Nias, serta memperkenalkan potensi yang ada sebagai bentuk dukungan untuk memekarkan Kepulauan Nias menjadi Provinsi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dalam sambutannya Bupati Nias Barat Memyampaikan terimakasih atas atensi Organisasi /perkumpulan masyarakat Nias yang telah aktif melaksanakan kegiatan ini sebagai langkah untuk memperkenalkan Kepulauan Nias dengan kekayaan budaya yang terus dilestarikan oleh generasi muda. Kata Daeli sapaan akrab Bupati Nias Barat.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Semoga ke depan adik-adik Mahasiswa/i akan semakin bangga akan Ono Niha yang kelak akan memimpin ke depan, khususnya Pemerintahan di Kepulauan Nias&rdquo;. Tutupnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Salah seorang pengunjung mengatakan bahwa budaya daerah dari Nias itu sangat menghibur, baik Tari-tariannya, Fashion, dan Lompat Batu sangat menghibur. Kata Mas Kamto salah seorang pengunjung yang memanfaatkan liburan di Candi Prambanan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Secara terpisah Ketua Panitia Penunjang Waruwu M.si mengatakan dengan berlangsungnya kegiatan ini secara berkesinambungan, diharapkan Budaya kita tetap terjaga. Karena budaya itu tidak bisa dinilai secara materi. Maka kita sebagai Ono Niha harus bergandengan tangan untuk memperkenalkan potensi yang ada di pulau Nias. Mari kita bersatu mendukung kegiatan-kegiatan ini dan semoga perjuangan kita, Kepulauan Nias menjadi Provinsi tidak berhenti sampai disini. Mari tetap menggelorakan semangat akan kecintaan kita kepada Budaya untuk melestarikannya.</p>', '2018-07-24 22:28:28', '2018-07-24 22:28:28'),
(58, '<p>Menteri Pariwisata Arief Yahya optimis bahwa Kepulauan Nias di Sumatera Utara bisa&nbsp;berkembang menjadi destinasi kelas dunia.<br />\r\n<br />\r\nArief&nbsp;menargetkan hingga tahun 2024 mendatang Kepulauan Nias akan dikunjungi 1 juta orang wisatawan, dari jumlah sekarang baru sekitar 60 ribu orang.</p>\r\n\r\n<p>&quot;Bila dari 1 juta wisatawan tersebut sebanyak 10 persennya atau 100 ribunya adalah wisatawan mancanegara (wisman) akan diperoleh devisa langsung sebesar Rp 1,1 triliun dan ini akan mensejahterakan masyarakat Kepulauan Nias,&quot; kata Arief dalam acara peluncuran &#39;Festival Ya&#39;ahowu Nias 2018&#39; di di Balairung Soesilo Soedarman, Gedung Sapta Pesona Jakarta, pada Senin (25/6).&nbsp;<br />\r\n<br />\r\n<br />\r\nAcara peluncuran &#39;Festival Ya&#39;ahowu Nias 2018&#39; juga dihadiri oleh Menteri Hukum &amp; HAM&nbsp;yang juga sebagai tokoh masyarakat Nias Yasona Laoly serta&nbsp;Bupati Nias Selatan&nbsp; Hilarius Duha.<br />\r\n<br />\r\n&#39;Festival Ya&#39;ahowu Nias 2018&#39; yang bakal digelar di Nias Selatan pada 16-20 November 2018 menargetkan jumlah pengunjung sekitar 50 ribu orang.&nbsp;<br />\r\n<br />\r\nSejumlah rangkaian acara yang digelar mulai dari parade seni budaya keliling kota sampai atraksi lompat batu yang menjadi tradisi masyarakat Kepulauan Nias.<br />\r\n<br />\r\nSelain &#39;Festival Ya&#39;ahowu Nias 2018&#39;, tahun ini Kepulauan Nias juga akan menjadi tuan rumah rangkaian &#39;World Surfing League&#39; yang akan digelar di Pantai Saroke pada 24-28 Agustus 2018.&nbsp;<br />\r\n<br />\r\nArief menjelaskan kunci menjadi destinasi utama kelas dunia adalah meningkatkan fasilitas unsur 3A (Atraksi, Amenitas, dan Aksesbilitas).&nbsp;<br />\r\n<br />\r\nKepulauan Nias sudah punya unsur atraksi berupa festival dan ajang surfing dunia. Dari sisi amenitas, Arief mengatakan bahwa homestay dan bandara ikut menunjang.<br />\r\n<br />\r\n&quot;Bandara internasional menjadi kunci sebuah destinasi bisa berkembang lebih. Ini telah dibuktikan Banyuwangi yang pariwisatanya tumbuh 300 persen setelah memiliki bandara internasional.&nbsp; Begitu pula di Danau toba yang ikut tumbuh tiga kali lipat,&quot; kata Arief.<br />\r\n<br />\r\nSaat ini Bandara Binaka Nias, baru dikembangkan dengan panjang landasan pacu 2.200-2.2500 meter dan lebar 30 meter baru bisa didarati pesat&nbsp;Bombardier&nbsp;CRJ 1000 berkapasitas 100 penumpang.&nbsp;<br />\r\n<br />\r\nUntuk menjadi bandara internasional minimal panjang landasan 2.500 meter lebar 45 meter dengan kekuatan menahan beban 56 PCN supaya dapat didarati pesawat jenis &nbsp;Boeing 737-800.<br />\r\n<br />\r\nPariwisata Kepulauan Nias memang sudah menunjukkan kemajuan. Hal itu terlihat dari jumlah kunjungan wisatawan yang pada tahun 2016 hanya sekitar 40 ribu orang&nbsp;kemudian&nbsp;pada tahun 2017 meningkat menjadi 60 ribu orang.<br />\r\n<br />\r\nTahun depan wisatawan yang datang ditargetkan berjumlah 100 ribu orang. Dan hingga tahun 2024 yang ditargetkan datang berjumlah 1 juta orang.<br />\r\n<br />\r\nYasona ikut mengajak masyarakat Kepulauan Nias serta pemerintah daerah (empat kabupaten dan satu kota) bergandeng tangan untuk memajukan pariwisata di sana.</p>', '2018-07-24 22:32:29', '2018-07-24 22:32:29'),
(59, 'Jika wisatawan menggunakan transportasi udara untuk sampai di Kota Gunungsitoli, terlebih dahulu transit di Bandar Udara  Internasional Kualanamu Medan atau terkadang bisa juga melalui Bandara Internasional Minangkabau. Khusus rute Bandar Udara Kualanamu ke Bandar Udara Binaka waktu tempuh yang digunakan sekitar 45 menit hingga 1 jam. Perusahaan maskapai yang melayani jalur Kualanmu ke Binaka ada 2 jenis, Wings Air milik Lion Air dan ATR 72-600 Explore milik Garuda Indonesia. Harga tiket pesawat menuju ke Nias bervariasi mulai dari 500 ribu-1,2 juta.\r\n\r\nSetelah sampai di Bandar udara Binaka, para wisatawan dapat naik mobil jenis avanza dengan harga ongkos sekitar Rp. 50.000. Jarak tempuh dari Bandar Udara Binaka sekitar 1 jam menuju Kota.', '2018-07-24 22:37:53', '2018-07-24 22:37:53'),
(60, 'Bagi para wisatawan yang suka tantangan bisa menggunakan transportasi laut. Jika wisatawan berangkat dari Medan, dapat menggunakan transportasi darat dengan waktu tempuh 10-12 jam. Biasanya ongkos mobil Medan ke Sibolga sekitar Rp. 140.000. Dari Pelabuhan Sibolga dapat menggunakan kapal penumpang yang berlayar pada malam hari sekitar pukul 21.00 ke Kota Gunungsitoli. Biasanya kapal penumpang berlayar 3 kali dalam seminggu. Harga tiket kapal sekitar Rp. 80.000 hingga Rp. 120.000 (tergantung class).', '2018-07-24 22:40:39', '2018-07-24 22:40:39'),
(61, 'Bagi para wisatawan yang suka tantangan bisa menggunakan transportasi laut. Jika wisatawan berangkat dari Medan, dapat menggunakan transportasi darat dengan waktu tempuh 10-12 jam. Biasanya ongkos mobil Medan ke Sibolga sekitar Rp. 140.000. Dari Pelabuhan Sibolga dapat menggunakan kapal penumpang yang berlayar pada malam hari sekitar pukul 21.00 ke Kota Gunungsitoli. Biasanya kapal penumpang berlayar 3 kali dalam seminggu. Harga tiket kapal sekitar Rp. 80.000 hingga Rp. 120.000 (tergantung class).', '2018-07-24 22:41:08', '2018-07-24 22:41:08'),
(62, 'asdasda', '2018-07-24 22:41:45', '2018-07-24 22:41:45'),
(63, '<p>sdasdasdasd</p>', '2018-07-24 22:44:47', '2018-07-24 22:44:47'),
(64, 'asdasda', '2018-07-24 22:46:00', '2018-07-24 22:46:00'),
(65, 'Bagi para wisatawan yang suka tantangan bisa menggunakan transportasi laut. Jika wisatawan berangkat dari Medan, dapat menggunakan transportasi darat dengan waktu tempuh 10-12 jam. Biasanya ongkos mobil Medan ke Sibolga sekitar Rp. 140.000. Dari Pelabuhan Sibolga dapat menggunakan kapal penumpang yang berlayar pada malam hari sekitar pukul 21.00 ke Kota Gunungsitoli. Biasanya kapal penumpang berlayar 3 kali dalam seminggu. Harga tiket kapal sekitar Rp. 80.000 hingga Rp. 120.000 (tergantung class).', '2018-07-24 22:46:38', '2018-07-24 22:46:38'),
(66, 'Bagi para wisatawan yang suka tantangan bisa menggunakan transportasi laut. Jika wisatawan berangkat dari Medan, dapat menggunakan transportasi darat dengan waktu tempuh 10-12 jam. Biasanya ongkos mobil Medan ke Sibolga sekitar Rp. 140.000. Dari Pelabuhan Sibolga dapat menggunakan kapal penumpang yang berlayar pada malam hari sekitar pukul 21.00 ke Kota Gunungsitoli. Biasanya kapal penumpang berlayar 3 kali dalam seminggu. Harga tiket kapal sekitar Rp. 80.000 hingga Rp. 120.000 (tergantung class).', '2018-07-24 22:47:31', '2018-07-24 22:47:31'),
(67, '<p>Ini contoh artikel</p>', '2018-07-27 02:16:15', '2018-07-27 02:16:15'),
(68, '<p>Pulau Asu adalah pulau kecil berpenghuni. Masih jauh dari peradaban sehingga kelestarian ekosistem di Pulau Asu terutama keindahan pemandangan bawah lautnya begitu eksotis. Pulau Asu adalah surga bagi kegiatan snorkling, diving, dan fishing sehingga kerap dikunjungi oleh wisatawan.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="https://3.bp.blogspot.com/-w7V0Hz_pn8c/UqsieE6lAJI/AAAAAAAADIw/71RbaMb3Gow/s1600/Pulau+Asu+DI+Nias+Barat.jpg"><img src="https://3.bp.blogspot.com/-w7V0Hz_pn8c/UqsieE6lAJI/AAAAAAAADIw/71RbaMb3Gow/s400/Pulau+Asu+DI+Nias+Barat.jpg" style="height:268px; width:400px" /></a></p>\r\n\r\n<p><br />\r\nPulau Asu adalah surga wisata memancing, karena pada faktanya setiap wisatawan yang datang tak akan pernah melewatkan aktifitas yang menuntut kesabaran ini. Berbagai jenis ikan untuk dikonsumsi hidup di perairan pulau Asu dan jumlahnya sangatlah banyak. Jadi tidak perlu berlama-lama melemparkan umpan kail, tunggu beberapa menit saja maka bersiaplah mengumpulkan tenaga menarik ikan yang menantang anda.&nbsp;<br />\r\n<br />\r\n&nbsp;</p>\r\n\r\n<p><a href="https://4.bp.blogspot.com/--zVY5zJxEI4/Uqsi571XhqI/AAAAAAAADI4/zAgfJihTA-M/s1600/Pulau+Asu+Tersembunyi.jpg"><img src="https://4.bp.blogspot.com/--zVY5zJxEI4/Uqsi571XhqI/AAAAAAAADI4/zAgfJihTA-M/s400/Pulau+Asu+Tersembunyi.jpg" style="height:265px; width:400px" /></a></p>\r\n\r\n<p><br />\r\nTapi ada hal unik lain yang perlu anda ketahui, bila anda tengah mengarungi laut jangan terkejut. Lumba-lumba si sahabat manusia akan menggoda anda dengan melakukan atraksi lompatnya bersama komunitasnya. Ahh... this is awesome, right?&nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p><a href="https://3.bp.blogspot.com/-x2IyoJkLSjc/UqsjKp9mLSI/AAAAAAAADJA/pcszK69VmIQ/s1600/selancar-nias.jpg"><img src="https://3.bp.blogspot.com/-x2IyoJkLSjc/UqsjKp9mLSI/AAAAAAAADJA/pcszK69VmIQ/s400/selancar-nias.jpg" style="height:266px; width:400px" /></a></p>\r\n\r\n<p><br />\r\nKekayaan terumbu karang pulau asu tak perlu diragukan lagi. Bahkan terumbu karang yang jarang ditemui di dunia bisa ditemukan di pulau Asu. Termasuk ikan warna-warni seperti pelangi yang harganya bila dipasaran sangat mahal. Sehingga tidak ada kecewa bila sudah menginjakkan kaki di pulau Asu.&nbsp;</p>', '2018-07-27 07:55:04', '2018-07-27 07:55:04'),
(69, '<p>Yahowu Ono Niha Nias.....!&nbsp;<br />\r\nmerupaan sapaan yang kental di telinga masyarakat Nias dan wisatawan baik lokal maupun nasional.</p>\r\n\r\n<p><br />\r\nSebuah pulau kecil yang termasuk kedalam kawasan kecamatan Sirombu, Nias Barat Sumatera Utara.<br />\r\n<br />\r\nPulau Bogi dengan luasnya yang tergolong kecil merupakan destinasi wisata bahari di Nias Barat Pesona keindahan terumbu karang di bawah laut, Pasir putih disepanjang pantai, aneka ragam ikan berwarna warni menjadi alasan mengapa tempat ini layak dijadikan sebagai tempat snorkling, diving, dan fishing di Nias.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="https://2.bp.blogspot.com/-l9a7MuOKpTs/UqsSkwO3_1I/AAAAAAAADHc/Re0Lc3le7tk/s1600/images.jpg"><img src="https://2.bp.blogspot.com/-l9a7MuOKpTs/UqsSkwO3_1I/AAAAAAAADHc/Re0Lc3le7tk/s400/images.jpg" style="height:298px; width:400px" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wisata bahari adalah produk andalan dari kepulauan Nias. Salah satu pulau yang wajib dikunjungi bila tengah berplesir ke daerah yang terkenal dengan upacara lombat batu ini adalah Pulau Bogi di Nias Barat.&nbsp;<br />\r\n<br />\r\nPulau Bogi terkenal karena dahsyatnya gelombang laut, sehingga cocok dijadikan sebagai spot surfing terbaik. Hal ini berkaitan erat dengan keberadaan Nias yang termasuk di kawasan samudera Hindia yang terkenal dengan ombak tak terprediksi.&nbsp;<br />\r\n<br />\r\nUntuk mencapai pulau ini diperlukan waktu sekitar 6 jam dari Gunung Sitoli dengan menggunakan kapal. Amatlah mudah untuk mencapai daerah ini, karena kapal-kapal di Nias banyak yang menyediakan sistem sewa.&nbsp;</p>', '2018-07-27 07:58:52', '2018-07-27 07:58:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `budayas`
--

CREATE TABLE `budayas` (
  `id` int(10) UNSIGNED NOT NULL,
  `budaya_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_id` int(10) UNSIGNED NOT NULL,
  `budaya_gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budaya_lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `budayas`
--

INSERT INTO `budayas` (`id`, `budaya_name`, `artikel_id`, `budaya_gambar`, `budaya_lokasi`, `created_at`, `updated_at`) VALUES
(2, 'TARI MAENA NIAS', 28, '/img/img-budaya/1532461798.jpg', 'Pulau Nias', '2018-07-24 12:49:59', '2018-07-24 12:49:59'),
(3, 'TARI PERANG', 29, '/img/img-budaya/1532463406.jpg', 'Nias Selatan', '2018-07-24 13:16:47', '2018-07-24 13:16:47'),
(4, 'RUMAH ADAT NIAS', 30, '/img/img-budaya/1532463691.jpg', 'Pulau Nias', '2018-07-24 13:21:31', '2018-07-24 13:21:31'),
(5, 'TARI MOYO', 31, '/img/img-budaya/1532464112.jpg', 'Pulau Nias', '2018-07-24 13:28:32', '2018-07-24 13:28:32'),
(6, 'PAKAIAN ADAT SUKU NIAS', 32, '/img/img-budaya/1532464330.jpg', 'Pulau Nias', '2018-07-24 13:32:10', '2018-07-24 13:32:10'),
(7, 'Tarian Fame’e Afo', 33, '/img/img-budaya/1532470281.jpg', 'Pulau Nias', '2018-07-24 15:11:21', '2018-07-24 15:11:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `wisata_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `gallery_gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `wisata_id`, `user_id`, `gallery_gambar`, `created_at`, `updated_at`) VALUES
(1, 5, 11, '/img/img-wisata/gallery/1532505773.jpg', '2018-07-25 01:02:54', '2018-07-25 01:02:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jeniswisatas`
--

CREATE TABLE `jeniswisatas` (
  `id` int(10) UNSIGNED NOT NULL,
  `jeniswisata_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jeniswisatas`
--

INSERT INTO `jeniswisatas` (`id`, `jeniswisata_name`, `created_at`, `updated_at`) VALUES
(1, 'Alam', '2018-07-09 11:18:41', '2018-07-09 11:18:41'),
(2, 'Sejarah', '2018-07-09 11:19:01', '2018-07-09 11:19:01'),
(3, 'Religi', '2018-07-09 11:19:26', '2018-07-09 11:19:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamuses`
--

CREATE TABLE `kamuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `nias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indonesia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kamuses`
--

INSERT INTO `kamuses` (`id`, `nias`, `indonesia`, `created_at`, `updated_at`) VALUES
(2, 'Asio', 'Garam', '2018-07-26 05:45:28', '2018-07-26 05:45:28'),
(4, 'Lahia', 'Lengkuas', '2018-07-26 05:46:12', '2018-07-26 05:46:12'),
(5, 'Laheto', 'Bekas', '2018-07-26 05:46:34', '2018-07-26 05:46:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontaks`
--

CREATE TABLE `kontaks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kontaks`
--

INSERT INTO `kontaks` (`id`, `name`, `email`, `topik`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'Filman', 'filmantapgullo@gmail.com', 'Iklan', 'Apakah saya boleh memasukkan iklan kedalam web ini, please deh\r\n...???', NULL, NULL),
(2, 'Alex Berliando Lase', 'alex@lase.com', 'Lowongan Pekerjaan', 'Nama saya Alex Lase, saya mau nanya nih bro, ada lowongan pekerjaan di tempat anda. please deh aku lagi ngerjakan TA, tp agak malas aku ini.... tolong di balas ya', '2018-06-28 11:17:03', '2018-06-28 11:17:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliners`
--

CREATE TABLE `kuliners` (
  `id` int(10) UNSIGNED NOT NULL,
  `kuliner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_id` int(10) UNSIGNED NOT NULL,
  `kuliner_gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuliner_lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kuliners`
--

INSERT INTO `kuliners` (`id`, `kuliner_name`, `artikel_id`, `kuliner_gambar`, `kuliner_lokasi`, `created_at`, `updated_at`) VALUES
(1, 'Fakhe Nifalögu', 37, '/img/img-kuliner/1532471415.jpg', 'Pulau Nias', '2018-07-24 15:30:15', '2018-07-24 15:30:15'),
(2, 'Hambae Nititi', 38, '/img/img-kuliner/1532471714.jpg', 'Pulau Nias', '2018-07-24 15:35:14', '2018-07-24 15:35:14'),
(3, 'Silio Guro', 39, '/img/img-kuliner/1532472108.jpg', 'Pulau Nias', '2018-07-24 15:41:48', '2018-07-24 15:41:48'),
(4, 'Harinake', 40, '/img/img-kuliner/1532472203.jpg', 'Pulau Nias', '2018-07-24 15:43:23', '2018-07-24 15:43:23'),
(5, 'Ni’owuru', 41, '/img/img-kuliner/1532472243.jpg', 'Pulau Nias', '2018-07-24 15:44:03', '2018-07-24 15:44:03'),
(6, 'Köfö- Köfö', 42, '/img/img-kuliner/1532472290.jpg', 'Pulau Nias', '2018-07-24 15:44:50', '2018-07-24 15:44:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_24_133018_create_kontaks_table', 2),
(6, '2018_06_27_064907_create_wisata_table', 4),
(17, '2014_10_12_000000_create_users_table', 9),
(20, '2018_07_02_030050_create_profiles_table', 10),
(23, '2018_07_09_111629_create_jeniswisatas_table', 13),
(25, '2018_07_03_025545_create_ulasans_table', 15),
(26, '2018_06_25_090146_create_artikels_table', 16),
(27, '2018_06_25_090316_create_budayas_table', 17),
(28, '2018_06_28_093621_create_transportasis_table', 17),
(29, '2018_06_27_065647_create_wisatas_table', 18),
(31, '2018_07_14_145814_create_ratings_table', 20),
(32, '2018_06_28_071502_create_kuliners_table', 21),
(33, '2018_07_20_121645_create_kamuses_table', 22),
(34, '2018_07_23_084639_create_galleries_table', 22),
(37, '2018_06_29_125732_create_acaradanfestivals_table', 23);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `pro_sampulImg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sampul.jpg',
  `pro_tempatLahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_tglLahir` date NOT NULL,
  `pro_jenisKelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_telp` int(11) NOT NULL,
  `pro_alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `rateable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rateable_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ratings`
--

INSERT INTO `ratings` (`id`, `created_at`, `updated_at`, `rating`, `rateable_type`, `rateable_id`, `user_id`) VALUES
(7, '2018-07-24 23:49:30', '2018-07-24 23:49:30', 4, 'App\\Wisata', 8, 5),
(8, '2018-07-24 23:50:06', '2018-07-24 23:50:06', 5, 'App\\Wisata', 6, 5),
(9, '2018-07-24 23:50:45', '2018-07-24 23:50:45', 5, 'App\\Wisata', 5, 5),
(10, '2018-07-24 23:51:40', '2018-07-24 23:51:40', 5, 'App\\Wisata', 3, 5),
(11, '2018-07-24 23:53:18', '2018-07-24 23:53:18', 5, 'App\\Wisata', 8, 6),
(12, '2018-07-24 23:54:10', '2018-07-24 23:54:10', 3, 'App\\Wisata', 7, 6),
(13, '2018-07-24 23:55:01', '2018-07-24 23:55:01', 5, 'App\\Wisata', 4, 6),
(14, '2018-07-24 23:56:23', '2018-07-24 23:56:23', 5, 'App\\Wisata', 8, 7),
(15, '2018-07-24 23:57:12', '2018-07-24 23:57:12', 3, 'App\\Wisata', 4, 7),
(16, '2018-07-24 23:57:50', '2018-07-24 23:57:50', 4, 'App\\Wisata', 3, 7),
(17, '2018-07-24 23:58:19', '2018-07-24 23:58:19', 5, 'App\\Wisata', 6, 7),
(18, '2018-07-24 23:59:27', '2018-07-24 23:59:27', 3, 'App\\Wisata', 6, 8),
(19, '2018-07-24 23:59:42', '2018-07-24 23:59:42', 3, 'App\\Wisata', 5, 8),
(20, '2018-07-25 00:00:54', '2018-07-25 00:00:54', 3, 'App\\Wisata', 7, 9),
(21, '2018-07-25 00:01:20', '2018-07-25 00:01:20', 4, 'App\\Wisata', 5, 9),
(22, '2018-07-25 00:03:34', '2018-07-25 00:03:34', 2, 'App\\Wisata', 5, 10),
(23, '2018-07-25 00:04:02', '2018-07-25 00:04:02', 4, 'App\\Wisata', 4, 10),
(24, '2018-07-25 00:48:49', '2018-07-25 00:48:49', 5, 'App\\Wisata', 7, 11),
(25, '2018-07-25 00:57:24', '2018-07-25 00:57:24', 5, 'App\\Wisata', 6, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportasis`
--

CREATE TABLE `transportasis` (
  `id` int(10) UNSIGNED NOT NULL,
  `transportasi_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_id` int(10) UNSIGNED NOT NULL,
  `transportasi_gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transportasi_jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transportasis`
--

INSERT INTO `transportasis` (`id`, `transportasi_name`, `artikel_id`, `transportasi_gambar`, `transportasi_jenis`, `created_at`, `updated_at`) VALUES
(5, 'Pesawat', 59, '/img/img-transportasi/1532497073.jpeg', 'Udara', '2018-07-24 22:37:53', '2018-07-24 22:37:53'),
(7, 'Kapal Laut', 66, '/img/img-transportasi/1532497652.JPG', 'Laut', '2018-07-24 22:47:32', '2018-07-24 22:47:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasans`
--

CREATE TABLE `ulasans` (
  `id` int(10) UNSIGNED NOT NULL,
  `wisata_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `isi_ulasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ulasans`
--

INSERT INTO `ulasans` (`id`, `wisata_id`, `user_id`, `isi_ulasan`, `created_at`, `updated_at`) VALUES
(13, 8, 5, 'Bagus Dekat Rumahku', '2018-07-24 23:49:30', '2018-07-24 23:49:30'),
(14, 6, 5, 'Indah dimana iki bg.... aku jarang pulang ke nias...', '2018-07-24 23:50:06', '2018-07-24 23:50:06'),
(15, 5, 5, 'Ini dekat rumah saya, rekomended untuk kesana,.....', '2018-07-24 23:50:45', '2018-07-24 23:50:45'),
(16, 3, 5, 'Banyak Kenangan, saat SMA, bagus untuk mengenal lebih dalam budaya Nias', '2018-07-24 23:51:40', '2018-07-24 23:51:40'),
(17, 8, 6, 'Bagus Pantainya.... Recomended Kesana', '2018-07-24 23:53:19', '2018-07-24 23:53:19'),
(18, 7, 6, 'Mohon akses kesana gan....', '2018-07-24 23:54:10', '2018-07-24 23:54:10'),
(19, 4, 6, 'Good', '2018-07-24 23:55:01', '2018-07-24 23:55:01'),
(20, 8, 7, 'Tempat Nongkrong saat SMA dulu....', '2018-07-24 23:56:23', '2018-07-24 23:56:23'),
(21, 4, 7, 'Sekarang itu kurang ter urus loh... pemerintahnya mana dunk.. bersuara kek...', '2018-07-24 23:57:12', '2018-07-24 23:57:12'),
(22, 3, 7, 'Bagus untuk melihat sejarah di nias', '2018-07-24 23:57:50', '2018-07-24 23:57:50'),
(23, 6, 7, 'Indah air terjunnya', '2018-07-24 23:58:19', '2018-07-24 23:58:19'),
(24, 6, 8, 'Bagus.. nice', '2018-07-24 23:59:27', '2018-07-24 23:59:27'),
(25, 5, 8, 'Bagus, keren', '2018-07-24 23:59:42', '2018-07-24 23:59:42'),
(26, 7, 9, 'Kurang bagus kayaknya tuh', '2018-07-25 00:00:54', '2018-07-25 00:00:54'),
(27, 5, 9, 'Bagus untuk ibdah...', '2018-07-25 00:01:20', '2018-07-25 00:01:20'),
(28, 5, 10, 'hmmmmmm', '2018-07-25 00:03:34', '2018-07-25 00:03:34'),
(29, 4, 10, 'good pleace....', '2018-07-25 00:04:02', '2018-07-25 00:04:02'),
(30, 7, 11, 'saya suka air terjun', '2018-07-25 00:48:49', '2018-07-25 00:48:49'),
(31, 6, 11, 'mantap sekali air nya', '2018-07-25 00:57:24', '2018-07-25 00:57:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/img/profile/avatar/avatar.jpg',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `admin`, `avatar`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, '/img/profile/avatar/avatar.jpg', 'admin@email.com', '$2y$10$VEYEE06v3vWbpG3uexIVQuu2n89cJD.b0Pd8bIGH.cKOej5FSw2ka', 'Z7jKdWVsHtAEPXvS3NfmtqFCtGnsmTU0qwGvMlIjOFRJECxrgwTcP8UqwQcj', '2018-07-20 02:22:02', '2018-07-20 02:22:02'),
(5, 'Alex Berliando Lase', 0, '/img/profile/avatar/avatar.jpg', 'alex@email.com', '$2y$10$UH0zVPMpADuTukX8knPASOIpfqEQUG.sk9.lEF0f0sxkaQ2LQJ8A2', '2Dppb12jYe8Y8ePgl9bL8e4ZzDvnsMjKv3OtHSGSKJqB8wtU6lfXqyhGcDvl', '2018-07-24 23:48:58', '2018-07-24 23:48:58'),
(6, 'Noni Handayani Gulo', 0, '/img/profile/avatar/avatar.jpg', 'noni@email.com', '$2y$10$CjNy.JgQrJ94oep9qFwzxuboymmQVxjx15zo5yMVodFCSpW5ATPYu', 'Nmbs7w2OsbhvYtxhH43uh7je64saX39fSEWTz4xEqEBx2pw03IE2PraWDC2q', '2018-07-24 23:52:38', '2018-07-24 23:52:38'),
(7, 'Tice Halawa', 0, '/img/profile/avatar/avatar.jpg', 'tice@email.com', '$2y$10$Hq.pW6mrSFE.DwfirPEwjOYPNv8tpscPeC.YeCO08gl0VBukuMR0K', '0Rs5MKrc9ukaatJ1KjRyUqyoabNK9U8RWW9zXtDDiawn6DqXvM01PNAFALvL', '2018-07-24 23:55:52', '2018-07-24 23:55:52'),
(8, 'Robin Hendrawan Aruan', 0, '/img/profile/avatar/avatar.jpg', 'robin@email.com', '$2y$10$WXGizPKlTRCQklPBsCzgauQbvBsn5WkxdGNHAjda6iQWe/iTahK/G', 'cTjQ1DRNpoAYlHWVHYQs8O69TmyPua0ZQHjWj06y5L6O3b0gbNumM8FtktgQ', '2018-07-24 23:58:54', '2018-07-24 23:58:54'),
(9, 'Koko Salman Harefa', 0, '/img/profile/avatar/avatar.jpg', 'koko@email.com', '$2y$10$.6Rs25Ls.YpvFLnpoaIEmO2QkAms6c4J/kk/OpC0bsNGWLs3sjIUC', 'WBgTFDKRlbSuxgN0n5lGppHdmhBiQMqytWMOQhKIyg56qzeaqJOgCxVqRqg7', '2018-07-25 00:00:19', '2018-07-25 00:00:19'),
(10, 'Putri Indah Waruwu', 0, '/img/profile/avatar/avatar.jpg', 'putri@email.com', '$2y$10$OiPj20tYZk/poKuVnCeI9.y7shp1AEAlhJ3mihFPN008jZNGhaLmm', 'JFRxnCdk04xTSKS3y6XXLsCKCstWujq3FAlDcPytomqaZY8iwOyGRuGju9Ek', '2018-07-25 00:03:06', '2018-07-25 00:03:06'),
(11, 'adven setiawan', 0, '/img/profile/avatar/avatar.jpg', 'adven@gmail.com', '$2y$10$GSomHTM81iLEOW4Yf/vcouhlJSMllbKvXBFY4reMFOmm8FQGJx4Oe', NULL, '2018-07-25 00:48:18', '2018-07-25 00:48:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisatas`
--

CREATE TABLE `wisatas` (
  `id` int(10) UNSIGNED NOT NULL,
  `wisata_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_id` int(10) UNSIGNED DEFAULT NULL,
  `wisata_gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wisata_lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wisata_jenis_id` int(10) UNSIGNED DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longtitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wisatas`
--

INSERT INTO `wisatas` (`id`, `wisata_name`, `artikel_id`, `wisata_gambar`, `wisata_lokasi`, `wisata_jenis_id`, `latitude`, `longtitude`, `created_at`, `updated_at`) VALUES
(3, 'Museum Pusaka Nias', 43, '/img/img-wisata/1532475457.jpg', 'Kota Gunungsitoli', 2, '1.2918063', '97.5868898', '2018-07-24 16:37:37', '2018-07-24 16:37:37'),
(4, 'TAMAN YA\'AHOWU', 44, '/img/img-wisata/1532475842.jpg', 'Kota Gunungsitoli', 1, '1.2918063', '97.5868898', '2018-07-24 16:44:02', '2018-07-24 16:44:02'),
(5, 'Taman Doa Bunda Maria', 45, '/img/img-wisata/1532476168.jpg', 'Kota Gunungsitoli', 3, '1.2485452', '97.6293487', '2018-07-24 16:49:28', '2018-07-24 16:49:28'),
(6, 'Air Terjun Baho Ndra', 46, '/img/img-wisata/1532476329.jpg', 'Kota Gunungsitoli', 1, '1.1835958', '97.6591073', '2018-07-24 16:52:09', '2018-07-24 16:52:09'),
(7, 'Air Terjun Humogo', 47, '/img/img-wisata/1532476778.jpg', 'Kota Gunungsitoli', 1, '1.1915469', '97.6410442', '2018-07-24 16:59:38', '2018-07-24 16:59:38'),
(8, 'Pantai Miga', 48, '/img/img-wisata/1532477080.jpg', 'Kota Gunungsitoli', 1, '1.2552211', '97.6375126', '2018-07-24 17:04:40', '2018-07-24 17:04:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acaradanfestivals`
--
ALTER TABLE `acaradanfestivals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acaradanfestivals_artikel_id_foreign` (`artikel_id`);

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `budayas`
--
ALTER TABLE `budayas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `budayas_artikel_id_foreign` (`artikel_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_wisata_id_index` (`wisata_id`),
  ADD KEY `galleries_user_id_index` (`user_id`);

--
-- Indexes for table `jeniswisatas`
--
ALTER TABLE `jeniswisatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamuses`
--
ALTER TABLE `kamuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuliners`
--
ALTER TABLE `kuliners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kuliners_artikel_id_foreign` (`artikel_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_rateable_type_rateable_id_index` (`rateable_type`,`rateable_id`),
  ADD KEY `ratings_rateable_id_index` (`rateable_id`),
  ADD KEY `ratings_rateable_type_index` (`rateable_type`),
  ADD KEY `ratings_user_id_index` (`user_id`);

--
-- Indexes for table `transportasis`
--
ALTER TABLE `transportasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transportasis_artikel_id_foreign` (`artikel_id`);

--
-- Indexes for table `ulasans`
--
ALTER TABLE `ulasans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ulasans_wisata_id_foreign` (`wisata_id`),
  ADD KEY `ulasans_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wisatas`
--
ALTER TABLE `wisatas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wisatas_artikel_id_index` (`artikel_id`),
  ADD KEY `wisatas_wisata_jenis_id_index` (`wisata_jenis_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acaradanfestivals`
--
ALTER TABLE `acaradanfestivals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `budayas`
--
ALTER TABLE `budayas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jeniswisatas`
--
ALTER TABLE `jeniswisatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kamuses`
--
ALTER TABLE `kamuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kuliners`
--
ALTER TABLE `kuliners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `transportasis`
--
ALTER TABLE `transportasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ulasans`
--
ALTER TABLE `ulasans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `wisatas`
--
ALTER TABLE `wisatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `acaradanfestivals`
--
ALTER TABLE `acaradanfestivals`
  ADD CONSTRAINT `acaradanfestivals_artikel_id_foreign` FOREIGN KEY (`artikel_id`) REFERENCES `artikels` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `budayas`
--
ALTER TABLE `budayas`
  ADD CONSTRAINT `budayas_artikel_id_foreign` FOREIGN KEY (`artikel_id`) REFERENCES `artikels` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `galleries_wisata_id_foreign` FOREIGN KEY (`wisata_id`) REFERENCES `wisatas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kuliners`
--
ALTER TABLE `kuliners`
  ADD CONSTRAINT `kuliners_artikel_id_foreign` FOREIGN KEY (`artikel_id`) REFERENCES `artikels` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `transportasis`
--
ALTER TABLE `transportasis`
  ADD CONSTRAINT `transportasis_artikel_id_foreign` FOREIGN KEY (`artikel_id`) REFERENCES `artikels` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ulasans`
--
ALTER TABLE `ulasans`
  ADD CONSTRAINT `ulasans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ulasans_wisata_id_foreign` FOREIGN KEY (`wisata_id`) REFERENCES `wisatas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  ADD CONSTRAINT `wisatas_artikel_id_foreign` FOREIGN KEY (`artikel_id`) REFERENCES `artikels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wisatas_wisata_jenis_id_foreign` FOREIGN KEY (`wisata_jenis_id`) REFERENCES `jeniswisatas` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
