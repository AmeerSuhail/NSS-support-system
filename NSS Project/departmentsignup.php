<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>
POST WORKS
</title>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-black.css">
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.mainbox {
    float: right;
    background-color: green;
    width: 50%;
    border: 5px solid blue;
    padding: 25px;
    margin: 25px;
    margin-right: 300px; 
    box-shadow: 5px 6px 7px;
    padding-left: 80px;
    padding-right: 80px;
}




.leftbox {
    float: left;
    background-color: red;
    width: 15%;
    border: 5px solid black;
    padding: 25px;
    margin: 25px;
    box-shadow: 5px 6px 7px;
}

</style>
</head>
<body>



<div style="text-align: center;">
  <h2>DEPARTMENT SIGN UP</h2>
</div>









<fieldset>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<H3>
<table>
<tr>
  <td>Contact Person:</td> 
  <td><input type="text" name="work_name"></td>
</tr>
<tr>
  <td>Contact Number:</td> 
  <td><input type="text" name="duration" min="0"> </td>
</tr>
</table>
</H3>

<input type="submit" value="submit">
</form>
</fieldset>





</body>
</html>


 

