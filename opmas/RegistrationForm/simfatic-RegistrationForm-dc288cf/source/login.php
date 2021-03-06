<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.php");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Login</title>
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
<body><header><center><font size="+3" color="beige" face="Georgia"><b>Pest And Agriclutural Care System</b></font></center> 
  <hr size="3" color="#008c8c"/>
  <br /><br />

<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='username' >UserName*:</label><br/>
    <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='login_username_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='password' >Password*:</label><br/>
    <input type='password' name='password' id='password' maxlength="50" /><br/>
    <span id='login_password_errorloc' class='error'></span>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>
<div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->
<br /><br />
<footer><hr size="3" color="008c8c"/>
  <center><p>Desgined and Developed by:Priyansh Gupta</p>
  </center>
</footer>
</body>
</html>