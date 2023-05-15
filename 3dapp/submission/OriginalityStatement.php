<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>assignment</title>

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="assets/js/jquery.min.js"></script>

   <!-- Popper JS -->
   <script src="assets/js/popper.min.js"></script>

   <!-- Bootstrap JavaScript -->
   <script src="assets/js/bootstrap.min.js"></script>

</head>
<body>
   <!-- Navigation Bar -->
   <nav class="navbar navbar-expand-md navbar-dark " id="toubu" style="background-color:black">
     <a class="navbar-brand" href="index.php">Coca Cola</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavDropdown">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item">
           <a class="nav-link" href="index.php">Home</a>
         </li>
          <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="javascript::" onclick="tan()" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Drink
           </a>
           <div class="dropdown-menu"  id="drink" style="display:none">
             <a class="dropdown-item" href="Cocacola.php">Coca Cola</a>
             <a class="dropdown-item" href="Sprite.php">Sprite</a>
             <a class="dropdown-item" href="Pepper.php">Dr Pepper</a>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="OriginalityStatement.php">Originality Statement</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#javascript::" data-toggle="modal" onclick="contact()">Contact</a>
         </li>
       </ul>
     </div>
   </nav>
<div id="dise" style="background-color:white;color:black">
   <!-- Main body -->
   <div class="jumbotron jumbotron-fluid " style="height:700px;">
     <div class="container">
       <h1 class="display-4">Originality Statement</h1>
       <p class="lead">These web pages are submitted as part requirement for the degree of Computer science at the University of Sussex. They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged.</p>
     </div>
   </div>

   <!-- Contact Modal -->
   <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="contactModalLabel">Contact Detail</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           Xin Hong, Email: xh223@sussex.ac.uk
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
       </div>
     </div>
   </div>
</div>
   <!-- Footer -->
    <footer class=" text-light py-4 mt-5" id="dibu" style="background-color:black">
     <div class="container">
       <div class="row">
         <div class="col-md-3">
           <h5>Home</h5>
           <ul class="list-unstyled">
             <li><a href="index.php">Home</a></li>
           </ul>
         </div>
         <div class="col-md-3">
           <h5>Drink</h5>
           <ul class="list-unstyled">
             <li><a href="Cocacola.php">Coca Cola</a></li>
             <li><a href="Sprite.php">Sprite</a></li>
             <li><a href="Pepper.php">Dr Pepper</a></li>
           </ul>
         </div>
         <div class="col-md-3">
           <h5>Originality Statement</h5>
           <ul class="list-unstyled">
             <li><a href="OriginalityStatement.php">Originality Statement</a></li>
           </ul>
         </div>
         <div class="col-md-3">
           <h5>Contact</h5>
           <ul class="list-unstyled">
             <li><a href="javascript::" data-toggle="modal"  onclick="contact()">Contact</a></li>
           </ul>
         </div>
       </div>
       <div class="row mt-3">
         <div class="col-md-12">
           <p class="text-center">&copy; 2023 3D Apps</p><a href="javascript::" onclick="baise()">day</a> <a href="javascript::" onclick="heise()">light</a>
         </div>
         </div>
       </div>
  </footer>

</body>
</html>

<script>

function contact(){
   
   alert("Email:xh223@sussex.ac.uk ");

}
function tan(){

$("#drink").css("display", "block");

}

function baise(){
   
    $("#dise").css("background-color", "#c96d6d");
	$("#dise").css("color", "black");
    $("#toubu").css("background-color", "#c96d6d");
	$("#toubu").css("color", "black");
	$("#dibu").css("background-color", "#c96d6d");
	$("#dibu").css("color", "black");
}

function heise(){

    $("#dise").css("background-color", "black");
	$("#dise").css("color", "white");
    $("#toubu").css("background-color", "black");
	$("#toubu").css("color", "white");
	$("#dibu").css("background-color", "black");
	$("#dibu").css("color", "wh");
}
</script>