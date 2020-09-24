<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Soal Pemakaian __Constructor </title>
</head>

<body>
    <?php
    // buat class laptop
    class laptop
    {
        private $pemilik = "Andi";
        private $merk = "Lenovo";

        public function __construct()
        {
            echo "Ini berasal dari Constructor Laptop";
        }

        public function hidupkan_laptop()
        {
            return "Hidupkan Laptop $this->merk punya $this->pemilik";
        }

        public function __destruct()
        {
            echo "Ini berasal dari Destructor Laptop";
        }
    }

    //buat objek dari class laptop (instansiasi)
    // terpanggilnya __construct dan __destruct karna object laptop dipnggil dan public
    $laptop_andi = new laptop();

    echo "<br />";
    echo $laptop_andi->hidupkan_laptop();
    echo "<br />";

    // hapus objek $laptop_andi
    unset($laptop_andi);

    echo '<br />';
    echo "Objek Telah Dihancurkan";
    echo "<hr />";

    ?>



    <?php
    // buat class laptop
    class laptop1 {

        private $pemilik;
        private $merk;

        // constructor sebagai pembuat nilai awal
        public function __construct($pemilik, $merk)
        {
            $this->pemilik = $pemilik;
            $this->merk = $merk;
        }

        public function hidupkan_laptop()
        {
            return "Hidupkan Laptop $this->merk punya $this->pemilik";
        }
    }

    // buat objek dari class laptop (instansiasi)
    $laptop_andi = new laptop1("Andi", "Lenovo");

    echo $laptop_andi->hidupkan_laptop();
    echo "<br />";

    $laptop_anto = new laptop1("Anto", "Acer");

    echo $laptop_anto->hidupkan_laptop();
    ?>
</body>

</html>