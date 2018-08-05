-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Jul 2018 pada 13.26
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisatadanbudayanias`
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Qui provident ut facilis nemo. Nemo inventore alias vel ullam vel nihil. Omnis ratione tenetur possimus ab error.', '2018-07-23 17:01:02', '2018-07-23 17:01:02'),
(2, 'In deserunt asperiores minus consequatur est eum. Rerum omnis odit totam ut est ipsa. Libero voluptatum sit voluptate et at magni.', '2018-07-23 17:01:02', '2018-07-23 17:01:02'),
(3, 'Minus in est exercitationem voluptatem. Tempora consectetur in alias accusantium at sapiente. Est molestiae et explicabo.', '2018-07-23 17:01:02', '2018-07-23 17:01:02'),
(4, 'Non facilis et autem expedita consequatur. Quod quaerat maiores eum ab. Ut ipsa cum placeat suscipit qui accusamus. Veniam omnis temporibus nostrum alias repudiandae. Velit sunt nulla aut dicta.', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(5, 'Eius occaecati ipsum vitae voluptatem eum culpa. Necessitatibus repudiandae sint temporibus quo. Beatae optio asperiores nihil odit animi beatae sapiente.', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(6, 'Et ratione a sunt. Tempore sapiente rerum illo velit ipsam temporibus. Aperiam recusandae quisquam suscipit maiores. Cumque cumque aut iste impedit totam voluptas consequuntur quos.', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(7, 'Qui quae sint et nemo quaerat. Ratione ut et voluptatem itaque quia delectus. Sit omnis omnis aliquam excepturi ut voluptatibus.', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(8, 'Eius sed facere officiis ducimus. In dolore consequatur fugiat saepe commodi. Fuga dignissimos nesciunt dolorem similique et magnam hic. Quia placeat qui labore error assumenda et iusto.', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(9, 'Iure cumque eaque libero et ut. Aut eaque dolorem qui. Vero eligendi autem iusto quia odit asperiores.', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(10, 'Voluptate harum porro ipsum nihil numquam quis sapiente. Sed omnis ut laboriosam minima ut maiores minima. In ad aut iste dolorum et.', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(11, 'Perferendis nihil illo accusamus. Veniam saepe provident enim cumque ea non suscipit. Minus cum aliquid voluptates magnam. Et ut aliquid laborum nemo omnis alias.', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(12, 'Quam suscipit dignissimos autem a. Est qui explicabo consequatur. Quia tenetur sint esse nihil rerum dolorem.', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(13, 'Ullam aperiam sint dolorem quia in qui ab. Quis consequuntur ut qui. Officiis incidunt officiis repellat qui.', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(14, 'Pariatur ut aut neque dignissimos libero iusto. Esse aut consequatur non fugit dicta quasi ipsam. Natus debitis quis eos repellendus qui. Qui hic quibusdam maxime aliquam.', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(15, 'Omnis non tenetur architecto non sequi saepe explicabo. Voluptas nulla illum est aut. Rerum nihil rerum laboriosam.', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(16, 'Doloribus error officiis quaerat eos. Facere quam nihil earum atque consequatur. Quia earum explicabo unde nam. Sit quo qui aut reprehenderit.', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(17, 'Sed tempore aut quasi saepe. Accusantium nihil et voluptas vel eveniet. Hic qui accusantium quam.', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(18, 'Aut quis odio molestiae iste laborum. Atque esse eligendi veritatis ipsam. Ab voluptatem iusto quo.', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(19, 'Sequi dolor cum eos in repellat quo magnam. Omnis ut in voluptas est qui architecto officiis aut. Autem rerum doloremque beatae. Temporibus qui nihil exercitationem nulla ea quod.', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(20, 'Nobis maxime libero sit est. Ea quos cum possimus et. Iste facilis alias exercitationem ut nisi et. Ab sed nemo eum culpa sit similique. Sint deleniti id amet illo. Rerum tenetur et neque non.', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(21, 'Similique omnis quisquam expedita et. Unde facilis non rerum repudiandae illum. Dolores culpa explicabo quis similique quisquam inventore ab.', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(22, 'Voluptatum ipsum quidem aut aspernatur repellat iure doloremque. Molestiae a exercitationem vero distinctio. Velit quo pariatur odio molestiae qui odit.', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(23, 'Rerum laboriosam natus maiores magni ullam. Aut fugit nihil est sed fuga officiis veniam. Illum qui ratione culpa corrupti.', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(24, 'Placeat dignissimos aliquam alias sequi. Aspernatur quo autem quidem consequatur ducimus quis. Et minus necessitatibus odit facere neque.', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(25, 'Ullam labore sed quod et minus. Tempora qui omnis reprehenderit quas officia perferendis. Officia delectus nisi eius ipsa.', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(26, 'In adipisci sint nemo eaque. Omnis aspernatur illum et dolorem perferendis. Ducimus laborum sit explicabo ipsum omnis.', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(27, 'Aliquam a unde iusto maxime ut eius. Est consequatur molestias repudiandae et omnis id ab. Voluptatum doloribus ut et doloribus. Nobis harum asperiores atque laboriosam est.', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(28, 'Blanditiis voluptatem eum non sed. Placeat assumenda hic sunt quia.', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(29, 'Architecto animi minima quo delectus reprehenderit. Et rerum beatae pariatur sed ut itaque labore. Adipisci reiciendis totam similique sed.', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(30, 'Distinctio voluptas rem labore rerum in nemo unde excepturi. Id consequuntur perspiciatis iste et. Voluptas adipisci et pariatur.', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(31, 'Omnis debitis qui impedit cumque aut est. Rerum dolorum velit in rerum neque deserunt aut magnam. Dolorem similique officiis accusamus earum adipisci ex.', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(32, 'Molestiae dolorem dolorum officiis aut ex dolorem. Dignissimos hic aut qui est quam repellendus. Odit in animi aut amet sequi repudiandae. Explicabo nulla ipsam aut. Et ad qui consequatur voluptatem.', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(33, 'Voluptas in iure sint exercitationem. Provident ut delectus aut. Dolorem veniam quo ipsa.', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(34, 'Aperiam ad rerum deserunt temporibus minus qui ut. Debitis labore nobis placeat sequi. Maxime aut a et inventore voluptatibus amet atque vel. Qui nostrum et amet quis sit.', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(35, 'Et aperiam numquam consequuntur voluptatem ut ut. Quaerat illum nam nostrum doloremque et. Aliquam facere est enim.', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(36, 'Aut error at in voluptas rerum et. Aut fugit non accusamus et. Perspiciatis nihil officiis illo vitae ut quasi ducimus. Ullam maiores error similique sit.', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(37, 'Aperiam labore molestias necessitatibus ut nihil alias. Tenetur officiis voluptatem fugiat quis et. Aliquid id repudiandae est recusandae error aliquam sed.', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(38, 'Dolor aliquid dolor distinctio nobis hic laborum quo velit. Perferendis molestiae quis sit aspernatur sequi hic. Perferendis dolorem impedit tempore est. Ipsum nam deleniti et.', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(39, 'Dolore occaecati voluptate sed fuga perspiciatis ducimus cupiditate. Ipsa facilis soluta quia ut. Dolores cum voluptates ex id illo ipsa. Aliquam nihil eos qui suscipit sint cum atque optio.', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(40, 'Fugiat iusto voluptatum rerum quod ipsam quos. Repudiandae dolor officia voluptatem nobis ut. Delectus soluta doloribus aut soluta nisi voluptatem voluptatem. Magnam porro voluptatem vero.', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(41, 'Omnis ut non temporibus incidunt reiciendis expedita quia. Deserunt quidem impedit error pariatur. Aut consequuntur impedit suscipit error saepe ipsam. Voluptatibus qui suscipit enim.', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(42, 'Qui qui eveniet aut ipsa aut. Est recusandae sunt nemo praesentium et ut. Et ducimus modi sequi dolorum. Et sit id quia.', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(43, 'Voluptatum quia sequi consequuntur. Temporibus rerum quia dolor. Ullam id exercitationem quia cumque quod maiores.', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(44, 'Minima consequatur est est animi sit aperiam. Consequatur voluptatem eveniet dolor incidunt. Quae qui tenetur suscipit. Animi occaecati quaerat commodi commodi qui porro fugit.', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(45, 'Optio quo ut et quibusdam qui dolorem eius. Nostrum consequatur similique ex velit minima fugit non. Distinctio et voluptates quo sed saepe. Sequi et deserunt totam asperiores eum dolores et.', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(46, 'Vel voluptas qui omnis molestias provident quisquam. Impedit quo quos nesciunt ipsum ab. Non deleniti non et harum ut voluptas ea.', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(47, 'Eligendi ipsa sapiente et at. Aperiam at vel impedit itaque id provident ad. Aut quia consequatur ab officia excepturi fugiat aliquid voluptas. Rerum et omnis vel vero cupiditate eos ratione.', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(48, 'Dolor omnis magni quas sunt ut in quidem fugiat. Sed et incidunt dolorem ipsa quidem. Est magnam ut veritatis non saepe aut facilis. Illo illum asperiores sint consequatur recusandae sunt.', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(49, 'Neque adipisci consectetur dicta et et doloribus nam. Harum et rerum dolor delectus. Voluptatem sed eaque unde sit.', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(50, 'Ut pariatur quia ullam aut ad quod id nisi. Et iure enim fuga occaecati. Tenetur voluptate aut fuga repellendus eligendi nobis occaecati eaque.', '2018-07-23 17:01:06', '2018-07-23 17:01:06');

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
(1, 'Lacy Braun', 1, 'gambar', 'location', '2018-07-23 17:01:02', '2018-07-23 17:01:02'),
(2, 'Adrienne Parker', 2, 'gambar', 'location', '2018-07-23 17:01:02', '2018-07-23 17:01:02'),
(3, 'Mr. Jaylin Mann IV', 3, 'gambar', 'location', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(4, 'Ardella Macejkovic', 4, 'gambar', 'location', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(5, 'Peggie Turner', 5, 'gambar', 'location', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(6, 'Sallie Lind PhD', 6, 'gambar', 'location', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(7, 'Dr. Noah Cummerata', 7, 'gambar', 'location', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(8, 'Prof. Johnson Williamson', 8, 'gambar', 'location', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(9, 'Tyson Bartoletti', 9, 'gambar', 'location', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(10, 'Gladys Raynor', 10, 'gambar', 'location', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(11, 'Rebeca Cartwright', 11, 'gambar', 'location', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(12, 'Freda Macejkovic', 12, 'gambar', 'location', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(13, 'Claudie Treutel', 13, 'gambar', 'location', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(14, 'Anika Welch MD', 14, 'gambar', 'location', '2018-07-23 17:01:03', '2018-07-23 17:01:03'),
(15, 'Mrs. Patsy Powlowski DDS', 15, 'gambar', 'location', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(16, 'Mrs. Ila Gerhold III', 16, 'gambar', 'location', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(17, 'Ms. Elizabeth Gottlieb', 17, 'gambar', 'location', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(18, 'Sean Hudson Sr.', 18, 'gambar', 'location', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(19, 'Lela Shields', 19, 'gambar', 'location', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(20, 'Mr. Woodrow Jacobs', 20, 'gambar', 'location', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(21, 'Cordelia Kshlerin', 21, 'gambar', 'location', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(22, 'Lyric Franecki', 22, 'gambar', 'location', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(23, 'Valerie Haley', 23, 'gambar', 'location', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(24, 'Thora Heathcote', 24, 'gambar', 'location', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(25, 'Sylvia Moen', 25, 'gambar', 'location', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(26, 'Prof. Zack Schinner', 26, 'gambar', 'location', '2018-07-23 17:01:04', '2018-07-23 17:01:04'),
(27, 'Ariane Hauck', 27, 'gambar', 'location', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(28, 'Aglae Mosciski', 28, 'gambar', 'location', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(29, 'Elsie Jacobson', 29, 'gambar', 'location', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(30, 'Ms. Shyanne Padberg', 30, 'gambar', 'location', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(31, 'Seamus Thiel III', 31, 'gambar', 'location', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(32, 'Mr. Earl Stiedemann', 32, 'gambar', 'location', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(33, 'Onie Boyle', 33, 'gambar', 'location', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(34, 'Susana Fisher', 34, 'gambar', 'location', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(35, 'Mr. Oren Zieme', 35, 'gambar', 'location', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(36, 'Madisyn Baumbach', 36, 'gambar', 'location', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(37, 'Camilla Mann', 37, 'gambar', 'location', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(38, 'Dr. Junius Becker', 38, 'gambar', 'location', '2018-07-23 17:01:05', '2018-07-23 17:01:05'),
(39, 'Prof. Zackary Hettinger', 39, 'gambar', 'location', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(40, 'Frances Mills', 40, 'gambar', 'location', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(41, 'Mr. Barry Keeling', 41, 'gambar', 'location', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(42, 'Art VonRueden', 42, 'gambar', 'location', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(43, 'Guadalupe Reinger', 43, 'gambar', 'location', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(44, 'Miss Anahi Rath', 44, 'gambar', 'location', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(45, 'Branson Lubowitz DVM', 45, 'gambar', 'location', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(46, 'Ron Hayes DVM', 46, 'gambar', 'location', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(47, 'Mr. Arnoldo Lowe', 47, 'gambar', 'location', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(48, 'Yesenia Marquardt', 48, 'gambar', 'location', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(49, 'Mrs. Eula Nienow PhD', 49, 'gambar', 'location', '2018-07-23 17:01:06', '2018-07-23 17:01:06'),
(50, 'Napoleon Greenfelder', 50, 'gambar', 'location', '2018-07-23 17:01:06', '2018-07-23 17:01:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `wisata_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `gallery_gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Mrs. Virginia Schaden PhD', '2018-07-23 16:46:36', '2018-07-23 16:46:36'),
(2, 'Jerrod Walsh', '2018-07-23 16:49:53', '2018-07-23 16:49:53'),
(3, 'Alda Hahn I', '2018-07-23 16:51:22', '2018-07-23 16:51:22'),
(4, 'Prof. Chadrick Leannon PhD', '2018-07-23 17:01:06', '2018-07-23 17:01:06');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kontaks`
--

