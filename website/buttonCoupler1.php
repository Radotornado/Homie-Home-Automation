<?php
$file = "buttonStatus.txt";
$handle = fopen($file,'w+');
if (isset($_POST['c1_ON']))
{
$onstring = "c1_ON";
fwrite($handle,$onstring);
fclose($handle);
print "
<!DOCTYPE html>
<html >
<head>
  <meta charset='UTF-8'>
  <title>Homie Home Automation</title>
      <link rel='stylesheet' href='css/style.css'>
	  <style type='text/css'>
	 
form {
  top: 35%;
  padding: 20px 0;
  position: relative;
  z-index: 2;
}
form input:hover {
  background-color: rgba(255, 255, 255, 0.4);
}
form input:focus {
  background-color: white;
  width: 300px;
  color: #1eb676;
}
form input{
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: 0;
  background-color: white;
  border: 0;
  padding: 10px 15px;
  color: #1eb676;
  border-radius: 3px;
  width: 250px;
  cursor: pointer;
  font-size: 18px;
}
form input:hover {
  background-color: #f5f7f9;
}
form button{
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: 0;
  background-color: white;
  border: 0;
  padding: 10px 15px;
  color: #1eb676;
  border-radius: 3px;
  width: 250px;
  cursor: pointer;
  font-size: 18px;
}
form button:hover {
  background-color: #f5f7f9;
}
	  </style>
</head>

<body>
  <div class='wrapper'>
	<div class='container'>
		<h1>HOMIE</h1>
		<h2><strong>Electrical Coupler Socket 1</strong> is ON</h2>
		<br>
		<form class='form' action = 'buttonCoupler1.php' method = 'POST'>
			<input type = 'submit' class = 'buttonOn' name ='c1_ON' id='c1_ON' value = 'Coupler socket 1 ON'>
			<br><br>
			<input type = 'submit' class = 'buttonOff' name ='c1_OFF' id='c1_OFF' value = 'Coupler socket 1 OFF'>
			<br><br><br>
			<input type = 'submit' formaction = 'main.php' value = 'Home'>
		</form>
	</div>
	
	<ul class='bg-bubbles'>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

</body>
</html>



";
}
else if(isset($_POST['c1_OFF']))
{
$offstring = "c1_OFF";
fwrite($handle, $offstring);
fclose($handle);
print "
<!DOCTYPE html>
<html >
<head>
  <meta charset='UTF-8'>
  <title>Homie Home Automation</title>
      <link rel='stylesheet' href='css/style.css'>
	  <style type='text/css'>
	 
form {
  top: 35%;
  padding: 20px 0;
  position: relative;
  z-index: 2;
}
form input:hover {
  background-color: rgba(255, 255, 255, 0.4);
}
form input:focus {
  background-color: white;
  width: 300px;
  color: #1eb676;
}
form input{
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: 0;
  background-color: white;
  border: 0;
  padding: 10px 15px;
  color: #1eb676;
  border-radius: 3px;
  width: 250px;
  cursor: pointer;
  font-size: 18px;
}
form input:hover {
  background-color: #f5f7f9;
}
form button{
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: 0;
  background-color: white;
  border: 0;
  padding: 10px 15px;
  color: #1eb676;
  border-radius: 3px;
  width: 250px;
  cursor: pointer;
  font-size: 18px;
}
form button:hover {
  background-color: #f5f7f9;
}
	  </style>
</head>

<body>
  <div class='wrapper'>
	<div class='container'>
		<h1>HOMIE</h1>
		<h2><strong>Electrical Coupler Socket 1</strong> is OFF</h2>
		<br>
		<form class='form' action = 'buttonCoupler1.php' method = 'POST'>
			<input type = 'submit' class = 'buttonOn' name ='c1_ON' id='c1_ON' value = 'Coupler socket 1 ON'>
			<br><br>
			<input type = 'submit' class = 'buttonOff' name ='c1_OFF' id='c1_OFF' value = 'Coupler socket 1 OFF'>
			<br><br><br>
			<input type = 'submit' formaction = 'main.php' value = 'Home'>
		</form>
	</div>
	
	<ul class='bg-bubbles'>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

</body>
</html>



";
}


?>