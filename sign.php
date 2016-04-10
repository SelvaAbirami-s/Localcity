<?php
$h="localhost";
$u="root";
$db="sne";
$pass="";
$c= mysql_connect($h,$u,$pass,$db);
if(!$c)
die('not connected'.mysql_error());
mysql_select_db($db,$c) or die("cannot select");
$v1=$_POST['uname'];
$v2=$_POST['ename'];
$v3=$_POST['ss'];
$v4=$_POST['pass'];
$sql="insert into user values('$v1','$v2','$v3','$v4')";
mysql_query($sql,$c);
echo "<!DOCTYPE html
		PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
		'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns = 'http//:www.w3.org/1999/xhtml'>

  <head>
    
<title>PARADARSHII - CORRUPTION FREE ECONOMY</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' href='http://www.w3schools.com/lib/w3.css'>
    <link rel='stylesheet' href='style.css'>
  </head>

  <body>
    <table>
      <tr>
        <td>
          <h1>LOCAL CITY USER'S INFORMATION</h1>
    </table>
<ul>
<li><a href='paradarshii.php'>HOME</a></li>
<li><a href='signup.php'>SIGN UP</a></li>
<li><a href='login.php'>LOGIN</a></li>
</ul>
<br><br>
<center>THE FUTURE IS IN OUR HANDS...</center>
<img class='my w3-animate-right' src='one.gif' style='width:50%0%' height='40%' align='middle'/>
<img class='my w3-animate-right' src='two.jpg' style='width:50%' height='60%' align='middle'/>
<img class='my w3-animate-right' src='three.jpg' style='width:50%' height='40%' align='middle'/>
<img class='my w3-animate-right' src='four.jpg' style='width:50%' height='40%' align='middle'/>
<a class='w3-btn-floating' style='position:absolute;top:60%;left:375px' > < </a>
<a class='w3-btn-floating' style='position:absolute;top:60%;right:375px' > > </a>

<script>
var i = 0;
show();

function show() {
    var j;
    var a = document.getElementsByClassName('my');
    for (j = 0; j < a.length; j++) {
       a[j].style.display = 'none';  
    }
    i++;
    if (i > a.length) {i = 1}    
    a[i-1].style.display = 'block';  
    setTimeout(show, 4000);    
}
</script>
<div id='two'>
GOALS OF CITY USER INFORMATION<br><br>
 1).This movement act as an initiative to make a city as smart in the society.<br>
 2).It helps to guide the new user .<br>
 3).It helps the user to travel alone no need o any guide.</div>
 <div id='one'>
LOCAL CITY USER INFORMATION<br><br>
&nbsp&nbsp Local city user information is a system which helps to guide the user who is new to the city and helps them to suggest which is best for them to travel ,food and restarutent.</div>
<br/>
<br/>
<br/></br></br></br>
<div class='three'>
<h1>ABOUT THE SYSTEM</h1>
<ol>
<li class='big'>
In these system we are designed mainly to reduce the new user conflicts to the city</li>
<li class='big'>
such that there may occur any problem then the new user get conflicts and can't able to know where to go</li>
<li class='big'>And there may occur some problem to find which place is suitable according to there point of view</li>
<li class='big'>In these we mention review about the customer hence it help's for them to choose the best one among all</li>
<li class='big'>If the user sign up and get login id then they are consider to special hence if there any events in their native place it will be informed to them. </li>
</ol>
</div>
<div class='four'>
&copy; 2016 Mepco.All Rights Reserved.
<span><a href='#contact'>Contact us</a></span>
</div>
</body>

</html>
";
?>