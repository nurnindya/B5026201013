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
            background-color: #c70ebe;
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
            background-color: #c70ebe;
            color: white;
            padding: 10px 15px;
            border: none;
        }
        .openbtn:hover {
            background-color: #da67d4;
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

        .page-footer {
            text-align: center;
        }
        body {
            background-color: #f5a0f1
        }
        img {
            width: 150px;
            length: 150px;
            border-radius: 50%;
        }
        #p1, span {
            text-align: center;
            font-size: 15px;
            font-weight: bold;
            color:#000000;
        }
        </style>
    </head>

    <body>
        <div class="container">
        <div id="mySidebar" class="sidebar">
            <center><img src="/img biodata/crop.jpg"></center>
            <br>
            <p id="p1">Nur Nindya Risnina <br>
                5026201013</p>
            <br>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="http://127.0.0.1:8000/pegawai">Pegawai</a>
            <a href="http://127.0.0.1:8000/absen">Absen</a>
            <a href="http://127.0.0.1:8000/sepeda">Sepeda</a>
        </div>
        <div id="main">
            <div class="page-header">
                <button class="openbtn" onclick="openNav()">☰ My Assignment</button>
            </div>

            @yield('isikonten')

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
















