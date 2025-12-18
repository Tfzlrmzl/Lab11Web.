<?php
// ===================================================
// BOOTSTRAP APLIKASI
// ===================================================

// Load konfigurasi
include "config.php";

// Load class OOP
include "class/database.php";
include "class/form.php";

// Session (opsional)
// ===============================
// BOOTSTRAP
// ===============================
session_start();

// ===================================================
// ROUTING LOGIC
// ===================================================

// Ambil path dari URL (hasil rewrite .htaccess)
$path = isset($_GET['path']) ? $_GET['path'] : 'artikel/index';

// Pecah path
$segments = explode('/', trim($path, '/'));
require_once 'config.php';
require_once 'class/Database.php';
require_once 'class/Form.php';

// ===============================
// ROUTING
// ===============================
$path = $_GET['path'] ?? '';
$path = trim($path, '/');

if ($path === '') {
    // kalau belum login → ke login
    if (!isset($_SESSION['login'])) {
        $path = 'auth/login';
    } else {
        $path = 'artikel/index';
    }
}

// Tentukan modul & halaman
$mod  = $segments[0] ?? 'artikel';
$page = $segments[1] ?? 'index';
$segments = explode('/', $path);
$module = $segments[0] ?? 'artikel';
$page   = $segments[1] ?? 'index';

// Tentukan file modul
$file = "module/$mod/$page.php";
$file = "module/$module/$page.php";

// ===================================================
// LOAD TEMPLATE + KONTEN
// ===================================================
include "template/header.php";
// ===============================
// VIEW
// ===============================
include 'template/header.php';

if (file_exists($file)) {
    include $file;
} else {
    echo "<h3>404 - Modul tidak ditemukan</h3>";
}

include "template/footer.php";
include 'template/footer.php';
