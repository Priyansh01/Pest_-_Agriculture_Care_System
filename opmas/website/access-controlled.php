<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>An Access Controlled Page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
	  <style type="text/css">
body {
	background-color: #2c4762;/*#006C6C#663333#4c4c5c*/
	/*background-image:url(backgr6.jpg);*/	
	margin:40px 40px 40px 40px;
	font-family:Comic Sans MS;
	
}
.style
{
font-size:28px;
font-stretch:narrower;
font-weight:lighter;
/* the trick to use external font and use it in your website*/
font-family:"Androgyne_TB";
src:url("Androgyne_TB.otf") format("opentype");
color:white/*#4A8AFF#0089b4*/;
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
color:white;
text-align:center;																																																															
}
.style3
{
font-size:20px;
font-stretch:narrower;
font-weight:lighter;
	font-family:"Comic Sans MS";
	text-align:left;
color:white;																																																																	
}
#back{
opacity:.9 ;
font-family: "Comic Sans MS","Verdana", "Arial Rounded MT Bold";
font-size:16px;
border:groove;
border-bottom-style:groove;
border-color:white;
border-radius:8px;
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
@font-face{
font-family:"Androgyne_TB";
src:url("Androgyne_TB.otf") format("opentype");

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
#c img {
	position:absolute;
	border:groove;
	border-bottom-style:groove;
  -webkit-transition: opacity 1s ease-in-out;
  -moz-transition: opacity 1s ease-in-out;
  -o-transition: opacity 1s ease-in-out;
	transition: opacity 1s ease-in-out;
}
@keyframes cFadeInOut {
  0% {
    opacity:1;
  }
  17% {
    opacity:1;
  }
  25% {
    opacity:0;
  }
  92% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

#c img:nth-of-type(1) {
  animation-delay:6s;
}
#c img:nth-of-type(2) {
  animation-delay: 4s;
}
#c img:nth-of-type(3) {
  animation-delay: 2s;
}
#c img:nth-of-type(4) {
  animation-delay: 0s;
}  
#c img.top {
animation-name: cFadeInOut;
animation-timing-function: ease-in-out;
animation-iteration-count: infinite;
animation-duration: 10s;
}
#cor {
border-radius:10px;
border-bottom:thick;
border-style:ridge;
background-color:#4c4c5c/*#CC3333#4A8AFF#ff9900#FF8951*/;
text-align:center;
}


/*show more or less*/

.read-more-state {
  display: none;
}

.read-more-target {
  opacity: 0;
  max-height: 0;
  font-size: 0;
  transition: .25s ease;
}

.read-more-state:checked ~ .read-more-wrap .read-more-target {
  opacity: 1;
  font-size: inherit;
  max-height: 999em;
}

input.read-more-state ~ .read-more-trigger:before {
  content: 'Show more';
 }

input.read-more-state:checked ~ .read-more-trigger:before {
  content: 'Show less';
}

label.read-more-trigger {
  cursor: pointer;
  display: inline-block;
  padding: 0 .5em;
  color:beige;
  font-size: .9em;
  line-height: 2;
  border: 1px solid #333333;
  border-radius: .25em;
  background-color:#2c4762/*#008c8c#CC3333#D9006C#009CE8*/;
  text-align:center;
}

</style>
</head>
<body vlink="beige">
<header><center><font size="+3" face="Georgia"><b>Pest And Agriclutural Care System</b><!--#009CE8--></font></center> 
  <hr size="3" color="#008c8c"/><div id="h"><table align="right">
 <tr><td><a href="access-controlled.php">HOME</a></td>
 <td><a href="DA.php">DATA ANALYTICS</a></td>
 <td><a href="DF.php">DATA FORWARNING</a></td>
<td><a href="">CONTACT</a></td>
<td id="demo" onclick="function()"> LINKS </td>
        <td><a href='login-home.php'>ACCOUNT</a></td>
