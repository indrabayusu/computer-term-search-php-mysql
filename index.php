<?php
$start_time = microtime(true);

try {
    $pdo = new PDO("mysql:host=localhost;dbname=computer-term-search-php-mysql", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Koneksi database gagal: " . $e->getMessage();
    exit();
}

include_once("function/kmp.php");
include_once("function/boyer.php");

$kata = isset($_GET['kata']) ? trim($_GET['kata']) : '';

$finish_time = microtime(true);
$total_time = round($finish_time - $start_time, 4);
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Aplikasi Kamus Bahasa Istilah Komputer</title>
    <link href="src/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Flat Search Box Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <style>
        body {
            background: url(src/images/bg1.jpg) no-repeat;
            background-size: cover;
            font-family: 'Open Sans', sans-serif;
            font-size: 100%;
        }
        .search-results {
            width: 535px;
            background-color: #0a0a0a;
            color: #fafefd;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .highlighted {
            color: #00ffff;
        }

        .result-text {
            text-align: justify;
            font-size: 14px;
            padding-top: 5px;
            margin-bottom: 10px;
        }

        .result-time {
            text-align: center;
            font-size: 13px;
        }

        .speed-message {
            text-align: center;
            color: #00ffff;
            font-size: 16px;
            padding-bottom: 6px;
            margin-top: -5px;
        }
    </style>
</head>

<body>
    <div class="topnav" style="padding-top: 10px;">
        <a href="pages/index_kmp.php" style="color: aliceblue;padding-right:20px;padding-left:40px;">Algortima Knuth Morris Pratt</a>
        <a href="pages/index_boyer.php" style="color: aliceblue;padding-left:40px;">Algoritma Boyer Moore</a>
        <a href="pages/informasi.php" style="color: aliceblue;padding-left:40px;">Informasi</a>
        <hr style="color: #8EDB15;">
    </div>

    <!-- Search Start Here -->
    <div class="search" style="margin-top: 40px;">
    <h1 style="text-align: center; font-size: 32px; color: #8EDB15; padding-bottom: 25px;">Aplikasi Kamus Bahasa Istilah Komputer</h1>
        <?php
        if (!empty($kata)) {
            echo "<h3 style='font-size: 18px; padding: 2px; color: red;'> Hasil Pengecakan Testing: " . $total_time . " seconds</h3>";
            echo "<h3 style='font-size: 18px; padding: 2px; color: aliceblue;'>Memory yang digunakan: " . memory_get_usage() . " bytes \n </h3><br>";
            echo " <a href='index.php'>
            <button type='button' style='background-color: #8EDB15; color: white; text-shadow: 2px black; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 5px; margin-bottom: 20px;'>
                Refresh Testing
            </button>
        </a>";
        }
        ?>
        <div class="s-bar" style="margin-bottom: -150px;">
            <form method="get" action="">
                <input type="text" name="kata" value="<?php echo htmlentities($kata, ENT_QUOTES); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Cari kosakata';}">
                <input type="submit" value="Cari">

                <?php
                $KMP = new KMP();
                $Boyer = new Boyer();

                $stmt = $pdo->prepare("SELECT * FROM tb_kosakata WHERE kosakata LIKE :kata");
                $stmt->execute(['kata' => "%$kata%"]);

                $incorrect_search = 0;
                $correct_search = 0;
                $best_kmp_time = PHP_FLOAT_MAX;
                $worst_kmp_time = 0;
                $best_boyer_time = PHP_FLOAT_MAX;
                $worst_boyer_time = 0;

                while ($teks = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    if (!empty($kata)) {
                        $start_time_kmp = microtime(true);

                        $hasil_kmp = $KMP->KMPSearch($kata, $teks['kosakata']);

                        $finish_time_kmp = microtime(true);
                        $search_execution_time_kmp = round(($finish_time_kmp - $start_time_kmp) * 10000, 4);

                        $start_time_boyer = microtime(true);

                        $hasil_boyer = $Boyer->BoyerMoore($teks['kosakata'], $kata);

                        $finish_time_boyer = microtime(true);
                        $search_execution_time_boyer = round(($finish_time_boyer - $start_time_boyer) * 10000, 4);

                        echo "<div class='search-results'>";
                        echo nl2br(str_replace($kata, "<span style='color: #fff;'>" . $kata . "</span>", $teks['kosakata']));
                        echo "<p style='text-align: justify; font-size: 13px;padding-top: 5px; padding-bottom:6px;'>" . $teks['makna'] . "</p><hr/>";
                        echo "<p style='text-align: center; font-size: 13px;'>Waktu Pencarian KMP: <span class='highlighted'> $search_execution_time_kmp seconds </span></p>";
                        echo "<p style='text-align: center; font-size: 13px;'>Waktu Pencarian Boyer-Moore: <span class='highlighted'> $search_execution_time_boyer seconds </span></p><br>";

                        if ($search_execution_time_kmp < $search_execution_time_boyer) {
                            echo "<p style='text-align: center; color: #00ffff; font-size: 16px; margin-top: -5px; padding-bottom: 6px;'>Waktu Hasil Pencarian KMP lebih cepat daripada Boyer-Moore</p><hr/>";
                            $correct_search++;
                        } elseif ($search_execution_time_kmp > $search_execution_time_boyer) {
                            echo "<p style='text-align: center; color: #00ffff; font-size: 16px; margin-top: -5px; padding-bottom: 6px;'>Waktu Hasil Pencarian Boyer-Moore lebih cepat daripada KMP</p><hr/>";
                            $correct_search++;
                        } else {
                            echo "<p style='text-align: center; color: #00ffff; font-size: 16px; margin-top: -5px; padding-bottom: 6px;'>Waktu Hasil Pencarian KMP dan Boyer-Moore memperoleh waktu yang sama</p><hr/>";
                        }

                        $best_kmp_time = min($best_kmp_time, $search_execution_time_kmp);
                        $worst_kmp_time = max($worst_kmp_time, $search_execution_time_kmp);
                        $best_boyer_time = min($best_boyer_time, $search_execution_time_boyer);
                        $worst_boyer_time = max($worst_boyer_time, $search_execution_time_boyer);
                        echo "</div>";
                    }
                }

                if (!empty($kata)) {
                    echo "<p style='text-align: center;color: #00ffff;'>Jumlah Pencarian Benar: " . $correct_search . "</p>";
                    echo "<p style='text-align: center;color: #00ffff;'>Jumlah Pencarian Salah: " . $incorrect_search . "</p>";
                    echo "<p style='text-align: center;color: #00ffff;'>Best Case KMP: " . $best_kmp_time . " seconds</p>";
                    echo "<p style='text-align: center;color: #00ffff;'>Worst Case KMP: " . $worst_kmp_time . " seconds</p>";
                    echo "<p style='text-align: center;color: #00ffff;'>Best Case Boyer-Moore: " . $best_boyer_time . " seconds</p>";
                    echo "<p style='text-align: center;color: #00ffff; margin-bottom: -50px;'>Worst Case Boyer-Moore: " . $worst_boyer_time . " seconds</p>";
                }
                ?>
            </form>
        </div>
    </div>
    <!--Search End Here-->

    <div class="copyright" style="padding-bottom: 25px;">
        <p>Created by <a href="index.php" style="color: #8EDB15; text-decoration: none;">Indra Bayu Setiadi Utomo</a></p>
    </div>
</body>

</html>