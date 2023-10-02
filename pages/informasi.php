<!DOCTYPE HTML>
<html>
<head>
<title>Aplikasi Kamus Bahasa Istilah Komputer</title>
  <link href="../src/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="keywords" content="Flat Search Box Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <style type="text/css">
/* Styling Kartu */
.kotak {
    background-color: #F5F5F5;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin: 20px auto;
    max-width: 800px;
}

.kotak h1 {
    font-size: 26px;
    font-weight: 600;
    color: #333;
    padding: 4px 14px 8px 14px;
    text-align: center;
}

.kotak h2 {
    font-size: 20px;
    font-weight: 600;
    color: #333;
    padding: 0 14px 8px 14px;
    text-align: center;
}

.kotak p {
    font-size: 16px;
    color: #555;
    padding: 0 24px 10px 24px;
    text-align: justify;
}

.kotak ul {
    list-style-type: disc;
    padding-left: 20px;
}

.kotak li {
    font-size: 16px;
    color: #555;
}


/* Atur Margin pada Kartu pada Layar Lebar */
@media (min-width: 768px) {
    .kotak {
        margin: 40px auto;
    }
}

  </style>
</head>
<body>
    <div class="topnav" style="padding-top: 10px;">
        <a href="index_kmp.php" style="color: aliceblue;padding-right:20px;padding-left:40px;">Algoritma Knuth Morris Pratt</a>
        <a href="index_boyer.php" style="color: aliceblue;padding-left:40px;">Algoritma Boyer Moore</a>
        <a href="informasi.php" style="color: aliceblue;padding-left:40px;">Informasi</a>
        <hr style="color: #8EDB15;">
    </div>

    <div class="kotak">
      <h1>Apa itu Aplikasi Bahasa Istilah Komputer?</h1>
      <p>
        Aplikasi Bahasa Istilah Komputer adalah sebuah alat yang memungkinkan Anda untuk mencari dan memahami istilah-istilah khusus yang digunakan dalam dunia komputer. Istilah-istilah ini seringkali sulit dipahami oleh orang awam, dan aplikasi ini bertujuan untuk membantu pengguna dalam mengartikan dan memahami istilah-istilah tersebut.
      </p>

      <h2>Perbandingan Pencarian Menggunakan Algoritma KMP dan BM</h2>
      <p>
        Aplikasi ini menggunakan dua algoritma pencarian yang berbeda, yaitu Algoritma Knuth Morris Pratt (KMP) dan Algoritma Boyer Moore. Kedua algoritma ini memiliki kelebihan dan kekurangan masing-masing dalam melakukan pencarian kata kunci dalam teks. Berikut adalah perbandingan kinerja keduanya:
      </p>
    
      <ul>
        <li>
          <span style="font-weight: 600;">Algoritma Knuth Morris Pratt (KMP):</span>
          <p>
            Algoritma KMP dikenal karena kemampuannya dalam mencari pola dalam teks dengan efisien. Ia menggunakan pendekatan prekomputasi yang memungkinkan pencarian lebih cepat daripada algoritma lain dalam beberapa kasus.
          </p>
        </li>
        <li>
          <span style="font-weight: 600;">Algoritma Boyer Moore:</span>
          <p>
            Algoritma Boyer Moore juga efisien dalam pencarian pola dalam teks. Keunggulan utama dari algoritma ini adalah kemampuannya dalam "melompat" ke depan dalam teks berdasarkan karakter yang tidak cocok, sehingga dapat lebih cepat menemukan kecocokan.
          </p>
        </li>
      </ul>

      <p>
        Dalam aplikasi ini, kami melakukan perbandingan kinerja antara kedua algoritma tersebut dalam mencari kata kunci dalam teks bahasa istilah komputer. Hasilnya akan ditampilkan bersama dengan informasi waktu yang dibutuhkan oleh masing-masing algoritma.
      </p>
    </div>

    <div class="copyright" style="margin-top: 1px; padding-bottom: 25px;">
        <p>Created by <a href="../index.php" style="color: #8EDB15; text-decoration: none;">Indra Bayu Setiadi Utomo</a></p>
    </div>
</body>
</html>