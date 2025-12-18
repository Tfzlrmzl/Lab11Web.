<!DOCTYPE html>
<html>
<html lang="id">
<head>
    <title>Lab 11 PHP OOP</title>
    <meta charset="UTF-8">
    <title>Framework PHP OOP Sederhana</title>

    <!-- 🎨 CSS UTAMA -->
    <link rel="stylesheet" href="/lab11_php_oop/assets/css/style.css">
</head>
<body>

<div class="container">
<header>
    <h2>🍰 Framework PHP OOP Sederhana 🍜</h2>
    <p>Manajemen Artikel dengan Konsep OOP & Routing 🍩</p>
</header>
<hr>

    <!-- 🎀 HEADER / NAVBAR -->
    <div class="header">
        <div>
            🍰 Framework PHP OOP Sederhana
        </div>

        <?php if (isset($_SESSION['login'])) : ?>
            <div>
                <a href="/lab11_php_oop/artikel">📄 Artikel</a>
                <a href="/lab11_php_oop/user/profile">👤 Profil</a>
                <a href="/lab11_php_oop/auth/logout">🚪 Logout</a>
            </div>
        <?php endif; ?>
    </div>

    <!-- 🧁 CARD ISI HALAMAN -->
    <div class="card">
