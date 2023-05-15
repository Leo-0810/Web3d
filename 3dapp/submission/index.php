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
<script src="assets/js/x3dom.js"></script>
   <link rel="stylesheet" type="text/css" href="assets/css/x3dom.css">
</head>
<body >

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
             <a class="dropdown-item" href="javascript::" onclick="kele()">Coca Cola</a>
             <a class="dropdown-item" href="javascript::" onclick="xuebi()">Sprite</a>
             <a class="dropdown-item" href="javascript::" onclick="boshi()">Dr Pepper</a>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="javascript::" onclick="shengming()">Originality Statement</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="javascript::" data-toggle="modal" data-target="#contactModal" onclick="contact()">Contact</a>
         </li>
       </ul>
     </div>
   </nav>
   
 
   
<div id="dise" style="">
   <!-- Main Text -->
   
<div id="shouye" style="display:block">
   <div class="container" style="margin-top:50px;">
     <div class="row">
       <div class="col-sm-12">
         <div id="background_image">
           <div id="main_text" class="col-xs-12 col-sm-6" style="float:left">
             <h1>Coca Cola Great Britain</h1>
             <p style="line-height:50px;">Coca Cola Great Britain Founded in 1886 Dr John S Pemberton The Coca Cola Company is the world's leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.</p>
           </div>
		   <div style="float:left">
		   <img src="assets/images/coca-cola1.jpg" style="width:640px;height:200px;float:right">
		   </div>
         </div>
       </div>
     </div>
   </div>

   <!-- Text -->
   <div class="container mt-5">
	<div class="row">
	   <div class="col-sm-4">
            <a href="javascript::" onclick="tantu1()"><img src="assets\images\coca-cola.jpg" alt="Coca Cola" class="img-thumbnail"></a>
		<h3>Coca Cola</h3>
		<p class="The birthplace and time">New York Harbour, 1886</p>
            <p class="introduce">It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!</p>
		<button type="button" class="btn btn-primary"><a href="https://www.coca-cola.co.uk/brands/coca-cola-original-taste" style="color:white; text-decoration:none;">Learn More</a></button>
	   </div>
	   <div class="col-sm-4">
		<a href="javascript::" onclick="tantu2()"><img src="assets\images\sprite.jpg" alt="Sprite" class="img-thumbnail"></a>
		<h3>Sprite</h3>
		<p class="The birthplace and time">West Germany, 1959</p>
            <p class="introduce">First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.</p>
		<button type="button" class="btn btn-primary"><a href="https://www.coca-cola.co.uk/brands/sprite" style="color:white; text-decoration:none;">Learn More</a></button>
	   </div>
	   <div class="col-sm-4">
		<a href="javascript::" onclick="tantu3()"><img src="assets\images\dr-pepper.jpg" alt="Dr Pepper" class="img-thumbnail"></a>
		<h3>Dr Pepper</h3>
		<p class="The birthplace and time">Texas, 1885</p>
            <p class="introduce">Dr Pepper's unique, sparkling blend of 23 fruit flavours has been around for well over a century and it's still the same, with that distinctive flavour you just can't quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. The distinctive, bold taste of Dr Pepper has been popular ever since.</p>
		<button type="button" class="btn btn-primary"><a href="https://www.coca-cola.co.uk/brands/dr-pepper" style="color:white; text-decoration:none;">Learn More</a></button>
	   </div>
	</div>
   </div>

   <!-- Contact Modal -->
   <div class="modal fade" id="contactModal" tabindex="1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
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
   
<div id="shengming" style="display:none">

<div class="jumbotron jumbotron-fluid " style="height:700px;">
     <div class="container">
       <h1 class="display-4">Originality Statement</h1>
       <p class="lead">These web pages are submitted as part requirement for the degree of Computer science at the University of Sussex. They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged.</p>
     </div>
   </div>

</div>  


<div id="kele" style="display:none">

<div class="container-fluid">
     <div class="row">
       <div class="col-sm-12 p-0">
         <img src="assets\images\coca-cola.jpg" class="w-100" alt="Coca Cola Image">
       </div>
     </div>
     <br>
     <div class="row justify-content-center" style="height:450px;">
       <div class="col-4">
         <h2>Coca Cola</h2>
         <p>It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!</p>
         <p>
		 
		 <h5 class="">Camera Views </h5>
		 <button onclick="defaultO()">Default</button> <button onclick="left()">left</button> <button onclick="right()">right</button>
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
                         
                        <inline   url="assets/modle/cocacola.x3d" id="tdModels">
                                <navigationInfo id="head" headlight='true' type='"EXAMINE"'></navigationInfo>
                                <Background groundColor='(1,1,1)' skyColor='(1,1,1)'></Background>
						</inline>
                       </Transform>
					</scene>
				</x3d>
	   
	   
       </div>
     </div>
   </div>

