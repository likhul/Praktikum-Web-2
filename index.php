<?php

include "Orang.php";
include "Visibility.php";
include "Nilai.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 2</title>
</head>
<body>
    <h1>Praktikum 2</h1>
    <div>
        <?php
            $adi = new Orang();
            $adi->nama = "Solikhul Hadi";

            $adi->ucapSalam();

            echo "<br>";

            $reza = new Orang();
            $reza->nama = "Shelly Walker ";
            
            $reza->ucapSalam();

            echo "<br>";

            $visibility = new visibility();
            $visibility-> tampilkanProperty();

            echo "Ini Akses di luar kelas <br>";
            echo "Public : " , $visibility->public , "<br>";
            // echo "protected : " , $visibility->protected , "<br>";
            // echo "Private : " , $visibility->private , "<br>";

            echo "<br> <br>";

            echo "Nilai MK Pemrogramman Web: <br>";
            $nilai = new Nilai();
            $nilai->SetTugas(79);
            $nilai->SetUts(90);
            $nilai->SetUas(89);

            echo "Nilai UTS : " , $nilai->getUts() , "<br>";
            echo "Nilai UAS : " , $nilai->getUas() , "<br>";
            echo "Nilai TUGAS : " , $nilai->getTugas() , "<br>";
            echo "Nilai NILAI : " , $nilai->hitungTotal() , "<br>";
            
        ?>
    </div>
</body>
</html>