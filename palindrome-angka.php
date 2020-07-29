<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Palindrome Angka</title>
    </head>
    <body>
        <h2>Palindrome Angka</h2>
        <?php

            function palindrome_angka($angka) {
            // tulis kode di sini
                echo "palindrome_angka($angka) <br>";
                while(true){
                    $angka+=1;
                    $hasil = intval(strrev(strval($angka)));
                    if($hasil == $angka){
                        echo $hasil . "<br>";
                    break;
                    }
                }
            }

            // TEST CASES
            echo palindrome_angka(8); // 9
            echo palindrome_angka(10); // 11
            echo palindrome_angka(117); // 121
            echo palindrome_angka(175); // 181
            echo palindrome_angka(1000); // 1001

        ?>
        </body>
</html>