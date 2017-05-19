-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: ss_blog
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Teknologi'),(2,'Kemanusiaan'),(3,'Pendidikan'),(4,'Ekonomi');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `picture` varchar(105) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `slug` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_id` (`id`),
  UNIQUE KEY `unique_slug` (`slug`),
  KEY `index_category_id` (`category_id`),
  KEY `index_user_id` (`user_id`),
  CONSTRAINT `lnk_categories_posts` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `lnk_user_posts` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (2,'Pesan Menkominfo untuk Cegah Virus Bergentayangan',1,'<p><strong>Jakarta</strong> - Virus ransomware bernama Wannacry tengah menyebar ke seluruh dunia dan menghantui pengguna komputer. Begini tips lanjutan untuk mengatasinya.<br />\r\n<br />\r\nMenteri Komunikasi dan Informatika Rudiantara mengatakan ada empat cara untuk meminimalisir ancaman virus tersebut. Salah satunya adalah sering mengganti password akun secara reguler.<br />\r\n<br />\r\n&quot;Ada 4 yang saya pesankan, Wannacry boleh dikatakan hampir lewat, tapi masih ada beberapa yang bergentayangan di dunia, tapi tidak hanya Wannacry, virus-virus lain juga ada, nah ini disiplin pertama selalu melakukan backup atas data. Kedua, rajin download antivirus, ketiga rajin meng-upgrade software, kemudian yang keempat sering ganti password,&quot; kata Rudiantara saat ditemui di Taman Makan Pahlawan, Kalibata, Jakarta Selatan, Jumat (19/5/2017).<br />\r\n<br />\r\nMenurutnya, ganti pasword pada akun media sosial adalah hal paling mudah yang dapat dilakukan. Namun mayoritas dari masyarakat malas melakukannya.<br />\r\n<br />\r\n&quot;Ganti password ini sebenarnya paling mudah tapi juga paling malas, saya tidak tahu apakah kita ini malas atau apa, contohnya di kartu ATM saja, itu kan harusnya diganti secara reguler, kesadaran kita semua sama atas empat hal ini,&quot; ujarnya.<br />\r\n<br />\r\n&quot;Jadi selama empat ini kita jalankan secara disiplin secara rutin, kita tidak akan terpapar oleh virus yang jenisnya malware, atau semacamnya,&quot; imbuhnya.<br />\r\n<br />\r\nRudiantara mengatakan Indonesia rentan disiplin dalam pencegahan ancaman virus. Menurutnya kesadaran masyarakat dalam menjalankan empat pesan tersebut sangat diperlukan.<br />\r\n<br />\r\n&quot;Yang Wannacry kemarin seperti wakeup call bagi kita semua, Indonesia ini sangat rentan disiplin, semuanya disiplin masyarakat, secara umum ini boleh dikatakan masih harus ditingkatkan masih harus kita bangkitkan. Apa saya tanya teman-teman, pakai akun email Gmail atau Yahoo, kapan bikin akunnya, berapa kali pernah ganti password, kan itu kesadaran kita sebagai masyarakat yang umum,&quot; tutupnya. (cim/rou)</p>\r\n','2017-05-18','pesan-menkominfo-untuk-cegah-virus-bergentayangan.jpg',2,'pesan-menkominfo-untuk-cegah-virus-bergentayangan'),(3,'Setelah 12 Tahun, Akhirnya Laporan Keuangan Pemerintah Dapat WTP',4,'<p><strong>Jakarta</strong> - Virus ransomware bernama Wannacry tengah menyebar ke seluruh dunia dan menghantui pengguna komputer. Begini tips lanjutan untuk mengatasinya.<br />\r\n<br />\r\nMenteri Komunikasi dan Informatika Rudiantara mengatakan ada empat cara untuk meminimalisir ancaman virus tersebut. Salah satunya adalah sering mengganti password akun secara reguler.<br />\r\n<br />\r\n&quot;Ada 4 yang saya pesankan, Wannacry boleh dikatakan hampir lewat, tapi masih ada beberapa yang bergentayangan di dunia, tapi tidak hanya Wannacry, virus-virus lain juga ada, nah ini disiplin pertama selalu melakukan backup atas data. Kedua, rajin download antivirus, ketiga rajin meng-upgrade software, kemudian yang keempat sering ganti password,&quot; kata Rudiantara saat ditemui di Taman Makan Pahlawan, Kalibata, Jakarta Selatan, Jumat (19/5/2017).<br />\r\n<br />\r\nMenurutnya, ganti pasword pada akun media sosial adalah hal paling mudah yang dapat dilakukan. Namun mayoritas dari masyarakat malas melakukannya.<br />\r\n<br />\r\n&quot;Ganti password ini sebenarnya paling mudah tapi juga paling malas, saya tidak tahu apakah kita ini malas atau apa, contohnya di kartu ATM saja, itu kan harusnya diganti secara reguler, kesadaran kita semua sama atas empat hal ini,&quot; ujarnya.<br />\r\n<br />\r\n&quot;Jadi selama empat ini kita jalankan secara disiplin secara rutin, kita tidak akan terpapar oleh virus yang jenisnya malware, atau semacamnya,&quot; imbuhnya.<br />\r\n<br />\r\nRudiantara mengatakan Indonesia rentan disiplin dalam pencegahan ancaman virus. Menurutnya kesadaran masyarakat dalam menjalankan empat pesan tersebut sangat diperlukan.<br />\r\n<br />\r\n&quot;Yang Wannacry kemarin seperti wakeup call bagi kita semua, Indonesia ini sangat rentan disiplin, semuanya disiplin masyarakat, secara umum ini boleh dikatakan masih harus ditingkatkan masih harus kita bangkitkan. Apa saya tanya teman-teman, pakai akun email Gmail atau Yahoo, kapan bikin akunnya, berapa kali pernah ganti password, kan itu kesadaran kita sebagai masyarakat yang umum,&quot; tutupnya. (cim/rou)</p>\r\n','2017-05-19','setelah-12-tahun,-akhirnya-laporan-keuangan-pemerintah-dapat-wtp.jpeg',2,'setelah-12-tahun,-akhirnya-laporan-keuangan-pemerintah-dapat-wtp'),(4,'Berapa Biaya Bangun 2.428 Km Rel Baru di Kalimantan?',4,'<p><strong>Jakarta</strong> - Kementerian Perhubungan (Kemenhub) ancang-ancang membangun jaringan rel kereta api baru di Pulau Kalimantan. Jalur tersebut direncanakan membentang sejauh 2.428 kilometer (km) dari Kalimantan Utara setengah melingkar ke Selatan melewati Kalimantan Selatan, Kalimantan Tengah, dan berakhir di Kalimantan Barat.<br />\r\n<br />\r\nLintasan rel kereta baru tersebut tak semuanya bisa mulai konstruksi sebelum tahun 2019, namun dilakukan bertahap. Keterbatasan anggaran jadi alasan utamanya. Lantas, berapa anggaran yang dibutuhkan untuk membangun jaringan kereta Trans Kalimantan?<br />\r\n<br />\r\nMenurut data rencana pembangunan jaringan kereta api 2015-2019 Ditjen Perkeretaapian Kemenhub seperti yang dikutip detikFinance, Jumat (19/5/2017), anggaran yang disiapkan untuk membangun KA Trans Kalimantan yakni sebesar Rp 22,9 triliun.<br />\r\n<br />\r\nRencana anggaran dari APBN tersebut merupakan dana yang dibutuhkan sampai tahun 2019. Alokasinya dipergunakan untuk kajian kelayakan dan trase, Amdal (Analisis Dampak Lingkungan), DED (Detail Enginering Design), Larap (Land Acquisition and Resettlement Action Plan), pengadaan tanah, dan konstruksi.<br />\r\n<br />\r\nUntuk periode pertama yakni 2015-2019, jalur yang baru mulai bisa dilakukan konstruksi yakni Balikpapan-Samarinda sejauh 89 km, Tanjung-Balikpapan 234 km, Banjarmasin-Tanjung 196 km, dan Banjarmasin-Palangkaraya 194 km.<br />\r\n<br />\r\nProses konstruksi di ruas-ruas rel baru itu dilakukan bersamaan dengan proses pengadaan lahan.<br />\r\n<br />\r\nSementara untuk jalur rel kereta lainnya di Kalimantan yang direncanakan dibangun dan masih dalam tahapan Amdal (Analisis Dampak Lingkungan) dan DED (Detail Enginering Design) yakni rute Batas Negara (Kalimantan Utara)-Tanjung Redep sejauh 279 km, Tanjung Redep-Lubuktutung sejauh 293 km. Rute Sanggau-Palangkaraya sejauh 587 km, Sanggau-Pontianak 143 km, dan Pontianak-Batas Negara sejauh 268 km. (idr/dna)</p>\r\n','2017-05-19','berapa-biaya-bangun-2.428-km-rel-baru-di-kalimantan.jpg',2,'berapa-biaya-bangun-2.428-km-rel-baru-di-kalimantan?'),(5,'Indonesia Darurat Tenaga Ahli TI',3,'<p>Jakarta - Pada tahun 2020 nanti, Indonesia berpeluang menjadi negara dengan ekonomi digital terbesar di kawasan Asia Tenggara. Pada saat ini diprediksikan nilai ekonomi digital Indonesia mencapai USD 130 miliar. Untuk mencapainya dibutuhkan lebih banyak tenaga ahli di bidang Teknologi Informasi (TI).<br />\r\n<br />\r\nMeski belum diketahui berapa angka pastinya kekurangan Sumber Daya Manusia (SDM) di bidang tersebut, tapi mengacu dari Hired Today setiap bulannya mencari 1.000 tenaga ahli TI untuk perusahaan. Diketahui, Hired TOday merupakan portal media online untuk mencari pekerjaan.<br />\r\n<br />\r\n&quot;Kalau kita berbicara kekurangan tenaga ahli TI, pada kenyataannya kita memang kekurangan karena kita mulai satu era baru, yakni transformasi digital,&quot; ujar Sekretaris Jenderal Perkumpulan Chief Information Officer Indonesia (iCIO Community), Ongky Kurniawan di Jakarta, Selasa (9/5/2017).<br />\r\n<br />\r\nDatangnya era digital membuka kesempatan kerja yang luas, seperti mulai mengguritanya perusahaan rintisan (startup) digital hingga perusahaan konvensional yang mulai merambah ke arah digital.<br />\r\n<br />\r\n&quot;Demand (permintaan) sangat tinggi tapi supply (ketersediaan) belum cukup, talent yang ada juga belum ahli di bidang digital. Wajar, karena kita masuk dalam era baru tapi sekarang kita cari cara untuk mendongkraknya,&quot; ucapnya.<br />\r\n<br />\r\nMaka dari itu iCIO Community menandatangani Memorandum of Understanding (MoU) dengan Fakultas Teknik Universitas Indonesia (UI) dan Universitas Bina Nusantara (Binus). Kerjasama ini untuk meningkatkan program pendidikan digital serta memperkuat relasi dunia bisnis dan pendidikan membangun bakat di bidang Teknologi Informasi dan Komunikasi (TIK) di Indonesia.<br />\r\n<br />\r\n&quot;Persoalan ini tidak hanya dialami pelaku bisnis di Indonesia, melainkan juga di seluruh dunia. Melalui iCIO Community ingin bekerjasama dengan institusi pendidikan tinggi untuk membantu mahasiswa meningkatkan kapasitas dan kapabilitasnya.<br />\r\n<br />\r\n&quot;Sehingga mereka lebih siap terjun di industri yang berkembang pesat ini,&quot; tutur mantan petinggi XL Axiata ini. (fyk/fyk)</p>\r\n','2017-05-19','indonesia-darurat-tenaga-ahli-ti.jpg',2,'indonesia-darurat-tenaga-ahli-ti'),(6,'Ribuan Karyawan Google Demo Kebijakan Trump',2,'Jakarta - Google termasuk yang paling kena dampak peraturan imigrasi baru presiden AS Donald Trump. Ratusan karyawannya berasal atau terkait dengan 7 negara, yang penduduknya dilarang masuk AS. Ribuan karyawan Google pun berdemo memprotes Trump.<br><br>\r\n\r\nDikutip detikINET dari Recode, sedikitnya seribu karyawan Google berkumpul di kantor pusat di Mountain View, California. Secara total, Google mengestimasi lebih dari 2.000 karyawan melakukan protes bersamaan di beberapa kantor di AS, termasuk di New York dan Seattle.<br><br>\r\n\r\nMereka membawa slogan seperti \"No Ban, No Wall, Resist,\" \"Proud Queer Immigrant,\" dan \"Make America Welcoming Again\". Turut hadir CEO Google Sundar Pichai serta pendiri Google, Sergey Brin.<br><br>\r\n\r\nSeperti diberitakan sebelumnya, Trump melarang warga dari 7 negara yaitu Iran, Irak, Libya, Somalia, Sudan, Suriah dan Yaman untuk memasuki AS selama 90 hari, sebelum akan diberlakukan peraturan baru yang lebih ketat dalam proses pemberian visa. <br><br>\r\n\r\nPeraturan itu ternyata sudah diterapkan saat ini dan beberapa orang dari negara itu sudah kesulitan masuk AS. Beberapa dilarang masuk pesawat yang akan terbang di AS dan ada yang diinterogasi setibanya di bandara AS.<br><br>\r\n\r\n\"Kami kecewa akan dampak aturan ini dan juga proposal lain yang bisa membatasi karyawan Google dan keluarga mereka, atau bisa menciptakan penghalang dalam membawa talenta berbakat ke AS,\" tulis Pichai, dalam memo internal pada para karyawannya.	(fyk/fyk)','2017-05-19','ribuan-karyawan-google-demo-kebijakan-trump.jpg',2,'ribuan-karyawan-google-demo-kebijakan-trump');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_id` (`id`),
  UNIQUE KEY `unique_username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'andika','Andika Saputra','andika');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-19 18:34:54
