-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Mar 2020 pada 13.04
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_handphone` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `alamat`, `no_handphone`, `email`, `password`, `date_created`, `gambar`) VALUES
(1, 'Admin', 'Jl.Kh.Hasyim Ashari Gg.Kramat No.41 Rt/Rw 07/02', '089521649714', 'ekonurramadhani@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-01-31', 'admin.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `judul_blog` varchar(100) NOT NULL,
  `konten_isi` text NOT NULL,
  `date_created` date NOT NULL,
  `access` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `thumbnail`, `judul_blog`, `konten_isi`, `date_created`, `access`) VALUES
(1, '149.jpg', 'Cara Mudah & Keren untuk Mendesain', '<p style=\"text-align:justify\">Membuat Logo Brand untuk Bisnis Itu Penting. Kenapa? Logo itu mencerminkan bisnis Anda dan merupakan sebuah tampilan secara visual yang mewakili perusahaan Anda.</p>\r\n\r\n<p>Bisa juga digunakan untuk mempromosikan brand Anda baik secara online maupun offline.</p>\r\n\r\n<p>Membuat logo brand untuk bisnis penting karena akan membuat sebuah bisnis terlihat stand out ketika waktunya masuk ke dalam kompetisi.</p>\r\n\r\n<p>DesignBuddy menganalisis logo top brand dunia dan apa saja kesamaan dari brand-brand tersebut.</p>\r\n\r\n<p>Berikut ini ada beberapa poin dari research yang bisa Anda pertimbangkan ketika akan membuat logo dengan beberapa tools design yang akan kita bahas setelah ini :</p>\r\n\r\n<p>95% top brand dunia menggunakan 1 atau 2 warna. 41% dari brand menggunakan tipe stylized sebagai logo mereka. 93% dibuat simple. Jadi ketika digunakan dalam ukuran kecil pun orang-orang tetap akan tahu. Kalau Anda ingin mencari tahu warna apa yang cocok untuk logo brand Anda, baca saja artikel tentang pentingnya memahami psikologi warna dalam marketing dan branding.</p>\r\n\r\n<p>Ada beberapa aturan design yang perlu diperhatikan sebelum Anda mulai membuat logo.</p>\r\n\r\n<p>Berikut ini ada tips yang diambil dari Creative Bloq untuk Anda :</p>\r\n\r\n<p>Sebuah logo harus simple. Design logo yang simple akan lebih fleksibel dan efektif. Sebuah logo harus memorable. Ketika sebuah logo itu simple, ini akan membantu orang untuk mengingatnya. Sebuah logo harus abadi. Logo yang efektif biasanya akan bertahan ketika diuji oleh waktu. Entah 10, 20 tahun ke depan, logo itu tetap ada dan diingat. Sebuah logo harus felksibel. Harus bisa dipakai dan bekerja di berbagai media dan aplikasi. Sebuah logo harus sesuai. Bagaimana Anda memposisikan logo harus sesuai untuk tujuan. Kesalahan umum yang perlu dihindari ketika Anda membuat logo brand</p>\r\n\r\n<p>Untuk membuat sebuah logo yang bagus, Anda juga perlu menghindari kesalahan umum yang sering terjadi ketika mendesign logo :</p>\r\n\r\n<p>Hindari untuk menggunakan clip art yang tidak menarik. Jangan membuat logo Anda terlalu rumit. Pastikan kalau logo tetap terlihat bagus dalam warna hitam dan putih.</p>', '2020-02-18', 'Admin'),
(4, 'thumb2.jpg', 'NASA Mendeteksi Sebuah Komet Mendekati Bumi', '<p>Jakarta, CNN Indonesia -- Badan Antariksa Amerika Serikat (<strong><a href=\"https://www.cnnindonesia.com/tag/nasa\">NASA</a></strong>) mendeteksi sebuah<strong><a href=\"https://www.cnnindonesia.com/tag/komet\">&nbsp;komet</a></strong>&nbsp;yang ditemukan tengah mendekati&nbsp;<strong><a href=\"https://www.cnnindonesia.com/tag/bumi\">Bumi</a></strong>. Objek luar angkasa ini ditemukan pada 30 Agustus lalu oleh astronom Gennady Borisov di observatorium MARGO Nauchnij, Crimea.<br />\r\n<br />\r\nKomet C/2019 Q4 atau Borisov itu diketahui masih dalam perjalanan menuju Matahari namun akan mendekati Bumi sekitar 190 juta mil atau sekitar 300 juta kilometer. Komet akan mencapai titik terdekat Matahari pada 8 Desember 2019 sekitar 420 juta kilometer.<br />\r\n<br />\r\nKendati demikian, komet Borisov bukan satu-satunya komet yang ditemukan. Pada Oktober 2017, para astronom di laboratorium Jet Propulsion NASA berhasil mendeteksi komet &#39;Oumuamua&#39;.<br />\r\n<br />\r\n<br />\r\n&quot;Kecepatan komet saat ini tinggi sekitar 150.000 kilometer per jam. Kecepatan komet menunjukkan bahwa benda itu kemungkinan berasal dari luar tata surya kita,&quot; kata Astronom Davide Farnocchia dikutip laman resmi Laboratorium JPL NASA.<br />\r\n&nbsp;</p>\r\n\r\n<p>Menurut Farnocchia, komet C/2019 Q4 memiliki tampilan yang agak &#39;kabur&#39;. Hal ini menunjukkan bahwa objek antariksa tersebut memiliki pusat es yang menghasilkan awan debu dan partikel di sekitarnya.<br />\r\n<br />\r\nKomet dapat dilihat dengan teleskop ukuran sedang pada Desember 2019 karena mengalami kecerahan yang cukup kuat hingga April 2020.<br />\r\n<br />\r\n&quot;Setelah itu, komet hanya akan diamati dengan teleskop profesional yang lebih besar hingga Oktober 2020,&quot; pungkas Farnocchia.</p>\r\n\r\n<p>Menyoal komet Oumuamua, seperti dikutip&nbsp;<em>National Geographic</em>, komet ini meluncur dengan kecepatan 98.000 mil per jam pada 2017 silam. Namun, usai mengelilingi matahari awal tahun 2018, Oumuamua malah berputar lebih cepat.<br />\r\n<br />\r\nBerdasarkan sejumlah penelitian, ventilasi pada permukaan objek kemungkinan melepaskan semburan gas yang memberinya dorongan kuat.</p>', '2020-02-22', 'Admin'),
(5, 'CB2image.jpg', 'Virus Corona: Gejala, Penyebab, Cara Mengobati dan Mencegahnya', '<p style=\"text-align:justify\">Virus corona atau yang dikenal pula sebagai 2019 Novel Coronavirus&nbsp;merupakan virus baru yang bisa menyebabkan gangguan pernapasan, termasuk pneumonia akut. Berasal dari Wuhan, Tiongkok, kasus virus corona pertama menginfeksi akhir Desember lalu.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Sebelumnya, virus corona juga sempat menjadi penyebab wabah SARS yang terjadi pada tahun 2002 dan MERS yang terjadi pada tahun 2012 lalu. Ketiganya sama-sama menyebabkan infeksi pernapasan berat dan menular. Dilansir dari berbagai sumber, seperti ini gambaran perkembangan virus corona di bawah stetoskop dari hasil pengamatan&nbsp;<em>University of Melbourne</em>:</p>\r\n\r\n<p style=\"text-align:justify\">Lalu apa saja yang bisa kita ketahui tentang wabah penyakit yang semakin meluas ini? Berikut ini gejala, penyebab, komplikasi, hingga cara mencegah infeksi virus corona!</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>1. Gejala Infeksi Virus Corona</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Orang yang terinfeksi virus corona biasanya menampakkan gejala flu biasa. Mulai dari hidung berair, pusing, batuk, demam, hingga sakit tenggorokan. Namun gejala ini juga bervariasi pada setiap orang. Sebagian orang mengaku tidak merasakan gejala apa pun. Sementara yang lain bisa merasakan keluhan yang parah seperti batuk darah, sakit dada, hingga sesak napas.</p>\r\n\r\n<p style=\"text-align:justify\">Namun melansir Centers for Disease Control and Prevention (CDC), terdapat tiga gejala utama dari infeksi virus corona, yaitu demam, batuk, dan napas yang memendek. Kondisi tersebut biasa muncul dalam jangka waktu dua hingga 14 hari setelah infeksi.</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>2. Penyebab Infeksi</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Penyebab wabah yang sedang terjadi ini tentu saja virus corona. Namun bagaimana virus tersebut bisa menjangkit manusia? Seperti yang terjadi pada SARS dan MERS, infeksi ini tergolong penyakit zoonosis, atau yang bisa menular dari hewan ke manusia.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Diduga virus corona dibawa oleh kelelawar dan hewan liar lain yang dijual di pasar ikan Wuhan, Tiongkok. Virus tersebut masuk ke tubuh manusia melalui kontak dan makanan. Orang yang terinfeksi kemudian akan menularkan virus tersebut ke orang lain melalui lima cara menurut A Handbook of 2019-nCoV Pneumonia Control and Prevention, yaitu:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Transmisi dari cairan tubuh yang keluar saat berbicara, batuk, dan bersin.</li>\r\n	<li style=\"text-align:justify\">Transmisi melalui udara.</li>\r\n	<li style=\"text-align:justify\">Transmisi melalui darah dengan kulit atau selaput lendir yang terbuka (mata, lidah, luka, dan lainnya).</li>\r\n	<li style=\"text-align:justify\">Transmisi dari hewan.</li>\r\n	<li style=\"text-align:justify\">Berdekatan dengan pasien yang terinfeksi.<br />\r\n	&nbsp;</li>\r\n</ul>\r\n\r\n<h3 style=\"text-align:justify\"><strong>3. Faktor Resiko Virus Corona</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Semua orang tanpa kecuali berpotensi untuk terserang virus corona. Namun ada beberapa golongan yang ternyata lebih rentan daripada lainnya. Siapa sajakah itu? Berikut di antaranya:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Orang lanjut usia, terutama yang punya riwayat penyakit kronis.</li>\r\n	<li style=\"text-align:justify\">Wanita hamil.</li>\r\n	<li style=\"text-align:justify\">Orang dengan disfungsi hati dan ginjal.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Sementara itu, anak-anak merupakan golongan orang yang paling kecil kemungkinannya untuk terserang virus ini.<br />\r\n&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>4. Diagnosis Virus Corona</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Pada umumnya, untuk memastikan seseorang positif terinfeksi atau tidak, dokter akan menanyakan gejala yang dialami oleh pasien. Mereka juga akan bertanya apakah pasien baru-baru ini bepergian ke negara yang terinfeksi atau tidak.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Setelah itu, pemeriksaan lanjutan pun akan dijalankan. Di antaranya adalah dengan tes darah, tes usap tenggorokan untuk meneliti lendir yang ada di sana, serta rontgen dada untuk mengamati kondisi paru-paru.<br />\r\n&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>5. Komplikasi Virus Corona</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Seperti yang kita tahu, virus corona bisa menyebabkan penyakit pernapasan yang akut. Apa sajakah penyakit yang dimaksud? Berikut ini di antaranya:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Bronkitis akut.</li>\r\n	<li style=\"text-align:justify\">Pneumonia.</li>\r\n	<li style=\"text-align:justify\">Infeksi pada organ lainnya.</li>\r\n	<li style=\"text-align:justify\">Gagal ginjal.</li>\r\n	<li style=\"text-align:justify\">Acute cardiac injury atau cedera akut pada jantung.</li>\r\n	<li style=\"text-align:justify\">Acute respiratory distress syndrome (ARDS) atau inflamasi besar pada paru-paru.</li>\r\n	<li style=\"text-align:justify\">Dan yang terparah adalah kematian.<br />\r\n	&nbsp;</li>\r\n</ul>\r\n\r\n<h3 style=\"text-align:justify\"><strong>6. Pengobatan Virus Corona</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Hingga saat ini para ilmuwan masih mengembangkan vaksin untuk menangkal dan mengobati infeksi virus corona. Maka dari itu, pengobatan yang paling memungkinkan untuk saat ini adalah dengan meredakan gejala yang muncul. Di antaranya adalah:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Memberikan obat pereda demam dan nyeri untuk pasien.</li>\r\n	<li style=\"text-align:justify\">Pasien diharapkan istirahat dengan cukup dan diisolasi dari orang lain agar virus tidak menyebar.</li>\r\n	<li style=\"text-align:justify\">Pasien harus memperbanyak minum air agar demam turun dan tidak dehidrasi.</li>\r\n	<li style=\"text-align:justify\">Pasien dianjurkan untuk mandi air hangat dan tidur di ruangan lembap agar batuk dan sakit tenggorokan tidak semakin parah.<br />\r\n	&nbsp;</li>\r\n</ul>\r\n\r\n<h3 style=\"text-align:justify\"><strong>7. Pencegahan Virus Corona</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Walaupun banyak cara dilakukan berbagai negara sebagai upaya mengobati pasien virus corona, namun belum ada cara pengobatan yang dipatenkan untuk mengatasi virus corona. Karena saat ini pengobatan virus corona belum tersedia, maka dari itu penting untuk melakukan upaya pencegahan mulai sekarang. Apa saja yang bisa kita lakukan?</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Jangan bepergian ke negara lain yang terinfeksi virus, terutama Tiongkok yang merupakan pusat wabah.</li>\r\n	<li style=\"text-align:justify\">Gunakan masker berjenis N95 yang bisa menangkal virus saat keluar rumah.</li>\r\n	<li style=\"text-align:justify\">Pastikan untuk selalu mencuci tangan dengan air dan sabun secara menyeluruh.</li>\r\n	<li style=\"text-align:justify\">Jangan makan hewan liar, terutama yang menjadi terduga penyebaran virus corona.</li>\r\n	<li style=\"text-align:justify\">Hindari kontak dengan hewan liar. Jika terpaksa, pastikan cuci tangan hingga bersih setelahnya.</li>\r\n	<li style=\"text-align:justify\">Masaklah semua daging hingga benar-benar matang sebelum dikonsumsi.</li>\r\n	<li style=\"text-align:justify\">Tutup mulut dan hidung saat bersin. Bisa menggunakan kain, tisu, atau siku bagian dalam agar virus tidak menyebar.</li>\r\n	<li style=\"text-align:justify\">Hindari kontak dengan orang yang sedang sakit dan suspect virus corona.</li>\r\n	<li style=\"text-align:justify\">Jangan menyentuh mata, mulut, hidung, dan selaput lendir terbuka sebelum cuci tangan.</li>\r\n	<li style=\"text-align:justify\">Terus menjaga kebersihan lingkungan sekitar.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><br />\r\nSementara itu, orang yang terserang virus corona pun harus melakukan beberapa upaya untuk mencegah virus semakin menyebar. Berikut ini di antaranya:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Jangan keluar rumah.</li>\r\n	<li style=\"text-align:justify\">Harus mendapatkan penanganan langsung dari tenaga medis.</li>\r\n	<li style=\"text-align:justify\">Jika rawat jalan, tinggallah terpisah dengan orang lain dan gunakan peralatan yang berbeda dengan orang lain.</li>\r\n	<li style=\"text-align:justify\">Hindari kontak dengan orang lain dalam bentuk apa pun.</li>\r\n	<li style=\"text-align:justify\">Pakai masker dan sarung tangan yang disarankan untuk mencegah penularan.</li>\r\n	<li style=\"text-align:justify\">Selalu buang tisu setelah digunakan.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Itulah informasi yang harus kamu ketahui tentang virus corona yang sedang mewabah saat ini. Jangan lupa lakukan upaya pencegahan yang disebutkan agar kamu dan orang sekitarmu terhindar dari virus ini, ya!</p>', '2020-03-05', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama_contact` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_handphone` varchar(25) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `nama_contact`, `email`, `no_handphone`, `alamat`) VALUES
(1, 'Dhani', 'dhani@flw.com', '+62 8952 1649 714\r\n', 'Jl.Kh.Hasyim Ashari Gg.Kramat No.41 Neroktog, Pinang, Kota Tangerang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `komentar` text NOT NULL,
  `id_blog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama`, `email`, `date_created`, `komentar`, `id_blog`) VALUES
(1, 'dhani', 'ekonurramadhani@gmail.com', '2020-03-07', 'Hey Kontennya Bagus, Terima Kasih!', 1),
(2, 'eko', 'ekoaja@gmail.com', '2020-03-07', 'Postingan Sampah Boleh Copas Aja Aj*g', 1),
(3, 'dhani', 'ekodhani@gmaiil.com', '2020-03-07', 'test', 5),
(4, 'ucup', 'ucup@123.com', '2020-03-07', 'ucup ngetestya', 5),
(5, 'Genta', 'genta@gmail.com', '2020-03-10', 'Bermanfaat Bgt kak makasih', 1),
(6, 'ucok', 'ucokaja@gmail.com', '2020-03-11', 'hallo', 5),
(7, 'ucok', 'ucokaja@gmail.com', '2020-03-11', 'hallo', 5),
(8, 'ucok', 'ucokaja@gmail.com', '2020-03-11', 'hallo', 5),
(9, 'ucok', 'ucokaja@gmail.com', '2020-03-11', 'hallo', 5),
(10, 'haikal', 'haikalgim@gmail.com', '2020-03-11', 'hai semua!!', 5),
(11, 'dhani', 'dhani@gmail.com', '2020-03-11', 'AH bohong kali lu nipu ya?', 4),
(12, 'eko', 'ekodhani@gmail.com', '2020-03-11', 'iya betul bang dia bohong kayaknya', 4),
(13, 'eko dhani', 'dhanieko@gmail.com', '2020-03-11', 'itu dia bohong ya bang ?', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `merch`
--

CREATE TABLE `merch` (
  `id_merch` int(11) NOT NULL,
  `nama_merch` varchar(50) NOT NULL,
  `qty` int(2) NOT NULL,
  `size` varchar(30) NOT NULL,
  `harga` double NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merch`
