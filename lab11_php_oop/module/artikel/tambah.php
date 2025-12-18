<?php
$db = new Database();
$form = new Form('', 'Simpan');
// 🔐 PROTEKSI LOGIN
if (!isset($_SESSION['login'])) {
    header("Location: /lab11_php_oop/auth/login");
    exit;
}

$db   = new Database();
$form = new Form('', '💾 Simpan Artikel');

// proses simpan
if ($_POST) {
    $data = [
        'judul' => $_POST['judul'],
@@ -12,17 +19,22 @@
        header("Location: /lab11_php_oop/artikel");
        exit;
    } else {
        echo "<p style='color:red'>Gagal menyimpan data</p>";
        echo "<p style='color:red'>❌ Gagal menyimpan data</p>";
    }
}
?>

<h3>Tambah Artikel</h3>
<h3>➕ Tambah Artikel ✨</h3>

<?php
$form->addField('judul', 'Judul Artikel');
$form->addField('isi', 'Isi Artikel', 'textarea');
$form->displayForm();
?>
<div class="card">
    <?php
    $form->addField('judul', '📝 Judul Artikel');
    $form->addField('isi', '📄 Isi Artikel', 'textarea');
    $form->displayForm();
    ?>

<a href="/lab11_php_oop/artikel">← Kembali</a>
    <br>
    <a href="/lab11_php_oop/artikel" class="action-link">
        ⬅️ Kembali
    </a>
</div>
