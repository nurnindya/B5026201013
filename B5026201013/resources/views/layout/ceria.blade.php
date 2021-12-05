<!DOCTYPE html>
<html>
    <head>
	    <title>@yield('title')</title>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
		<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
        <style>
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(230, 23, 143);
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #000000;
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            color: #f1f1f1;
        }
        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }
        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: rgb(230, 23, 143);
            color: white;
            padding: 10px 15px;
            border: none;
        }
        .openbtn:hover {
            background-color: rgb(243, 101, 184);;
        }
        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidebar {padding-top: 15px;}
            .sidebar a {font-size: 18px;}
        }
        .page-header {
            text-align: right;
        }
        .page-footer {
            text-align: center;
        }
        body {
            background-color: #a8faa5
        }
        </style>
    </head>

    <body>
        <div class="container">


        <div id="mySidebar" class="sidebar">
            <center><img src="/img biodata/myfoto.jpg" width="100" length="200"></center>
            <br>
            <center><p>Nur Nindya Risnina</p></center>
            <br>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="http://127.0.0.1:8000/pegawai">Pegawai</a>
            <a href="http://127.0.0.1:8000/absen">Absen</a>
            <a href="#">Tugas Mingdep</a>
            <a href="#">Praktikum</a>

        </div>

        <div id="main">

            <div class="page-header">
                <p><img src="/img biodata/myfoto.jpg" width="50" length="150">
                Nur Nindya Risnina - 5026201013</p>
            </div>
            <button class="openbtn" onclick="openNav()">☰ My Assignment</button>


            @section('isikonten')
            @show
        <hr>
        <div class="page-footer">
                <p>Hak Cipta Oleh 5026201013 - Nur Nindya Risnina</p>
            </div>
        </div>

        <script>
            function openNav() {
              document.getElementById("mySidebar").style.width = "250px";
              document.getElementById("main").style.marginLeft = "250px";
            }

            function closeNav() {
              document.getElementById("mySidebar").style.width = "0";
              document.getElementById("main").style.marginLeft= "0";
            }
            </script>


        </div>
    </body>
</html>
















