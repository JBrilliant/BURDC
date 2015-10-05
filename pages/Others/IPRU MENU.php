<html>  
<head>
    <meta charset="utf-8">
    <title>BURDC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet"> <!--bootstrap-->
    <link href="dist/css/flat-ui.css" rel="stylesheet">  <!--flat UI-->
	<link rel="shortcut icon" href="dist/img/RSTC.png">  
	
	
<style>
#tile{
background-color: #24469a;
position: relative;
padding: 50 50 50 50;
height: 200px;
width: 200px;
overflow: hidden;
border-radius: 50%;
}

#tile:hover {
  background-color: #969797;
  
}

.btn {
	position: absolute;
	top: 30 %;
	bottom : 40px;
	left: 600px; }

</style>
	</head>



<body>
<button class = "btn btn-success">BACK TO HOME</button>
<!--Navi Barr-->
      <nav class="navbar navbar-inverse navbar-lg  navbar-static-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-8">
            <span class="sr-only">Toggle navigation</span>
          </button>
		  <a href = "" alignment ="center" class="navbar-brand"> Intellectual Property Rights Unit System</a>
        </div>
		</nav>
	  <!--end of navi bar-->
	
<!--tiles-->	  
<h1 align="center"><font face="Trajan Pro">System Menu </p ></h1>
<a href = "createaccount.php" target = "_blank">
<div id = tile style="position: absolute; left: 80px; top: 270px;"> 
<img src="images\icons\add.png"alt="photo" height="110" width="110">
 <div class="poptext">
    <h3 align = "center"> <font size = "5"><br><br>Create Account </font></h3>
  </div>
</div> 
</a>

<a href = "stat.php" target = "_blank">
<div id = tile style="position: absolute; left: 323px; top: 270px;"> 
<img src="images\icons\EDIT.png"alt="photo" height="100" width="100">
 <div class="poptext">
    <h3 align = "center"> <font size = "5"><br><br>Statistics </font></h3>
 </div>
</div>
</a>

<a href = "search.php" target = "_blank">
<div id = tile style="position: absolute; left: 565px; top: 270px;"> 
<img src="images\icons\VIEW.png"alt="photo" height="100" width="100">
 <div class="poptext">
    <h3 align = "center"> <font size = "5"><br><br>Search </font></h3>
 </div>
</div>
</a>

<a href = "applicationleave.php" target = "_blank">
<div id = tile style="position: absolute; left: 810px; top: 270px;"> 
<img src="images\icons\DELETE.png"alt="photo" height="110" width="110">
 <div class="poptext">
    <h3 align = "center"> <font size = "5"><br><br>Application For Leave</font></h3>
  </div>
</div>
</a>

<a href = "applicationleave.php" target = "_blank">
<div id = tile style="position: absolute; left: 1060px; top: 270px;"> 
<img src="images\icons\logout.png"alt="photo" height="105" width="105">
 <div class="poptext">
    <h3 align = "center"> <font size = "5"><br><br>Log out</font></h3>
  </div>
</div>
</a>

<!--end of tiles-->


</body>
</html>