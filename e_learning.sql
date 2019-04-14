-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 192.168.66.4    Database: e_learning
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` text NOT NULL,
  `img` varchar(20) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','edusite@globaltopcareer.com','202cb962ac59075b964b07152d234b70','avatar.png');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(40) NOT NULL,
  `slug` text NOT NULL,
  `img` varchar(40) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (9,'HOUSE KEEPING SERIES','house-keeping-series','house-keeping-series.jpg'),(10,'FRONT OFFICE SERIES','front-office-series','front-office-series.jpg'),(11,'FBS SERIES','fbs-series','fbs-series.jpg'),(12,'SERVICES SERIES','services-series','services-series.jpg'),(13,'SALES SERIES','sales-series','sales-series.jpg');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL AUTO_INCREMENT,
  `pengirim` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pesan` text NOT NULL,
  `slug_modul` text NOT NULL,
  PRIMARY KEY (`id_chat`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat`
--

LOCK TABLES `chat` WRITE;
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
INSERT INTO `chat` VALUES (88,'Ananda Rifkiy Hasan','2018-08-29 16:18:41','haloo','waiter'),(89,'Ajeng Fitria Rahmawati (Trainer)','2018-08-29 16:20:15','halo juga','waiter'),(90,'Ananda Rifkiy Hasan','2018-08-29 16:29:26','Hehe','waiter'),(91,'Ajeng Fitria Rahmawati (Trainer)','2018-08-29 16:29:34','hai','waiter'),(92,'Ananda Rifkiy Hasan','2018-08-29 16:30:19','Hehe','waiter'),(93,'Ananda Rifkiy Hasan','2018-08-29 16:30:38','Coba','waiter'),(94,'Ananda Rifkiy Hasan','2018-08-29 16:30:43','Hahahha','waiter'),(95,'Ajeng Fitria Rahmawati (Trainer)','2018-08-29 16:44:50','hii','waiter'),(96,'Ananda Rifkiy Hasan','2018-08-29 16:45:53','Halooo','waiter'),(97,'Ananda Rifkiy Hasan','2018-08-29 16:46:00','Heiii','waiter'),(98,'Ananda Rifkiy Hasan','2018-08-29 17:29:43','halo','room-attendant'),(99,'Ajeng Fitria Rahmawati (Trainer)','2018-08-29 17:29:53','hai','room-attendant'),(100,'Ajeng Fitria Rahmawati (Trainer)','2018-08-29 17:47:46','hehe','room-attendant'),(101,'Ananda Rifkiy Hasan','2018-08-29 17:47:50','halo','room-attendant');
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `id_company` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `img` varchar(40) NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`id_company`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (5,'Global Top Career','','','ananda.rifkiy32@gmail.com','','202cb962ac59075b964b07152d234b70'),(6,'asdasdasd','','','ananda.rifkiy33@gmail.com','default.jpg','b65ae886509f8fe76a5d16ca456bcb27'),(7,'Example Company','','','ajengfitria80@gmail.com','default.jpg','e49c36c3faf7ab3ef6eba289c034e0ff');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jawaban`
--

DROP TABLE IF EXISTS `jawaban`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL AUTO_INCREMENT,
  `id_result` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban` text,
  `nilai` int(11) DEFAULT NULL,
  `nilaicompany` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jawaban`)
) ENGINE=InnoDB AUTO_INCREMENT=397 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jawaban`
--

LOCK TABLES `jawaban` WRITE;
/*!40000 ALTER TABLE `jawaban` DISABLE KEYS */;
INSERT INTO `jawaban` VALUES (376,72,71,'A',100,NULL),(377,72,72,'C',0,NULL),(378,72,73,'C',100,NULL),(379,72,74,'A',0,NULL),(380,72,79,'A',100,NULL),(381,72,80,'C',100,NULL),(382,72,81,'C',100,NULL),(383,72,82,'A',0,NULL),(384,72,203,'C',0,NULL),(385,72,204,'C',0,NULL),(386,73,205,'B',0,NULL),(387,73,206,'B',0,NULL),(388,73,207,'A',0,NULL),(389,73,208,'B',0,NULL),(390,73,209,'A',100,NULL),(391,73,210,'B',0,NULL),(392,73,211,'A',100,NULL),(393,73,212,'A',0,NULL),(394,73,213,'A',0,NULL),(395,73,214,'B',0,NULL),(396,74,88,'2F596dKVbK_88_25.mp4',0,NULL);
/*!40000 ALTER TABLE `jawaban` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materi`
--

DROP TABLE IF EXISTS `materi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `id_modul` int(11) NOT NULL,
  `judul` text NOT NULL,
  `indikator` text NOT NULL,
  `tujuan` text NOT NULL,
  `evaluasi` text NOT NULL,
  `pdf` text NOT NULL,
  `konten` text NOT NULL,
  `ppt` text NOT NULL,
  `slug` text NOT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materi`
--

