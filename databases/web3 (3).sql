-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 01:07 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web3`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `nip` char(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `email` varchar(75) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tgllahir` date NOT NULL,
  `jenisk` varchar(15) NOT NULL,
  `banyakdonor` int(4) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(125) NOT NULL,
  `status` varchar(10) NOT NULL,
  `idjdarah` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`nip`, `nama`, `telp`, `email`, `alamat`, `agama`, `tempatlahir`, `tgllahir`, `jenisk`, `banyakdonor`, `username`, `password`, `status`, `idjdarah`) VALUES
('3958630583508880', 'ery sadewaaz', '093748238432', 'ery@sadenopo.com', 'kos belakang upn', 'Islam', 'indonesia', '1996-06-04', 'Islam', 76, 'ery', 'fcea920f7412b5da7be0cf42b8c93759', 'akun', 4),
('3920847583493587', 'uh rivaii', '089347523842', 'rivai@triolajang.com', 'karanganyar daerah mbejen lho', 'Islam', 'karanganyar', '1995-05-14', 'Islam', 1, 'rivai', 'fcea920f7412b5da7be0cf42b8c93759', 'akun', 5),
('3253523644354345', 'xxxxxxxxxx', '098775644553', 'dfdf@dgd', 'xxsxs', 'Islam', 'hfhfhf', '0000-00-00', 'Islam', 0, 'xxxx', 'ea416ed0759d46a8de58f63a59077499', 'akun', 1),
('3294758329438582', 'dwiss susanto', '089745374758', 'dwi@triolajang.com', 'klaten deket alun', 'Islam', 'klaten', '1995-11-23', 'Islam', 1, 'dwi', 'fcea920f7412b5da7be0cf42b8c93759', 'akun', 4),
('3313091405950001', 'muh rivai aa', '0897465312', 'rivai@ganteng', 'belum punya', 'isalam', 'gasa', '2016-12-07', 'perempuan', 7, 'rivaiizari', 'fcea920f7412b5da7be0cf42b8c93759', 'akun', 4),
('3313091498600001', 'fandy yoga', '34737292', 'fandi@cheryy', 'sama punyaknya cery tersayang', 'dasdas', 'fasfsafsaf', '2016-12-01', 'cekkeke', 11, 'fandi', '807659cd883fc0a63f6ce615893b3558', 'akun', 2);

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi` text COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `gambar`, `tanggal`, `hits`) VALUES
(56, '890 Pendonor Darah Sukarela Terima Penghargaan', 'Palang Merah Indonesia (PMI) Jawa Tengah, Senin  (10/10) memberikan penghargaan kepada 890 Pendonor Darah Sukarela pada acara Penyerahan Penghargaan dan Temu Donor Darah Sukarela (DDS) Tahun 2016 di Gedung Gradhika Bhakti Praja, Semarang. \r\n\r\nKetua PMI Jateng, Imam Triyanto mengatakan bahwa  Penyerahan Penghargaan dan Temu Donor Darah Sukarela ke 50 dan 75 kali merupakan acara rutin yang dilaksanakan 1 (satu) tahun sekali bersamaan dalam acara peringatan Hari Ulang Tahun (PMI) Palang Merah Indonesia.\r\n\r\n ?Tahun ini Pendonor yang akan dihadapkan kepada Gubernur untuk menerima penghargaan sebanyak 890 orang terdiri dari DDS (Donor Darah Sukarela)   ke 50 kali sebanyak 647 orang dan DDS (Donor Darah Sukarela)  ke 75 kali sebanyak 243 orang?. Ucapnya\r\n\r\nUTD (Unit Transfusi Darah) PMI di Jawa Tengah selalu berupaya semaksimal mungkin untuk dapat dan mampu menyediakan darah yang aman dan siap pakai dalam jumlah cukup dengan biaya terjangkau.\r\n\r\n?Berdasarkan data di PMI Provinsi Jawa Tengah, sampai dengan pertengahan tahun 2016 terkumpul sebanyak 127.364 kantong darah, dengan jumlah Donor Darah Sukarela (DDS) sebesar 99% dan Donor Darah Pengganti (DDP) sebesar 1%, terdiri dari pendonor pria 73%; pendonor wanita 27%; kelompok umur 17-30 sebesar 43%; kelompok umur 31-40 sebesar 37%; kelompok umur 41-59 sebesar 19%; kelompok umur lebih dari 60 tahun ke atas sebesar 1%?. Jelasnya\r\n\r\nGubernur Jawa Tengah, Ganjar Pranowo dalam sambutannya menyampaikan bahwa penghargaan yang diberikan ini tidak ada artinya dibandingkan dengan keikhlasan para pendonor yang dengan dengan rela menyumbangkan darahnya.\r\n\r\n?Jumlah perolehan darah di Jawa Tengah saat ini sekitar 127.364 Kantong jika dibandingkan dengan jumlah penduduk di Jawa Tengah sekitar tiga puluhan ribu jiwa maka perlu ditingkatkan lagi, sehingga ketersediaan akan kebutuhan darah bisa dipenuhi.\r\n', 'penghargaan-pmi.jpg', '2016-12-05', 5),
(57, 'Aplikasi Teknologi Dalam Rekrutmen Donor Darah Sukarela', 'Perkembangan teknologi informasi beberapa dasawarsa ini semakin pesat dengan adanya internet, komputer, video game, telepon genggam dan perangkat digital lainnya. Teknologi ini bertujuan untuk semakin mempermudah kualitas interaksi dan komunikasi kehidupan umat manusia di muka bumi. Namun dalam bidang donor darah, aplikasi teknologi ini dirasakan masih kurang pemanfaatannya khususnya di Indonesia. Penerapan teknologi informasi terkini dalam rekrutmen donor darah diharapkan dapat melestarikan serta menambah jumlah calon donor darah sukarela dengan metoda pendekatan yang lebih modern dan menarik.\r\n\r\nData menunjukkan pengguna telepon genggam di Indonesia sudah melebihi angka 200 juta. Dengan demikian ini merupakan potensi yang sangat bagus untuk rekrutmen donor darah sukarela yang baru ataupun yang sudah berjalan. Penggunaan pesan teks atau yang lebih populer disebut SMS (Short Message Service) merupakan media yang efektif  dan penting dalam berkomunikasi dengan donor. Penulis mengetahui ada beberapa UTD di Indonesia yang pernah dijadikan tempat penelitian oleh mahasiswa bidang Teknologi Informasi untuk menerapkan penggunaan sistem informasi seperti SMS tersebut untuk kepentingan donor darah. Namun sangat disayangkan hal ini belum mendapat respon lebih lanjut untuk dapat diterapkan secara komprehensif di UTD tersebut. Insiatif ini sebenarnya dapat ditindaklanjuti dalam skala nasional dengan mengajak kerjasama beberapa vendor atau penyedia layanan jasa telekomunikasi seperti misalnya Telkomsel, Indosat atau Pro XL. Kerjasama tersebut misalnya dapat berupa pengiriman pesan teks gratis kepada pengguna jasa layanan yang berisikan materi tentang donor darah atau dapat berupa pesan yang mengingatkan jadwal donor selanjutnya bagi si penerima pesan.\r\n\r\nDengan penerapan sistem pesan teks melalui telepon genggam ini juga dapat mempersingkat alur komunikasi seperti sebelumnya yang bersifat konvensional. Seperti pada kasus darah langka ataupun stok darah habis untuk golongan darah tertentu, SMS dapat menjadi media efektif untuk mengatasi masalah ini. Contoh kalimat seperti ?Persediaan Golongan Darah O semakin terbatas, kami membutuhkan anda hari ini atau besok untuk donor darah? dapat menggugah kesadaran langsung si penerima pesan serta empati sehingga timbul untuk keinginan mendonorkan darahnya. Dengan demikian keterbatasan jumlah stok golongan darah O dapat segera teratasi di UTD tersebut sebagai contoh.\r\n\r\nSeperti kebanyakan teknologi lainnya, sistem ini juga harus dipergunakan secara hati-hati karena jika tidak dapat menimbulkan kontradiksi di masyarakat. Penggunaan SMS seharusnya terlebih dahulu mendapatkan izin atau sepengetahuan pengguna layanan jasa karena mungkin dapat membebani biayanya sendiri. Sehingga setelah donor darah, dapat ditanyakan kepadanya apakah bersedia atau tidak jika di masa yang akan datang suatu saat akan menerima pesan teks yang berisikan permintaan darah atau jadwal donor darah selanjutnya. Jadi penjelasan yang lengkap dan detail serta sosialisasi masif merupakan hal yang perlu dilakukan jika akan menerapkan sistem tersebut. Dilihat dari segi efisiensi waktu dan biaya, sistem ini juga sangat menguntungkan dimana waktu yang digunakan lebih singkat (real time) serta irit dan hanya membutuhkan tenaga pelaksana dalam jumlah sedikit. Pengguna telepon genggam juga selalu bertambah dan saat ini hampir semua orang memilikinya. Sekali lagi, ini merupakan potensi yang baik dalam bidang rekrutmen donor darah sukarela.\r\n\r\nDi luar negeri yang sudah banyak menggunakan donor sistem apheresis, juga sudah dikembangkan dengan apa yang disebut ?entertainment technology? untuk para donor. Selama mendonorkan darahnya, dia dapat menonton TV atau DVD, main Video Games, ber-Internet ataupun sekedar cek email.\r\n', '1465699606_artikel-ayo-donor-darah.jpg', '2016-12-05', 4),
(61, 'Jokowi: Pendonor Darah Pantas Disebut Pejuang Kemanusiaan', 'Presiden Joko Widodo menghadiri acara penganugerahan Satyalancana Kebaktian Sosial bagi Donor Darah Sukarela 100 Kali, pagi ini di Istana Kepresidenan, Bogor.&#8206; \r\n\r\nDalam sambutannya, Presiden Joko Widodo menyampaikan penghargaan setinggi-tingginya serta ucapan terima kasih kepada para pendonor darah yang telah 100 kali menyumbangkan darahnya untuk semua orang yang membutuhkannya. \r\n\r\n"Teladan donor darah sukarela perlu diikuti oleh seluruh warga bangsa karena dengan tetesan darah yang dimilikinya dapat memberi sumbangan yang sangat berarti bagi kehidupan orang lain yang membutuhkan," ujar Jokowi di Bogor, Jumat (18/12/2015). \r\n\r\nMenurut Jokowi, ini merupakan tindakan kemanusiaan yang tidak ternilai serta merupakan penegasan akan arti penting persaudaraan, soliditas, dan kepedulian terhadap sesama, juga meneguhkan kembali arti kesetiakawanan.\r\n\r\n"Tindakan kemanusiaan seperti ini tidak ternilai harganya, sehingga pantaslah saudara-saudara disebut sebagai pejuang kemanusiaan," ucap Jokowi.\r\n\r\nPada kesempatan ini, Jokowi kembali menekankan pentingnya reaktualisasi nilai-nilai solidaritas dan kepedulian sesama. Presiden mengamati bahwa aksi solidaritas yang kuat akan muncul saat terjadi bencana.\r\n\r\n"Harapannya aksi tersebut juga muncul dalam keseharian, dan donor darah adalah salah satu contohnya," kata Jokowi. \r\n\r\nMantan Gubernur DKI Jakarta itu menginginkan agar Gerakan Nasional Donor Darah yang telah dicetuskan pada Acara Peringatan Hari Kesetiakawanan Nasional 2007 lalu, harus terus digulirkan dan dikampanyekan. \r\n\r\nTujuannya bukan hanya memberi dukungan yang lebih besar pada pelayanan penyediaan darah, tapi juga untuk mendorong munculnya aksi kemanusiaan yang bergerak mulai dari desa sampai kota. \r\n\r\n"Saya yakin, melalui program donor darah, masyarakat diajak untuk memiliki empati dan saling tenggang rasa terhadap sesama, yang mana hal ini adalah bagian dari nilai-nilai kesetiakawanan sosial," ujar Jokowi.\r\n\r\nJokowi juga memberikan apresiasi kepada Palang Merah Indonesia yang selalu terlibat dalam berbagai aksi kemanusiaan seperti pencarian dan penyampaian berita keluarga, pelayanan sosial dan kesehatan masyarakat, transfusi darah, hingga pembinaan remaja dan relawan. \r\n\r\n"Ini merupakan kegiatan positif yang banyak memberi manfaat dalam masyarakat," kata dia.\r\n\r\nSecara khusus, Jokowi meminta PMI untuk memperkuat edukasi tentang kepalangmerahan, pendidikan nilai-nilai kemanusiaan dan generasi muda. \r\n\r\n"Gunakan cara-cara kreatif, inovatif untuk mendorong anak-anak muda terlibat dalam aksi kemanusiaan," ucap Jokowi.\r\n\r\n&#8206;Selain dihadiri oleh para anggota PMI dan para pendonor yang telah menyumbangkan darahnya 100 kali atau lebih, acara tersebut juga dihadiri oleh Ketua Umum PMI Ginandjar Kartasasmita, Menteri Koordinator Pembangunan Manusia dan Kebudayaan (PMK) Puan Maharani, Menteri Agraria Tata Ruang Ferry Mursidan Baldan, dan Menteri Kesehatan Nila Moeloek.\r\n\r\nDikutip dari : liputan6.com, Jakarta 18 Desember 2015', '039976700_1450412477-20151218-Pendonor-Darah-Terima-Lencana-dari-Jokowi-Fanani-6.jpg', '2016-12-18', 0),
(62, 'KLB DBD, Stok Darah di Bandung Menyusut Sampai 75 Persen', 'Kota Bandung menetapkan penyakit Demam Berdarah Dengue (DBD) sebagai kejadian luar biasa (KLB) yang mengakibatkan permintaan darah meningkat. Namun, stok darah di Kota Bandung justru menurun drastis.\r\n\r\nKepala Bidang Tranfusi Darah PMI Kota Bandung Wahyu Suryawidjaja mengatakan, idealnya PMI memiliki persediaan antara 1.500-2.000 labu darah untuk sepekan. Namun, saat ini hanya tersedia 400-500 labu darah sehari.\r\n\r\n"Pada bulan Januari dan Februari biasanya stok sudah berkurang dan memang sudah pada titik krisis. Untuk amannya, harus punya stok 4 sampai 5 hari pemakaian harian," kata Wahyu di Bandung, Kamis 4 Februari 2016.\r\n\r\nUntuk mencukupi stok darah, lanjut Wahyu, PMI kini menjemput bola. 5 unit mobil dikerahkan untuk memacu raihan stok darah, bekerja sama dengan beberapa instansi. \r\n\r\nUntuk 1 unit mobil transfusi darah, PMI menargetkan dapat memenuhi 100 labu per hari. Wahyu juga menyebutkan, langkah lainnya adalah mengirimkan SMS kepada para pendonor tetap.\r\n\r\n"Saat ini, untuk permintaan darah di Bandung Raya masih dalam tahap wajar. Namun, sebagian besar stok darah yang ada kini diperuntukan bagi RS Hasan Sadikin," ujar Wahyu.\r\n\r\nDikutip dari : liputan6.com, Jakarta 5 Februari 2016', '049936400_1453953955-20160128-PMI-Antisipasi-Kenaikan-Permintaan-Darah-Gempur-1.jpg', '2016-12-18', 0),
(63, 'PMI dan ITB Luncurkan Data Infografis Kerentanan DAS Ciliwung', 'Palang Merah Indonesia (PMI) bersama dengan tim riset Institut Tekonologi Bandung (ITB) dan Palang Merah Amerika, meluncurkan data hasil riset berupa infografis dan Videografis mengenai kerentanan Daerah Aliran Sungai (DAS) Ciliwung. Program ini termasuk memperlihatkan data potensi Kebencanaan iklim, kerentanan iklim kapasitas adaptif dan kapasitas adaptif kerentanan iklim.\r\n\r\nMenurut MT Ketua tim peneliti dari ITB,  Dr. Armi Susandi, data ini diluncurkan berdasarkan hasil penelitian ITB pada kurun waktu 2013-2014 dengan menggunakan metodologi pemodelan untuk memproyeksi kebencanaan iklim. Model Proyeksi ini tersebut memprediksi curah hujan secara spasial di masa depan dengan mempertimbangkan pola curah hujan masa lalu, dan juga pola anomali.\r\n\r\n"Untuk kajian kerentanan di DASCiliwung tersebut kami menggunakan data dari 19 titik stasiun pengamatan curah hujan dan 7 stasiun pengamatan temperatur di wilayah Bogor,Depok danJakarta. Penelitian ini tersebut menghasilkan 4 model proyeksi yaitu proyeksi curah hujan,temperature,kebencanaan dan kerentanan dalam bentuk spasial dari 2015-2035, serta pilihan tindakan mitigasikebencanaan dan opsi adaptasi jangka panjang bagi pemerintah, swasta dan masyarakat," kataAmi, melalui siaran pers, Jumat (22/4/2016). \r\n\r\nPenelitian menghasilkan beberapa dokumen penelitian berikut rekomendasi sebagai bahan advokasi kepada pemangku kepentingan di wilayah target seperti:\r\n\r\n1. Perlunya perencanaan tata ruang DAS Ciliwung secara komprehensif\r\n\r\n2. Penyediaan infrastruktur perkotaan yang mengakomodasi wilayah hulu dan hilir seperti pembangunan tanggul di aliran sungai dan pantai; normalisasi sungai dengan membuat pelebaran badan sungai dan pengerukan lumpur; membuat waduk dan perbaikan saluran air; memperluas daerah resapan air;\r\n\r\n3. Memperkuat upaya kesiapsiagaan melalui pembuatan rencana kontigensi banjir, melatih kesiapsiagaan aparatur dan masyarakat; dan memperkuat sistem peringatan dini banjir.\r\n\r\nSelain itu, terdapat adaptasi yang bersifat cross boundary yang perlu dilakukan di 3 wilayah kajian. Adaptasi di wilayah Bogor, di antaranya:\r\n\r\n1) Pembatasan alih fungsi lahan di wilayah hulu Sungai Ciliwung; \r\n2) Pembangunan waduk; \r\n3) Penguatan sumur resapan bagi masyarakat.\r\n\r\nAdaptasi di wilayah Depok, antara lain:\r\n\r\n1) Pembuatan turap di beberapa segmen sungai Ciliwung;\r\n\r\n2) Pembangunan beberapa waduk untuk menampung air;\r\n\r\n3) Penguatan sumur resapan untuk masyarakat.\r\n\r\nDan untuk Jakarta:\r\n\r\n1) Percepatan Pembangunan Banjir Kanal; \r\n2) Pengerukan waduk dan kolam retensi; \r\n3) Normalisasi sungai kali di Jakarta;\r\n4) Pembangunan turap di beberapa segmen sungai Ciliwung;\r\n5) Pembangunan ?Rusun Adaptasi? dengan Sungai Ciliwung; \r\n6) Pembuatan polder (jebakan air); \r\n7) Sumur resapan; \r\n8) Penghijauan disekitar pantai utara Jakarta; \r\n9) Mempercepat air menuju laut (pompa); \r\n10) Pembangunan tanggul/sea wall.\r\n\r\nPlt Ketua Umum PMI, Ginandjar Kartasasmita, mengatakan, melalui sinergi antara PMI dan ITB, memperkuat upaya advokasi kebijakan bencana iklim sebagai salah satu mandat PMI untuk mengurangi korban bencana yang didukung oleh basis data dan analisis secara akurat. \r\n\r\nSementara itu, Kepala perwakilan Palang Merah Amerika di Indonesia, Tom Alcedo menekankan pentingnya koordinasi dan komunikasi antar pemangku kepentingan.\r\n\r\n"Para pemangku kepentingan di Jakarta dan wilayah penyangga harus mengedepankan koordinasi dan komunikasi untuk mengurangi dampak Bencana iklim yang terjadi di wilayah DAS Ciliwung melalui tata ruang DAS ang komprehensif," ujarnya.\r\n\r\nDikutip dari : liputan6.com, Jakarta 22 April 2016', '32a94b4f860c9ea010c2508169f36f36_L.jpg', '2016-12-18', 0),
(64, 'Bukber PMI dan DMI, JK Bandingkan Kesibukan Selama Ramadan', 'Wakil Presiden Jusuf Kalla atau JK menggelar acara buka puasa bersama dengan para pengurus Palang Merah Indonesia (PMI) dan Dewan Masjid Indonesia (DMI). JK pun sempat menyinggung kesibukan 2 institusi yang dipimpinnya selama Ramadan ini.\r\n\r\n"Dewan Masjid tentu alhamdulillah ini bulan yang sibuk bagi masjid seluruh Indonesia. Kalau teman-teman PMI agak tenang, tapi ternyata bencana di bulan puasa ada juga di Jawa Tengah," ujar JK di Istana Wakil Presiden, Jakarta, Selasa (21/6/2016).\r\n\r\nSemua kegiatan itu memang terbilang cukup berat, terutama bagi PMI yang berhadapan dengan medan bencana. Tapi JK menilai hal ini merupakan bagian dari amal ibadah di bulan Ramadan.\r\n\r\nJK pun membandingkan kerja PMI dengan DMI yang sedikit bertolak belakang. PMI diharapkan lebih tenang. Karena dengan begitu tidak ada masalah sosial. Tapi bila bersikap demikian justru akan menimbulkan banyak masalah.\r\n\r\n"DMI kalau tidak sibuk berbahaya, masjid tidak jalan. Ini terbalik sedikit," sambung JK.\r\n\r\nJK mengingatkan, tantangan bangsa ke depan justru akan lebih berat selepas Ramadan nanti. Terlebih situasi dunia akan mengalami tantangan ekonomi, sosial, dan sebagainya.\r\n\r\n"Mudah-mudahan pada Ramadan ini tetap diberikan syafaat-Nya untuk mendapat melaksanakan kegiatan, memberikan rahmat dengan doa negeri ini agar aman dan masjid tetap punya kegiatan ibadah yang baik. Kita berdoa bekerja sebaik-baiknya," pungkas JK.\r\n\r\nDikutip dari : liputan6.com, Jakarta, 21 Juni 2016', 'jusuf kalla 4.jpg', '2016-12-18', 0),
(65, 'Stok Kosong, Butuh Darah di Bandung Harus Bawa Donor Sendiri', 'Stok darah di Kota Bandung, Jawa Barat hampir kosong. Kondisi ini terjadi sejak sepekan sebelum Hari Raya Lebaran.\r\n\r\nMenurut juru bicara Markas Palang Merah Indonesia Kota Bandung, Priyo Handoko, total persediaan darah di Unit Transfusi Darah pada Jumat 22 Juli 2016 hanya mencapai 400 labu untuk seluruh golongan. Jumlah itu masih di bawah standar.\r\n\r\n"Ya masih dalam suasana Lebaran. Jadi masyarakat, kebanyakan masih pulang kampung dan ada juga yang baru masuk kerja. Biasanya, jarak sebulan sudah mulai normal kembali, baik dari donor yang datang ke PMI maupun dari kegiatan mobil unit," kata Priyo di Bandung, Jabar.\r\n\r\nPriyo mengatakan, bahkan pada hari sebelumnya persediaan darah jumlahnya lebih kurang dibanding Jumat, yaitu 331 labu. Terdiri dari golongan darah A 78 labu, golongan darah B 54 labu, golongan darah O 182 labu, dan golongan darah AB 17 labu.\r\n\r\nDia menjelaskan, kekosongan persediaan darah ini telah terjadi sepekan sebelum hari raya Lebaran. Idealnya persediaan aman darah untuk melayani permintaan di Kota Bandung sebanyak 2.500 labu.\r\n\r\nJumlah persediaan darah ideal tersebut mencukupi untuk lima hari ke depan dengan rata-rata permintaan per harinya mencapai 500 labu. Untuk itu Palang Merah Indonesia Kota Bandung meminta kepada seluruh masyarakat yang membutuhkan darah membawa donor keluarga atau pengganti.\r\n\r\nDikutip dari : liputan6.com, Bandung, 23 Juli 2016', '050962400_1469246181-Persediaan_Darah_di_Bandung_Kosong_Dari_Sebelum_Lebaran.jpg', '2016-12-18', 0),
(66, 'PMI Kota Tegal Buka Lowongan bagi Dokter Umum', 'Bagi anda yang saat ini membutuhkan informasi lowongan pekerjaan di wilayah Kota Tegal Jawa Tengah, Unit Transfusi Darah (UTD) Palang Merah Indonesia (PMI) &#8206;Kota Tegal membuka lowongan untuk menempati tiga posisi dan dibutuhkan segera. \r\n\r\nLowongan kerja terbuka untuk analisis kesehatan (D3), tenaga IT Komputer (D3) dan dokter umum. Ketiga posisi lowongan itu untuk bekerja penuh waktu di UTD PMI Kota Tegal.\r\n\r\nPosisi terbuka bagi anda yang berusia tidak lebih dari 35 tahun. Saat melamar, anda harus menyertakan fotokopi ijazah, transkrip nilai, fotokopi KTP yang masih berlaku, curriculum vitae, SKCK, foto warna terbaru ukuran 4x6 (2 lembar), dan surat keterangan bebas narkoba dari RSU Kardinah Kota Tegal.\r\n\r\nBagi yang berminat mendaftar lowongan di UTD PMI Kota Tegal, segera kirim berkas lamaran ke PMI Kota Tegal Jalan KS Tubun No 8 Tegal. Lamaran paling lambat diterima Senin, 22 Agustus 2016.\r\n\r\nDikutip dari : liputan6.com, Tegal, 21 Agustus 2016', '042932800_1466759771-20160624-Stok-Darah-Jakarta-IA3.jpg', '2016-12-18', 0),
(67, 'Setetes Darah Kita Dapat Menyelamatkan Nyawa Orang Lain', 'Dalam rangka menyambut Hari Palang Merah Indonesia di Bulan September ini, tepatnya tanggal 17 September 2016, Padjadjaran Suites Resort BNR Bogor mengadakan acara donor darah yang dihadiri dan dibuka oleh Walikota Bogor Dr. Bima Arya Sugiarto. Acara donor darah diikuti oleh tamu-tamu yang menginap, para undangan dan warga sekitar perumahan Bogor Nirwana Residence. Acara ditutup oleh pengambilan door prize berupa dua buah voucher menginap di Padjadjaran Suites Resort BNR-Bogor. Jumlah Kantong darah yang terkumpul dari kegiatan ini adalah 46 kantong.\r\n\r\nDilansir dari Wikipedia, Palang Merah Indonesia (PMI) adalah sebuah organisasi perhimpunan nasional di Indonesia yang bergerak dalam bidang sosial kemanusiaan. PMI mempunyai tujuh prinsip dasar Gerakan Internasional Palang Merah dan Bulan sabit merah yaitu kemanusiaan, kesamaan, kesukarelaan, kemandirian, kesatuan, kenetralan, dan kesemestaan.\r\n\r\nDikutip dari : liputan6.com, Jakarta, 15 September 2016', '021513900_1473850194-IMG_7975_1_ (1).JPG', '2016-12-18', 0),
(68, 'PMI Balikpapan Tak Punya Alat Pembersih Darah', 'Palang Merah Indonesia (PMI) Balikpapan, Kalimantan Timur, memperoleh dana hibah sebesar Rp 7 miliar dari pemerintah daerah setempat. Ketua PMI Balikpapan M Arfan menerangkan dana hibah dipergunakan untuk pengadaan alat laboratorium darah.\r\n\r\n"Saat ini, kita sudah punya dua alat yang canggih. Ke depan mungkin kita menambah satu alat lagi yang otomatis untuk meningkatkan mutu darah serta mempercepat pelayanan. Karena, alat yang ada masih manual," kata Arfan, Jumat (23/9/2016).\r\n\r\nSelain itu, PMI Balikpapan juga memerlukan alat screening darah internasional senilai Rp 25 miliar. Alat itu berfungsi untuk membersihkan darah dari penyakit menular yang membahayakan penerima donor.\r\n\r\nAlat tersebut masih belum bisa diadakan karena belum memiliki anggaran. Sedangkan, pendapatan dari penjualan kantong darah hanya cukup untuk operasional kantor seperti pembayaran listrik, kebersihan, perawatan alat-alat dan gaji pegawai.\r\n\r\nSementara itu, PMI Balikpapan masih kekurangan stok darah guna mencukupi kebutuhan warga. Permintaan darah Balikpapan sebanyak 100 kantong per harinya, tetapi yang mampu dipenuhi sebanyak 60 kantong saja.\r\n\r\n"Jumlah permintaan dan stoknya tidak sebanding," kata Wali Kota Balikpapan, Rizal Effendy.\r\n\r\nRizal mengatakan stok darah dikumpulkan dari aktivitas donor sosial dilakukan sejumlah instansi di Balikpapan. Pasokannya masih dirasakan kurang mengingat semakin meningkatnya jumlah permintaan saat ini.\r\n\r\nSehubungan itu, Rizal meminta peningkatan sosialisasi donor darah secara rutin digalakan PMI Balikpapan. Menurut dia, program sosial donor darah dapat membantu menyelamatkan nyawa bagi mereka yang membutuhkan.\r\n\r\nRizal menyebutkan donor darah mampu mengumpulkan sebanyak 24 ribu kantong darah bagi warga setempat. Satu kantong darah dijual Rp 360 ribu sehingga dalam satu tahun PMI mendapatkan dana UTD sekira Rp 8,640 miliar.\r\n\r\nDikutip dari : liputan6.com, Balikpapan, 23 September 2016', '042582200_1466759771-20160624-Stok-Darah-Jakarta-IA1.jpg', '2016-12-18', 0),
(69, 'Sumber Air Bersih Masih Tertutup Lumpur Banjir Bandang Garut', 'Berbagai permasalahan mulai muncul pasca-banjir bandang melanda Garut pada Selasa malam, 20 September 2016. Selain kebutuhan dasar logistik dan tempat pengungsian, kebutuhan MCK (mandi-cuci-kakus) dan air bersih kini mulai jadi persoalan.\r\n\r\nYeyet (52), salah seorang warga mengeluhkan lumpur dari banjir bandang mengotori sumur yang sehari-hari diandalkan untuk memenuhi kebutuhan air bersih. Karena itu, ia tak bisa membersihkan rumahnya yang hingga hari ke-4 pascabanjir.\r\n\r\n"Sumur di rumah kotor, sehingga kebutuhan air bersih terganggu," ucap Yeyet, Sabtu (24/9/2016).\r\n\r\nUntuk itu, Palang Merah Indonesia (PMI) membangun delapan fasilitas MCK darurat di perkampungan warga terdampak. Salah satunya di Kecamatan Cimacan yang menjadi salah satu kawasan terparah akibat terjangan luapan Sungai Cimanuk.\r\n\r\n"Hari ini PMI akan membangun fasilitas MCK darurat yang menjadi salah satu permasalahan warga yang terdampak," kata Abidin, koordinator lapangan tim PMI, berdasarkan keterangan pers.\r\n\r\nMenurut Abidin, penyediaan fasilitas MCK bertujuan untuk meminimalkan berbagai penyakit, seperti diare dan penyakit kulit. Terkait penyediaan air bersih warga terdampak, PMI akan bekerja sama dengan pihak PDAM Garut untuk menyuplai kebutuhan air setiap hari.\r\n\r\n"Setiap harinya kita menerjunkan enam kendaraan mobil tangki air dengan kapasitas 5.000 liter untuk memenuhi dan menyuplai pasokan di permukiman warga yang terdampak," ujar Abidin.\r\n\r\nTak hanya air bersih, setiap warga juga mendapatkan jeriken air serta larutan penjernih air untuk kebutuhan mendapatkan air bersih.\r\n\r\nDikutip dari : liputan6.com, Garut, 24 September 2016', '000624400_1474707132-WhatsApp_Image_2016-09-24_at_14.30.43.jpeg', '2016-12-18', 0),
(70, '75 Anak Korban Longsor Sumedang Ikuti Terapi Penyembuhan Trauma', 'Anak-anak korban bencana longsor di Kabupaten Sumedang mengikuti penyembuhan psikologi melalui Program Dukungan Psikososial (PDP) yang diselenggarakan Palang Merah Indonesia (PMI).\r\n\r\nProgram tersebut diberikan kepada 75 anak korban bencana longsor yang terjadi pada Selasa malam, 20 September 2016, dengan didampingi relawan PMI Kabupaten Sumedang, Jawa Barat.\r\n\r\n"Sedih dan tidak betah tergambar pada ekspresi anak-anak yang berada di lokasi pengungsian GOR Tadjimalela ini," ujar salah satu relawan PMI Sumedang, Roly Angga, Senin (26/9/2016).\r\n\r\nRoly menjelaskan, melalui program layanan pendampingan ini diharapkan anak-anak dapat terhibur dan menghilangkan rasa takut atau sedih usai mengalami bencana tanah longsor.\r\n\r\n"Melalui interaksi dengan cara bernyanyi, cerita, dan beberapa permainan edukatif serta pengenalan perilaku hidup bersih dan sehat (PHBS). Kami berharap mereka bisa menerima kenyataan dengan tetap memiliki semangat dan mental yang kuat," kata dia.\r\n\r\nBerdasarkan data posko PMI Sumedang, terdapat dua desa yang mengalami dampak terparah, yaitu Desa Ciherang dan Desa Citengah. Sedangkan, jumlah pengungsi yang menempati posko pengungsian di GOR Tadjimalela tercatat sekitar 833 jiwa dan 320 kepala keluarga.\r\n\r\nRencananya, pelayanan PDP tersebut juga akan dilaksanakan pada lokasi pengungsian kedua yang bertempat di Makodim 0610 Sumedang.\r\n\r\nLongsor Magelang\r\n\r\nEmpat titik longsor yang terjadi di Desa Wonolelo, Kabupaten Magelang, Jawa Tengah, pada Minggu, 25 September 2016, telah menutup akses jalan Candran-Batur di Kecamatan Sawangan.\r\n\r\nKepala Pelaksana Harian Badan Penanggulangan Bencana Daerah (BPBD) Kabupaten Magelang, Sujadi, mengatakan bencana tanah longsor itu tidak menimbulkan korban jiwa, tapi membuat akses jalan desa tertutup.\r\n\r\nEmpat titik longsor di Kecamatan Sawangan itu terjadi di Dusun Candran dan Dusun Ngagrong, Desa Wonolelo.\r\n\r\nTiga titik longsor yang menutup jalan sudah berhasil ditanggulangi oleh warga sehingga jalan sudah bisa dilalui. Adapun akses jalan di satu lokasi di Dusun Ngagrong belum bisa dilalui.\r\n\r\nLongsor di Kecamatan Sawangan terjadi setelah hujan deras mengguyur sejak Minggu siang pukul 12.15-15.00 WIB.\r\n\r\nBPBD Kabupaten Magelang sudah menurunkan Tim Satgas untuk membantu warga menanggulangi dampak longsor. Menurut Sujadi, di Kabupaten Magelang terdapat 14 kecamatan yang rawan bencana longsor.\r\n\r\n"Apalagi berdasarkan perkiraan BMKG, di Magelang sangat basah, sehingga masyarakat harus lebih waspada terhadap longsor," kata Sujadi seperti dilansir Antara.\r\n\r\nDikutip dari : liputan6.com, Sumedang, 26 September 2016', '061443100_1459128101-Longsor-Sumedang.jpg', '2016-12-18', 0),
(71, 'PMI Siapkan 6 Ambulans di Monas Saat Demo 2 Desember', 'Palang Merah Indonesia (PMI) Provinsi DKI Jakarta menyiagakan enam unit ambulans untuk mengantisipasi gangguan kesehatan peserta demo 2 Desember di kawasan Monumen Nasional.\r\n\r\n"PMI menyiagakan enam ambulans di tiap pintu masuk dan keluar kawasan Monas, mengantisipasi gangguan kesehatan peserta doa bersama," kata Koordinator Korps Sukarela PMI Jakarta, Budhi Pranoto, di Monas, Jakarta, Jumat (2/12/2016).\r\n\r\nDia mengatakan PMI Jakarta juga menerjunkan 30 petugas medis untuk membantu masyarakat yang mengalami gangguan kesehatan. Menurut dia, di tiap posko PMI di Monas disediakan obat-obatan yang diperlukan peserta demo 2 Desember.\r\n\r\n"Obat-obatan yang kami sediakan sifatnya hanya first aid karena kalau untuk keluhan yang lebih serius ada posko kesehatan," ujar dia.\r\n\r\nBudhi menjelaskan, PMI Jakarta mengantisipasi apabila ada peserta demo 2 Desember yang kelelahan, keracunan makanan, dan pingsan, sehingga disiagakan peralatan kesehatan.\r\n\r\nDia juga mengimbau peserta demo 2 Desember untuk banyak minum air putih karena khawatir mengalami dehidrasi.\r\n\r\n"Peserta doa bersama harus banyak minum karena berada di luar ruangan, dan kalau merasa tidak mampu lebih baik ke posko kesehatan," kata Budhi seperti dikutip dari Antara.\r\n\r\nMenurut dia, hingga saat ini belum ada peserta doa bersama yang mengeluhkan gangguan kesehatan. Oleh karena itu, dia berharap para peserta tetap memenuhi asupan gizi selama demo 2 Desember.\r\n\r\nDikutip dari : liputan6.com, Jakarta, 2 Desember 2016', '079308500_1480649033-monas3.jpg', '2016-12-18', 2);

-- --------------------------------------------------------

--
-- Table structure for table `darah`
--

CREATE TABLE IF NOT EXISTS `darah` (
  `iddarah` int(11) NOT NULL,
  `nip` char(16) NOT NULL,
  `idrs` int(7) NOT NULL,
  `tglmasuk` date NOT NULL,
  `tglexp` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `statusex` varchar(2) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `darah`
--

INSERT INTO `darah` (`iddarah`, `nip`, `idrs`, `tglmasuk`, `tglexp`, `status`, `statusex`) VALUES
(1, '331309140001', 1, '2016-12-07', '2016-12-21', 'order', 'bl'),
(2, '3313091405950001', 7, '2016-12-06', '2016-12-20', 'free', 'ex'),
(3, '3313091498600001', 1, '2016-12-12', '2016-12-26', 'order', 'bl'),
(17, '3294758329438582', 7, '2016-12-20', '2017-01-31', 'free', 'bl'),
(16, '3920847583493587', 7, '2016-12-01', '2017-01-12', 'free', 'bl'),
(15, '3958630583508880', 7, '2016-11-23', '2017-01-04', 'order', 'bl'),
(14, '3958630583508880', 7, '2016-12-14', '2017-01-25', 'free', 'bl'),
(18, '3313091498600001', 1, '2016-12-18', '2017-01-29', 'free', 'bl'),
(19, '3313091498600001', 7, '2016-11-19', '2016-12-31', 'free', 'bl');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_galeri` int(5) NOT NULL,
  `judul` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `gambar`, `tanggal`) VALUES
