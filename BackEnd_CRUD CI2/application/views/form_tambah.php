<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Siswa</title>
</head>
<body>
    <form action="<?= base_url('tambahSiswa') ?>" method="post">
        <p>Nama Lengkap</p>
        <input type="text" name='nama' placeholder='Nama Lengkap' required><br>

        <p>Tanggal Lahir</p>
        <input type="date" name='tgl' required><br>

        <p>Jenis Kelamin</p>
        <input type="radio" name='jk' required value='Laki - laki'>Laki - laki
        <input type="radio" name='jk' required value='Perempuan'>Perempuan
        
        <p>Kelas</p>
        <select name="kelas">
            <option value="X">X</option>
            <option value="XI">XI</option>
            <option value="XII">XII</option>
        </select>

        <p>Alamat</p>
        <textarea name="alamat" cols="30" rows="10"></textarea><br>

        <button type='submit'>Tambah Siswa</button>
    
    </form>
</body>
</html>