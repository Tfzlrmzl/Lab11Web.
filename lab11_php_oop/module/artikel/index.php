@@ -1,31 +1,56 @@
<?php
$db = new Database();
// 🔐 PROTEKSI LOGIN
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['login'])) {
    header("Location: /lab11_php_oop/auth/login");
    exit;
}

$db    = new Database();
