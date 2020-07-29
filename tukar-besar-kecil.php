<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tukar Besar Kecil</title>
</head>
<body>
    <h2>Tukar Besar Kecil</h2>
    <?php
        function tukar_besar_kecil($string){
        //kode di sini
            echo "tukar_besar_kecil('$string'): ";
            $kecil = 'abcdefghijklmnopqrstuvwxyz';
            $besar = 'ABCDEFGHIJKLMNOPRSTUVWXYZ';
            for($i=0; $i<strlen($string); $i++){
                $ambil = substr($string,$i,1);
                if(ctype_upper($ambil)){
                    echo strtolower($ambil);
                }
                else {
                    echo strtoupper($ambil);
                }
            }
            echo "<br>";
        }

        // TEST CASES
        echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
        echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
        echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
        echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
        echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
    ?>
</body>
</html>