<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Mean</title>
</head>
<body>
    <h2>Cari Mean</h2>
    <?php
        function cari_mean($arr){
        //kode di sini
            echo "cari_mean "; print_r($arr) ; echo "<br><br>";
            $val=0;
            for($b=0; $b<count($arr); $b++){
                $val+=$arr[$b];
            }
            $mean = $val/count($arr);

            echo round($mean) . "<br>";
        }

        //TEST CASE 
        echo cari_mean([1, 2, 3, 4, 5]); // 3
        echo cari_mean([3, 5, 7, 5, 3]); // 5
        echo cari_mean([6, 5, 4, 7, 3]); // 5
        echo cari_mean([1, 3, 3]); // 2
        echo cari_mean([7, 7, 7, 7, 7]); // 7

    ?>
</body>
</html>