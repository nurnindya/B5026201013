<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registration</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".submit").click(function(){
                    var ID = $(".userid").val();
                    if (ID.length < 5 || ID.length > 12) {
                        alert("User ID must be of length 5 to 12")
                        return false;
                    }
                    var Password = $(".pass").val();
                    if (Password.length < 7 || Password.length > 12) {
                        alert("Password must be of length 7 to 12")
                        return false;
                    }
                    var Nama = $(".name").val();
                    var huruf = /^[a-zA-Z\s]+$/;
                    if (!Nama.match(huruf)) {
                        alert("Name must be alphabetes only")
                        return false;
                    }
                    var Negara = $(".country").val();
                    if (Negara == "") {
                        alert("Must select a country")
                        return false;
                    }
                    var ZIPCode = $(".zip").val();
                    if (isNaN(ZIPCode)) {
                        alert("ZIP Code must be numeric only")
                        return false;
                    }
                    var pola = /^([a-zA-Z0-9_\.\.\+])+@(([a-zA-Z0-9\-])+.)+([a-zA-Z0-9]{2,4})+$/;
                    var Email = $(".email").val();
                    if (!Email.match(pola)) {
                        alert("Must be a valid email")
                        return false;
                    }
                    var radio = $("input[type='radio']:checked");
                    if (radio.length==0) {
                        alert("Must be select Sex")
                        return false;
                    }
                    var check = $("input[type='checkbox']:checked");
                    if (check.length==0) {
                        alert("Must be select Language")
                        return false;
                    }
                })
            })
        </script>

        <style>
	    body {
            margin: 50px;
            background-color: greenyellow;
        }
        h1 {
            text-align: center
        }
        .container {
            align-items: center;
            width: 900px;
            padding: 20px;
            background-color: hotpink;
        }
        </style>


    </head>
    <body>
        <div class="container">
            <h1>Registration</h1>
            <form action="https://www.google.co.id/" name="Registration">
            <div class="row mt-2">
                <div class="col-5">
                    User ID
                </div>
                <div class="col-7">
                    <input class="userid" size="50" required>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-5">
                    Password
                </div>
                <div class="col-7">
                    <input type="password" class="pass" size="50" required>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-5">
                    Name
                </div>
                <div class="col-7">
                    <input type="text" class="name" size="50" required>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-5">
                    Address
                </div>
                <div class="col-7">
                    <input class="address" size="50">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-5">
                    Country
                </div>
                <div class="col-7">
                    <select class="country required">
                        <option value="">Please select a country</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="USA">USA</option>
                        <option value="China">China</option>
                        <option value="Singapura">Singapura</option>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-5">
                    ZIP Code
                </div>
                <div class="col-7">
                    <input type="text" class="zip" size="50" required>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-5">
                    Email
                </div>
                <div class="col-7">
                    <input type="email" class="email" size="50" required>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-5">
                    Sex
                </div>
                <div class="col-7">
                    <label><input type="radio" name="sex">Male
                    </label>
                    <label><input type="radio" name="sex">Female
                    </label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-5">
                    Language
                </div>
                <div class="col-7">
                    <label><input type="checkbox" name="eng">Eglish
                    </label>
                    <label><input type="checkbox" name="noneng">Non-English
                    </label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-5">
                    About
                </div>
                <div class="col-7">
                    <textarea class="about" rows="10" cols="50"></textarea>
                </div>
            </div>
            <div class="button text-center mt-2">
                <button class="btn-primary submit" type="submit">Submit</button>
            </div>
            </form>
        </div>
    </body>
</html>
