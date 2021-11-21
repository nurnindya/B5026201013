<!DOCTYPE html>

<html>
<head>
  <title>Welcome to My Page</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
  $(document).ready(function(){
  $("h2").click(function(){
    $(this).hide();
  });
  $(document).ready(function(){
    alert("Selamat datang di web nindya.com");
  });
    $("input").focus(function(){
    $(this).css();
  });
  $("input").blur(function(){
    $(this).css("background-color", "pink");
  });
  $("button").click(function(){
    alert("Terima kasih telah menggunakan situs ini:)");
    })
  $("input").focusin(function(){
    $(this).css("background-color", "lightblue");
  });
});
</script>
</head>
<style>
    body {
        background-color:khaki;
        margin:50px;
    }
    h2, p {
        text-align:center;
    }
    p{
        font-size:22px
    }
</style>

<body>
  <div>
    <h2>Selamat Datang di Situs Web Resmi nindya.com</h2><br>
    <p >Haloo, Semua!!</p>
    <p>Di laman situs ini kalian akan belajar berbagai macam bahasa pemrograman dalam perkuliahan ini.
      Mulai dari HTML, CSS, JQuery, BootStrap, dan masih banyak lagi.
      Kalian akan mempelajari sekaligus berlatih dalam menguasai bahasa pemrograman ini.
      Silahkan masukkan username dan password kalian untuk log in terlebih dahulu ya!!</p><br>
    <p>Username: <input type="text" name="fullname"></p>
    <p>Password : <input type="text" name="email"></p>
    <p><button>Log In</button></p>


  </div>
</body>
</html>
