<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<form name="f1" method="POST" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <!--<input class="no-check-border-win" name="pest" value="n"  type="image" src="../about.jpg" />pest -->

 <?php

if(isset($_POST['pest'])&& isset($_POST['pest1'])) 
{
if(($_POST['pest'] == 'y') && ($_POST['pest1']='y'))
{
echo '<input type ="image" name= "pest" src="aphids.jpg" width="213" value = "n" height="154" alt="ap" />';
echo '<input type ="image" name= "pest1" src="jassid.jpg" width="213" value = "n" height="154" alt="ap" />';
}
elseif(($_POST['pest'] == 'y') && ($_POST['pest1']='n'))
{
echo '<input type="image" name= "pest" src="aphids.jpg" width="266" value = "n" height="189" alt="js" />';
echo '<input type="image" name= "pest1" src="jassid_ch.jpg" width="266" value = "y" height="189" alt="js" />';

}
elseif(($_POST['pest'] == 'n') && ($_POST['pest1']='y'))
{
echo '<input type="image" name= "pest" src="aphids_ch.jpg" width="266" value = "y" height="189" alt="js" />';
echo '<input type="image" name= "pest1" src="jassid.jpg" width="266" value = "n" height="189" alt="js" />';

}
elseif(($_POST['pest'] == 'n') && ($_POST['pest1']='n'))
{
echo '<input type="image" name= "pest" src="aphids_ch.jpg" width="266" value = "y" height="189" alt="js" />';
echo '<input type="image" name= "pest" src="jassid_ch.jpg" width="266" value = "y" height="189" alt="js" />';

}
}
else
{
echo '<input type ="image" name= "pest" src="aphids.jpg" width="213"  height="154" alt="ap" onclick="check1()" />';
echo '<input type ="image" name= "pest1" src="jassid.jpg" width="213"  height="154" alt="ap" onclick="check2()"/>';
}

function check1(){
if {form.pest.value = "n")
{ form.pest.value = "y";
form.submit = 
}
}
?>
 </form>
</body>
</html>
