-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2021 a las 04:35:28
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `et27`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Comunicación y expresión', 'comunicacion-y-expresion', '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(2, 'Especialidad', 'especialidad', '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(3, 'Exactas', 'exactas', '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(4, 'Sociales', 'sociales', '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(5, 'Taller y tecnología', 'taller-y-tecnologia', '2021-01-27 03:34:02', '2021-01-27 03:34:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_drive` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `link_drive`, `created_at`, `updated_at`) VALUES
(1, '1er año', '1er-ano', 'https://drive.google.com/drive/folders/1ofe-RfjyH1pCyt-bbbB1GnCalJBYG9_S?usp=sharing', '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(2, '2do año', '2do-ano', 'https://drive.google.com/drive/folders/1hIohKvS7auAwS5ScgSBAALGtaZMdzG7L?usp=sharing', '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(3, '3er año', '3er-ano', 'https://drive.google.com/drive/folders/1z7oa6LHln5T6M91pNIccq4qlDOP45cTr?usp=sharing', '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(4, '4to año', '4to-ano', 'https://drive.google.com/drive/folders/1Fxv1fo6lK11dyB7rsd2ms98KiBKrqVvG?usp=sharing', '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(5, '5to año', '5to-ano', 'https://drive.google.com/drive/folders/1FcgRYfNSq4FIHwmysPgVCpzhRcStxzap?usp=sharing', '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(6, '6to año', '6to-ano', 'https://drive.google.com/drive/folders/1fd41UaKHp1T-oNDYu7jOFoaMT6TPNgXj?usp=sharing', '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(7, 'Noticias de la 27', 'noticias-de-la-27', '#', '2021-01-27 03:34:02', '2021-01-27 03:34:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_drive` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `name`, `slug`, `link_drive`, `category_id`, `area_id`, `created_at`, `updated_at`) VALUES
(1, '1-Lengua y literatura', '1-lengua-y-literatura', 'https://drive.google.com/drive/folders/1Z1NYzeIKwnzQFcDdJwc1Up_u09ucjNR3?usp=sharing', 1, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(2, '1-Inglés', '1-ingles', 'https://drive.google.com/drive/folders/1z8Wnhuq3TcDqVMWvujkV9f8lkIjSekO0?usp=sharing', 1, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(3, '1-Historia', '1-historia', 'https://drive.google.com/drive/folders/174zutkGk4WWlZiFFblzdpxOJGBLaHtDd?usp=sharing', 1, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(4, '1-Geografia', '1-geografia', 'https://drive.google.com/drive/folders/1EipS4o8BhA4rGiMmluwyjIYkEHMcyVDl?usp=sharing', 1, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(5, '1-Educación ciudadana', '1-educacion-ciudadana', 'https://drive.google.com/drive/folders/1gKFhSE4LPiY42qtVi8Aw9bpXY9vF4EjY?usp=sharing', 1, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(6, '1-Educación física', '1-educacion-fisica', 'https://drive.google.com/drive/folders/1L3pRIRlEMxvGUg8F5gsLaaYmLZaQXzgW?usp=sharing', 1, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(7, '1-Biología', '1-biologia', 'https://drive.google.com/drive/folders/1v0a6LStnhOrun5TJzy3j9rJDvpxc9jc0?usp=sharing', 1, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(8, '1-Educación artistica', '1-educacion-artistica', 'https://drive.google.com/drive/folders/1vFHIbD2x6RpPws0vMiw4kMqiYaReExw-?usp=sharing', 1, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(9, '1-Matemática', '1-matematica', 'https://drive.google.com/drive/folders/1c8noigrFdH3TnimgY6DWSlGbc8Ds7Wee?usp=sharing', 1, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(10, '1-Tecnología de la representación', '1-tecnologia-de-la-representacion', 'https://drive.google.com/drive/folders/15Lsp9laTMXFzdZ-5aR9OcNilbJ4vItuO?usp=sharing', 1, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(11, '1-Taller', '1-taller', 'https://drive.google.com/drive/folders/1p1a-8HeKacdvhVYkXdwJ_mgAMlnEnYJL?usp=sharing', 1, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(12, '2-Lengua y literatura', '2-lengua-y-literatura', 'https://drive.google.com/drive/folders/1OMhwBSHF4NHA3y2aFH0njSdEQGLCfaki?usp=sharing', 2, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(13, '2-Inglés', '2-ingles', 'https://drive.google.com/drive/folders/1w5I2S63jQnHenPFHqn-epwW4ARzMhbCd?usp=sharing', 2, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(14, '2-Historia', '2-historia', 'https://drive.google.com/drive/folders/1IKu68gbPqx1Z9nUt6Tgg2wDnlfKJv2e3?usp=sharing', 2, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(15, '2-Geografia', '2-geografia', 'https://drive.google.com/drive/folders/1CmbyzHvYTjNGxCDoyMlc_3Wzs-Ejyu-1?usp=sharing', 2, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(16, '2-Educación ciudadana', '2-educacion-ciudadana', 'https://drive.google.com/drive/folders/1J3HrITIs_Fo7t7-oeXGBX8yZYrcXyA8q?usp=sharing', 2, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(17, '2-Educación física', '2-educacion-fisica', 'https://drive.google.com/drive/folders/1hpFcuFpBNHIEdvbAIaDEPEk14Oy2oPCf?usp=sharing', 2, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(18, '2-Biología', '2-biologia', 'https://drive.google.com/drive/folders/1uNE6O94ppPmTkp80p8WL1PyPtB6z359V?usp=sharing', 2, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(19, '2-Física', '2-fisica', 'https://drive.google.com/drive/folders/1LKBJaZw7i0Kj_zycMWa-XhOpeCw4fRxK?usp=sharing', 2, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(20, '2-Matemática', '2-matematica', 'https://drive.google.com/drive/folders/1wTbtHNWH7PVJNJLhRGnqFBb7VHlUpJ9_?usp=sharing', 2, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(21, '2-Tecnología de la representación', '2-tecnologia-de-la-representacion', 'https://drive.google.com/drive/folders/1OvmO5gYq2TNMZLZp36s_qStZ1J1MmMqZ?usp=sharing', 2, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(22, '2-Taller', '2-taller', 'https://drive.google.com/drive/folders/1fs-_2H8elDIPrdazeHKj5K_YKKfFnwFK?usp=sharing', 2, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(23, '3-Historia', '3-historia', 'https://drive.google.com/drive/folders/1-AlBy8mlRjVurqZfuyivxuKBwsopjTeu?usp=sharing', 3, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(24, '3-Geografía', '3-geografia', 'https://drive.google.com/drive/folders/1dlhJrUGXd67bAlc9rFma6uZTzyER1FRi?usp=sharing', 3, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(25, '3-Educación física', '3-educacion-fisica', 'https://drive.google.com/drive/folders/1BAljTkh5NskDN1OgUoeSBTz26Z9J4wLr?usp=sharing', 3, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(26, '3-Educación ciudadana', '3-educacion-ciudadana', 'https://drive.google.com/drive/folders/1RGWqsNtisWVZzL3cKF1Ilwz4DVIGt129?usp=sharing', 3, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(27, '3-Inglés', '3-ingles', 'https://drive.google.com/drive/folders/1X3QCkiOJoLeLCZhtul97c93Z3E6oYyvo?usp=sharing', 3, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(28, '3-Lengua y literatura', '3-lengua-y-literatura', 'https://drive.google.com/drive/folders/1YZkE0FFk-CZH7HYc0PzVDYmsZbxccN4U?usp=sharing', 3, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(29, '3-Matemática', '3-matematica', 'https://drive.google.com/drive/folders/1QegIjcMt59uHXrBD3iIiBBkDML0_MFdy?usp=sharing', 3, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(30, '3-Física', '3-fisica', 'https://drive.google.com/drive/folders/17nGJOuMNBamcXbMijL_FzdupgZaOiJbc?usp=sharing', 3, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(31, '3-Tecnología de la representación', '3-tecnologia-de-la-representacion', 'https://drive.google.com/drive/folders/1Apoy55iUdffvuFzHA6kCNB50XVNwgILL?usp=sharing', 3, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(32, '3-Química', '3-quimica', 'https://drive.google.com/drive/folders/1qKCGN6GHxas9NIRt7fYT2e_BdKfNgwP2?usp=sharing', 3, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(33, '3-Taller', '3-taller', 'https://drive.google.com/drive/folders/1yTeP_PoZWUG44VBV6XtmQtaKH3SElkFa?usp=sharing', 3, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(34, '4-Educación física', '4-educacion-fisica', 'https://drive.google.com/drive/folders/1FiU1CvotKKg_sBJjBPeDB7JDuV1o6s49?usp=sharing', 4, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(35, '4-Inglés', '4-ingles', 'https://drive.google.com/drive/folders/1uLePw56KktIC-8FrRM_rEuFhAODTvuxP?usp=sharing', 4, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(36, '4-Ciudadania y trabajo', '4-ciudadania-y-trabajo', 'https://drive.google.com/drive/folders/1jrdePh0QoMFv8zehycMQAEF75-8H9hav?usp=sharing', 4, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(37, '4-Lengua y literatura', '4-lengua-y-literatura', 'https://drive.google.com/drive/folders/1_ljhvCQBzWig5WcdpDCiYTHiW9FMo_0k?usp=sharing', 4, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(38, '4-Matemática', '4-matematica', 'https://drive.google.com/drive/folders/1s-zdqQdBimId9eiX8Mtq5V0WZc0FiKWe?usp=sharing', 4, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(39, '4-Economia y gestión de las organizaciones', '4-economia-y-gestion-de-las-organizaciones', 'https://drive.google.com/drive/folders/1VSTLfGH9O7dm3-w1VHuqNuS1VhrHJVH3?usp=sharing', 4, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(40, '4-Química general', '4-quimica-general', 'https://drive.google.com/drive/folders/1-Lm6bbWit3RykGhd1ox3BKjRzW94QQJw?usp=sharing', 4, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(41, '4-TP Química general', '4-tp-quimica-general', 'https://drive.google.com/drive/folders/1iU4qVSAENKaS4mtefwU4VfDrx7ktCuei?usp=sharing', 4, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(42, '4-Química inorgánica', '4-quimica-inorganica', 'https://drive.google.com/drive/folders/1FoSllJ3QLzxNZzl5u9liMepEwk_E9jFl?usp=sharing', 4, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(43, '4-TP Química inorgánica', '4-tp-quimica-inorganica', 'https://drive.google.com/drive/folders/1jQ8MaiGb9ND237eXn25JnHai4SuyHN_g?usp=sharing', 4, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(44, '4-Física aplicada', '4-fisica-aplicada', 'https://drive.google.com/drive/folders/1q_gussUpUEoiHeTiqCgl_ILWLKsNq14r?usp=sharing', 4, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(45, '4-TP Física aplicada', '4-tp-fisica-aplicada', 'https://drive.google.com/drive/folders/1uzSMGehWCNELn3UwHglkUhkS51I53b35?usp=sharing', 4, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(46, '4-Procesos y operaciones químicas', '4-procesos-y-operaciones-quimicas', 'https://drive.google.com/drive/folders/1QsUuwaWPhDgi29T68epCpxXyehWwJnEr?usp=sharing', 4, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(47, '4-TP Procesos y operaciones químicas', '4-tp-procesos-y-operaciones-quimicas', 'https://drive.google.com/drive/folders/1dbzYTQQLWgoVX_8uH_TwR3tptCdNvPL-?usp=sharing', 4, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(48, '5-Educación física', '5-educacion-fisica', 'https://drive.google.com/drive/folders/1GfXbwCWGL7JBuMbKvaE4LkNaUnnrC2Kq?usp=sharing', 5, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(49, '5-Inglés', '5-ingles', 'https://drive.google.com/drive/folders/11lj1bwxIdUVwshS3WhnkaqeGIefwY2bf?usp=sharing', 5, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(50, '5-Lengua y literatura', '5-lengua-y-literatura', 'https://drive.google.com/drive/folders/15Cdo1OmCInANcqSx6z-v7m-K5WCt_6xG?usp=sharing', 5, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(51, '5-Matemática', '5-matematica', 'https://drive.google.com/drive/folders/1HrFxFOD8_Yr6nXiyXJlehxSi7yB7C8sX?usp=sharing', 5, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(52, '5-Gestión de los procesos productivos', '5-gestion-de-los-procesos-productivos', 'https://drive.google.com/drive/folders/1Ou1tpZ4FC014OLCtLs4xqRXyVgBeyxl8?usp=sharing', 5, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(53, '5-Laboratorio de instrumental y certificación de normas', '5-laboratorio-de-instrumental-y-certificacion-de-normas', 'https://drive.google.com/drive/folders/1oBSWsr-Gv7bkOPuuv_aoFIBY2Zm6E38Y?usp=sharing', 5, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(54, '5-Química analítica cualitativa', '5-quimica-analitica-cualitativa', 'https://drive.google.com/drive/folders/1iiSHAtEDSczDzcoEnZSLqspk87bAj4Bb?usp=sharing', 5, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(55, '5-TP Química analítica cualitativa', '5-tp-quimica-analitica-cualitativa', 'https://drive.google.com/drive/folders/1KoIAejQbepJEH5PhQeh1ZDmPJ0b19uVt?usp=sharing', 5, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(56, '5-Química orgánica I', '5-quimica-organica-i', 'https://drive.google.com/drive/folders/1lpt92_RzjIc22SAwrYaTLo_B_HncvE56?usp=sharing', 5, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(57, '5-TP Química orgánica I', '5-tp-quimica-organica-i', 'https://drive.google.com/drive/folders/16kIEPj2hEiz9lEXhectrfV1i2oVJSMyt?usp=sharing', 5, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(58, '5-Química industrial I', '5-quimica-industrial-i', 'https://drive.google.com/drive/folders/18_Fde_p7exOY1d8uhuMGz9CABCwU6mgN?usp=sharing', 5, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(59, '5-TP Química industrial I', '5-tp-quimica-industrial-i', 'https://drive.google.com/drive/folders/1WipQqXlY3jtEsF9u3q9aV1SrdZuci_vj?usp=sharing', 5, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(60, '6-Educación física', '6-educacion-fisica', 'https://drive.google.com/drive/folders/1kcJzrR7Au8AKu0bRJKUpOlFQWA0nsc28?usp=sharing', 6, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(61, '6-Ciencia y tecnología', '6-ciencia-y-tecnologia', 'https://drive.google.com/drive/folders/1cAJA-LpXQjl46M5XOArt0UJ3vjPs5rwj?usp=sharing', 6, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(62, '6-Química analítica cuantitativa e instrumental', '6-quimica-analitica-cuantitativa-e-instrumental', 'https://drive.google.com/drive/folders/1hr6NvVHM_zoSt5uwkoLoxT3WlFXKxtOw?usp=sharing', 6, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(63, '6-TP Química analítica cuantitativa e instrumental', '6-tp-quimica-analitica-cuantitativa-e-instrumental', 'https://drive.google.com/drive/folders/1va2Tv_gt7nV8uOIMZFqz9jkiJfaNtKFL?usp=sharing', 6, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(64, '6-Química orgánica y bio-organica', '6-quimica-organica-y-bio-organica', 'https://drive.google.com/drive/folders/1FEt8yz0Mg2ylf8nK0vHHCmm3JOVqlFyE?usp=sharing', 6, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(65, '6-TP Química orgánica y bio-organica', '6-tp-quimica-organica-y-bio-organica', 'https://drive.google.com/drive/folders/1XtZmbjBJjDyRfIkCWCDWYFKpRrIzAwut?usp=sharing', 6, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(66, '6-Química industrial II', '6-quimica-industrial-ii', 'https://drive.google.com/drive/folders/1sTrdJo5DAW6yKrDppkpcDiYJhPykOjqq?usp=sharing', 6, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(67, '6-TP Química industrial II', '6-tp-quimica-industrial-ii', 'https://drive.google.com/drive/folders/163M-LGusiyAVOQOzC6xLZFjUdmoOXJYv?usp=sharing', 6, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(68, '6-Tecnología de los alimentos y biotecnología', '6-tecnologia-de-los-alimentos-y-biotecnologia', 'https://drive.google.com/drive/folders/1888JVHJg7ajw3BcLDZ2Qsdhh3o00tm7Z?usp=sharing', 6, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(69, '6-TP Tecnología de los alimentos y biotecnología', '6-tp-tecnologia-de-los-alimentos-y-biotecnologia', 'https://drive.google.com/drive/folders/1z8qhqwFms_wAWdXkavxuqRajN35rlCpy?usp=sharing', 6, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(70, '6-Practicas profesionalizantes', '6-practicas-profesionalizantes', 'https://drive.google.com/drive/folders/1hr6NvVHM_zoSt5uwkoLoxT3WlFXKxtOw?usp=sharing', 6, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(71, '7-Noticias en general', '7-noticias-en-general', '', 7, 2, '2021-01-27 03:34:02', '2021-01-27 03:34:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_01_16_174146_create_sessions_table', 1),
(7, '2021_01_16_174730_create_categories_table', 1),
(8, '2021_01_16_203903_create_areas_table', 1),
(9, '2021_01_16_210000_create_materias_table', 1),
(10, '2021_01_16_210001_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extract` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `materia_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `extract`, `body`, `status`, `user_id`, `materia_id`, `created_at`, `updated_at`) VALUES
(1, 'Consequatur at blanditiis sit sit distinctio dolore.', 'consequatur-at-blanditiis-sit-sit-distinctio-dolore', 'Exercitationem qui corrupti ut laborum ducimus est. Perspiciatis quo voluptatibus atque voluptatem. Sapiente velit id voluptatem voluptatum maxime eos. Voluptatibus rem animi quibusdam non est unde repudiandae.', 'Voluptas similique voluptatem sit quo. Dolore aut ipsum deserunt iste est repellendus id. Ut impedit enim tempore ipsa et. Ut temporibus est laudantium. Labore voluptatem ut reprehenderit ut. Eum et quisquam maiores officiis. Quisquam nihil est aut asperiores sed deserunt cum. Veritatis dolores blanditiis aut. Culpa dolorem iure itaque sit dolores. Commodi voluptates accusamus accusantium quis doloribus nostrum voluptatem. Rerum quae est minus corporis qui beatae. Praesentium delectus delectus laborum. Vel nostrum aut nemo aut et a cumque. Optio ducimus non consequatur exercitationem ut voluptatem dolor. Eveniet est hic sint qui ipsa. Facere aspernatur voluptate accusantium doloribus sed qui debitis. Natus at libero iure quas voluptates veniam eligendi. Ut assumenda veniam est et enim. Architecto qui culpa ut sed quis. Ab voluptates suscipit omnis illo quis non. Recusandae consequatur est voluptatem cum ducimus. Voluptas vel est quis qui consequatur ea. Qui dicta temporibus enim laborum aut quae excepturi. Voluptate praesentium similique eum doloremque qui dolore deleniti ipsa. Dolores nemo veritatis et ut. Unde architecto ut eveniet consequatur necessitatibus. Ratione nihil quia et odio nobis omnis. Autem non ullam id quibusdam. Enim doloribus officia repellendus ipsum. Perferendis eligendi doloribus magni rem tenetur possimus. Enim velit sed nisi quis deserunt veritatis quaerat eum. Iste dignissimos exercitationem non quaerat. Porro modi necessitatibus et maxime qui eveniet ex. Natus est distinctio perspiciatis dicta. Culpa tempora deleniti laboriosam aut in alias. Odio et ex et nisi consequatur unde. Occaecati odio in sit omnis. Quod vero minima soluta. Facere iste fugiat repudiandae. Est recusandae et ratione sed quod mollitia deleniti. Nulla et et quae quae officia ex. Animi quis sit eveniet est voluptas tempore tempore.', '2', 2, 55, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(2, 'Maiores sunt illum est illo.', 'maiores-sunt-illum-est-illo', 'Dolorum animi et dolor cum ut quia. Rerum consectetur odio tenetur voluptatum omnis quibusdam. Quae ut molestias corrupti recusandae. Quo aperiam et qui. Ut voluptate et qui cum. Rerum et voluptatum eum voluptatum inventore.', 'Et inventore labore omnis eos aut eaque quibusdam. Eligendi error vel quo molestiae odit numquam cum. Ut est adipisci non incidunt tenetur. Ipsum dignissimos consequatur tenetur amet sit. Vero eos est debitis dolorem vero qui officiis. Minus eos earum earum tempore ut. Doloremque ipsum quia voluptatum officia in rerum. Reprehenderit ullam voluptatem expedita aut. Officia veritatis id quis velit. Debitis enim cupiditate harum modi. Est omnis fugit dolores recusandae tempore ut. Aut excepturi nam qui ad voluptas nulla. Enim accusantium velit necessitatibus aperiam consequatur qui. Asperiores quam quam ipsam voluptatibus nostrum qui voluptates. Nisi voluptates ut dolorum fuga eaque. Eum omnis molestiae alias molestias placeat quis. Quia sunt mollitia ut qui id. Iste dolorem temporibus aut iure et. Sunt natus sit non pariatur odit repudiandae. Dicta quae itaque repudiandae consectetur accusantium qui enim. Assumenda suscipit qui aut nemo cumque. Provident eum repellendus rerum provident exercitationem numquam quae. Sunt occaecati aut neque velit dignissimos dolor. Alias velit ad nam blanditiis iusto est corrupti molestiae. Alias non distinctio rerum dolores. Ut qui velit repudiandae rerum voluptas rem dicta. Voluptatum reiciendis minus aut aliquam. Doloremque sint beatae nam doloremque quo quia. Eligendi nemo ut fuga ut est qui. Dicta velit ut qui sequi placeat voluptatem. Nostrum id aliquid ut libero. Sint vero omnis vel non soluta reiciendis. Vitae eaque veritatis necessitatibus eius. Sequi deleniti dolores in quam quas et placeat. Eos ab reiciendis ut ea recusandae est qui. Ut quae rerum accusamus ea beatae natus non vero. Voluptatibus distinctio voluptas aperiam quia ut velit est. Distinctio sequi voluptas vel recusandae maxime inventore. Deserunt consequatur vel itaque expedita. Quae dolore dolore commodi voluptatum quod et. Totam ut reiciendis dignissimos perspiciatis. Ratione non eum quisquam magni excepturi est vero.', '2', 6, 59, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(3, 'Hic ipsum et vero excepturi autem.', 'hic-ipsum-et-vero-excepturi-autem', 'Beatae sequi architecto est voluptas assumenda aut quae. Voluptatem omnis doloribus veniam natus occaecati quas atque. Saepe asperiores voluptatem sit ab possimus eligendi laboriosam enim.', 'Omnis hic dolor sequi maiores velit voluptas quia. Reiciendis illo perspiciatis minus non asperiores. Odit est consequatur qui praesentium excepturi enim. Et animi alias et delectus neque. Ad eos veritatis voluptatem. Illo deserunt et dignissimos fugit quibusdam expedita inventore. Nobis at consequatur non laborum. Eveniet quos quaerat veniam et dicta dolorem quia. Et itaque id ipsa voluptates molestiae. Expedita vitae dicta ipsam qui eaque. Tenetur magnam velit veniam ullam aut. Harum numquam optio odit vitae commodi non. Molestias adipisci totam nulla dignissimos est dolores. Aut vel ut voluptate dolores sit voluptatem odit ut. Asperiores eaque sapiente facilis unde delectus pariatur eligendi. Commodi voluptas totam vero delectus. Fugiat explicabo amet illo. Deserunt aperiam corrupti eveniet aut hic cupiditate. Hic corrupti porro necessitatibus id iusto hic. Omnis blanditiis ullam et velit amet. Laborum eos maiores corporis quia nulla consequuntur aliquam. Corporis nam nihil doloremque fugit occaecati nihil exercitationem et. Aperiam voluptas fugiat nihil exercitationem. Dignissimos et libero molestiae accusantium ab atque. Harum enim voluptate porro iure est mollitia voluptate. Aliquam sapiente officia quisquam a. Commodi omnis eligendi quam. Quas error et sunt qui. Illo aut aut voluptatem sit praesentium dolores eaque. Sit aspernatur tempora non ducimus aut ratione esse. Eos corporis voluptas distinctio. Dolorem cum ut temporibus consequuntur mollitia quasi. Aut nihil optio qui iusto ab. Voluptas et ullam et velit. Doloribus dolorem id saepe et velit harum optio. Labore autem eaque praesentium eum culpa consectetur doloremque. Voluptas quam beatae similique nemo ab. Qui aliquid omnis maiores possimus explicabo dicta aliquam. Optio dicta consequuntur dolore nihil voluptatem. Assumenda beatae in eum. Nisi pariatur est accusantium. Dolorem amet vel officia deserunt est est aperiam. Et tempora culpa ipsa natus magni et sint.', '2', 2, 5, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(4, 'Dolores reprehenderit pariatur eos animi laboriosam.', 'dolores-reprehenderit-pariatur-eos-animi-laboriosam', 'Alias cum exercitationem quia in quasi sint atque quae. Tempore quos repellendus qui exercitationem. Aliquid voluptatum culpa quae maxime qui. Commodi velit voluptas quia aliquam voluptatibus placeat officiis.', 'Modi ut omnis saepe quam soluta aut ut aut. Delectus et culpa debitis eum. Perferendis sed cupiditate at minus. Reprehenderit minus blanditiis vitae voluptates. Maxime neque eos atque laudantium libero iusto. Veritatis ab aut ad excepturi. Possimus dolore rerum fuga ut dolor officiis voluptatem. Ut quos dignissimos qui quaerat. Odio aspernatur autem culpa repellendus possimus. Assumenda explicabo iure provident nisi in sunt temporibus veniam. Ipsa animi molestiae voluptatem in voluptatem occaecati cum occaecati. Dolor consequatur odio aliquam sit est possimus quidem. Dignissimos ratione aut natus. Maxime sed unde voluptas possimus. Non omnis itaque sunt ipsam totam qui id qui. Autem alias rem aut qui nihil hic quo. Quae est modi quas deserunt. Est consequatur veritatis beatae labore est tenetur voluptate. Ipsam est rerum dolores quasi sunt harum quod assumenda. Repellendus nostrum architecto et. Reprehenderit saepe exercitationem dolores possimus non quidem sit quas. Incidunt aut voluptatem explicabo beatae et distinctio ut qui. Est placeat dolore perspiciatis rem voluptatem voluptatum. Eligendi magnam molestiae enim corporis dolorum quibusdam sed. Neque voluptas nobis rerum quasi facere. Saepe laudantium harum eum nemo eaque aut fugit. Et beatae ex ut ut sunt aliquid. Aut ipsum sed est repellat. Optio culpa beatae vero accusamus voluptatem assumenda repellat sed. Voluptatem fugit rerum et explicabo. Vero consequatur temporibus totam dolor sit eius. Aut temporibus eveniet et qui magni eaque. Ad in reprehenderit suscipit quo commodi quaerat voluptate est. Tempora ut aut ducimus. Dolore voluptatem doloribus mollitia tempora dolorem itaque. Enim ipsam porro est impedit quo quo. Eveniet rerum cum distinctio velit ratione quos. Aut expedita porro recusandae sed fuga eos dolores. Nam temporibus rerum eligendi officiis autem ex. Sed eos voluptatum sint laborum et voluptas atque. Accusamus incidunt sunt ipsum voluptas nihil maxime. Architecto cum esse nihil id.', '2', 6, 31, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(5, 'Doloremque repudiandae ut delectus aperiam et.', 'doloremque-repudiandae-ut-delectus-aperiam-et', 'Sit ad qui hic eligendi maxime ipsum voluptate. Eos a rerum animi fuga. Quas et libero velit consequatur provident. Dignissimos perferendis optio non perspiciatis incidunt ducimus.', 'Nesciunt odio nulla harum dolores qui sapiente. Voluptas minus nihil necessitatibus dolores fuga et. Quia fugit cum architecto iure mollitia ad unde. Velit inventore vel et fugit. Est ipsum qui perferendis molestias voluptatem sunt. Sed commodi cum atque aut corporis. Et officia deleniti vel numquam architecto voluptas. Fugiat officiis consequatur dicta cum praesentium. Pariatur sit sint deserunt. Dolore ut corporis nisi et deserunt et. Possimus quisquam labore cupiditate similique delectus qui perferendis nihil. Nihil dolorum doloremque id. Ullam non est perspiciatis ipsa. Et ut deleniti enim et eligendi. Exercitationem corrupti tempore minima cumque dicta eos suscipit alias. Rerum quis et ex officiis vel ut ullam. Nemo numquam sequi nihil. Voluptatem quia consequatur magni vero. Ex quidem occaecati magni tempora ipsum. Ut nulla ullam perferendis reprehenderit. Aspernatur ad autem autem. Est nobis ducimus ducimus vero. Voluptas quidem voluptatem fuga dolore non mollitia molestiae. Et temporibus in et saepe modi aut. Et illum excepturi saepe fugit. Commodi excepturi odit quaerat sit dolores atque corporis. Voluptates pariatur cupiditate nihil eaque. A praesentium expedita veritatis. Consectetur corporis temporibus ea suscipit et. Non maxime eos quo voluptatem. Soluta repellendus sed accusamus earum provident natus. Laboriosam voluptatem repudiandae quam labore. Et nobis et sint ipsa a praesentium provident. Libero dolores fugiat incidunt adipisci. Assumenda atque aut impedit earum et et hic. Modi nemo placeat est natus magnam. Esse tempora et error. Soluta rerum unde ab ut. A enim corporis eos mollitia libero ipsum. Asperiores sed saepe odit tempora neque quis et sit. Possimus consequuntur iste unde expedita aspernatur. Nostrum quasi vero in sed fuga quod. Magnam id dicta quaerat blanditiis odit quam sunt. Ea possimus repellat ullam voluptatibus illum. Vitae dolorum nihil in corporis nihil est.', '1', 3, 65, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(6, 'Sunt at voluptatum id quia laudantium voluptatem nihil.', 'sunt-at-voluptatum-id-quia-laudantium-voluptatem-nihil', 'In ab nam vero temporibus animi consequatur quia ipsam. Dolores aut illum voluptatem commodi dicta vel. Veniam praesentium sint quia ea.', 'Laudantium dolor deleniti dolorum est odio enim autem. Consequatur est et explicabo officiis voluptate. Mollitia qui beatae nulla sapiente aut ipsam. Dolor et dolores perferendis exercitationem ut. Est et ut iusto aut consequuntur. Id optio autem tempora modi voluptate at. Perspiciatis molestias rem numquam laboriosam necessitatibus asperiores et. Sed qui maxime nostrum sit qui molestiae. Voluptatem possimus facere praesentium sit nemo. Vel harum magnam aut numquam aspernatur et ab. Qui asperiores aspernatur debitis et consequatur et nihil. Quisquam illo et eligendi voluptatem. Vitae nesciunt ut ratione aut aut quos dolor. Sit ex incidunt asperiores et numquam quis expedita. Labore quidem corrupti omnis alias ex deserunt. Dolore id atque et ad commodi eius porro. Excepturi ducimus quae sunt beatae. Voluptatem repudiandae velit sunt sed. Perspiciatis veritatis est dolor accusantium facilis. Ipsum aut autem quis deserunt aspernatur sequi impedit. Vel sit cupiditate qui distinctio. Et est pariatur quo iste eveniet quos. Sed hic consequatur quas et occaecati perferendis illum. Officiis sequi est dolorum quibusdam aspernatur. Praesentium aut adipisci odit ex facilis. Aspernatur perspiciatis ut aliquam voluptas et nisi sed quod. Quam et inventore earum reprehenderit. Aut id labore ullam aspernatur veniam ea. Omnis rem ut temporibus nostrum. Quo repellat sint doloremque nihil eveniet. Architecto nesciunt in quia iste enim recusandae laboriosam. Quia est dignissimos laudantium nulla esse. Atque nihil harum qui. Aspernatur a omnis sit repellendus porro voluptatem. Mollitia beatae tempora nesciunt quas et et qui. Beatae saepe sapiente itaque eaque molestias. Voluptas qui libero voluptate accusantium quidem deserunt aspernatur. Dignissimos soluta fuga atque enim eveniet. Corporis corporis et consequuntur odio.', '1', 6, 62, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(7, 'Ut et suscipit quidem error deleniti.', 'ut-et-suscipit-quidem-error-deleniti', 'Natus occaecati suscipit ut laboriosam animi temporibus veritatis odio. Quia impedit dignissimos odio eum inventore eos sit. Pariatur vel qui porro doloremque. Cumque asperiores repellat sed praesentium ratione fugit molestias eum.', 'Aut quo sint id quia voluptas. Aut inventore dignissimos nulla deserunt sapiente. Architecto optio minus tempora aut. Maxime ullam voluptas labore eius iusto eum vero. Repellat magni expedita magni vitae tempore. Voluptatem dolores voluptas et non. Amet quo aperiam nisi doloribus. In commodi a rerum adipisci architecto. Ducimus occaecati nihil atque exercitationem ut. Placeat aut ullam quis. Voluptates voluptates omnis deserunt et. Dolorem voluptas recusandae doloribus quia facilis est enim. Et pariatur consequatur ipsum nesciunt molestias. Dignissimos rerum autem facilis enim hic. Officiis consequatur ipsam sit sit. Sed voluptatibus eum dignissimos illum voluptatem dicta quaerat. Eos odit est cum. Sit est nihil sunt. Veritatis aspernatur recusandae et dolorum blanditiis omnis laudantium. Incidunt qui temporibus nisi in labore aperiam quidem. Et nisi enim consectetur saepe. Minus odio sed officia quidem. Dicta autem aut esse at quas. Qui ducimus quidem vel libero vero sed excepturi. Fugit voluptatem corporis possimus ipsam ad nulla occaecati. Magni voluptas ducimus vitae atque. A ipsum unde doloribus voluptatem quia. Dolor mollitia pariatur voluptatem quo veritatis reiciendis quis. Vel recusandae in atque est ratione quasi non. Deleniti sequi omnis magnam placeat quos odio dignissimos. Soluta enim nesciunt consequatur quae sit eius non. Rem voluptates est sed perferendis placeat magnam hic. Quae et est nemo ex voluptatum eum dolores voluptatibus. A numquam qui qui natus rerum qui qui. Ipsum maiores et nam non dolor nihil vel. Enim consequuntur earum sequi quia quia ipsum vel possimus. Et dolorem aut corporis ullam sequi iste omnis. Laboriosam neque dolorum ad at id eius. Dignissimos atque rerum minima. Quibusdam qui iure nulla odit. Excepturi numquam architecto veniam ut laudantium.', '1', 1, 54, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(8, 'Neque beatae quia rerum.', 'neque-beatae-quia-rerum', 'Et eos soluta voluptas. Tenetur non inventore nemo vel ullam. Consectetur sapiente est sequi est perferendis necessitatibus natus. Quod fugiat rem perspiciatis temporibus amet voluptate deserunt.', 'Et quasi aut asperiores ratione molestias. Accusamus officiis exercitationem quisquam asperiores. Cupiditate consectetur aut illo illo cum. Est et nemo quas. Explicabo blanditiis quis velit fugiat iure repellat. Tenetur aut in itaque numquam dicta aperiam. Reiciendis enim magnam enim consequatur expedita. Repellat commodi velit repellat atque dolor. Natus alias aut et quos recusandae placeat quia. Animi laboriosam suscipit enim laudantium blanditiis saepe necessitatibus. Aut provident et voluptates quo. Cumque et et ea. Alias qui est alias iste. Unde mollitia possimus in accusantium quibusdam voluptates sunt qui. Laudantium qui officiis quam alias culpa temporibus. Sequi qui beatae modi voluptas consequatur. Et non ullam nihil repellat saepe dolore illum. Possimus id magni ut cum. Quas libero dicta cum dolorem porro fugit repellat. Temporibus numquam dolor quia quasi hic iste nihil. Omnis dolores quis praesentium perferendis corrupti. Odit doloribus est porro quidem. Numquam qui asperiores eos debitis. Dicta magni tempore placeat delectus eum veritatis explicabo. Repellat reprehenderit rerum temporibus ad deleniti repudiandae. Et odio eaque voluptatem numquam pariatur. Voluptas quis officiis facere in minima rerum non. Praesentium fuga laudantium iusto aut asperiores repellat itaque. Alias quam corrupti ut qui facere. Et tenetur et et quam corrupti deserunt. Adipisci vel expedita neque nostrum. Optio labore facilis tempora. Corrupti ad natus sed quia eos enim dolorem. Animi in minima eligendi maiores enim exercitationem illo. Maxime ea praesentium perferendis sit. Ullam recusandae debitis aspernatur consequatur amet est. Dicta eum eius a voluptas fugiat illum qui. Possimus corrupti quos dolor sint iste distinctio ex non. Illum hic velit officia harum nulla. Accusantium explicabo dolor quisquam non aut quos assumenda. Ut accusantium quibusdam aut omnis exercitationem asperiores qui vel. Nobis cupiditate quidem vel ratione molestiae doloribus occaecati.', '2', 4, 1, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(9, 'Et quisquam sed a quod et ut.', 'et-quisquam-sed-a-quod-et-ut', 'Corporis illum aut corrupti sed. Dolorem ut et amet deserunt sapiente et velit. Qui porro tempora maiores earum aut minus id. Dolore ut voluptatum non.', 'Optio vero sed neque mollitia consequatur expedita aut. Facilis odio ea neque exercitationem. Et tenetur enim autem impedit est saepe. Quaerat consequuntur cum enim itaque quis sit sunt. Nemo adipisci et et eos quia. Cupiditate odio et minus deserunt reiciendis deserunt. Quos molestiae esse velit vel eligendi qui laudantium. Accusantium cum quidem vitae. Aut hic praesentium in vero nobis. Assumenda et at neque voluptas nihil. Quia laboriosam perferendis ut aut dolores. Voluptatum ipsum veritatis consequatur sunt molestiae. Inventore qui veritatis qui voluptatum fugiat. Mollitia recusandae rerum qui vitae facere enim magnam. Est asperiores eum quam iste similique. Aliquid vel eos nemo ea amet facere beatae. Harum aspernatur vel eum maiores fugiat magnam. Aut vitae molestiae perspiciatis veritatis sint non. Earum voluptate nisi facilis voluptas ipsam vel sapiente. Ad praesentium eos perferendis. Rerum delectus harum voluptatum laboriosam. Corrupti maiores error est neque eligendi et quam. Est cupiditate omnis sequi provident. Dolores error quia ut provident ut quasi animi. Molestiae aliquam rerum alias vel. Tenetur dignissimos tempora omnis velit beatae voluptate. Velit earum praesentium mollitia id a dolores modi eligendi. Maxime et placeat aliquam possimus. Totam mollitia unde ipsum dolores est occaecati magni sint. Ipsam unde consequatur et eum unde laboriosam tempore praesentium. Quidem quia perspiciatis itaque dolorem quia enim. Quasi aut error ducimus ut corporis ut. Maiores sint similique dolorem in. Doloremque possimus qui aut molestias voluptates doloremque. Qui deserunt et tempora nesciunt consequatur. Voluptatem at explicabo officiis molestias est nisi velit quia. Quod illum et ut esse iusto. Et voluptatem doloribus at consectetur nobis sint sed. Consequatur amet harum rem dolorem. Odio dolore accusamus facere alias. Ut vel alias sed nemo perferendis. Quia eligendi nesciunt et delectus ea sit. Aut et rerum a accusantium eligendi laborum.', '1', 5, 11, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(10, 'Aspernatur est accusamus consequuntur maxime.', 'aspernatur-est-accusamus-consequuntur-maxime', 'Voluptatum doloremque adipisci odio facere vel. Voluptas architecto non error. Quia ipsum facere temporibus sint unde et nihil ut.', 'Quas sed sunt et sit temporibus magni. Laborum aut blanditiis cupiditate recusandae ipsam. In sed voluptatum aperiam est nihil magni sit mollitia. Nam voluptas culpa natus et nostrum. Odio non ut ipsa nesciunt reprehenderit. Omnis asperiores et enim enim. Voluptatem qui fugiat ab eveniet nihil nihil. A explicabo cupiditate ipsam explicabo et ex. Ipsum dicta et temporibus. Quam voluptates earum aspernatur asperiores et. Quo ipsa atque sed dolorem recusandae cum quidem. Et esse in ea omnis ut rem odit ut. Amet explicabo atque nesciunt perferendis ipsam. Eligendi rem optio animi ut eaque vel. Deleniti aperiam facilis consequatur aliquid hic quas. Asperiores ut repellat ab perspiciatis at ut nisi. Ad qui nesciunt iure consectetur. Sed et quaerat perspiciatis ut esse harum reiciendis sapiente. Et atque accusantium sit officiis. Hic quidem dolorem earum. Laborum eligendi ad ad commodi animi. Voluptatem optio totam mollitia consequuntur. Qui fuga quia ducimus deleniti quos qui atque. Esse et ipsum illo repellendus eveniet et. Culpa et ullam quo non. Eum nihil consequuntur ducimus aut qui. Ut fugit aut explicabo doloremque voluptatem enim sint. Neque fugit et nobis et. Minus dolor ut earum nobis rerum. Aut eos consectetur sequi quia. Minus sit amet consectetur qui aut expedita. Dicta temporibus similique ut fugiat dolore. Ex aut sint aspernatur tenetur. Quia quidem dolor et dolorem sed. Quis sunt atque ipsam quod quis debitis. Beatae fugit corrupti quae quos non dolorum. Enim et veritatis molestiae et. Dolores et dignissimos unde et omnis dignissimos rem. Recusandae saepe provident corporis vel. Itaque et quis eum sequi consectetur reiciendis ex. Amet sint voluptatem assumenda. Quia ut fugit doloremque illum nisi aut non. Velit facere quia non quasi consequatur qui. Nisi atque accusamus illo. Ab consequuntur sit soluta perspiciatis dignissimos ipsum. Dolorum sed rerum sunt consequatur et doloribus dicta.', '2', 4, 8, '2021-01-27 03:34:02', '2021-01-27 03:34:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Néstor Mouriño', 'nestor.mourino@ieee.org', NULL, '$2y$10$w6KZjlD9arhKgH/wthQ8duPdCr6wjcDccJUfkewZPm2uAULbL81oy', NULL, NULL, NULL, NULL, NULL, '2021-01-27 03:34:01', '2021-01-27 03:34:01'),
(2, 'Mr. Shaun Block', 'dicki.angelina@example.com', '2021-01-27 03:34:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'vktsgnCxon', NULL, NULL, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(3, 'Mariam Hahn I', 'millie.armstrong@example.net', '2021-01-27 03:34:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'UNDNEkdx1I', NULL, NULL, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(4, 'Dudley Douglas', 'vmonahan@example.com', '2021-01-27 03:34:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '5LUbAIXSZm', NULL, NULL, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(5, 'Demetrius Hill', 'blick.alysson@example.org', '2021-01-27 03:34:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'zBe64ohhU6', NULL, NULL, '2021-01-27 03:34:02', '2021-01-27 03:34:02'),
(6, 'Mr. Eugene Schiller IV', 'mckenna.bednar@example.org', '2021-01-27 03:34:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'vDDeJzHQ6v', NULL, NULL, '2021-01-27 03:34:02', '2021-01-27 03:34:02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_materia_id_foreign` (`materia_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_materia_id_foreign` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
