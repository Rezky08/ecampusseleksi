<!-- Buatlah fungsi untuk membagi 2 buah bilangan. **Tidak diperbolehkan** menggunakan operator pembagian seperti “div” atau “/”. Output hasil bagi adalah bilangan bulat saja, tidak perlu desimal. 
Contoh: 	7:2 = 3 atau 8:4 = 2 -->
<?php

function pembagiBilangan($a, $b)
{
    $res = 0;
    $temp = 0;
    while ($temp <= $a) {
        $temp += $b;
        if ($temp <= $a) {
            $res++;
        }
    }
    return $res;
}

$a = 40;
$b = 20;
$result = pembagiBilangan($a, $b);
echo $a . ':' . $b . '=' . $result;
