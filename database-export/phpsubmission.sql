-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220525.c1e393abce
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 05:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpsubmission`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `text_body` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `category`, `text_body`) VALUES
(15, 'Cyber Army in Indonesia', 'Cyber', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sint amet assumenda at! Aliquid in aut nisi tempore quidem molestiae, facere natus maxime. Quaerat quis ad perspiciatis odit voluptate earum similique, non consectetur incidunt! Commodi nulla optio nam, excepturi ex eius ea culpa nemo quis dicta porro eaque facilis et hic deleniti corporis dolore totam omnis labore magnam incidunt! Sit nulla ut vero cum ducimus tenetur repudiandae, suscipit laborum nesciunt asperiores neque esse aliquam, dicta sunt earum similique error perspiciatis temporibus repellendus possimus ipsum quas accusantium nisi! Ipsa labore delectus minus tempora asperiores similique! Error similique minima cumque quae consequatur?'),
(16, 'Learning Cyber Security Vol.1', 'Cyber Security', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error officiis repellendus, ut possimus a libero amet perspiciatis impedit repudiandae velit, iure hic tenetur nisi id suscipit dicta eveniet soluta ipsa. Aut quam quaerat harum sapiente libero facilis labore aspernatur dicta, ut voluptatum. Blanditiis amet nisi asperiores debitis officiis, iure nihil aut eum praesentium numquam. Nisi quibusdam repellat adipisci aspernatur voluptates vel cupiditate alias, laboriosam consequuntur? Praesentium error facilis porro blanditiis culpa soluta voluptatem earum eaque reiciendis est sint, maiores aliquid, ducimus ut incidunt reprehenderit ex quae dolore fugiat autem voluptatibus. Impedit nemo optio eum hic tenetur, atque praesentium placeat ullam ab voluptates, nisi voluptatibus. Ut itaque inventore quia ratione cupiditate modi, veniam perferendis porro omnis distinctio cumque reiciendis eligendi optio praesentium. Id reprehenderit nulla quos ab laboriosam earum dolor tempora autem quidem? Iusto quas exercitationem error tempora ut in, ab fuga, animi eaque voluptates aliquam possimus quos eveniet incidunt! Delectus voluptas molestiae est incidunt neque accusamus quisquam, veniam sequi! Obcaecati delectus iusto dolores, illum cumque quisquam nulla quis nobis quidem atque fugit voluptatibus sint optio tempora corrupti aliquid inventore velit officiis ratione! Fugit sunt exercitationem sed cum suscipit? Distinctio nostrum fugiat eaque maxime saepe quidem ea porro blanditiis, totam laborum!'),
(17, 'Learning Cyber Security Vol.2', 'Cyber Security', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error officiis repellendus, ut possimus a libero amet perspiciatis impedit repudiandae velit, iure hic tenetur nisi id suscipit dicta eveniet soluta ipsa. Aut quam quaerat harum sapiente libero facilis labore aspernatur dicta, ut voluptatum. Blanditiis amet nisi asperiores debitis officiis, iure nihil aut eum praesentium numquam. Nisi quibusdam repellat adipisci aspernatur voluptates vel cupiditate alias, laboriosam consequuntur? Praesentium error facilis porro blanditiis culpa soluta voluptatem earum eaque reiciendis est sint, maiores aliquid, ducimus ut incidunt reprehenderit ex quae dolore fugiat autem voluptatibus. Impedit nemo optio eum hic tenetur, atque praesentium placeat ullam ab voluptates, nisi voluptatibus. Ut itaque inventore quia ratione cupiditate modi, veniam perferendis porro omnis distinctio cumque reiciendis eligendi optio praesentium. Id reprehenderit nulla quos ab laboriosam earum dolor tempora autem quidem? Iusto quas exercitationem error tempora ut in, ab fuga, animi eaque voluptates aliquam possimus quos eveniet incidunt! Delectus voluptas molestiae est incidunt neque accusamus quisquam, veniam sequi! Obcaecati delectus iusto dolores, illum cumque quisquam nulla quis nobis quidem atque fugit voluptatibus sint optio tempora corrupti aliquid inventore velit officiis ratione! Fugit sunt exercitationem sed cum suscipit? Distinctio nostrum fugiat eaque maxime saepe quidem ea porro blanditiis, totam laborum!'),
(18, 'How Create CRUD in PHP', 'PHP', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error officiis repellendus, ut possimus a libero amet perspiciatis impedit repudiandae velit, iure hic tenetur nisi id suscipit dicta eveniet soluta ipsa. Aut quam quaerat harum sapiente libero facilis labore aspernatur dicta, ut voluptatum. Blanditiis amet nisi asperiores debitis officiis, iure nihil aut eum praesentium numquam. Nisi quibusdam repellat adipisci aspernatur voluptates vel cupiditate alias, laboriosam consequuntur? Praesentium error facilis porro blanditiis culpa soluta voluptatem earum eaque reiciendis est sint, maiores aliquid, ducimus ut incidunt reprehenderit ex quae dolore fugiat autem voluptatibus. Impedit nemo optio eum hic tenetur, atque praesentium placeat ullam ab voluptates, nisi voluptatibus. Ut itaque inventore quia ratione cupiditate modi, veniam perferendis porro omnis distinctio cumque reiciendis eligendi optio praesentium. Id reprehenderit nulla quos ab laboriosam earum dolor tempora autem quidem? Iusto quas exercitationem error tempora ut in, ab fuga, animi eaque voluptates aliquam possimus quos eveniet incidunt! Delectus voluptas molestiae est incidunt neque accusamus quisquam, veniam sequi! Obcaecati delectus iusto dolores, illum cumque quisquam nulla quis nobis quidem atque fugit voluptatibus sint optio tempora corrupti aliquid inventore velit officiis ratione! Fugit sunt exercitationem sed cum suscipit? Distinctio nostrum fugiat eaque maxime saepe quidem ea porro blanditiis, totam laborum!'),
(21, 'Laravel 9 : Introduction', 'Laravel Framework', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam molestiae minima unde nulla perspiciatis dolorum ex ullam repellat nemo dolor doloribus, ipsa libero sapiente officiis iure reiciendis error et. Quis ipsa natus corrupti quae temporibus illo non fuga nisi quibusdam, laboriosam, quaerat consequatur quam. Alias inventore illum repellat dolorem laborum eos velit quae. Doloremque, ex perspiciatis eius provident quod, quis illum voluptates cumque ab aperiam repellendus ratione dolores officiis natus? Necessitatibus non porro repellendus, reiciendis esse dignissimos aspernatur eos minus consequatur natus beatae excepturi maxime quidem ea culpa rerum, itaque voluptatem! Velit cumque sunt distinctio natus, deleniti deserunt voluptatem dignissimos quia molestias consectetur ea reprehenderit animi quos quaerat, architecto illum nam, expedita voluptatibus at iure beatae. Quis odit praesentium perferendis quidem sed sint fuga beatae quisquam eius esse doloremque amet magni cum distinctio fugiat, accusamus suscipit cumque excepturi laudantium libero? Quisquam, consequatur! Rerum consectetur praesentium, quo sint maxime libero, perferendis corrupti accusamus ducimus esse est dolores facere quasi distinctio suscipit nulla exercitationem facilis ad? Qui quam atque soluta similique vero est rem repellat exercitationem laboriosam, in, quo accusantium molestias sint eligendi labore nesciunt sapiente sit porro harum distinctio placeat. Iure ea dolores quod dolore facere minima doloremque quas accusamus ab?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



