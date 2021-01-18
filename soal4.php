<!-- Buatlah sebuah program yang mencetak angka dari 1 sampai dengan 50, dengan ketentuan sebagai berikut:
- bila angka merupakan kelipatan tiga akan mencetak kata “Foo” (tanpa tanda petik dua)
- bila angka merupakan kelipatan lima akan mencetak “Bar”
- bila angka merupakan kelipatan tiga dan lima kedua-duanya, maka akan mencetak “FooBar”. -->

<?php

for ($i=1; $i <=50 ; $i++) { 
    if ($i%3 == 0 && $i%5 == 0) {
        echo "FooBar <br>";
    }elseif ($i%3 == 0) {
        echo "Foo <br>";
    }elseif ($i%5 == 0) {
        echo "Bar <br>";
    }else{
        echo $i."<br>";
    }
}