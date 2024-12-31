-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 31 Ara 2024, 15:54:28
-- Sunucu sürümü: 8.0.33
-- PHP Sürümü: 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `octasy`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adsense`
--

CREATE TABLE `adsense` (
  `id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `adsense`
--

INSERT INTO `adsense` (`id`, `type`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'landing-header-section', 'test', 'active', '2024-12-31 14:13:23', '2024-12-31 12:16:43'),
(2, 'landing-features-section-728x90', NULL, 'passive', '2024-12-31 14:18:21', '2024-12-31 12:17:01'),
(3, 'landing-templates-section-728x90', NULL, 'active', '2024-12-31 14:13:23', '2024-12-31 14:13:26'),
(4, 'landing-tools-section-728x90', NULL, 'passive', '2024-12-31 14:13:23', '2024-12-31 12:53:40'),
(5, 'landing-how-it-works-section-728x90', NULL, 'active', '2024-12-31 14:13:23', '2024-12-31 14:13:26'),
(6, 'landing-testimonials-section-728x90', NULL, 'active', '2024-12-31 14:13:23', '2024-12-31 14:13:26'),
(7, 'landing-pricing-section-728x90', NULL, 'active', '2024-12-31 14:19:30', '2024-12-31 14:19:33'),
(8, 'landing-faq-section-728x90', NULL, 'active', '2024-12-31 14:19:30', '2024-12-31 14:19:33');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adsense`
--
ALTER TABLE `adsense`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adsense`
--
ALTER TABLE `adsense`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
