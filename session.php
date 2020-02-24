<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
echo $_SESSION["name"]=$_POST["name"];
echo "<br>";
echo $_SESSION["email"]=$_POST["email"];
echo "<br>";
echo $_SESSION["gender"]=$_POST["gender"];
echo "<br>";
echo $_SESSION["password"]=$_POST["password"];
echo "<br>";

?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>










  <input type="submit" value="Submit">
  

</body>
</html>
