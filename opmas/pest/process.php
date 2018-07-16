<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
if((isset($_POST['pest'])) && ($_POST['pest'] == 'y'))
{
echo '<img src="aphids.jpg" width="213" height="154" alt="ap" />';
}
else
{
echo '<img src="jassid.jpg" width="266" height="189" alt="js" />';
}
?>
</body>
</html>
