<?php
$h="localhost";
$u="root";
$db="sne";
$pass="";
$c= mysql_connect($h,$u,$pass,$db);
if(!$c)
die('not connected'.mysql_error());
mysql_select_db($db,$c) or die("cannot select");
$sql="select username,password from user";
$res=mysql_query($sql,$c);
$flag=0;
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
if($row['username']==$_POST['uname'] && $row['password']==$_POST['pass'])
{
$flag=1;
}
}
if($flag==1)
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
    <link rel='stylesheet' href='stylesheets/style.css'>
<style>
.dropbtn {
    background-color: black;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color:blue;}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: blue;
}
</style>  </head>

  <body>
    <table>
      <tr>
        <td>
          <h1>LOCAL CITY USER'S INFORMATION</h1>
    </table>
<ul>
<li><a href='home.php'>HOME</a></li>
<li>
</li>
<li><a href='paradarshii.php'>LOGOUT</a></li>
</ul>
<p>SELECT THE REQUIRED CITY TO VIEW DETAILS</p>
<div class='dropdown'><button class='dropbtn'>CITY</button>
  <div class='dropdown-content'>
    <a href='vnr.php'>Virudhunagar</a>
    <a href='srivi.php'>Srivilliputtur</a>
  </div></div>
<br><br><br><br><br><br>
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
else
echo "<!DOCTYPE html
		PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
		'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns = 'http//:www.w3.org/1999/xhtml'>
   <head>
    <title>LOGIN</title>
		<h1>LOGIN</h1>
		<link rel='stylesheet' href='stylesheets/style3.css'>
	</head>
	
	<body>
	<hr></hr>
	<center>
        <div id='i1'>
	 <form method='post' onsubmit = 'return(isValid());' action = 'log.php' name = 'login'>
        <label>User Name</label>
        <input type='text' id='uname' name='uname' placeholder='Username'>

          <label>Password</label>
         <input type='password' id='pass' name='pass' placeholder='Password'>
		 <input type='submit' value='Submit'>
<font color='red'><p id='msg'></p></font>
		 <a href='forget.html'>forget password?</a>
	 </form>
         </div>
	</center>
	<script type = 'text/javascript'>
document.getElementById('msg').innerHTML='incorrect login';
	function isValid()
	{
		var usn = /[a-z][A-Z]/;
		if(login.uname.value(usn))
			document.alert('Please enter a valid user name');
	}
	</script>
	</body>
</html>
";
?>