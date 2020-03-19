<html>
<head>
        <title>Ray Garner</title>
        <LINK REL='stylesheet' TYPE='text/css' HREF='results.css'>
</head>
<body>
<h1>Actor Search Result</h1>
<a href="main.html">Return to main page</a>
<br><br><br>

<?php
$actorsearch = $_GET['name'];
$db_host = 'mysql.cs.nott.ac.uk';
$db_user = 'psyrg4'; // change me
$db_pass = 'db_pass'; // change me
$db_name = 'psyrg4'; // change me

echo $actorsearch;

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_errno)  die("failed to connect to database\n</body>\n</html>");

$sql="SELECT actName FROM Actor WHERE actName='$actorsearch'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->bind_result($Name);
?>

<table width="750" border="1" cellpadding="1" cellspacing="1">
<tr> <th>Name</th> </tr>

<?php
while($stmt->fetch()){
  echo "<tr>";
  echo "<td>". htmlentities($Name) ."</td>";
  echo "</tr>";
}
?>
</table>
</body>
</html>
