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
        .label, .input, p {
            font-size: 20px;
        }
        .submit {
            font-size: 20px;
            width: 80px;
            padding: 3px;
        }



    </style>
   </head>

   <body>
       <div class="container">
           <h1>Faktorial</h1>
           <br>
           <form action="faktorial" method="post">
               @csrf
           <p>Masukkan angka pada kolom berikut.</p>
           <div class="input">
               <input name="number" type="text" size="30">
            </div>
        <div class="button mt-4 text-center">
            <button class="btn-success submit" name="hasil" type="submit">Hitung</button>
        </div>
    </form>
    </div>
</body>
</html>