</div>  
 
 <div id="xuebi" style="display:none">

<div class="container-fluid">
     <div class="row">
       <div class="col-sm-12 p-0">
         <img src="assets\images\sprite.jpg" class="w-100" alt="Sprite Image">
       </div>
     </div>
     <br>
     <div class="row justify-content-center" style="height:450px;">
       <div class="col-4">
         <h2>Sprite</h2>
         <p>First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.</p>
         <p>
		 
		 <h5 class="">Camera Views </h5>
		 <button onclick="defaultO1()">Default </button> <button onclick="left1()">left</button> <button onclick="right1()">right</button>
		 <h5 class=""> Animation Options</h5>
			<button onclick="rotateX1()">RotX</button> <button onclick="rotateY1()">RotY</button> <button onclick="rotateZ1()">RotZ</button> <button onclick="stopAnimation1()">Stop</button>
		<h5 class="">Render and Lighting Options</h5>
			<button onclick="headLightOnOff1()">Headlight</button> <button onclick="lightDefault1()">Default</button>
		
		 </p>
	   </div>
       <div class="col-4">
          <x3d id="x3domOrientationSceneView" width='600px' height='400px' >
                     <scene  DEF='scene'>
                        <Viewpoint id="front1" position="0 0 10" orientation="0.00451 0.99989 0.00319 6.25833" description="camera"></Viewpoint>
                        <Viewpoint id="right1" position="-3.07427 50.25329 2010.79608" orientation="1.00451 0.99989 0.00319 6.25833" description="camera"></Viewpoint>
                        <Viewpoint id="left1" position="-60 100 600" orientation="0.00451 0.99612 -0.03175 1.73722" description="camera"></Viewpoint>
                        <Viewpoint id="top1" position="0.05087 3.78235 -1.75890" orientation="0.00451 0.87466 0.48473 3.12040" description="camera"></Viewpoint>
                        <directionalLight id="directional" direction='0 -1 0' on ="TRUE" intensity='1.0' shadowIntensity='0.0'>
                        </directionalLight>
					    
                        <Transform  id="rotation1">
                         
                        <inline   url="assets/modle/sprite.x3d" id="tdModels1">
                                <navigationInfo id="head1" headlight='true' type='"EXAMINE"'></navigationInfo>
                                <Background groundColor='(1,1,1)' skyColor='(1,1,1)'></Background>
						</inline>
                       </Transform>
					</scene>
				</x3d>
       </div>
     </div>
   </div>

</div>    
 

<div id="boshi" style="display:none">

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
		 <button onclick="defaultO2()">Default </button> <button onclick="left2()">left</button> <button onclick="right2()">right</button>
		 <h5 class=""> Animation Options</h5>
			<button onclick="rotateX2()">RotX</button> <button onclick="rotateY2()">RotY</button> <button onclick="rotateZ2()">RotZ</button> <button onclick="stopAnimation2()">Stop</button>
		<h5 class="">Render and Lighting Options</h5>
			<button onclick="headLightOnOff2()">Headlight</button> <button onclick="lightDefault2()">Default</button>
		
		 </p>
	   </div>
       <div class="col-4">
         <x3d id="x3domOrientationSceneView" width='600px' height='400px' >
                     <scene  DEF='scene'>
                        <Viewpoint id="front2" position="0 0 10" orientation="0.00451 0.99989 0.00319 6.25833" description="camera"></Viewpoint>
                        <Viewpoint id="right2" position="-3.07427 50.25329 2010.79608" orientation="1.00451 0.99989 0.00319 6.25833" description="camera"></Viewpoint>
                        <Viewpoint id="left2" position="-60 100 600" orientation="0.00451 0.99612 -0.03175 1.73722" description="camera"></Viewpoint>
                        <Viewpoint id="top2" position="0.05087 3.78235 -1.75890" orientation="0.00451 0.87466 0.48473 3.12040" description="camera"></Viewpoint>
                        <directionalLight id="directional" direction='0 -1 0' on ="TRUE" intensity='1.0' shadowIntensity='0.0'>
                        </directionalLight>
					    
                        <Transform  id="rotation2">
                         
                        <inline   url="assets/modle/pepper.x3d" id="tdModels2">
                                <navigationInfo id="head2" headlight='true' type='"EXAMINE"'></navigationInfo>
                                <Background groundColor='(1,1,1)' skyColor='(1,1,1)'></Background>
						</inline>
                       </Transform>
					</scene>
				</x3d>
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
             <li><a href="javascript::" onclick="shengming()">Originality Statement</a></li>
           </ul>
         </div>
         <div class="col-md-3">
           <h5>Contact</h5>
           <ul class="list-unstyled">
             <li><a href="javascript::" data-toggle="modal"  onclick="contact()">Contact</a></li>
           </ul>
         </div>
       </div>
	   <div class="row">
	    
	   </div>
       <div class="row mt-3">
         <div class="col-md-12">
           <p class="text-center">&copy; 2023 3D Apps</p><a href="javascript::" onclick="baise()">day</a> <a href="javascript::" onclick="heise()">light</a>
         </div>
         </div>
       </div>
  </footer>
