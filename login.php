<!DOCTYPE html
		PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'
		'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns = 'http//:www.w3.org/1999/xhtml'>
   <head>
    <title>LOGIN</title>
		<h1>LOGIN</h1>
		<link rel='stylesheet' href='style3.css'>
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
	function isValid()r
	{
		var usn = /[a-z][A-Z]/;
		if(login.uname.value(usn))
			document.alert('Please enter a valid user name');
	}
	</script>
	</body>
</html>
