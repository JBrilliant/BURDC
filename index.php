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
background-color: #2e4c96;
position: relative;
padding: 50 10 10 45;
height: 200px;
width: 200px;
overflow: hidden;
}

.tile7{
background-color: #27ae60;
padding: 50 35;
height: 200px;
width: 200px;
overflow: hidden;
}

.poptext {
  background-color: rgba(255,255,255,0.5);
  position: absolute;
  bottom: -203px;
  left:-1px;
  width: 201px;
  height: 200px;
  transition: all 0.4s ease;
}


#tile:hover .poptext {
  background-color: #eee;
  bottom: 0;
}

.tile7:hover .poptext{
  background-color: #eee;
  bottom: 0;
}
.btn {
	position: absolute;
	top: 30 %;
	bottom : 100px;
	left: 600px; }
</style>
	</head>



<body>

<button class = "btn btn-success" >BACK TO HOME</button>
<!--Navi Barr-->
      <nav class="navbar navbar-inverse navbar-lg  navbar-static-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-8">
            <span class="sr-only">Toggle navigation</span>
          </button>
		  <a href = "index.php" class="navbar-brand">Bicol University Research and Development Center Subsystems</a>
        </div>
		
	  <!--end of navi bar-->
	  
<!--tiles-->	  
<a href = "mod/mod1/irs_main">
<div id = tile style="position: absolute; left: 30px; top: 170px;"> 
<img src="images/icons/micon/temp.png" alt="photo" height="110" width="110">
 <div class="poptext">
    <h3 align = "center"> <font size = "5"><br>Information and Receiving Section (IRS)</font></h3>
  </div>
</div> 
</a>

<a href = "#">
<div id = tile style="position: absolute; left: 251px; top: 171px;"> 
<img src="images\icons\micon\temp.png"alt="photo" height="100" width="100">
 <div class="poptext">
    <h3 align = "center"> <font size = "5"><br>Tihrcom</font></h3>
  </div>
</div>
</a>

<a href = "#">
<div id = tile style="position: absolute; left: 470px; top: 170px;"> 
<img src="images\icons\micon\temp.png"alt="photo" height="100" width="100">
 <div class="poptext">
    <h3 align = "center"> <font size = "5"><br>Publication </font></h3>
  </div>
  </div>
</a>


<a href = "pis.php">
<div id = tile style="position: absolute; left: 690px; top: 170px;">
<img src="images\icons\micon\temp.png"alt="photo" height="110" width="110">
 <div class="poptext">
    <h3 align = "center"> <font size = "5"><br>Bids and Award Committee (BAC)</font></h3>
  </div>
</div>
</a>

<a href = "#">
<div id = tile style="position: absolute; left: 910px; top: 170px;">
<img src="images\icons\micon\temp.png"alt="photo" height="110" width="110">
 <div class="poptext">
    <h3 align = "center"> <font size = "5"><br><br>Intellectual Property Rights Unit (IPRU)</font></h3>
  </div>
</div>
</a>

<a href = "#">
<div id = tile style="position: absolute; left: 1130px; top: 170px;">
<img src="images\icons\micon\temp.png"alt="photo" height="110" width="110">
 <div class="poptext">
    <h3 align = "center"> <font size = "5"><br><br>PMDU</font></h3>
  </div>
</div>
</a>



<!--end of tiles-->


</body>
</html>