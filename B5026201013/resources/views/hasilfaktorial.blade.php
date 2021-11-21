<!DOCTYPE html>
<html lang="en">
   <head>
    <title>Faktorial</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            margin: 100px;
            background-color:aqua;
            }
        .container {
            text-align:center;
            background-color:salmon;
            padding: 30px;
            width: 800px;
        }
        p {
            font-size: 20px;
        }


    </style>
   </head>

   <body>
       <div class="container">
           <h1>Hasil Faktorial</h1>
           <br>
            <p>
            <?php
            $n = $_POST["number"];
            function faktorial($n) {
                if ($n==1 || $n==0) {
                    return 1;
                }
                else {
                    return $n*faktorial($n-1);
                }
            }
            echo "Jadi, ".$n."! = ";
            for ($i=$n; $i>=1; $i--) {
                if ($i!=1) {
                    echo $i." x ";
                }
                else {
                    echo $i." = ";
                }
            }
            echo faktorial($n);
            ?>
            </p>
        </div>
    </body>

</html>
