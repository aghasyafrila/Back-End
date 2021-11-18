<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Siswa</title>
</head>
<body>
    <form action="<?= base_url('editSiswa') ?>" method="post">
        <input type="hidden" name='id' value='<?= $data->id ?>'>
        <p>Nama Lengkap</p>
        <input type="text" name='nama' placeholder='Nama Lengkap' required value='<?= $data->nama_siswa ?>'><br>

        <p>Tanggal Lahir</p>
        <input type="date" name='tgl' required value='<?= $data->tanggal_lahir ?>'><br>

        <p>Jenis Kelamin</p>
        <?php  if($data->jk === "Laki - laki"):  $selected = 'checked';  else:  $selected = '';  endif; ?>

        <input type="radio" name='jk' required value='Laki - laki' <?= $selected ?>>Laki - laki

        <?php  if($data->jk === "Perempuan"):  $selected = 'checked';  else:  $selected = '';  endif; ?>

        <input type="radio" name='jk' required value='Perempuan' <?= $selected ?>>Perempuan
        
        
        <p>Kelas</p>
        <select name="kelas">
            <?php if($data->kelas === "X"): $select = 'selected'; else: $select=''; endif; ?>
            <option value="X" <?= $select ?> >X</option>

            <?php if($data->kelas === "XI"): $select = 'selected'; else: $select=''; endif; ?>
            <option value="XI" <?= $select ?> >XI</option>

            <?php if($data->kelas === "XII"): $select = 'selected'; else: $select=''; endif; ?>
            <option value="XII" <?= $select ?> >XII</option>
        </select>

        <p>Alamat</p>
        <textarea name="alamat" cols="30" rows="10"> <?= $data->alamat ?>  </textarea><br>

        <button type='submit'>Edit Siswa</button>
    
    </form>
</body>
</html>