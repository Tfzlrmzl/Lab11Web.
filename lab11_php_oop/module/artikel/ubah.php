<?php
// 🔐 PROTEKSI LOGIN
if (!isset($_SESSION['login'])) {
    header("Location: /lab11_php_oop/auth/login");
    exit;
}

$db = new Database();

// Ambil ID dari URL
// ambil id
$id = $_GET['id'] ?? null;

// Validasi ID
if (!$id) {
    echo "<p>ID tidak ditemukan</p>";
    echo "<p>❌ ID tidak ditemukan</p>";
    exit;
}

// Ambil data artikel berdasarkan ID
// ambil data
$artikel = $db->get('artikel', "id=$id");

$form = new Form('', 'Update');
$form = new Form('', '🔄 Update Artikel');

// Jika form disubmit
// proses update
if ($_POST) {
    $data = [
        'judul' => $_POST['judul'],
        'isi'   => $_POST['isi']
    ];

    $update = $db->update('artikel', $data, "id=$id");

    if ($update) {
    if ($db->update('artikel', $data, "id=$id")) {
        header("Location: /lab11_php_oop/artikel");
        exit;
    } else {
        echo "<p style='color:red'>Gagal mengupdate data</p>";
        echo "<p style='color:red'>❌ Gagal mengupdate data</p>";
    }
}
?>

<h3>Ubah Artikel</h3>
<h3>✏️ Ubah Artikel 💕</h3>

<?php
$form->addField('judul', 'Judul Artikel', 'text', $artikel['judul']);
$form->addField('isi', 'Isi Artikel', 'textarea', $artikel['isi']);
$form->displayForm();
?>
<div class="card">
    <?php
    $form->addField('judul', '📝 Judul Artikel', 'text', $artikel['judul']);
    $form->addField('isi', '📄 Isi Artikel', 'textarea', $artikel['isi']);
    $form->displayForm();
    ?>

<a href="/lab11_php_oop/artikel">← Kembali</a>
    <br>
    <a href="/lab11_php_oop/artikel" class="action-link">
        ⬅️ Kembali
    </a>
</div>
