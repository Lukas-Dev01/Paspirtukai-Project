<!DOCTYPE html>
<html lang="">
<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
    <title>Elektriniai paspirtukai</title>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
</head>

<body>
 
      
 
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="pagrindinis.php">PaspirGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
     
      <li class="nav-item">
        <a class="nav-link" href="Paspirtukai.php">Paspirtukai</a>
      </li>
        
      
    </ul>
      <ul class="navbar-nav">
     
      <li class="nav-item">
        <a class="nav-link" href="kontaktai.html">Kontaktai</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Paspirtukai.php">Apie mus</a>
      </li> 
      
        
      
    </ul>
  </div>
</nav> 
    <header>
  <div class="fotke">
      
      <br><h1 class="centras2">Elektriniai paspirtukai</h1>
  
  
     </div> 
    </header>
    <main>
       <br>
        <h2 class="antras">Šiuo metu popūliarūs produktai</h2>
        <br>
        
        <div class="fotogrupe">
        <center><div class="foto1" style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;">
            <h1>Bird Paspirtukas</h1>
        <img src="img/1.jpg" ; width="25%" ; height="45%";>
            <br>
            <br>
            <a href="Paspirtukai.php"><button class="btn btn-primary"> Pirkti </button></a>
            </div></center>
            <br>
        <center><div class="foto2" style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;">
            <h1>Spin Paspirtukas</h1>
        <img src="img/2.jpg" ; width="25%" ; height="45%";>
            <br>
            <br>
            <a href="Paspirtukai.php"><button class="btn btn-primary"> Pirkti </button></a>
            </div></center>
            <br>
            <br>
                        
        </div>
     <br>
     <br>
        <button onclick="topFunction()" id="myBtn" title="Go to top"> Pakilti </button>
    </main>
  
    <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>PaspirGO</h6>
            <p class="text-justify">Automobilio dalių parduotuvė.</p>
            </div>

          <div class="col-xs-6 col-md-3">
            <h6>Greita prieiga</h6>
            <ul class="footer-links">
              <li><a href="index.html">PaspirGO</a></li>
              <li><a href="Paspirtukai.html">Paspirtukai</a></li>
                <li><a href="kontaktai.html">Kontaktai</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 
         <a href="#">PaspirGO</a>.
            </p>
          </div>
        </div>
      </div>
</footer>
    <script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>
