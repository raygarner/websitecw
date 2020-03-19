<html>
<head>
        <title>Ray Garner</title>
        <LINK REL='stylesheet' TYPE='text/css' HREF='results.css'>
</head>
<body>
<h1>Movie Search Result</h1>
<a href="main.html">Return to main page</a>
<br><br><br>

<?php
$titlesearch = $_GET['title'];
$db_host = 'mysql.cs.nott.ac.uk';
$db_user = 'psyrg4'; // change me
$db_pass = 'db_pass'; // change me
$db_name = 'psyrg4'; // change me

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_errno)  die("failed to connect to database\n</body>\n</html>");

$sql="SELECT mvID,mvTitle,mvPrice,mvYear,mvGenre FROM Movie WHERE mvTitle LIKE '%$titlesearch%'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->bind_result($ID, $Title, $Price, $Year, $Genre );
?>

<table width="750" border="1" cellpadding="1" cellspacing="1">
<tr> <th>ID</th> <th>Title</th> <th>Price</th> <th>Year</th> <th>Genre</th> </tr>

<?php
while($stmt->fetch()){
  echo "<tr>";
  echo "<td>". htmlentities($ID) ."</td>";
  echo "<td>". htmlentities($Title) ."</td>";
  echo "<td>". htmlentities($Price) ."</td>";
  echo "<td>". htmlentities($Year) ."</td>";
  echo "<td>". htmlentities($Genre) ."</td>";
  echo "</tr>";
}
?>
</table>
</body>
</html>
