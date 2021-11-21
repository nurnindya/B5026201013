
            <?php 
           
            function faktorial($n) {
                if ($n==1 || $n==0) {
                    return 1;
                }
                else if ($n<0) {
                    return "tidak boleh negatif";
               }
                else {
                    return $n * faktorial($n-1);
                }
                echo "Hasil Faktorial ".faktorial(3);
            }
            

            
            ?>
           
  
            