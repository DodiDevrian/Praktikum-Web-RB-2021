<?php
function operator(){
	echo "<h3>OPERATOR</h3>";
    $bilPertama = 10;
    $bilKedua = 5;
    
    echo "Bilangan 1 : " . $bilPertama . "<br> Bilangan 2 : " . $bilKedua;
    
    echo "<br><br>berikut merupakan hasil dari setiap operasi ";
    
    echo "<br><br>PENJUMLAHAN <br> Operator : + <br> Hasil : ".($bilPertama+$bilKedua);
    echo "<br><br>PENGURANGAN <br> Operator : - <br> Hasil : ".($bilPertama-$bilKedua);
    echo "<br><br>PERKALIAN <br> Operator : * <br> Hasil : ".($bilPertama*$bilKedua);
    echo "<br><br>PEMBAGIAN <br> Operator : / <br> Hasil : ".($bilPertama/$bilKedua);
    echo "<br><br>MODULUS <br> Operator : % <br> Hasil : ".($bilPertama%$bilKedua);
}

function arrayRandom(){
    echo "<h3> RANDOM ARRAY</h3>";

    $arrayRandom = array("eth", "doge", "shiba", "btc", "bsw", "bnb", "ada", "tko", "matic", "trx");
    shuffle($arrayRandom);
    
    foreach ($arrayRandom as $data){
        echo "$data<br>";
    }
}

function prima(){
    echo " <h3>BILANGAN PRIMA</h3>";
    for($i = 2; $i <=50; $i++){
        for($j = 2; $j<$i ;$j++){

            if($i % $j == 0){
                break;

            }
            else if ($i-1 == $j){
                echo "$i ";
                break;
            }
        }
    }
}

operator();
arrayRandom();
prima();

?>