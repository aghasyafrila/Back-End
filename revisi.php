<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <ul>
            <li><label for="Nama">Masukan judul buku</label>
                <input type="text" name="Nama">
            </li>
            <li>
                <label for="penghasilan">Masukkan nama pengarang</label>
                <input type="text" name="pengarang">
            </li>
            <li>
                <label for="penghasilan">Masukkan tahun</label>
                <input type="text" name="tahun">
            </li>
     
                <input type="submit" name="submit">
                <input type="submit" name="array" value="jadikan Array">
        </ul>
    </form>
    <?php
    interface bukumanager{
        public function get_os();
      }
      
      
    function printIterable(iterable $itemiterable)
    {
        foreach ($itemiterable as $item) {
            echo $item;
        }
        str_split($item);
        
    }
    
    class buku implements bukumanager
    {
        protected $name;
        private $pengarang;
        public  $tahun;
        public static $os = "Hasil";


        public function __construct($name,  $pengarang, $tahun)
        {   
            
            $this->name = $name;
            $this->pengarang = $pengarang;
            $this->tahun = $tahun;

        }
        public function get_os(){
            return self::$os;
        }

        public function get_all(){
            $keystrong = array(self::$os, $this->name, $this->pengarang, $this->tahun);
            return $keystrong;
            
        }

        

        public function intro()
        {


            echo "Judul buku ini {$this->name} nama pengarangnya adalah {$this->pengarang}. Buku ini di terbitkan pada tahun {$this->tahun}.";
            echo "<br></br>";
         }
         
        public function __destruct()
        {
            echo "Fungsi Destruct Berhasil dijalankan";
        }
    }
    // Inherit from manager 
    class novel extends buku
    {
        public function message()
        {   echo "<br>";
            echo "Hasil : ";
        }
    }
    if (isset($_POST['submit'])) {
        $name = $_POST['Nama'];
        $pengarang = $_POST['pengarang'];
        $tahun = $_POST['tahun'];
    
        
        $buku = array($name,  $pengarang, $tahun);
        
    
        $produk1 = new novel($name,  $pengarang, $tahun);
        $produk1->message();
        $produk1->intro();
        
        

    }
    elseif (isset($_POST['array'])) {
        $name = $_POST['Nama'];
        $pengarang = $_POST['pengarang'];
        $tahun = $_POST['tahun'];


        $produk1 = new novel($name,  $pengarang, $tahun);
        $meong = $produk1->get_all();
        print_r($meong);
    }
    else {
        
    }


    ?>

</body>

</html>
