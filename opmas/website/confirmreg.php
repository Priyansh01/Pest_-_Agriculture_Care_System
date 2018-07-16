<?PHP
require_once("./include/membersite_config.php");

if(isset($_GET['code']))
{
   if($fgmembersite->ConfirmUser())
   {
        $fgmembersite->RedirectToURL("thank-you-regd.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Confirm registration</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
	  <style>
body {
	background-color:#2c4762; /*#4c4c5c#663333;
	background-image:url(backgr6.jpg);*/
	font-weight:lighter;
	margin:40px 40px 40px 40px;
	font-family:Comic Sans MS;
}
footer{
    border-radius:15px 70px;
	background-color:transparent/*#06AEFF*/;
	width:100%;
	padding:8px;
	color:beige/*#663300*/;
	position:inherit;
	bottom:20px;
	
	}
	header{
	background-color:transparent/*#06AEFF*/;
	border-radius:15px 70px;
	width:100%;
	padding:8px;
	color:"navy blue";
	position:inherit;
	vertical-align:top;
	}
</style>

</head>
<body alink="beige" vlink="beige"><header><center><font size="+3" color="beige" face="Georgia"><b>Pest And Agriclutural Care System</b></font></center> 
  <hr size="3" color="#008c8c"/>
<br /> 
<br /> 
<center>


<!-- Form Code Start -->
<div id='fg_membersite'>
<table>
 <td width="101" align="left" valign="top"><a href="index.html"><img src="index image/back-button.png" alt="back" width="49" height="52" /></a></td>
 <td width="1127" align="center" valign="top"><h2>Confirm registration</h2>
<p>
Please enter the confirmation code in the box below
</p>
<form id='confirm' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='get' accept-charset='UTF-8'>
<fieldset>
<legend>Confirm</legend>
<div class='short_explanation'>* required fields</div>
<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='code' >Confirmation Code:* </label><br/>
    <input type='text' name='code' id='code' maxlength="50" /><br/>
    <span id='register_code_errorloc' class='error'></span>
</div>
<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>
</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("confirm");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("code","req","Please enter the confirmation code");

// ]]>
</script></td></table>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->
</center>
<br /><br />
<footer><hr size="3" color="008c8c"/>
  <center><p>Desgined and Developed by:Priyansh Gupta</p>
  </center>
</footer>
</body>
</html>