LOCK TABLES `materi` WRITE;
/*!40000 ALTER TABLE `materi` DISABLE KEYS */;
INSERT INTO `materi` VALUES (37,19,'Set up Standard','-','1. Memahami standard tata graha <br>\r\n2. Membangun keterampilan tata graha khususnya yang berkaitan dengan peralatan dan kebersihan kamar <br>\r\n3. Melaporakan setiap kerusakan, keluhan tamu \r\n','Penguasaan materi diuji melalui pre-test dan post-test<br>\r\nPenerapan ketrampilan dilihat dari post-test (praktek video)','set-up-standard.pdf','','set-up-standard.pdf','set-up-standard'),(38,19,'Making Bed','','','','making-bed.pdf','','making-bed.pdf','making-bed'),(39,19,'Make up Room','','','','make-up-room.pdf','','make-up-room.pdf','make-up-room'),(41,22,'asdasd2','asdasd1','sadasd22','asdadasd213','asdasd.pdf','','','asdasd2'),(42,21,'Public Area Equipment','-','Meningkatkan keterampilan tata graha khususnya yang berkaitan dengan penataan dan kebersihan kamar serta menjaga kebersihan wilayah publik.','Pre test<br>\r\n-	Teori<br>\r\n-	Praktek<br>\r\nPost Test<br>\r\n-	Teori (pilihan Ganda)<br>\r\n-	Praktek (video)\r\n','public-area-equipment.pdf','','public-area-equipment.pdf','public-area-equipment'),(43,21,'Chemical','-','Meningkatkan keterampilan tata graha khususnya yang berkaitan dengan penataan dan kebersihan kamar serta menjaga kebersihan wilayah publik.','Pre test<br>\r\n-	Teori<br>\r\n-	Praktek<br>\r\nPost Test<br>\r\n-	Teori (pilihan Ganda)<br>\r\n-	Praktek (video)\r\n','chemical.pdf','','chemical.pdf','chemical'),(44,23,'Concierge','-','a.Memahami tugas-tugas dan tanggung jawab pekerjaan di kantor depan (front office) khususnya concierge.<br>\r\nb.Meningkatkan kesadaran tentang pentingnya keterampilan dalam memberikan pelayanan kepada tamu hotel.<br>\r\nc.Meningkatkan keterampilan pelayanan tamu, khususnya yang berkaitan dengan bagian kantor depan.','Pre test<br>\r\n-Teori<br>\r\n-Praktek<br>\r\nPost Test<br>\r\n-Teori (pilihan Ganda)<br>\r\n-Praktek (video)<br>','concierge.pdf','','concierge.pdf','concierge'),(45,24,'A-Line Service ( Reservation )','-','1.Memahami tugas-tugas dan tanggung jawab pekerjaan di kantor depan (front office) khususnya reservation, concierge dan reception.<br>\r\n2.Meningkatkan kesadaran tentang pentingnya keterampilan dalam memberikan pelayanan kepada tamu hotel.<br>\r\n3.Meningkatkan keterampilan pelayanan tamu, khususnya yang berkaitan dengan bagian kantor depan.','Pre test<br>\r\n-Teori<br>\r\n-Praktek<br>\r\nPost Test<br>\r\n-Teori (pilihan Ganda)<br>\r\nPraktek (video)','a-line-service-reservation.pdf','','a-line-service-reservation.pdf','a-line-service-reservation'),(46,24,'Reception','-','1.Memahami tugas-tugas dan tanggung jawab pekerjaan di kantor depan (front office) khususnya reservation, concierge dan reception.<br>\r\n2.Meningkatkan kesadaran tentang pentingnya keterampilan dalam memberikan pelayanan kepada tamu hotel.<br>\r\n3.Meningkatkan keterampilan pelayanan tamu, khususnya yang berkaitan dengan bagian kantor depan.','Pre test<br>\r\n-Teori<br>\r\n-Praktek<br>\r\nPost Test<br>\r\n-Teori (pilihan Ganda)<br>\r\nPraktek (video)','reception.pdf','','reception.pdf','reception'),(47,25,'Telephone Operator','-','1.Menyadari pentingnya keterampilan untuk berkomunikasi melalui telepon dengan efektif.<br>\r\n2.Memahami alur proses terkaitdengan berkomunikasi melalui telepon<br>\r\n3.Menguasai tehnik berkomunikasi melalui telepon yang efektif','Pre test<br>\r\n-Teori<br>\r\n-Praktek<br>\r\nPost Test<br>\r\n-Teori (pilihan Ganda)<br>\r\nPraktek (video)','telephone-operator.pdf','','telephone-operator.pdf','telephone-operator'),(50,26,'Waiters','-','a.Memahami fungsi, lingkup tugas dan pelayanan yang terkait dengan makan dan minuman untuk tamu hotel.<br>\r\nb.Memahami alur proses pekerjaan pelayanan Food & Beverage, <br>\r\nc.Menguasai keterampilan pelayanan Fodd & Beverage, khususnya terkait dengan pelayanan di Restaurat dan Kamar seta penataan Banquet.','\r\nPre test<br>\r\n-Teori<br>\r\n-Praktek<br>\r\nPost Test<br>\r\n-Teori (pilihan Ganda)<br>\r\nPraktek (video)','waiters.pdf','','waiters.pdf','waiters');
/*!40000 ALTER TABLE `materi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modul`
--

DROP TABLE IF EXISTS `modul`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modul` (
  `id_modul` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL,
  `tugas` text NOT NULL,
  `karir` text NOT NULL,
  `syarat` text NOT NULL,
  `id_trainer` varchar(3) NOT NULL,
  `category` varchar(30) NOT NULL,
  `img` varchar(40) NOT NULL,
  `slug` varchar(40) NOT NULL,
  `status` int(1) unsigned zerofill NOT NULL,
  `biaya` int(11) NOT NULL,
  PRIMARY KEY (`id_modul`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modul`
--

LOCK TABLES `modul` WRITE;
/*!40000 ALTER TABLE `modul` DISABLE KEYS */;
INSERT INTO `modul` VALUES (19,5,'ROOM ATTENDANT ','Room Attendant bertanggung jawab terhadap kebersihan dan kenyamanan kamar tamu, mempersiapkan atau pembersihan kamar tamu baik kamar untuk EA, check out maupun occupaid. Biasanya room attendant diberi tugas berdasarkan jumlah kamar tertentu yang harus mereka bersihkan atau bisa juga berdasarkan section.<br>\r\nRoom attendant membersihkan kamar tamu sesuai dengan standar yang ditetapkan. Bertanggungjawab untuk melaporkan setiap kerusakan, melayani permintaan atau keluhan tamu serta menjamin kerahasiaan dan keamanan semua kamar tamu.\r\n','1.	Mengecek seluruh kamar sebelum mulai bekerja serta mengisinya pada room attendant sheet dengan kode status sekaligus menanyakan apakah tamu ada laundrynya<br>\r\n2.	Mensetup trolley kerja sesuai dengan standar set up yang ditentukan kemudian disusun dengan baik dan rapi<br>\r\n3.	Mengecek kebersihan corridor dan pantry<br>\r\n4.	Membersihkan Kamar tamu dan melengkapi setup-nya berdasarkan prioritas yang sudah diberikan atasan<br>\r\n5.	Mencatat time in/out pada room attendant sheet<br>\r\n6.	Mencatat/memperhatikan barang-barang berharga tamu kemudian membuat catatan pada room attendant sheet<br>\r\n7.	Melaporkan setiap barang-barang tamu yang tertinggal di dalam kamar dengan segera ke supervisor/HK order taker<br>\r\n8.	Melaporkan ke laundry dengan segera bila ada laundry tamu<br>\r\n9.	Melaporkan kerusakan dengan jelas ke HK Order taker untuk melaporkan perbaikan ke engineering<br>\r\n10. Melaporkan aktivitas tamu yang mencurigakan atau barang-barang berbahaya didalam kamar ke executive housekeeper<br>\r\n11. Membantu room service mengeluarkan peralatan bekas makanan dari kamar kemudian menghubungi mereka untuk clear up<br>\r\n12. Merapikan barang-barang kepunyaan tamu<br>\r\n13. Membersihkan atau mengatur kembali trolley kerja<br>\r\n14. Menerima serta melaksanakan tugas yang diperintahkan floor supervisor seperti program general cleaning\r\n\r\n','Setelah mendapatkan okupasi ini, peserta sertifikasi dapat melanjutkan proses pembelajaraannya melalui pendidikan, pelatihan dan/atau pengalaman di tempat kerja untuk mencapai jenjang lanjutan dan sertifikasi :<br>\r\nFloor Supervisor<br>\r\nSertifikasi IV bidang Tata Graha<br>\r\n','Lulus pendidikan dan pelatihan sertifikat III atau telah menduduki jabatan Junior Cleaner; Assistant Cleaner; Assistant Public Area Cleaner; Cleaner; Public Area Cleaner; Attendant; Room Maid; PA Attendant. Dengan pengalaman minimal 2 tahun di bidangnya.','3','house-keeping-series','room-attendant.jpg','room-attendant',1,200000),(21,5,'PUBLIC AREA CLEANER','Di bawah bimbingan kepala pengurus tata graha atau orang lain yang ditunjuk, untuk memastikan kelancaran dan efisiensi dari tempat umum di Health Club sesuai dengan hotel dan standar Health Club. Bertanggung jawab untuk pemeliharaan, perawatan dan penampilan semua Health Club tempat umum.','1.	Membersihkan seluruh Public Area seperti Office, lobby, restaurant, pub atau lounge, bar, toilet-toilet, meeting room, arcade dan lainnya.<br>\r\n2.	Membersihkan dan melakukan pemeliharaan furniture, lantai, karpet, kaca-kaca, pintu dan bingkainya, astray di setiap meja dan standing astray yang ada di Public Area.<br>\r\n3.	Memelihara setiap perlengkapan atau peralatan yang digunakannya untuk bekerja.<br>\r\n4.	In charge pada ruangan yang sedang digunakan untuk kegiatan / event function, meeting, party dan lain-lain.<br>\r\n5.	Membuang sampah-sampah yang ada di setiap astray dan standing astray pada tempatnya.\r\n<br>6.	Merawat pot tanaman dan membersihkannya dari sampah-sampah di sekelilingnya.<br>\r\n7.	Merubah dan mengatur kembali susunan tanaman yang sudah tidak sesuai lagi.<br>\r\n8.	Membersihkan parkir area.<br>\r\n9.	Melaporkan  segaka  kerusakan,  kehilangan,  kejadian-kejadian  yang  tidak  semestinya kepada HK Supervisor. <br>\r\n10. Melaksanakan general cleaning sesuai dengan schedule. <br>\r\n11. Merencanakan dan melaksanakan Pest Control <br>\r\n12. Menerima dan  melaksankaan tugas yang diperintahkan public area supervisor. <br>\r\n13. Bekerjasama dengan baik dengan rekan kerja department lainnya.','Setelah mendapatkan okupasi ini, peserta sertifikasi dapat melanjutkan proses pembelajaraannya melalui pendidikan, pelatihan dan/atau pengalaman di tempat kerja untuk mencapai jenjang lanjutan dan sertifikasi :<br>\r\n•	Room Attendant\r\n<br>\r\n•	Laundry Attendant\r\n<br>\r\n•	Sertifikasi III bidang Tata Graha\r\n','Lulus pendidikan dan pelatihan sertifikat II atau telah menduduki Junior Cleaner; Assistant Cleaner; Assistant Public Area Cleaner; Cleaner; Public Area Cleaner; Attendant; Room Maid; PA Attendant. Dengan pengalaman minimal 2 tahun di bidangnya.','3','house-keeping-series','public-area-cleaner.jpg','public-area-cleaner',1,0),(23,5,'BELLBOY','Bellboy bertugas untuk mengantar tamu ke kamarnya, menyambut tamu, dan mengatur parkir untuk tamu VIP, melaporkan pekerjan pemeliharaan, memeriksa rutin untuk memastikan kunci siap untuk check-in dan memastikan semua barang-barang diberi dengan benar label dan disimpan','1.Menurunkan barang tamu dari mobil<br>\r\n2.Membawakan barang tamu yang akan check-in<br>\r\n3.Mengantar barang tamu ke kamar sesuai nomor kamarnya<br>\r\n4.Membantu membawakan barang tamu pada saat check out dari kamar ke lobby hotel untuk selanjutnya ke kendaraan tamu<br>\r\n5.Menyimpan barang tamu dengan tanda khusus (luggage tag) untuk tamu yang belum datang ke hotel atau tamu yang menitipkan barangnya di belldesk<br>\r\n6.Menjaga kebersihan area lobby dan hotel<br>\r\n7.Melaksanakan tugas lain sesuai arahan dan perintah atasan<br>','Setelah mendapatkan okupasi ini, peserta sertifikasi dapat melanjutkan proses pembelajarannya melalui pendidikan, pelatihan dan/atau pengalaman di tempat kerja untuk mencapai jenjang lanjutan dan sertifikasi :<br>\r\n•Telephone Operator<b>\r\n•Sertifikasi III bidang Front Office<br>','Minimal lulus pelatihan sertifikat II atau telah menduduki jabatan Junior Bell Boy;Assistant Porter; Bellhop dengan pengalaman 1 tahun.','3','front-office-series','bellboy1.jpg','bellboy',1,0),(24,5,'RECEPTIONIST','Resepsionis bertugas dalam meregister tamu dan menetapkan kamar, mengakomodasi permintaan khusus bila memungkinkan, membantu preregistrasi dan memblock pemesanan kamar, kredit yang tepat, penanganan kebijakan check-chasing dan cash sesuai prosedur, melaksanakan dan memantau status kamar, menentukan lokasi kamar, jenis kamar yang tersedia dan tarif kamar, melaksanakan update/pembaharuan status kamar, memiliki pengetahuan dengan departemen reservasi, mendata kunci kamar, menggunakan peralatan front office, memiliki posting data tamu check-out dan memfile semua biaya untuk yamu, akun master dan kartu kredit, melakukan prosedur untuk mengeluarkan dan menutup deposit box dan aman digunakan oleh tamu, memastikan melakukan etiket telepon dengan benar, memastikan email, paket dan pesan dengan tepat sesuai dengan prosedur, pada akhir waktu bekerja memberikan informasi selengkap-lengkapnya kepada shift berikut untuk ditindaklanjuti atau sebagai bahan informasi','1.Menyambut tamu yang datang di kantor depan dengan ramah dan sopan<br>\r\n2.Melakukan pendaftaran tamu/ menangani tamu check in<br>\r\n3.Mencatat uang deposit tamu untuk menginap<br>\r\n4.Menangani tamu check out<br>\r\n5.Menghitung dan bertanggung jawab atas uang transaksi selama staff tersebut bertugas pada hari tersebut<br>\r\n6.Melaksanakan tugas lain sesuai arahan dan perintah atasan','Setelah mendapatkan okupasi ini, peserta sertifikasi dapat melanjutkan proses pembelajarannya melalui pendidikan, pelatihan dan/atau pengalaman di tempat kerja untuk mencapai jenjang lanjutan dan sertifikasi :<br>\r\nFront Office Supervisor<br>\r\nSertifikasi V bidang Front Office','Minimal lulus pelatihan sertifikat IV atau telah menduduki jabatan Front Office Attendant, Assistant Receptionist; Relief Receptionist; Telephone Operator; Telephonist; Switchboard Operator minimal pengalaman 2 tahun.','3','front-office-series','receptionist1.jpg','receptionist',1,0),(25,5,'TELEPHONE OPERATOR','Operator telepon bertugas untuk menjawab panggilan masuk, mengarahkan panggilan ke kamar tamu, staf atau departemen melalui switchboard atau sistem PABX, menerima dan memeriksa bill telepon, menerima biaya telepon dari perusahaan telekomunikasi dan memposting biaya tersebut ke Front desk/ Resepsionis, mengambil dan mendistribusikan pesan untuk tamu, menjawab pertanyaan tentang event/ aktivitas hotel, memahami system untuk mengoperasikan PABX, menyediakan pelayanan paging untuk tamu hotel, memonitor sistem otomatis termasuk alarm kebakaran dan peralatan telepon ketika departemen teknik dan pemeliharaan ditutup.','1.Menjawab telepon yang masuk baik dari internal maupun eksternal mentransfer langsung ke   setiap extension yang dituju<br>\r\n2.Melayani, menyambungkan telepon baik dari tamu atau dari departemen<br>\r\n3.Memeriksa bill telepon dan menyerahkannya FO cashier apabila perlu untuk diposting<br>\r\n4.Menangani pelayanan “Incoming dan Outgoing’ faximile dan langsung membuat bill tersebut<br>\r\n5.Menerima dan mendistribusikan pesan untuk tamu dan departemen lain<br>\r\n6.Mengetahui layout hotel dan fasilitasnya<br>\r\n7.Menjawab pertanyaan yang berkaitan dengan event/kegiatan dan fasilitas hotel<br>\r\n8.Mengerti cara pengoperasian PABX<br>\r\n9.Menjaga privasi tamu kamar dalam hal memberikan informasi terhadap tamu luar<br>\r\n10.Mencocokan printout rekening telepon tamu dengan FO cashier pada setiap akhir shift<br>\r\n11.Menangani permintaan tamu kamar untuk memblokir line teleponnya<br>\r\n12.Menangani pemutaran dan mengatur cassette atau radio<br>\r\n13.Menghadiri rapat bulanan<br>\r\n14.Menjaga hubungan baik dengan tamu, rekan kerja dan departemen lain<br>\r\n15.Selalu menjaga standar “telephone cortesy”<br>\r\n16.Menjaga kebersihan lingkungan kerja ruang Switch Board Operator<br>\r\n17.Selalu tanggap dan cepat memperbaiki keluhan-keluhan atas layanan telepon<br>\r\n18.Melaksanakan tugas lain sesuai arahan dan perintah atasan','Setelah mendapatkan okupasi ini, peserta sertifikasi dapat melanjutkan proses pembelajarannya melalui pendidikan, pelatihan dan/atau pengalaman di tempat kerja untuk mencapai jenjang lanjutan dan sertifikasi :<br>\r\n1Receptionist<br>\r\n\r\n2Sertifikasi IV bidang Front Office','Minimal lulus pelatihan sertifikat III atau telah menduduki jabatan Junior Bell Boy;Assistant Porter; Bellhop , dengan pengalaman 1 tahun','3','front-office-series','telephone-operator.jpg','telephone-operator',1,0),(26,5,'WAITER','Pramusaji menyajikan makanan dan minuman di meja di tempat makan dan minum, klub, lembaga dan kantin, pada kapal dan kereta penumpang.','1.Mengatur meja dengan linen bersih, peralatan makan dan gelas ;<br>\r\n2.Menyambut pelanggan dan menyajikan menu dan daftar minuman;<br>\r\n3.Memberikan saran tentang pilihan makanan dan minuman;<br>\r\n4.Menerima pesanan makanan dan minuman dan menyampaikan pesanan ke staf dapur atau bar;<br>\r\n5.Menghidangkan makanan dan minuman untuk klien di meja;<br>\r\n6.Membersihkan meja dan mengembalikan piring dan alat makan ke dapur;<br>\r\n7.Menyajikan tagihan, menerima pembayaran dan mengoperasikan mesin penjualan dan cash register.','Setelah mendapatkan okupasi ini, peserta sertifikasi dapat melanjutkan proses pembelajaraannya melalui pendidikan, pelatihan dan/atau pengalaman di tempat kerja untuk mencapai jenjang lanjutan dan sertifikasi :<br>\r\n?Head Waiter<br>\r\n?Sertifikasi IV bidang Tata Hidang','Lulus pendidikan dan pelatihan sertifikat III atau telah menduduki jabatan Busboy; Waiter(ress); Server; Restaurant and Bar Service Agent, dengan pengalaman minimum 1 tahun dijabatan tersebut.','3','fbs-series','waiter.jpg','waiter',1,0),(27,5,' OPERATIONAL','-','-','-','-','3','services-series','operational.jpg','operational',1,0),(28,7,'SALES','-','-','-','-','3','sales-series','sales.png','sales',0,600000);
/*!40000 ALTER TABLE `modul` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peserta`
--

DROP TABLE IF EXISTS `peserta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `tempatlahir` varchar(40) NOT NULL,
  `ttl` date NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `kantor` varchar(40) NOT NULL,
  `alamat_kantor` text NOT NULL,
  `telp_kantor` varchar(15) NOT NULL,
  `biografi` text NOT NULL,
  `pass` text NOT NULL,
  `unique_code` text NOT NULL,
  `img` varchar(15) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_peserta`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peserta`
--

LOCK TABLES `peserta` WRITE;
/*!40000 ALTER TABLE `peserta` DISABLE KEYS */;
INSERT INTO `peserta` VALUES (25,'Ananda Rifkiy Hasan','L','Karanglewas Kidul rt 02/01','Banyumas','2000-04-01','081327000089','ananda.rifkiy32@gmail.com','Global Top Career','Jl. Cidodol Raya no. 40','081327000089','Disini senang','202cb962ac59075b964b07152d234b70','jkZ24SLOfConZapTXCK2mjEbF1FZU5nEqNHupcJVo7IOi7sFKCI7wWjCYyl33ZHuwYpmB8HzGZNyhFE2SXAP3tbcrMgvwypsWfehnwh3W52ELGHonRDrKoUCBB879x0gcfOQb6U7BWMWndKb4YTPMy','25.jpg',1),(27,'Ajeng Fitria Rahmawati','P','Cilacap','Cilacap','2000-12-26','081328963818','ajengfitria81@gmail.com','','','','','202cb962ac59075b964b07152d234b70','zkHcJaYaCJNx7GCBSlej3sVU0NzvziHyTZbn99NLTkIb0VnSGRCKKioL5nG4WY307eoHoBdIvwuwRhPh9c2UKqpPe6UBeYBmDz31BgK7cE44vUl56nZQeOqIVKTAsfw5f07qhSyKg2OcWAicyH3cgt','',1);
/*!40000 ALTER TABLE `peserta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `psertifikasi`
--

DROP TABLE IF EXISTS `psertifikasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `psertifikasi` (
  `id_psertifikasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_peserta` int(11) NOT NULL,
  `id_sertifikasi` int(11) NOT NULL,
  `id_trainer` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_psertifikasi`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `psertifikasi`
--

LOCK TABLES `psertifikasi` WRITE;
/*!40000 ALTER TABLE `psertifikasi` DISABLE KEYS */;
INSERT INTO `psertifikasi` VALUES (9,25,2,3);
/*!40000 ALTER TABLE `psertifikasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `result` (
  `id_result` int(11) NOT NULL AUTO_INCREMENT,
  `id_test` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `nilai` double DEFAULT NULL,
  `nilaicompany` double DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`id_result`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `result`
--

LOCK TABLES `result` WRITE;
/*!40000 ALTER TABLE `result` DISABLE KEYS */;
INSERT INTO `result` VALUES (72,30,25,50,NULL,'Sudah di kerjakan','Ot0r3FVkspcSmSx'),(73,47,25,20,NULL,'Sudah di kerjakan','C0HwGLywu8uDOoy'),(74,32,25,NULL,NULL,'Sudah di kerjakan','Sl8ws5hyIy1mtuL');
/*!40000 ALTER TABLE `result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sertifikasi`
--

DROP TABLE IF EXISTS `sertifikasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sertifikasi` (
  `id_sertifikasi` int(11) NOT NULL AUTO_INCREMENT,
  `id_modul` int(11) NOT NULL,
  `persyaratan_dasar` text NOT NULL,
  `hak` text NOT NULL,
  `kewajiban` text NOT NULL,
  `biaya` varchar(255) NOT NULL,
  `proses` text NOT NULL,
  PRIMARY KEY (`id_sertifikasi`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sertifikasi`
--

LOCK TABLES `sertifikasi` WRITE;
/*!40000 ALTER TABLE `sertifikasi` DISABLE KEYS */;
INSERT INTO `sertifikasi` VALUES (2,19,'Peserta sertifikasi dapat mengajukan sertifikasi dengan persyaratan bukti kompetensi berasal dari pendidikan, pelatihan dan/atau pengalaman kerja sesuai dengan bidang kerja di bidang Tata Graha (Housekeeping)','i.	Peserta yang lulus dalam asesmen kompetensi akan diberikan sertifikat kompetensi sesuai okupasinya.\r\n<br>\r\nii.	Menggunakan untuk promosi diri sebagai profesi Pariwisata Bidang Tata Graha (Housekeeping).','i.	Melaksanakan keprofesian bidang tata graha dengan tetap menjaga kode etik profesi.<br>\r\nii.	Mengikuti program surveilan yang ditetapkan LSP minimal satu tahun sekali.\r\n<br>\r\niii.	Melaporkan rekaman kegiatan asesmen setiap 6 bulan kepada LSP yang menerbitkan sertifikat kompetensi, yaitu pada bulan Juni dan Desember setiap tahunnya.\r\n','Struktur biaya sertifikasi mencakup biaya asesmen, surveilan dan administrasi.\r\n<br>Biaya sertifikasi belum termasuk biaya akomodasi dan transportasi asesor, yang diperhitungkan sesuai dengan kondisi dan moda transportasi pelaksanaan asesmen.\r\n','Secara umum proses sertifikasi mencakup peserta yang telah memastikan diri bahwa kompetensinya sesuai dengan standar kompetensi bidang tata graha. Mereka dapat segera mengajukan permohonan kepada Lembaga Sertifikasi Profesi (LSP) dengan memilih Tempat Uji Kompetensi (TUK)/Assessment Centre yang diinginkan, dengan mengisi Formulir APL 01, APL 02 untuk permohonan dan penilaian mandiri, kemudian LSP akan menugaskan Asesor Kompetensi yang kemudian akan mengases peserta dengan standar asesmen berdasarkan assessor manual di Toolbox ASEAN MRA. Asesor Kompetensi setelah selesai mengases segera merekomendasikan hasil keputusan uji kompetensi kepada LSP. LSP akan mengevaluasi (bila diperlukan membentuk Komite Teknis) dan akan menetapkan status kompetensi serta akan menerbitkan sertifikat kompetensi berdasarkan skema Okupasi Nasional'),(3,21,'Peserta sertifikasi dapat mengajukan sertifikasi dengan persyaratan bukti kompetensi berasal dari pendidikan, pelatihan dan/atau pengalaman kerja sesuai dengan bidang kerja di bidang Tata Graha (Housekeeping).','i.	Peserta yang lulus dalam asesmen kompetensi akan diberikan sertifikat kompetensi sesuai okupasinya.\r\n<br>\r\nii.	Menggunakan untuk promosi diri sebagai profesi Pariwisata Bidang Tata Graha (Housekeeping).','i.	Melaksanakan keprofesian bidang tata graha dengan tetap menjaga kode etik profesi.<br>\r\nii.	Mengikuti program surveilan yang ditetapkan LSP minimal satu tahun sekali.\r\n<br>\r\niii.	Melaporkan rekaman kegiatan asesmen setiap 6 bulan kepada LSP yang menerbitkan sertifikat kompetensi, yaitu pada bulan Juni dan Desember setiap tahunnya.','a. Struktur biaya sertifikasi mencakup biaya asesmen, surveilan dan administrasi.\r\n<br>\r\nb. Biaya sertifikasi belum termasuk biaya akomodasi dan transportasi asesor, yang diperhitungkan sesuai dengan kondisi dan moda transportasi pelaksanaan asesmen\r\n','Secara umum proses sertifikasi mencakup peserta yang telah memastikan diri bahwa kompetensinya sesuai dengan standar kompetensi bidang tata graha. Mereka dapat segera mengajukan permohonan kepada Lembaga Sertifikasi Profesi (LSP) dengan memilih Tempat Uji Kompetensi (TUK)/Assessment Centre yang diinginkan, dengan mengisi Formulir APL 01, APL 02 untuk permohonan dan penilaian mandiri, kemudian LSP akan menugaskan Asesor Kompetensi yang kemudian akan mengases peserta dengan standar asesmen berdasarkan assessor manual di Toolbox ASEAN MRA. Asesor Kompetensi setelah selesai mengases segera merekomendasikan hasil keputusan uji kompetensi kepada LSP. LSP akan mengevaluasi (bila diperlukan membentuk Komite Teknis) dan akan menetapkan status kompetensi serta akan menerbitkan sertifikat kompetensi berdasarkan skema Okupasi Nasional.'),(4,23,'Peserta sertifikasi dapat mengajukan sertifikasi dengan persyaratan bukti kompetensi berasal dari pendidikan, pelatihan dan/atau pengalaman kerja sesuai dengan bidang kerja di bidang Kantor Depan (Front Office).','1)Peserta yang lulus dalam asesmen kompetensi akan diberikan sertifikat kompetensi sesuai okupasinya.<br>\r\n2)Menggunakan sertifikatnya untuk sebutan profesi Bidang Kantor Depan (Front Office).','1)Melaksanakan keprofesian bidang kantor depan dengan tetap menjaga kode etik profesi.<br>\r\n2)Mengikuti program surveilan yang ditetapkan LSP minimal satu tahun sekali.\r\n<br>\r\n3)Melaporkan rekaman kegiatan asesmen setiap 6 bulan kepada LSP yang menerbitkan sertifikat kompetensi, yaitu pada bulan Juni dan Desember setiap tahunnya.','a.Struktur biaya sertifikasi mencakup biaya asesmen, surveilan dan administrasi.<br>\r\nb.Biaya sertifikasi belum termasuk biaya akomodasi dan transportasi asesor, yang diperhitungkan sesuai dengan kondisi dan moda transportasi pelaksanaan asesmen.','Secara umum proses sertifikasi mencakup peserta yang telah memastikan diri bahwa kompetensinya sesuai dengan standar kompetensi bidang kantor depan. Mereka dapat segera mengajukan permohonan kepada Lembaga Sertifikasi Profesi (LSP) dengan memilih Tempat Uji Kompetensi (TUK)/Assessment Centre yang diinginkan, dengan mengisi Formulir APL 01, APL 02 untuk permohonan dan penilaian mandiri, kemudian LSP akan menugaskan Asesor Kompetensi yang kemudian akan mengases peserta dengan standar asesmen berdasarkan assessor manual dalam toolbox ASEAN TAAAS 401 C, TAAAS 402 C dan TAATS 403 B. Asesor Kompetensi setelah selesai mengases segera merekomendasikan hasil keputusan uji kompetensi kepada LSP. LSP akan mengevaluasi (bila diperlukan membentuk Komite Teknis) dan akan menetapkan status kompetensi serta akan menerbitkan sertifikat kompetensi berdasarkan skema Okupasi Nasional.'),(5,24,'Peserta sertifikasi dapat mengajukan sertifikasi dengan persyaratan bukti kompetensi berasal dari pendidikan, pelatihan dan/atau pengalaman kerja sesuai dengan bidang kerja di bidang Kantor Depan (Front Office).','1)Peserta yang lulus dalam asesmen kompetensi akan diberikan sertifikat kompetensi sesuai okupasinya.<br>\r\n2)Menggunakan sertifikatnya untuk sebutan profesi Bidang Kantor Depan (Front Office).','1)Melaksanakan keprofesian bidang kantor depan dengan tetap menjaga kode etik profesi.<br>\r\n2)Mengikuti program surveilan yang ditetapkan LSP minimal satu tahun sekali.<br>\r\n3)Melaporkan rekaman kegiatan asesmen setiap 6 bulan kepada LSP yang menerbitkan sertifikat kompetensi, yaitu pada bulan Juni dan Desember setiap tahunnya.',' Struktur biaya sertifikasi mencakup biaya asesmen, surveilan dan administrasi.<br>\r\nB.Biaya sertifikasi belum termasuk biaya akomodasi dan transportasi asesor, yang diperhitungkan sesuai dengan kondisi dan moda transportasi pelaksanaan asesmen.','Secara umum proses sertifikasi mencakup peserta yang telah memastikan diri bahwa kompetensinya sesuai dengan standar kompetensi bidang kantor depan. Mereka dapat segera mengajukan permohonan kepada Lembaga Sertifikasi Profesi (LSP) dengan memilih Tempat Uji Kompetensi (TUK)/Assessment Centre yang diinginkan, dengan mengisi Formulir APL 01, APL 02 untuk permohonan dan penilaian mandiri, kemudian LSP akan menugaskan Asesor Kompetensi yang kemudian akan mengases peserta dengan standar asesmen berdasarkan assessor manual dalam toolbox ASEAN TAAAS 401 C, TAAAS 402 C dan TAATS 403 B. Asesor Kompetensi setelah selesai mengases segera merekomendasikan hasil keputusan uji kompetensi kepada LSP. LSP akan mengevaluasi (bila diperlukan membentuk Komite Teknis) dan akan menetapkan status kompetensi serta akan menerbitkan sertifikat kompetensi berdasarkan skema Okupasi Nasional.'),(6,25,'Peserta sertifikasi dapat mengajukan sertifikasi dengan persyaratan bukti kompetensi berasal dari pendidikan, pelatihan dan/atau pengalaman kerja sesuai dengan bidang kerja di bidang Kantor Depan (Front Office).','1)Peserta yang lulus dalam asesmen kompetensi akan diberikan sertifikat kompetensi sesuai okupasinya.\r\n<br>\r\n2)Menggunakan sertifikatnya untuk sebutan profesi Bidang Kantor Depan (Front Office).','1)Melaksanakan keprofesian bidang kantor depan dengan tetap menjaga kode etik profesi.<br>\r\n2)Mengikuti program surveilan yang ditetapkan LSP minimal satu tahun sekali.<br>\r\n\r\n3)Melaporkan rekaman kegiatan asesmen setiap 6 bulan kepada LSP yang menerbitkan sertifikat kompetensi, yaitu pada bulan Juni dan Desember setiap tahunnya.','A.Struktur biaya sertifikasi mencakup biaya asesmen, surveilan dan administrasi.\r\n<br>\r\nB.Biaya sertifikasi belum termasuk biaya akomodasi dan transportasi asesor, yang diperhitungkan sesuai dengan kondisi dan moda transportasi pelaksanaan asesmen.','Secara umum proses sertifikasi mencakup peserta yang telah memastikan diri bahwa kompetensinya sesuai dengan standar kompetensi bidang kantor depan. Mereka dapat segera mengajukan permohonan kepada Lembaga Sertifikasi Profesi (LSP) dengan memilih Tempat Uji Kompetensi (TUK)/Assessment Centre yang diinginkan, dengan mengisi Formulir APL 01, APL 02 untuk permohonan dan penilaian mandiri, kemudian LSP akan menugaskan Asesor Kompetensi yang kemudian akan mengases peserta dengan standar asesmen berdasarkan assessor manual dalam toolbox ASEAN TAAAS 401 C, TAAAS 402 C dan TAATS 403 B. Asesor Kompetensi setelah selesai mengases segera merekomendasikan hasil keputusan uji kompetensi kepada LSP. LSP akan mengevaluasi (bila diperlukan membentuk Komite Teknis) dan akan menetapkan status kompetensi serta akan menerbitkan sertifikat kompetensi berdasarkan skema Okupasi Nasional.'),(7,26,'Peserta sertifikasi dapat mengajukan sertifikasi dengan persyaratan bukti kompetensi berasal dari pendidikan, pelatihan dan/atau pengalaman kerja sesuai dengan bidang kerja di bidang Tata Hidang (Food and Beverage Service).','1)Peserta yang lulus dalam asesmen kompetensi akan diberikan sertifikat kompetensi sesuai level.<br>\r\n2)Menggunakan untuk promosi diri sebagai profesi Pariwisata bidang Tata Hidang (Food and Beverage Service)','1)Melaksanakan keprofesian bidang tata hidang dengan tetap menjaga kode etik profesi.<br>\r\n2)Mengikuti program surveilan yang ditetapkan LSP minimal satu tahun sekali.<br>\r\n3)Melaporkan rekaman kegiatan asesmen setiap 6 bulan kepada LSP yang menerbitkan sertifikat kompetensi, yaitu pada bulan Juni dan Desember setiap tahunnya.','a.Struktur biaya sertifikasi mencakup biaya asesmen, surveilan dan administrasi.<br>\r\nb.Biaya sertifikasi belum termasuk biaya akomodasi dan transportasi asesor, yang diperhitungkan sesuai dengan kondisi dan moda transportasi pelaksanaan asesmen.','Secara umum proses sertifikasi mencakup peserta yang telah memastikan diri bahwa kompetensinya sesuai dengan standar kompetensi bidang Tata Hidang (Food and Beverage Service). Mereka dapat segera mengajukan permohonan kepada Lembaga Sertifikasi Profesi (LSP) dengan memilih Tempat Uji Kompetensi (TUK) /Assessment Centre yang diinginkan, dengan mengisi Formulir APL 01, APL 02 untuk permohonan dan penilaian mandiri, kemudian LSP akan menugaskan Asesor Kompetensi yang kemudian akan mengases peserta dengan\r\n\r\nstandar asesmen berdasarkan Assessor Manual dalam Toolbox Assessor Kompetensi, setelah selesai mengases segera merekomendasikan hasil keputusan uji kompetensi kepada LSP. LSP akan mengevaluasi (bila diperlukan membentuk Komite Teknis) dan akan menetapkan status kompetensi serta akan menerbitkan sertifikat kompetensi berdasarkan skema Okupasi Nasional.\r\n');
/*!40000 ALTER TABLE `sertifikasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `soal`
--

DROP TABLE IF EXISTS `soal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL AUTO_INCREMENT,
  `id_test` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `a` text NOT NULL,
  `bobot_a` int(11) NOT NULL,
  `b` text NOT NULL,
  `bobot_b` int(11) NOT NULL,
  `c` text NOT NULL,
  `bobot_c` int(11) NOT NULL,
  `benar` varchar(2) NOT NULL,
  PRIMARY KEY (`id_soal`)
) ENGINE=InnoDB AUTO_INCREMENT=215 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `soal`
--

LOCK TABLES `soal` WRITE;
/*!40000 ALTER TABLE `soal` DISABLE KEYS */;
INSERT INTO `soal` VALUES (71,30,'Bagaimana cara set up bed runner yang baik:','Dibentangkan secara veritikal dan berjarak kurang lebih 15 cm dari tepi bed bagian bawah',100,'Dibentangkan secara horizontal dan berjarak kurang lebih 15 cm dari tepi bed bagian bawah ',0,'Dibentangkan secara melingkarl dan berjarak kurang lebih 15 cm dari tepi bed bagian bawah',0,''),(72,30,'Telepon sebaiknya diletakan pada posisi: ','Kanan ',0,'Kiri',100,'Bawah',0,''),(73,30,'Berapa jarak garbage bin dari dinding :','10',0,'15',0,'20',100,''),(74,30,'Berikut temasuk bagian bedroom, KECUALI :','Pillow cussons',0,'Duvet ',0,'Shower custain',100,''),(79,30,'Hal yang dilakukan pertama kali didalam bath room adalah :  ','Bersihkan lantai',100,'Semprotkan cleaner ',0,'Flush toilet',0,''),(80,30,'Hal terakhir yang dilakukan setelah membersihka kamar adalah: ','Pillow cusson',0,'Bed making ',0,'Room attendent control sheet ',100,''),(81,30,'Berapa kali sebaiknya mengetuk pintu kamar/bel kamar : ','4 kali',0,'2 kali ',0,'3 kali ',100,''),(82,30,'Apa kegunaan dusting : ','kain pembersih untuk membersihkan sisa chemical ',0,'kain pembersih untuk menyemprotkan toilet cleaner',0,'kain pembersih untuk membersihkan debu di kamar yang dimulai dari pintu kamuk kamar lalu berjalan sesuai dengan arah jarum jam',100,''),(88,32,'Buatlah video membersihkan kamar tamu','',0,'',0,'',0,''),(91,33,'dDZXZX','',0,'',0,'',0,''),(92,33,'ZXZX','',0,'',0,'',0,''),(93,33,'ZXZXZX','',0,'',0,'',0,''),(94,34,'asjhdajsd','asd',80,'kmnskdn',90,'mansdn',100,''),(95,34,'ksdfkjshdf','aksjndskja',80,'zasndknfd',90,'lksdlfnhskdf',100,''),(96,34,'ksdjflks','lksdnfkn',80,'kmasnjn',90,'lksmdfkns',100,''),(99,37,'Membantu tamu sejak pintu masuk hotel hingga masuk ke dalam kamar adalah tugas:  ','Reception ',100,'Reservation ',0,'Concierge/Bellboy',0,''),(100,37,'Salah satu peran Front Office yang bertugas untuk mengatasi/menyelesaikan masalah yang timbul adalah tugas dari : ','Wakil Manajemen ',100,'Penjual (Sales Person) ',0,'Diplomatis',0,''),(101,37,'Secara garis besar, peranan Front Office meliputi : ','Pemberi informasi & Diplomatis ',100,'Lifting & Stacking ',0,'Reception & Escorting',0,''),(102,37,'Berikut adalah peran Front Office, KECUALI:  ','Pemberi Informasi. ',0,'Diplomatis ',0,'Dokumentasi',100,''),(103,37,'Teknik mengangkat barang tamu, perhatikan tanda barang dan kondisi barang adalah:  ','Lifting ',100,'Stacking ',0,'Escorting',0,''),(104,37,'Berikut merupakan metode pengangkatan barang, KECUALI: ','Lifting ',0,'Stacking ',0,'Escorting',100,''),(105,37,'Teknik meletakkan atau menumpuk barang dengan cara yang benar dan tepat untuk menghindari kerusakan atau keretakan pada barang adalah pengertian dari : ','Lifting ',0,'Stacking ',100,'Escorting',0,''),(106,37,'Mampu berkomunikasi dengan tamu dan masyarakat sekitar agar terjalin hubungan yang harmonis dan berdampak pada pembentukan citra hotel yang baik, merupakan peran dari: ','Wakil Manajemen ',0,'Penjual (sales person) ',0,'Humas',100,''),(107,37,'Berikut adalah Tugas dan tanggung jawab concierge (bellboy), KECUALI:   ','Membuka dan menutup pintu kendaraan/ mobil/ taxi',0,'Memberikan pelayanan penanganan barang bawaan tamu tiba, pindah kamar dan tamu-tamu berangkat. ',0,'melayani tamu selama berada di hotel sampai dengan meninggalkan hotel.',100,''),(108,37,'Suatu area dimana tamu pertama kali bertemu dengan staff hotel, disebut : ','Front Office ',100,'Lifting ',0,'Escorting',0,''),(109,38,'Suatu area dimana tamu pertama kali bertemu dengan staff hotel, disebut : ','Front Office ',100,'Lifting ',0,'Escorting',0,''),(110,38,'Berikut adalah Tugas dan tanggung jawab concierge (bellboy), KECUALI: ','Membuka dan menutup pintu kendaraan/ mobil/ taxi  ',0,'Memberikan pelayanan penanganan barang bawaan tamu tiba, pindah kamar dan tamu-tamu berangkat. ',0,'melayani tamu selama berada di hotel sampai dengan meninggalkan hotel.',100,''),(111,38,'Mampu berkomunikasi dengan tamu dan masyarakat sekitar agar terjalin hubungan yang harmonis dan berdampak pada pembentukan citra hotel yang baik, merupakan peran dari: ','Wakil Manajemen ',0,'Penjual (sales person) ',0,'Humas',100,''),(112,38,'Teknik meletakkan atau menumpuk barang dengan cara yang benar dan tepat untuk menghindari kerusakan atau keretakan pada barang adalah pengertian dari : ','Lifting ',0,'Stacking ',100,'Escorting',0,''),(113,38,'Berikut merupakan metode pengangkatan barang, KECUALI: ','Lifting ',0,'Stacking ',0,'Escorting',100,''),(114,38,'Teknik mengangkat barang tamu, perhatikan tanda barang dan kondisi barang adalah: ','Lifting ',100,'Stacking ',0,'Escorting',0,''),(115,38,'Berikut adalah peran Front Office, KECUALI:  ','Pemberi Informasi. ',0,'Diplomatis ',0,'Dokumentasi',100,''),(116,38,'Secara garis besar, peranan Front Office meliputi : ','Pemberi informasi & Diplomatis ',100,'Lifting & Stacking ',0,'Reception & Escorting',0,''),(117,38,'Salah satu peran Front Office yang bertugas untuk mengatasi/menyelesaikan masalah yang timbul adalah tugas dari : ','Wakil Manajemen ',100,'Penjual (Sales Person) ',0,'Diplomatis',0,''),(118,38,'Membantu tamu sejak pintu masuk hotel hingga masuk ke dalam kamar adalah tugas:  ','Reception ',100,'Reservation ',0,'Concierge/Bellboy',0,''),(119,39,'Dalam bukunya PaulB.White dan Helen Beckley memiliki rasa tanggung jawab terhadap pekerjaan dimaknai sebagai :  ','Sense of responbility ',100,'Loyality  ',0,'Respect',0,''),(120,39,'Sedangkan tugas seorang receptionis, KECUALI : ','Membaca Log Book ',0,'Menjaga room rack selalu akurat ',0,'Mengantar tamu ke kamar',100,''),(121,39,'Receptionist dipahami sebagai seseorang yang bertugas untuk : ','Menerima dan menyambut tamu ',0,'Menjaga lobby tetap bersih dan rapih ',0,'Mengantar tamu ke meja pendataran',100,''),(122,39,'Berikut adalah peran Reception, KECUALI:  ','Pemberi Informasi. ',0,'Diplomatis ',100,'Dokumentasi',0,''),(123,39,'Berikut ini adalah receptionis prosess, Kecuali : ','Guest registratrion & check-in prosess ',0,'Escorting guest ',100,'Group check-in',0,''),(124,39,'Salah satu tugas seorang reception adalah sebagai berikut, KECUALI:  ','Menangani Penitipan barang bawaan tamu  ',100,'Menerima laporan housekeeping ',0,'Memeriksa today reservation slip',0,''),(125,39,'Yearning to be good receptionist dalam Personality adalah :    ','Memiliki keinginan untuk mencintai pekerjaan',100,'Teliti dalam melakukan setiap pekerjaan ',0,'Memiliki pola pikir yang teratur dan terarah dengan metode yang baik dan akurat',0,''),(126,39,'Melayani tamu dengan kesopan- santunan disertai senyum yang ramah adalah pengertian dari: ','Sense of Responsibility ',0,'Pleasantess ',100,'Orderly mind',0,''),(127,39,'Salah 1 dari 5 guest registration adalah  : ','Menyapa tamu yang baru datang  ',100,'Selalu berkomunikasi dengan bell boy  ',0,'Sediakan alat tulis tamu menandantangani formulir',0,''),(128,39,'Buku catatan yang berisi hal-hal yang memerlukan tindak  dan menjadi catatan penghubung dari shift yang satu ke shift yang lainya adalah: ','Log book ',100,'Manual book ',0,'E-book',0,''),(129,40,'Buku catatan yang berisi hal-hal yang memerlukan tindak  dan menjadi catatan penghubung dari shift yang satu ke shift yang lainya adalah: ','Log book ',100,'Manual book ',0,'E-book',0,''),(130,40,'Salah 1 dari 5 guest registration adalah  : ','Menyapa tamu yang baru datang  ',100,'Selalu berkomunikasi dengan bell boy  ',0,'Sediakan alat tulis tamu menandantangani formulir',0,''),(131,40,'Melayani tamu dengan kesopan- santunan disertai senyum yang ramah adalah pengertian dari: ','Sense of Responsibility ',0,'Pleasantess ',100,'Orderly mind',0,''),(132,40,'Yearning to be good receptionist dalam Personality adalah :    ','Memiliki keinginan untuk mencintai pekerjaan',100,'Teliti dalam melakukan setiap pekerjaan ',0,'Memiliki pola pikir yang teratur dan terarah dengan metode yang baik dan akurat',0,''),(133,40,'Salah satu tugas seorang reception adalah sebagai berikut, KECUALI:  ','Menangani Penitipan barang bawaan tamu  ',100,'Menerima laporan housekeeping ',0,'Memeriksa today reservation slip',0,''),(134,40,'Berikut ini adalah receptionis prosess, Kecuali :','Guest registratrion & check-in prosess ',0,'Escorting guest ',100,'Group check-in',0,''),(135,40,'Berikut adalah peran Reception, KECUALI:  ','Pemberi Informasi. ',0,'Diplomatis ',100,'Dokumentasi',0,''),(136,40,'Receptionist dipahami sebagai seseorang yang bertugas untuk : ','Menerima dan menyambut tamu ',0,'Menjaga lobby tetap bersih dan rapih ',0,'Mengantar tamu ke meja pendataran',100,''),(137,40,'Sedangkan tugas seorang receptionis, KECUALI : ','Membaca Log Book ',0,'Menjaga room rack selalu akurat ',0,'Mengantar tamu ke kamar',100,''),(138,40,'Dalam bukunya PaulB.White dan Helen Beckley memiliki rasa tanggung jawab terhadap pekerjaan dimaknai sebagai :  ','Sense of responbility ',100,'Loyality  ',0,'Respect',0,''),(139,41,'Berapa batas maksimal untuk menjawab dering telepon:  ','2 kali ',0,'3 kali ',100,'4 kali',0,''),(140,41,'Berapa batas minimal dalam menyebut nama tamu saat bertelepon: ','2 kali ',0,'3 kali ',100,'4 kali',0,''),(141,41,'Berikut hal yang harus dilakukan saat mengakhiri telepon, KECUALI  : ','Say  “Good bye first” ',100,'Say “Thank you” ',0,'Say “have a nice day”',0,''),(142,41,'Berapa lama batas waktu untuk Hold  : ','>1 menit ',100,'2 menit ',0,'3 menit',0,''),(143,41,'Berikut informasi yang diperlukan ketika meninggalkan pesan, KECUALI :  ','Nama lengkap penelpon ',0,'Waktu/tanggal ',0,'Hubungan',100,''),(144,41,'Hal yang harus diperhatikan ketika mengakhiri telepon adalah, kecuali :  ','Biarkan tamu terlebih dahulu untuk menutup telepon ',0,'Mengucapkan terimakasih ',0,'Mengucapakan selamat tinggal',100,''),(145,41,'Huruf “O” dalam singkatan United Kingdom Speeling Board adalah : ','Oscar ',0,'Oliver ',100,'Oh my Good',0,''),(146,41,'Huruf “S” dalam singkatan internasional speeling board adalah : ','Sierra ',100,'Sugar ',0,'Siang',0,''),(147,41,'Dalam “ending call” tidak boleh mengatakan : ','Good Bye ',100,'Please ',0,'Yes',0,''),(148,41,'Pertanyaan yang selalu diucapkan sebelum menutup telepon adalah : ','Bisa saya telephone kembali setelah hari ini? ',0,'Ada hal lain yang dapat saya bantu?',100,' Cukup sekian telephone hari?',0,''),(149,42,'Pertanyaan yang selalu diucapkan sebelum menutup telepon adalah : ','Bisa saya telephone kembali setelah hari ini? ',0,'Ada hal lain yang dapat saya bantu? ',100,' Cukup sekian telephone hari?',0,''),(150,42,'Dalam “ending call” tidak boleh mengatakan : ','Good Bye ',100,'Please ',0,'Yes',0,''),(151,42,'Huruf “S” dalam singkatan internasional speeling board adalah : ','Sierra ',100,'Sugar ',0,'Siang',0,''),(152,42,'Huruf “O” dalam singkatan United Kingdom Speeling Board adalah : ','Oscar ',0,'Oliver ',100,'Oh my Good',0,''),(153,42,'Hal yang harus diperhatikan ketika mengakhiri telepon adalah, kecuali :  ','Biarkan tamu terlebih dahulu untuk menutup telepon ',0,'Mengucapkan terimakasih ',0,'Mengucapakan selamat tinggal',100,''),(154,42,'Berikut informasi yang diperlukan ketika meninggalkan pesan, KECUALI :  ','Nama lengkap penelpon ',0,'Waktu/tanggal ',0,'Hubungan',100,''),(155,42,'Berapa lama batas waktu untuk Hold  : ','>1 menit ',100,'2 menit ',0,'3 menit',0,''),(156,42,'Berikut hal yang harus dilakukan saat mengakhiri telepon, KECUALI  : ','Say  “Good bye first” ',100,'Say “Thank you” ',0,'Say “have a nice day”',0,''),(157,42,'Berapa batas minimal dalam menyebut nama tamu saat bertelepon: ','2 kali ',0,'3 kali ',100,'4 kali',0,''),(158,42,'Berapa batas maksimal untuk menjawab dering telepon:  ','2 kali ',0,'3 kali ',100,'4 kali',0,''),(159,43,'Fungsi dasar dari Food and Beverage adalah untuk melayani makanan dan minuman untuk dapat memenuhi kebutuhan tamu, tujuan utamanya adalah : ','Mencapai kenyamanan tamu ',0,'Mencapai kepuasan tamu ',100,'Mencapai tip dari tamu',0,''),(160,43,'Bagian yang bertanggung jawab terhadap kebutuhan pelayanan makanan dan minuman serta kebutuhan tamu dan dikelola secara komersial serta professional, adalah :',' Manager Food and Beverage ',0,'Pimpinan Hotel beserta seluruh karyawan ',0,'Food and Beverage Department ',100,''),(161,43,'Penerimaan dan pelayanan kepada tamu yang dilakukan dengan niat baik adalah : ','Customer ',0,'Service ',0,'Hospitality',100,''),(162,43,'Tindakan membantu yang disampaikan dengan ramah untuk memberikan keuntungan atau kesenangan bagi orang lain, adalah : ','Customer ',0,'Service ',100,'Hospitality',0,''),(163,43,'Seseorang yang melakukan pembelian atas produk yang ditawarkan dan pelayanan yang diterima, adalah : ','Customer ',100,'Service ',0,'Hospitality',0,''),(164,43,'Pengertian dari Guest dibawah ini, adalah: ','Seseorang yang yang kita hibur dirumah kita sendiri ',100,'Seseorang yang diberikan pelayanan yang dapat memuaskan ',0,'Seseorang yang membeli produk atau pelayanan',0,''),(165,43,'Prinsip Pelayanan dalam hotel adalah : ','Senyum ',100,'Kerjakan semuanya untuk mendapatkan tips yang besar ',0,'Dekati tamu dengan tegas sehingga tidak dilecehkan',0,''),(166,43,'Prinsip Pelayanan hotel yang harus dihindari : ','Selalu menciptakan suasana akrab ',0,'Melakukan segala sesuatu terhadap tamu yang akan membuat tamu datang kembali ',0,'Tidak melakukan kontak mata dengan tamu, seperti menantang',100,''),(167,43,'Yang bertanggung jawab untuk memproduksi makanan dan minuman berkualitas tinggi untuk memberika kepuasan kepada tamu adalah : ','F&B Kitchen ',100,'F&B Service ',0,'F&B Manager Kitchen',0,''),(168,43,'Layanan terhadap tamu pada suatu acara yang melingkupi pelayanan makanan dan minuman, ruangan dan kelengkapan peralatan yang dibutuhkan adalah: ','F&B Service Restaurant ',0,'F&B Service Banquet ',100,'F&B Service Room Service',0,''),(169,43,'Langkah-langkah Pekerjaan F&B Service adalah: ','Mengambil pesanan tamu, melakukan pelayanan, pembayaran dan bertanya kepuasan pelanggan ',100,'Menyambut tamu, memberikan menu, mencatat pesanan dan memberikan pesanan ke dapur',0,'Memastikan peralatan makan yang lengkap, memerika makanan yang akan disediakan, dan memberikan senyum kepada tamu',0,''),(170,43,'Dibawah ini adalah bentuk dari pelayanan/Service, KECUALI : ','Sediakan alat makan di hadapan tamu ',0,'Menyampaikan menu andalan ',100,'Membersihkan alat makan kotor setelah beberapa waktu',0,''),(171,44,'Dibawah ini adalah bentuk dari pelayanan/Service, KECUALI : ','Sediakan alat makan di hadapan tamu ',0,'Menyampaikan menu andalan ',100,'Membersihkan alat makan kotor setelah beberapa waktu',0,''),(172,44,'Langkah-langkah Pekerjaan F&B Service adalah: ','Mengambil pesanan tamu, melakukan pelayanan, pembayaran dan bertanya kepuasan pelanggan ',100,'Menyambut tamu, memberikan menu, mencatat pesanan dan memberikan pesanan ke dapur',0,'Memastikan peralatan makan yang lengkap, memerika makanan yang akan disediakan, dan memberikan senyum kepada tamu',0,''),(173,44,'Layanan terhadap tamu pada suatu acara yang melingkupi pelayanan makanan dan minuman, ruangan dan kelengkapan peralatan yang dibutuhkan adalah: ','F&B Service Restaurant ',0,'F&B Service Banquet ',100,'F&B Service Room Service',0,''),(174,44,'Yang bertanggung jawab untuk memproduksi makanan dan minuman berkualitas tinggi untuk memberika kepuasan kepada tamu adalah : ','F&B Kitchen ',100,'F&B Service ',0,'F&B Manager Kitchen',0,''),(175,44,'Prinsip Pelayanan hotel yang harus dihindari : ','Selalu menciptakan suasana akrab ',0,'Melakukan segala sesuatu terhadap tamu yang akan membuat tamu datang kembali ',0,'Tidak melakukan kontak mata dengan tamu, seperti menantang',100,''),(176,44,'Prinsip Pelayanan dalam hotel adalah : ','Senyum ',100,'Kerjakan semuanya untuk mendapatkan tips yang besar ',0,'Dekati tamu dengan tegas sehingga tidak dilecehkan',0,''),(177,44,'Pengertian dari Guest dibawah ini, adalah: ','Seseorang yang yang kita hibur dirumah kita sendiri ',100,'Seseorang yang diberikan pelayanan yang dapat memuaskan ',0,'Seseorang yang membeli produk atau pelayanan',0,''),(178,44,'Seseorang yang melakukan pembelian atas produk yang ditawarkan dan pelayanan yang diterima, adalah : ','Customer ',100,'Service ',0,'Hospitality',0,''),(179,44,'Tindakan membantu yang disampaikan dengan ramah untuk memberikan keuntungan atau kesenangan bagi orang lain, adalah : ','Customer ',0,'Service ',100,'Hospitality',0,''),(180,44,'Penerimaan dan pelayanan kepada tamu yang dilakukan dengan niat baik adalah : ','Customer ',0,'Service ',0,'Hospitality',100,''),(181,44,'Bagian yang bertanggung jawab terhadap kebutuhan pelayanan makanan dan minuman serta kebutuhan tamu dan dikelola secara komersial serta professional, adalah : ','Manager Food and Beverage ',0,'Pimpinan Hotel beserta seluruh karyawan ',0,'Food and Beverage Department ',100,''),(182,44,'Fungsi dasar dari Food and Beverage adalah untuk melayani makanan dan minuman untuk dapat memenuhi kebutuhan tamu, tujuan utamanya adalah : ','Mencapai kenyamanan tamu ',0,'Mencapai kepuasan tamu ',100,'Mencapai tip dari tamu',0,''),(183,45,'Apa kegunaan Metal Polish:  ','Untuk mengkilapkan  bahan metal atau stainless ',100,'Untuk  membersihkan lantai ',0,'Untuk membersihkan kaca',0,''),(184,45,'Alat yang digunakan untuk membersihkan debu dilangit-langit  yang tinggi adalah :   ','Ceiling Brush ',100,'Double trolley & Bucket ',0,'MOP',0,''),(185,45,'Apa nama chemical yang digunakan untuk membersihkan porcelein pada toilet dan wastafel :    ','Bowl cleaner',100,' Marbel polish ',0,'Karbol/desisfectant',0,''),(186,45,'Chemical yang melunakann sisa-sisa elemen yang telah mengering adalah : ','Furniture Polish  ',0,'Cement Remover ',100,'Orderly mind',0,''),(187,45,'Apakah kegunaan dari Karbol/Desinfectant?','Untuk membunuh kuman ',100,'Untuk memoles lantai marmer ',0,'Untuk membersihkan lantai',0,''),(188,45,'Mesin yang digunakan untuk membersihkan debu atau mengeringkan air pada laintai/karpet adalah : ','Blower ',0,'Polisher Machine Wet & Dry ',0,'Vacuum Machine',100,''),(189,45,'Alat untuk menyiman perlengkapan dan bahan-bahan pembesih yang sifatnya kecil-kecil disebut : ','Carry Cady ',100,'Public Area Trolley ',0,'Double Trolley/Bucket',0,''),(190,45,'Hand Broom digunakan untuk : ','Menggosok kotoran dan noda pada lantai dinding ',0,'Melindungi tangan dari bahaya bahan kimia ',0,'Membersihkan debu-debu kering',100,''),(191,45,'Sabun cair khusus untuk mencuci tangan adalah : ','Glass Cleaner ',0,'Hand Soap ',100,'Bowl Cleaner  ',0,''),(192,45,'Chemical untuk membersihkan kaca adalah: ','Glass Cleaner ',100,'Floor Cleaner ',0,'Metal Polish',0,''),(193,46,'Chemical untuk membersihkan kaca adalah: ','Glass Cleaner ',100,'Floor Cleaner ',0,'Metal Polish',0,''),(194,46,'Sabun cair khusus untuk mencuci tangan adalah : ','Glass Cleaner ',0,'Hand Soap ',100,'Bowl Cleaner  ',0,''),(195,46,'Hand Broom digunakan untuk : ','Menggosok kotoran dan noda pada lantai dinding ',0,'Melindungi tangan dari bahaya bahan kimia ',0,'Membersihkan debu-debu kering',100,''),(196,46,'Alat untuk menyiman perlengkapan dan bahan-bahan pembesih yang sifatnya kecil-kecil disebut : ','Carry Cady ',100,'Public Area Trolley ',0,'Double Trolley/Bucket  ',0,''),(197,46,'Mesin yang digunakan untuk membersihkan debu atau mengeringkan air pada laintai/karpet adalah : ','Blower ',0,'Polisher Machine Wet & Dry ',0,'Vacuum Machine',100,''),(198,46,'Apakah kegunaan dari Karbol/Desinfectant? ','Untuk membunuh kuman ',100,'Untuk memoles lantai marmer ',0,'Untuk membersihkan lantai',0,''),(199,46,'Chemical yang melunakann sisa-sisa elemen yang telah mengering adalah : ','Furniture Polish  ',0,'Cement Remover ',100,'Orderly mind',0,''),(200,46,'Apa nama chemical yang digunakan untuk membersihkan porcelein pada toilet dan wastafel :    ','Bowl cleaner ',100,'Marbel polish ',0,'Karbol/desisfectant',0,''),(201,46,'Alat yang digunakan untuk membersihkan debu dilangit-langit  yang tinggi adalah :   ','Ceiling Brush ',100,'Double trolley & Bucket ',0,'MOP  ',0,''),(202,46,'Apa kegunaan Metal Polish:  ','Untuk mengkilapkan  bahan metal atau stainless ',100,'Untuk  membersihkan lantai ',0,'Untuk membersihkan kaca  ',0,''),(203,30,'Pada posisi amenities, body lotion diletakan pada posisi :',' Kiri atas ',100,'Kiri Bawah ',0,'Depan',0,''),(204,30,'Dilipat menjadi berapa bagiankah bath matt yang berada diatas toilet bowl cover :','Dua',0,'Tiga',100,'Empat',0,''),(205,47,'Apa kegunaan dusting : ','kain pembersih untuk membersihkan debu di kamar yang dimulai dari pintu kamuk kamar lalu berjalan sesuai dengan arah jarum jam ',100,'kain pembersih untuk membersihkan sisa  chemical ',0,'Kain pembersih untuk menyemprotkan toilet cleaner  	  ',0,''),(206,47,'Pada posisi amenities, body lotion diletakan pada posisi : ','Kiri atas ',100,'Kiri Bawah ',0,'Depan  ',0,''),(207,47,'Dilipat menjadi berapa bagiankah bath matt yang berada diatas toilet bowl cover : ','Dua ',0,'Tiga ',100,'Empat',0,''),(208,47,'Hal terakhir yang dilakukan setelah membersihka kamar adalah: ','Room attendent control sheet ',100,'Bed making ',0,'Pillow cusson  ',0,''),(209,47,'Berapa kali sebaiknya mengetuk pintu kamar/bel kamar  : ','3 kali ',100,'2 kali ',0,'4 kali',0,''),(210,47,'Berikut temasuk bagian bedroom, KECUALI : ','Pillow cussons. ',0,'Duvet ',0,'Shower custain  ',100,''),(211,47,'Hal yang dilakukan pertama kali didalam bath room adalah  : ','Flush toilet ',100,'Semprotkan cleaner ',0,'Bersihkan lantai',0,''),(212,47,'Telepon sebaiknya diletakan pada posisi: ','Kanan ',0,'Kiri ',100,'Bawah  ',0,''),(213,47,'Berapa jarak garbage bin dari dinding : ','10 cm ',0,'15 cm ',0,'20 cm',100,''),(214,47,'Bagaimana cara set up bed runner yang baik:  ','Dibentangkan secara veritikal dan berjarak kurang lebih 15 cm dari tepi bed bagian bawah ',100,'Dibentangkan secara horizontal dan berjarak kurang lebih 15 cm dari tepi bed bagian bawah ',0,'Dibentangkan secara melingkarl dan berjarak kurang lebih 15 cm dari tepi bed bagian bawah',0,'');
/*!40000 ALTER TABLE `soal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `id_test` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` int(11) NOT NULL,
  `id_trainer` int(11) NOT NULL,
  `waktu` int(11) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `tipesoal` varchar(40) NOT NULL,
  `code` varchar(10) NOT NULL,
  PRIMARY KEY (`id_test`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES (30,37,3,10,'pre','multiple','3YQVwzvLPF'),(32,37,3,0,'post','file','2F596dKVbK'),(33,41,3,2,'pre','essay','CN8zmmKCM7'),(34,41,3,1,'post','multiple','UeGrjYLydc'),(37,44,3,10,'pre','multiple','eebjSAizck'),(38,44,3,10,'post','multiple','UctnDzA0FM'),(39,45,3,10,'pre','multiple','cMCUHpR7ej'),(40,45,3,10,'post','multiple','ST9imlnVBN'),(41,47,3,10,'pre','multiple','JSdSEiuuyE'),(42,47,3,10,'post','multiple','MhNmVP2pv9'),(43,50,3,10,'pre','multiple','TFSaJMaUFF'),(44,50,3,10,'post','multiple','Grq2TyC1EU'),(45,42,3,10,'pre','multiple','sWxMCm4sk8'),(46,42,3,10,'post','multiple','9SV2guUe9J'),(47,37,3,10,'post','multiple','lpHuSde31q');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trainer`
--

DROP TABLE IF EXISTS `trainer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trainer` (
  `id_trainer` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `alamat` text NOT NULL,
  `ttl` date NOT NULL,
  `tempatlahir` varchar(40) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `status` int(1) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `pass` text NOT NULL,
  `img` varchar(20) NOT NULL,
  `unique_code` text NOT NULL,
  `pengalaman` text,
  PRIMARY KEY (`id_trainer`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trainer`
--

LOCK TABLES `trainer` WRITE;
/*!40000 ALTER TABLE `trainer` DISABLE KEYS */;
INSERT INTO `trainer` VALUES (3,'Ajeng Fitria Rahmawati','P','Jalan KH Ahmad Dahlan, Rt 03 Rw 01','2000-12-26','Cilacap','081328963818',1,'ajengfitria80@gmail.com','','202cb962ac59075b964b07152d234b70','3.jpg','WgeEktbTn9JENoDckiKFaC5B77S25nvtg6SLdMWUAQ5vzdbkKp4XuMvOv4Av7JFCiu8pODJtP4j0TprFnJgC6tezcPkB3BRsc4hg2QyfX5FSpOz69BAFBoGwB6DoqRVwOc7uY1VpXTeH4K0MMPXf85','Pengalaman saya di dunia programing sudah 3 tahun'),(4,'Koentomo','','','0000-00-00','','',1,'koen.skywalker@gmail.com','','f29d85649e8f25f6373096c294100d52','4.jpeg','TOgzlzLuooIgifZ3bmosZoQegK3NkUGDsxCdxYXmMqS4V187ox0NlQ1Sl5pVZ6jS4v61TenpUGu0I37607UmYVEJb3oBAXdETjFxN3nsKhtck0jl8DXgjlzKpoVzM8EpsTnGXa8rI1U32DoBQLr97r',NULL),(8,'Ananda Rifkiy Hasan','','','0000-00-00','','',1,'ananda.rifkiy33@gmail.com','','afb861f0a808ac30e3814df2ee691b5d','8.jpg','GVUQEA5CCPXSK27A28C48W993SA07V3PRXE58KHM9EDTHL4LTHP2DZCHRNJYJMO9K2FTNXEXCSQVDVG7C69R5M8W9SVTEJ2YMJR8F55TYWPBS5J4BTVHF4DQW9JATM8E40OL6UD4R3GJ80NLUH29MG',NULL);
/*!40000 ALTER TABLE `trainer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `training`
--

DROP TABLE IF EXISTS `training`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `training` (
  `id_training` int(11) NOT NULL AUTO_INCREMENT,
  `id_peserta` int(11) NOT NULL,
  `id_modul` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `buktibayar` text,
  `code` text NOT NULL,
  PRIMARY KEY (`id_training`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `training`
--

LOCK TABLES `training` WRITE;
/*!40000 ALTER TABLE `training` DISABLE KEYS */;
INSERT INTO `training` VALUES (24,25,19,1,'24.jpg','Aotk1TFSQ7f65BbArzcXJHxNg62Gyc'),(25,27,24,0,'25.png','Ga1spKktF7PZfNJCa2eW18xg3D7x1i');
/*!40000 ALTER TABLE `training` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'e_learning'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-31 13:30:08