</tr>
  </table>
    
  </div> 
  Logged in as: <?= $fgmembersite->UserFullName() ?>
</p>
</header><div id='fg_membersite_content'><br>	  
<div id="back"><center><U><b>
OBJECTIVE :  TO STUDY THE PATTERN DEVELOPMENT FOR PEST IN COTTON AND TO DEVELOP WEATHER BASED FORWARNING MODELS COTTON PESTS.</b></U></center>
<table>
  <tr><td width="750"><br /> <div id="show">
<input type="checkbox" class="read-more-state" id="1" />
  <p class="read-more-wrap"><b>What is Integrated Pest Management (IPM)?</b><br />
  Integrated pest management, or IPM, is a process you can use to solve pest problems while minimizing risks to people and the environment. IPM can be used to manage all kinds of pests anywhere—in urban, agricultural, and wildland or natural areas. 
      <b><br /><br />
        Definition of IPM</b><br /><br />IPM is an ecosystem-based strategy that focuses on long-term prevention of pests or their damage through a combination of techniques such as biological control, habitat manipulation, modification of cultural practices, and use of resistant varieties.<span class="read-more-target">
      Pesticides are used only after monitoring indicates they are needed according to established guidelines, and treatments are made with the goal of removing only the target organism. Pest control materials are selected and applied in a manner that minimizes risks to human health, beneficial and nontarget organisms, and the environment.</span></p>
          <label for="1" class="read-more-trigger" style="text-align:center"></label></div>

     </td><td width="470" valign="top"><div id="c"><img src="1.jpg" class="bottom" />
  <img src="2.jpg"  class="top"/>
   <img src="3.jpg"  class="top"/> 
   <img src="4.jpg"  class="top"/>
  </div></td></tr></table>
  <table cellspacing="3" cellpadding="3" align="center">
   <tr><br />
     <td width="258"><div id="cor"><br />
       COTTON<br />
       <p></p>
 <div id="show">
<input type="checkbox" class="read-more-state" id="post-2" />

 
       <p class="read-more-wrap"> Cotton is a soft fiber that grows in a boll or protective capsule around the seeds of cotton plants of the genus Gossypium in the family of Malvaceae.<br /><br />
       The fiber is almost pure cellulose.<span class="read-more-target"> Under natural conditions, the cotton bolls will tend to increase the dispersion of the seeds.<br /><br />
       Top 10 cotton producing states of India are Gujrat, Maharashtra, Andhra Pradesh, telangana,Haryana, Madhya Pradesh, Punjab, Rajasthan, Karnataka, TamilNadu and Orissa. 
       
</span></p>
             <label for="post-2" class="read-more-trigger" style="text-align:center"></label></div>

     </div></td><td>
 
       <div id="m2"><img src="cotton.jpg" width="258" height="290" /></div></td>
     <td width="32"></td>
     <td width="258"><div id="cor"><br />
       PESTS<br />
	   <div id="show">
<input type="checkbox" class="read-more-state" id="post-3" />
       <p class="read-more-wrap">In this project data regarding various pests have been collected. 
       Pests include Jassid, Whitefly, Miridbug, Thrips, Spodeptera_larva, Aphids, crysoperla, spiders etc. <br /><br /><span class="read-more-target">
        These data are collected from 14 locations across India. <br /><br />
        The locations are Faridkot, Hissar, Banswara, Anand, Rajkot, Khandwa, Akola, Jalna, Ahmednagar, Karimnagar, Guntur, Mysore, Prembalur, Belgaum.</span> </p>
		<label for="post-3" class="read-more-trigger"></label></div>
            </div></td>
     <td><p align="right"> </p>
         <p align="right"> </p>
       <div id="m2"><img src="pest.jpg" width="258" height="290" /></div></td>
   </tr>
 </table>
</div>

 <footer>
 <hr size="3" color="#008c8c"/>
  <center><p>Desgined and Developed by:Priyansh Gupta</p><br />

 </center>
</footer>
</div>
</body>
</html>
