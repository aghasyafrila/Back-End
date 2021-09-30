<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $judul_buku = isset($_POST['judul_buku']) ? $_POST['judul_buku'] : '';
        $tanggal_pinjam = isset($_POST['tanggal_pinjam']) ? $_POST['tanggal_pinjam'] : '';
        $status = isset($_POST['status']) ? $_POST['status'] : '';
        
        // Update the record
        $stmt = $pdo->prepare('UPDATE kontak SET id = ?, username = ?, judul_buku = ?, tanggal_pinjam = ?, status = ? WHERE id = ?');
        $stmt->execute([$id, $username, $judul_buku, $tanggal_pinjam, $status, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM kontak WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>



<?=template_header('Read')?>

<div class="content update">
	<h2>Update Contact #<?=$contact['id']?></h2>
    <form action="update.php?id=<?=$contact['id']?>" method="post">
        <label for="id">ID</label>
        <label for="username">Username</label>
        <input type="text" name="id" value="<?=$contact['id']?>" id="id">
        <input type="text" name="username" value="<?=$contact['username']?>" id="username">
        <label for="judul_buku">Judul Buku</label>
        <label for="tanggal_pinjam">Tanggal Pinjam</label>
        <input type="text" name="judul_buku" value="<?=$contact['judul_buku']?>" id="judul_buku">
        <input type="text" name="tanggal_pinjam" value="<?=$contact['tanggal_pinjam']?>" id="tanggal_pinjam">
        <label for="status">Status</label>
        <input type="text" name="status" value="<?=$contact['status']?>" id="title">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>