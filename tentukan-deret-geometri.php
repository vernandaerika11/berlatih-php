<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Geometri</title>
</head>
<body>
    <h2>Deret Geometri</h2>
    <?php
        function tentukan_deret_geometri($arr) {
        // kode di sini
            echo "tentukan_deret_geometri "; print_r($arr);
            $rms=$arr[1]/$arr[0];
            $hasil = true;
            for($h=1; $h<count($arr); $h++){
                if($arr[$h]/$arr[$h-1] != $rms) {
                    $hasil = false;
                break;
                }
            }
            if ($hasil == true){
                echo "true <br><br>";
            }
            else{
                echo "false <br><br>";
            }
        }
        //TEST CASES
        echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
        echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
        echo tentukan_deret_geometri([2, 4, 6, 8]); // false
        echo tentukan_deret_geometri([2, 6, 18, 54]); // true
        echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
    ?>
</body>
</html>