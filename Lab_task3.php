<!DOCTYPE html>
<html>
<body>

<h2>Registration Form</h2>
<?php
 
  $nameerror=$emailerror=$gendererror=$passworderror="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if(empty($_POST["name"]))
  {
	  $nameerror="name required";
  }
  else
  {
      $nameerror=$POST["name"];
  }
  
  if(empty($_POST["email"]))
  {
	  $emailerror="email required";
  }
  else
  {
      $emailerror=$_POST["email"];
  }
  if(empty($_POST["gender"]))
  {
	  $gendererror="gender required";
  }
  else
  {
      $gendererror=$_POST["gender"];
  }
  if(empty($_POST["password"]))
  {
	  $passworderror="password required";
  }
  else
  {
      $passworderror=$_POST["password"];
  }
}

?>


<form action="session.php" method ="post">
 
 <b>NAME: </b>
  <input type="text" name="name">
  <span type="color:blue"><?php echo $nameerror; ?><span/>
 
  <br><br>
  
 <b>EMAIL: </b>
  <input type="email" name="email">
  <span type="color:blue"><?php echo $emailerror; ?><span/>
  <br><br>
 
  
  <b>GENDER:</b>

  <input type="radio" name="gender" value="male"/>Male
  <input type="radio" name="gender" value="female"/>Female
  <input type="radio" name="gender" value="other"/>Other
  <span type="color:blue"><?php echo $gendererror; ?><span/>
  <br><br>
  
   
 <b>PASSWORD: </b>
  <input type="password" name="password">
  <span type="color:blue"><?php echo $passworderror; ?><span/>
  <br><br>
  
   <br><br><br>
  <input type="submit" value="Submit">
  <br>
  
  
 
  
  


</form>




</body>
</html>

