<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Data Forewarning</title>
<style>
body {
	
		background-color:#2c4762;/*
		background-image:url(backgr6.jpg);*/
	font-weight:lighter;
	margin:40px 40px 40px 40px;
	font-family:Comic Sans MS;
	text-align:center;
	/*#663333*/
}

#back{
opacity:.9 ;
font-family: "Comic Sans MS","Verdana", "Arial Rounded MT Bold";
font-size:16px;
border:groove;
border-bottom-style:groove;
border-color:white;
border-radius:15px;
background:beige;
}
#rcorners2 {
    border-radius: 25px;
    border: 4px solid #73AD21;
    padding: 20px;
 	position:inherit;
	
}

#h td{
	border-radius:8px;
    padding: 8px;
	position:relative;
	background-color:#008c8c;
	font:"Comic Sans MS";
	/*#FFCFA8;*/
	color:beige/*#4A8AFF#0089b4*/;
border-bottom-style:groove;
	border-color:gray;
	font-weight:700;
	/*background-image:url(hoverbutton.jpg);*/

}
footer{
    border-radius:15px 70px;
	width:100%;
	padding:8px;
	color:beige/*#663300*/;
	position:inherit;
	bottom:20px;
	}
	header{
	
	border-radius:15px 70px;
	width:100%;
	padding:8px;
	color:beige;
	position:inherit;
	vertical-align:top;
	
	}
	
	#c {
  position:relative;
  height:281px;
  width:450px;
  margin:0 auto;
}
#m2 img{
border-radius:10px;
border-bottom:thick;
border-style:ridge;
}
.style
{
font-size:28px;
font-stretch:narrower;
font-weight:lighter;
/* the trick to use external font and use it in your website*/
font-family:"Androgyne_TB";
src:url("Androgyne_TB.otf") format("opentype");
color:black/*#4A8AFF#0089b4*/;
text-align:center;
																																																																		
}/*this helps inserting font to system without being installing it and just running through font tags*/
@font-face{
font-family:"Androgyne_TB";
src:url("Androgyne_TB.otf") format("opentype");

font-stretch:narrower;
font-weight:lighter;
}
.style1
{
font-size:20px;
font-stretch:narrower;
font-weight:lighter;
	font-family:"Comic Sans MS";
	text-align:center;
color:black;																																																																	
}
.style2
{
font-size:20px;
	font-family:"Comic Sans MS";
src:url("Androgyne_TB.otf") format("opentype");
color:black;
text-align:center;																																																															
}
.style3
{
font-size:20px;
font-stretch:narrower;
font-weight:lighter;
	font-family:"Comic Sans MS";
	text-align:left;
color:black;																																																																	
}
td.a {
	border-radius: 15px;
    padding: 12px;
	position:relative;
	border:groove;
	border-color:#000000;	
		}

/*page wrap
		
		
		img.bg {
			/* Set rules to fill background */
	/*		min-height: 100%;
			min-width: 1024px;
			
			/* Set up proportionate scaling */
		/*	width: 100%;
			height: auto;
			
			/* Set up positioning */
			/*position: fixed;
			top: 0;
			left: 0;
		}
		
		@media screen and (max-width: 1024px){
			img.bg {
				left: 50%;
				margin-left: -512px; }
		}
		
		#page-wrap { position:relative; width: 1200px; margin:auto; padding: 30px; background:#663333; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; }
	
		*/
</style>
</head>
<body vlink="beige">
<header><center><font size="+3" face="Georgia"><b>Pest And Agriclutural Care System</b><!--#009CE8--></font></center> 
  <hr size="3" color="#008c8c"/><div id="h">
    <table align="right">
 <tr><td><a href="access-controlled.php">HOME</a></td>
 <td><a href="DA.php">DATA ANALYTICS</a></td>
 <td><a href="DF.php">DATA FORWARNING</a></td>
<td><a href="">CONTACT</a></td>
<td id="demo" onclick="function()"> LINKS </td>
        <td><a href='login-home.php'>ACCOUNT</a></td>
</tr>
  </table> 
<br />
  </div> Logged in as: <?= $fgmembersite->UserFullName() ?>
</header><div id="back">
<p class="style">   FOREWARNING SYSTEM FOR <br />CROP AND THEIR PEST  </p>
  <p class="style1">In pest and diseases forewarning system,the variables of intrest may be maximum pest population/disease severity at diffrent stages of crop growth or at standard weeks,time of first apperance of pests/diseases,time of maximum pest population and etc.<br />
 If data are avialable at periodic interval for 15 to 20 years, the detailed study can be carried out for diffrent variables of intrest.<br />
 However,depending upon the data avialability diffrent types of models can be utilized for developing forewarning system. 
 </p>
  
<table class="a" align="center">
<td width="594" class="a">
 <p class="style">What Is Prediction?</p>
 <p class="style3">Prediction is the generalize term & it's independent of time. 
Prediction- Predicting amount spend by user for certain case. It's happen over the period of time but not exact.<br />
Prediction is all about bahaviroal,it is about certainty.
<center><font color="navy" face="Comic Sans MS">
  <a href="roundtable.php" style="color:#0066CC">PREDICTIONING SYSTEM</a><br />
*visit here for predictioning system...</font></center></p></td>
<td width="594" class="a"><p class="style" >What Is Forecasting?</p>
<p class="style3">
 Forecasting is the prediction with time as a one of the dependent variable. Eg- 
Forecasting- Best example is weather forecasting.
Forecasting is all about numbers.<br />
A forecast is about probability.
 <br />
 <center><font color="navy" face="Comic Sans MS">
  <a href="forcasting.php"  style="color:#0066CC">FORCASTING SYSTEM</a><br />
*visit here for forecasting system...</font></center> </p></td>
</table></div>
  <br /><br />
<footer>
 <hr size="3" color="008c8c"/>
  <center><p>Desgined and Developed by:Priyansh Gupta</p><br />

 </center>
</footer>
<!--</div>-->

</body>
</html>