(54, 'DONOR DARAH DIS NATALIS AMIKOM', 'stock-illustration-80488411-blood-donation.jpg', '2016-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE IF NOT EXISTS `halaman` (
  `id_halaman` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id_halaman`, `judul`, `isi`) VALUES
(46, 'Visi dan Misi', '\r\n<h3  style="text-align: center"><b>VISI</b></h3>\r\n<p style="text-align: center; font-weight: bold">â€œTerwujudnya Pemenuhan Kebutuhan Darahyang Aman, Tepat dan Cepatâ€</p>\r\n<br>\r\n<h3  style="text-align: center"><b>MISI</b></h3>\r\n<p style="text-align: center; font-weight: bold">â€œMenjamin Ketersediaan Darah yang Aman dan Sistem Pelayanan yang Tepat dan Cepatâ€</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `jdarah`
--

CREATE TABLE IF NOT EXISTS `jdarah` (
  `idjdarah` int(2) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jdarah`
--

INSERT INTO `jdarah` (`idjdarah`, `nama`) VALUES
(1, 'A'),
(2, 'A plus'),
(7, 'AB'),
(3, 'B'),
(4, 'B plus'),
(5, 'O'),
(6, 'O plus');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(5) NOT NULL,
  `id_artikel` int(5) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `komentar` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_artikel`, `nama`, `email`, `komentar`, `tanggal`) VALUES
(52, 0, 'levi', 'levi@mikom', 'tingkatkan', '2016-12-07'),
(51, 0, 'izari', 'izari@uay', 'sepi bangett', '2016-12-07'),
(50, 0, 'kafa', 'kafa@kiss', 'haaaa', '2016-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(5) NOT NULL,
  `judul` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `link` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `urutan` int(3) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `judul`, `link`, `urutan`) VALUES
(57, 'Profil', '#', 2),
(55, 'Kontak Kami', '?tampil=kontak', 5),
(53, 'Home', 'index.php', 1),
(54, 'Galeri', '?tampil=galeri', 4),
(61, 'Artikel', '?tampil=home', 3);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `idorder` int(7) NOT NULL,
  `iddarah` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `nip` char(16) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`idorder`, `iddarah`, `tgl`, `status`, `nip`) VALUES
(1, 1, '2016-12-10', 'proses', '    331309149860');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` int(5) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `subjek` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  `balasan` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profinsi`
--

CREATE TABLE IF NOT EXISTS `profinsi` (
  `idprof` int(2) NOT NULL,
  `namaprof` varchar(100) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profinsi`
--

INSERT INTO `profinsi` (`idprof`, `namaprof`, `status`) VALUES
(2, 'jogjakarta', '1'),
(3, 'Jawa Tengah', ''),
(4, 'Jawa Barat', ''),
(5, 'jakarta', ''),
(6, 'Jawa Timur', '');

-- --------------------------------------------------------

--
-- Table structure for table `rs`
--

CREATE TABLE IF NOT EXISTS `rs` (
  `idrs` int(7) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `alamatmap` text NOT NULL,
  `telp` char(12) NOT NULL,
  `email` varchar(75) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(125) NOT NULL,
  `idprof` int(2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rs`
--

INSERT INTO `rs` (`idrs`, `nama`, `alamat`, `alamatmap`, `telp`, `email`, `username`, `password`, `idprof`, `status`) VALUES
(1, 'amikom', 'congcat', 'https://www.google.com/maps/embed?pb=!1m22!1m12!1m3!1d126505.2270329093!2d110.33882741212275!3d-7.7592130731034015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m7!3e6!4m0!4m4!1s0x2e7a599bdd8483f5%3A0x7d0dd176b3d62882!3m2!1d-7.759218799999999!2d110.408868!5e0!3m2!1sen!2sid!4v1481121799866', '78965413', 'mikom@mikom', 'amikom', 'fcea920f7412b5da7be0cf42b8c93759', 2, 'operator'),
(7, 'rs univercity amikom', 'congvat', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.284594223045!2d110.40652631417673!3d-7.759611994407496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb8a7dc24fe940445!2sSTIKES+GUNA+BANGSA+YOGYAKARTA!5e0!3m2!1sen!2sid!4v1481506280674', '8897455461', 'amikom@miko', 'rs amikom', 'fcea920f7412b5da7be0cf42b8c93759', 2, 'operator'),
(8, 'rs monas jaya', 'jakarta deket monas', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6664270097594!2d106.82496411476889!3d-6.175392395529161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sNational+Monument!5e0!3m2!1sen!2sid!4v1482192149523', '09434737477', 'monass@jakarta.kota', 'rs monas', 'fcea920f7412b5da7be0cf42b8c93759', 5, 'operator');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `idslide` int(6) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`idslide`, `gambar`, `status`) VALUES
(4, 'Slider4.png', '1'),
(5, 'Slider4.png', '1'),
(6, 'slider3.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE IF NOT EXISTS `submenu` (
  `id_submenu` int(5) NOT NULL,
  `id_menu` int(5) NOT NULL,
  `judul` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `link` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `urutan` int(3) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id_submenu`, `id_menu`, `judul`, `link`, `urutan`) VALUES
(57, 57, 'VIsi dan Misi', '?tampil=halaman&id=46', 2),
(56, 57, 'Profil Darah Online UTD', '?tampil=abaut', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(10) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `status`) VALUES
(43, 'admin', 'ade3408483eae36d4335455bb631a400', 'admin', 'admin'),
(44, 'rivaiizari', 'fcea920f7412b5da7be0cf42b8c93759', 'Ripaiii Izari', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`nip`), ADD KEY `idjdarah` (`idjdarah`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `darah`
--
ALTER TABLE `darah`
  ADD PRIMARY KEY (`iddarah`), ADD KEY `idrs` (`idrs`), ADD KEY `nip` (`nip`), ADD KEY `nip_2` (`nip`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id_halaman`);

--
-- Indexes for table `jdarah`
--
ALTER TABLE `jdarah`
  ADD PRIMARY KEY (`idjdarah`), ADD KEY `nama` (`nama`), ADD FULLTEXT KEY `nama_2` (`nama`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idorder`), ADD KEY `nip` (`nip`), ADD KEY `iddarah` (`iddarah`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `profinsi`
--
ALTER TABLE `profinsi`
  ADD PRIMARY KEY (`idprof`);

--
-- Indexes for table `rs`
--
ALTER TABLE `rs`
  ADD PRIMARY KEY (`idrs`), ADD KEY `idprof` (`idprof`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`idslide`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id_submenu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `darah`
--
ALTER TABLE `darah`
  MODIFY `iddarah` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id_halaman` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `jdarah`
--
ALTER TABLE `jdarah`
  MODIFY `idjdarah` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `idorder` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `profinsi`
--
ALTER TABLE `profinsi`
  MODIFY `idprof` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `rs`
--
ALTER TABLE `rs`
  MODIFY `idrs` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `idslide` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id_submenu` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
