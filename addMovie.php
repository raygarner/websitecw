<html>
<head>
        <title>Ray Garner</title>
        <LINK REL='stylesheet' TYPE='text/css' HREF='results.css'>
</head>
<body>
<h1>Movie added to database</h1>
<a href="main.html">Return to main page<a>
<br><br><br>

<?php
$movietitle = $_GET['title'];
$actorname = $_GET['name'];
$price = $_GET['price'];
$scenes = $_GET['scenes'];
$genre = $_GET['genre'];
$year = $_GET['year'];
$db_host = 'mysql.cs.nott.ac.uk';
$db_user = 'psyrg4';
$db_pass = 'db_pass';
$db_name = 'psyrg4';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_errno)  die("failed to connect to database\n</body>\n</html>");

//$sql="SELECT mvID,mvTitle,mvPrice,mvYear,mvGenre FROM Movie WHERE mvTitle='$titlesearch'";
//$sql="INSERT INTO Movie (actID, mvTitle) SELECT actID, '$movietitle' FROM Actor WHERE actName='$actorname'";
$sql="INSERT INTO Movie (actID, mvTitle, mvPrice, mvYear, mvGenre, mvNumScenes) SELECT actID, '$movietitle', $price, $year, '$genre', $scenes FROM Actor WHERE actName='$actorname'";
$stmt = $conn->prepare($sql);
$stmt->execute();
?>

</body>
</html>
