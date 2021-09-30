<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $judul_buku = isset($_POST['judul_buku']) ? $_POST['judul_buku'] : '';
    $tanggal_pinjam = isset($_POST['tanggal_pinjam']) ? $_POST['tanggal_pinjam'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';

    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO kontak VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id, $username, $judul_buku, $tanggal_pinjam, $status]);
    // Output message
    $msg = 'Created Successfully!';
}
?>


<?=template_header('Tambah Data')?>

<div class="content update">
	<h2>Tambah Data</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="username">Username</label>
        <input type="text" name="id" value="auto" id="id">
        <input type="text" name="username" id="username">
        <label for="judul_buku">Judul Buku</label>
        <label for="tanggal_pinjam">Tanggal Pinjam</label>
        <input type="text" name="judul_buku" id="judul_buku">
        <input type="date" name="tanggal_pinjam" id="tanggal_pinjam">
        <label for="status">status</label>
        <input type="text" name="status" id="status">
        <input type="submit" value="Tambahkan Data">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>