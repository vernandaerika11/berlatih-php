<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Huruf</title>
</head>
<body>
    <h2>Ubah Huruf</h2>
    <?php
        function ubah_huruf($string){
        //kode di sini
            echo "ubah_huruf('$string'): ";
            $huruf = 'abcdefghijklmnopqrstuvwxyz';
            for($h=0;$h<strlen($string);$h++){
                $take = substr($string,$h,1);
                $position = strpos($huruf,$take);
                $result = substr($huruf,$position+1,1);
                echo $result;
            }
            echo "<br><br>";
        }

        // TEST CASES
        echo ubah_huruf('wow'); // xpx
        echo ubah_huruf('developer'); // efwfmpqfs
        echo ubah_huruf('laravel'); // mbsbwfm
        echo ubah_huruf('keren'); // lfsfo
        echo ubah_huruf('semangat'); // tfnbohbu
    ?>
</body>
</html>