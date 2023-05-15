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

   <!-- X3DOM -->
   <script src="assets/js/x3dom.js"></script>
   <link rel="stylesheet" type="text/css" href="assets/css/x3dom.css">

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
           <a class="nav-link" href="javascript::" data-toggle="modal" onclick="contact()">Contact</a>
         </li>
       </ul>
     </div>
   </nav>
<div id="dise" style="">
   <!-- Main Text -->
   <div class="container-fluid">
     <div class="row">
       <div class="col-sm-12 p-0">
         <img src="assets\images\dr-pepper.jpg" class="w-100" alt="Dr-Pepper Image">
       </div>
     </div>
     <br>
     <div class="row justify-content-center" style="height:450px;">
       <div class="col-4">
         <h2>Dr Pepper</h2>
         <p>Dr Pepper's unique, sparkling blend of 23 fruit flavours has been around for well over a century and it's still the same, with that distinctive flavour you just can't quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. The distinctive, bold taste of Dr Pepper has been popular ever since.</p>
          <p>
		 
		 <h5 class="">Camera Views </h5>
		 <button onclick="defaultO()">Default </button> <button onclick="left()">left</button> <button onclick="right()">right</button>
		 <h5 class=""> Animation Options</h5>
			<button onclick="rotateX()">RotX</button> <button onclick="rotateY()">RotY</button> <button onclick="rotateZ()">RotZ</button> <button onclick="stopAnimation()">Stop</button>
		<h5 class="">Render and Lighting Options</h5>
			<button onclick="headLightOnOff()">Headlight</button> <button onclick="lightDefault()">Default</button>
		
		 </p>
	   </div>
       <div class="col-4">
         <x3d id="x3domOrientationSceneView" width='600px' height='400px' >
                     <scene  DEF='scene'>
                        <Viewpoint id="front" position="0 0 10" orientation="0.00451 0.99989 0.00319 6.25833" description="camera"></Viewpoint>
                        <Viewpoint id="right" position="-3.07427 50.25329 2010.79608" orientation="1.00451 0.99989 0.00319 6.25833" description="camera"></Viewpoint>
                        <Viewpoint id="left" position="-60 100 600" orientation="0.00451 0.99612 -0.03175 1.73722" description="camera"></Viewpoint>
                        <Viewpoint id="top" position="0.05087 3.78235 -1.75890" orientation="0.00451 0.87466 0.48473 3.12040" description="camera"></Viewpoint>
                        <directionalLight id="directional" direction='0 -1 0' on ="TRUE" intensity='1.0' shadowIntensity='0.0'>
                        </directionalLight>
					    
                        <Transform  id="rotation">
                         
                        <inline   url="assets/modle/pepper.x3d" id="tdModels">
                                <navigationInfo id="head" headlight='true' type='"EXAMINE"'></navigationInfo>
                                <Background groundColor='(1,1,1)' skyColor='(1,1,1)'></Background>
						</inline>
                       </Transform>
					</scene>
				</x3d>
       </div>
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
</script>

<script>

let y = 1
let rotateYInterval = null
let rotateDom = document.querySelector('#rotation')


function rotateY(){
stopAnimation();
    if(rotateYInterval){
        clearInterval(rotateYInterval)
        rotateYInterval = null
    } else {
        rotateYInterval = setInterval(()=>{
            y+=0.01
            rotateDom.setAttribute('rotation',"0,1,0,"+y)
        },5)
    }
}


let z = 1
let rotateZInterval = null
function rotateZ(){
   stopAnimation();

    if(rotateZInterval){
        clearInterval(rotateZInterval)
        rotateZInterval = null
    } else {
        rotateZInterval = setInterval(()=>{
            z+=0.01
            rotateDom.setAttribute('rotation',"0,0,1,"+z)
        },5)
    }
}

let x = 1
let rotateXInterval = null
function rotateX(){
stopAnimation();
    if(rotateXInterval){
        clearInterval(rotateXInterval)
        rotateXInterval = null
    } else {
        rotateXInterval = setInterval(()=>{
            x+=0.01
			
            rotateDom.setAttribute('rotation',"1,0,0,"+x)
        },5)
    }
}

function stopAnimation(){
    if(rotateXInterval){
        clearInterval(rotateXInterval)
        rotateXInterval = null
    }
    if(rotateZInterval){
        clearInterval(rotateZInterval)
        rotateZInterval = null
    }
    if(rotateYInterval){
        clearInterval(rotateYInterval)
        rotateYInterval = null
    }
}




let headLightDom = document.querySelector('#head')
let onOrOff = true
function headLightOnOff(){
    if(onOrOff){
        headLightDom.setAttribute('headlight','false')
        onOrOff = false
    }else {
        headLightDom.setAttribute('headlight','true')
        onOrOff = true
    }
}
function lightDefault(){
    headLightDom.setAttribute('headlight','true')
    onOrOff = true
}

function left(){
    rotateDom.setAttribute('rotation','0,1,0,1.5')
}

function defaultO(){
    rotateDom.setAttribute('rotation',`0,1,0,0`)

}

function right(){
    rotateDom.setAttribute('rotation',`0,1,0,-1.5`)

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
