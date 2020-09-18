-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 12:55 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bonafriqana`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maureen', '123456789', 'maureen@gmail.com', NULL, '$2y$10$yJ4yqenbzTNGywG8ov7Rv.Gp3xi3CMxAxJZvC/QMyae1E2uhU.V96', NULL, '2020-08-27 14:15:49', '2020-09-05 14:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `created_at`, `updated_at`) VALUES
(11, 'Face', '', '2020-09-04 12:23:10', '2020-09-04 12:23:10'),
(12, 'Skin', '', '2020-09-04 12:23:19', '2020-09-04 12:23:19'),
(13, 'Body', '', '2020-09-04 12:23:26', '2020-09-04 12:23:26'),
(14, 'Hair', '', '2020-09-04 12:23:33', '2020-09-04 12:23:33'),
(15, 'Nails', '', '2020-09-04 12:23:54', '2020-09-04 12:23:54'),
(16, 'Without', '', '2020-09-04 13:44:33', '2020-09-04 13:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon`, `discount`, `created_at`, `updated_at`) VALUES
(2, 'facemask', '20', NULL, NULL),
(3, 'lipsync', '10', NULL, NULL),
(5, 'camera', '5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_27_155344_create_admins_table', 1),
(5, '2020_08_31_092811_create_procategories_table', 2),
(6, '2020_08_31_092925_create_blogcategories_table', 2),
(7, '2020_08_31_093217_create_prosubcategories_table', 2),
(8, '2020_08_31_093318_create_blogsubcategories_table', 2),
(9, '2020_08_31_095140_create_categories_table', 3),
(10, '2020_08_31_095242_create_subcategories_table', 3),
(11, '2020_09_02_171100_create_coupons_table', 4),
(12, '2020_09_02_193813_create_newsletters_table', 5),
(13, '2020_09_03_070022_create_products_table', 6),
(14, '2020_09_04_105249_create_post_category_table', 7),
(15, '2020_09_04_105339_create_posts_table', 7),
(16, '2020_09_12_090459_create_wishlists_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(2, 'maureen3244@gmail.com', '2020-09-02 20:09:10', NULL),
(3, 'joeljoel123@gmail.com', '2020-09-02 20:11:49', NULL),
(4, 'maureen123@gmail.com', '2020-09-02 20:20:33', NULL),
(6, 'v@d', '2020-09-03 07:09:25', NULL),
(7, 'v@3', '2020-09-03 07:14:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('joeljoel3244@gmail.com', '$2y$10$WzyYv2m5rrncD9N5pDOgfOvAfE2HrXmJ3cDI.cUFwMkb4ZUKfMx46', '2020-09-05 14:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `post_title`, `post_image`, `details`, `created_at`, `updated_at`) VALUES
(2, 1, 'Women\'s Day', 'images/post/1676916623420464.png', '<p><span style=\"font-family: Lato, sans-serif; font-size: 16px; background-color: rgb(255, 255, 0);\"><font color=\"#000000\"><b>PERFORM</b></font></span><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'facial makeupd', NULL, NULL),
(3, 'makeup face', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_slider` int(11) DEFAULT NULL,
  `hot_deal` int(11) DEFAULT NULL,
  `best_rated` int(11) DEFAULT NULL,
  `mid_slider` int(11) DEFAULT NULL,
  `hot_new` int(11) DEFAULT NULL,
  `trend` int(11) DEFAULT NULL,
  `buyone_getone` int(30) DEFAULT NULL,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `product_name`, `product_code`, `product_quantity`, `product_details`, `product_color`, `product_size`, `selling_price`, `discount_price`, `video_link`, `main_slider`, `hot_deal`, `best_rated`, `mid_slider`, `hot_new`, `trend`, `buyone_getone`, `image_one`, `image_two`, `image_three`, `image_four`, `status`, `created_at`, `updated_at`) VALUES
(10, 11, 8, 'himalaya', '505757', '15', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'white,beige', 'sm,lg', '1000', '20', NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 'images/product/1676923598704901.jpg', 'images/product/1676923598931721.jpg', 'images/product/1676923598964157.jpg', 'images/product/1676923599122585.jpg', 1, NULL, NULL),
(11, 11, 8, 'asdfgj', '345271', '64', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'blue,purple', 'sm,lg', '1300', '250', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'images/product/1676924606311520.jpg', 'images/product/1676924606385122.jpg', 'images/product/1676924606410097.jpg', 'images/product/1676924606434102.jpg', 1, NULL, NULL),
(12, 11, 9, 'violetsebruweuru', '893203', '82', '<div class=\"maghny-gd-1 blog-pt-grid mb-5\" style=\"font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-family: Lato, sans-serif; line-height: 1.5; color: rgb(107, 119, 141);\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</p></div><div><br></div>', 'green,red', NULL, '800', '50', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'images/product/1676924781441453.jpg', 'images/product/1676924781614074.jpg', 'images/product/1676924781672755.jpg', 'images/product/1676924781758288.jpg', 1, NULL, NULL),
(13, 11, 9, 'indigo', '526781', '74', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'yellow,orange', 'sm,lg', '1200', '150', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'images/product/1676924940964846.jpg', 'images/product/1676924941173374.jpg', 'images/product/1676924941286268.jpg', 'images/product/1676924941482693.jpg', 1, NULL, NULL),
(14, 11, 10, 'sdfgf', '627910', '45', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'black,cream', 'sm,lg', '750', '50', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'images/product/1676925161043233.jpg', 'images/product/1676925161254199.jpg', 'images/product/1676925161279107.jpg', 'images/product/1676925161333489.png', 1, NULL, NULL),
(15, 11, 10, 'sxcvb', '294018', '29', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'violet,indigo', 'sm,lg', '950', '100', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 'images/product/1676925322414748.jpg', 'images/product/1676925322458338.jpg', 'images/product/1676925322498287.jpg', 'images/product/1676925322542806.png', 1, NULL, NULL),
(16, 11, 11, 'qwert', '184732', '73', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'white,brown', 'sm,lg', '1000', '200', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'images/product/1676925484665918.png', 'images/product/1676925484943679.jpg', 'images/product/1676925484986714.png', 'images/product/1676925485326481.jpg', 1, NULL, NULL),
(17, 11, 11, 'kjhgf', '438946', '84', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'beige,orange', 'sm,lg', '1100', '150', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 'images/product/1676925627076127.jpg', 'images/product/1676925627150338.jpg', 'images/product/1676925627241327.jpg', 'images/product/1676925627272843.jpg', 1, NULL, NULL),
(18, 11, 12, 'poiui', '564286', '67', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'indigo,gree', 'sm,lg', '850', '150', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'images/product/1676925771505967.jpg', 'images/product/1676925771753077.jpg', 'images/product/1676925771835798.jpg', 'images/product/1676925771910659.jpg', 1, NULL, NULL),
(19, 11, 12, 'mnbvc', '894563', '67', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'cream,yellow', 'sm,lg', '750', '50', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'images/product/1676925886583661.jpg', 'images/product/1676925886682982.png', 'images/product/1676925887071052.jpg', 'images/product/1676925887103548.jpg', 1, NULL, NULL),
(20, 12, 13, 'nivea', '384567', '20', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'pink,white', 'sm,lg', '600', '30', NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, 'images/product/1676926401340960.jpg', 'images/product/1676926401393163.png', 'images/product/1676926401710488.jpg', 'images/product/1676926401752520.jpg', 1, NULL, NULL),
(21, 12, 13, 'castor', '111111', '25', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'pink,black', 'sm,lg', '1200', '30', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, 'images/product/1676926526020055.jpg', 'images/product/1676926526162195.png', 'images/product/1676926526515755.jpg', 'images/product/1676926526686901.jpg', 1, NULL, NULL),
(22, 12, 17, 'africana', '333900', '30', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'yellow,white', 'sm,lg', '500', '25', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, 'images/product/1676926667887439.jpg', 'images/product/1676926668108788.jpg', 'images/product/1676926668194102.jpg', 'images/product/1676926668434951.png', 1, NULL, NULL),
(23, 12, 17, 'khaki', '777654', '40', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'green,yellow', 'sm,lg', '200', '30', NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 'images/product/1676926806972435.jpg', 'images/product/1676926807111868.jpg', 'images/product/1676926807190649.jpg', 'images/product/1676926807308484.jpg', 1, NULL, NULL),
(24, 12, 18, 'safisha', '776643', '50', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'red,pink', 'sm,lg', '150', '10', NULL, 1, NULL, NULL, NULL, NULL, 1, NULL, 'images/product/1676926966697113.jpg', 'images/product/1676926966840578.jpg', 'images/product/1676926966924447.jpg', 'images/product/1676926967036783.png', 1, NULL, NULL),
(25, 12, 18, 'glovo', '447765', '30', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'grey,brown', 'sm,lg', '700', '50', NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, 'images/product/1676927441370410.jpg', 'images/product/1676927441546477.jpg', 'images/product/1676927441633157.png', 'images/product/1676927441857874.jpg', 1, NULL, NULL),
(26, 12, 19, 'bolt', '227783', '15', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'pink,blue', 'sm,lg', '1000', '40', NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 'images/product/1676927544725019.jpg', 'images/product/1676927544946774.jpg', 'images/product/1676927545010085.jpg', 'images/product/1676927545034474.jpg', 1, NULL, NULL),
(27, 12, 17, 'prequel', '445678', '10', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'orange,black', 'sm,lg', '200', '10', NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, 'images/product/1676927842737004.jpg', 'images/product/1676927842951181.jpg', 'images/product/1676927843074200.png', 'images/product/1676927843400807.png', 1, NULL, NULL),
(28, 12, 18, 'tobiko', '435672', '40', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'red,white', 'sm,lg', '1250', '25', NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 'images/product/1676927992539286.jpg', 'images/product/1676927992739392.jpg', 'images/product/1676927992809246.jpg', 'images/product/1676927992833345.jpg', 1, NULL, NULL),
(29, 12, 19, 'queen', '123456', '25', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'white,blue', 'sm,lg', '245', '40', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, 'images/product/1676928083174965.jpg', 'images/product/1676928083377197.jpg', 'images/product/1676928083402489.jpg', 'images/product/1676928083481354.png', 1, NULL, NULL),
(30, 12, 19, 'fantasy', '456738', '35', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'white', 'sm,lg', '100', '10', NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, 'images/product/1676928189218804.png', 'images/product/1676928189627020.jpg', 'images/product/1676928189796734.jpg', 'images/product/1676928189820685.png', 1, NULL, NULL),
(31, 12, 20, 'corky', '345627', '40', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'brown,purple', 'sm,lg', '250', '10', NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, 'images/product/1676928299973554.jpg', 'images/product/1676928300004481.jpg', 'images/product/1676928300207323.png', 'images/product/1676928300362763.jpg', 1, NULL, NULL),
(32, 12, 20, 'sassy', '342567', '45', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'yellow,pink', 'sm,lg', '300', '10', NULL, 1, NULL, NULL, 1, NULL, NULL, NULL, 'images/product/1676928501975343.jpg', 'images/product/1676928502233305.png', 'images/product/1676928502528306.jpg', 'images/product/1676928502555773.jpg', 1, NULL, NULL),
(33, 12, 20, 'zesta', '678590', '45', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'white', 'sm,lg', '350', '20', NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, 'images/product/1676928638882876.jpg', 'images/product/1676928639012492.jpg', 'images/product/1676928639048533.jpg', 'images/product/1676928639104789.jpg', 1, NULL, NULL),
(34, 13, 21, 'cotton', '235674', '100', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'white,yellow', 'sm,lg', '350', '50', NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 'images/product/1676928983058032.jpg', 'images/product/1676928983111667.jpg', 'images/product/1676928983243319.jpg', 'images/product/1676928983365158.jpg', 1, NULL, NULL),
(35, 13, 21, 'bandana', '453678', '45', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'blue,pink', 'sm,lg', '275', '15', NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, 'images/product/1676929085789447.png', 'images/product/1676929085951511.jpg', 'images/product/1676929086148498.jpg', 'images/product/1676929086206667.jpg', 1, NULL, NULL),
(36, 13, 22, 'ibokolo', '347890', '60', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'yellow,orange', 'sm,lg', '450', '20', NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, 'images/product/1676931714069052.jpg', 'images/product/1676931714443615.jpg', 'images/product/1676931714529503.jpg', 'images/product/1676931714691842.jpg', 1, NULL, NULL),
(37, 13, 22, 'panther', '230976', '50', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'blue,velvet', 'sm,lg', '400', '30', NULL, 1, NULL, NULL, 1, NULL, NULL, NULL, 'images/product/1676931790305428.jpg', 'images/product/1676931790547157.jpg', 'images/product/1676931790708194.jpg', 'images/product/1676931790899269.jpg', 1, NULL, NULL),
(38, 13, 23, 'fairy', '546789', '12', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'khaki,blue', 'sm,lg', '1500', '50', NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 'images/product/1676932000435841.jpg', 'images/product/1676932000830024.jpg', 'images/product/1676932000859812.jpg', 'images/product/1676932000890854.jpg', 1, NULL, NULL),
(39, 13, 23, 'kinky', '456789', '10', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'black', 'sm,lg', '350', '20', NULL, 1, NULL, NULL, 1, NULL, NULL, NULL, 'images/product/1676932152380868.png', 'images/product/1676932152672295.png', 'images/product/1676932152892849.jpg', 'images/product/1676932152939503.jpg', 1, NULL, NULL),
(40, 13, 24, 'quincy', '342567', '10', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'beige,yellow', 'sm,lg', '125', '25', NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, 'images/product/1676932242961742.jpg', 'images/product/1676932243052855.jpg', 'images/product/1676932243109572.png', 'images/product/1676932243563750.jpg', 1, NULL, NULL),
(41, 13, 24, 'languid', '890765', '400', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'white', 'sm,lg', '300', '40', NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, 'images/product/1676932325941922.png', 'images/product/1676932326106503.jpg', 'images/product/1676932326189673.jpg', 'images/product/1676932326224728.jpg', 1, NULL, NULL),
(42, 13, 25, 'sweats', '345678', '55', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'grey,velvet', 'sm,lg', '400', '10', NULL, 1, NULL, NULL, 1, NULL, NULL, NULL, 'images/product/1676932540548035.jpg', 'images/product/1676932540591717.jpg', 'images/product/1676932540637108.png', 'images/product/1676932540696001.jpg', 1, NULL, NULL),
(43, 13, 25, 'westlife', '324567', '30', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'white,pink', 'sm,lg', '270', '30', NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, 'images/product/1676932626146564.jpg', 'images/product/1676932626397761.jpg', 'images/product/1676932626491740.jpg', 'images/product/1676932626621840.jpg', 1, NULL, NULL),
(44, 14, 26, 'asdfgh', '364527', '83', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'black,brown', 'sm,lg', '1200', '200', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'images/product/1676936274484303.jpg', 'images/product/1676936274825818.jpg', 'images/product/1676936275029160.jpg', 'images/product/1676936275229085.jpg', 1, NULL, NULL),
(45, 14, 26, 'slippry', '902673', '63', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'green,red', 'sm,lg', '1000', '100', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'images/product/1676936379267310.png', 'images/product/1676936379428571.jpg', 'images/product/1676936379607368.jpg', 'images/product/1676936379663829.jpg', 1, NULL, NULL),
(46, 14, 27, 'sdfghj', '367282', '48', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'baige,yellow', 'sm,lg', '500', '50', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 'images/product/1676936816235158.jpg', 'images/product/1676936816371879.jpg', 'images/product/1676936816405106.jpg', 'images/product/1676936816431430.jpg', 1, NULL, NULL),
(47, 14, 27, 'sdfghj', '390283', '67', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'violet,indigo', 'sm,lg', '700', '100', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'images/product/1676936970799320.jpg', 'images/product/1676936970836872.jpg', 'images/product/1676936971050724.jpg', 'images/product/1676936971261001.jpg', 1, NULL, NULL),
(48, 14, 28, 'xcvb', '374897', '92', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'green,red', 'sm,lg', '1200', '100', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 'images/product/1676937184500783.jpg', 'images/product/1676937184717744.jpg', 'images/product/1676937184831034.jpg', 'images/product/1676937184893764.jpg', 1, NULL, NULL),
(49, 14, 28, 'werty', '267384', '74', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'yellow,orange', 'sm,lg', '1000', '200', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'images/product/1676937330004256.jpg', 'images/product/1676937330233122.jpg', 'images/product/1676937330443941.jpg', 'images/product/1676937330567435.jpg', 1, NULL, NULL),
(50, 14, 29, 'abuja', '398201', '74', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'khaki,blue', 'sm,lg', '2000', '500', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'images/product/1676937580443401.jpg', 'images/product/1676937580649263.jpg', 'images/product/1676937580780361.jpg', 'images/product/1676937580846118.png', 1, NULL, NULL),
(51, 14, 29, 'mnbvc', '567432', '97', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'red,green', 'sm,lg', '1500', '250', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'images/product/1676937691680118.jpg', 'images/product/1676937691933350.jpg', 'images/product/1676937692132908.png', 'images/product/1676937692290424.jpg', 1, NULL, NULL),
(52, 14, 30, 'sunny', '367291', '95', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'yellow,orange', 'sm,lg', '1000', '200', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 'images/product/1676937778215619.png', 'images/product/1676937778517363.jpg', 'images/product/1676937778549262.png', 'images/product/1676937778675580.jpg', 1, NULL, NULL),
(53, 14, 30, 'kjhg', '489273', '62', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'violet,indigo', 'sm,lg', '1200', '100', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'images/product/1676937871930998.jpg', 'images/product/1676937871995174.png', 'images/product/1676937872287746.jpg', 'images/product/1676937872343316.jpg', 1, NULL, NULL),
(54, 15, 31, 'dfghj', '657392', '27', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'green,red', 'sm,lg', '500', '100', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'images/product/1676938011408171.jpg', 'images/product/1676938011615313.jpg', 'images/product/1676938011646324.jpg', 'images/product/1676938011767609.jpg', 1, NULL, NULL),
(55, 15, 31, 'uytr', '478293', '61', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'baige,red', 'sm,lg', '800', '150', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'images/product/1676938094315805.jpg', 'images/product/1676938094514438.png', 'images/product/1676938094728009.jpg', 'images/product/1676938094788161.jpg', 1, NULL, NULL),
(56, 15, 32, 'gfgksg', '209736', '10', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'orange,brown', 'sm,lg', '700', '150', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'images/product/1676938188711969.jpg', 'images/product/1676938188973181.jpg', 'images/product/1676938189180530.jpg', 'images/product/1676938189261019.jpg', 1, NULL, NULL),
(57, 15, 32, 'hfuekdm', '278436', '96', '<span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span>', 'yellow,red', 'sm,lg', '900', '100', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'images/product/1676938286986120.jpg', 'images/product/1676938287197957.jpg', 'images/product/1676938287379235.jpg', 'images/product/1676938287602036.jpg', 1, NULL, NULL),
(58, 15, 33, 'dhj.fjul.', '457398', '35', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'black,cream', 'sm,lg', '300', '50', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'images/product/1676938553875411.jpg', 'images/product/1676938554102001.jpg', 'images/product/1676938554277756.png', 'images/product/1676938554438420.jpg', 1, NULL, NULL),
(59, 15, 33, 'jhgfdsdfg', '098767', '57', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'violet,indigo', 'sm,lg', '500', '100', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 'images/product/1676938649571530.jpg', 'images/product/1676938649907098.jpg', 'images/product/1676938650169272.jpg', 'images/product/1676938650478431.png', 1, NULL, NULL),
(60, 15, 34, 'Lipstick Ready', '478202', '78', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'red,green', 'sm,lg', '650', '150', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'images/product/1676938769498037.jpg', 'images/product/1676938769704685.jpg', 'images/product/050920_14_43_14.jpg', 'images/product/1676938770156770.jpg', 1, NULL, NULL),
(61, 15, 34, 'ytrrty', '345678', '63', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'green,blue', 'sm,lg', '500', '50', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'images/product/1676938849251807.jpg', 'images/product/1676938849434043.jpg', 'images/product/1676938849615785.jpg', 'images/product/1676938849927050.jpg', 1, NULL, NULL),
(62, 15, 35, 'kjfdsjhfjd', '463553', '36', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'white,cream', 'sm,lg', '450', '50', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 'images/product/1676938978550772.jpg', 'images/product/1676938978719044.jpg', 'images/product/1676938978890313.jpg', 'images/product/1676938979136104.jpg', 1, NULL, NULL),
(63, 15, 35, 'jhgfds', '289473', '01', '<p><span style=\"font-size: 14.4px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'blue,green', 'sm,lg', '600', '100', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'images/product/1676939130157746.jpg', 'images/product/1676939131344453.jpg', 'images/product/1676939131478062.jpg', 'images/product/1676939131660911.png', 1, NULL, NULL),
(64, 16, 8, 'sdfgh', '234567', '42', '<p><span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span><br></p>', 'yellow,orange', 'sm,lg', '200', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'images/product/1676939255278402.png', 'images/product/1676939256768103.png', 'images/product/1676939258332203.png', 'images/product/1676939261194366.jpg', 1, NULL, NULL),
(65, 16, 33, 'qjfbddd', '378920', '47', '<span style=\"color: rgb(107, 119, 141); font-family: Lato, sans-serif; font-size: 16px;\">Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis lectus.</span>', 'white,red', 'sm,lg', '500', '100', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 'images/product/1676939877459091.jpg', 'images/product/1676939877663771.jpg', 'images/product/1676939877752681.jpg', 'images/product/1676939877892316.jpg', 1, NULL, NULL),
(66, 13, 21, 'Maureen', '2323232', '30', '<p>rvhjwvrwvrvwhrvhjwvhrvwhqvrhwqvhvwqhvrhwqvdfhwqrhvwqrhwvurvwhrvhw<span style=\"font-size: 0.9rem;\">rvhjwvrwvrvwhrvhjwvhrvwhqvrhwqvhvwqhvrhwqvdfhwqrhvwqrhwvurvwhrvhw</span><span style=\"font-size: 0.9rem;\">rvhjwvrwvrvwhrvhjwvhrvwhqvrhwqvhvwqhvrhwqvdfhwqrhvwqrhwvurvwhrvhw</span><span style=\"font-size: 0.9rem;\">rvhjwvrwvrvwhrvhjwvhrvwhqvrhwqvhvwqhvrhwqvdfhwqrhvwqrhwvurvwhrvhw</span><span style=\"font-size: 0.9rem;\">rvhjwvrwvrvwhrvhjwvhrvwhqvrhwqvhvwqhvrhwqvdfhwqrhvwqrhwvurvwhrvhw</span><span style=\"font-size: 0.9rem;\">rvhjwvrwvrvwhrvhjwvhrvwhqvrhwqvhvwqhvrhwqvdfhwqrhvwqrhwvurvwhrvhw</span><span style=\"font-size: 0.9rem;\">rvhjwvrwvrvwhrvhjwvhrvwhqvrhwqvhvwqhvrhwqvdfhwqrhvwqrhwvurvwhrvhw</span><span style=\"font-size: 0.9rem;\">rvhjwvrwvrvwhrvhjwvhrvwhqvrhwqvhvwqhvrhwqvdfhwqrhvwqrhwvurvwhrvhw</span></p>', 'red', 's,m', '2000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'images/product/1677097531092179.png', 'images/product/1677097531269675.jpg', 'images/product/1677097531326722.jpg', 'images/product/1677097531527247.jpg', 1, NULL, NULL),
(68, 11, 9, 'joeljoeljoel', '554784', '56', '<p><span style=\"font-family: sans-serif;\">﻿wdfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff</span></p><p><span style=\"font-family: sans-serif;\">weeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeef</span></p><p><span style=\"font-family: sans-serif;\">wefffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff</span></p><p><br></p>', 'green,red', 'sm,lg,xl,xs', '2000', '200', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, 'images/product/1677892037052780.jpg', 'images/product/1677892037324650.jpg', 'images/product/1677892037587030.jpg', 'images/product/1677892037906648.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name`, `created_at`, `updated_at`) VALUES
(8, 11, 'Powder', NULL, NULL),
(9, 11, 'Color', NULL, NULL),
(10, 11, 'Vaseline', NULL, NULL),
(11, 11, 'Valon', NULL, NULL),
(12, 11, 'Arimis', NULL, NULL),
(13, 12, 'Amara', NULL, NULL),
(17, 12, 'Nice & Lovely', NULL, NULL),
(18, 12, 'Lotion', NULL, NULL),
(19, 12, 'Petroleum', NULL, NULL),
(20, 12, 'Jelly', NULL, NULL),
(21, 13, 'Vest', NULL, NULL),
(22, 13, 'Shirt', NULL, NULL),
(23, 13, 'Trouser', NULL, NULL),
(24, 13, 'Short', NULL, NULL),
(25, 13, 'Pants', NULL, NULL),
(26, 14, 'Wig', NULL, NULL),
(27, 14, 'Number', NULL, NULL),
(28, 14, 'Weave', NULL, NULL),
(29, 14, 'Piece', NULL, NULL),
(30, 14, 'Dreadlocks', NULL, NULL),
(31, 15, 'Qutex', NULL, NULL),
(32, 15, 'Cutter', NULL, NULL),
(33, 15, 'Fake', NULL, NULL),
(34, 15, 'Long', NULL, NULL),
(35, 15, 'Sharp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Joel', '', 'joeljoel3244@gmail.com', NULL, NULL, '$2y$10$alfBRshNf2aDsMbfAj6SXe7gG6..5lWMHAJGF.JaWXxT9.jkb/SzO', NULL, '2020-08-27 13:11:33', '2020-08-27 13:11:33'),
(10, 'Allen', '0110095462', 'allenanekaya@gmail.com', NULL, '2020-09-06 07:10:15', '$2y$10$oRIFAZwwNn6XYPoHE.s8x.lMjmSs1f1pxL2FPekTgm3fDIVLxGv2S', 'cSca6vaZb8OQ9S48JpUWOYKyP1vaBmPr7P75xT3JsuigLICsMdHrsKIq4SvE', '2020-09-06 07:09:32', '2020-09-06 08:56:30'),
(11, 'Joel Rupiah', '0715733257', 'joeljoel@gmail.com', NULL, NULL, '$2y$10$A2/zUa3lewHrQeV8C/xcput61mC4p7co4M/wQs32DrUQkSREgVEyy', NULL, '2020-09-16 04:19:43', '2020-09-16 04:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(4, 10, 63, NULL, NULL),
(5, 10, 10, NULL, NULL),
(6, 10, 11, NULL, NULL),
(7, 10, 12, NULL, NULL),
(8, 10, 13, NULL, NULL),
(9, 10, 17, NULL, NULL),
(10, 10, 65, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