<div id="tan1" style="position:fixed;z-index:99999;top:300px;left:30%;display:none">
   <div style="position: relative;margin-right: 20px;margin-bottom: 15px;width: 132px;display: inline-block;border: 1px solid #CCC;background:#EEE;">
   <img src="assets/images/1.png"><a onclick="delImg(this);" style="z-index: 10;display: block;top: -8px;cursor:pointer;left: 620px;position:absolute;width: 20px;height: 20px;background: #CCC;border-radius:100%;text-align:center;line-height: 20px;border: 1px solid #C1C1C1;color: #555;">X</a>
   </div>
</div>
<div id="tan2" style="position:fixed;z-index:99999;top:300px;left:30%;display:none">
   <div style="position: relative;margin-right: 20px;margin-bottom: 15px;width: 132px;display: inline-block;border: 1px solid #CCC;background:#EEE;">
   <img src="assets/images/2.png"><a onclick="delImg(this);" style="z-index: 10;display: block;top: -8px;cursor:pointer;left: 620px;position:absolute;width: 20px;height: 20px;background: #CCC;border-radius:100%;text-align:center;line-height: 20px;border: 1px solid #C1C1C1;color: #555;">X</a>
   </div>
</div>
<div id="tan3" style="position:fixed;z-index:99999;top:300px;left:30%;display:none">
   <div style="position: relative;margin-right: 20px;margin-bottom: 15px;width: 132px;display: inline-block;border: 1px solid #CCC;background:#EEE;">
   <img src="assets/images/3.png"><a onclick="delImg(this);" style="z-index: 10;display: block;top: -8px;cursor:pointer;left: 620px;position:absolute;width: 20px;height: 20px;background: #CCC;border-radius:100%;text-align:center;line-height: 20px;border: 1px solid #C1C1C1;color: #555;">X</a>
   </div>
</div>
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

function tantu1(){

    $("#tan1").css("display", "block");
    $("#tan2").css("display", "none");
	$("#tan3").css("display", "none");
}
function tantu2(){

     $("#tan1").css("display", "none");
    $("#tan2").css("display", "block");
	$("#tan3").css("display", "none");
}
function tantu3(){

    $("#tan1").css("display", "none");
    $("#tan2").css("display", "block");
	$("#tan3").css("display", "block");

}
function delImg(obj)
  {
         $("#tan1").css("display", "none");
    $("#tan2").css("display", "none");
	$("#tan3").css("display", "none");
  }

function shengming(){

    $("#shouye").css("display", "none");
    $("#shengming").css("display", "block");
	$("#kele").css("display", "none");
	$("#xuebi").css("display", "none");
	$("#boshi").css("display", "none");
}
function kele(){
     $("#drink").css("display", "none");
    $("#shouye").css("display", "none");
    $("#shengming").css("display", "none");
	$("#kele").css("display", "block");
	$("#xuebi").css("display", "none");
	$("#boshi").css("display", "none");
}
function xuebi(){
$("#drink").css("display", "none");
    $("#shouye").css("display", "none");
    $("#shengming").css("display", "none");
	$("#kele").css("display", "none");
	$("#xuebi").css("display", "block");
	$("#boshi").css("display", "none");
}

function boshi(){
    $("#drink").css("display", "none");
    $("#shouye").css("display", "none");
    $("#shengming").css("display", "none");
	$("#kele").css("display", "none");
	$("#xuebi").css("display", "none");
	$("#boshi").css("display", "block");
}

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






let y1 = 1
let rotateYInterval1 = null
let rotateDom1 = document.querySelector('#rotation1')


