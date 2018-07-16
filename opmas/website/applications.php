<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
body {
/*background-image:url(backgr6.jpg);*/	
	margin:40px 40px 40px 40px;
	font-family:Comic Sans MS;
	background-color:#2c4762;
}
#back{
background-color:transparent/*beige*/;
opacity:.9 ;
border:groove;
border-bottom-style:groove;
border-color:white;
border-radius:15px;
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
	td.sc {
	border-radius: 3px 10px;
    padding: 12px;
	position:relative;
	background-color:beige;
	font:"Comic Sans MS";
}
input.sub{
border:groove;
border-radius:5px;
background-color:#FF8000;
width:100px;
height:50px;
font-size:18px;
font-family:"Arial Rounded MT Bold";
border-bottom-style:groove;
	border-color:gray;
}
table.a{
background-color:#663333;
border-style:groove;
border-color:#66CC99;
border:thick;
}

	table.a tr:nth-child(even) {background:#ff8800;}
    table.a tr:nth-child(odd) {background:beige;}
td.a {
	border-radius: 5px 15px;
    padding: 12px;
	position:relative;
		}
th.a {
	border-radius: 5px 15px;
    padding: 12px;
	position:relative;
	}
	th.b{
	background-color:plum;
	border-radius: 5px 15px;
    padding: 12px;
	position:relative;
	font-size:20px;
	 }
	 .style3 {
	color:#000000;
	border-radius:10px;
font-size:20px;
font-family:Androgyne_TB;
src:url("Androgyne_TB.otf") format("opentype");
text-align:center;
}
@font-face{
font-family:"Androgyne_TB";
src:url("Androgyne_TB.otf") format("opentype");

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
  <br />
<br />
  </div> 
</header><div id="back">

 <?php 

//this is the connection file for the database....

 $dbhost = 'localhost';
 $dbuser = 'root';
 $passwd = '';
 $conn = mysql_connect($dbhost, $dbuser,$passwd);		  	  
		   
 if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
    mysql_select_db('opmas');

	  $rec_lim = "select records from conf_settings";
  $result = mysql_query($rec_lim,$conn);
  $key = mysql_fetch_array($result,MYSQL_ASSOC);
      $rec_limit = $key['records'];
	 
    if( isset($_POST{'page'} ) ) {
        $str_var1 = $_POST['str_var1'];
        $NEW = unserialize(base64_decode($str_var1));
        $str_var2 = $_POST['str_var2'];
        $year = unserialize(base64_decode($str_var2));
        $str_var3 = $_POST['str_var3'];
        $monthweek = unserialize(base64_decode($str_var3));
        $str_var4 = $_POST['str_var4'];
        $checkbox = unserialize(base64_decode($str_var4));
		
 	    echo "</br>";
	 /* Get total number of records */
        $sql =  "select * from
                       (select * from 
                          (SELECT * FROM  
   ( select details.L_id as L_id1, details.Y_id as y_id1,details.W_id as w_id1, P_id as p_id1, Population, location.L_id, location.L_name from details inner join location on details.L_id=location.L_id where (";
        if(!empty($NEW)){
// Loop to store and display values of individual checked checkbox.
            $l =1;
            foreach($NEW as $selectedl)
              { 
                 if ($l > 1)
                    {
                      $sql = $sql . "or ";
                     }
                 $sql = $sql . "(location.L_id=" .$selectedl.") ";
                 $l = $l +1;
              }
          }
         $sql = $sql . "))  as matches
         inner join pest2 on matches.p_id1=pest2.P_id where(";
  
            if(!empty($checkbox)){
// Loop to store and display values of individual checked checkbox.
               $i =1;
               foreach($checkbox as $selected)
                 { 
                  if ($i > 1)
                   {
                     $sql = $sql . "or ";
                     }
                  $sql = $sql . "(pest2.P_id=" .$selected.") ";
                  $i = $i +1;
                 }
              }
  $sql = $sql . ")) as matches1 inner join year on matches1.y_id1=year.Y_id where(";
  if(!empty($year)){
// Loop to store and display values of individual checked checkbox.
$k=1;
foreach($year as $selectedy)
{ 
if ($k > 1)
{
  $sql = $sql . "or ";
  }
 $sql = $sql . "(year.Y_id=" .$selectedy.") ";
 $k = $k +1;
 }
 }
  $sql = $sql . "))as matches2 inner join week on matches2.w_id1=week.W_id where (";
  
  if(!empty($monthweek)){
// Loop to store and display values of individual checked checkbox.
$j =1;
foreach($monthweek as $selectedw)
{ 
if ($j > 1)
{
  $sql = $sql . "or ";
  }
 $sql = $sql . "(week.W_id=" .$selectedw.") ";
 $j = $j +1;
 }
 }
  $sql = $sql . ") ORDER BY L_id,Y_id ,P_id  ";
    }
 
  else
   {
    // $sql =  sprintf("SELECT * FROM  ( select details.L_id as L_id1, details.Y_id,details.W_id, P_id as p_id1, Population, location.L_id, location.L_name from details inner join location on details.L_id=location.L_id where (location.L_id =" .$selected_loc." )) as matches inner join pest2 on matches.p_id1=pest2.P_id where(pest2.P_id=" .$selected_pe.")  order by matches.L_name, pest2.P_name asc");
    $sql =  "select * from
   (select * from 
   (SELECT * FROM  
   ( select details.L_id as L_id1, details.Y_id as y_id1,details.W_id as w_id1, P_id as p_id1, Population, location.L_id, location.L_name from details inner join location on details.L_id=location.L_id where (";
   if(!empty($_POST['NEW'])){
// Loop to store and display values of individual checked checkbox.
$l =1;
foreach($_POST['NEW'] as $selectedl)
{ 
if ($l > 1)
{
  $sql = $sql . "or ";
  }
 $sql = $sql . "(location.L_id=" .$selectedl.") ";
 $l = $l +1;
 }
 }
  $sql = $sql . "))  as matches
 inner join pest2 on matches.p_id1=pest2.P_id where(";
  
 if(!empty($_POST['checkbox'])){
// Loop to store and display values of individual checked checkbox.
$i =1;
foreach($_POST['checkbox'] as $selected)
{ 
if ($i > 1)
{
  $sql = $sql . "or ";
  }
 $sql = $sql . "(pest2.P_id=" .$selected.") ";
 $i = $i +1;
 }
 }
  $sql = $sql . ")) as matches1 inner join year on matches1.y_id1=year.Y_id where(";
  if(!empty($_POST['year'])){
// Loop to store and display values of individual checked checkbox.
$k=1;
foreach($_POST['year'] as $selectedy)
{ 
if ($k > 1)
{
  $sql = $sql . "or ";
  }
 $sql = $sql . "(year.Y_id=" .$selectedy.") ";
 $k = $k +1;
 }
 }
  $sql = $sql . "))as matches2 inner join week on matches2.w_id1=week.W_id where (";
  
  if(!empty($_POST['monthweek'])){
// Loop to store and display values of individual checked checkbox.
$j =1;
foreach($_POST['monthweek'] as $selectedw)
{ 
if ($j > 1)
{
  $sql = $sql . "or ";
  }
 $sql = $sql . "(week.W_id=" .$selectedw.") ";
 $j = $j +1;
 }
 }
  $sql = $sql . ") ORDER BY L_id,Y_id ,P_id";
  
  }
 
        $retval = mysql_query( $sql, $conn );
		
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());
         }
			$total_records = mysql_num_rows($retval);  //count number of records
			
		 
   if( isset($_POST{'page'} ) ) { 
      	
	   $page = $_POST{'page'} + $_POST['next'];
	     
        $offset = $rec_limit * $page ;
		    }
		
				else {
          $page = 0;
		  $offset = 0;
        		 }
         
         $left_rec = $total_records - ($page *$rec_limit);
  // $sql =  sprintf("SELECT * FROM  ( select details.L_id as L_id1, details.Y_id,details.W_id, P_id as p_id1, Population, location.L_id, location.L_name from details inner join location on details.L_id=location.L_id where (location.L_id =" .$selected_loc." )) as matches inner join pest2 on matches.p_id1=pest2.P_id where(pest2.P_id=" .$selected_pe.")  order by matches.L_name, pest2.P_name asc");
  
   if( isset($_POST{'page'} ) ) {
    
    
	    echo "</br>";
	 /* Get total number of records */
        $sql =  "select * from
                       (select * from 
                          (SELECT * FROM  
   ( select details.L_id as L_id1, details.Y_id as y_id1,details.W_id as w_id1, P_id as p_id1, Population, location.L_id, location.L_name from details inner join location on details.L_id=location.L_id where (";
        if(!empty($NEW)){
// Loop to store and display values of individual checked checkbox.
            $l =1;
            foreach($NEW as $selectedl)
              { 
                 if ($l > 1)
                    {
                      $sql = $sql . "or ";
                     }
                 $sql = $sql . "(location.L_id=" .$selectedl.") ";
                 $l = $l +1;
              }
          }
         $sql = $sql . "))  as matches
         inner join pest2 on matches.p_id1=pest2.P_id where(";
  
            if(!empty($checkbox)){
// Loop to store and display values of individual checked checkbox.
               $i =1;
               foreach($checkbox as $selected)
                 { 
                  if ($i > 1)
                   {
                     $sql = $sql . "or ";
                     }
                  $sql = $sql . "(pest2.P_id=" .$selected.") ";
                  $i = $i +1;
                 }
              }
  $sql = $sql . ")) as matches1 inner join year on matches1.y_id1=year.Y_id where(";
  if(!empty($year)){
// Loop to store and display values of individual checked checkbox.
$k=1;
foreach($year as $selectedy)
{ 
if ($k > 1)
{
  $sql = $sql . "or ";
  }
 $sql = $sql . "(year.Y_id=" .$selectedy.") ";
 $k = $k +1;
 }
 }
  $sql = $sql . "))as matches2 inner join week on matches2.w_id1=week.W_id where (";
  
  if(!empty($monthweek)){
// Loop to store and display values of individual checked checkbox.
$j =1;
foreach($monthweek as $selectedw)
{ 
if ($j > 1)
{
  $sql = $sql . "or ";
  }
 $sql = $sql . "(week.W_id=" .$selectedw.") ";
 $j = $j +1;
 }
 }
  $sql = $sql . ") ORDER BY L_id,Y_id ,P_id  LIMIT $offset, $rec_limit ";
    }
  else
   {
    // $sql =  sprintf("SELECT * FROM  ( select details.L_id as L_id1, details.Y_id,details.W_id, P_id as p_id1, Population, location.L_id, location.L_name from details inner join location on details.L_id=location.L_id where (location.L_id =" .$selected_loc." )) as matches inner join pest2 on matches.p_id1=pest2.P_id where(pest2.P_id=" .$selected_pe.")  order by matches.L_name, pest2.P_name asc");
    $sql =  "select * from
   (select * from 
   (SELECT * FROM  
   ( select details.L_id as L_id1, details.Y_id as y_id1,details.W_id as w_id1, P_id as p_id1, Population, location.L_id, location.L_name from details inner join location on details.L_id=location.L_id where (";
   if(!empty($_POST['NEW'])){
// Loop to store and display values of individual checked checkbox.
$l =1;
foreach($_POST['NEW'] as $selectedl)
{ 
if ($l > 1)
{
  $sql = $sql . "or ";
  }
 $sql = $sql . "(location.L_id=" .$selectedl.") ";
 $l = $l +1;
 }
 }
  $sql = $sql . "))  as matches
 inner join pest2 on matches.p_id1=pest2.P_id where(";
  
 if(!empty($_POST['checkbox'])){
// Loop to store and display values of individual checked checkbox.
$i =1;
foreach($_POST['checkbox'] as $selected)
{ 
if ($i > 1)
{
  $sql = $sql . "or ";
  }
 $sql = $sql . "(pest2.P_id=" .$selected.") ";
 $i = $i +1;
 }
 }
  $sql = $sql . ")) as matches1 inner join year on matches1.y_id1=year.Y_id where(";
  if(!empty($_POST['year'])){
// Loop to store and display values of individual checked checkbox.
$k=1;
foreach($_POST['year'] as $selectedy)
{ 
if ($k > 1)
{
  $sql = $sql . "or ";
  }
 $sql = $sql . "(year.Y_id=" .$selectedy.") ";
 $k = $k +1;
 }
 }
  $sql = $sql . "))as matches2 inner join week on matches2.w_id1=week.W_id where (";
  
  if(!empty($_POST['monthweek'])){
// Loop to store and display values of individual checked checkbox.
$j =1;
foreach($_POST['monthweek'] as $selectedw)
{ 
if ($j > 1)
{
  $sql = $sql . "or ";
  }
 $sql = $sql . "(week.W_id=" .$selectedw.") ";
 $j = $j +1;
 }
 }
  $sql = $sql . ") ORDER BY L_id,Y_id ,P_id LIMIT $offset, $rec_limit";
  
  }
         $retval = mysql_query( $sql, $conn );
         
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());
         }
 ?>
<table class="sc" cellpadding="5" cellspacing="6" align="center" width="1024"><tr><td></td><td class="sc"><center><h1>DATABASE</h1></center></td><td></td></tr> 
<tr><td><form method = "post" action ="<?php echo $_SERVER["PHP_SELF"];?>">
 <?php    if( isset($_POST{'page'} ) ) { ?>
<input type="hidden"
  id="str_var1"
  name="str_var1"
  value= "<?php print base64_encode(serialize($NEW));?>"> 

<input type="hidden"
  id="str_var2"
  name="str_var2"
  value= "<?php print base64_encode(serialize($year));?>"> 
  
 <input type="hidden"
  id="str_var3"
  name="str_var3"
  value= "<?php print base64_encode(serialize($monthweek));?>"> 

<input type="hidden"
  id="str_var4"
  name="str_var4"
  value= "<?php print base64_encode(serialize($checkbox));?>"> 
  	<?php	}
		else
		{  ?>
		<input type="hidden"
  id="str_var1"
  name="str_var1"
  value= "<?php print base64_encode(serialize($_POST["NEW"]));?>"> 

<input type="hidden"
  id="str_var2"
  name="str_var2"
  value= "<?php print base64_encode(serialize($_POST["year"]));?>"> 
  
 <input type="hidden"
  id="str_var3"
  name="str_var3"
  value= "<?php print base64_encode(serialize($_POST["monthweek"]));?>"> 

<input type="hidden"
  id="str_var4"
  name="str_var4"
  value= "<?php print base64_encode(serialize($_POST["checkbox"]));?>"> 
		<?php  }
?>
<center>
  <p><br/>
      <?php if($page!=0){ ?>
      <input type="image" onclick="submit()" name="next" value = "-1" src="previous.png" width="60" height="60"/>
      <?php } ?></td><td class="sc">
  <table cellpadding='3' cellspacing='3' align='center' class="a"> <a href="dropdown.php"><img src="back.gif" /><b>Selection Page</b></a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <b style="color:#663300">Page No : <?php echo $page ?></b>
<th class="b">Location</th><th class="b">Year</th><th class="b">Pest</th ><th class="b">Week</th><th class="b">Population</th>
<hr  style="height:5px" color="#669933"/>
<?php
while($data = mysql_fetch_assoc($retval))
//while($rows = mysql_fetch_assoc($retval))
//{ 
 {

// echo '<img src="data:image/jpeg;base64,'. base64_encode($data['pic']) .'" />';
// we are running a while loop to print all the rows in a table
//echo '<img src="data:image/jpeg;base64,'. base64_encode($data['pic']) .'" />';
echo "<tr bgcolor='yellow'>"; // printing table row
echo "<td class='a'>".$data['L_name']."</td> <td class='a'>".$data['Y_id']."</td> <td class='a'>".$data['P_name']."</td> <td class='a'>".$data['W_id']."</td> <td class='a'>".$data['Population']."</td>";

 // we are looping all data to be printed till last row in the table
echo "</tr>"; // closing table row
}
?>
</table></td><td><input type = "hidden" name = "page" value = "<?php echo $page ?>" > 
<?php if(($total_records - $offset)>$rec_limit){?>
  <input type="image" onclick="submit()"name="next" value = "1"  src="next.png"width="60" height="60"/>  <?php }?>
 </center> 
 </form></td></tr></table></div><br /><br />
 <footer>
 <hr size="3" color="#008c8c"/>
  <center><p>Desgined and Developed by:Priyansh Gupta</p><br />

 </center>
</footer>

</body>
</html>
