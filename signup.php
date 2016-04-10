<!DOCTYPE html
		PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns = "http//:www.w3.org/1999/xhtml">
   <head>
    <title>SIGN UP</title>
		<h1>SIGN UP</h1>
		<link rel="stylesheet" href="style3.css">
		<style>
		body{
         background-image: url("back.jpg");
         background-color:#cccccc;
</style>

	</head>
	
	<body>
	<hr></hr>
	<center>
        <div id="i1">
	 <form onsubmit = "return(isValid());" action = "sign.php" name = "login" method="post">
        <label>Enter Name</label>
        <input type="text" id="uname" name="uname" placeholder="Username">
        <label>Enter mail id</label>
        <input type="text" id="ename" name="ename" placeholder="Emailid">
          <label> Select City:
          <select class="ss" name="ss">
		       <option class="ii1" value="d">select district</option>
               <option value="Ariyalur">Ariyalur</option>
               <option value="Chennai">Chennai</option>
               <option value="Coimbatore">Coimbatore</option>
			   <option value="Cuddalore">Cuddalore</option>
               <option value="Dharmapuri">Dharmapuri</option>
               <option value="Dindigul">Dindigul</option>
			   <option value="Erode">Erode</option>
               <option value="Kancheepuram">Kancheepuram</option>
               <option value="KanniyaKumari">KanniyaKumari</option>
			   <option value="Karur">Karur</option>
               <option value="Krishnagiri">Krishnagiri</option>
               <option value="Madurai">Madurai</option>
			   <option value="Nagapattinam">Nagapattinam</option>
               <option value="Namakal">Namakal</option>
               <option value="Perambalur">Perambalur</option>
			   <option value="Pudukottai">Pudukottai</option>
               <option value="Ramanathapuram">Ramanathapuram</option>
               <option value="Salem">Salem</option>
			   <option value="Sivagangai">Sivagangai</option>
               <option value="Thanjavaur">Thanjavaur</option>
               <option value="Theni">Theni</option>
			   <option value="Nilgiris">Nilgiris</option>
               <option value="Thirunelveli">Thirunelveli</option>
               <option value="Thiruvallur">Thiruvallur</option>
			   <option value="Thiruvanamalai">Thiruvanamalai</option>
               <option value="Thiruvarur">Thiruvarur</option>
               <option value="Thoothukudi">Thoothukudi</option>
			   <option value="Tiruchirapalli">Tiruchirapalli</option>
               <option value="Tirupur">Tirupur</option>
               <option value="Vellore">Vellore</option>
			   <option value="Villupuram">Villupuram</option>
               <option value="Virdhunagar">Virdhunagar</option>
               </select></br></br>
		  <label>Password</label>
		  <input type="password" id="pass" name="pass" placeholder="Password">
		 <label>Confirm Password</label>
         <input type="password" id="pass" name="cpass" placeholder="Password">
		 <input type="submit" value="Submit">
		 <a href="forget.html">forget password?</a>
	 </form>
         </div>
	</center>
	<script type = "text/javascript">
	function isValid()
	{
		var usn = /[a-z][A-Z]/;
		if(login.uname.value(usn))
			document.alert("Please enter a valid user name");
	}
	</script>
	</body>
</html>
