@@ -0,0 +1,10 @@
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

session_unset();
session_destroy();

header("Location: /lab11_php_oop/auth/login");
exit;