--

INSERT INTO `merch` (`id_merch`, `nama_merch`, `qty`, `size`, `harga`, `gambar`, `date_created`) VALUES
(2, 'Infinite', 12, 'M,L,XL', 99000, 'infinite-shirt-merch.jpg', '2020-02-20'),
(3, 'looping', 12, 'M,L,XL', 150000, 'looping-shirt-merch.jpg', '2020-02-20'),
(4, 'In Road', 12, 'M,L,XL', 120000, 'road-shirt-merch.jpg', '2020-02-20'),
(5, 'Black Hat', 12, 'One Size', 75000, 'blackhat.jpg', '2020-02-20'),
(6, 'Badie Bag', 12, 'One Size', 50000, 'baddie-bag-merch.jpg', '2020-02-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `gambar`, `date_created`) VALUES
(2, 'Bad', 'design.jpg', '2020-02-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `gambar`, `nama`, `divisi`, `deskripsi`) VALUES
(1, 'dhani.jpg', 'Eko Nur Ramadhani', 'Front-End Developer', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita ab iusto veritatis ratione incidunt id. Repellendus dignissimos iure culpa cupiditate aut, ab ipsam harum neque dolore quibusdam! Corporis, officia cupiditate.'),
(2, 'ari.jpg', 'Ari Riski Firmansyah', 'Design Graphic', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita ab iusto veritatis ratione incidunt id. Repellendus dignissimos iure culpa cupiditate aut, ab ipsam harum neque dolore quibusdam! Corporis, officia cupiditate.'),
(3, 'vt.jpg', 'Vincentius Toni Aldi', 'Marketing Manager', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita ab iusto veritatis ratione incidunt id. Repellendus dignissimos iure culpa cupiditate aut, ab ipsam harum neque dolore quibusdam! Corporis, officia cupiditate.'),
(4, 'iqbal.jpg', 'Iqbal Saifulloh', 'System Enginer', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita ab iusto veritatis ratione incidunt id. Repellendus dignissimos iure culpa cupiditate aut, ab ipsam harum neque dolore quibusdam! Corporis, officia cupiditate.'),
(5, 'santika.jpg', 'Santika', 'Back-End Developer', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita ab iusto veritatis ratione incidunt id. Repellendus dignissimos iure culpa cupiditate aut, ab ipsam harum neque dolore quibusdam! Corporis, officia cupiditate.'),
(7, 'dinar.jpg', 'Dinarah Izz', 'Full-Stack Developer', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita ab iusto veritatis ratione incidunt id. Repellendus dignissimos iure culpa cupiditate aut, ab ipsam harum neque dolore quibusdam! Corporis, officia cupiditate.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `merch`
--
ALTER TABLE `merch`
  ADD PRIMARY KEY (`id_merch`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `merch`
--
ALTER TABLE `merch`
  MODIFY `id_merch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
