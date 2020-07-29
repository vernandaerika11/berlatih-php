<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Papan Catur</title>
    </head>
    <body>
        <h2>Papan Catur</h2>

        <?php

            function papan_catur($angka) {
            // tulis kode di sini
                echo "echo papan_catur($angka) <br>";
                for($x=0; $x<$angka; $x++){
                    for($y=0;$y<$angka*2-($x%2);$y++){
                        if($x%2==0 && $y%2==0)echo "#";
                        if($x%2==0 && $y%2==1)echo "&nbsp;";
                        if($x%2==1 && $y%2==0)echo "&nbsp;";
                        if($x%2==1 && $y%2==1)echo "#";
                    }
                    // if($x>=4){
                    //     break;
                    // }
                    echo "<br>";
                }
                echo "<br><br>";
            }

            // TEST CASES
            echo papan_catur(4); 
			/*
			# # # #
			 # # #
			# # # #
			 # # #
			 */

			echo papan_catur(8);
			/* 
			# # # # # # # #
			 # # # # # # # 
			# # # # # # # #
			 # # # # # # # 
			# # # # # # # #
			 # # # # # # #
			# # # # # # # #
			 # # # # # # #
			 */

			echo papan_catur(5); 
			/*
			# # # # #
			 # # # #
			# # # # #
			 # # # # 
			# # # # #
			*/
        ?>
    </body>
</html>