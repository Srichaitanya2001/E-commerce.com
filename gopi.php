<html>  
  <style>
     h1{
      color:red ;
      background-color:yellow ;
     }
     table{
      font-size: 18px; 
      text-align: center;
      color:red;
     }
   </style>
   <body>
<form name="raja" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
<center>
<h1> Student Attendance System</h1>
<table border="1">
<tr><td>Name :</td><td><input type="text" name="name"/></td></tr>
<tr><td>Pnumber :</td><td><input type="text" name="pnumber"/></td></tr>
<tr><td>City :</td><td><input type="text" name="city"/></td></tr>
<tr><td>Rollno :</td><td><input type="text" name="rollno"/></td></tr>
<tr><td colspan="2"><input type="submit" name="Submit" Value="Submit"/></td></tr>
</table>
</form>
</body>
</html>
<?php  
if(isset($_POST['Submit'])) 

$host = 'localhost:3306';  
$user = 'root';  
$pass = 'root';  
$dbname='raja';
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  

$name=$_POST['name'];
$pnumber=$_POST['pnumber'];
$city=$_POST['city'];
$rollno=$_POST['rollno'];

$sql = "insert into raja values('".$name."','".$pnumber."','".$city."','".$rollno."')";
echo $sql; 

if(mysqli_query($conn, $sql)){  
  echo "<br>"."inserted student data sucessfully";
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 



mysqli_close($conn);  

?>  