INSERT INTO `kontaks` (`id`, `name`, `email`, `topik`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'adven setiawan', 'adven.seven21@gmail.com', 'Mantap', 'Mantap jiwa', '2018-07-22 21:08:24', NULL),
(2, 'Firman', 'firman@gmail.com', 'Acara', 'Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara Ini contoh acara', '2018-07-22 21:08:44', NULL),
(3, 'Coba Coba Aja Weeeee', 'admin@gmail.com', 'Jiwa', 'Ini contoh topik mantap jiwa', '2018-07-22 13:48:12', '2018-07-22 13:48:12'),
(4, 'adven setiawan', 'adven.seven21@gmail.com', 'Mantap', 'pesan', '2018-07-23 03:47:15', '2018-07-23 03:47:15');

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
(14, '2018_06_28_082742_create_artikels_table', 4),
(16, '2018_04_27_163224_create_budayas_table', 6),
(17, '2018_07_02_124423_create_transportasis_table', 7),
(18, '2018_06_24_133018_create_kontaks_table', 8),
(20, '2018_07_02_030050_create_profiles_table', 9),
(21, '2018_07_03_025545_create_ulasans_table', 9),
(28, '2018_07_09_111629_create_jeniswisatas_table', 11),
(29, '2018_06_27_065647_create_wisatas_table', 12),
(31, '2018_06_29_125732_create_acaradanfestivals_table', 13),
(32, '2018_07_23_084639_create_galleries_table', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2018-07-23 17:01:07', '2018-07-23 17:01:07', 3, 'App\\Wisata', 1, 1),
(2, '2018-07-23 17:01:07', '2018-07-23 17:01:07', 4, 'App\\Wisata', 1, 2),
(4, '2018-07-23 17:01:07', '2018-07-23 17:01:07', 4, 'App\\Wisata', 1, 4),
(5, '2018-07-23 17:01:07', '2018-07-23 17:01:07', 4, 'App\\Wisata', 1, 5),
(6, '2018-07-23 17:01:07', '2018-07-23 17:01:07', 4, 'App\\Wisata', 1, 6),
(7, '2018-07-23 17:01:07', '2018-07-23 17:01:07', 3, 'App\\Wisata', 1, 7),
(8, '2018-07-23 17:01:07', '2018-07-23 17:01:07', 3, 'App\\Wisata', 1, 8),
(9, '2018-07-23 17:01:07', '2018-07-23 17:01:07', 3, 'App\\Wisata', 1, 9),
(10, '2018-07-23 17:01:07', '2018-07-23 17:01:07', 5, 'App\\Wisata', 1, 10),
(11, '2018-07-23 17:01:07', '2018-07-23 17:01:07', 4, 'App\\Wisata', 1, 11),
(12, '2018-07-23 17:01:08', '2018-07-23 17:01:08', 4, 'App\\Wisata', 2, 1),
(13, '2018-07-23 17:01:08', '2018-07-23 17:01:08', 5, 'App\\Wisata', 2, 2),
(15, '2018-07-23 17:01:08', '2018-07-23 17:01:08', 3, 'App\\Wisata', 2, 4),
(16, '2018-07-23 17:01:08', '2018-07-23 17:01:08', 5, 'App\\Wisata', 2, 5),
(17, '2018-07-23 17:01:08', '2018-07-23 17:01:08', 4, 'App\\Wisata', 2, 6),
(18, '2018-07-23 17:01:08', '2018-07-23 17:01:08', 5, 'App\\Wisata', 2, 7),
(19, '2018-07-23 17:01:08', '2018-07-23 17:01:08', 4, 'App\\Wisata', 2, 8),
(20, '2018-07-23 17:01:08', '2018-07-23 17:01:08', 5, 'App\\Wisata', 2, 9),
(21, '2018-07-23 17:01:08', '2018-07-23 17:01:08', 5, 'App\\Wisata', 2, 10),
(23, '2018-07-23 17:01:08', '2018-07-23 17:01:08', 5, 'App\\Wisata', 3, 1),
(24, '2018-07-23 17:01:08', '2018-07-23 17:01:08', 4, 'App\\Wisata', 3, 2),
(25, '2018-07-23 17:01:09', '2018-07-23 17:01:09', 5, 'App\\Wisata', 3, 3),
(26, '2018-07-23 17:01:09', '2018-07-23 17:01:09', 4, 'App\\Wisata', 3, 4),
(27, '2018-07-23 17:01:09', '2018-07-23 17:01:09', 4, 'App\\Wisata', 3, 5),
(28, '2018-07-23 17:01:09', '2018-07-23 17:01:09', 3, 'App\\Wisata', 3, 6),
(29, '2018-07-23 17:01:09', '2018-07-23 17:01:09', 3, 'App\\Wisata', 3, 7),
(30, '2018-07-23 17:01:09', '2018-07-23 17:01:09', 5, 'App\\Wisata', 3, 8),
(31, '2018-07-23 17:01:09', '2018-07-23 17:01:09', 3, 'App\\Wisata', 3, 9),
(32, '2018-07-23 17:01:09', '2018-07-23 17:01:09', 4, 'App\\Wisata', 3, 10),
(33, '2018-07-23 17:01:09', '2018-07-23 17:01:09', 3, 'App\\Wisata', 3, 11),
(34, '2018-07-23 17:01:09', '2018-07-23 17:01:09', 4, 'App\\Wisata', 4, 1),
(35, '2018-07-23 17:01:09', '2018-07-23 17:01:09', 5, 'App\\Wisata', 4, 2),
(36, '2018-07-23 17:01:09', '2018-07-23 17:01:09', 3, 'App\\Wisata', 4, 3),
(37, '2018-07-23 17:01:09', '2018-07-23 17:01:09', 4, 'App\\Wisata', 4, 4),
(38, '2018-07-23 17:01:10', '2018-07-23 17:01:10', 4, 'App\\Wisata', 4, 5),
(39, '2018-07-23 17:01:10', '2018-07-23 17:01:10', 4, 'App\\Wisata', 4, 6),
(40, '2018-07-23 17:01:10', '2018-07-23 17:01:10', 4, 'App\\Wisata', 4, 7),
(41, '2018-07-23 17:01:10', '2018-07-23 17:01:10', 5, 'App\\Wisata', 4, 8),
(42, '2018-07-23 17:01:10', '2018-07-23 17:01:10', 5, 'App\\Wisata', 4, 9),
(43, '2018-07-23 17:01:10', '2018-07-23 17:01:10', 4, 'App\\Wisata', 4, 10),
(44, '2018-07-23 17:01:10', '2018-07-23 17:01:10', 3, 'App\\Wisata', 4, 11),
(45, '2018-07-23 17:01:10', '2018-07-23 17:01:10', 3, 'App\\Wisata', 5, 1),
(46, '2018-07-23 17:01:10', '2018-07-23 17:01:10', 3, 'App\\Wisata', 5, 2),
(47, '2018-07-23 17:01:10', '2018-07-23 17:01:10', 5, 'App\\Wisata', 5, 3),
(48, '2018-07-23 17:01:10', '2018-07-23 17:01:10', 4, 'App\\Wisata', 5, 4),
(49, '2018-07-23 17:01:10', '2018-07-23 17:01:10', 4, 'App\\Wisata', 5, 5),
(50, '2018-07-23 17:01:10', '2018-07-23 17:01:10', 4, 'App\\Wisata', 5, 6),
(51, '2018-07-23 17:01:10', '2018-07-23 17:01:10', 3, 'App\\Wisata', 5, 7),
(52, '2018-07-23 17:01:10', '2018-07-23 17:01:10', 4, 'App\\Wisata', 5, 8),
(53, '2018-07-23 17:01:11', '2018-07-23 17:01:11', 5, 'App\\Wisata', 5, 9),
(54, '2018-07-23 17:01:11', '2018-07-23 17:01:11', 5, 'App\\Wisata', 5, 10),
(55, '2018-07-23 17:01:11', '2018-07-23 17:01:11', 3, 'App\\Wisata', 5, 11),
(56, '2018-07-23 17:01:11', '2018-07-23 17:01:11', 5, 'App\\Wisata', 6, 1),
(57, '2018-07-23 17:01:11', '2018-07-23 17:01:11', 3, 'App\\Wisata', 6, 2),
(58, '2018-07-23 17:01:11', '2018-07-23 17:01:11', 5, 'App\\Wisata', 6, 3),
(59, '2018-07-23 17:01:11', '2018-07-23 17:01:11', 3, 'App\\Wisata', 6, 4),
(60, '2018-07-23 17:01:11', '2018-07-23 17:01:11', 5, 'App\\Wisata', 6, 5),
(61, '2018-07-23 17:01:11', '2018-07-23 17:01:11', 3, 'App\\Wisata', 6, 6),
(62, '2018-07-23 17:01:11', '2018-07-23 17:01:11', 5, 'App\\Wisata', 6, 7),
(63, '2018-07-23 17:01:11', '2018-07-23 17:01:11', 3, 'App\\Wisata', 6, 8),
(64, '2018-07-23 17:01:11', '2018-07-23 17:01:11', 4, 'App\\Wisata', 6, 9),
(65, '2018-07-23 17:01:11', '2018-07-23 17:01:11', 4, 'App\\Wisata', 6, 10),
(66, '2018-07-23 17:01:11', '2018-07-23 17:01:11', 3, 'App\\Wisata', 6, 11),
(67, '2018-07-23 17:01:12', '2018-07-23 17:01:12', 4, 'App\\Wisata', 7, 1),
(68, '2018-07-23 17:01:12', '2018-07-23 17:01:12', 4, 'App\\Wisata', 7, 2),
(70, '2018-07-23 17:01:12', '2018-07-23 17:01:12', 3, 'App\\Wisata', 7, 4),
(71, '2018-07-23 17:01:12', '2018-07-23 17:01:12', 5, 'App\\Wisata', 7, 5),
(72, '2018-07-23 17:01:12', '2018-07-23 17:01:12', 4, 'App\\Wisata', 7, 6),
(73, '2018-07-23 17:01:12', '2018-07-23 17:01:12', 3, 'App\\Wisata', 7, 7),
(74, '2018-07-23 17:01:12', '2018-07-23 17:01:12', 5, 'App\\Wisata', 7, 8),
(75, '2018-07-23 17:01:12', '2018-07-23 17:01:12', 3, 'App\\Wisata', 7, 9),
(76, '2018-07-23 17:01:12', '2018-07-23 17:01:12', 4, 'App\\Wisata', 7, 10),
(77, '2018-07-23 17:01:12', '2018-07-23 17:01:12', 5, 'App\\Wisata', 7, 11),
(78, '2018-07-23 17:01:12', '2018-07-23 17:01:12', 4, 'App\\Wisata', 8, 1),
(79, '2018-07-23 17:01:12', '2018-07-23 17:01:12', 3, 'App\\Wisata', 8, 2),
(80, '2018-07-23 17:01:13', '2018-07-23 17:01:13', 4, 'App\\Wisata', 8, 3),
(81, '2018-07-23 17:01:13', '2018-07-23 17:01:13', 4, 'App\\Wisata', 8, 4),
(82, '2018-07-23 17:01:13', '2018-07-23 17:01:13', 3, 'App\\Wisata', 8, 5),
(83, '2018-07-23 17:01:13', '2018-07-23 17:01:13', 3, 'App\\Wisata', 8, 6),
(84, '2018-07-23 17:01:13', '2018-07-23 17:01:13', 3, 'App\\Wisata', 8, 7),
(85, '2018-07-23 17:01:13', '2018-07-23 17:01:13', 5, 'App\\Wisata', 8, 8),
(86, '2018-07-23 17:01:13', '2018-07-23 17:01:13', 5, 'App\\Wisata', 8, 9),
(87, '2018-07-23 17:01:13', '2018-07-23 17:01:13', 4, 'App\\Wisata', 8, 10),
(88, '2018-07-23 17:01:13', '2018-07-23 17:01:13', 3, 'App\\Wisata', 8, 11),
(89, '2018-07-23 17:01:13', '2018-07-23 17:01:13', 5, 'App\\Wisata', 9, 1),
(90, '2018-07-23 17:01:13', '2018-07-23 17:01:13', 5, 'App\\Wisata', 9, 2),
(91, '2018-07-23 17:01:13', '2018-07-23 17:01:13', 5, 'App\\Wisata', 9, 3),
(92, '2018-07-23 17:01:13', '2018-07-23 17:01:13', 3, 'App\\Wisata', 9, 4),
(93, '2018-07-23 17:01:13', '2018-07-23 17:01:13', 3, 'App\\Wisata', 9, 5),
(94, '2018-07-23 17:01:13', '2018-07-23 17:01:13', 5, 'App\\Wisata', 9, 6),
(95, '2018-07-23 17:01:14', '2018-07-23 17:01:14', 4, 'App\\Wisata', 9, 7),
(96, '2018-07-23 17:01:14', '2018-07-23 17:01:14', 5, 'App\\Wisata', 9, 8),
(97, '2018-07-23 17:01:14', '2018-07-23 17:01:14', 5, 'App\\Wisata', 9, 9),
(98, '2018-07-23 17:01:14', '2018-07-23 17:01:14', 5, 'App\\Wisata', 9, 10),
(99, '2018-07-23 17:01:14', '2018-07-23 17:01:14', 4, 'App\\Wisata', 9, 11),
(100, '2018-07-23 17:01:14', '2018-07-23 17:01:14', 4, 'App\\Wisata', 10, 1),
(101, '2018-07-23 17:01:14', '2018-07-23 17:01:14', 5, 'App\\Wisata', 10, 2),
(102, '2018-07-23 17:01:14', '2018-07-23 17:01:14', 4, 'App\\Wisata', 10, 3),
(103, '2018-07-23 17:01:14', '2018-07-23 17:01:14', 3, 'App\\Wisata', 10, 4),
(104, '2018-07-23 17:01:14', '2018-07-23 17:01:14', 4, 'App\\Wisata', 10, 5),
(105, '2018-07-23 17:01:14', '2018-07-23 17:01:14', 3, 'App\\Wisata', 10, 6),
(106, '2018-07-23 17:01:14', '2018-07-23 17:01:14', 5, 'App\\Wisata', 10, 7),
(107, '2018-07-23 17:01:14', '2018-07-23 17:01:14', 5, 'App\\Wisata', 10, 8),
(108, '2018-07-23 17:01:14', '2018-07-23 17:01:14', 4, 'App\\Wisata', 10, 9),
(109, '2018-07-23 17:01:14', '2018-07-23 17:01:14', 3, 'App\\Wisata', 10, 10),
(110, '2018-07-23 17:01:15', '2018-07-23 17:01:15', 4, 'App\\Wisata', 10, 11),
(111, '2018-07-23 17:01:15', '2018-07-23 17:01:15', 5, 'App\\Wisata', 11, 1),
(112, '2018-07-23 17:01:15', '2018-07-23 17:01:15', 5, 'App\\Wisata', 11, 2),
(113, '2018-07-23 17:01:15', '2018-07-23 17:01:15', 5, 'App\\Wisata', 11, 3),
(114, '2018-07-23 17:01:15', '2018-07-23 17:01:15', 4, 'App\\Wisata', 11, 4),
(115, '2018-07-23 17:01:15', '2018-07-23 17:01:15', 3, 'App\\Wisata', 11, 5),
(116, '2018-07-23 17:01:15', '2018-07-23 17:01:15', 4, 'App\\Wisata', 11, 6),
(117, '2018-07-23 17:01:16', '2018-07-23 17:01:16', 4, 'App\\Wisata', 11, 7),
(118, '2018-07-23 17:01:16', '2018-07-23 17:01:16', 3, 'App\\Wisata', 11, 8),
(119, '2018-07-23 17:01:16', '2018-07-23 17:01:16', 3, 'App\\Wisata', 11, 9),
(120, '2018-07-23 17:01:16', '2018-07-23 17:01:16', 4, 'App\\Wisata', 11, 10),
(121, '2018-07-23 17:01:16', '2018-07-23 17:01:16', 4, 'App\\Wisata', 11, 11),
(122, '2018-07-23 17:01:16', '2018-07-23 17:01:16', 4, 'App\\Wisata', 12, 1),
(123, '2018-07-23 17:01:16', '2018-07-23 17:01:16', 5, 'App\\Wisata', 12, 2),
(124, '2018-07-23 17:01:16', '2018-07-23 17:01:16', 4, 'App\\Wisata', 12, 3),
(125, '2018-07-23 17:01:16', '2018-07-23 17:01:16', 3, 'App\\Wisata', 12, 4),
(126, '2018-07-23 17:01:16', '2018-07-23 17:01:16', 3, 'App\\Wisata', 12, 5),
(127, '2018-07-23 17:01:16', '2018-07-23 17:01:16', 4, 'App\\Wisata', 12, 6),
(128, '2018-07-23 17:01:16', '2018-07-23 17:01:16', 5, 'App\\Wisata', 12, 7),
(129, '2018-07-23 17:01:16', '2018-07-23 17:01:16', 5, 'App\\Wisata', 12, 8),
(130, '2018-07-23 17:01:16', '2018-07-23 17:01:16', 4, 'App\\Wisata', 12, 9),
(131, '2018-07-23 17:01:16', '2018-07-23 17:01:16', 5, 'App\\Wisata', 12, 10),
(132, '2018-07-23 17:01:16', '2018-07-23 17:01:16', 4, 'App\\Wisata', 12, 11),
(133, '2018-07-23 17:01:17', '2018-07-23 17:01:17', 4, 'App\\Wisata', 13, 1),
(134, '2018-07-23 17:01:17', '2018-07-23 17:01:17', 5, 'App\\Wisata', 13, 2),
(135, '2018-07-23 17:01:17', '2018-07-23 17:01:17', 4, 'App\\Wisata', 13, 3),
(136, '2018-07-23 17:01:17', '2018-07-23 17:01:17', 5, 'App\\Wisata', 13, 4),
(137, '2018-07-23 17:01:17', '2018-07-23 17:01:17', 5, 'App\\Wisata', 13, 5),
(138, '2018-07-23 17:01:17', '2018-07-23 17:01:17', 5, 'App\\Wisata', 13, 6),
(139, '2018-07-23 17:01:17', '2018-07-23 17:01:17', 4, 'App\\Wisata', 13, 7),
(140, '2018-07-23 17:01:17', '2018-07-23 17:01:17', 3, 'App\\Wisata', 13, 8),
(141, '2018-07-23 17:01:17', '2018-07-23 17:01:17', 3, 'App\\Wisata', 13, 9),
(142, '2018-07-23 17:01:17', '2018-07-23 17:01:17', 5, 'App\\Wisata', 13, 10),
(143, '2018-07-23 17:01:17', '2018-07-23 17:01:17', 3, 'App\\Wisata', 13, 11),
(144, '2018-07-23 17:01:17', '2018-07-23 17:01:17', 3, 'App\\Wisata', 14, 1),
(145, '2018-07-23 17:01:17', '2018-07-23 17:01:17', 5, 'App\\Wisata', 14, 2),
(147, '2018-07-23 17:01:18', '2018-07-23 17:01:18', 3, 'App\\Wisata', 14, 4),
(148, '2018-07-23 17:01:18', '2018-07-23 17:01:18', 5, 'App\\Wisata', 14, 5),
(149, '2018-07-23 17:01:18', '2018-07-23 17:01:18', 5, 'App\\Wisata', 14, 6),
(150, '2018-07-23 17:01:18', '2018-07-23 17:01:18', 4, 'App\\Wisata', 14, 7),
(151, '2018-07-23 17:01:18', '2018-07-23 17:01:18', 4, 'App\\Wisata', 14, 8),
(152, '2018-07-23 17:01:18', '2018-07-23 17:01:18', 5, 'App\\Wisata', 14, 9),
(153, '2018-07-23 17:01:18', '2018-07-23 17:01:18', 3, 'App\\Wisata', 14, 10),
(154, '2018-07-23 17:01:18', '2018-07-23 17:01:18', 5, 'App\\Wisata', 14, 11),
(155, '2018-07-23 17:01:18', '2018-07-23 17:01:18', 5, 'App\\Wisata', 15, 1),
(156, '2018-07-23 17:01:18', '2018-07-23 17:01:18', 3, 'App\\Wisata', 15, 2),
(157, '2018-07-23 17:01:18', '2018-07-23 17:01:18', 3, 'App\\Wisata', 15, 3),
(158, '2018-07-23 17:01:18', '2018-07-23 17:01:18', 4, 'App\\Wisata', 15, 4),
(159, '2018-07-23 17:01:19', '2018-07-23 17:01:19', 5, 'App\\Wisata', 15, 5),
(160, '2018-07-23 17:01:19', '2018-07-23 17:01:19', 3, 'App\\Wisata', 15, 6),
(161, '2018-07-23 17:01:19', '2018-07-23 17:01:19', 3, 'App\\Wisata', 15, 7),
(162, '2018-07-23 17:01:19', '2018-07-23 17:01:19', 4, 'App\\Wisata', 15, 8),
(163, '2018-07-23 17:01:19', '2018-07-23 17:01:19', 3, 'App\\Wisata', 15, 9),
(164, '2018-07-23 17:01:19', '2018-07-23 17:01:19', 3, 'App\\Wisata', 15, 10),
(165, '2018-07-23 17:01:19', '2018-07-23 17:01:19', 5, 'App\\Wisata', 15, 11),
(166, '2018-07-23 17:01:19', '2018-07-23 17:01:19', 4, 'App\\Wisata', 16, 1),
(167, '2018-07-23 17:01:19', '2018-07-23 17:01:19', 5, 'App\\Wisata', 16, 2),
(168, '2018-07-23 17:01:19', '2018-07-23 17:01:19', 4, 'App\\Wisata', 16, 3),
(169, '2018-07-23 17:01:19', '2018-07-23 17:01:19', 3, 'App\\Wisata', 16, 4),
(170, '2018-07-23 17:01:19', '2018-07-23 17:01:19', 5, 'App\\Wisata', 16, 5),
(171, '2018-07-23 17:01:19', '2018-07-23 17:01:19', 4, 'App\\Wisata', 16, 6),
(172, '2018-07-23 17:01:20', '2018-07-23 17:01:20', 5, 'App\\Wisata', 16, 7),
(173, '2018-07-23 17:01:20', '2018-07-23 17:01:20', 3, 'App\\Wisata', 16, 8),
(174, '2018-07-23 17:01:20', '2018-07-23 17:01:20', 4, 'App\\Wisata', 16, 9),
(175, '2018-07-23 17:01:20', '2018-07-23 17:01:20', 3, 'App\\Wisata', 16, 10),
(176, '2018-07-23 17:01:20', '2018-07-23 17:01:20', 4, 'App\\Wisata', 16, 11),
(177, '2018-07-23 17:01:20', '2018-07-23 17:01:20', 5, 'App\\Wisata', 17, 1),
(178, '2018-07-23 17:01:20', '2018-07-23 17:01:20', 3, 'App\\Wisata', 17, 2),
(179, '2018-07-23 17:01:20', '2018-07-23 17:01:20', 4, 'App\\Wisata', 17, 3),
(180, '2018-07-23 17:01:20', '2018-07-23 17:01:20', 5, 'App\\Wisata', 17, 4),
(181, '2018-07-23 17:01:20', '2018-07-23 17:01:20', 3, 'App\\Wisata', 17, 5),
(182, '2018-07-23 17:01:20', '2018-07-23 17:01:20', 3, 'App\\Wisata', 17, 6),
(183, '2018-07-23 17:01:20', '2018-07-23 17:01:20', 3, 'App\\Wisata', 17, 7),
(184, '2018-07-23 17:01:21', '2018-07-23 17:01:21', 5, 'App\\Wisata', 17, 8),
(185, '2018-07-23 17:01:21', '2018-07-23 17:01:21', 3, 'App\\Wisata', 17, 9),
(186, '2018-07-23 17:01:21', '2018-07-23 17:01:21', 3, 'App\\Wisata', 17, 10),
(187, '2018-07-23 17:01:21', '2018-07-23 17:01:21', 5, 'App\\Wisata', 17, 11),
(188, '2018-07-23 17:01:21', '2018-07-23 17:01:21', 4, 'App\\Wisata', 18, 1),
(189, '2018-07-23 17:01:21', '2018-07-23 17:01:21', 5, 'App\\Wisata', 18, 2),
(191, '2018-07-23 17:01:21', '2018-07-23 17:01:21', 3, 'App\\Wisata', 18, 4),
(192, '2018-07-23 17:01:21', '2018-07-23 17:01:21', 3, 'App\\Wisata', 18, 5),
(193, '2018-07-23 17:01:21', '2018-07-23 17:01:21', 5, 'App\\Wisata', 18, 6),
(194, '2018-07-23 17:01:21', '2018-07-23 17:01:21', 5, 'App\\Wisata', 18, 7),
(195, '2018-07-23 17:01:21', '2018-07-23 17:01:21', 5, 'App\\Wisata', 18, 8),
(196, '2018-07-23 17:01:21', '2018-07-23 17:01:21', 4, 'App\\Wisata', 18, 9),
(197, '2018-07-23 17:01:21', '2018-07-23 17:01:21', 5, 'App\\Wisata', 18, 10),
(198, '2018-07-23 17:01:22', '2018-07-23 17:01:22', 3, 'App\\Wisata', 18, 11),
(199, '2018-07-23 17:01:22', '2018-07-23 17:01:22', 3, 'App\\Wisata', 19, 1),
(200, '2018-07-23 17:01:22', '2018-07-23 17:01:22', 4, 'App\\Wisata', 19, 2),
(201, '2018-07-23 17:01:22', '2018-07-23 17:01:22', 3, 'App\\Wisata', 19, 3),
(202, '2018-07-23 17:01:22', '2018-07-23 17:01:22', 3, 'App\\Wisata', 19, 4),
(203, '2018-07-23 17:01:22', '2018-07-23 17:01:22', 5, 'App\\Wisata', 19, 5),
(204, '2018-07-23 17:01:22', '2018-07-23 17:01:22', 4, 'App\\Wisata', 19, 6),
(205, '2018-07-23 17:01:22', '2018-07-23 17:01:22', 4, 'App\\Wisata', 19, 7),
(206, '2018-07-23 17:01:22', '2018-07-23 17:01:22', 3, 'App\\Wisata', 19, 8),
(207, '2018-07-23 17:01:22', '2018-07-23 17:01:22', 4, 'App\\Wisata', 19, 9),
(208, '2018-07-23 17:01:22', '2018-07-23 17:01:22', 4, 'App\\Wisata', 19, 10),
(209, '2018-07-23 17:01:22', '2018-07-23 17:01:22', 5, 'App\\Wisata', 19, 11),
(210, '2018-07-23 17:01:23', '2018-07-23 17:01:23', 3, 'App\\Wisata', 20, 1),
(211, '2018-07-23 17:01:23', '2018-07-23 17:01:23', 4, 'App\\Wisata', 20, 2),
(213, '2018-07-23 17:01:23', '2018-07-23 17:01:23', 3, 'App\\Wisata', 20, 4),
(214, '2018-07-23 17:01:23', '2018-07-23 17:01:23', 4, 'App\\Wisata', 20, 5),
(215, '2018-07-23 17:01:23', '2018-07-23 17:01:23', 3, 'App\\Wisata', 20, 6),
(216, '2018-07-23 17:01:23', '2018-07-23 17:01:23', 5, 'App\\Wisata', 20, 7),
(217, '2018-07-23 17:01:23', '2018-07-23 17:01:23', 3, 'App\\Wisata', 20, 8),
(218, '2018-07-23 17:01:23', '2018-07-23 17:01:23', 5, 'App\\Wisata', 20, 9),
(219, '2018-07-23 17:01:23', '2018-07-23 17:01:23', 3, 'App\\Wisata', 20, 10),
(220, '2018-07-23 17:01:23', '2018-07-23 17:01:23', 3, 'App\\Wisata', 20, 11);

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
(2, 'Ojek edit', 38, 'gambar.jpg', 'darat', '2018-07-02 13:55:49', '2018-07-22 15:54:31'),
(3, 'Becak', 57, '/img/img-transportasi/1532345804.jpg', 'darat', '2018-07-23 04:36:45', '2018-07-23 04:36:45');

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
(1, 1, 1, 'Facilis deleniti sapiente et vel nulla est accusamus. Illo et culpa quia sit. Nostrum qui delectus et ut. Ut ducimus mollitia praesentium voluptas enim rerum.', '2018-07-23 17:01:07', '2018-07-23 17:01:07'),
(2, 1, 2, 'Sit eos et porro molestiae dolor. Odio quam ea tenetur eius cum sed sequi. Dolor unde vel aliquid assumenda aut qui quisquam exercitationem.', '2018-07-23 17:01:07', '2018-07-23 17:01:07'),
(4, 1, 4, 'Suscipit illo eligendi omnis nisi. Maiores neque labore cupiditate fugit provident vitae non. Est quas unde sit accusantium. Sunt quos nihil nisi.', '2018-07-23 17:01:07', '2018-07-23 17:01:07'),
(5, 1, 5, 'Impedit et quos nobis vel. Eaque sit et vel aliquam quia quo. Labore reprehenderit dolorem laudantium at autem quia.', '2018-07-23 17:01:07', '2018-07-23 17:01:07'),
(6, 1, 6, 'Rerum saepe dicta nihil consequatur officia enim. Similique provident et voluptates in tempore explicabo natus. Totam quam exercitationem non ab quis. Esse eum et sint illo ut.', '2018-07-23 17:01:07', '2018-07-23 17:01:07'),
(7, 1, 7, 'Sunt molestiae aliquam ut atque. Delectus minus sapiente animi nihil. Sit dignissimos ut quis amet voluptatem nemo culpa cum.', '2018-07-23 17:01:07', '2018-07-23 17:01:07'),
(8, 1, 8, 'Accusantium et quis tempora ducimus nemo aperiam doloribus ullam. Odit eum nemo mollitia. Et ipsa voluptate non id repudiandae dolorem. Fugiat rerum est tempore. Saepe et explicabo est itaque sed.', '2018-07-23 17:01:07', '2018-07-23 17:01:07'),
(9, 1, 9, 'Sit ab laudantium et eos porro velit. Expedita possimus quidem velit totam quia consequatur. Deserunt ipsa eligendi autem cum et repellat.', '2018-07-23 17:01:07', '2018-07-23 17:01:07'),
(10, 1, 10, 'Doloremque modi veniam quia corrupti. Ex quidem provident itaque praesentium qui ut est. Ut ad iusto doloremque dolorum. Accusantium velit necessitatibus aut ut.', '2018-07-23 17:01:07', '2018-07-23 17:01:07'),
(11, 1, 11, 'Iusto et aut molestiae et delectus maxime. Reiciendis eveniet ut enim voluptas atque voluptates dolore eum.', '2018-07-23 17:01:08', '2018-07-23 17:01:08'),
(12, 2, 1, 'Similique beatae illum et voluptas unde omnis cupiditate. Sit optio beatae corporis. Corporis recusandae vero non quasi atque vitae autem.', '2018-07-23 17:01:08', '2018-07-23 17:01:08'),
(13, 2, 2, 'Sunt enim id dolores rem quo. Laboriosam sit recusandae reprehenderit. Dolorem eaque perferendis reprehenderit id et sit rerum. Quod commodi laborum illo repellat sapiente neque.', '2018-07-23 17:01:08', '2018-07-23 17:01:08'),
(14, 2, 3, 'Doloribus sed exercitationem expedita blanditiis officiis eius. Explicabo iusto laboriosam at rerum ipsa doloremque fugit nobis. Et voluptatem ab cumque eum unde.', '2018-07-23 17:01:08', '2018-07-23 17:01:08'),
(15, 2, 4, 'Recusandae distinctio illo libero. Sint est hic molestiae voluptas. Repudiandae placeat sapiente voluptatem quisquam. Voluptates qui cum atque. Deleniti maiores aperiam officiis sed perferendis et.', '2018-07-23 17:01:08', '2018-07-23 17:01:08'),
(16, 2, 5, 'Est est dicta omnis repellat odit et. Doloribus placeat minus minima atque quia aperiam voluptatem. Voluptatem quia quis illo rerum. Et incidunt qui adipisci inventore sit.', '2018-07-23 17:01:08', '2018-07-23 17:01:08'),
(17, 2, 6, 'Dicta omnis error nihil dolore voluptatem et. Minima neque est veniam qui molestias inventore consequuntur. Optio aut veniam id culpa cum sunt. Natus fugiat praesentium voluptatibus maiores.', '2018-07-23 17:01:08', '2018-07-23 17:01:08'),
(18, 2, 7, 'Eum aut quas ut ut nulla rerum. Aut dolor dicta beatae molestias. Dolore reprehenderit veniam eligendi qui consequuntur.', '2018-07-23 17:01:08', '2018-07-23 17:01:08'),
(19, 2, 8, 'Quasi aliquid quisquam ut provident quis hic dolores. Aut eum molestiae repellat ut reiciendis recusandae qui. Non dolorem ratione distinctio. Nam velit molestiae rerum et.', '2018-07-23 17:01:08', '2018-07-23 17:01:08'),
(20, 2, 9, 'Cum eaque ullam optio incidunt. Sequi voluptatem placeat ea recusandae eos. Minus odit fugiat velit aut est non. Nesciunt aut quos itaque minus qui omnis.', '2018-07-23 17:01:08', '2018-07-23 17:01:08'),
(21, 2, 10, 'Illum in animi et quibusdam est et et. Ratione saepe qui repellendus ut nemo aut ut. Et ab quod numquam et soluta quas sint.', '2018-07-23 17:01:08', '2018-07-23 17:01:08'),
(22, 2, 11, 'Consequatur libero omnis doloremque ratione est quia. Atque est voluptas voluptas enim voluptas. Quis illum provident omnis eligendi quas aut veniam harum. Reiciendis vel quia vero qui vitae et aut.', '2018-07-23 17:01:08', '2018-07-23 17:01:08'),
(23, 3, 1, 'Quis eos ut dolorem est. Tempore pariatur rem provident quo voluptatem necessitatibus. Quas tenetur quas aut.', '2018-07-23 17:01:08', '2018-07-23 17:01:08'),
(24, 3, 2, 'Id quia quam aliquam deleniti vitae. Nihil voluptas sed earum qui dolor autem rerum qui.', '2018-07-23 17:01:09', '2018-07-23 17:01:09'),
(25, 3, 3, 'Autem excepturi molestiae exercitationem non explicabo in. Eos quos ut dolorem voluptatem. Quibusdam voluptatem consequatur quia facilis dignissimos dolor sapiente. Odio consequatur ad aut deleniti.', '2018-07-23 17:01:09', '2018-07-23 17:01:09'),
(26, 3, 4, 'Aspernatur ab labore nesciunt vero voluptatem omnis quibusdam ab. Iure ad optio sunt excepturi consequatur. Qui omnis dignissimos et minima iusto. Quam molestiae cum vero nam minus tempore aut.', '2018-07-23 17:01:09', '2018-07-23 17:01:09'),
(27, 3, 5, 'Omnis quia ducimus quia quo provident necessitatibus. Est non error non in minus voluptatem magni incidunt. Qui ut aut molestias dolores.', '2018-07-23 17:01:09', '2018-07-23 17:01:09'),
(28, 3, 6, 'Minus odio placeat molestias reiciendis cupiditate. Quisquam nesciunt natus eos consequatur. Ea quam modi cum id.', '2018-07-23 17:01:09', '2018-07-23 17:01:09'),
(29, 3, 7, 'Facere dolor perferendis dicta nam dolore quibusdam. Velit consectetur sed nam mollitia sit ab. Molestiae reiciendis enim unde qui. Illum qui perferendis tenetur et sed fugit quaerat.', '2018-07-23 17:01:09', '2018-07-23 17:01:09'),
(30, 3, 8, 'Ad ut laborum corrupti vel error quo autem. Dolor aut qui architecto velit nihil mollitia est. Qui quod sit ex ea laborum et sunt. Doloremque corrupti facilis sed nemo.', '2018-07-23 17:01:09', '2018-07-23 17:01:09'),
(31, 3, 9, 'Non et expedita quas numquam eveniet a consequuntur. Perferendis dolorem ex tempore dolor at velit. Voluptatem harum et ut in laboriosam maxime aliquid. Esse asperiores rerum rerum rerum aliquid ut.', '2018-07-23 17:01:09', '2018-07-23 17:01:09'),
(32, 3, 10, 'Doloremque qui quia magnam maxime sit ex sit quod. Reiciendis nihil alias enim voluptates rerum. Veniam fuga in quidem in. Earum aut illo et.', '2018-07-23 17:01:09', '2018-07-23 17:01:09'),
(33, 3, 11, 'Dolorem quo pariatur quaerat dolorum laborum. Aliquid fugit asperiores sequi vitae et neque. Quaerat non qui rerum quasi rerum placeat.', '2018-07-23 17:01:09', '2018-07-23 17:01:09'),
(34, 4, 1, 'Autem praesentium est quia in. Hic est voluptatem possimus voluptatum labore tenetur totam. Voluptate sed aliquam voluptatum expedita quia consequatur.', '2018-07-23 17:01:09', '2018-07-23 17:01:09'),
(35, 4, 2, 'Totam quos nobis natus voluptatem similique qui dignissimos. Dolores sunt similique et sed quis eaque. Commodi eum minus ut sunt. Consequuntur tempora fuga possimus nobis.', '2018-07-23 17:01:09', '2018-07-23 17:01:09'),
(36, 4, 3, 'Molestiae aut voluptas accusantium rerum. Sint quos consequatur est hic. Occaecati doloremque sint ut cum voluptatem. Occaecati recusandae consequatur delectus vero corporis.', '2018-07-23 17:01:09', '2018-07-23 17:01:09'),
(37, 4, 4, 'Modi est possimus et exercitationem unde. Accusantium voluptas ullam consequatur ea est. Est optio et itaque aut animi totam.', '2018-07-23 17:01:09', '2018-07-23 17:01:09'),
(38, 4, 5, 'Dolorum sit minus sequi possimus. Saepe sunt qui ducimus quo sint molestias voluptatem. Reprehenderit consequatur eos sint maxime minima magnam aperiam. Repellat harum voluptatem itaque nihil.', '2018-07-23 17:01:10', '2018-07-23 17:01:10'),
(39, 4, 6, 'Libero voluptatum pariatur quia enim. Dolor et voluptas numquam. Aut eius excepturi quos possimus.', '2018-07-23 17:01:10', '2018-07-23 17:01:10'),
(40, 4, 7, 'Consequuntur quaerat enim saepe veritatis assumenda. Tempora ut iste numquam quaerat corrupti quo quisquam. Impedit est corporis cupiditate architecto nulla.', '2018-07-23 17:01:10', '2018-07-23 17:01:10'),
(41, 4, 8, 'Aut quia et autem sit fugiat tenetur accusamus. Illo atque accusantium dignissimos nemo labore rem quia autem. Doloremque rerum iusto reprehenderit rerum non dolorum eius.', '2018-07-23 17:01:10', '2018-07-23 17:01:10'),
(42, 4, 9, 'Commodi dolor non veniam qui aut quidem voluptatem. Magnam consectetur ipsum expedita fugit veritatis voluptas. Nemo odit rerum deserunt veniam. Quia qui ut qui placeat fugit sed sit et.', '2018-07-23 17:01:10', '2018-07-23 17:01:10'),
(43, 4, 10, 'Optio pariatur omnis cupiditate illum velit nihil inventore. Placeat est perferendis sed. Accusamus quia ab molestias quae qui.', '2018-07-23 17:01:10', '2018-07-23 17:01:10'),
(44, 4, 11, 'Corporis itaque dolor expedita. Omnis pariatur ut reiciendis reiciendis molestiae odio iusto. Quis ea et quia accusantium tempore.', '2018-07-23 17:01:10', '2018-07-23 17:01:10'),
(45, 5, 1, 'Ipsam adipisci sit veniam impedit natus ipsam consequatur. Et nulla cumque quidem id. Expedita amet et omnis error tempora iusto. Laudantium sit architecto voluptatem.', '2018-07-23 17:01:10', '2018-07-23 17:01:10'),
(46, 5, 2, 'Ut libero dicta est ut veritatis nam. Fuga officia rerum perferendis molestiae. Eum autem quisquam harum molestiae minus.', '2018-07-23 17:01:10', '2018-07-23 17:01:10'),
(47, 5, 3, 'Quas libero numquam voluptas sit iste sunt. Ut maiores tenetur et consequatur possimus quo quibusdam sapiente. Et voluptas reprehenderit aut omnis quia impedit.', '2018-07-23 17:01:10', '2018-07-23 17:01:10'),
(48, 5, 4, 'Amet corrupti totam aut omnis aut officiis harum. Velit culpa maxime doloribus.', '2018-07-23 17:01:10', '2018-07-23 17:01:10'),
(49, 5, 5, 'Alias vel ab cupiditate nam fugiat. Et est nihil quod fugit. Nihil provident et ea provident.', '2018-07-23 17:01:10', '2018-07-23 17:01:10'),
(50, 5, 6, 'Consequatur quas veniam voluptas hic corporis fugiat. Consequatur voluptatem itaque provident saepe.', '2018-07-23 17:01:10', '2018-07-23 17:01:10'),
(51, 5, 7, 'Ab culpa quidem tempore et eaque aliquid non. Ad aspernatur quidem quibusdam facilis error veritatis repudiandae. Cupiditate impedit voluptatem vitae ducimus.', '2018-07-23 17:01:10', '2018-07-23 17:01:10'),
(52, 5, 8, 'Repudiandae veniam qui eos minus est. Quis et provident harum fugiat at. Aut error veniam voluptas sed. Est qui repellat distinctio necessitatibus.', '2018-07-23 17:01:10', '2018-07-23 17:01:10'),
(53, 5, 9, 'At repudiandae in aut est sunt quia reprehenderit. Atque aut vero non nobis minima labore. Repellendus doloribus expedita repellendus incidunt.', '2018-07-23 17:01:11', '2018-07-23 17:01:11'),
(54, 5, 10, 'Nulla asperiores accusantium neque voluptatem. Nesciunt quo ut molestiae rem in. Perferendis omnis in harum et.', '2018-07-23 17:01:11', '2018-07-23 17:01:11'),
(55, 5, 11, 'Voluptatem nostrum exercitationem magnam magnam cum ad impedit. Non ut eligendi optio quia quo voluptas. Delectus accusamus sunt non nesciunt. Quis voluptatem illo fuga voluptates sit.', '2018-07-23 17:01:11', '2018-07-23 17:01:11'),
(56, 6, 1, 'Ex rerum sunt culpa nemo est quia aliquid. Quia laboriosam quisquam placeat eaque voluptatum eligendi. Facere in blanditiis veniam vel et vel quia provident.', '2018-07-23 17:01:11', '2018-07-23 17:01:11'),
(57, 6, 2, 'Ea quos quae vel dolor. Debitis esse quis recusandae quo aliquid. At ut impedit et et repellat et fugiat.', '2018-07-23 17:01:11', '2018-07-23 17:01:11'),
(58, 6, 3, 'Ut quam rerum minus quisquam. Ullam quia architecto repellat ea quidem qui. Sint ex consequatur dolorum ratione alias aliquid nemo fuga.', '2018-07-23 17:01:11', '2018-07-23 17:01:11'),
(59, 6, 4, 'Sit tempora numquam magni voluptates dolorem. Quae et in nihil ut. Sit eligendi eos deleniti et et assumenda. Vel delectus et commodi eum rem commodi omnis.', '2018-07-23 17:01:11', '2018-07-23 17:01:11'),
(60, 6, 5, 'Voluptas eveniet aperiam natus qui molestiae. Eveniet nam at in fuga. Eum et in aperiam laborum porro. Autem ratione laborum aliquam vitae iusto. Dolor inventore tempore error est dolor.', '2018-07-23 17:01:11', '2018-07-23 17:01:11'),
(61, 6, 6, 'Maiores voluptatem minus quis et autem aut laborum. Nulla eum voluptate non praesentium rerum. Non qui distinctio nihil ut libero. Et sint quia eaque qui sit ipsam iusto.', '2018-07-23 17:01:11', '2018-07-23 17:01:11'),
(62, 6, 7, 'Quaerat nihil possimus voluptas similique. Corporis voluptatem enim vel ab occaecati quam. Consequatur nihil quo consectetur vel.', '2018-07-23 17:01:11', '2018-07-23 17:01:11'),
(63, 6, 8, 'Dolor esse dolorem deleniti ratione. Aut tenetur et quis consequuntur nihil minus. Nihil aliquam optio dolorem dolor. Sit voluptate architecto eum.', '2018-07-23 17:01:11', '2018-07-23 17:01:11'),
(64, 6, 9, 'Facilis autem ratione aut ipsa soluta enim. Molestiae quia ut maiores quia eligendi atque. Error numquam nulla esse id veritatis. Officia soluta non ab necessitatibus.', '2018-07-23 17:01:11', '2018-07-23 17:01:11'),
(65, 6, 10, 'Est odit aut voluptas repellendus qui eos error. Hic doloribus quisquam et et distinctio. Tempora doloremque provident cum doloribus excepturi ut maxime. Optio ut quis accusamus inventore.', '2018-07-23 17:01:11', '2018-07-23 17:01:11'),
(66, 6, 11, 'Tempore omnis placeat soluta aut tempore ea. Id quis modi asperiores tempora est explicabo distinctio. Aspernatur quia ad perspiciatis eligendi esse et. Minima maiores fugit modi quae.', '2018-07-23 17:01:11', '2018-07-23 17:01:11'),
(67, 7, 1, 'Repudiandae consectetur fugit consequatur ratione molestias mollitia consequatur ut. Autem velit asperiores illum. Voluptatibus dignissimos dolore possimus quod deserunt ratione magni.', '2018-07-23 17:01:12', '2018-07-23 17:01:12'),
(68, 7, 2, 'Dolorem repellendus velit esse sit dolor. Dignissimos quam optio impedit quos.', '2018-07-23 17:01:12', '2018-07-23 17:01:12'),
(69, 7, 3, 'Odit delectus odio in et et. Sed consequuntur sint eum voluptas. Esse sed sed sapiente non.', '2018-07-23 17:01:12', '2018-07-23 17:01:12'),
(70, 7, 4, 'Perspiciatis sit tempore nemo est optio nihil. Est mollitia aut ut dolor sunt qui aliquid temporibus. Sapiente itaque totam numquam sunt repellat neque quo est.', '2018-07-23 17:01:12', '2018-07-23 17:01:12'),
(71, 7, 5, 'Aliquam esse quae saepe et. Rem vero accusamus blanditiis qui dolorem. Quibusdam corrupti ipsum illo aperiam voluptate ea.', '2018-07-23 17:01:12', '2018-07-23 17:01:12'),
(72, 7, 6, 'Ut eligendi est a dolor. Magni voluptatum sit reiciendis et minima. Optio optio animi soluta nisi pariatur laudantium.', '2018-07-23 17:01:12', '2018-07-23 17:01:12'),
(73, 7, 7, 'Omnis aut quis quia corporis minus beatae et. Hic consequatur sed at porro et at. Iste vero nostrum totam aut. Itaque sint blanditiis rem quia sint.', '2018-07-23 17:01:12', '2018-07-23 17:01:12'),
(74, 7, 8, 'Corporis dolorem sit assumenda voluptas. Vel non est earum eligendi quibusdam asperiores. Dolore eius excepturi quis labore. Quasi consequatur ipsam dicta officia ipsa.', '2018-07-23 17:01:12', '2018-07-23 17:01:12'),
(75, 7, 9, 'Sed voluptate excepturi officia ut. Eum qui aliquam ipsum impedit facilis esse qui. Nihil ea quos possimus quis non.', '2018-07-23 17:01:12', '2018-07-23 17:01:12'),
(76, 7, 10, 'Ab ex id quo omnis. Maiores saepe sit omnis aperiam omnis aut aliquam. Quibusdam voluptas quia laborum in deserunt harum et. Nam sed iure ducimus ab inventore ut voluptas.', '2018-07-23 17:01:12', '2018-07-23 17:01:12'),
(77, 7, 11, 'Ratione eos quis dolore. Odit minus aut beatae sit. Ab necessitatibus ab voluptate ipsa quam veniam sapiente sint. Voluptatum omnis eos quae quasi autem voluptas.', '2018-07-23 17:01:12', '2018-07-23 17:01:12'),
(78, 8, 1, 'Quia quos et voluptate quod mollitia distinctio. Et qui et voluptate dolorum animi molestiae. Voluptas molestiae autem nesciunt voluptates assumenda voluptas rerum.', '2018-07-23 17:01:12', '2018-07-23 17:01:12'),
(79, 8, 2, 'Sed ut et quia. In et sed quaerat non quae. Alias voluptas hic corrupti aliquam voluptatem dicta nisi.', '2018-07-23 17:01:12', '2018-07-23 17:01:12'),
(80, 8, 3, 'Itaque qui sit distinctio nihil. Totam sint placeat temporibus autem aut iste optio nulla. Consequatur ut voluptates aliquid velit.', '2018-07-23 17:01:13', '2018-07-23 17:01:13'),
(81, 8, 4, 'Architecto perspiciatis voluptatem odio quo. Sed animi quia aut cum nisi autem. Nemo et et eum.', '2018-07-23 17:01:13', '2018-07-23 17:01:13'),
(82, 8, 5, 'Quasi dolorem et porro et ullam perspiciatis. Ea non quia amet omnis libero ab. Rem voluptatum omnis doloribus sint tempore. Autem aut delectus dolore molestias quia.', '2018-07-23 17:01:13', '2018-07-23 17:01:13'),
(83, 8, 6, 'Cum at quo dolor reiciendis magni. Impedit cumque dolorem ea.', '2018-07-23 17:01:13', '2018-07-23 17:01:13'),
(84, 8, 7, 'Suscipit qui et ut aspernatur ad. Quia earum aperiam amet est atque reiciendis earum. Labore odit omnis consequatur.', '2018-07-23 17:01:13', '2018-07-23 17:01:13'),
(85, 8, 8, 'Odio molestias est ut voluptate. Et et magnam nisi atque voluptatibus voluptates velit sit. Consequatur est labore nostrum libero animi magni deserunt.', '2018-07-23 17:01:13', '2018-07-23 17:01:13'),
(86, 8, 9, 'Omnis distinctio natus quia explicabo expedita porro debitis. Aliquam molestiae sit cum ipsa aperiam. Odio enim qui aut sunt.', '2018-07-23 17:01:13', '2018-07-23 17:01:13'),
(87, 8, 10, 'Vero esse praesentium ut blanditiis aperiam provident. Eum ullam eius unde explicabo tempore qui. Eum eos quis tenetur facere.', '2018-07-23 17:01:13', '2018-07-23 17:01:13'),
(88, 8, 11, 'Excepturi aut nihil qui veniam unde mollitia. Quibusdam totam fuga corporis iure esse ea modi animi. Debitis cumque quo pariatur.', '2018-07-23 17:01:13', '2018-07-23 17:01:13'),
(89, 9, 1, 'Dolores velit commodi accusantium alias amet ad velit doloribus. Illo esse assumenda rerum officiis consequatur atque. Sequi dignissimos illo molestiae eos ipsam quidem. Saepe nihil nemo harum natus.', '2018-07-23 17:01:13', '2018-07-23 17:01:13'),
(90, 9, 2, 'Cupiditate occaecati velit voluptatem ipsam. Quibusdam expedita aut qui repellendus inventore. Ipsa sed est omnis et iste repudiandae. Optio tempore est dolores sit.', '2018-07-23 17:01:13', '2018-07-23 17:01:13'),
(91, 9, 3, 'Sint dolorum non id est dolorum eum. Necessitatibus id eum quo aut sit molestiae. Ad ut pariatur blanditiis officia.', '2018-07-23 17:01:13', '2018-07-23 17:01:13'),
(92, 9, 4, 'Et sit repellendus sint nostrum dolor iste. Qui dolor iusto sint aliquid eaque dolorem est. Et sunt quasi exercitationem rem maxime dolor et.', '2018-07-23 17:01:13', '2018-07-23 17:01:13'),
(93, 9, 5, 'Similique deleniti ab aliquid suscipit sunt labore harum. Maxime officia qui ad qui odio consequatur. Ducimus similique sit ad. Et aspernatur et voluptatum nihil aspernatur sed.', '2018-07-23 17:01:13', '2018-07-23 17:01:13'),
(94, 9, 6, 'Praesentium id quaerat molestiae tempora et. Dicta architecto odio quae nihil nemo sit. Ex saepe velit animi autem enim incidunt qui porro. Odit accusamus et iste.', '2018-07-23 17:01:13', '2018-07-23 17:01:13'),
(95, 9, 7, 'Accusamus consectetur quisquam et iusto consectetur. Doloremque repellat distinctio nemo quibusdam expedita libero qui et. Velit architecto doloribus vitae dolor.', '2018-07-23 17:01:14', '2018-07-23 17:01:14'),
(96, 9, 8, 'Praesentium officiis sed minima. Quae delectus dolores ipsum cupiditate at quas. Voluptatem optio accusantium voluptas sit quo molestias.', '2018-07-23 17:01:14', '2018-07-23 17:01:14'),
(97, 9, 9, 'Et placeat consequatur deserunt et qui. Quisquam et eius natus minus laborum. In et magni id. Et quidem esse aut eligendi ea.', '2018-07-23 17:01:14', '2018-07-23 17:01:14'),
(98, 9, 10, 'Nam qui ipsum ut mollitia minima impedit. Quas nobis non quis facilis est. Est odit qui qui quo.', '2018-07-23 17:01:14', '2018-07-23 17:01:14'),
(99, 9, 11, 'Sit expedita aperiam sapiente saepe. Praesentium temporibus magni fugiat maiores mollitia ullam.', '2018-07-23 17:01:14', '2018-07-23 17:01:14'),
(100, 10, 1, 'Occaecati natus dolores qui sit eum rerum a. Expedita consequuntur quibusdam ut est aut ipsum qui. Itaque ipsum quia accusamus laudantium quia quo id.', '2018-07-23 17:01:14', '2018-07-23 17:01:14'),
(101, 10, 2, 'Sit mollitia ut nobis voluptatem dolorum. Cupiditate rerum commodi ipsum quia nostrum qui nesciunt. Officiis quia quia et iste et.', '2018-07-23 17:01:14', '2018-07-23 17:01:14'),
(102, 10, 3, 'Et aut velit sequi sunt modi molestiae. Est minus nam nisi similique sint omnis sint. Voluptas voluptatem eveniet sapiente pariatur quia ducimus. Accusamus qui et cumque pariatur.', '2018-07-23 17:01:14', '2018-07-23 17:01:14'),
(103, 10, 4, 'Adipisci vitae animi suscipit et quis. Occaecati reprehenderit sit voluptatum deserunt repudiandae voluptatem quidem. Quo vitae quisquam earum omnis reiciendis occaecati sunt.', '2018-07-23 17:01:14', '2018-07-23 17:01:14'),
(104, 10, 5, 'Exercitationem reprehenderit quo adipisci aut ipsam aut. Corporis qui saepe quasi similique minima qui. Eum unde velit voluptas eveniet illo.', '2018-07-23 17:01:14', '2018-07-23 17:01:14'),
(105, 10, 6, 'Ad nulla dolores dolorem. Sint praesentium vitae labore expedita accusantium nobis quae. Dolores asperiores cumque blanditiis pariatur quibusdam consequatur modi reprehenderit.', '2018-07-23 17:01:14', '2018-07-23 17:01:14'),
(106, 10, 7, 'Dolore dolor quae et consectetur non. Odio laboriosam vitae quia magnam consequatur. Occaecati illum itaque modi aut velit aliquid provident. Voluptatem eos et magnam in molestias quis.', '2018-07-23 17:01:14', '2018-07-23 17:01:14'),
(107, 10, 8, 'Repellat voluptatum eligendi ut inventore voluptatem. Tenetur asperiores qui consectetur nulla atque dolorem. Velit tempora ut fugiat aliquam qui iusto nihil sunt. Et ut tenetur sint ut voluptatem.', '2018-07-23 17:01:14', '2018-07-23 17:01:14'),
(108, 10, 9, 'Voluptatibus corrupti sed aut architecto. Atque commodi eius maxime impedit quo. Totam praesentium nesciunt iure natus porro ex. Delectus distinctio aspernatur provident velit minima.', '2018-07-23 17:01:14', '2018-07-23 17:01:14'),
(109, 10, 10, 'Nobis praesentium quae possimus nihil omnis. Et qui ullam dolore. Sed quos quibusdam deserunt similique aperiam praesentium.', '2018-07-23 17:01:15', '2018-07-23 17:01:15'),
(110, 10, 11, 'Rerum et laborum neque. Nobis nihil in sunt ipsam dolores labore velit vel. Veritatis voluptas sed tenetur reiciendis inventore dolores.', '2018-07-23 17:01:15', '2018-07-23 17:01:15'),
(111, 11, 1, 'Est magnam dicta ea dignissimos veritatis similique. Explicabo ratione rerum consequatur. Rerum exercitationem sequi doloribus ut facilis. Sapiente distinctio aut qui tempore.', '2018-07-23 17:01:15', '2018-07-23 17:01:15'),
(112, 11, 2, 'Aut et distinctio quia ut natus quas quia. Saepe ullam ut facere voluptas et. Delectus error aut enim alias et sapiente.', '2018-07-23 17:01:15', '2018-07-23 17:01:15'),
(113, 11, 3, 'Animi est qui laudantium animi. Excepturi quisquam fuga animi cupiditate. Eaque sunt autem at. Doloremque consequatur molestias nihil consequatur.', '2018-07-23 17:01:15', '2018-07-23 17:01:15'),
(114, 11, 4, 'Saepe dolores dolor et tempora. Quisquam placeat sint corrupti quam non voluptates. Non expedita maiores voluptatem.', '2018-07-23 17:01:15', '2018-07-23 17:01:15'),
(115, 11, 5, 'Dolorum qui animi quia libero omnis blanditiis. Perferendis sit quo et aut ullam voluptas itaque. Totam illum ratione quaerat quia velit sit omnis. Dolorum totam neque ut cupiditate et cum quia.', '2018-07-23 17:01:15', '2018-07-23 17:01:15'),
(116, 11, 6, 'Ex quaerat ut ut sunt nulla nobis. Similique ut voluptas porro omnis quidem aut. Aliquam corrupti nemo quo earum.', '2018-07-23 17:01:15', '2018-07-23 17:01:15'),
(117, 11, 7, 'Aut aut ratione molestiae repellendus a quas sint. Incidunt corporis dolores voluptas ducimus. Modi at et voluptates illo assumenda rerum. Adipisci officia voluptas possimus repudiandae eum natus.', '2018-07-23 17:01:16', '2018-07-23 17:01:16'),
(118, 11, 8, 'Rerum atque quaerat vitae et quaerat. Voluptatem asperiores maiores unde facilis placeat vero. Ex minus eos labore reiciendis adipisci ut. Voluptas ut aut eum tempore cupiditate iusto.', '2018-07-23 17:01:16', '2018-07-23 17:01:16'),
(119, 11, 9, 'Quasi consequatur ut enim alias. Unde omnis quod nobis et ducimus ut quo. Alias enim qui quis temporibus ut. Repudiandae velit enim sint illum quia enim.', '2018-07-23 17:01:16', '2018-07-23 17:01:16'),
(120, 11, 10, 'Ex ut id rerum tempora neque velit. Fugiat quis itaque est vel odit eos. Et natus perspiciatis reprehenderit eum ipsam ab qui at.', '2018-07-23 17:01:16', '2018-07-23 17:01:16'),
(121, 11, 11, 'Ex excepturi dignissimos aut. Eum aut debitis aut totam inventore quaerat omnis ut. Rerum alias voluptatem voluptates aspernatur.', '2018-07-23 17:01:16', '2018-07-23 17:01:16'),
(122, 12, 1, 'Quaerat impedit repudiandae est debitis ab non amet. Aliquid ratione et ad et. Vitae est eveniet natus quia et accusantium culpa. Beatae fugiat vitae similique dolorem.', '2018-07-23 17:01:16', '2018-07-23 17:01:16'),
(123, 12, 2, 'Itaque et nam ipsum consequatur. Nisi labore impedit qui officiis. Maiores debitis ut quisquam debitis fugiat et sint. Mollitia blanditiis quae omnis vel tempora.', '2018-07-23 17:01:16', '2018-07-23 17:01:16'),
(124, 12, 3, 'Esse libero assumenda consequatur tempora. Ratione facilis molestiae voluptatibus dolore iste necessitatibus ipsum. Esse soluta quidem non porro. Veniam id corporis dolore est molestiae odio nihil.', '2018-07-23 17:01:16', '2018-07-23 17:01:16'),
(125, 12, 4, 'Et et aut cumque facilis. Rem tenetur ea officiis. Quis et vel explicabo neque dolor.', '2018-07-23 17:01:16', '2018-07-23 17:01:16'),
(126, 12, 5, 'Qui ad aut quod vel quas doloremque. Quidem voluptatibus iure molestiae. Recusandae eius aperiam et at illum accusantium. Sequi quam perspiciatis ipsa rerum.', '2018-07-23 17:01:16', '2018-07-23 17:01:16'),
(127, 12, 6, 'Ex eveniet consequatur quo placeat. Nulla blanditiis qui explicabo nihil. Et expedita nemo molestias impedit.', '2018-07-23 17:01:16', '2018-07-23 17:01:16'),
(128, 12, 7, 'Non distinctio consequatur assumenda ipsa dignissimos. Aut odit eos voluptas voluptatibus repudiandae nihil exercitationem. Ut molestiae numquam voluptatibus.', '2018-07-23 17:01:16', '2018-07-23 17:01:16'),
(129, 12, 8, 'Vel porro praesentium aut. Ex quas est aspernatur perspiciatis ut est. Qui repudiandae nihil vitae voluptatem et quasi est.', '2018-07-23 17:01:16', '2018-07-23 17:01:16'),
(130, 12, 9, 'Totam quas laudantium illum. Enim quia natus nam natus voluptates ut est. Rem et officia quis qui. Dolor excepturi fugit saepe pariatur beatae sequi et quo.', '2018-07-23 17:01:16', '2018-07-23 17:01:16'),
(131, 12, 10, 'Explicabo libero ea id cum labore magni. Asperiores minima itaque sequi adipisci magnam illum est rerum. Facere sint sit eaque maiores excepturi eum.', '2018-07-23 17:01:16', '2018-07-23 17:01:16'),
(132, 12, 11, 'Voluptas ut dolorum voluptatem. Laborum sed aut facere repellat incidunt vero et.', '2018-07-23 17:01:17', '2018-07-23 17:01:17'),
(133, 13, 1, 'Velit quidem reiciendis ipsam blanditiis provident. Quisquam beatae odio et aliquid tenetur fugit asperiores. Dolores amet incidunt facilis molestiae est harum.', '2018-07-23 17:01:17', '2018-07-23 17:01:17'),
(134, 13, 2, 'Autem assumenda dolorum dolorum. Doloremque harum sed qui rerum omnis molestias. Est voluptatem sed quidem et saepe.', '2018-07-23 17:01:17', '2018-07-23 17:01:17'),
(135, 13, 3, 'Est voluptates sint est aut. Omnis doloribus qui quibusdam quo perferendis. Commodi debitis velit consequuntur et aliquam. Nam et at voluptatum dolores. Nam inventore quas aperiam eos.', '2018-07-23 17:01:17', '2018-07-23 17:01:17'),
(136, 13, 4, 'Et labore fuga ipsa delectus beatae. Aut provident quia aut laudantium et qui assumenda. Quae quos qui unde velit minus autem reprehenderit autem.', '2018-07-23 17:01:17', '2018-07-23 17:01:17'),
(137, 13, 5, 'Adipisci aut laudantium placeat repellat sed fugiat. Et dolor perspiciatis maiores omnis. At tenetur et sunt qui illum autem rerum.', '2018-07-23 17:01:17', '2018-07-23 17:01:17'),
(138, 13, 6, 'Maiores dolorem aut reiciendis qui ut officia quia. Sit qui hic assumenda minima sunt consectetur. Laborum quia iusto possimus libero consequatur quia voluptas. Rerum quam corporis quia iste iure.', '2018-07-23 17:01:17', '2018-07-23 17:01:17'),
(139, 13, 7, 'Reiciendis ex non aut perspiciatis eveniet possimus. Voluptatem facilis saepe omnis vero quo unde ex.', '2018-07-23 17:01:17', '2018-07-23 17:01:17'),
(140, 13, 8, 'Et velit distinctio suscipit doloribus odit eveniet laboriosam. Amet quia officiis in voluptatem dolore. Eius qui sunt sint. Est illo eos rerum.', '2018-07-23 17:01:17', '2018-07-23 17:01:17'),
(141, 13, 9, 'Quos ea est aperiam quasi. Atque expedita qui dicta sequi fuga repellat. Sapiente consectetur dicta enim unde culpa velit in.', '2018-07-23 17:01:17', '2018-07-23 17:01:17'),
(142, 13, 10, 'Sequi eius et porro earum maiores ab nemo. Ipsam corrupti sit voluptatem quibusdam. Ad nobis est assumenda libero.', '2018-07-23 17:01:17', '2018-07-23 17:01:17'),
(143, 13, 11, 'Doloremque voluptas velit molestias explicabo asperiores. Qui nihil ut enim asperiores qui. Omnis dolor provident deleniti. Iste incidunt nisi quasi vel.', '2018-07-23 17:01:17', '2018-07-23 17:01:17'),
(144, 14, 1, 'Et at consequuntur consequatur officia hic quis. Magni accusantium rem cum illum et. Et est quia et distinctio omnis.', '2018-07-23 17:01:17', '2018-07-23 17:01:17'),
(145, 14, 2, 'Officiis et consequatur qui maiores dolor. Sunt veritatis vel aut dolores ad quod. Cum aut suscipit velit suscipit exercitationem eum. Quas rerum numquam optio possimus quo est.', '2018-07-23 17:01:18', '2018-07-23 17:01:18'),
(146, 14, 3, 'Rerum id quos libero cum reiciendis consequatur velit rerum. Consequuntur quis quia vel quae quos odit ex. Fuga tempore omnis deserunt placeat porro.', '2018-07-23 17:01:18', '2018-07-23 17:01:18'),
(147, 14, 4, 'Eius qui et eum. Ipsa quis quisquam porro eligendi provident labore aut. Et non nisi et optio ducimus.', '2018-07-23 17:01:18', '2018-07-23 17:01:18'),
(148, 14, 5, 'Dolores facere esse saepe vel aut at ratione dolorem. Porro occaecati est in doloremque. Eligendi saepe enim tenetur veniam et tempore laboriosam aut. Mollitia optio esse voluptas iste.', '2018-07-23 17:01:18', '2018-07-23 17:01:18'),
(149, 14, 6, 'Non unde laudantium ipsum occaecati porro error nulla. Eaque facere soluta repellendus quibusdam iusto in. Vel sed necessitatibus debitis possimus.', '2018-07-23 17:01:18', '2018-07-23 17:01:18'),
(150, 14, 7, 'Laborum facilis omnis ut repellendus et. Sapiente ut nihil blanditiis iusto rerum in aperiam. Pariatur vel distinctio voluptas et.', '2018-07-23 17:01:18', '2018-07-23 17:01:18'),
(151, 14, 8, 'Sed eum maiores libero eaque. Labore asperiores aliquid facere vel in. Vero voluptatum quisquam earum expedita amet saepe.', '2018-07-23 17:01:18', '2018-07-23 17:01:18'),
(152, 14, 9, 'Aliquid et ex et sunt minus laboriosam rerum. Officiis quas non consequatur illum voluptate pariatur. Optio ipsam sapiente vero sequi.', '2018-07-23 17:01:18', '2018-07-23 17:01:18'),
(153, 14, 10, 'Architecto expedita aut odio vel. Illo sed architecto aut similique. Occaecati pariatur culpa consequatur iste.', '2018-07-23 17:01:18', '2018-07-23 17:01:18'),
(154, 14, 11, 'Et possimus cumque voluptas. Doloremque sed ab vel corrupti optio. Dolore enim laboriosam animi reprehenderit. Voluptas tenetur aut ea qui unde iste odio aliquam.', '2018-07-23 17:01:18', '2018-07-23 17:01:18'),
(155, 15, 1, 'Corrupti ab consequuntur et. Repudiandae ipsum harum dolorem quis et exercitationem sed qui.', '2018-07-23 17:01:18', '2018-07-23 17:01:18'),
(156, 15, 2, 'Est consequatur quos expedita dolor. Sint quos nihil suscipit earum autem aut dolor.', '2018-07-23 17:01:18', '2018-07-23 17:01:18'),
(157, 15, 3, 'Sint doloremque ut magni id molestiae alias repellendus. Aut numquam non voluptate perferendis illum qui. Et quod cum perferendis voluptatibus exercitationem quisquam quo.', '2018-07-23 17:01:18', '2018-07-23 17:01:18'),
(158, 15, 4, 'Iste repellat ab et fugiat doloremque. Quo fugit vel et quibusdam culpa velit commodi dignissimos. Doloremque et ipsam expedita.', '2018-07-23 17:01:19', '2018-07-23 17:01:19'),
(159, 15, 5, 'Qui deserunt id ipsam aut cumque facilis. Quisquam quis ut consequatur ut voluptas ut. In consequatur sunt et reiciendis autem. Sit vel commodi odit autem ut enim.', '2018-07-23 17:01:19', '2018-07-23 17:01:19'),
(160, 15, 6, 'Ut non delectus quis voluptatum. Nisi commodi aut officia in. Officia quia sit quisquam sit.', '2018-07-23 17:01:19', '2018-07-23 17:01:19'),
(161, 15, 7, 'Est commodi ad praesentium iste est sint inventore nulla. Ducimus iste ducimus commodi nihil quis et est.', '2018-07-23 17:01:19', '2018-07-23 17:01:19'),
(162, 15, 8, 'A aliquid quia nesciunt dolores repellat velit et. Id veritatis accusamus molestias aspernatur quidem. Nobis est laborum eos.', '2018-07-23 17:01:19', '2018-07-23 17:01:19'),
(163, 15, 9, 'Sit et fuga explicabo ut aut et et. Dolorem asperiores fugiat enim et. Hic repudiandae corporis laborum voluptatibus consequatur tenetur eos. Eaque necessitatibus necessitatibus et.', '2018-07-23 17:01:19', '2018-07-23 17:01:19'),
(164, 15, 10, 'Aut tenetur velit dicta sint provident sit. Sit minima ex fuga minus dolorem. Nemo autem sequi sit ut. Quod tempore et aut ut dolor qui.', '2018-07-23 17:01:19', '2018-07-23 17:01:19'),
(165, 15, 11, 'Accusamus cupiditate eius quo. Quia necessitatibus sint sed saepe voluptatibus sapiente vero odio. Modi unde in sed similique. Ut odio amet officiis enim atque.', '2018-07-23 17:01:19', '2018-07-23 17:01:19'),
(166, 16, 1, 'Quia aliquam dignissimos deleniti fugit dolor perspiciatis labore. Illum deserunt illum repudiandae dolore ullam vel. Sequi sunt exercitationem quia qui et optio.', '2018-07-23 17:01:19', '2018-07-23 17:01:19'),
(167, 16, 2, 'Rerum et libero repellendus pariatur distinctio ut ut. Voluptas non qui et veritatis ipsum ea. Possimus neque deleniti quod dolores id rerum.', '2018-07-23 17:01:19', '2018-07-23 17:01:19'),
(168, 16, 3, 'Perspiciatis in et voluptatem sit sed. Sint sapiente provident rerum occaecati. Voluptas laboriosam magni totam.', '2018-07-23 17:01:19', '2018-07-23 17:01:19'),
(169, 16, 4, 'Corporis quos odit nam eum. Vel laborum quisquam nemo nam labore. Autem reiciendis nihil dignissimos occaecati beatae. Minima sint qui iusto et est perferendis facilis.', '2018-07-23 17:01:19', '2018-07-23 17:01:19'),
(170, 16, 5, 'Iure incidunt et voluptatibus sit incidunt molestiae nam. Ea totam ut voluptate labore. Ea nihil quam perferendis dolorem aut sed. Animi explicabo repellat provident mollitia omnis dolorem.', '2018-07-23 17:01:19', '2018-07-23 17:01:19'),
(171, 16, 6, 'Enim voluptas ea omnis maiores deserunt voluptatibus. Nihil sunt voluptas deleniti et quo nemo deleniti. Et tempora cum blanditiis debitis repellendus veniam ad.', '2018-07-23 17:01:20', '2018-07-23 17:01:20'),
(172, 16, 7, 'Mollitia excepturi quis voluptates et accusantium. Qui rerum totam possimus accusamus illo ut quo.', '2018-07-23 17:01:20', '2018-07-23 17:01:20'),
(173, 16, 8, 'Quam similique autem quia natus. Aliquam non dolor et et vero temporibus. Quod temporibus modi voluptatum culpa. Delectus omnis culpa magni soluta.', '2018-07-23 17:01:20', '2018-07-23 17:01:20'),
(174, 16, 9, 'Laudantium voluptatibus incidunt laboriosam. Officiis voluptate eius quidem occaecati. Ut eaque est velit itaque voluptate est temporibus. Officiis sequi distinctio est sint molestiae at enim vero.', '2018-07-23 17:01:20', '2018-07-23 17:01:20'),
(175, 16, 10, 'Alias minus et ea ea. Eos autem ipsa voluptas sunt quia. Facilis nulla qui beatae similique.', '2018-07-23 17:01:20', '2018-07-23 17:01:20'),
(176, 16, 11, 'Omnis quia distinctio repellat deleniti omnis a aut. Ipsum unde dolorum veniam autem ad aut. In labore nihil unde consequatur et. Et quia voluptas quo molestiae. Iusto omnis autem quia.', '2018-07-23 17:01:20', '2018-07-23 17:01:20'),
(177, 17, 1, 'Ut et ut aut totam. Sed est sapiente repellat modi. Officia voluptatem cum sequi sit qui.', '2018-07-23 17:01:20', '2018-07-23 17:01:20'),
(178, 17, 2, 'Distinctio ea pariatur similique placeat corrupti quo sed. Voluptates quas sed pariatur temporibus. Et nemo id et accusamus veritatis occaecati.', '2018-07-23 17:01:20', '2018-07-23 17:01:20'),
(179, 17, 3, 'Et voluptatibus impedit dignissimos deserunt molestiae eaque. Velit quibusdam ipsam consequatur aperiam omnis architecto placeat. Distinctio distinctio doloremque rerum id at ex aut.', '2018-07-23 17:01:20', '2018-07-23 17:01:20'),
(180, 17, 4, 'Alias suscipit eum libero quasi. At nostrum voluptatem deserunt totam at et et et. Eius neque non aut porro.', '2018-07-23 17:01:20', '2018-07-23 17:01:20'),
(181, 17, 5, 'Non architecto vel pariatur sed sed quaerat voluptates. Rerum reiciendis veritatis quis rerum temporibus. Recusandae animi quasi magni illo quas.', '2018-07-23 17:01:20', '2018-07-23 17:01:20'),
(182, 17, 6, 'Exercitationem eius ut porro debitis qui ut et. Quas voluptas ipsam consequatur fugiat quia vel pariatur. Officia alias animi voluptatem deleniti ut et provident. Tenetur nobis error et et quam.', '2018-07-23 17:01:20', '2018-07-23 17:01:20'),
(183, 17, 7, 'Numquam debitis dolor voluptatem et repudiandae similique. Ad qui error molestiae amet. Atque culpa accusantium odio et in eligendi.', '2018-07-23 17:01:20', '2018-07-23 17:01:20'),
(184, 17, 8, 'Nesciunt placeat aliquid non illo rem voluptatem qui. Facilis maiores voluptates doloribus cumque laboriosam perferendis officia. Et tenetur voluptatem voluptatibus qui.', '2018-07-23 17:01:21', '2018-07-23 17:01:21'),
(185, 17, 9, 'Voluptatem quia omnis occaecati quia. Aliquid qui ipsam dignissimos temporibus consectetur et et laborum.', '2018-07-23 17:01:21', '2018-07-23 17:01:21'),
(186, 17, 10, 'Neque suscipit quo autem temporibus non ut laborum sit. Fugit tempora harum nemo at et minus blanditiis. Quod non et et facere.', '2018-07-23 17:01:21', '2018-07-23 17:01:21'),
(187, 17, 11, 'Velit beatae dicta rerum. Quisquam sed sed amet. Eum dolorem sequi earum minima porro. Et sunt voluptate esse et vel minima.', '2018-07-23 17:01:21', '2018-07-23 17:01:21'),
(188, 18, 1, 'At ut quis ipsa numquam. Iusto harum ipsum qui deserunt aliquid porro officia. Deleniti maxime et ipsum culpa iusto iste sint eligendi.', '2018-07-23 17:01:21', '2018-07-23 17:01:21'),
(189, 18, 2, 'Ratione ipsam et maxime quo corrupti aut. Qui tempore voluptas vero voluptas eligendi ratione. Earum in molestias et accusamus possimus ducimus aperiam eius.', '2018-07-23 17:01:21', '2018-07-23 17:01:21'),
(190, 18, 3, 'Est sint sed facilis ab autem enim est at. Perspiciatis esse nihil odio itaque. Facilis eius est odio sed explicabo aliquam.', '2018-07-23 17:01:21', '2018-07-23 17:01:21'),
(191, 18, 4, 'Ad et praesentium quia in sequi odio. Praesentium deserunt sunt est consequatur quis tenetur illum laudantium. Delectus quo in ea quia eos. Odio omnis debitis vitae earum vero.', '2018-07-23 17:01:21', '2018-07-23 17:01:21'),
(192, 18, 5, 'Minus aut repellendus laborum et. Enim sequi a nihil dolore quia. Molestiae ratione consequatur illo dolor quas aut.', '2018-07-23 17:01:21', '2018-07-23 17:01:21'),
(193, 18, 6, 'Eum ad deserunt error aut quam. Hic omnis molestiae rerum. Saepe numquam ut unde recusandae eum. Beatae mollitia qui voluptatem voluptatem nobis explicabo ducimus voluptatem.', '2018-07-23 17:01:21', '2018-07-23 17:01:21'),
(194, 18, 7, 'Eaque voluptatem quidem nam odit recusandae quisquam eligendi aliquam. Molestiae labore soluta consequatur voluptatem a. Perferendis amet quae cum minus voluptatem.', '2018-07-23 17:01:21', '2018-07-23 17:01:21'),
(195, 18, 8, 'Architecto non quia itaque est. Ex dolorem qui veritatis nulla. Sunt qui ea eligendi ad. Dolorum veniam commodi vitae autem a.', '2018-07-23 17:01:21', '2018-07-23 17:01:21'),
(196, 18, 9, 'Molestiae eius maxime placeat ut. Consectetur cupiditate recusandae suscipit similique. Aut deserunt quia enim odit.', '2018-07-23 17:01:21', '2018-07-23 17:01:21'),
(197, 18, 10, 'Voluptatem tempore voluptatum nihil et asperiores. Aspernatur velit voluptatum sit tempore qui ea. Eum quis dolor voluptatem rerum omnis. Omnis qui nesciunt quia animi fugit illum ut.', '2018-07-23 17:01:22', '2018-07-23 17:01:22'),
(198, 18, 11, 'Eaque sed quae nam blanditiis. Nostrum officiis quia vel eos qui molestiae consectetur. Dolore omnis at dolor vitae et dolor. In reprehenderit sunt ut cum.', '2018-07-23 17:01:22', '2018-07-23 17:01:22'),
(199, 19, 1, 'Fuga consequatur consectetur sunt modi officia sit. Occaecati dolore cum et voluptas fugiat quia distinctio.', '2018-07-23 17:01:22', '2018-07-23 17:01:22'),
(200, 19, 2, 'Exercitationem aut at voluptas sequi magnam cumque sed. Dolorum officia quia aspernatur quisquam dicta voluptas.', '2018-07-23 17:01:22', '2018-07-23 17:01:22'),
(201, 19, 3, 'Voluptas officia dignissimos unde soluta natus quibusdam explicabo. Nulla facere quia unde consequuntur voluptas.', '2018-07-23 17:01:22', '2018-07-23 17:01:22'),
(202, 19, 4, 'Possimus expedita rem non quia alias. Maxime ea dignissimos dolor assumenda vel. Aut qui ea harum ea assumenda molestiae.', '2018-07-23 17:01:22', '2018-07-23 17:01:22'),
(203, 19, 5, 'Dicta similique nisi et. Dolores ab distinctio atque. Animi est aut commodi in.', '2018-07-23 17:01:22', '2018-07-23 17:01:22'),
(204, 19, 6, 'Quibusdam explicabo quo doloremque aut. Quia nesciunt qui accusamus. Est omnis rerum numquam odit ex dolores.', '2018-07-23 17:01:22', '2018-07-23 17:01:22'),
(205, 19, 7, 'Inventore distinctio quia tempora repellat. Pariatur atque odio magnam nihil facere ut similique. Vitae deserunt cum ut molestiae.', '2018-07-23 17:01:22', '2018-07-23 17:01:22'),
(206, 19, 8, 'Voluptatem quas earum ex qui totam. Quas modi labore et odio culpa optio similique. Magni sed omnis ratione vitae nesciunt molestias. Ea molestiae ratione repellendus mollitia enim tempora.', '2018-07-23 17:01:22', '2018-07-23 17:01:22'),
(207, 19, 9, 'Voluptatem repudiandae et modi voluptatem sit ex occaecati est. Voluptas officia deleniti ullam aperiam autem expedita. Illo maxime a sapiente vero mollitia nulla tenetur.', '2018-07-23 17:01:22', '2018-07-23 17:01:22'),
(208, 19, 10, 'Soluta sit quidem voluptatem atque. Repudiandae ut minima doloremque neque eligendi. Sed adipisci atque quaerat debitis quia.', '2018-07-23 17:01:22', '2018-07-23 17:01:22'),
(209, 19, 11, 'Dicta molestiae distinctio autem pariatur delectus. Itaque aperiam temporibus dicta nesciunt numquam. Blanditiis magni accusantium sunt nulla non mollitia.', '2018-07-23 17:01:22', '2018-07-23 17:01:22'),
(210, 20, 1, 'Libero a fuga nobis quos sint commodi eius. Ipsum tempora cumque numquam dolores eaque et quisquam.', '2018-07-23 17:01:23', '2018-07-23 17:01:23'),
(211, 20, 2, 'Veniam voluptatem non ab quisquam nostrum eaque culpa. Velit in dolor ipsam est et quasi nobis. Quis consequatur dolor veniam aut maxime iusto. Est ea atque nihil nulla delectus fugiat.', '2018-07-23 17:01:23', '2018-07-23 17:01:23'),
(212, 20, 3, 'Sequi animi optio est deserunt est aut commodi impedit. Et qui harum eius aut. Et blanditiis et nostrum voluptatem quo voluptatem id. Non impedit totam rerum iure laboriosam sint.', '2018-07-23 17:01:23', '2018-07-23 17:01:23'),
(213, 20, 4, 'Occaecati quo ut quo asperiores itaque. Sit ut deserunt quasi amet reiciendis. Assumenda sint iure sit voluptatem qui autem fuga. Aut voluptas mollitia placeat ratione iure a veritatis.', '2018-07-23 17:01:23', '2018-07-23 17:01:23'),
(214, 20, 5, 'Repellat reiciendis est unde ea sint voluptas. Quos dolor fuga totam qui voluptatem corrupti. Id expedita voluptatem ut unde eos excepturi debitis. Nemo ad et quae adipisci ullam sequi.', '2018-07-23 17:01:23', '2018-07-23 17:01:23'),
(215, 20, 6, 'Qui et nostrum sit officia ipsa sequi eos. Placeat laboriosam et eum aut ut quidem.', '2018-07-23 17:01:23', '2018-07-23 17:01:23'),
(216, 20, 7, 'Sapiente culpa non et est sit expedita. Omnis aspernatur nihil consectetur dolor. Sit asperiores numquam molestiae sunt.', '2018-07-23 17:01:23', '2018-07-23 17:01:23'),
(217, 20, 8, 'Nihil soluta nobis qui voluptate ab cumque. Maiores sint ullam ducimus ut sed. Dolores eum qui quia blanditiis.', '2018-07-23 17:01:23', '2018-07-23 17:01:23'),
(218, 20, 9, 'Suscipit delectus quam deleniti consequatur velit mollitia. Saepe facere recusandae tempora autem. Consequatur voluptatum ea repudiandae delectus.', '2018-07-23 17:01:23', '2018-07-23 17:01:23'),
(219, 20, 10, 'Quo enim odio iure excepturi officiis. Reiciendis iure placeat pariatur praesentium ipsam sunt. Laudantium id numquam hic magni sed ut omnis impedit. Eos deserunt nihil maiores nemo praesentium.', '2018-07-23 17:01:23', '2018-07-23 17:01:23'),
(220, 20, 11, 'Quae pariatur sint culpa nihil. Sit quaerat est minus in. Odio eos quam consequatur est recusandae nisi.', '2018-07-23 17:01:23', '2018-07-23 17:01:23');

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
(1, 'Juston Pagac', 0, '/img/profile/avatar/avatar.jpg', 'ella.lemke@yahoo.com', '$2y$10$jn2xM2SAOnBw/L/EVImSuOUH7LVWDxqV2z0IcmLXJiNwHL5Gg.G0i', NULL, '2018-07-23 17:01:01', '2018-07-23 17:01:01'),
(2, 'Rex Konopelski', 0, '/img/profile/avatar/avatar.jpg', 'mueller.cristobal@hotmail.com', '$2y$10$gIta1SoUIfeLE/nmOAnkxu1HJp.RPDdkooTOmJXRoyDPI4TLiJzhq', NULL, '2018-07-23 17:01:01', '2018-07-23 17:01:01'),
(3, 'Matilda Mayert', 0, '/img/profile/avatar/avatar.jpg', 'vallie84@schmidt.org', '$2y$10$jviBgRJfzcStaBtU2zETcuu7CQtD3O6dFdJ8GkY80hDTcMCtjPwQm', NULL, '2018-07-23 17:01:01', '2018-07-23 17:01:01'),
(4, 'Cade Gutkowski V', 0, '/img/profile/avatar/avatar.jpg', 'gerhold.carter@sauer.com', '$2y$10$/vUDJQ02PUzEccxOpSKx3.rKrcatagaBMVrsj/oZ677SnDtPN5zn.', NULL, '2018-07-23 17:01:01', '2018-07-23 17:01:01'),
(5, 'Giles Koss', 0, '/img/profile/avatar/avatar.jpg', 'zbogisich@adams.com', '$2y$10$VufsK1lWprzE4JWqPNXmDuhYSqYR8EI9kC2u2vM31iDy5P2Psill6', NULL, '2018-07-23 17:01:01', '2018-07-23 17:01:01'),
(6, 'Erika Rath', 0, '/img/profile/avatar/avatar.jpg', 'monserrate.cummings@gmail.com', '$2y$10$HQXQ/NT27C.x/AdlOfFB6e2mviq40gOSd0yA3.jUU0mCOPemgSUX6', NULL, '2018-07-23 17:01:02', '2018-07-23 17:01:02'),
(7, 'Lysanne Carroll', 0, '/img/profile/avatar/avatar.jpg', 'alexys.torp@gmail.com', '$2y$10$WBZdznDyLMChA/Nyg/.6tezzpxtLUSOBIQZMo5GMCF3hSPhovo/LW', NULL, '2018-07-23 17:01:02', '2018-07-23 17:01:02'),
(8, 'Lambert Breitenberg II', 0, '/img/profile/avatar/avatar.jpg', 'elvie06@gleichner.com', '$2y$10$epl4Tb8f9dW.G3tmCqczHepIvvTEZxJWztvuqaDFKwQYD75J.5YCy', NULL, '2018-07-23 17:01:02', '2018-07-23 17:01:02'),
(9, 'Diamond Kulas', 0, '/img/profile/avatar/avatar.jpg', 'trantow.jamaal@satterfield.com', '$2y$10$7LJeIWptWrH2eEUPv.iwHupL9JXgAvs3nVrjq.mwxVfLsyQu47ucK', NULL, '2018-07-23 17:01:02', '2018-07-23 17:01:02'),
(10, 'Doris Considine', 0, '/img/profile/avatar/avatar.jpg', 'rbeahan@hotmail.com', '$2y$10$s8WrBaZVnFDRK6qA03k0t.O8baus/JOPUUGJfN32FF4XOQ1eFjbtS', NULL, '2018-07-23 17:01:02', '2018-07-23 17:01:02'),
(11, 'Malvina Steuber', 1, '/img/profile/avatar/avatar.jpg', 'admin@niaswisata.com', '$2y$10$1rOFy2bnsKO9yRoQyj5yceFakWKfCxKJmEkPoJ461qZV42fXFZCei', NULL, '2018-07-23 17:01:02', '2018-07-23 17:01:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisatas`
--

CREATE TABLE `wisatas` (
  `id` int(10) UNSIGNED NOT NULL,
  `wisata_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_id` int(10) UNSIGNED DEFAULT NULL,
  `wisata_gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wisata_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wisata_rating` int(11) NOT NULL,
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

INSERT INTO `wisatas` (`id`, `wisata_name`, `artikel_id`, `wisata_gambar`, `wisata_video`, `wisata_rating`, `wisata_lokasi`, `wisata_jenis_id`, `latitude`, `longtitude`, `created_at`, `updated_at`) VALUES
(1, 'Sabryna Schultz', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '4736 Heath Underpass Suite 850\nKalliechester, MO 65431-6632', 1, '-31.908628', '-171.810121', '2018-07-23 17:01:07', '2018-07-23 17:01:07'),
(2, 'Miss Elfrieda Lubowitz IV', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '573 Windler Pine Suite 360\nWest Rettaview, NJ 60200-9691', 1, '5.028802', '-52.577949', '2018-07-23 17:01:08', '2018-07-23 17:01:08'),
(3, 'Ms. Sadie Hane', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '47518 Powlowski Row\nDouglasshire, RI 91367', 1, '64.952508', '-122.220888', '2018-07-23 17:01:08', '2018-07-23 17:01:08'),
(4, 'Laron Bogan', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '89440 Margaretta Union\nAlizeborough, NH 59053-8469', 1, '-8.87995', '142.039694', '2018-07-23 17:01:09', '2018-07-23 17:01:09'),
(5, 'Rolando Jacobs', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '840 Keeling Divide Apt. 390\nEast Vida, DC 21671', 1, '6.287664', '66.975045', '2018-07-23 17:01:10', '2018-07-23 17:01:10'),
(6, 'Andy Abshire III', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '4743 Florida Curve Suite 781\nAdahborough, OK 32043', 1, '35.046121', '77.134705', '2018-07-23 17:01:11', '2018-07-23 17:01:11'),
(7, 'Mr. Israel Kuphal', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '6164 Koepp Run\nNew Gwendolyn, CT 79088-9727', 1, '-60.378358', '99.680797', '2018-07-23 17:01:11', '2018-07-23 17:01:11'),
(8, 'Hermina Boehm DVM', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '3884 Roberta Light\nSouth Elissa, OR 55333-1558', 1, '-69.031367', '149.865113', '2018-07-23 17:01:12', '2018-07-23 17:01:12'),
(9, 'Geraldine Nicolas', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '9553 Schmeler Trafficway\nAltenwerthchester, ID 67194-9359', 1, '-7.230989', '-121.228561', '2018-07-23 17:01:13', '2018-07-23 17:01:13'),
(10, 'Kacie Fisher IV', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '45070 Swift Corner Suite 986\nBennyborough, ID 94570-2232', 1, '-31.98407', '172.846016', '2018-07-23 17:01:14', '2018-07-23 17:01:14'),
(11, 'Prof. Estel Schiller III', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '416 Ernser Springs\nKavonburgh, MD 91985', 1, '-33.248214', '-176.641542', '2018-07-23 17:01:15', '2018-07-23 17:01:15'),
(12, 'Miss Rafaela Cartwright', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '517 Josianne Circle Suite 742\nSchoenland, MS 87434', 1, '80.996964', '100.029048', '2018-07-23 17:01:16', '2018-07-23 17:01:16'),
(13, 'Moriah Rutherford', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '9240 Monahan Villages Apt. 142\nSouth Damion, PA 92243', 1, '68.672915', '176.709564', '2018-07-23 17:01:17', '2018-07-23 17:01:17'),
(14, 'Ms. Shawna Kling I', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '502 Bins Walk Apt. 258\nNorth Deshawn, DC 84667', 1, '58.527434', '147.05086', '2018-07-23 17:01:17', '2018-07-23 17:01:17'),
(15, 'Maurine Predovic V', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '810 Walsh Heights Apt. 736\nPort Zakary, TX 56374-8215', 1, '22.74746', '127.790884', '2018-07-23 17:01:18', '2018-07-23 17:01:18'),
(16, 'Israel Lang', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '155 Harvey Mountain Apt. 451\nSchmittview, AZ 23352', 1, '55.221596', '85.222846', '2018-07-23 17:01:19', '2018-07-23 17:01:19'),
(17, 'Efrain Kunde', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '54548 Fadel Hollow Suite 022\nJustinehaven, SC 06838', 1, '66.994492', '-112.887863', '2018-07-23 17:01:20', '2018-07-23 17:01:20'),
(18, 'Janice Adams', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '864 Gleason Highway Apt. 353\nElwynbury, NJ 80470', 1, '-37.983324', '-119.555619', '2018-07-23 17:01:21', '2018-07-23 17:01:21'),
(19, 'Theresa McGlynn', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '50167 Daugherty Shoals Apt. 355\nGreenfelderborough, IA 63500', 1, '-25.966177', '-45.688101', '2018-07-23 17:01:22', '2018-07-23 17:01:22'),
(20, 'Mayra Wuckert', 30, '/img/img-wisata/wisata_001.jpeg', '/', 5, '50997 Hickle Drive Apt. 981\nEast Addieville, CO 35497', 1, '-70.683184', '63.339164', '2018-07-23 17:01:22', '2018-07-23 17:01:22');

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
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuliners`
--
ALTER TABLE `kuliners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `budayas`
--
ALTER TABLE `budayas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jeniswisatas`
--
ALTER TABLE `jeniswisatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kuliners`
--
ALTER TABLE `kuliners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT for table `transportasis`
--
ALTER TABLE `transportasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ulasans`
--
ALTER TABLE `ulasans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wisatas`
--
ALTER TABLE `wisatas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `acaradanfestivals`
--
ALTER TABLE `acaradanfestivals`
  ADD CONSTRAINT `acaradanfestivals_artikel_id_foreign` FOREIGN KEY (`artikel_id`) REFERENCES `artikels` (`id`);

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
-- Ketidakleluasaan untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `wisatas_artikel_id_foreign` FOREIGN KEY (`artikel_id`) REFERENCES `artikels` (`id`),
  ADD CONSTRAINT `wisatas_wisata_jenis_id_foreign` FOREIGN KEY (`wisata_jenis_id`) REFERENCES `jeniswisatas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
