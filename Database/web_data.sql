-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 12:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tipebuku` varchar(100) NOT NULL,
  `genre1` varchar(100) NOT NULL,
  `genre2` varchar(100) NOT NULL,
  `genre3` varchar(100) NOT NULL,
  `uploader` varchar(50) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  `sinopsis` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `judul`, `pengarang`, `tipebuku`, `genre1`, `genre2`, `genre3`, `uploader`, `cover`, `link`, `sinopsis`) VALUES
(1, 'Filsuf Jagoan', 'Fred van Lente &amp; Ryan Dunlavey', 'Filsafat', 'Comedy', '', '', 'Bagas', 'filsufjagoan.jpg', 'https://drive.google.com/file/d/1LWISfaILlyD4Wgv6x7OTT26knO1QDkZs/view?usp=sharing', 'This book tells about the leading philosophers of Western and Eastern thought in the form of a nosy but powerful comic. The nine philosophers are Plato, Bodhidharma, Nietzche, Thomas Jefferson, Saint Augustine, Ayn Rand, Sigmund Freud, Carl Jung, and Joseph Campbell. This is the most educational and useful comic I have ever read.'),
(7, 'Konosuba Vol.1', 'Natsume Akatsuki', 'light novel', 'fantasy', 'comedy', 'adventure', 'Bagas', 'konosubavol1.jpg', 'https://drive.google.com/file/d/1Tpt7ofW9TjVXSR4vKyQF9IP-p8XtN7lq/view?usp=sharing', ' After a very humiliating death, Satou Kazuma is told to choose whether he should restart his life or continue with the same memory to another world. He also quickly chose to be reincarnated in another world with the addition of one thing, both skills and weapons or any object he could carry. Unfortunately Kazuma instead chose the goddess Aqua who gave him an offer to reincarnate and in that world he would realize that this one goddess was useless. How is the story of the continuation of Kazuma?'),
(11, 'Corona Virus and Christ', 'John Piper', 'Pembelajaran', '-', '', '', 'Bagas', 'covidandchrist.JPG', 'https://drive.google.com/file/d/1eQNwo0xASzalWRSAFlmL86J6YJhmRO3N/view?usp=sharing', '“Ini adalah waktu ketika dunia merasa rapuh. Dasar-dasarnya yang selama ini tampak kokoh, berguncang. Pertanyaannya, Apakah ada Batu Karang yang menjadi pijakan kita; sebuah Batu Karang yang tidak dapat diguncangkan selamanya? ” — JOHN PIPER  Pertanyaan yang banyak muncul, apa yang sedang dilakukan Allah melalui virus corona ini? Di dalam buku Coronavirus and Christ, ia menawarkan enam jawaban alkitabiah terhadap pertanyaan tersebut dan menunjukkan kepada kita bahwa Allah sedang bekerja pada momen bersejarah ini. Kiranya buku ini menguatkan setiap kita untuk berpijak di atas Batu Karang yang teguh, yaitu Yesus Kristus.'),
(13, 'Konosuba Vol.2', 'Natsume Akatsuki', 'light novel', 'fantasy', 'comedy', 'adventure', 'Bagas', 'konosubavol2.png', 'https://drive.google.com/file/d/1BEeFkqOcp1Q2gnS5YkX9fzMNPG9kkph-/view?usp=sharing', 'After a very humiliating death, Satou Kazuma is told to choose whether he should restart his life or continue with the same memory to another world. He also quickly chose to be reincarnated in another world with the addition of one thing, both skills and weapons or any object he could carry. Unfortunately Kazuma instead chose the goddess Aqua who gave him an offer to reincarnate and in that world he would realize that this one goddess was useless. How is the story of the continuation of Kazuma?'),
(14, 'Youjo Senki Vol.1', 'Carlo Zen', 'light novel', 'fantasy', 'military', '', 'Bagas', 'youjosenkivol1.jpg', 'https://drive.google.com/file/d/1t1fzldo9N_6FnZ5JTbRy0R9euw2qWl0Z/view?usp=sharing', 'Tanya Degurechaff is a young soldier known for her predatory ruthlessness and extraordinary tactical talent, earning her the nickname &quot;Devil of the Rhine.&quot; Beneath her harmless appearance, however, lay the soul of a man who challenged Being X, the self-proclaimed God, to a battle of wits - which resulted in her being reincarnated as a little girl into a world of magical warfare. Being defiant, Tanya decides to move up the military ranks of her country while slowly plunging into the world war, with only Being X proving to be the strongest obstacle in recreating the peaceful life she has ever known. But his perceptive actions and combat initiatives had an unintended side effect: propelling the mighty Empire into one of the most powerful nations in human history.'),
(15, 'Pembunuhan ABC', 'Agatha Christie', 'novel', 'mystery', '', '', 'Bagas', 'pembunuhanabc.jfif', 'https://drive.google.com/file/d/1i3AL2sS9y7dlwSWjT-KE-LhgHt9_Igyf/view?usp=sharing', 'A berarti Andover dan Mrs. Ascher dipukul sampai mati. B berarti Bexhill dan Betty Barnard mati dicekik. C berarti Churston dan Sir Carmichael Clark ditemukan terbunuh. Di smaping tubuh masing-masing korban diletakan buku Panduan Kereta Api ABC, terbuka pada halaman yang menunjukan tempat pembunuhan. Polisi tak berdaya. Tapi si Pembunuh telah membuat kesalahan besar. Dia berani menantang Hercule Poirot untuk membuka kedoknya...'),
(17, 'ABC Murders', 'Agatha Christie', 'novel', 'mystery', '', '', 'Bagas', 'abcmurder.jfif', 'https://drive.google.com/file/d/1bdtxZVrEwNQhaz9oV5V6T5ixVsjZbKW1/view?usp=sharing', 'A means Andover and Mrs. Ascher was beaten to death. B means Bexhill and Betty Barnard are strangled to death. That means Churston and Sir Carmichael Clark were found murdered. On the bodies of each of the victims were the ABC Railroad Guides, open on a page showing the scene of the murder. Police helpless. But the killer had made a grave mistake. He dared to challenge Hercule Poirot to unmask him ...'),
(31, 'Oliver Twist', 'Charles Dickens', 'fiksi', 'Sosial', ' Serial', '', 'elan', 'olivertwist.JPG', 'https://drive.google.com/file/d/1wD5WUwYSujrAcJwddZBM-1okIRfuGZZd/view?usp=sharing', 'Ketika Oliver Twist (John Howard Davies), yatim piatu berusia 9 tahun, berani meminta penugasannya yang kejam, Tuan Bumble (Francis L. Sullivan), untuk memberikan bubur kedua, dia dipekerjakan sebagai magang. Lolos dari nasib suram itu, Oliver muda jatuh bersama anak jalanan yang dikenal sebagai Artful Dodger (Anthony Newley) dan mentor kriminalnya, Fagin (Alec Guinness). Ketika Tuan Brownlow (Henry Stephenson) yang baik hati menerima Oliver, antek jahat Fagin, Bill Sikes (Robert Newton) berencana untuk menculik bocah itu.'),
(32, 'Wings Of Fire', 'Tui T. Sutherland', 'fiksi', 'Adventure', 'Serial', '', 'elan', 'wingsoffire.JPG', 'https://drive.google.com/file/d/18jc7v63cVwMUVfT81TuMAe3VlUmfEbWZ/view?usp=sharing', 'Tujuh suku naga telah berperang selama beberapa generasi, terkunci dalam pertempuran tanpa akhir memperebutkan harta karun kuno yang hilang. Sebuah gerakan rahasia yang disebut Talons of Peace bertekad untuk mengakhiri pertempuran, dengan bantuan ramalan - ramalan yang membutuhkan pengorbanan besar.'),
(33, 'Kingdom Of Ash', 'Sarah J. Mass', 'fiksi', 'Action', 'Adventure', '', 'elan', 'kingdomofash.JPG', 'https://drive.google.com/file/d/1KrZOotXiY6Q58XVJnwjOX9y3Gs-YItOU/view?usp=sharing', 'Bertahun-tahun dalam pembuatan, seri Throne of Glass terlaris # 1 New York Times Sarah J. Maas menarik ke kesimpulan yang epik dan tak terlupakan. Perjalanan Aelin Galathynius dari budak menjadi pembunuh raja menjadi ratu dari kerajaan yang dulu besar mencapai akhir yang memilukan hati saat perang meletus di seluruh dunianya. . .  Aelin telah mempertaruhkan segalanya untuk menyelamatkan rakyatnya - tetapi dengan biaya yang sangat besar. Dikunci di dalam peti mati besi oleh Ratu Fae, Aelin harus memanfaatkan kemauannya yang membara saat dia menanggung penyiksaan selama berbulan-bulan. Sadar bahwa mengalah pada Maeve akan menghancurkan orang-orang yang dia cintai membuatnya tidak putus asa, meskipun tekadnya mulai terurai setiap hari ...  Dengan Aelin ditangkap, Aedion dan Lysandra tetap sebagai garis pertahanan terakhir untuk melindungi Terrasen dari kehancuran total. Namun mereka segera menyadari bahwa sekutu yang mereka kumpulkan untuk melawan gerombolan Erawan mungkin tidak cukup untuk menyelamatkan mereka. Tersebar di seluruh benua dan berpacu dengan waktu, Chaol, Manon, dan Dorian terpaksa menempa jalan mereka sendiri untuk memenuhi takdir mereka. Bergantung pada keseimbangan adalah harapan keselamatan — dan dunia yang lebih baik.  Dan di seberang laut, rekan-rekannya tak tergoyahkan di sampingnya, Rowan berburu untuk menemukan istri dan ratu yang ditangkapnya - sebelum dia hilang darinya selamanya.  Saat benang takdir terjalin bersama pada akhirnya, semua pahlawan kita harus bertarung bersama, jika mereka ingin memiliki kesempatan di masa depan. Beberapa ikatan akan tumbuh semakin dalam, sementara yang lain akan terputus selamanya di akhir yang berapi-api dari seri Throne of Glass yang epik.'),
(34, 'How to Win Every Argument: The Use and Abuse of Logic', 'Madsen Pirie', 'nonfiksi', '-', '', '', 'elan', 'htwea.JPG', 'https://drive.google.com/file/d/14vFbG5rtyn_RmJaLJ4_SfbOQHVwphFSv/view?usp=sharing', 'Ini adalah buku yang teman-teman Anda ingin Anda tidak baca, panduan cerdas dan menular untuk berdebat dengan sukses. Setiap entri berurusan dengan satu kekeliruan, menjelaskan apa itu kekeliruan, memberi dan menganalisis contoh, menguraikan kapan / di mana / mengapa kekeliruan tertentu cenderung terjadi dan akhirnya menunjukkan bagaimana Anda dapat melakukan kekeliruan pada orang lain untuk memenangkan argumen. Awalnya diterbitkan dengan pujian besar pada tahun 1985 sebagai &quot;The Book of Fallacy&quot;, ini adalah buku klasik yang dibawa ke terkini untuk seluruh generasi baru.'),
(35, 'Sapiens: A Brief History Of Humankind', 'Yuval Noah Harari', 'nonfiksi', '-', '', '', 'elan', 'sapiens.JPG', 'https://drive.google.com/file/d/1nlMIMyOeXsqjwxz88QGneTD6jOI_r8r0/view?usp=sharing', 'Buku ini menuturkan sejarah singkat Sapiens atau spesies kita umat manusia, dari mulai cikal bakal kelahirannya sampai zaman kita sekarang. Istilah “singkat” itu harus dijelaskan dalam konteks evolusi, yang hitungannya ribuan, jutaan dan miliaran tahun.  Sapiens selama jutaan tahun itu berevolusi dan melalui tahapan-tahapan perkembangan tertentu, hingga mencapai bentuk fisik, dan peradaban yang sekarang. Untuk mencapai tingkat kemajuan peradaban seperti sekarang, Sapiens melalui tahapan perkembangan seperti Revolusi Kognitif, Revolusi Pertanian, Revolusi Industri, dan Revolusi Ilmiah.  Dalam peradaban Sapiens dan dunia modern sekarang, jejak-jejak perkembangan evolusi masa lalu itu masih terlihat. Ada kesinambungan antara Sapiens masa kini dan masa lalunya. Namun manusia kini telah mengalami transformasi yang fundamental, yang mengatasi batas-batas biologis dan seleksi alam, dan melakukan desain cerdas.  Berkat kemajuan sains dan teknologi, manusia kini praktis seolah bisa menjalankan evolusinya sendiri, meski ditentang oleh aturan etis dan agama. Manusia seolah hampir menjadi “Tuhan” yang bisa menciptakan dan menghancurkan. Ironinya, dengan kekuasaannya yang semakin besar, manusia tetap tak tahu ke mana ia mau menuju.'),
(36, 'The Girl With The Dragon Tattoo', 'Stieg Larrson', 'fiksi', 'Adventure', 'Action', '', 'elan', 'tgwdtto.JPG', 'https://drive.google.com/file/d/1n2Qk1-VrEw9F_81asYjdU7htMygxPP-X/view?usp=sharing', 'Reporter keuangan tercela Mikael Blomkvist (Daniel Craig) menemukan kesempatan untuk menebus kehormatannya setelah dipekerjakan oleh industrialis Swedia kaya Henrik Vanger (Christopher Plummer) untuk menyelesaikan pembunuhan 40 tahun atas keponakan Vanger, Harriet. Vanger yakin bahwa Harriet dibunuh oleh anggota keluarganya sendiri. Akhirnya bergabung dengan Blomkvist dalam pencariannya yang berbahaya untuk kebenaran adalah Lisbeth Salander (Rooney Mara), seorang penyelidik yang tidak biasa tetapi cerdik yang kepercayaannya yang rapuh tidak mudah didapat.'),
(37, 'History Of Western Philosophy', 'Bertrand Russell', 'nonfiksi', '-', '', '', 'elan', 'thowpbr.JPG', 'https://drive.google.com/file/d/1JEIXLwV2YgXg5WgdaEGZaqG4FJdpyFpn/view?usp=sharing', 'Sejak penerbitan pertamanya pada tahun 1945, A History of Western Philosophy karya Lord Russell telah diakui secara universal sebagai karya satu jilid yang luar biasa tentang subjek ini — tak tertandingi dalam kelengkapannya, kejelasannya, pengetahuannya, keanggunan dan kecerdasannya. Dalam tujuh puluh enam bab ia menelusuri filsafat dari kebangkitan peradaban Yunani hingga munculnya analisis logis di abad kedua puluh. Di antara filsuf yang dipertimbangkan adalah: Pythagoras, Heraclitus, Parmenides, Empedocles, Anaxagoras, Atomists, Protagoras, Socrates, Plato, Aristoteles, Sinis, Skeptis, Epicureans, Stoa, Plotinus, Ambrose, Jerome, Augustine, Benedict, Gregory Agung, John the Scot, Aquinas, Duns Scotus, William of Occam, Machiavelli, Erasmus, More, Bacon, Hobbes, Descartes, Spinoza, Leibniz, Locke, Berkeley, Hume, Rousseau, Kant, Hegel, Schopenhauer, Nietzsche, Utilitarian , Marx, Bergson, James, Dewey, dan terakhir para filsuf yang paling dekat dengan Lord Russell sendiri - Cantor, Frege, dan Whitehead, penulis bersama Russell dari Principia Mathematica yang monumental. '),
(38, 'Love Never Fails', 'Kenneth E. Hagin', 'fiksi', 'Romance', '', '', 'elan', 'loveneverfails.JPG', 'https://drive.google.com/file/d/1XOybsHUl-Z-UebodN8RVm7wwZtlpgshu/view?usp=sharing', 'Setelah ayahnya meninggal, Elizabeth Bennet menolak untuk menikahi ahli waris harta warisan keluarganya, meninggalkan dia, ibunya, dan saudara perempuannya tanpa sarana dan tanpa rumah — dan itu semua adalah kesalahan Elizabeth. Apa lima wanita lajang tanpa prospek untuk dilakukan? Serangkaian keputusan emosional menuntunnya dari Hertfordshire kesayangannya ke London, di mana dia menjadi teman wanita bagi wanita licik dengan terlalu banyak waktu dan uang serta terlalu sedikit keberatan.  Fitzwilliam Darcy sangat menyesal. Merendahkan diri dari kesombongannya, dia berusaha membuktikan bahwa dia adalah pria terhormat dengan mendapatkan rasa hormat dari orang yang paling terpengaruh oleh ketidakpeduliannya— Nona Elizabeth Bennet. Dari mempersembahkan saputangan hingga naik balon udara, dia akan melakukan apa yang dia harus lakukan untuk menjadi pria yang dia yakini. Namun, niat terbaiknya pun sering kali salah… terutama jika bibi Charles Bingley, Lady Lavinia Rutledge, terlibat.  Dapatkah Darcy dan Elizabeth melihat melewati rasa bersalah dan penyesalan mereka karena menyadari cinta yang mereka rindukan?  *Ini adalah kisah romantis yang manis berdasarkan Pride &amp; Prejudice karya Jane Austen.'),
(39, 'Sejarah Islam yang Hilang', 'Firas Alkhateeb', 'nonfiksi', '-', '', '', 'elan', 'sejislamyghilang.JPG', 'https://drive.google.com/file/d/1ChvuTGqUaLlU_zK6dVISx20Uv1PPijlC/view?usp=sharing', 'Sebuah buku berjudul Sejarah Islam yang Hilang merupakan penelusuran kembali kejayaan Muslim di masa lampau. Buku ini dengan sangat apik, kronologis, dan lugas dituturkan oleh Firas Akhateeb, seorang peneliti sejarah Islam di Universal School, Bridgeview, Illinois. Ia juga pendiri Situs Jaringan Lost Islamic History yang bisa Anda cek di sini. Buku ini terbagi menjadi 11 bab besar yang dipaparkan dengan gaya bahasa naratif yang mengalir, mudah dicerna, menyenangkan namun tidak mengurangi unsur ilmiah historikalnya. 11 bab besar itu dibagi sesuai fase atau kronologisnya. Mulai dari Pra Islam sampai pada titik-titik kemunduran Islam. Buku ini juga dilengkapi dengan daftar pustaka lengkap yang bisa Anda akses dengan mudah. Penulis menampilkan wajah Islam sesuai kajian historis, tidak membumbui dengan opini atau subjektifitas, untuk itu buku ini cocok dijadikan bahan ajar di bangku sekolah atau kuliah. Buku sejarah dan peradaban Islam ini tidak hanya diperuntukkan bagi kaum Muslim. Kalangan mana pun diperkenankan untuk mengetahui sebuah sejarah besar agama yang dibawa Rasulullah Saw dan tentunya diharapkan bagi para muslim untuk merenung dan mengoreksi demi kemajuan di masa mendatang.'),
(40, 'Sejarah Islam di Nusantara', 'Michael Laffan', 'nonfiksi', '-', '', '', 'elan', 'sejislamdinusa.JPG', 'https://drive.google.com/file/d/1ZBgzH-TfoMrvcdbqVVsInCP_CYezCO33/view?usp=sharing', 'Mengapa Sejarah Islam di Nusantara? Mengapa bukan Sejarah Islam di Indonesia? Apa bedanya? Sangat berbeda. Di masa lalu, sebelum mendapat kemerdekaan tahun 1945, tidak ada negara Indonesia, dia tidak eksis. Sebelum menjadi Indonesia, negara ini adalah nusantara. Wilayah nusantara saat itu berbeda dengan Indonesia sekarang. Berbicara tentang nusantara, tidak bisa lepas dari kehadiran Malaka dan Singapura. Ternyata, Islam sudah lebih dahulu berkembang di Semenanjung Malaya. Dari sana, barulah merambat ke Sumatera kemudia ke daerah-daerah lain di Indonesia. Cerita berakhir pada masa Snouck Hurgonje. Tepat beberapa tahun sebelum Nusantara merdeka dan menjadi Indonesia.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `type`, `username`, `password`) VALUES
(1, 'developer', 'afterschoolteaparty83@gmail.com', 'admin', 'dev', '$2y$10$HEM1dgtsx9u9lVaCMVnSR.deeUWAWJkOwQFzZZhG3ZAvRcHyXh48K'),
(12, 'David Nicholas Simanjuntak', 'davidsimanjuntak2018@gmail.com', 'admin', 'david', '$2y$10$GrCd6tYd4nwQIX6l4DzqL.LkhBfm5nizMKaBpqtK36j5zVb8baPwC'),
(13, 'N. Theo Ginting', 'test123456@gmail.com', 'admin', 'theo', '$2y$10$o9EQXIMyYfO.2O8/YChmj.D02eIp8t6p0yS45M83F/W7wjuW6/pee'),
(15, 'Bagas Jonathan Sitanggang', 'bagas.jonathan.sitanggang@gmail.com', 'admin', 'bagas', '$2y$10$ub1djWjym8LgQVE9rXmebORCtfIjmDxNX.um6BDVQgY3ecqmS40Ru'),
(28, 'Pangeran Arga Aritonang', 'test123456@gmail.com', 'admin', 'elan', '$2y$10$hsVvo/XDtfSukDDUqDJ1nOx6EDFaLA5R1r3IhXbTsMwqKuLT/vbE2'),
(29, 'member', 'member@gmail.com', 'member', 'member', '$2y$10$XQYxyHRCh1X1Iz8laPPde.DlEFHoQPgG33n7KEfR24UYbqXNot9SG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