function rotateY1(){
stopAnimation1();
    if(rotateYInterval1){
        clearInterval(rotateYInterval1)
        rotateYInterval1 = null
    } else {
        rotateYInterval1 = setInterval(()=>{
            y1+=0.01
            rotateDom1.setAttribute('rotation',"0,1,0,"+y1)
        },5)
    }
}


let z1 = 1
let rotateZInterval1 = null
function rotateZ1(){
   stopAnimation1();

    if(rotateZInterval1){
        clearInterval(rotateZInterval1)
        rotateZInterval1 = null
    } else {
        rotateZInterval1 = setInterval(()=>{
            z1+=0.01
            rotateDom1.setAttribute('rotation',"0,0,1,"+z1)
        },5)
    }
}

let x1 = 1
let rotateXInterval1 = null
function rotateX1(){
stopAnimation1();
    if(rotateXInterval1){
        clearInterval(rotateXInterval1)
        rotateXInterval1 = null
    } else {
        rotateXInterval1 = setInterval(()=>{
            x1+=0.01
			
            rotateDom1.setAttribute('rotation',"1,0,0,"+x1)
        },5)
    }
}

function stopAnimation1(){
    if(rotateXInterval1){
        clearInterval(rotateXInterval1)
        rotateXInterval1 = null
    }
    if(rotateZInterval1){
        clearInterval(rotateZInterval1)
        rotateZInterval1 = null
    }
    if(rotateYInterval1){
        clearInterval(rotateYInterval1)
        rotateYInterval1 = null
    }
}




let headLightDom1 = document.querySelector('#head1')
let onOrOff1 = true
function headLightOnOff1(){
    if(onOrOff1){
        headLightDom1.setAttribute('headlight','false')
        onOrOff1 = false
    }else {
        headLightDom1.setAttribute('headlight','true')
        onOrOff1 = true
    }
}
function lightDefault1(){
    headLightDom1.setAttribute('headlight','true')
    onOrOff1 = true
}

function left1(){
    rotateDom1.setAttribute('rotation','0,1,0,1.5')
}




function defaultO1(){
    rotateDom1.setAttribute('rotation',`0,1,0,0`)

}

function right1(){
    rotateDom1.setAttribute('rotation',`0,1,0,-1.5`)

}





let y2 = 1
let rotateYInterval2 = null
let rotateDom2 = document.querySelector('#rotation2')


function rotateY2(){
stopAnimation2();
    if(rotateYInterval2){
        clearInterval(rotateYInterval2)
        rotateYInterval2 = null
    } else {
        rotateYInterval2 = setInterval(()=>{
            y2+=0.01
            rotateDom2.setAttribute('rotation',"0,1,0,"+y2)
        },5)
    }
}


let z2 = 1
let rotateZInterval2 = null
function rotateZ2(){
   stopAnimation2();

    if(rotateZInterval2){
        clearInterval(rotateZInterval2)
        rotateZInterval2 = null
    } else {
        rotateZInterval2 = setInterval(()=>{
            z2+=0.01
            rotateDom2.setAttribute('rotation',"0,0,1,"+z2)
        },5)
    }
}

let x2 = 1
let rotateXInterval2 = null
function rotateX2(){
stopAnimation2();
    if(rotateXInterval2){
        clearInterval(rotateXInterval2)
        rotateXInterval2 = null
    } else {
        rotateXInterval2 = setInterval(()=>{
            x2+=0.01
			
            rotateDom2.setAttribute('rotation',"1,0,0,"+x2)
        },5)
    }
}

function stopAnimation2(){
    if(rotateXInterval2){
        clearInterval(rotateXInterval2)
        rotateXInterval2 = null
    }
    if(rotateZInterval2){
        clearInterval(rotateZInterval2)
        rotateZInterval2 = null
    }
    if(rotateYInterval2){
        clearInterval(rotateYInterval2)
        rotateYInterval2 = null
    }
}




let headLightDom2 = document.querySelector('#head2')
let onOrOff2 = true
function headLightOnOff2(){
    if(onOrOff2){
        headLightDom2.setAttribute('headlight','false')
        onOrOff2 = false
    }else {
        headLightDom2.setAttribute('headlight','true')
        onOrOff2 = true
    }
}
function lightDefault2(){
    headLightDom2.setAttribute('headlight','true')
    onOrOff2 = true
}

function left2(){
    rotateDom2.setAttribute('rotation','0,1,0,1.5')
}




function defaultO2(){
    rotateDom2.setAttribute('rotation',`0,1,0,0`)

}

function right2(){
    rotateDom2.setAttribute('rotation',`0,1,0,-1.5`)

}

</script>