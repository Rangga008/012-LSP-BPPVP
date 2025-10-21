<?php
for($i=1;$i<=6  ;$i++){
for($j=1;$j<=$i;$j++){
echo "*";
}
echo "<br>";
}

for($i=5;$i>=1  ;$i--){
    for($j=1;$j<=$i;$j++){
    echo "*";
    }
    echo "<br>";
    }
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
for($baris =1; $baris <=5; $baris++){
    echo "<tr>";
    for($kolom=1; $kolom <= 4; $kolom++){
        echo "<td>Baris ke $baris Kolom ke $kolom </td>";
    }
    echo "</tr>";
}
?>
    </table>
    <br>
    <br>
    <br>
    <br>
    <?php
    function hitungluaslingkaran($r){
        $luas = 3.14 * $r * $r;
        return $luas;
    }
    $jari = 10;
    $luaslingkaran = hitungluaslingkaran($jari);
    echo "Luas lingkaran dengan jari-jari $jari adalah $luaslingkaran";

    function hitungkelilinglingkaran($r){
        $keliling = 2 * 3.14 * $r;
        return $keliling;
    }
    $kelilinglingkaran = hitungkelilinglingkaran($jari);
    echo "<br>Keliling lingkaran dengan jari-jari $jari adalah
    $kelilinglingkaran";
    ?>
    <br>
    <br>
    <?php
    $nilai = array(80, 85, 90, 96, 78, 76);
    $total = 0;

    function hitungrata2($nilaiarray, $jumlahnilai){
        $total = 0;
        for($i=0; $i < $jumlahnilai; $i++){
            $total += $nilaiarray[$i];
        }
        $rata2 = $total / $jumlahnilai;
        return $rata2;
    }
    $jumlahnilai = count($nilai);
    $rata2 = hitungrata2($nilai, $jumlahnilai);
    echo "<br>Rata-rata nilai adalah $rata2";
    function predikatnilai($rata2){
        if($rata2 >= 90){
            return "A";
        } elseif($rata2 >= 80){
            return "B";
        } elseif($rata2 >= 70){
            return "C";
        } elseif($rata2 >= 60){
            return "D";
        } else{
            return "E";
        }
    }
    $predikat = predikatnilai($rata2);
    echo "<br>Predikat nilai adalah $predikat";
    
    
    ?>
</body>

</html>