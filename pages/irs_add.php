<html>  
<head>
    <meta charset="utf-8">
    <title>BURDC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/css/vendor/bootstrap.min.css" rel="stylesheet"> <!--bootstrap-->
    <link href="../dist/css/flat-ui.css" rel="stylesheet">  <!--flat UI-->
	<link rel="shortcut icon" href="dist/img/RSTC.png"> 
    <link href="../css/table_style.css" rel="stylesheet">
	
	
<style>
.brand {
    position: absolute;
	padding-top: 10px;
    left: 50%;
    margin-left: -50px !important;  /* 50% of your logo width */
    display: block;
}

.content {
	background-color: #eee;
	height: 1000px;
	width: 1100px;
	margin: 20px 130px;
	border-radius: 8px;
	padding: 10px 50px;
	position: absolute;
}
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


<!--Navi Barr-->
     <nav class="navbar navbar-inverse navbar-lg  navbar-static-top" role="navigation">
		<!--Logo-->
        <a class="brand" style="margin: 0px; float: none;">
        <img src="../dist/img/RSTC.png" alt="" width="60" height="60"></a>
        <br>
        <br>
        <h2 align="center"> <font color="#FFFFFF"> <font size="+2">Bicol University Research and Development Center </font> <br> <font size = "+1">(Information Receiving Section)</font></h2>
        
        
      </nav>
		
	  <!--end of navi bar-->
	  
<!--tiles-->
<!-- <div style="margin: 25px auto; padding: 0px 400px;">	-->
<div style="padding: 0px 100px;">
 <div style="text-align: center; margin: 50px auto;">

<a href = "irs_incoming.php">
<div id = tile style="margin: 25px; display:inline-block;"> 
<img src="../images/icons/micon/temp.png" alt="photo" height="110" width="110">
 <div class="poptext">
    <h3 align = "center"> <font size = "5"><br>Incoming</font></h3>
  </div>
</div> 
</a>

<a href = "irs_outgoing.php">
<div id = tile style=" margin: 25px; display:inline-block"> 
<img src="../images\icons\micon\temp.png"alt="photo" height="110" width="110">
 <div class="poptext">
    <h3 align = "center"> <font size = "5"><br>Outgoing</font></h3>
  </div>
</div>
</a>

<a href = "irs_travelorder.php">
<div id = tile style=" margin: 25px; display: inline-block;"> 
<img src="../images\icons\micon\temp.png"alt="photo" height="110" width="110">
 <div class="poptext">
    <h3 align = "center"> <font size = "5"><br>Travel Order</font></h3>
  </div>
  </div>
</a>


<a href = "irs_cheques.php">
<div id = tile style=" margin: 25px; display:inline-block;">
<img src="../images\icons\micon\temp.png"alt="photo" height="110" width="110">
 <div class="poptext">
    <h3 align = "center"> <font size = "5"><br>Cheque</font></h3>
  </div>
</div>
</a>


</div>
<center> <a href="../index.php" ><button style="color: #2E4C96">BACK TO HOME</button> </a></center>
</div>

<!--end of tiles-->


</body>
</html>